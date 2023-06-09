<?php

namespace wpie\import\wc\product\simple;

if (!defined('ABSPATH')) {
    die(__("Can't load this file directly", 'vj-wp-import-export'));
}

if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/extensions/wc/product/class-wpie-product-base.php')) {

    require_once(WPIE_IMPORT_CLASSES_DIR . '/extensions/wc/product/class-wpie-product-base.php');
}

class WPIE_Simple_Product extends \wpie\import\wc\product\base\WPIE_Product_Base {

    protected $product_type = 'simple';

    public function __construct($wpie_import_option = array(), $wpie_import_record = array(), $item_id = "", $item = null, $is_new_item = false) {

        parent::__construct($wpie_import_option, $wpie_import_record, $item_id, $item, $is_new_item);
    }

    public function __destruct() {

        parent::__destruct();

        foreach ($this as $key => $value) {
            unset($this->$key);
        }
    }

}
