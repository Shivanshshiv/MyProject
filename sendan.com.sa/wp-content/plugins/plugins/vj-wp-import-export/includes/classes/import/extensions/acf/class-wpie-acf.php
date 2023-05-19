<?php

namespace wpie\import\acf;

if (!defined('ABSPATH')) {
    die(__("Can't load this file directly", 'vj-wp-import-export'));
}

if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/extensions/acf/class-wpie-acf-base.php')) {

    require_once(WPIE_IMPORT_CLASSES_DIR . '/extensions/acf/class-wpie-acf-base.php');
}

class WPIE_ACF extends \wpie\import\acf\base\WPIE_ACF_Base {

    public function get_acf_groups() {

        $saved_acfs = get_posts(array('posts_per_page' => -1, 'post_type' => 'acf-field-group', "order" => "ASC", "orderby" => "post_title"));

        if (function_exists('acf_local')) {
            $acfs = \acf_local()->groups;
        } else {
            $acfs = array();
        }

        if (!empty($saved_acfs)) {
            foreach ($saved_acfs as $key => $obj) {
                if (isset($obj->post_name) && is_array($acfs) && !isset($acfs[$obj->post_name])) {
                    $acfs[$obj->post_name] = $obj;
                }
            }
        }

        unset($saved_acfs);

        return $acfs;
    }

    public function get_acf_field_by_group($group_id = 0) {

        if (absint($group_id) > 0) {

            return get_posts(
                    array(
                        'posts_per_page' => -1,
                        'post_type' => 'acf-field',
                        'post_parent' => absint($group_id),
                        'post_status' => 'publish',
                        'fields' => "ids",
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    )
            );
        }
        return false;
    }

}
