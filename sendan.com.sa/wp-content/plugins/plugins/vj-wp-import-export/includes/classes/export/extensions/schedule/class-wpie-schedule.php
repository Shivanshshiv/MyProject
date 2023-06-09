<?php

namespace wpie\export\schedule;

use wpie\export\bg\WPIE_BG;

if (!defined('ABSPATH')) {
    die(__("Can't load this file directly", 'vj-wp-import-export'));
}

if (file_exists(WPIE_EXPORT_CLASSES_DIR . '/class-wpie-export.php')) {

    require_once(WPIE_EXPORT_CLASSES_DIR . '/class-wpie-export.php');
}

class WPIE_Schedule_Export extends \wpie\export\WPIE_Export {

    public function __construct() {

        add_action('init', array($this, 'init_bg_export'));

        add_action('wp_ajax_wpie_export_save_schedule_data', array($this, 'save_export_schedule'));

        add_filter('wpie_add_export_extension_files', array($this, 'get_schedule_view'), 20, 1);

        add_filter('wpie_manage_export_tab_files', array($this, 'get_manage_schedule_tab'));

        add_filter('cron_schedules', array(__CLASS__, 'cron_schedules'));

        add_action('wpie_cron_schedule_export', array($this, 'prepare_export_cron'), 10, 1);

        add_action('wpie_export_complete', array($this, 'process_schedule_tasks'), 100, 3);
    }

    public static function cron_schedules($schedules = array()) {

        return array_merge(self::get_schedules(), $schedules);
    }

    public static function get_schedules() {

        return array(
                'wpie_30_min' => array(
                        'interval' => MINUTE_IN_SECONDS,
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

    public function process_schedule_tasks($export_id = 0, $opration = "export", $export_option = []) {

        if ($opration === "schedule_export") {

            $this->process_export_file($export_id);

            $this->send_notification($export_option);
        }
    }

    private function send_notification($template_options = []) {

        if (isset($template_options['wpie_scheduled_send_email']) && $template_options['wpie_scheduled_send_email'] == 1 && isset($template_options['wpie_scheduled_email_recipient']) && !empty($template_options['wpie_scheduled_email_recipient'])) {

            $filename = isset($template_options['fileName']) ? $template_options['fileName'] : "";

            $filedir = isset($template_options['fileDir']) ? $template_options['fileDir'] : "";

            $attachments = array(WPIE_UPLOAD_EXPORT_DIR . '/' . $filedir . '/' . $filename);

            $recipient = explode(',', $template_options['wpie_scheduled_email_recipient']);

            $subject = isset($template_options['wpie_scheduled_email_subject']) ? wpie_sanitize_field($template_options['wpie_scheduled_email_subject']) : "";

            $message = isset($template_options['wpie_scheduled_email_msg']) ? wpie_sanitize_textarea($template_options['wpie_scheduled_email_msg']) : "";

            $admin_email = get_option('admin_email');

            $headers = array();

            $headers[] = 'From: "' . get_option('blogname') . '" <' . $admin_email . '>';

            $headers[] = 'Reply-To: ' . $admin_email;

            $headers[] = 'Content-Type:text/html; charset="' . get_option('blog_charset') . '"';

            $this->send_mail($recipient, $subject, $message, $headers, $attachments);

            unset($filename, $filedir, $attachments, $recipient, $subject, $message, $admin_email, $headers);
        }
    }

    private function send_mail($recipient, $subject, $message, $header, $attachments) {

        if (!wp_mail($recipient, $subject, $message, $header, $attachments)) {

            $semi_rand = md5(time());

            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

            $headers = 'From: ' . get_option('blogname') . ' <' . $admin_email . '>' . '\n';

            $date = date("Y-m-d H:i:s");

            $headers .= "\n" . "Date:$date " . "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

            $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";

            $message .= "--{$mime_boundary}\n";

            if (count($attachments) > 0) {

                foreach ($attachments as $filename) {

                    $attachmnt = chunk_split(base64_encode(file_get_contents($filename)));

                    $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"" . basename($filename) . "\"\n" . "Content-Disposition: attachment;\n" . " filename=\"" . basename($filename) . "\"\n" . "Content-Transfer-Encoding: base64\n\n" . $attachmnt . "\n\n";

                    $message .= "--{$mime_boundary}\n";
                }
            }

            mail($recipient, $subject, $message, $headers);

            unset($semi_rand, $mime_boundary, $headers, $date, $message);
        }
    }

    public function get_manage_schedule_tab($files = array()) {

        $fileName = WPIE_EXPORT_CLASSES_DIR . '/extensions/schedule/wpie-manage-schedule.php';

        if (!in_array($fileName, $files)) {

            $files[] = $fileName;
        }

        return $files;
    }

    public function get_schedule_view($files = array()) {

        $fileName = WPIE_EXPORT_CLASSES_DIR . '/extensions/schedule/wpie-schedule-view.php';

        if (!in_array($fileName, $files)) {
            $files[] = $fileName;
        }

        return $files;
    }

    public function prepare_export_cron($template_id = "") {

        $template = parent::get_template_by_id($template_id);

        if ($template && isset($template->options)) {

            $options = isset($template->options) ? maybe_unserialize($template->options) : array();

            $export_type = isset($template->opration_type) ? $template->opration_type : "post";

            $options['total'] = $this->init_export($export_type, "count", $options);

            parent::generate_template($options, 'schedule_export', 'background');

            unset($options);
        }
        unset($template);
    }

    public function save_export_schedule() {

        global $wpdb;

        $wpie_export_interval = isset($_POST['wpie_export_interval']) ? wpie_sanitize_field($_POST['wpie_export_interval']) : "";

        $this_export_time_new = isset($_POST['wpie_interval_start_time']) ? wpie_sanitize_field($_POST['wpie_interval_start_time']) : "";

        if (!empty($this_export_time_new)) {
            $this_export_time = strtotime($this_export_time_new);
        } else {
            $this_export_time = time();
        }
        unset($this_export_time_new);

        $return_value = array();

        $wpie_export_type = isset($_POST['wpie_export_type']) ? wpie_sanitize_field($_POST['wpie_export_type']) : "";

        if ($wpie_export_interval != "" && $wpie_export_type != "") {

            $scheduled_id = parent::generate_template($_POST, 'schedule_export_template', 'completed');

            wp_schedule_event($this_export_time, $wpie_export_interval, 'wpie_cron_schedule_export', array($scheduled_id));

            unset($scheduled_id);

            $return_value['status'] = 'success';

            $return_value['message'] = __('Scheduled Saved Successfully', 'vj-wp-import-export');
        } else {

            $return_value['status'] = 'error';

            $return_value['message'] = __('Scheduled Saved Successfully', 'vj-wp-import-export');
        }

        unset($this_export_time, $wpie_export_type, $wpie_export_interval);

        echo json_encode($return_value);

        die();
    }

    public function init_bg_export() {

        if (!class_exists('\wpie\export\bg\WPIE_BG')) {

            $fileName = WPIE_EXPORT_CLASSES_DIR . '/extensions/bg/class-wpie-bg.php';

            if (file_exists($fileName)) {

                require_once($fileName);

                $bg_export = new WPIE_BG();

                $bg_export->init_bg_export("schedule_export");

                unset($bg_export);
            }
        }
    }

}

new WPIE_Schedule_Export();
