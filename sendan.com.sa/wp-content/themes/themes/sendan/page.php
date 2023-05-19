<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sendan
 * @since 1.0.0
 */


get_header();
?>
<div class="container-fluid all-pages-padding">
	 <div class="container">
	   <div class="row">
	    <div class="col-md-12"><br><br>
	    
        	<?php 
        		if(have_posts()){
        			while ( have_posts() ) :
        				the_post();
        				?>
                		<div class="row">
                			<div class="col-md-12">
                			    <?php the_content(); ?>
                			</div>
                		
                		</div>
             <?php endwhile;
        	   }
                ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
