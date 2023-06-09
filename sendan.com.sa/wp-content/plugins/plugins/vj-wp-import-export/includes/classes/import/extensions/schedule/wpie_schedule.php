<?php

if (!defined('ABSPATH')) {
    die(__("Can't load this file directly", 'vj-wp-import-export'));
}

class WPIE_Schedule_Import_Extension {

    public function __construct() {

        add_action('wp_ajax_wpie_save_import_scheduled', array($this, 'save_schedule'));

        add_filter('wpie_add_import_extension_file', array($this, 'get_schedule_view'), 10, 1);

        add_action('wpie_cron_schedule_import', array($this, 'prepare_import_cron'), 10, 1);

        add_action('wpie_manage_import_tab_files', array($this, 'get_manage_schedule_tab'), 10, 1);
    }

    public function prepare_import_cron($template_id = 0) {

        $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/schedule/class-wpie-schedule.php';

        if (file_exists($fileName)) {

            require_once($fileName);

            $schedule = new \wpie\import\schedule\WPIE_Schedule_Import();

            $schedule->process_import_cron($template_id);

            unset($schedule);
        }
        unset($fileName);
    }

    public function save_schedule() {

        $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/schedule/class-wpie-schedule.php';

        if (file_exists($fileName)) {

            require_once($fileName);

            $schedule = new \wpie\import\schedule\WPIE_Schedule_Import();

            $schedule->save_import_schedule();
        }
    }

    public function get_schedule_view($files = array()) {

        $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/schedule/wpie-schedule-view.php';

        if (!in_array($fileName, $files)) {

            $files[] = $fileName;
        }

        return $files;
    }

    public function get_manage_schedule_tab($files = array()) {

        $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/schedule/wpie-manage-schedule.php';

        if (!in_array($fileName, $files)) {

            $files[] = $fileName;
        }

        return $files;
    }

}

new WPIE_Schedule_Import_Extension();
