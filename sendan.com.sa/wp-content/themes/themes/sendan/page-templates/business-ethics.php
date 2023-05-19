<?php
/* 
*   Template Name: Business Ethics
*/

get_header(); ?>

	<div class="container-fluid all-pages-padding">
	 <div class="container">
	   <div class="row">
	   <?php 
    		if(have_posts()):
    			while ( have_posts() ) :
    				the_post();
    				?>    				
        		  <div class="col-md-10">
            	        <?php the_content(); ?>
            	  </div>
            	  <?php 
            	  if( have_rows('business_ethics') ): 

                	while( have_rows('business_ethics') ): the_row(); 
                	?>
	
        		  <div class="col-md-2 text-center">
            		  <img src="<?php echo get_sub_field('pdf_image'); ?>" class="img-fluid border-1px" />
            		  <a href="<?php echo get_sub_field('upload_pdf'); ?>" target="_blank"><img src="<?php echo get_sub_field('pdf_download_image'); ?>" class="img-fluid" style="margin-top:5px;"/></a>
        		  </div>
        		  	<?php endwhile;
        		 endif;
        		?>
        		  
        		</div>  
        		<?php endwhile;
    		 endif;
    		?>
	 </div>
	</div>
	
	

<?php 
get_footer(); ?>