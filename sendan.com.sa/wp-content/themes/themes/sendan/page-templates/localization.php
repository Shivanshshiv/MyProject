<?php 
/*
* Template Name: Localization
*/

get_header();
?>
	<div class="container-fluid all-pages-padding">
    <div class="container">
        <div class="row">
        <?php 
    	if(have_posts()):
    		while ( have_posts() ) :
    			the_post();
    			?>  
            <div class="col-md-3">
               <?php the_content(); ?>
            </div>
            
	        <?php
            if( have_rows('localization_Image') ):  
                $count  = 1 ; 
                while ( have_rows('localization_Image') ) : the_row(); 
                if($count++ == 1 ) :
                ?>	                            
                    <div class="col-md-9">
                        <img src="<?php echo the_sub_field('image'); ?>" class="img-fluid" style="border:1px #ccc solid;" />
                        <br/>
                        <br/>
                    </div>
                    <div class="col-md-3"></div>
        <?php   else: ?>
                    <div class="col-md-3">
                        <img src="<?php echo the_sub_field('image'); ?>" class="img-fluid" style="border:1px #ccc solid;" />
                    </div>
      <?php  endif; ?>
                 <?php 
                endwhile;
            endif;
            ?>
            <?php 
            endwhile;
        endif;
        ?>
        </div>
    </div>
</div>
 <?php get_footer(); ?>