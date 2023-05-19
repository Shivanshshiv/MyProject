<?php

namespace wpie\import\wpml;

if (!defined('ABSPATH')) {
    die(__("Can't load this file directly", 'vj-wp-import-export'));
}

if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-import-base.php')) {

    require_once(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-import-base.php');
}

class WPIE_WPML_Import extends \wpie\import\base\WPIE_Import_Base {

    private $default_language;
    private $active_languages;

    public function __construct($wpie_import_option = array(), $import_type = "") {

        global $sitepress;

        $this->default_language = $sitepress->get_default_language();

        $this->active_languages = $sitepress->get_active_languages();

        $this->wpie_import_option = $wpie_import_option;

        $this->import_type = $import_type;
    }

    public function before_item_import($wpie_import_record = array(), &$existing_item_id = 0, &$is_new_item = true, &$is_search_duplicates) {

        $this->wpie_import_record = $wpie_import_record;

        $source_item = false;

        if ($this->import_type == "post") {
            $source_item = $this->search_post_duplicate_item(true);
        } elseif ($this->import_type == "taxonomy") {
            $source_item = $this->search_taxonomy_duplicate_item(true);
        }

        if (!empty($source_item) && is_numeric($source_item)) {
            $source_item = array($source_item);
        }

        if (is_array($source_item) && !empty($source_item)) {

            $item_lang = wpie_sanitize_field($this->get_field_value('wpie_wpml_lang_code'));

            if ($item_lang == "as_specified") {
                $item_lang = wpie_sanitize_field($this->get_field_value('wpie_item_wpml_lang'));
            }

            if (!empty($item_lang) && isset($this->active_languages[$item_lang])) {

                $element_type = "post_post";

                if ($this->import_type == "post") {
                    $element_type = 'post_' . wpie_sanitize_field($this->get_field_value('wpie_import_type'));
                } elseif ($this->import_type == "taxonomy") {
                    $element_type = 'tax_' . wpie_sanitize_field($this->get_field_value('wpie_taxonomy_type', true));
                }
                global $wpdb;

                $element_id = $wpdb->get_var(
                        $wpdb->prepare("SELECT element_id FROM {$wpdb->prefix}icl_translations 
                        WHERE element_id IN ('" . implode("','", $source_item) . "') AND 
                        language_code = %s AND
                        element_type = %s",
                                $item_lang,
                                $element_type
                ));

                if (!empty($element_id) && $element_id > 0) {
                    $is_new_item = false;
                    $existing_item_id = $element_id;
                }
            }
        }

        $is_search_duplicates = false;

        if ($this->import_type == "taxonomy") {
            $this->remove_wpml_term_filters();
        }

        unset($source_item);
    }

    public function after_item_import($item_id = 0, $item = null, $is_new_item = true) {

        $this->item_id = $item_id;

        $this->item = $item;

        $this->is_new_item = $is_new_item;

        $this->update_tanslation();
    }

    private function update_tanslation() {

        global $sitepress;

        $element_id = false;

        $element_type = "post_post";

        if ($this->import_type == "post") {
            $element_type = 'post_' . $this->item->post_type;
        } elseif ($this->import_type == "taxonomy") {

            $element_type = 'tax_' . $this->item->taxonomy;
        }

        $item_lang = wpie_sanitize_field($this->get_field_value('wpie_wpml_lang_code'));

        if ($item_lang == "as_specified") {
            $item_lang = wpie_sanitize_field($this->get_field_value('wpie_item_wpml_lang'));
        }

        if (empty($item_lang) || !isset($this->active_languages[$item_lang])) {
            return true;
        }
        global $wpdb;

        $trid = $wpdb->get_var(
                $wpdb->prepare("SELECT trid FROM {$wpdb->prefix}icl_translations 
                        WHERE element_id = %d AND 
                        language_code = %s AND
                        element_type = %s",
                        $this->item_id,
                        $item_lang,
                        $element_type
        ));

        if (intval($trid) < 1) {

            if ($this->import_type == "post") {
                $source_item = $this->search_source_post_item(true);
            } elseif ($this->import_type == "taxonomy") {
                $source_item = $this->search_source_taxonomy_item(true);
            }

            if (!empty($source_item)) {

                if (is_array($source_item)) {

                    $element_id = $wpdb->get_var(
                            $wpdb->prepare("SELECT trid FROM {$wpdb->prefix}icl_translations 
                        WHERE element_id IN ('" . implode("','", $source_item) . "') AND 
                        language_code = %s AND
                        element_type = %s",
                                    $this->default_language,
                                    $element_type
                    ));
                } elseif (is_numeric($source_item)) {
                    $element_id = intval($source_item);
                }

                if (!empty($element_id) && $element_id > 0) {
                    $sitepress->set_element_language_details($this->item_id, $element_type, $element_id, $item_lang, $this->default_language);
                }
            }

            if ($element_id === false) {
                $sitepress->set_element_language_details($this->item_id, $element_type, false, $item_lang);
            }
        }

        unset($item_lang, $element_type, $element_id, $trid, $source_item);
    }

    private function remove_wpml_term_filters() {

        global $sitepress;

        remove_filter('get_terms_args', array($sitepress, 'get_terms_args_filter'));

        remove_filter('get_term', array($sitepress, 'get_term_adjust_id'), 1);

        remove_filter('terms_clauses', array($sitepress, 'terms_clauses'));
    }

    private function search_source_taxonomy_item($is_multiple = false) {

        global $wpdb, $wp_version;

        $this->remove_wpml_term_filters();

        $logic = wpie_sanitize_field($this->get_field_value('wpie_item_wpml_default_item', true));

        $taxonomy_type = wpie_sanitize_field($this->get_field_value('wpie_taxonomy_type'));

        $taxonomy_items = false;

        if ($logic == "id") {

            $item_id = absint(wpie_sanitize_field($this->get_field_value('wpie_item_wpml_trid')));

            if ($item_id > 0) {

                $term = get_term_by('id', $item_id, $taxonomy_type);

                if (!empty($terms) && !is_wp_error($terms)) {
                    $taxonomy_items = $item_id;
                }
                unset($term);
            }

            unset($item_id);
        } elseif ($logic == "slug") {

            $slug = wpie_sanitize_field($this->get_field_value('wpie_item_wpml_translation_slug', false, true));

            if (!empty($slug)) {

                $args = array(
                    'get' => 'all',
                    'number' => 0,
                    'taxonomy' => $taxonomy_type,
                    'update_term_meta_cache' => false,
                    'orderby' => 'none',
                    'fields' => 'ids',
                    'suppress_filter' => true,
                    'slug' => $slug
                );

                if (version_compare($wp_version, '4.5.0', '<')) {

                    $taxonomy_items = get_terms($taxonomy_type, $args);
                } else {
                    $taxonomy_items = get_terms($args);
                }
            }
            unset($slug);
        } elseif ($logic == "name") {

            $name = wpie_sanitize_field($this->get_field_value('wpie_item_wpml_default_item_name', false, true));

            if (!empty($name)) {

                $args = array(
                    'get' => 'all',
                    'number' => 0,
                    'taxonomy' => $taxonomy_type,
                    'update_term_meta_cache' => false,
                    'orderby' => 'none',
                    'fields' => 'ids',
                    'suppress_filter' => true,
                    'name' => $name
                );

                if (version_compare($wp_version, '4.5.0', '<')) {

                    $taxonomy_items = get_terms($taxonomy_type, $args);
                } else {
                    $taxonomy_items = get_terms($args);
                }
            }
            unset($name);
        }
        unset($logic, $taxonomy_type);

        return $taxonomy_items;
    }

    private function search_taxonomy_duplicate_item() {

        global $wpdb, $wp_version;

        $this->remove_wpml_term_filters();

        $taxonomy_item = false;

        $wpie_duplicate_indicator = wpie_sanitize_field($this->get_field_value('wpie_existing_item_search_logic', true));

        $taxonomy_type = wpie_sanitize_field($this->get_field_value('wpie_taxonomy_type'));

        if ($wpie_duplicate_indicator == "id") {

            $duplicate_id = absint(wpie_sanitize_field($this->get_field_value('wpie_existing_item_search_logic_id')));

            if ($duplicate_id > 0) {

                $term = get_term_by('id', $duplicate_id, $taxonomy_type);

                if (!empty($term) && !is_wp_error($term)) {
                    $taxonomy_item = $duplicate_id;
                }
                unset($term);
            }
            unset($duplicate_id);
        } elseif ($wpie_duplicate_indicator == "slug") {

            $slug = wpie_sanitize_field($this->get_field_value('wpie_item_term_slug', false, true));

            if (!empty($slug)) {

                $args = array(
                    'get' => 'all',
                    'number' => 0,
                    'taxonomy' => "category",
                    'update_term_meta_cache' => false,
                    'orderby' => 'id',
                    'fields' => 'ids',
                    'suppress_filter' => true,
                    'slug' => $slug
                );

                if (version_compare($wp_version, '4.5.0', '<')) {

                    $taxonomy_item = get_terms($taxonomy_type, $args);
                } else {
                    $taxonomy_item = get_terms($args);
                }
            }
            unset($slug);
        } elseif ($wpie_duplicate_indicator == "name") {

            $name = wpie_sanitize_field($this->get_field_value('wpie_item_term_name'));

            if (!empty($name)) {

                $args = array(
                    'get' => 'all',
                    'number' => 0,
                    'taxonomy' => $taxonomy_type,
                    'update_term_meta_cache' => false,
                    'orderby' => 'none',
                    'fields' => 'ids',
                    'suppress_filter' => true,
                    'name' => $name
                );

                if (version_compare($wp_version, '4.5.0', '<')) {

                    $taxonomy_item = get_terms($taxonomy_type, $args);
                } else {
                    $taxonomy_item = get_terms($args);
                }
            }

            unset($name);
        } elseif ($wpie_duplicate_indicator == "cf") {

            $meta_key = wpie_sanitize_field($this->get_field_value('wpie_existing_item_search_logic_cf_key'));

            $meta_val = wpie_sanitize_field($this->get_field_value('wpie_existing_item_search_logic_cf_value'));

            if (!empty($meta_key)) {

                $args = array(
                    'taxonomy' => $taxonomy_type,
                    'number' => 0,
                    'fields' => 'ids',
                    'hide_empty' => false,
                    'meta_query' => array(
                        array(
                            'key' => $meta_key,
                            'value' => $meta_val,
                            'compare' => '='
                        )
                    )
                );

                if (version_compare($wp_version, '4.5.0', '<')) {

                    $taxonomy_item = get_terms($taxonomy_type, $args);
                } else {
                    $taxonomy_item = get_terms($args);
                }

                unset($terms, $args);
            }

            unset($meta_key, $meta_val);
        }

        unset($taxonomy_type, $wpie_duplicate_indicator);

        if (is_wp_error($taxonomy_item)) {
            return false;
        }
        return $taxonomy_item;
    }

    private function search_post_duplicate_item() {

        global $wpdb;

        $post_item = false;

        $wpie_duplicate_indicator = empty($this->get_field_value('wpie_existing_item_search_logic', true)) ? 'title' : wpie_sanitize_field($this->get_field_value('wpie_existing_item_search_logic', true));

        if ($wpie_duplicate_indicator == "id") {

            $duplicate_id = absint(wpie_sanitize_field($this->get_field_value('wpie_existing_item_search_logic_id')));

            if ($duplicate_id > 0) {
                $_post = $wpdb->get_row($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE ID = %d LIMIT 1", $duplicate_id));

                if ($_post) {
                    $post_item = absint($duplicate_id);
                }
                unset($_post);
            }
            unset($duplicate_id);
        } elseif ($wpie_duplicate_indicator == "title" || $wpie_duplicate_indicator == "content") {

            $wpie_field = 'post_' . $wpie_duplicate_indicator;

            $temp_field = 'wpie_item_' . $wpie_duplicate_indicator;

            $wpie_field_data = $this->get_field_value($temp_field);


            if (!empty($wpie_field_data)) {

                $post_item = $wpdb->get_col(
                        $wpdb->prepare(
                                "SELECT ID FROM " . $wpdb->posts . "
                                WHERE
                                    post_type = %s
                                    AND ID != 0
                                    AND " . $wpie_field . " = %s
                                ", wpie_sanitize_field($this->get_field_value('wpie_import_type', true)), $wpie_field_data
                        )
                );
            }

            unset($wpie_field, $wpie_field_data, $temp_field);
        } elseif ($wpie_duplicate_indicator == "cf") {

            $meta_key = wpie_sanitize_field($this->get_field_value('wpie_existing_item_search_logic_cf_key'));

            $meta_val = wpie_sanitize_field($this->get_field_value('wpie_existing_item_search_logic_cf_value'));

            $post_types = wpie_sanitize_field($this->get_field_value('wpie_import_type', true));

            if ($post_types == "product") {
                $post_types = array("product", "product_variation");
            } else {
                $post_types = array($post_types);
            }

            $sql = $wpdb->prepare("SELECT " . $wpdb->posts . ".ID FROM " . $wpdb->posts . " INNER JOIN " . $wpdb->postmeta . " ON ( " . $wpdb->posts . ".ID = " . $wpdb->postmeta . ".post_id ) WHERE 1=1 AND ( ( " . $wpdb->postmeta . ".meta_key = %s AND (" . $wpdb->postmeta . ".meta_value = %s OR " . $wpdb->postmeta . ".meta_value = %s OR REPLACE(REPLACE(REPLACE(" . $wpdb->postmeta . ".meta_value, ' ', ''), '\\t', ''), '\\n', '') = %s) ) ) AND " . $wpdb->posts . ".post_type IN ('" . implode("','", $post_types) . "') AND ((" . $wpdb->posts . ".post_status <> 'trash' AND " . $wpdb->posts . ".post_status <> 'auto-draft')) GROUP BY " . $wpdb->posts . ".ID ORDER BY " . $wpdb->posts . ".ID ASC", trim($meta_key), trim($meta_val), htmlspecialchars(trim($meta_val)), preg_replace('%[ \\t\\n]%', '', trim($meta_val)));

            $query = $wpdb->get_col($sql);

            if (!empty($query)) {
                $post_item = $query;
            }
            unset($query);

            if ($post_item !== false) {

                $query = $wpdb->get_col($wpdb->prepare("SELECT " . $wpdb->posts . ".ID FROM " . $wpdb->posts . " INNER JOIN " . $wpdb->postmeta . " ON (" . $wpdb->posts . ".ID = " . $wpdb->postmeta . ".post_id) WHERE 1=1 AND " . $wpdb->posts . ".post_type IN ('" . implode("','", $post_types) . "') AND (" . $wpdb->posts . ".post_status = 'publish' OR " . $wpdb->posts . ".post_status = 'future' OR " . $wpdb->posts . ".post_status = 'draft' OR " . $wpdb->posts . ".post_status = 'pending' OR " . $wpdb->posts . ".post_status = 'trash' OR " . $wpdb->posts . ".post_status = 'private') AND ( (" . $wpdb->postmeta . ".meta_key = '%s' AND (" . $wpdb->postmeta . ".meta_value = '%s' OR " . $wpdb->postmeta . ".meta_value = '%s' OR " . $wpdb->postmeta . ".meta_value = '%s') ) ) GROUP BY " . $wpdb->posts . ".ID ORDER BY " . $wpdb->posts . ".ID ASC", trim($meta_key), trim($meta_val), htmlspecialchars(trim($meta_val)), esc_attr(trim($meta_val))));

                if (!empty($query)) {
                    $post_item = $query;
                }
                unset($query);
            }

            unset($meta_key, $meta_val, $post_types, $sql);
        }
        unset($wpie_duplicate_indicator);

        return $post_item;
    }

    private function search_source_post_item($is_multiple = false) {

        global $wpdb;

        $logic = wpie_sanitize_field($this->get_field_value('wpie_item_wpml_default_item', true));

        $post_id = 0;

        if ($logic == "id") {

            $item_id = absint(wpie_sanitize_field($this->get_field_value('wpie_item_wpml_trid')));

            if ($item_id > 0) {
                $_post = $wpdb->get_row($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE ID = %d LIMIT 1", $item_id));

                if ($_post) {
                    $post_id = $item_id;
                }
                unset($_post);
            }
            unset($item_id);
        } elseif ($logic == "title") {

            $wpie_field_data = $this->get_field_value("wpie_item_wpml_translation_title");

            if (!empty($wpie_field_data)) {

                if ($is_multiple) {

                    return $wpdb->get_col(
                                    $wpdb->prepare(
                                            "SELECT ID FROM " . $wpdb->posts . "
                                WHERE
                                    post_type = %s
                                    AND ID != 0
                                    AND post_title = %s
                                ", wpie_sanitize_field($this->get_field_value('wpie_import_type', true)), $wpie_field_data
                                    )
                    );
                } else {
                    $_post = $wpdb->get_row(
                            $wpdb->prepare(
                                    "SELECT ID FROM " . $wpdb->posts . "
                                WHERE
                                    post_type = %s
                                    AND ID != 0
                                    AND post_title = %s
                                LIMIT 1
                                ", wpie_sanitize_field($this->get_field_value('wpie_import_type', true)), $wpie_field_data
                            )
                    );

                    if ($_post && isset($_post->ID)) {
                        $post_id = $_post->ID;
                    }
                }
                unset($_post);
            }
            unset($wpie_field_data);
        }

        unset($logic);

        if ($post_id == 0) {
            return false;
        }
        return $post_id;
    }

    public function __destruct() {
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
    }

}
