<?php

namespace wpie\import\images;

if (!defined('ABSPATH')) {
        die(__("Can't load this file directly", 'vj-wp-import-export'));
}

if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-import-base.php')) {

        require_once(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-import-base.php');
}

if (file_exists(ABSPATH . 'wp-admin/includes/image.php')) {
        require_once(ABSPATH . 'wp-admin/includes/image.php');
}

class WPIE_Images extends \wpie\import\base\WPIE_Import_Base {

        private $target_dir;
        private $images        = array();
        private $attach;
        private $gallary       = array();
        private $image_options = array();

        public function __construct($item_id = 0, $is_new_item = true, $wpie_import_option = array(), $wpie_import_record = array()) {

                $this->item_id = $item_id;

                $this->is_new_item = $is_new_item;

                $this->wpie_import_option = $wpie_import_option;

                $this->wpie_import_record = $wpie_import_record;
        }

        public function prepare_images() {

                if ($this->item_id) {

                        $wp_uploads = wp_upload_dir();

                        $this->target_dir = $wp_uploads['path'];

                        $this->prepare_image_option();

                        if (!$this->is_new_item && wpie_sanitize_field($this->get_field_value('wpie_item_update_images')) == "all") {
                                $this->prepare_old_attch();
                        }

                        $image_option = wpie_sanitize_field($this->get_field_value('wpie_item_image_option', true));

                        switch ($image_option) {
                                case "media_library":
                                        $this->prepare_image_from_media_library();
                                        break;
                                case "local_images":
                                        $this->prepare_image_from_local();
                                        break;
                                default:
                                        $this->prepare_image_from_url();
                                        break;
                        }

                        if (!$this->is_new_item && wpie_sanitize_field($this->get_field_value('wpie_item_update_images')) == "all") {
                                $this->remove_old_attch("images");
                        }

                        $this->set_gallary_images();

                        unset($wp_uploads, $image_option);
                }

                return array("as_draft" => $this->as_draft, "import_log" => $this->import_log);
        }

        private function is_search_existing() {

                return wpie_sanitize_field($this->get_field_value('wpie_item_search_existing_images', true)) == 1;
        }

        private function prepare_image_from_media_library() {

                $image_media_data = wpie_sanitize_textarea($this->get_field_value('wpie_item_image_media_library'));

                if (empty($image_media_data)) {
                        return true;
                }

                $image_data = explode("\n", $image_media_data);

                if (!isset($image_data[1])) {

                        $image_delim = wpie_sanitize_field($this->get_field_value('wpie_item_image_media_library_delim'));

                        $image_delim = empty($image_delim) ? "|" : $image_delim;

                        $image_data = explode($image_delim, $image_media_data);

                        unset($image_delim);
                }

                if (!empty($image_data) && is_array($image_data)) {

                        foreach ($image_data as $index => $image) {

                                if (empty($image)) {
                                        continue;
                                }

                                $attch_image = $this->wpie_get_image_from_gallery($image);

                                if (is_wp_error($attch_image)) {

                                        $this->set_as_draft();

                                        $this->import_log[] = '<strong>' . __('Warning', 'vj-wp-import-export') . '</strong> : ' . $attch_image->get_error_message();
                                } elseif (!empty($attch_image) && isset($attch_image->ID)) {

                                        $this->images[] = absint($attch_image->ID);

                                        $this->wpie_set_image_meta(absint($attch_image->ID), $index);
                                }

                                unset($attch_id);
                        }
                }

                unset($url_data, $image_data);
        }

        private function prepare_image_from_local() {

                $image_local_data = wpie_sanitize_textarea($this->get_field_value('wpie_item_image_local'));

                if (empty($image_local_data)) {
                        return true;
                }

                $image_data = explode("\n", $image_local_data);

                if (!isset($image_data[1])) {

                        $image_delim = wpie_sanitize_field($this->get_field_value('wpie_item_image_local_delim'));

                        $image_delim = empty($image_delim) ? "|" : $image_delim;

                        $image_data = explode($image_delim, $image_local_data);

                        unset($image_delim);
                }

                if (!empty($image_data) && is_array($image_data)) {

                        foreach ($image_data as $index => $image) {

                                if (empty($image)) {
                                        continue;
                                }
                                $attch_id = $this->wpie_get_image_from_local($image);

                                if (is_wp_error($attch_id)) {

                                        $this->set_as_draft();

                                        $this->import_log[] = '<strong>' . __('Warning', 'vj-wp-import-export') . '</strong> : ' . $attch_id->get_error_message();
                                } elseif (is_numeric($attch_id)) {

                                        $this->images[] = absint($attch_id);

                                        $this->wpie_set_image_meta(absint($attch_id), $index);
                                }

                                unset($attch_id);
                        }
                }

                unset($url_data, $image_data);
        }

        private function prepare_image_from_url() {

                $url_data = wpie_sanitize_textarea($this->get_field_value('wpie_item_image_url'));

                if (empty($url_data)) {
                        return true;
                }

                $image_data = explode("\n", $url_data);

                if (!isset($image_data[1])) {

                        $image_delim = wpie_sanitize_field($this->get_field_value('wpie_item_image_url_delim'));

                        $image_delim = empty($image_delim) ? "|" : $image_delim;

                        $image_data = explode($image_delim, $url_data);

                        unset($image_delim);
                }

                if (!empty($image_data) && is_array($image_data)) {

                        foreach ($image_data as $index => $image) {

                                if (empty($image)) {
                                        continue;
                                }

                                $attch_id = $this->wpie_get_image_from_url($image);

                                if (is_wp_error($attch_id)) {

                                        $this->set_as_draft();

                                        $this->import_log[] = '<strong>' . __('Warning', 'vj-wp-import-export') . '</strong> : ' . $attch_id->get_error_message();
                                } elseif (is_numeric($attch_id)) {

                                        $this->images[] = absint($attch_id);

                                        $this->wpie_set_image_meta(absint($attch_id), $index);
                                }

                                unset($attch_id);
                        }
                }

                unset($url_data, $image_data);
        }

        private function prepare_image_option() {

                $this->prepare_image_meta();

                $this->image_options = array();

                $this->image_options['new_name'] = array();

                if (absint(wpie_sanitize_field($this->get_field_value('wpie_item_image_rename', true))) == 1) {

                        $new_names = wpie_sanitize_field($this->get_field_value('wpie_item_image_new_name'));

                        if (empty($new_names)) {

                                $this->image_options['new_name'] = explode(",", $new_names);
                        }
                        unset($new_names);
                }

                $this->image_options['new_ext'] = array();

                if (absint(wpie_sanitize_field($this->get_field_value('wpie_item_change_ext', true))) == 1) {

                        $new_ext = wpie_sanitize_field($this->get_field_value('wpie_item_new_ext'));

                        if (empty($new_ext)) {

                                $this->image_options['new_ext'] = explode(",", $new_ext);
                        }
                        unset($new_ext);
                }
        }

        private function prepare_image_meta() {

                $this->image_meta = array();

                $this->image_meta['title'] = array();

                if (absint(wpie_sanitize_field($this->get_field_value('wpie_item_set_image_meta_title', true))) == 1) {

                        $title = wpie_sanitize_textarea($this->get_field_value('wpie_item_image_meta_title'));

                        $data = explode("\n", $title);

                        if (empty($data)) {

                                $delim = wpie_sanitize_field($this->get_field_value('wpie_item_image_meta_title_delim'));

                                $this->image_meta['title'] = explode($delim != "" ? $delim : ",", $title);

                                unset($delim);
                        }
                        unset($data, $title);
                }

                $this->image_meta['caption'] = array();

                if (absint(wpie_sanitize_field($this->get_field_value('wpie_item_set_image_meta_caption', true))) == 1) {

                        $cap = wpie_sanitize_textarea($this->get_field_value('wpie_item_image_meta_caption'));

                        $data = explode("\n", $cap);

                        if (empty($data)) {

                                $delim = wpie_sanitize_field($this->get_field_value('wpie_item_image_meta_caption_delim'));

                                $this->image_meta['caption'] = explode($delim != "" ? $delim : ",", $cap);

                                unset($delim);
                        }
                        unset($data, $cap);
                }

                $this->image_meta['alt'] = array();

                if (absint(wpie_sanitize_field($this->get_field_value('wpie_item_set_image_meta_alt_text', true))) == 1) {

                        $alt = wpie_sanitize_textarea($this->get_field_value('wpie_item_image_meta_alt_text'));

                        $data = explode("\n", $alt);

                        if (empty($data)) {

                                $delim = wpie_sanitize_field($this->get_field_value('wpie_item_image_meta_alt_text_delim'));

                                $this->image_meta['caption'] = explode($delim != "" ? $delim : ",", $alt);

                                unset($delim);
                        }
                        unset($alt, $data);
                }

                $this->image_meta['desc'] = array();

                if (absint(wpie_sanitize_field($this->get_field_value('wpie_item_set_image_meta_desc', true))) == 1) {

                        $desc = wpie_sanitize_textarea($this->get_field_value('wpie_item_image_meta_desc'));

                        $data = explode("\n", $desc);

                        if (empty($data)) {

                                $delim = wpie_sanitize_field($this->get_field_value('wpie_item_image_meta_desc_delim'));

                                $this->image_meta['desc'] = explode($delim != "" ? $delim : ",", $desc);

                                unset($delim);
                        }

                        unset($desc, $data);
                }
        }

        private function wpie_set_image_meta($attch_id = 0, $index = 0) {

                $update_attch_meta = array();

                if (isset($this->image_meta['title'][$index])) {

                        $update_attch_meta['post_title'] = $this->image_meta['title'][$index];
                }
                if (isset($this->image_meta['caption'][$index])) {

                        $update_attch_meta['post_excerpt'] = $this->image_meta['caption'][$index];
                }
                if (isset($this->image_meta['alt'][$index])) {

                        update_post_meta($attch_id, '_wp_attachment_image_alt', $this->image_meta['alt'][$index]);
                }
                if (isset($this->image_meta['desc'][$index])) {

                        $update_attch_meta['post_content'] = $this->image_meta['desc'][$index];
                }

                if (!empty($update_attch_meta)) {

                        global $wpdb;

                        $wpdb->update($wpdb->posts, $update_attch_meta, array('ID' => $attch_id));
                }

                unset($update_attch_meta);
        }

        private function wpie_get_image_from_gallery($image_name = "", $attch_type = "image") {

                if (empty($image_name)) {
                        return false;
                }
                global $wpdb;

                $original_image_name = $image_name;

                $attch = '';

                $attachment_metas = $wpdb->get_results($wpdb->prepare("SELECT * FROM " . $wpdb->postmeta . " WHERE meta_key = %s AND (meta_value = %s OR meta_value LIKE %s);", '_wp_attached_file', $image_name, "%/" . $image_name));

                if (!empty($attachment_metas)) {

                        foreach ($attachment_metas as $attachment_meta) {
                                $attch = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . $wpdb->posts . " WHERE ID = %d", $attachment_meta->post_id));
                                if (!empty($attch)) {
                                        break;
                                }
                        }
                }

                if (empty($attch)) {
                        $attachment_metas = $wpdb->get_results($wpdb->prepare("SELECT * FROM " . $wpdb->postmeta . " WHERE meta_key = %s AND (meta_value = %s OR meta_value LIKE %s);", '_wp_attached_file', $image_name, "%/" . $image_name));

                        if (!empty($attachment_metas)) {
                                foreach ($attachment_metas as $attachment_meta) {
                                        $attch = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . $wpdb->posts . " WHERE ID = %d", $attachment_meta->post_id));
                                        if (!empty($attch)) {
                                                break;
                                        }
                                }
                        }
                }
                unset($attachment_metas);

                if (empty($attch)) {

                        $wp_filetype = wp_check_filetype(basename($image_name), NULL);

                        if (!empty($wp_filetype['type'])) {
                                $attch = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . $wpdb->posts . " WHERE (post_title = %s OR post_title = %s OR post_name = %s) AND post_type = %s AND post_mime_type = %s;", $image_name, preg_replace('/\\.[^.\\s]{3,4}$/', '', $image_name), $image_name, "attachment", $wp_filetype['type']));
                        }

                        if (empty($attch) && !empty($wp_filetype['type'])) {

                                $attachment_title = explode(".", $image_name);

                                if (is_array($attachment_title) && count($attachment_title) > 1) {
                                        array_pop($attachment_title);
                                }

                                $image_name = implode(".", $attachment_title);

                                unset($attachment_title);

                                $attch = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . $wpdb->posts . " WHERE (post_title = %s OR post_title = %s OR post_name = %s) AND post_type = %s AND post_mime_type LIKE %s;", $image_name, preg_replace('/\\.[^.\\s]{3,4}$/', '', $image_name), $image_name, "attachment", $wp_filetype['type']));
                        }
                        unset($wp_filetype);
                }
                unset($image_name);

                if (empty($attch) && file_exists($this->target_dir . "/" . $original_image_name)) {
                        if ($attch_type == 'image' && ( $img_meta = wp_read_image_metadata($this->target_dir . "/" . $original_image_name))) {
                                if (trim($img_meta['title']) && !is_numeric(sanitize_title($img_meta['title']))) {
                                        $img_title = $img_meta['title'];
                                        $attch     = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . $wpdb->posts . " WHERE post_title = %s AND post_type = %s AND post_mime_type LIKE %s;", $img_title, "attachment", "image%"));
                                        unset($img_title);
                                }
                                unset($img_meta);
                        }
                        if (empty($attch) && file_exists($this->target_dir . "/" . $original_image_name)) {
                                unlink($this->target_dir . "/" . $original_image_name);
                        }
                }

                if (empty($attch)) {
                        return new \WP_Error('wpie_import_error', __('Image Upload failed', 'vj-wp-import-export'));
                } else {

                        return apply_filters('wpie_get_image_from_gallery', $attch, $original_image_name, $this->target_dir);
                }
        }

        private function wpie_get_image_from_local($image_name = "") {

                if ((!wp_is_writable($this->target_dir)) || empty($image_name)) {
                        return;
                }

                $file = WPIE_UPLOAD_TEMP_DIR . "/" . $image_name;

                $filename = $image_name;

                if ($this->is_search_existing()) {

                        $attch_image = $this->wpie_get_image_from_gallery($filename);

                        if (!is_wp_error($attch_image) && isset($attch_image->ID)) {
                                return $attch_image->ID;
                        }
                        unset($attch_image);
                }

                $file_info = pathinfo($filename);

                $rename = wpie_sanitize_field($this->get_field_value('wpie_item_image_rename', true));

                if ($rename == 1) {

                        $new_filename = wpie_sanitize_field($this->get_field_value('wpie_item_image_new_name'));

                        if (!empty($new_filename)) {
                                $filename = sanitize_file_name($new_filename . '.' . $file_info['extension']);
                        }
                        unset($new_filename);
                }

                unset($rename);

                $change_ext = wpie_sanitize_field($this->get_field_value('wpie_item_change_ext'));

                if ($change_ext == 1) {

                        $new_file_ext = wpie_sanitize_field($this->get_field_value('wpie_item_new_ext'));

                        if (!empty($new_file_ext)) {

                                $filename = sanitize_file_name($file_info['filename'] . '.' . $new_extension);
                        }
                        unset($new_file_ext);
                }

                $upload_file = wp_upload_bits($filename, null, file_get_contents($file));

                unset($file, $file_info, $change_ext);

                if (!$upload_file['error']) {

                        $wp_filetype = wp_check_filetype($filename, null);

                        $attachment = array(
                                'post_mime_type' => $wp_filetype['type'],
                                'post_parent'    => $this->item_id,
                                'post_title'     => preg_replace('/\.[^.]+$/', '', $filename),
                                'post_content'   => '',
                                'post_status'    => 'inherit',
                                'post_author'    => $this->get_user_id()
                        );

                        $attachment_id = wp_insert_attachment($attachment, $upload_file['file'], $this->item_id);

                        if (!is_wp_error($attachment_id) && absint($attachment_id) > 0) {

                                $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload_file['file']);

                                wp_update_attachment_metadata($attachment_id, $attachment_data);

                                unset($attachment_data);
                        }

                        unset($attachment, $wp_filetype, $upload_file, $filename);

                        return $attachment_id;
                }

                unset($upload_file, $filename);

                return new \WP_Error('wpie_import_error', __('Image Upload failed', 'vj-wp-import-export'));
        }

        private function wpie_get_image_from_url($image_url = "") {

                if (empty($image_url)) {
                        return new \WP_Error('wpie_import_error', __('Empty Image URL', 'vj-wp-import-export'));
                }

                $filename = basename($image_url);

                if ($this->is_search_existing()) {

                        $attch_image = $this->wpie_get_image_from_gallery($filename);

                        if (!is_wp_error($attch_image) && isset($attch_image->ID)) {

                                return $attch_image->ID;
                        }
                        unset($attch_image);
                }

                if (file_exists(ABSPATH . 'wp-admin/includes/media.php')) {
                        require_once(ABSPATH . 'wp-admin/includes/media.php');
                }
                if (file_exists(ABSPATH . 'wp-admin/includes/file.php')) {
                        require_once(ABSPATH . 'wp-admin/includes/file.php');
                }

                $wpie_attch_id = media_sideload_image($image_url, $this->item_id, '', 'id');

                unset($image_url, $filename);

                return $wpie_attch_id;
        }

        private function prepare_old_attch() {
                $this->attach = get_posts(array('post_parent' => $this->item_id, 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, "fields" => "ids"));
        }

        private function remove_old_attch($type = 'images') {

                if ($type == 'images' && has_post_thumbnail($this->item_id)) {
                        delete_post_thumbnail($this->item_id);
                }

                $ids = array();

                if (!empty($this->attach)) {

                        $keep_images = (wpie_sanitize_field($this->get_field_value('wpie_item_keep_images', true)) == 1);

                        $attachments = array_diff($this->attach, $this->images);

                        if (!empty($attachments)) {

                                foreach ($attachments as $attach) {

                                        if (($type == 'files' && !wp_attachment_is_image($attach)) || ($type == 'images' && wp_attachment_is_image($attach))) {

                                                if ($keep_images === false) {
                                                        wp_delete_attachment($attach, true);
                                                } else {
                                                        $ids[] = $attach;
                                                }
                                        }
                                }
                        }
                        unset($attachments, $keep_images);

                        global $wpdb;

                        if (!empty($ids)) {

                                $ids_string = implode(',', $ids);

                                $wpdb->query("UPDATE $wpdb->posts SET post_parent = 0 WHERE post_type = 'attachment' AND ID IN ( $ids_string )");

                                unset($ids_string);

                                foreach ($ids as $att_id) {
                                        clean_attachment_cache($att_id);
                                }
                        }
                }

                return $ids;
        }

        private function set_as_draft() {
                if (!$this->as_draft && absint(wpie_sanitize_field($this->get_field_value('wpie_item_unsuccess_set_draft'))) == "1") {
                        $this->as_draft = true;
                }
        }

        private function set_gallary_images() {

                $this->gallary = $this->images;

                if (!empty($this->images) && absint(wpie_sanitize_field($this->get_field_value('wpie_item_first_imaege_is_featured'))) == "1") {

                        $image_id = array_shift($this->gallary);

                        $thumbnail_id = set_post_thumbnail($this->item_id, $image_id);

                        if ($thumbnail_id == false) {

                                $this->set_as_draft();

                                $this->import_log[] = '<strong>' . __('Warning', 'vj-wp-import-export') . '</strong> : ' . __('Error on try to set Featured Image', 'vj-wp-import-export');
                        }
                        unset($image_id, $thumbnail_id);
                }
        }

        public function __destruct() {
                foreach ($this as $key => $value) {
                        unset($this->$key);
                }
        }

}
