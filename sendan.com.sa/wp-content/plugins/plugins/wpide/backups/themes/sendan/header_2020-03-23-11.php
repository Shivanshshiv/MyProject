<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50d8c4e88ce4"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/header_2020-03-23-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sendan
 * @developed by Hariom ( Sendan International )
 * @since 1.0.0
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( is_front_page() || is_home() ) { ?>
    <div class="custom">    
        <?php  get_template_part( 'template-parts/sections/home/slider-image'); ?>    
       <?php  get_template_part( 'template-parts/header/menu-section'); ?>    
        <?php  get_template_part( 'template-parts/sections/home/slider-content' ); ?>
        <?php  get_template_part( 'template-parts/sections/home/slider-counter'); ?> 
    </div>
 <?php } else{
     get_template_part( 'template-parts/header/menu-section');
     ?>
    <div class="container-fluid main-content-home" style="padding-bottom:0px;">
         <div class="container">
               <div class="row">
                    <div class="col-md-12 heading-details" ><br><br>
                    <h2>
                    <?php 
                    if( get_field('page_heading') ) 
                        the_field('page_heading');
                    else
                        if ( is_archive() ) {
                            echo get_the_archive_title(); 
                        }
                        elseif(is_search() ){
                            echo 'You are searching for : ' . get_search_query();
                        }
                        else{
                            the_title();
                        }
                        
                        ?>
                    </h2>
                    <?php 
                    if( get_field('page_subheading') ) 
                        echo '<p class="main-p">'.get_field('page_subheading').'</p>';
                    ?>
                        
                	</div>
            </div>
        </div>
    </div>
<?php
 }
 ?>
        