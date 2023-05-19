<?php

if (!defined('ABSPATH')) {
    die(__("Can't load this file directly", 'vj-wp-import-export'));
}

class WPIE_WC_Export_Extension {

    public function __construct() {

        global $woocommerce;

        $plugins = get_option('active_plugins');

        if (!function_exists('is_plugin_active_for_network')) {
            require_once(ABSPATH . 'wp-admin/includes/plugin.php');
        }

        $wc_plugin = 'woocommerce/woocommerce.php';

        if (in_array($wc_plugin, $plugins) || is_plugin_active_for_network($wc_plugin)) {

            if (class_exists('Woocommerce')) {
                $this->init_wc();
            } else {
                add_action('woocommerce_loaded', array($this, 'init_wc'));
            }
        }

        unset($plugins, $wc_plugin);
    }

    public function init_wc() {

        add_filter('wpie_prepare_post_fields', array($this, 'prepare_wc_addon'), 10, 2);

        add_filter('wpie_prepare_export_addons', array($this, 'prepare_wc_addon'), 10, 2);

        add_filter('wpie_export_advance_option_files', array($this, 'add_order_advance_option'), 10, 1);
    }

    public function prepare_wc_addon($addons = array(), $export_type = array("post")) {

        $class = "";

        $fileName = "";

        if (in_array("product", $export_type)) {

            $fileName = WPIE_EXPORT_CLASSES_DIR . '/extensions/wc/class-wpie-wc-product.php';

            $class = '\wpie\export\wc\product\WPIE_WC_Product';
        } elseif (in_array("shop_coupon", $export_type)) {

            $fileName = WPIE_EXPORT_CLASSES_DIR . '/extensions/wc/class-wpie-wc-coupon.php';

            $class = '\wpie\export\wc\coupon\WPIE_WC_Coupon';
        } elseif (in_array("shop_order", $export_type)) {

            $fileName = WPIE_EXPORT_CLASSES_DIR . '/extensions/wc/class-wpie-wc-order.php';

            $class = '\wpie\export\wc\order\WPIE_WC_Order';
        }

        if ($fileName != "" && file_exists($fileName)) {

            require_once($fileName);
        }

        if ($class != "" && !in_array($class, $addons)) {
            $addons[] = $class;
        }

        unset($class, $fileName);

        return $addons;
    }

    public function add_order_advance_option($files = array()) {

        $fileName = WPIE_EXPORT_CLASSES_DIR . '/extensions/wc/wc-advance_option.php';

        if (!in_array($fileName, $files)) {
            $files[] = $fileName;
        }

        return $files;
    }

}

new WPIE_WC_Export_Extension();
