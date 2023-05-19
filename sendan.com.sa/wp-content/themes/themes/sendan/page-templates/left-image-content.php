<?php
/*
* Template Name: Left Image Content
*/
get_header();
?>

<div class="container-fluid main-content-home" style="padding-top:0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				
				<?php 
        		if(have_posts()){
        			while ( have_posts() ) :
        				the_post();
        				?>
                		<div class="row">
                		<div class="col-md-3">
                			<?php
                			if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'full' , array('class' => 'img-fluid') );
                            }
                            ?>
                			</div>
                			<div class="col-md-9">
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


<?php get_footer() ; ?>