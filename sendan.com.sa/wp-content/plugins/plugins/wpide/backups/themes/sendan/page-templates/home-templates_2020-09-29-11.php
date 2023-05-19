<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "f7d9ebc429194056ec8ba682a9fb3b5f35e7cd4694"){
                                        if ( file_put_contents ( "/chroot/home/sendanadmin/sendan.com.sa/html/wp-content/themes/sendan/page-templates/home-templates.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/chroot/home/sendanadmin/sendan.com.sa/html/wp-content/plugins/wpide/backups/themes/sendan/page-templates/home-templates_2020-09-29-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Home Page
* @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
*/

get_header();
?>
         
    <!-- about -->
     <?php  get_template_part( 'template-parts/sections/home/about'); ?> 
     <!--bussiness--> 
     <?php  get_template_part( 'template-parts/sections/home/bussiness'); ?>  
     <!--sustainability--> 
     <?php  get_template_part( 'template-parts/sections/home/sustainability'); ?>  
    <!-- our projects -->
    <?php  get_template_part( 'template-parts/sections/home/our-project'); ?>    
    <!-- large pic gallery -->
   
     <!--our Career -->
     <?php  get_template_part( 'template-parts/sections/home/career'); ?>    
     
     
<!--video modal popup--->
<div class="modal fade bd-example-modal-lg" id="nationaldayvideomodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close closevideo" data-dismiss="modal">&times;</button>
       
      </div>      
        <video width="100%" height"510" id="save_video_src" src="http://sendanit.com/sendan_web/wp-content/uploads/2020/09/nationalday_video.mp4" controls autoplay />

    </div>
  </div>
</div>
<!--video modal popup--->
     
     <?php get_footer(); ?>