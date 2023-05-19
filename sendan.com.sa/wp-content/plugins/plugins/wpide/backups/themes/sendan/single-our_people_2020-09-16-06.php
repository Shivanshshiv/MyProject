<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "1c0c4960880e545f7724d71f4e8389cadffcb08e72"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/single-our_people.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/single-our_people_2020-09-16-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying all Our People posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sendan
 * @since 1.0.0
 */


get_header();
?>

<div class="container  section-10" data-aos="fade-left" style=" margin-top: 56px;" >
   <div class="row">
   	<?php  while ( have_posts() ) : the_post(); ?>
          <div class="col-md-2"></div>
          <div class="col-md-12 team_details22">
             <h3><?php the_field('designation'); ?></h3>
            </div>
                <div class="col-md-3 col-sm-12 people_img_left">

             	<?php 
            	if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'people-thumb' );
                }
            	?>
            	</div>
            	<div class="col-md-9 col-sm-12 people_img_content">
             <blockquote><?php the_content(); ?>
             <span><?php the_title() ; ?></span>
             </blockquote>
             </div>
          
     <?php endwhile; ?>
         
   </div>
</div> 

<?php get_footer() ; ?>