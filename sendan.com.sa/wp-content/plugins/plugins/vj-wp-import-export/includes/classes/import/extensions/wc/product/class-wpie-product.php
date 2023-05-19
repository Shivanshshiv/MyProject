<?php

namespace wpie\import\wc\product;

use WC_Product_Factory;
use wpie\import\wc\product\external\WPIE_External_Product;
use wpie\import\wc\product\grouped\WPIE_Grouped_Product;
use wpie\import\wc\product\variable\WPIE_Variable_Product;
use wpie\import\wc\product\simple\WPIE_Simple_Product;
use wpie\import\wc\product\variation\WPIE_Variation_Product;

if (!defined('ABSPATH')) {
        die(__("Can't load this file directly", 'vj-wp-import-export'));
}
if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-import-base.php')) {

        require_once(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-import-base.php');
}

class WPIE_Product_Import extends \wpie\import\base\WPIE_Import_Base {

        private $unique_keys = array();
        private $parent_id;
        private $variation_id;

        public function __construct($wpie_import_option = array(), $import_type = "") {

                add_filter('wpie_before_post_import', array($this, "wpie_before_post_import"), 10, 3);

                $this->wpie_import_option = $wpie_import_option;

                $this->import_type = $import_type;

                $activeFile = isset($this->wpie_import_option['activeFile']) ? $this->wpie_import_option['activeFile'] : "";

                $importFile = isset($this->wpie_import_option['importFile']) ? $this->wpie_import_option['importFile'] : array();

                $fileData = isset($importFile[$activeFile]) ? $importFile[$activeFile] : "";

                $this->base_dir = $fileData['baseDir'] ? $fileData['baseDir'] : "";

                unset($activeFile, $importFile, $fileData);

                $this->get_product_unique_id();
        }

        public function before_item_import($wpie_import_record = array(), &$existing_item_id = 0, &$is_new_item = true, &$is_search_duplicates = true) {

                $this->wpie_import_record = $wpie_import_record;

                if (absint($existing_item_id) > 0) {
                        return;
                }

                $this->parent_id = 0;

                $this->variation_id = 0;

                $product_type = wpie_sanitize_field(strtolower(trim($this->get_field_value('wpie_item_product_type', false, true))));

                if ($product_type == "variable" || $product_type == "variation") {

                        $variation_method = wpie_sanitize_field($this->get_field_value('wpie_item_variation_import_method', true));

                        $parent_key = "";

                        switch ($variation_method) {
                                case "match_unique_field";
                                        $parent_key = wpie_sanitize_field($this->get_field_value('wpie_item_product_variation_match_unique_field_parent'));
                                        break;
                                case "match_group_field";
                                        $parent_key = wpie_sanitize_field($this->get_field_value('wpie_item_product_variation_match_group_field'));
                                        break;
                                case "match_title_field";
                                        $parent_key = wpie_sanitize_field($this->get_field_value('wpie_item_variation_import_method_title_field'));
                                        break;
                                case "match_title_field_no_parent";
                                        $parent_key = wpie_sanitize_field($this->get_field_value('wpie_item_variation_import_method_title_field_no_parent'));
                                        break;
                        }

                        if (!empty($this->unique_keys) && in_array($parent_key, $this->unique_keys)) {

                                $this->parent_id = array_search($parent_key, $this->unique_keys);

                                $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/wc/product/class-wpie-variation-product.php';

                                if (file_exists($fileName)) {

                                        require_once($fileName);
                                }

                                $variation = new \wpie\import\wc\product\variation\WPIE_Variation_Product($this->wpie_import_option, $this->wpie_import_record, 0, null, false, $this->parent_id);

                                $variation_id = $variation->is_variation_exist();

                                if ($variation_id !== false && intval($variation_id) > 0) {

                                        $this->variation_id = $existing_item_id   = $variation_id;
                                }

                                $is_search_duplicates = false;

                                unset($parent, $fileName);
                        }

                        unset($variation_method, $parent_key);
                }
        }

        public function wpie_before_post_import($wpie_final_data = array(), $wpie_import_option = array(), $wpie_import_record = array()) {

                if (intval($this->parent_id > 0)) {

                        $wpie_final_data['post_type'] = "product_variation";

                        $wpie_final_data['post_parent'] = intval($this->parent_id);

                        if (intval($this->variation_id) == 0 && isset($wpie_final_data['ID'])) {
                                unset($wpie_final_data['ID']);
                        }
                }

                return $wpie_final_data;
        }

        public function after_item_import($item_id = 0, $item = null, $is_new_item = false) {

                $this->item_id = $item_id;

                $this->item = $item;

                $this->is_new_item = $is_new_item;

                if ($this->parent_id > 0) {

                        $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/wc/product/class-wpie-variation-product.php';

                        if (file_exists($fileName)) {

                                require_once($fileName);
                        }

                        $variation = new \wpie\import\wc\product\variation\WPIE_Variation_Product($this->wpie_import_option, $this->wpie_import_record, $this->item_id, $this->item, $this->is_new_item, $this->parent_id);

                        $variation->set_product(new \WC_Product_Variation($this->item_id));

                        $variation->import_data();
                } else {

                        $product_type = "";

                        if ($this->is_update_field("product_type")) {

                                $product_type = wpie_sanitize_field(strtolower(trim($this->get_field_value('wpie_item_product_type', false, true))));
                        }

                        if (empty($product_type)) {
                                $product_type = \WC_Product_Factory::get_product_type($this->item_id);
                        }

                        if ($product_type) {
                                $className = \WC_Product_Factory::get_product_classname($this->item_id, $product_type ? $product_type : 'simple');
                        }

                        $product = new $className($this->item_id);

                        unset($className);

                        $productClass = "";

                        $fileName = "";

                        switch ($product_type) {

                                case 'external':

                                        $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/wc/product/class-wpie-external-product.php';

                                        $productClass = '\wpie\import\wc\product\external\WPIE_External_Product';

                                        break;
                                case 'grouped':
                                        $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/wc/product/class-wpie-grouped-product.php';

                                        $productClass = '\wpie\import\wc\product\grouped\WPIE_Grouped_Product';

                                        break;
                                case 'variation':
                                case 'variable':

                                        $this->set_unique_key($product_type);

                                        $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/wc/product/class-wpie-variable-product.php';

                                        $productClass = '\wpie\import\wc\product\variable\WPIE_Variable_Product';

                                        break;
                                default:
                                        $fileName = WPIE_IMPORT_CLASSES_DIR . '/extensions/wc/product/class-wpie-simple-product.php';

                                        $productClass = '\wpie\import\wc\product\simple\WPIE_Simple_Product';

                                        break;
                        }


                        if (!empty($fileName) && file_exists($fileName)) {

                                require_once($fileName);
                        }

                        unset($fileName, $product_type);

                        if (class_exists($productClass)) {

                                $product_data = new $productClass($this->wpie_import_option, $this->wpie_import_record, $item_id, $item, $is_new_item);

                                $product_data->set_product($product);

                                $product_data->import_data();
                        }
                        unset($productClass);
                }
        }

        private function set_unique_key($product_type = "") {

                if ($product_type == "variable" || $product_type == "variation") {

                        $unique_key = "";

                        $variation_method = wpie_sanitize_field($this->get_field_value('wpie_item_variation_import_method', true));

                        switch ($variation_method) {
                                case "match_unique_field";
                                        $unique_key = wpie_sanitize_field($this->get_field_value('wpie_item_product_variation_field_parent'));
                                        break;
                                case "match_group_field";
                                        $unique_key = wpie_sanitize_field($this->get_field_value('wpie_item_product_variation_match_group_field'));
                                        break;
                                case "match_title_field";
                                        $unique_key = wpie_sanitize_field($this->get_field_value('wpie_item_variation_import_method_title_field'));
                                        break;
                                case "match_title_field_no_parent";
                                        $unique_key = wpie_sanitize_field($this->get_field_value('wpie_item_variation_import_method_title_field_no_parent'));
                                        break;
                        }

                        if (!empty($unique_key)) {
                                $this->unique_keys[$this->item_id] = $unique_key;
                        }
                        unset($unique_key);
                }
        }

        private function get_product_unique_id() {

                if (file_exists(WPIE_UPLOAD_IMPORT_DIR . "/" . $this->base_dir . "/backup/backup.json")) {

                        $this->unique_keys = json_decode(file_get_contents(WPIE_UPLOAD_IMPORT_DIR . "/" . $this->base_dir . "/backup/backup.json"), true);
                }
        }

        public function __destruct() {

                parent::__destruct();

                foreach ($this as $key => $value) {
                        unset($this->$key);
                }
        }

}
