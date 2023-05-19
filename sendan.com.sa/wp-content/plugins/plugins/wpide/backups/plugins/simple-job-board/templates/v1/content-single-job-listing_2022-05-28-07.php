<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "383536cba770d3d0fc594d17ca075ac474f8e07315"){
                                        if ( file_put_contents ( "/home2/crebruns/sendan.com.sa/wp-content/plugins/simple-job-board/templates/v1/content-single-job-listing.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home2/crebruns/sendan.com.sa/wp-content/plugins/wpide/backups/plugins/simple-job-board/templates/v1/content-single-job-listing_2022-05-28-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Single view Job Fetures
 * 
 * The template for displaying job content in the single-jobpost.php template
 * 
 * Override this template by copying it to yourtheme/simple_job_board/v1/content-single-job-listing.php
 * 
 * @author 	PressTigers
 * @package     Simple_Job_Board
 * @subpackage  Simple_Job_Board/Templates
 * @version     1.0.0
 * @since       2.1.0
 * @since       2.2.3   Added the_content function.
 * @since       2.3.0   Added "sjb_single_job_listing_template" filter.
 */
ob_start();
?>

<!-- Start Job Details
================================================== -->

<?php
/**
 * single_job_listing_start hook
 *
 * @hooked job_listing_meta_display - 20 ( Job Listing Company Meta )
 * 
 * @since   2.1.0
 */
do_action('sjb_single_job_listing_start');
?>

<div class="job-description">
    
    <?php
    /**
     * Display the post content.
     * 
     * The "the_content" is used to filter the content of the job post. Also make other plugins shortcode compatible with job post editor. 
     */
    /*the_content();*/
    $content = get_the_content(); 
    $content = apply_filters( 'the_content', $content );
    echo $content;
    ?>
</div>
<div class="clearfix"></div>

<?php
/**
 * single-job-listing-end hook
 * 
 * @hooked job_listing_features - 20 ( Job Features )
 * @hooked job_listing_application_form - 30 ( Job Application Form )
 * 
 * @since   2.1.0
 */
do_action('sjb_single_job_listing_end');
?>
<!-- ==================================================
End Job Details -->

<?php
$html = ob_get_clean();

/**
 * Modify the Single Job Listing Template. 
 *                                       
 * @since   2.3.0
 * 
 * @param   html    $html   Single Job Listing HTML.                   
 */
echo apply_filters('sjb_single_job_listing_template', $html);