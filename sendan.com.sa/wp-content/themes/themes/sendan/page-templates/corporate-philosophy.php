<?php 
/*
* Template Name: Corporate Philosophy
*/
get_header();
?>
	<div class="container-fluid all-pages-padding" style="padding-top:0;">
	 <div class="container">
	   <div class="row">
	        <?php
               if( have_rows('corporate_philosophy_green_box') ):     
                while ( have_rows('corporate_philosophy_green_box') ) : the_row(); 
                    ?>
                    <div class="col-md-6" style="padding-bottom:30px;">
                		   <div style="background:#005825;padding:15px;color:#fff;"><h2><?php echo the_sub_field('title'); ?></h2>
                		   <p><?php echo the_sub_field('descriptions'); ?></p></div>
                	</div>
                <?php endwhile;
                endif;
             ?>
		</div>
		 <div class="row">
    		  <div class="col-md-12" style="padding-bottom:30px;">
    		     <h2><b style="color:#005825;">OUR VALUES</b></h2>
    		  </div>
		 </div>
		 
		 <div class="row">	  
		  <?php
           if( have_rows('our_value_content') ):     
            while ( have_rows('our_value_content') ) : the_row(); 
                ?>
    		  <div class="col-md-4" style="padding-bottom:30px;">
    		    <h5><b style="color:#005825;"><?php echo the_sub_field('title'); ?></b></h5>
    		    <p><?php echo the_sub_field('descriptions'); ?></p>
    		  </div>
	   <?php endwhile;
            endif;
         ?>
		 </div>
	 </div>
	</div>
	
	<?php get_footer(); ?>