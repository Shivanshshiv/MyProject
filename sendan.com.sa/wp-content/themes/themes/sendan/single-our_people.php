<?php
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
             <h3><?php the_title() ; ?></h3>
             <h4><?php the_field('designation'); ?></h4>
            </div>
                <div class="col-md-3 col-sm-12 people_img_left">

             	<?php 
            	if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'people-thumb' );
                }
            	?>
            	</div>
            	<div class="col-md-9 col-sm-12 people_img_content">
             <?php the_content(); ?>
             </div>
          
     <?php endwhile; ?>
         
   </div>
</div> 

<?php get_footer() ; ?>