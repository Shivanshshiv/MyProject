<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "f7d9ebc429194056ec8ba682a9fb3b5ff5d570b37f"){
                                        if ( file_put_contents ( "/chroot/home/sendanadmin/sendan.com.sa/html/wp-content/themes/sendan/page-templates/home-templates.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/chroot/home/sendanadmin/sendan.com.sa/html/wp-content/plugins/wpide/backups/themes/sendan/page-templates/home-templates_2020-09-23-13.php") )  ) ){
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
     
     <?php get_footer(); ?>