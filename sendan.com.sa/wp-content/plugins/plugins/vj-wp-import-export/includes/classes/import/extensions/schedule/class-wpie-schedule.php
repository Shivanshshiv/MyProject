<?php

namespace wpie\import\schedule;

use wpie\import\upload\url\WPIE_URL_Upload;
use wpie\import\record\WPIE_Record;
use wpie\import\upload\validate\WPIE_Upload_Validate;

if (!defined('ABSPATH')) {
    die(__("Can't load this file directly", 'vj-wp-import-export'));
}

if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-import.php')) {

    require_once(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-import.php');
}

class WPIE_Schedule_Import extends \wpie\import\WPIE_Import {

    public function __construct() {
        add_filter('cron_schedules', array(__CLASS__, 'cron_schedules'));
    }

    public static function cron_schedules($schedules = array()) {

        return array_merge(self::get_schedules(), $schedules);
    }

    public static function get_schedules() {

        return array(
                'wpie_30_min' => array(
                        'interval' => 30 * MINUTE_IN_SECONDS,
                        'display' => __('Every 30 Minutes'),
                ),
                'wpie_hourly' => array(
                        'interval' => HOUR_IN_SECONDS,
                        'display' => __('Once Hourly'),
                ),
                'wpie_twicedaily' => array(
                        'interval' => 12 * HOUR_IN_SECONDS,
                        'display' => __('Twice Daily'),
                ),
                'wpie_daily' => array(
                        'interval' => DAY_IN_SECONDS,
                        'display' => __('Once Daily'),
                ),
                'wpie_weekly' => array(
                        'interval' => WEEK_IN_SECONDS,
                        'display' => __('Once Weekly'),
                ),
                'wpie_monthly' => array(
                        'interval' => MONTH_IN_SECONDS,
                        'display' => __('Once Monthly'),
                ),
        );
    }

    public function process_import_cron($template_id = 0) {

        $template = parent::get_template_by_id($template_id);

        if ($template && isset($template->options)) {

            $options = maybe_unserialize($template->options);

            $upload_method = isset($options['wpie_file_upload_method']) ? $options['wpie_file_upload_method'] : "";

            if ($upload_method != "wpie_import_url_file_upload") {
                $options = $this->copy_template($options);
            }

            $new_template_id = parent::wpie_generate_template($options, 'schedule_import', 'draft');

            global $wpdb;

            if ($upload_method == "wpie_import_url_file_upload") {

                $upload_data = $this->process_upload_files($new_template_id, $options);

                if (is_wp_error($upload_data)) {

                    $wpdb->query($wpdb->prepare("DELETE FROM " . $wpdb->prefix . "wpie_template WHERE id = %d", $new_template_id));

                    return false;
                }
            } else {

                $process_log = isset($template->process_log) ? maybe_unserialize($template->process_log) : "";

                $records_count = isset($process_log["total"]) ? absint($process_log["total"]) : 0;

                if ($records_count == 0) {

                    $wpdb->query($wpdb->prepare("DELETE FROM " . $wpdb->prefix . "wpie_template WHERE id = %d", $new_template_id));

                    return false;
                }

                $wpdb->update($wpdb->prefix . "wpie_template", array("status" => "background", 'process_log' => maybe_serialize(array("total" => $records_count))), array('id' => $new_template_id));

                unset($process_log);
            }

            unset($options, $new_template_id);
        }
        unset($template);
    }

    public function save_import_schedule() {

        global $wpdb;

        parent::wpie_finalyze_template_data("import-draft");

        $wpie_import_interval = isset($_POST['wpie_import_interval']) ? wpie_sanitize_field($_POST['wpie_import_interval']) : "";

        $this_import_time_new = isset($_POST['wpie_interval_start_time']) ? wpie_sanitize_field($_POST['wpie_interval_start_time']) : "";

        if (!empty($this_import_time_new)) {
            $this_import_time = strtotime($this_import_time_new);
        } else {
            $this_import_time = time();
        }
        unset($this_import_time_new);

        $return_value = array();

        $wpie_import_type = isset($_POST['wpie_import_type']) ? wpie_sanitize_field($_POST['wpie_import_type']) : "";

        if ($wpie_import_interval != "" && $wpie_import_type != "") {

            $wpie_import_id = isset($_POST["wpie_import_id"]) ? absint(wpie_sanitize_field($_POST["wpie_import_id"])) : 0;

            $template_options = array();

            $process_log = "";

            if ($wpie_import_id > 0) {

                $template_data = $this->get_template_by_id($wpie_import_id);

                if ($template_data) {

                    $template_options = maybe_unserialize($template_data->options);

                    $process_log = isset($template_data->process_log) ? $template_data->process_log : "";
                }
            }

            if (!empty($template_options)) {
                $new_options = array_merge($_POST, $template_options);
            } else {
                $new_options = $_POST;
            }

            $new_options = $this->copy_template($new_options);

            $scheduled_id = parent::wpie_generate_template($new_options, 'schedule_import_template', 'completed');

            if (!empty($process_log)) {

                global $wpdb;

                $wpdb->update($wpdb->prefix . "wpie_template", array('process_log' => $process_log), array('id' => $scheduled_id));
            }

            wp_schedule_event($this_import_time, $wpie_import_interval, 'wpie_cron_schedule_import', array($scheduled_id));

            unset($scheduled_id, $wpie_import_id, $template_options, $new_options);

            $return_value['status'] = 'success';

            $return_value['message'] = __('Scheduled Saved Successfully', 'vj-wp-import-export');
        } else {

            $return_value['status'] = 'error';

            $return_value['message'] = __('Import Type is Empty', 'vj-wp-import-export');
        }

        unset($this_import_time, $wpie_import_interval, $wpie_import_type);

        echo json_encode($return_value);

        die();
    }

    private function process_upload_files($wpie_import_id = 0, $options = array()) {

        $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/url-upload/class-wpie-url-upload.php';

        if (file_exists($fileName)) {

            require_once($fileName);
        }

        $upload = new WPIE_URL_Upload();

        $file_url = isset($options["wpie_upload_final_file_url"]) ? wpie_sanitize_field($options["wpie_upload_final_file_url"]) : '';

        if (!empty($file_url)) {

            $file = $upload->wpie_download_file_from_url($wpie_import_id, $file_url);

            if (is_wp_error($file)) {
                return $file;
            } elseif (isset($file['file_list'])) {

                $template = parent::get_template_by_id($wpie_import_id);

                if ($template && isset($template->options)) {

                    $_new_options = maybe_unserialize($template->options);
                }

                if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-upload-validate.php')) {
                    require_once(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-upload-validate.php');
                }

                $data_parser = new WPIE_Upload_Validate();

                $wpie_csv_delimiter = isset($_new_options["wpie_csv_delimiter"]) ? wpie_sanitize_field($_new_options["wpie_csv_delimiter"]) : ",";

                $activeFile = isset($_new_options["activeFile"]) ? wpie_sanitize_field($_new_options["activeFile"]) : false;

                $_parse_data = $data_parser->wpie_parse_upload_data($template, $wpie_csv_delimiter, $activeFile, $wpie_import_id);

                unset($template, $data_parser, $wpie_csv_delimiter, $activeFile);

                if (is_wp_error($_parse_data)) {
                    return $_parse_data;
                }
                unset($_parse_data);

                if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-csv-chunk.php')) {
                    require_once(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-csv-chunk.php');
                }

                $chunk = new \wpie\import\chunk\WPIE_Chunk();

                $chunk->process_data($_new_options);

                unset($chunk);

                if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-record.php')) {
                    require_once(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-record.php');
                }

                $records = new WPIE_Record();

                $parse_data = $records->auto_fetch_records_by_template($_new_options);

                if (is_wp_error($parse_data)) {
                    return $parse_data;
                } else {

                    if (isset($parse_data['count']) && absint($parse_data['count']) > 0) {

                        global $wpdb;

                        $wpdb->update($wpdb->prefix . "wpie_template", array("status" => "background", 'last_update_date' => current_time('mysql'), 'process_log' => maybe_serialize(array("total" => absint($parse_data['count'])))), array('id' => $wpie_import_id));
                    }
                }
                unset($records, $parse_data, $_new_options);
            }
        }

        return true;
    }

    private function copy_template($new_options = array()) {

        $active_file = isset($new_options['activeFile']) ? $new_options['activeFile'] : "";

        if (!empty($active_file)) {

            $importFile = isset($new_options['importFile']) ? $new_options['importFile'] : "";

            if (!empty($importFile) && isset($importFile[$active_file])) {

                $new_file = $this->wpie_create_safe_dir_name($active_file);

                $is_dir_exist = wp_mkdir_p(WPIE_UPLOAD_IMPORT_DIR . "/" . $new_file);

                if ($is_dir_exist) {

                    $existing_files = $importFile[$active_file];

                    $base_dir = isset($importFile[$active_file]['baseDir']) ? $importFile[$active_file]['baseDir'] : "";

                    if (!empty($base_dir)) {

                        $new_files = array();

                        if (!empty($existing_files)) {

                            foreach ($existing_files as $_k => $_v) {
                                $new_files[$_k] = str_replace($base_dir, $new_file, $_v);
                            }
                        }

                        $new_options['importFile'][$active_file] = $new_files;

                        $this->wpie_copy_dir(WPIE_UPLOAD_IMPORT_DIR . "/" . $base_dir, WPIE_UPLOAD_IMPORT_DIR . "/" . $new_file);
                    }
                }
            }
        }

        return $new_options;
    }

    private function wpie_copy_dir($source, $dest, $permissions = 0755) {
        // Check for symlinks
        if (is_link($source)) {
            return symlink(readlink($source), $dest);
        }

        // Simple copy for a file
        if (is_file($source)) {
            return copy($source, $dest);
        }

        // Make destination directory
        if (!is_dir($dest)) {
            mkdir($dest, $permissions);
        }

        // Loop through the folder
        $dir = dir($source);

        while (false !== $entry = $dir->read()) {
            // Skip pointers
            if ($entry == '.' || $entry == '..') {
                continue;
            }

            // Deep copy directories
            $this->wpie_copy_dir("$source/$entry", "$dest/$entry", $permissions);
        }

        // Clean up
        $dir->close();

        return true;
    }

    private function wpie_create_safe_dir_name($str = "", $separator = 'dash', $lowercase = true) {

        if ($separator == 'dash') {
            $search = '_';
            $replace = '-';
        } else {
            $search = '-';
            $replace = '_';
        }

        $trans = array(
                '&\#\d+?;' => '',
                '&\S+?;' => '',
                '\s+' => $replace,
                '[^a-z0-9\-\._]' => '',
                $search . '+' => $replace,
                $search . '$' => $replace,
                '^' . $search => $replace,
                '\.+$' => ''
        );

        $str = strip_tags($str);

        foreach ($trans as $key => $val) {
            $str = preg_replace("#" . $key . "#i", $val, $str);
        }

        if ($lowercase === true) {
            $str = strtolower($str);
        }

        unset($search, $replace, $trans);

        return md5(trim(wp_unslash($str)) . time());
    }

}
