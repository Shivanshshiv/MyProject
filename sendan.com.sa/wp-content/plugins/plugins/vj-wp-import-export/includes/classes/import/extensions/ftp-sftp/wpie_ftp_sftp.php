<?php

if (!defined('ABSPATH')) {
    die(__("Can't load this file directly", 'vj-wp-import-export'));
}

class WPIE_FTP_SFTP_Extension {

    public function __construct() {
        add_filter('wpie_import_upload_sections', array($this, 'get_ftp_upload_views'), 10, 1);

        add_action('wp_ajax_wpie_import_upload_file_from_ftp', array($this, 'upload_file_from_ftp'));
    }

    public function get_ftp_upload_views($wpie_sections = array()) {

        $wpie_sections["wpie_import_ftp_file_upload"] = array(
            "label" => __("Upload From FTP/SFTP", 'vj-wp-import-export'),
            "icon" => 'fas fa-cloud-upload-alt',
            "view" => WPIE_IMPORT_CLASSES_DIR . "/extensions/ftp-sftp/wpie-ftp-sftp-view.php",
        );

        return $wpie_sections;
    }

    public function upload_file_from_ftp() {

        $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/ftp-sftp/class-ftp-sftp.php';

        if (file_exists($fileName)) {

            require_once($fileName);
        }
        $upload = new \wpie\import\upload\ftp\WPIE_FTP_SFTP();

        $file = $upload->wpie_download_file_from_ftp();

        unset($fileName, $upload);

        $return_value = array('status' => 'error');

        if (is_wp_error($file)) {
            $return_value['message'] = $file->get_error_message();
        } elseif (empty($file)) {
            $return_value['erorr_message'] = __('Failed to upload files', 'vj-wp-import-export');
        } elseif ($file == "processing") {
            $return_value['status'] = 'success';
            $return_value['message'] = 'processing';
        } else {

            $return_value['file_list'] = isset($file['file_list']) ? $file['file_list'] : array();

            $return_value['file_count'] = count($return_value['file_list']);

            $return_value['wpie_import_id'] = isset($file['wpie_import_id']) ? $file['wpie_import_id'] : 0;

            $return_value['file_name'] = isset($file['file_name']) ? $file['file_name'] : "";

            $return_value['file_size'] = isset($file['file_size']) ? $file['file_size'] : "";

            $return_value['status'] = 'success';
        }

        echo json_encode($return_value);

        die();
    }

}

new WPIE_FTP_SFTP_Extension();
