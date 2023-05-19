<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50c1dbe19959"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/home-templates.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/home-templates_2020-03-17-08.php") )  ) ){
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
    <!-- our projects -->
    <?php  get_template_part( 'template-parts/sections/home/our-project'); ?>    
    <!-- large pic gallery -->
    <?php  get_template_part( 'template-parts/sections/home/large-slider'); ?>  
    <!-- our gallery -->
     <?php  get_template_part( 'template-parts/sections/home/project-gallery'); ?>  
    <!-- our Sustainability -->
     <?php  get_template_part( 'template-parts/sections/home/blog'); ?>    
     
     <?php get_footer(); ?>