<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "383536cba770d3d0fc594d17ca075ac47eb618bbda"){
                                        if ( file_put_contents ( "/home2/crebruns/sendan.com.sa/wp-content/plugins/simple-job-board/templates/v1/single-jobpost/job-meta/job-title.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home2/crebruns/sendan.com.sa/wp-content/plugins/wpide/backups/plugins/simple-job-board/templates/v1/single-jobpost/job-meta/job-title_2022-05-28-15.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying job title
 *
 * Override this template by copying it to yourtheme/simple_job_board/v1/single-jobpost/job-meta/job-title.php
 * 
 * @author      PressTigers
 * @package     Simple_Job_Board
 * @subpackage  Simple_Job_Board/templates/single-jobpost/job-meta
 * @version     1.0.0
 * @since       2.2.3
 * @since       2.3.0   Added "sjb_job_meta_job_title_template" filter.
 */
ob_start();
?>

<!-- Start Job Title 
================================================== -->
<?php 
if( 'sjb-layout' === get_option( 'job_board_pages_layout' ) || FALSE === get_option( 'job_board_pages_layout' ) ):
?>

<div class="col-md-12">
    <div class="job-detail" style="display: flex;">        
       <div> <?php the_title('<h3><span class="job-title">', '</span></h3>'); ?>   </div>
      <div style="margin-left: auto;">  <a class=" btn btn-primary" href="https://uat.sendan.com.sa:8003/job_form/job_detail/<?=get_the_ID();?>/">Apply</a>     </div>    
    </div>
    
</div>
<!-- End Job Title 
================================================== -->

<?php
endif;
$html_title = ob_get_clean();

/**
 * Modify the Job Title Template.
 *                                       
 * @since   2.3.0
 * 
 * @param   html    $html_title   Job Title HTML.                   
 */
echo apply_filters( 'sjb_job_meta_job_title_template', $html_title );