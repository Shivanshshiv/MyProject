<?php
/**
 * The template for displaying job salary in list view
 *
 * Override this template by copying it to yourtheme/simple_job_board/v1/listing/list-view/job_salary.php
 *
 * @author      PressTigers
 * @package     Simple_Job_Board
 * @subpackage  Simple_Job_Board/templates/listing/list-view
 * @version     2.0.0
 * @since       2.2.3
 * @since       2.3.0   Added "sjb_list_view_job_salary_template" filter.
 * @since       2.4.0   Revised the whole HTML template
 */
ob_start();
?>

<!-- Start Job Gender
================================================== -->
<div class="col-md-3 col-sm-4 col-xs-12">
    <?php if ($job_salary = sjb_get_the_job_salary()) {
        ?>
        <div class="job-salary"><i class="fa fa-briefcase" aria-hidden="true"></i><?php sjb_the_job_salary(); ?></div>
    <?php } ?>
</div>
<!-- ==================================================
End Job Gender -->

<?php
$html = ob_get_clean();

/**
 * Modify the Job Listing -> Job Title Template.
 *
 * @since   2.3.0
 *
 * @param   html    $html   Job Title HTML.
 */
echo apply_filters('sjb_list_view_job_salary_template', $html);