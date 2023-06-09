<?php
if (!defined('ABSPATH')) {
        die(__("Can't load this file directly", 'vj-wp-import-export'));
}

add_filter('wpie_import_mapping_fields', "wpie_import_user_mapping_fields", 20, 2);

if (!function_exists("wpie_import_user_mapping_fields")) {

        function wpie_import_user_mapping_fields($sections = array(), $wpie_import_type = "") {

                global $wp_version;

                $uniqid = uniqid();

                ob_start();
                ?>
                <div class="wpie_field_mapping_container_wrapper wpie_<?php echo esc_attr($wpie_import_type); ?>_field_mapping_container">
                    <div class="wpie_field_mapping_container_title wpie_active"><?php esc_html_e("User's Data", 'vj-wp-import-export'); ?><div class="wpie_layout_header_icon_wrapper"><i class="fas fa-chevron-up wpie_layout_header_icon wpie_layout_header_icon_collapsed" aria-hidden="true"></i><i class="fas fa-chevron-down wpie_layout_header_icon wpie_layout_header_icon_expand" aria-hidden="true"></i></div></div>
                    <div class="wpie_field_mapping_container_data" style="display: block;">
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('First Name', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_first_name" name="wpie_item_first_name" value=""/>
                            </div>
                        </div>
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Last Name', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_last_name" name="wpie_item_last_name" value=""/>
                            </div>
                        </div>
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Role', 'vj-wp-import-export'); ?><i class="far fa-question-circle wpie_data_tipso" data-tipso="<?php esc_attr_e("A string with role slug used to set the user's role. Default role is subscriber.", "vj-wp-import-export"); ?>"></i></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_user_role" name="wpie_item_user_role" value=""/>
                            </div>
                        </div>
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Nickname', 'vj-wp-import-export'); ?><i class="far fa-question-circle wpie_data_tipso" data-tipso="<?php esc_attr_e("The user's nickname, defaults to the user's username.", "vj-wp-import-export"); ?>"></i></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_nickname" name="wpie_item_nickname" value=""/>
                            </div>
                        </div>
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Description', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_description" name="wpie_item_description" value=""/>
                            </div>
                        </div>
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title">* <?php esc_html_e('Login / Username', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_user_login" name="wpie_item_user_login" value=""/>
                            </div>
                        </div>
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Password', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_user_pass" name="wpie_item_user_pass" value=""/>
                            </div>
                            <div class="wpie_field_mapping_element_other_option">
                                <input type="checkbox" value="1" name="wpie_item_set_hashed_password" id="wpie_item_set_hashed_password" class="wpie_checkbox wpie_item_set_hashed_password">
                                <label class="wpie_checkbox_label" for="wpie_item_set_hashed_password"><?php esc_html_e('This is a hashed password from another WordPress site', 'vj-wp-import-export'); ?></label>
                                <i class="far fa-question-circle wpie_data_tipso" data-tipso="<?php esc_attr_e("If the value being imported is a hashed password from another WordPress site, enable this option.", "vj-wp-import-export"); ?>"></i>
                            </div>
                        </div>
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Nicename', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_user_nicename" name="wpie_item_user_nicename" value=""/>
                            </div>
                        </div>
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title">* <?php esc_html_e('Email', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_user_email" name="wpie_item_user_email" value=""/>
                            </div>
                        </div>
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Registered Date', 'vj-wp-import-export'); ?><i class="far fa-question-circle wpie_data_tipso" data-tipso="<?php esc_attr_e("The date the user registered. Format is Y-m-d H:i:s", "vj-wp-import-export"); ?>"></i></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_user_registered" name="wpie_item_user_registered" value=""/>
                            </div>
                        </div>
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Display Name', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_display_name" name="wpie_item_display_name" value=""/>
                            </div>
                        </div>
                        <div class="wpie_field_mapping_container_element">
                            <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Website URL', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="text" class="wpie_content_data_input wpie_item_user_url" name="wpie_item_user_url" value=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $user_data = ob_get_clean();

                ob_start();
                ?>
                <div class="wpie_field_mapping_container_wrapper">
                    <div class="wpie_field_mapping_container_title"><?php esc_html_e('User Meta', 'vj-wp-import-export'); ?><div class="wpie_layout_header_icon_wrapper"><i class="fas fa-chevron-up wpie_layout_header_icon wpie_layout_header_icon_collapsed" aria-hidden="true"></i><i class="fas fa-chevron-down wpie_layout_header_icon wpie_layout_header_icon_expand" aria-hidden="true"></i></div></div>
                    <div class="wpie_field_mapping_container_data">
                        <div class="wpie_cf_wrapper">
                            <div class="wpie_field_mapping_radio_input_wrapper wpie_cf_notice_wrapper">
                                <input type="checkbox" id="wpie_item_not_add_empty" name="wpie_item_not_add_empty" checked="checked" value="1" class="wpie_checkbox wpie_item_not_add_empty">
                                <label class="wpie_checkbox_label" for="wpie_item_not_add_empty"><?php esc_html_e("Don't add Empty value fields in database.", 'vj-wp-import-export'); ?><i class="far fa-question-circle wpie_data_tipso" data-tipso="<?php esc_attr_e("it's highly recommended. If custom field value is empty then it skip perticular field and not add to database. it's save memory and increase import speed", "vj-wp-import-export"); ?>"></i></label>
                            </div>
                            <table class="wpie_cf_table">
                                <thead>
                                    <tr>
                                        <th><?php esc_html_e('Name', 'vj-wp-import-export'); ?></th>
                                        <th><?php esc_html_e('Value', 'vj-wp-import-export'); ?></th>
                                        <th><?php esc_html_e('Options', 'vj-wp-import-export'); ?></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="wpie_cf_option_outer_wrapper">
                                    <tr class="wpie_cf_option_wrapper wpie_data_row" wpie_row_id="<?php echo esc_attr($uniqid); ?>">
                                        <td class="wpie_item_cf_name_wrapper">
                                            <input type="text" class="wpie_content_data_input wpie_item_cf_name" value="" name="wpie_item_cf[<?php echo esc_attr($uniqid); ?>][name]"/>
                                        </td>
                                        <td class="wpie_item_cf_value_wrapper">
                                            <div class="wpie_cf_normal_data">
                                                <input type="text" class="wpie_content_data_input wpie_item_cf_value" value="" name="wpie_item_cf[<?php echo esc_attr($uniqid); ?>][value]"/>
                                            </div>
                                            <div class="wpie_btn wpie_btn_primary wpie_cf_serialized_data_btn">
                                                <i class="fas fa-hand-point-up wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Click to specify', 'vj-wp-import-export'); ?>
                                            </div>
                                            <div class="wpie_cf_child_data"></div>
                                        </td>
                                        <td class="wpie_item_cf_option_wrapper">
                                            <select class="wpie_content_data_select wpie_item_cf_option" name="wpie_item_cf[<?php echo esc_attr($uniqid); ?>][option]" >
                                                <option value="normal"><?php esc_html_e('Normal Data', 'vj-wp-import-export'); ?></option>
                                                <option value="serialized"><?php esc_html_e('Serialized Data', 'vj-wp-import-export'); ?></option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="wpie_remove_cf_btn"><i class="fas fa-trash wpie_trash_general_btn_icon " aria-hidden="true"></i></div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4">
                                            <div class="wpie_btn wpie_btn_primary wpie_cf_add_btn">
                                                <i class="fas fa-plus wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Add New', 'vj-wp-import-export'); ?>
                                            </div> 
                                            <div class="wpie_btn wpie_btn_primary wpie_cf_close_btn">
                                                <i class="fas fa-times wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Close', 'vj-wp-import-export'); ?>
                                            </div> 
                                        </th>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

                <?php
                $user_meta = ob_get_clean();

                $field_mapping_sections = array(
                        '100' => $user_data,
                        '200' => $user_meta,
                );

                unset($user_data);
                unset($user_meta);

                return apply_filters("wpie_pre_user_field_mapping_section", array_replace($sections, $field_mapping_sections), $wpie_import_type);
        }

}

add_filter('wpie_import_search_existing_item', "wpie_import_user_search_existing_item", 20, 2);

if (!function_exists("wpie_import_user_search_existing_item")) {

        function wpie_import_user_search_existing_item($sections = "", $wpie_import_type = "") {

                ob_start();
                ?>
                <div class="wpie_field_mapping_container_element">
                    <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Search Existing Item on your site based on...', 'vj-wp-import-export'); ?></div>
                    <div class="wpie_field_mapping_other_option_wrapper">
                        <input type="radio" class="wpie_radio wpie_field_mapping_other_option_radio wpie_existing_item_search_logic" checked="checked" name="wpie_existing_item_search_logic" id="wpie_existing_item_search_logic_login" value="login"/>
                        <label for="wpie_existing_item_search_logic_login" class="wpie_radio_label"><?php esc_html_e('match by Login', 'vj-wp-import-export'); ?></label>
                    </div>
                    <div class="wpie_field_mapping_other_option_wrapper">
                        <input type="radio" class="wpie_radio wpie_field_mapping_other_option_radio wpie_existing_item_search_logic"  name="wpie_existing_item_search_logic" id="wpie_existing_item_search_logic_email" value="email"/>
                        <label for="wpie_existing_item_search_logic_email" class="wpie_radio_label"><?php esc_html_e('match by Email', 'vj-wp-import-export'); ?></label>
                    </div>
                    <div class="wpie_field_mapping_other_option_wrapper">
                        <input type="radio" class="wpie_radio wpie_field_mapping_other_option_radio wpie_existing_item_search_logic"  name="wpie_existing_item_search_logic" id="wpie_existing_item_search_logic_cf" value="cf"/>
                        <label for="wpie_existing_item_search_logic_cf" class="wpie_radio_label"><?php esc_html_e('User Meta', 'vj-wp-import-export'); ?></label>
                        <div class="wpie_radio_container">
                            <table class="wpie_search_based_on_cf_table">
                                <thead>
                                    <tr>
                                        <th><?php esc_html_e('Name', 'vj-wp-import-export'); ?></th>
                                        <th><?php esc_html_e('Value', 'vj-wp-import-export'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="wpie_content_data_input wpie_existing_item_search_logic_cf_key" name="wpie_existing_item_search_logic_cf_key" value=""/></td>
                                        <td><input type="text" class="wpie_content_data_input wpie_existing_item_search_logic_cf_value" name="wpie_existing_item_search_logic_cf_value" value=""/></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="wpie_field_mapping_other_option_wrapper">
                        <input type="radio" class="wpie_radio wpie_field_mapping_other_option_radio wpie_existing_item_search_logic"  name="wpie_existing_item_search_logic" id="wpie_existing_item_search_logic_id" value="id"/>
                        <label for="wpie_existing_item_search_logic_id" class="wpie_radio_label"><?php esc_html_e('User ID', 'vj-wp-import-export'); ?></label>
                        <div class="wpie_radio_container"><input type="text" class="wpie_content_data_input wpie_existing_item_search_logic_id" name="wpie_existing_item_search_logic_id" value=""/></div>
                    </div>
                </div>
                <?php
                $handle_section = ob_get_clean();

                return $handle_section;
        }

}

add_filter('wpie_import_update_existing_item_fields', "wpie_import_user_update_existing_item_fields", 20, 2);

if (!function_exists("wpie_import_user_update_existing_item_fields")) {

        function wpie_import_user_update_existing_item_fields($sections = "", $wpie_import_type = "") {

                ob_start();
                ?>
                <div class="wpie_field_mapping_container_element">
                    <div class="wpie_field_mapping_inner_title"><?php esc_html_e('Update Existing items data', 'vj-wp-import-export'); ?></div>
                    <div class="wpie_field_mapping_other_option_wrapper">
                        <input type="radio" class="wpie_radio wpie_item_update wpie_item_update_all" checked="checked" name="wpie_item_update" id="wpie_item_update_all" value="all"/>
                        <label for="wpie_item_update_all" class="wpie_radio_label"><?php esc_html_e('Update all data', 'vj-wp-import-export'); ?></label>
                    </div>
                    <div class="wpie_field_mapping_other_option_wrapper">
                        <input type="radio" class="wpie_radio wpie_item_update wpie_item_update_specific" name="wpie_item_update" id="wpie_item_update_specific" value="specific"/>
                        <label for="wpie_item_update_specific" class="wpie_radio_label"><?php esc_html_e('Choose which data to update', 'vj-wp-import-export'); ?></label>
                        <div class="wpie_radio_container">
                            <div class="wpie_update_item_all_action"><?php esc_html_e('Check/Uncheck All', 'vj-wp-import-export'); ?></div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_fname" checked="checked" name="is_update_item_fname" id="is_update_item_fname" value="1"/>
                                <label for="is_update_item_fname" class="wpie_checkbox_label"><?php esc_html_e('First Name', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_lname" checked="checked" name="is_update_item_lname" id="is_update_item_lname" value="1"/>
                                <label for="is_update_item_lname" class="wpie_checkbox_label"><?php esc_html_e('Last Name', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_role" checked="checked" name="is_update_item_role" id="is_update_item_role" value="1"/>
                                <label for="is_update_item_role" class="wpie_checkbox_label"><?php esc_html_e('Role', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_nickname" checked="checked" name="is_update_item_nickname" id="is_update_item_nickname" value="1"/>
                                <label for="is_update_item_nickname" class="wpie_checkbox_label"><?php esc_html_e('Nickname', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_desc" checked="checked" name="is_update_item_desc" id="is_update_item_desc" value="1"/>
                                <label for="is_update_item_desc" class="wpie_checkbox_label"><?php esc_html_e('Description', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_login" checked="checked" name="is_update_item_login" id="is_update_item_login" value="1"/>
                                <label for="is_update_item_login" class="wpie_checkbox_label"><?php esc_html_e('Login', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_password" checked="checked" name="is_update_item_password" id="is_update_item_password" value="1"/>
                                <label for="is_update_item_password" class="wpie_checkbox_label"><?php esc_html_e('Password', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_nicename" checked="checked" name="is_update_item_nicename" id="is_update_item_nicename" value="1"/>
                                <label for="is_update_item_nicename" class="wpie_checkbox_label"><?php esc_html_e('Nicename', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_email" checked="checked" name="is_update_item_email" id="is_update_item_email" value="1"/>
                                <label for="is_update_item_email" class="wpie_checkbox_label"><?php esc_html_e('Email', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_registered_date" checked="checked" name="is_update_item_registered_date" id="is_update_item_registered_date" value="1"/>
                                <label for="is_update_item_registered_date" class="wpie_checkbox_label"><?php esc_html_e('Registered Date', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_display_name" checked="checked" name="is_update_item_display_name" id="is_update_item_display_name" value="1"/>
                                <label for="is_update_item_display_name" class="wpie_checkbox_label"><?php esc_html_e('Display Name', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_url" checked="checked" name="is_update_item_url" id="is_update_item_url" value="1"/>
                                <label for="is_update_item_url" class="wpie_checkbox_label"><?php esc_html_e('Website URL', 'vj-wp-import-export'); ?></label>
                            </div>
                            <div class="wpie_field_mapping_other_option_wrapper">
                                <input type="checkbox" class="wpie_checkbox wpie_item_update_field is_update_item_cf" checked="checked" name="is_update_item_cf" id="is_update_item_cf" value="1"/>
                                <label for="is_update_item_cf" class="wpie_checkbox_label"><?php esc_html_e('User Meta', 'vj-wp-import-export'); ?></label>
                                <div class="wpie_checkbox_container">
                                    <div class="wpie_field_mapping_other_option_wrapper">
                                        <input type="radio" class="wpie_radio wpie_item_update_cf wpie_item_update_cf_append" checked="checked" name="wpie_item_update_cf" id="wpie_item_update_cf_append" value="append"/>
                                        <label for="wpie_item_update_cf_append" class="wpie_radio_label"><?php esc_html_e('Update all User Meta and keep meta if not found in file', 'vj-wp-import-export'); ?></label>
                                    </div>
                                    <div class="wpie_field_mapping_other_option_wrapper">
                                        <input type="radio" class="wpie_radio wpie_item_update_cf wpie_item_update_cf_all" name="wpie_item_update_cf" id="wpie_item_update_cf_all" value="all"/>
                                        <label for="wpie_item_update_cf_all" class="wpie_radio_label"><?php esc_html_e('Update all User Meta and Remove meta if not found in file', 'vj-wp-import-export'); ?></label>
                                    </div>
                                    <div class="wpie_field_mapping_other_option_wrapper">
                                        <input type="radio" class="wpie_radio wpie_item_update_cf wpie_item_update_cf_includes" name="wpie_item_update_cf" id="wpie_item_update_cf_includes" value="includes"/>
                                        <label for="wpie_item_update_cf_includes" class="wpie_radio_label"><?php esc_html_e("Update only these User Meta, leave the rest alone", 'vj-wp-import-export'); ?></label>
                                        <div class="wpie_radio_container">
                                            <input type="text" class="wpie_content_data_input wpie_item_update_cf_includes_data" name="wpie_item_update_cf_includes_data" value=""/>
                                        </div>
                                    </div>
                                    <div class="wpie_field_mapping_other_option_wrapper">
                                        <input type="radio" class="wpie_radio wpie_item_update_cf wpie_item_update_cf_excludes" name="wpie_item_update_cf" id="wpie_item_update_cf_excludes" value="excludes"/>
                                        <label for="wpie_item_update_cf_excludes" class="wpie_radio_label"><?php esc_html_e("Leave these User Meta alone, update all other User Meta", 'vj-wp-import-export'); ?></label>
                                        <div class="wpie_radio_container">
                                            <input type="text" class="wpie_content_data_input wpie_item_update_cf_excludes_data" name="wpie_item_update_cf_excludes_data" value=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $existing_item = ob_get_clean();

                return $existing_item;
        }

}
