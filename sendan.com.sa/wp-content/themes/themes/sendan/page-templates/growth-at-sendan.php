<?php
/**
 * Template Name: Growth at sendan 
 *
 * @package Sendan
 * @since 1.0.0
 */


get_header();
?>
<div class="container-fluid all-pages-padding">
	 <div class="container">
	   <div class="row">
	    <div class="col-md-12">
        	<?php 
        		if(have_posts()){
        			while ( have_posts() ) :
        				the_post();
        				?>
                		<?php the_content(); ?>

             <?php endwhile;
        	   }
                ?>
            </div>
            <?php
                if( have_rows('Images_grow') ):  
                    while ( have_rows('Images_grow') ) : the_row(); 
                    ?>
                    <div class="col-md-6">
            		  <img src="<?php echo the_sub_field('image'); ?>" class="img-fluid" style="border:1px #ccc solid;">
            	  </div>
                    
            <?php endwhile;
            endif;
            ?>
        </div>
    </div>
</div>


<?php
get_footer();
