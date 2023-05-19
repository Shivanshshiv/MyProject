<?php

namespace wpie\import\upload\ftp;

use WP_Error;
use WP_Filesystem_FTPext;

if (!defined('ABSPATH')) {
    die(__("Can't load this file directly", 'vj-wp-import-export'));
}

if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-upload.php')) {
    require_once(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-upload.php');
}

class WPIE_FTP_SFTP extends \wpie\import\upload\WPIE_Upload {

    public function __construct() {
        
    }

    public function wpie_download_file_from_ftp() {

        if (!is_dir(WPIE_UPLOAD_IMPORT_DIR) || !wp_is_writable(WPIE_UPLOAD_IMPORT_DIR)) {

            return new \WP_Error('wpie_import_error', __('Uploads folder is not writable', 'vj-wp-import-export'));
        }

        if (!class_exists('WP_Filesystem_Base')) {
            require_once( ABSPATH . 'wp-admin/includes/class-wp-filesystem-base.php' );
        }

        if (!class_exists('WP_Filesystem_FTPext')) {
            require_once( ABSPATH . 'wp-admin/includes/class-wp-filesystem-ftpext.php' );
        }

        if (!defined('FS_CONNECT_TIMEOUT')) {
            define('FS_CONNECT_TIMEOUT', 300);
        }

        $wpie_import_id = isset($_POST['wpie_import_id']) ? intval(wpie_sanitize_field($_POST['wpie_import_id'])) : 0;

        $hostname = isset($_POST["hostname"]) ? wpie_sanitize_field($_POST["hostname"]) : '';

        $host_port = isset($_POST["host_port"]) && absint($_POST["host_port"]) > 0 ? absint(wpie_sanitize_field($_POST["host_port"])) : 21;

        $host_username = isset($_POST["username"]) ? wpie_sanitize_field($_POST["username"]) : '';

        $host_password = isset($_POST["password"]) ? wpie_sanitize_field($_POST["password"]) : '';

        $host_path = isset($_POST["host_path"]) ? wpie_sanitize_field($_POST["host_path"]) : '';

        $connection_arguments = array(
            'port' => $host_port,
            'hostname' => $hostname,
            'username' => $host_username,
            'password' => $host_password,
        );

        unset($host_port, $hostname, $host_username, $host_password);

        $connection = new \WP_Filesystem_FTPext($connection_arguments);

        $connected = $connection->connect();

        unset($connection_arguments);

        if (!$connected) {

            unset($connected, $wpie_import_id, $host_path, $connection);

            return new \WP_Error('wpie_import_error', __('FTP Connection Error', 'vj-wp-import-export'));
        }
        unset($connected);

        if (!$connection->is_file($host_path)) {
            unset($wpie_import_id, $host_path, $connection);

            return new \WP_Error('wpie_import_error', __('File Not Found', 'vj-wp-import-export'));
        }

        $remote_contents = $connection->get_contents($host_path);

        unset($connection);

        if (empty($remote_contents)) {

            unset($wpie_import_id, $remote_contents);

            return new \WP_Error('wpie_import_error', __('File is Empty', 'vj-wp-import-export'));
        }

        $fileName = basename($host_path);

        $newfiledir = parent::wpie_create_safe_dir_name($fileName);

        wp_mkdir_p(WPIE_UPLOAD_IMPORT_DIR . "/" . $newfiledir);

        wp_mkdir_p(WPIE_UPLOAD_IMPORT_DIR . "/" . $newfiledir . "/original");

        wp_mkdir_p(WPIE_UPLOAD_IMPORT_DIR . "/" . $newfiledir . "/parse");

        wp_mkdir_p(WPIE_UPLOAD_IMPORT_DIR . "/" . $newfiledir . "/parse/chunks");

        $filePath = WPIE_UPLOAD_IMPORT_DIR . "/" . $newfiledir . "/original/" . $fileName;

        chmod(WPIE_UPLOAD_IMPORT_DIR . "/" . $newfiledir . "/original/", 0755);

        if (!wp_is_writable(WPIE_UPLOAD_IMPORT_DIR . "/" . $newfiledir) || false === file_put_contents($filePath, $remote_contents)) {

            if (file_exists($filePath)) {
                unlink($filePath);
            }
            unset($fileName, $newfiledir, $filePath, $remote_contents, $wpie_import_id);

            return new \WP_Error('wpie_import_error', __('Uploads folder is not writable', 'vj-wp-import-export'));
        }

        unset($filePath, $remote_contents);

        return parent::wpie_manage_import_file($fileName, $newfiledir, $wpie_import_id);
    }

    public function __destruct() {
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
    }

}
