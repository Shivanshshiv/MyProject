<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e297ec9de31bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/home-templates.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/home-templates_2019-04-12-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Home Page
*/

get_header();
?>
         <?php  get_template_part( 'template-parts/sections/home/slider-counter'); ?>  
     
        
    <!-- about -->
     <?php  get_template_part( 'template-parts/sections/home/about'); ?>  
     
     <?php  get_template_part( 'template-parts/sections/home/message'); ?>  
    <!-- our projects -->
    <?php  get_template_part( 'template-parts/sections/home/our-project'); ?>    
    <!-- large pic gallery -->
    <?php  get_template_part( 'template-parts/sections/home/large-slider'); ?>  
    <!-- our gallery -->
     <?php  get_template_part( 'template-parts/sections/home/project-gallery'); ?>  
    <!-- our Sustainability -->
     <?php  get_template_part( 'template-parts/sections/home/blog'); ?>    
     
     <?php get_footer(); ?>