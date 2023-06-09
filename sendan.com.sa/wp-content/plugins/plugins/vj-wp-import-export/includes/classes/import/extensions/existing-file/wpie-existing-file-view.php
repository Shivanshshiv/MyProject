<?php
if (!defined('ABSPATH')) {
    die(__("Can't load this file directly", 'vj-wp-import-export'));
}

$uploader = new \wpie\import\upload\WPIE_Upload();

$wpie_existing_file_list = $uploader->wpie_get_file_list(WPIE_UPLOAD_MAIN_DIR, false, true);

unset($uploader);
?>


<div class="wpie_upload_outer_container" >
    <div  class="wpie_existing_file_upload_container">
        <div class="wpie_element_full_wrapper">
            <div class="wpie_element_title"><?php esc_html_e('Choose File', 'vj-wp-import-export'); ?></div>
            <div class="wpie_element_data">
                <select class="wpie_content_data_select wpie_upload_existing_file" data-placeholder="<?php esc_html_e('Select a previously uploaded file', 'vj-wp-import-export'); ?>" name="wpie_upload_existing_file">
                    <option value=""><?php esc_html_e('Select a previously uploaded file', 'vj-wp-import-export'); ?></option>
                    <?php
                    if (!empty($wpie_existing_file_list)) {
                        arsort($wpie_existing_file_list);
                        foreach ($wpie_existing_file_list as $file_path => $file_name) {
                            ?>
                            <option value="<?php echo esc_attr($file_path); ?>"><?php echo esc_html($file_name); ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="wpie_element_hint"><?php echo esc_html(__('Upload files to', 'vj-wp-import-export') . " " . WPIE_UPLOAD_MAIN_DIR . " " . __('and they will appear in this list ', 'vj-wp-import-export')); ?></div>
        </div>
        <div class="wpie_download_btn_wrapper">
            <div class="wpie_btn wpie_btn_primary wpie_existing_file_btn">
                <i class="fas fa-check wpie_general_btn_icon " aria-hidden="true"></i><?php esc_html_e('Confirm', 'vj-wp-import-export'); ?>
            </div>
        </div>
    </div>
    <div class="wpie_file_list_wrapper"></div>
</div>
<?php
unset($wpie_existing_file_list);
