<?php 
/*
* Template Name: People
*/
get_header();
?>
<div class="container-fluid all-pages-padding" style="padding-top:0;">
	<div class="container">
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
                
		<?php
        if( have_rows('people_details') ):     
            while ( have_rows('people_details') ) : the_row(); 
            ?>	
    		<div class="row">
    		
    			<div class="col-md-6 cus-people-img" style="padding-bottom:30px;">
    				<h4><?php echo the_sub_field('title'); ?></h4>
    				<p><?php echo the_sub_field('descriptions'); ?></p>
    			</div>
    			
    			<div class="col-md-6" style="padding-bottom:30px;">
    				<img src="<?php echo the_sub_field('image'); ?>" class="border-1px" />
    			</div>
    		</div>
		<?php 
		   endwhile;
	    endif;
		?>
    				
	</div>
</div>
	
<?php get_footer(); ?>