<?php
if (!defined('ABSPATH')) {
    die(__("Can't load this file directly", 'vj-wp-import-export'));
}

if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-import.php')) {
    require_once(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-import.php');

    $wpie_import = new \wpie\import\WPIE_Import();

    $wpie_import_type = $wpie_import->wpie_get_import_type();

    $wpie_taxonomies_list = $wpie_import->wpie_get_all_taxonomies(array(), array(), "keytitle");

    unset($wpie_import);
} else {

    $wpie_import_type = null;

    $wpie_taxonomies_list = null;
}

if (file_exists(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-upload.php')) {
    require_once(WPIE_IMPORT_CLASSES_DIR . '/class-wpie-upload.php');

    $wpie_import_uploader = new \wpie\import\upload\WPIE_Upload();

    $upload_sections = $wpie_import_uploader->wpie_get_upload_section();

    unset($wpie_import_uploader);
} else {
    $upload_sections = array();
}

$final_btn_files = apply_filters('wpie_add_import_extension_process_btn_files', array());

$import_ext_html = apply_filters('wpie_add_import_extension_file', array());

$import_ref_id = "";

$error_msg = "";

$nonce = "";

$import_id = isset($_GET['import_id']) ? absint(sanitize_text_field($_GET['import_id'])) : 0;

if ($import_id > 0) {

    $ref_id = isset($_GET['ref_id']) ? sanitize_text_field($_GET['ref_id']) : "";

    if (!empty($ref_id)) {

        $nonce = isset($_GET['nonce']) ? sanitize_text_field($_GET['nonce']) : "";

        if (!empty($nonce)) {

            $validate_nonce = wp_verify_nonce($nonce, $import_id . $ref_id);

            if ($validate_nonce === 1 || $validate_nonce === 2) {
                $import_ref_id = $ref_id;
            } else {
                $error_msg = esc_html__('Invalid Nonce. Go to Manage Import for new valid Reimport links', "vj-wp-import-export");
            }
        } else {
            $error_msg = esc_html__('Empty Nonce', "vj-wp-import-export");
        }
    } else {
        $error_msg = esc_html__('Empty Reference ID', "vj-wp-import-export");
    }
}
?>
<div class="wpie_main_container">
    <div class="wpie_content_header">
        <div class="wpie_content_header_inner_wrapper">
            <div class="wpie_content_header_title"><?php esc_html_e('New Import', "vj-wp-import-export"); ?></div>
        </div>
    </div>
    <div class="wpie_content_wrapper">
        <form class="wpie_import_frm" method="post" action="#">
            <input type="hidden" name="wpie_total_filter_records" value="0" class="wpie_total_filter_records">
            <input type="hidden" name="ref_id" value="<?php echo esc_attr($import_ref_id); ?>" class="wpie_import_ref_id">
            <input type="hidden" name="import_id" value="<?php echo esc_attr($import_id); ?>" class="wpie_import_id">
            <input type="hidden" name="import_nonce" value="<?php echo esc_attr($nonce); ?>" class="wpie_import_nonce">
            <input type="hidden" class="wpie_error_msg" msg="<?php echo esc_attr($error_msg); ?>">
            <input type="hidden" name="wpie_file_upload_method" value="wpie_import_local_upload" class="wpie_file_upload_method">
            <div class="wpie_content_data">
                <div class="wpie_section_container wpie_import_step1 wpie_import_step">
                    <div class="wpie_import_action_btn_wrapper wpie_import_action_top_btn_wrapper">
                        <div class="wpie_import_action_container">
                            <div class="wpie_btn wpie_btn_primary wpie_import_next_btn wpie_import_step1_btn" wpie_show="wpie_import_step2">
                                <?php esc_html_e('Continue to Step 2', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wpie_section_wrapper wpie_default">
                        <div class="wpie_content_data_header wpie_section_wrapper_selected">
                            <div class="wpie_content_title"><?php esc_html_e('Choose how you want to import your data', 'vj-wp-import-export'); ?></div>
                        </div>
                        <div class="wpie_section_content wpie_show">
                            <div class="wpie_upload_menu_wrapper">
                                <?php
                                if (!empty($upload_sections)) {

                                    $temp_flag = true;
                                    foreach ($upload_sections as $key => $data) {

                                        $icon = isset($data['icon']) ? $data['icon'] : "fa-upload";

                                        $label = isset($data['label']) ? $data['label'] : $key;

                                        if ($temp_flag === true) {
                                            $selected_class = "wpie_active";
                                            $temp_flag = false;
                                        } else {
                                            $selected_class = "";
                                        }
                                        ?>
                                        <div class="wpie_upload_menu <?php echo esc_attr($selected_class); ?>" show_container="<?php echo esc_attr($key); ?>">
                                            <div class="wpie_upload_menu_icon_wrapper">
                                                <i class="<?php echo esc_attr($icon); ?> wpie_upload_title_icon" aria-hidden="true"></i>
                                            </div>
                                            <div class="wpie_upload_menu_title_wrapper"><?php echo esc_html($label); ?></div>
                                        </div>
                                        <?php
                                        unset($icon, $label, $selected_class);
                                    }
                                    unset($temp_flag);
                                }
                                ?>
                            </div>
                            <div class="wpie_upload_container_wrapper">
                                <?php
                                if (!empty($upload_sections)) {

                                    $temp_flag = true;

                                    foreach ($upload_sections as $key => $data) {

                                        $view = isset($data['view']) ? $data['view'] : "";

                                        if ($temp_flag === true) {
                                            $display_style = "wpie_show";
                                            $temp_flag = false;
                                        } else {
                                            $display_style = "";
                                        }
                                        ?>
                                        <div class="wpie_upload_section_wrapper <?php echo esc_attr($key); ?> <?php echo esc_attr($display_style); ?>">
                                            <?php
                                            if (!empty($view) && file_exists($view)) {
                                                include $view;
                                            }
                                            ?>
                                        </div>
                                        <?php
                                        unset($view, $display_style);
                                    }
                                    unset($temp_flag);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="wpie_import_action_btn_wrapper">
                        <div class="wpie_import_action_container">
                            <div class="wpie_btn wpie_btn_primary wpie_import_next_btn wpie_import_step1_btn" wpie_show="wpie_import_step2">
                                <?php esc_html_e('Continue to Step 2', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpie_section_container wpie_import_step2 wpie_import_step">
                    <div class="wpie_import_action_btn_wrapper wpie_import_action_top_btn_wrapper">
                        <div class="wpie_import_action_container">
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_back_btn" wpie_show="wpie_import_step1">
                                <i class="fas fa-chevron-left wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Back to Step 1', 'vj-wp-import-export'); ?>
                            </div>
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_next_btn wpie_import_step2_btn" wpie_show="wpie_import_step3">
                                <?php esc_html_e('Continue to Step 3', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wpie_section_wrapper">
                        <div class="wpie_content_data_header wpie_section_wrapper_selected">
                            <div class="wpie_content_title"><?php esc_html_e('Import each record as', 'vj-wp-import-export'); ?></div>
                        </div>
                        <div class="wpie_section_content wpie_show">
                            <div class="wpie_handel_item_container_wrapper">
                                <div class="wpie_import_type_outer_container">
                                    <div class="wpie_content_data_wrapper">
                                        <select class="wpie_content_data_select wpie_import_type_select" name="wpie_import_type">
                                            <?php if (!empty($wpie_import_type)) { ?>
                                                <?php foreach ($wpie_import_type as $key => $value) { ?>
                                                    <option value="<?php echo esc_attr($key); ?>"><?php echo (isset($value->labels) && isset($value->labels->name)) ? esc_html($value->labels->name) : ""; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="wpie_content_data_wrapper wpie_taxonomies_types_wrapper">
                                        <select class="wpie_content_data_select wpie_taxonomies_types_select" name="wpie_taxonomy_type">
                                            <?php if (!empty($wpie_taxonomies_list)) { ?>
                                                <?php foreach ($wpie_taxonomies_list as $slug => $name) { ?>
                                                    <option value="<?php echo esc_attr($slug); ?>"><?php echo esc_html($name); ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="wpie_handle_item_wrapper">
                                    <div class="wpie_handle_item_title"><?php esc_html_e('Handle New and Existing Items', 'vj-wp-import-export'); ?></div>
                                    <div class="wpie_handle_new_item_wrapper">
                                        <input type="radio" value="all" name="handle_items" id="handle_items_all" class="wpie_radio wpie_handle_items" checked="checked">
                                        <label class="wpie_radio_label" for="handle_items_all"><?php esc_html_e('Import new items & Update Existing Items', 'vj-wp-import-export'); ?></label>
                                    </div>
                                    <div class="wpie_handle_new_item_wrapper">
                                        <input type="radio" value="new" name="handle_items" id="handle_items_new" class="wpie_radio wpie_handle_items">
                                        <label class="wpie_radio_label" for="handle_items_new"><?php esc_html_e('Import new items only & Skip Existing Items', 'vj-wp-import-export'); ?></label>
                                    </div>
                                    <div class="wpie_handle_new_item_wrapper">
                                        <input type="radio" value="existing" name="handle_items" id="handle_items_existing" class="wpie_radio wpie_handle_items">
                                        <label class="wpie_radio_label" for="handle_items_existing"><?php esc_html_e('Update Existing Items & Skip new items', 'vj-wp-import-export'); ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpie_import_action_btn_wrapper">
                        <div class="wpie_import_action_container">
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_back_btn" wpie_show="wpie_import_step1">
                                <i class="fas fa-chevron-left wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Back to Step 1', 'vj-wp-import-export'); ?>
                            </div>
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_next_btn wpie_import_step2_btn" wpie_show="wpie_import_step3">
                                <?php esc_html_e('Continue to Step 3', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpie_section_container wpie_import_step3 wpie_import_step">
                    <div class="wpie_import_action_btn_wrapper wpie_import_action_top_btn_wrapper">
                        <div class="wpie_import_action_container">
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_back_btn" wpie_show="wpie_import_step2">
                                <i class="fas fa-chevron-left wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Back to Step 2', 'vj-wp-import-export'); ?>
                            </div>
                            <div class="wpie_btn wpie_btn_primary wpie_import_next_btn wpie_import_step3_btn" wpie_show="wpie_import_step4">
                                <?php esc_html_e('Continue to Step 4', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wpie_section_wrapper">
                        <div class="wpie_content_data_header wpie_section_wrapper_selected">
                            <div class="wpie_content_title"><?php esc_html_e('Data Filter', 'vj-wp-import-export'); ?></div>
                        </div>
                        <div class="wpie_section_content wpie_show">
                            <table class="wpie_filter_wrapper">
                                <tr>
                                    <td class="wpie_filter_data_label"><?php esc_html_e('Element', 'vj-wp-import-export'); ?></td>
                                    <td class="wpie_filter_data_label"><?php esc_html_e('Rule', 'vj-wp-import-export'); ?></td>
                                    <td class="wpie_filter_data_label"><?php esc_html_e('Value', 'vj-wp-import-export'); ?></td>
                                    <td class="wpie_filter_data_add"></td>
                                </tr>
                                <tr>
                                    <td class="wpie_filter_data_label">
                                        <select class="wpie_content_data_select wpie_element_list" name="">
                                            <option value=""><?php esc_html_e('Select Element', 'vj-wp-import-export'); ?></option>
                                        </select>
                                    </td>
                                    <td class="wpie_filter_data_label">
                                        <select class="wpie_content_data_select wpie_element_rule" name="">
                                            <option value=""><?php _e('Select Rule', 'vj-wp-import-export'); ?></option>
                                            <option value="equals"><?php _e('equals', 'vj-wp-import-export'); ?></option>
                                            <option value="not_equals"><?php _e('not equals', 'vj-wp-import-export'); ?></option>
                                            <option value="greater"><?php _e('greater than', 'vj-wp-import-export'); ?></option>
                                            <option value="equals_or_greater"><?php _e('equals or greater than', 'vj-wp-import-export'); ?></option>
                                            <option value="less"><?php _e('less than', 'vj-wp-import-export'); ?></option>
                                            <option value="equals_or_less"><?php _e('equals or less than', 'vj-wp-import-export'); ?></option>
                                            <option value="contains"><?php _e('contains', 'vj-wp-import-export'); ?></option>
                                            <option value="not_contains"><?php _e('not contains', 'vj-wp-import-export'); ?></option>
                                            <option value="is_empty"><?php _e('is empty', 'vj-wp-import-export'); ?></option>
                                            <option value="is_not_empty"><?php _e('is not empty', 'vj-wp-import-export'); ?></option>
                                        </select>
                                    </td>
                                    <td class="wpie_filter_data_label">
                                        <input class="wpie_content_data_input wpie_element_value" type="text" name="" value="">
                                    </td>
                                    <td class="wpie_filter_data_add">
                                        <div class="wpie_icon_btn wpie_save_add_rule_btn">
                                            <i class="fas fa-plus wpie_icon_btn_icon " aria-hidden="true"></i>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table class="wpie_filter_rule_table table table-bordered"></table>
                            <div class="wpie_apply_rule_wrapper">
                                <div class="wpie_btn wpie_btn_primary wpie_import_data_btn wpie_apply_rule_btn">
                                    <i class="fas fa-check wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Apply to xpath', 'vj-wp-import-export'); ?>
                                </div>
                            </div>
                            <table class="wpie_xpath_wrapper">
                                <tr>
                                    <td class="wpie_xpath_label"><?php esc_html_e('XPath', 'vj-wp-import-export'); ?></td>
                                    <td class="wpie_xpath_element"><input class="wpie_content_data_input wpie_xpath" type="text" name="" value=""></td>
                                </tr>
                            </table>
                            <table class="wpie_data_element_table table table-bordered">
                                <tr>
                                    <td class="wpie_element_tag_outer">
                                        <div class="wpie_element_tag_wrapper"></div>
                                    </td>
                                    <td class="wpie_element_data_wrapper">
                                        <div class="wpie_data_element_action_wrapper">
                                            <table class="wpie_data_element_action_table table table-bordered">
                                                <td class="wpie_data_element_action">
                                                    <span class="wpie_data_element_nav wpie_data_element_nav_prev"><i aria-hidden="true" class="fas fa-chevron-left wpie_data_element_action_icon"></i></span>
                                                </td>
                                                <td class="wpie_data_element_action_nav">
                                                    <span class="wpie_element_nav_input_wrapper"><input type="text" class="wpie_content_data_input wpie_element_nav_element" value="1"></span>
                                                    <span class="wpie_data_element_action_nav_text"><?php esc_html_e('of', 'vj-wp-import-export'); ?></span>
                                                    <span class="wpie_data_element_action_nav_total wpie_data_element_action_nav_text">1</span>
                                                </td>
                                                <td class="wpie_data_element_action">
                                                    <span class="wpie_data_element_nav wpie_data_element_nav_next"><i aria-hidden="true" class="fas fa-chevron-right wpie_data_element_action_icon"></i></span>
                                                </td>
                                            </table>
                                        </div>
                                        <div class="wpie_csv_delimiter_wrapper">
                                            <table class="wpie_csv_delimiter_outer_wrapper">
                                                <tr>
                                                    <td class="wpie_csv_delimiter_container"><?php esc_html_e('Set delimiter for CSV fields', 'vj-wp-import-export'); ?></td>
                                                    <td class="wpie_csv_delimiter_container wpie_csv_delimiter_outer"><input class="wpie_content_data_input wpie_csv_delimiter" type="text" name="wpie_csv_delimiter" value=","></td>
                                                    <td class="wpie_csv_delimiter_container ">
                                                        <div class="wpie_btn wpie_btn_primary wpie_csv_delimiter_btn">
                                                            <i class="fas fa-check wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Apply', 'vj-wp-import-export'); ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="wpie_data_preview"></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="wpie_import_action_btn_wrapper">
                        <div class="wpie_import_action_container">
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_back_btn" wpie_show="wpie_import_step2">
                                <i class="fas fa-chevron-left wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Back to Step 2', 'vj-wp-import-export'); ?>
                            </div>
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_next_btn wpie_import_step3_btn" wpie_show="wpie_import_step4">
                                <?php esc_html_e('Continue to Step 4', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpie_section_container wpie_import_step4 wpie_import_step">
                    <div class="wpie_import_action_btn_wrapper wpie_import_action_top_btn_wrapper">
                        <div class="wpie_import_action_container">
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_back_btn" wpie_show="wpie_import_step3">
                                <i class="fas fa-chevron-left wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Back to Step 3', 'vj-wp-import-export'); ?>
                            </div>
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_next_btn wpie_import_step4_btn" wpie_show="wpie_import_step5">
                                <?php esc_html_e('Continue to Step 5', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wpie_section_wrapper">
                        <div class="wpie_content_data_header wpie_section_wrapper_selected">
                            <div class="wpie_content_title"><?php esc_html_e('Field Mapping', 'vj-wp-import-export'); ?></div>
                        </div>
                        <div class="wpie_section_content wpie_show">
                            <div class="wpie_field_mapping_section"></div>
                            <div class="wpie_field_mapping_data_container">
                                <div class="wpie_field_data_wrapper wpie_field_mapping_data_wrapper">
                                    <table class="wpie_data_element_action_table table table-bordered">
                                        <td class="wpie_data_element_action">
                                            <span class="wpie_data_element_nav wpie_data_element_nav_prev"><i aria-hidden="true" class="fas fa-chevron-left wpie_data_element_action_icon"></i></span>
                                        </td>
                                        <td class="wpie_data_element_action_nav">
                                            <span class="wpie_element_nav_input_wrapper"><input type="text" class="wpie_content_data_input wpie_element_nav_element" value="1"></span>
                                            <span class="wpie_data_element_action_nav_text"><?php esc_html_e('of', 'vj-wp-import-export'); ?></span>
                                            <span class="wpie_data_element_action_nav_total wpie_data_element_action_nav_text">1</span>
                                        </td>
                                        <td class="wpie_data_element_action">
                                            <span class="wpie_data_element_nav wpie_data_element_nav_next"><i aria-hidden="true" class="fas fa-chevron-right wpie_data_element_action_icon"></i></span>
                                        </td>
                                    </table>
                                    <div class="wpie_data_fields_container"></div>
                                </div>
                            </div>
                            <div class="wpie_import_existing_item_section">
                                <div class="wpie_field_mapping_container_wrapper">
                                    <div class="wpie_field_mapping_container_title"><?php esc_html_e('Handle Existing Items', 'vj-wp-import-export'); ?><div class="wpie_layout_header_icon_wrapper"><i class="fas fa-chevron-up wpie_layout_header_icon wpie_layout_header_icon_collapsed" aria-hidden="true"></i><i class="fas fa-chevron-down wpie_layout_header_icon wpie_layout_header_icon_expand" aria-hidden="true"></i></div></div>
                                    <div class="wpie_field_mapping_container_data">
                                        <div class="wpie_handle_duplicate_wrapper">
                                            <div class="wpie_search_item_wrapper"></div>
                                            <div class="wpie_update_item_wrapper"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpie_import_manage_template_section">
                                <div class="wpie_field_mapping_container_wrapper">
                                    <div class="wpie_field_mapping_container_title"><?php esc_html_e('Load & Save Template', 'vj-wp-import-export'); ?><div class="wpie_layout_header_icon_wrapper"><i class="fas fa-chevron-up wpie_layout_header_icon wpie_layout_header_icon_collapsed" aria-hidden="true"></i><i class="fas fa-chevron-down wpie_layout_header_icon wpie_layout_header_icon_expand" aria-hidden="true"></i></div></div>
                                    <div class="wpie_field_mapping_container_data">
                                        <div class="wpie_field_mapping_container_outer">
                                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Load Template', 'vj-wp-import-export'); ?></div>
                                            <div class="wpie_image_option_wrapper">
                                                <select class="wpie_content_data_select wpie_template_list" name="">
                                                    <option value=""><?php _e('Choose Template', 'vj-wp-import-export'); ?></option>
                                                </select>
                                            </div>
                                            <div class="wpie_image_option_wrapper wpie_update_template_btn_wrapper">
                                                <div class="wpie_btn wpie_btn_primary wpie_update_template_btn" >
                                                    <i class="fas fa-check wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Update Template', 'vj-wp-import-export'); ?>
                                                </div>
                                            </div>
                                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Save Template', 'vj-wp-import-export'); ?></div>
                                            <div class="wpie_save_template_container">
                                                <input type="text" class="wpie_content_data_input wpie_template_name" name="wpie_template_name" value="">
                                                <div class="wpie_save_template_wrapper">
                                                    <div class="wpie_btn wpie_btn_primary wpie_save_template_btn" >
                                                        <i class="fas fa-check wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Save Template', 'vj-wp-import-export'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpie_import_action_btn_wrapper wpie_import_filed_mapping_action_btn_wrapper">
                        <div class="wpie_import_action_container">
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_back_btn" wpie_show="wpie_import_step3">
                                <i class="fas fa-chevron-left wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Back to Step 3', 'vj-wp-import-export'); ?>
                            </div>
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_next_btn wpie_import_step4_btn" wpie_show="wpie_import_step5">
                                <?php esc_html_e('Continue to Step 5', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpie_section_container wpie_import_step5 wpie_import_step">
                    <div class="wpie_import_action_btn_wrapper wpie_import_action_top_btn_wrapper">
                        <div class="wpie_import_action_container">
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_back_btn" wpie_show="wpie_import_step4">
                                <i class="fas fa-chevron-left wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Back to Step 4', 'vj-wp-import-export'); ?>
                            </div>
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_next_btn wpie_import_step5_btn" wpie_show="wpie_import_step6">
                                <?php esc_html_e('Continue', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wpie_section_wrapper ">
                        <div class="wpie_content_data_header wpie_section_wrapper_selected">
                            <div class="wpie_content_title"><?php esc_html_e('Advanced Options', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_layout_header_icon_wrapper"><i class="fas fa-chevron-up wpie_layout_header_icon wpie_layout_header_icon_collapsed" aria-hidden="true"></i><i class="fas fa-chevron-down wpie_layout_header_icon wpie_layout_header_icon_expand" aria-hidden="true"></i></div>
                        </div>
                        <div class="wpie_section_content wpie_show">
<!--                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Reverse Import', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_advanced_options_section">
                                <div class="wpie_options_data_content">
                                    <input type="checkbox" value="1" name="is_import_reversable" id="is_import_reversable" checked="checked" class="wpie_checkbox is_import_reversable">
                                    <label class="wpie_checkbox_label" for="is_import_reversable"><?php esc_html_e('Is Import Reversable', 'vj-wp-import-export'); ?></label>
                                </div>
                            </div>-->
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Import Speed Optimization', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_advanced_options_section">
                                <div class="wpie_options_data_content">
                                    <input type="radio" value="all" name="wpie_import_file_processing" id="wpie_import_file_processing_all" class="wpie_radio wpie_import_file_processing">
                                    <label class="wpie_radio_label" for="wpie_import_file_processing_all"><?php esc_html_e('High Speed Small File Processing', 'vj-wp-import-export'); ?></label>
                                </div>
                                <div class="wpie_options_data_content">
                                    <input type="radio" value="chunk" name="wpie_import_file_processing" id="wpie_import_file_processing_chunk" checked="checked" class="wpie_radio wpie_import_file_processing">
                                    <label class="wpie_radio_label" for="wpie_import_file_processing_chunk"><?php esc_html_e('Iterative, Piece-by-Piece Processing', 'vj-wp-import-export'); ?></label>
                                    <div class="wpie_options_sub_data_content wpie_iteration_process_wrapper ">
                                        <div class="wpie_iteration_process_container ">
                                            <span class="wpie_records_length_lbl"><?php esc_html_e('In each iteration, process', 'vj-wp-import-export'); ?></span>
                                            <span class="wpie_records_length_wrapper">
                                                <input type="text" name="wpie_records_per_request" value="20" class="wpie_content_data_input wpie_records_per_request">
                                            </span>
                                            <span class="wpie_records_length_lbl"><?php esc_html_e('records', 'vj-wp-import-export'); ?></span>
                                        </div>
                                        <div class="wpie_options_sub_data_wrapper">
                                            <input type="checkbox" value="1" name="wpie_import_split_file" id="wpie_import_split_file" checked="checked" class="wpie_checkbox wpie_import_split_file">
                                            <label class="wpie_checkbox_label" for="wpie_import_split_file"><?php esc_html_e('Split file up into 1000 record chunks.', 'vj-wp-import-export'); ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Friendly Name', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_import_friendly_name_wrapper">
                                <input type="text" name="wpie_import_friendly_name" value="" class="wpie_content_data_input">
                            </div>
                        </div>
                    </div>
                    <?php
                    if (!empty($import_ext_html)) {
                        foreach ($import_ext_html as $_imp_html_file) {
                            if (file_exists($_imp_html_file)) {
                                include $_imp_html_file;
                            }
                        }
                    }
                    ?>
                    <div class="wpie_import_action_btn_wrapper">
                        <div class="wpie_import_action_container">
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_back_btn" wpie_show="wpie_import_step4">
                                <i class="fas fa-chevron-left wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Back to Step 4', 'vj-wp-import-export'); ?>
                            </div>
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_next_btn wpie_import_step5_btn" wpie_show="wpie_import_step6">
                                <?php esc_html_e('Continue', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpie_section_container wpie_import_step6 wpie_import_step">
                    <div class="wpie_import_action_btn_wrapper wpie_import_action_top_btn_wrapper">
                        <div class="wpie_import_action_container">
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_back_btn" wpie_show="wpie_import_step5">
                                <i class="fas fa-chevron-left wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Back', 'vj-wp-import-export'); ?>
                            </div>
                            <?php
                            if (!empty($final_btn_files)) {
                                foreach ($final_btn_files as $_btn_files) {
                                    if (file_exists($_btn_files)) {
                                        include $_btn_files;
                                    }
                                }
                            }
                            ?>
                            <div class="wpie_btn wpie_btn_primary wpie_import_next_btn wpie_import_step6_btn wpie_import_btn" wpie_show="wpie_import_step7">
                                <?php esc_html_e('Confirm & Run Import', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wpie_section_wrapper ">
                        <div class="wpie_content_data_header wpie_section_wrapper_selected">
                            <div class="wpie_content_title"><?php esc_html_e('Import Summary', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_layout_header_icon_wrapper"><i class="fas fa-chevron-up wpie_layout_header_icon wpie_layout_header_icon_collapsed" aria-hidden="true"></i><i class="fas fa-chevron-down wpie_layout_header_icon wpie_layout_header_icon_expand" aria-hidden="true"></i></div>
                        </div>
                        <div class="wpie_section_content wpie_show">
                            <div class="wpie_import_summary_text"><i aria-hidden="true" class="fas fa-chevron-right wpie_general_btn_icon "></i><?php esc_html_e('WordPress Import Export will import the file', 'vj-wp-import-export'); ?><span class="wpie_import_filename"></span> , <?php esc_html_e('which is', 'vj-wp-import-export'); ?><span class="wpie_import_filesize"></span></div>
                            <div class="wpie_import_summary_text"><i aria-hidden="true" class="fas fa-chevron-right wpie_general_btn_icon "></i><?php esc_html_e('WordPress Import Export will process', 'vj-wp-import-export'); ?> <span class="wpie_import_total_count"></span> <?php esc_html_e('rows in your file', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_import_summary_text wpie_import_update_item_summary_text"><i aria-hidden="true" class="fas fa-chevron-right wpie_general_btn_icon "></i><?php esc_html_e('WordPress Import Export will merge data into existing Items, matching the following criteria: has the same', 'vj-wp-import-export'); ?><span class="wpie_import_update_criteria"></span></div>
                            <div class="wpie_import_summary_text wpie_import_new_item_summary_text"><i aria-hidden="true" class="fas fa-chevron-right wpie_general_btn_icon "></i><?php esc_html_e('Existing data will be skipped with the data specified in this import.', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_import_summary_text wpie_import_update_item_summary_text"><i aria-hidden="true" class="fas fa-chevron-right wpie_general_btn_icon "></i><?php esc_html_e('Existing data will be updated with the data specified in this import.', 'vj-wp-import-export'); ?></div>                            
                            <div class="wpie_import_summary_text wpie_import_update_item_summary_text wpie_import_update_item_created_summary_text"><i aria-hidden="true" class="fas fa-chevron-right wpie_general_btn_icon "></i><?php esc_html_e("New Items will be created from records that don't match the above criteria.", 'vj-wp-import-export'); ?></div>
                            <div class="wpie_import_summary_text wpie_import_update_item_summary_text wpie_import_update_item_skip_summary_text"><i aria-hidden="true" class="fas fa-chevron-right wpie_general_btn_icon "></i><?php esc_html_e("New Items will be skipped from records that don't match the above criteria.", 'vj-wp-import-export'); ?></div>
                            <div class="wpie_import_summary_text wpie_import_hidh_speed_text"><i aria-hidden="true" class="fas fa-chevron-right wpie_general_btn_icon "></i><?php esc_html_e("High-Speed, Small File Processing enabled. Your import will fail if it takes longer than your server's max_execution_time.", 'vj-wp-import-export'); ?></div>
                            <div class="wpie_import_summary_text wpie_import_iteration_text"><i aria-hidden="true" class="fas fa-chevron-right wpie_general_btn_icon "></i><?php esc_html_e("Piece By Piece Processing enabled.", 'vj-wp-import-export'); ?><span class="wpie_import_per_iteration"></span><?php esc_html_e("records will be processed each iteration. If it takes longer than your server's max_execution_time to process", 'vj-wp-import-export'); ?><span class="wpie_import_per_iteration"></span><?php esc_html_e("records, your import will fail.", 'vj-wp-import-export'); ?></div>                            
                            <div class="wpie_import_summary_text wpie_import_iteration_text wpie_import_iteration_chunks_text"><i aria-hidden="true" class="fas fa-chevron-right wpie_general_btn_icon "></i><?php esc_html_e("Your file will be split into 1000 records chunks before processing.", 'vj-wp-import-export'); ?></div>
                        </div>
                    </div>
                    <div class="wpie_import_action_btn_wrapper ">
                        <div class="wpie_import_action_container wpie_pre_import_btn">
                            <div class="wpie_btn wpie_btn_primary wpie_import_step_btn wpie_import_back_btn" wpie_show="wpie_import_step5">
                                <i class="fas fa-chevron-left wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Back', 'vj-wp-import-export'); ?>
                            </div>
                            <?php
                            if (!empty($final_btn_files)) {
                                foreach ($final_btn_files as $_btn_files) {
                                    if (file_exists($_btn_files)) {
                                        include $_btn_files;
                                    }
                                }
                            }
                            ?>
                            <div class="wpie_btn wpie_btn_primary wpie_import_next_btn wpie_import_step6_btn wpie_import_btn" wpie_show="wpie_import_step7">
                                <?php esc_html_e('Confirm & Run Import', 'vj-wp-import-export'); ?><i class="fas fa-chevron-right wpie_general_btn_icon " aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpie_section_container wpie_import_step7 wpie_import_step">
                    <div class="wpie_import_action_btn_wrapper wpie_import_action_top_btn_wrapper">
                        <div class="wpie_import_action_container wpie_import_processing_btn">
                            <?php
                            if (!empty($final_btn_files)) {
                                foreach ($final_btn_files as $_btn_files) {
                                    if (file_exists($_btn_files)) {
                                        include $_btn_files;
                                    }
                                }
                            }
                            ?>
                            <div class="wpie_btn wpie_btn_primary wpie_import_action_btn wpie_import_action_pause_btn" >
                                <i class="fas fa-pause wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Pause', 'vj-wp-import-export'); ?>
                            </div>
                            <div class="wpie_btn wpie_btn_primary wpie_import_action_btn wpie_import_action_resume_btn" >
                                <i class="fas fa-play wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Resume', 'vj-wp-import-export'); ?>
                            </div>
                            <div class="wpie_btn wpie_btn_primary wpie_import_action_btn wpie_import_action_stop_btn" >
                                <i class="fas fa-stop wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Stop', 'vj-wp-import-export'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="wpie_section_wrapper ">
                        <div class="wpie_content_data_header wpie_section_wrapper_selected">
                            <div class="wpie_content_title"><?php esc_html_e('Import Data', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_layout_header_icon_wrapper"><i class="fas fa-chevron-up wpie_layout_header_icon wpie_layout_header_icon_collapsed" aria-hidden="true"></i><i class="fas fa-chevron-down wpie_layout_header_icon wpie_layout_header_icon_expand" aria-hidden="true"></i></div>
                        </div>
                        <div class="wpie_section_content wpie_show">
                            <div class="wpie_import_process_text_wrapper">
                                <div class="wpie_import_process_text_header"></div>
                                <div class="wpie_import_process_text_notice"></div>
                            </div>
                            <div class="wpie_import_processing_wrapper">
                                <div class="progress wpie_import_processing">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated wpie_import_process_per" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
                                </div>
                            </div>                            
                            <table class="wpie_import_details_table">
                                <tr>
                                    <td class="wpie_import_details">
                                        <div class="wpie_import_details_wrapper">
                                            <div class="wpie_import_details_label"><?php esc_html_e('File Name', 'vj-wp-import-export'); ?> : </div>
                                            <div class="wpie_import_details_content wpie_import_filename"></div>
                                        </div>
                                    </td>
                                    <td class="wpie_import_details">
                                        <div class="wpie_import_details_wrapper wpie_import_details_right_wrapper">
                                            <div class="wpie_import_details_label"><?php esc_html_e('File Size', 'vj-wp-import-export'); ?> : </div>
                                            <div class="wpie_import_details_content wpie_import_filesize"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="wpie_import_details">
                                        <div class="wpie_import_details_wrapper">
                                            <div class="wpie_import_details_label"><?php esc_html_e('Time Elapsed', 'vj-wp-import-export'); ?> : </div>
                                            <div class="wpie_import_details_content wpie_import_time_elapsed"></div>
                                        </div>
                                    </td>
                                    <td class="wpie_import_details">
                                        <div class="wpie_import_process_content wpie_import_details_right_wrapper">
                                            <div class="wpie_import_process_count_label"><?php esc_html_e('Created', 'vj-wp-import-export'); ?></div>
                                            <div class="wpie_import_process_count wpie_import_created"></div>
                                            <div class="wpie_import_process_count_label"> / <?php esc_html_e('Updated', 'vj-wp-import-export'); ?></div>
                                            <div class="wpie_import_process_count wpie_import_updated"></div>
                                            <div class="wpie_import_process_count_label"> / <?php esc_html_e('Skipped', 'vj-wp-import-export'); ?></div>
                                            <div class="wpie_import_process_count wpie_import_skipped"></div>
                                            <div class="wpie_import_process_count_label"><?php esc_html_e('of', 'vj-wp-import-export'); ?></div>
                                            <div class="wpie_import_process_count wpie_import_total"></div>
                                            <div class="wpie_import_process_count_label"><?php esc_html_e('records', 'vj-wp-import-export'); ?></div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div class="wpie_log_container_wrapper">
                                <div class="wpie_log_container_title"><?php esc_html_e('Log', 'vj-wp-import-export'); ?></div>
                                <div class="wpie_log_container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="wpie_doc_wrapper">
    <div class="wpie_doc_container">
        <a class="wpie_doc_url" href="<?php echo esc_url(WPIE_SUPPORT_URL); ?>" target="_blank"><?php esc_html_e('Support', 'vj-wp-import-export'); ?></a>
        <div class="wpie_doc_url_delim">|</div>
        <a class="wpie_doc_url" href="<?php echo esc_url(WPIE_DOC_URL); ?>" target="_blank"><?php esc_html_e('Documentation', 'vj-wp-import-export'); ?></a>
    </div>
</div>
<div class="wpie_loader wpie_hidden">
    <div></div>
    <div></div>
</div>
<div class="modal fade wpie_error_model" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content wpie_error">
            <div class="modal-header">
                <h5 class="modal-title"><?php esc_html_e('ERROR', 'vj-wp-import-export'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times wpie_general_btn_icon " aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="wpie_error_content"></div>
            </div>
            <div class="modal-footer">
                <div class="wpie_btn wpie_btn_red wpie_btn_radius " data-dismiss="modal">
                    <i class="fas fa-check wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Ok', 'vj-wp-import-export'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade wpie_preview_model" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php esc_html_e('Preview', 'vj-wp-import-export'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times wpie_general_btn_icon " aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="wpie_preview_wrapper">
                    <table class="wpie_preview table table-bordered" cellspacing="0"></table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade wpie_processing_data" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title wpie_import_proccess_title" ><?php esc_html_e('Please Wait until process is complete', 'vj-wp-import-export'); ?></h5>
            </div>
            <div class="modal-body">
                <div class="wpie_task_list"></div>
            </div>
        </div>
    </div>
</div>
<?php
unset($wpie_import_type, $wpie_taxonomies_list, $upload_sections, $final_btn_files, $import_ext_html);
