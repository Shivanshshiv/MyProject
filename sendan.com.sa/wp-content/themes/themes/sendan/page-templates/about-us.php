<?php 
/*
* Template Name: About Us Page
*/

get_header();
?>
<style>
	.about-circle {padding-bottom:40px;}
	.about-circle .inner{background:#005825;width:140px;height:140px;border-radius:100px;color:#fff;text-align:center;vertical-align:middle;padding-top:35px;font-size:15px;}
</style>

<div class="container-fluid all-pages-padding">
	<div class="container">
		<div class="row about-circle">
		 <?php
            if( have_rows('about_counter') ):
                $count = 1 ;     
                while ( have_rows('about_counter') ) : the_row(); 
                ?>		
        			<div class="col-md-3">
        				<div class="inner">
        					<h4><?php echo the_sub_field('number'); ?></h4>
        					<p><?php echo the_sub_field('title'); ?></p>
        				</div>
        			</div>
			<?php endwhile;
			endif;
			?>
		
		</div>
		<?php 
		if(have_posts()){
			while ( have_posts() ) :
				the_post();
				?>
        		<div class="row">
        			<div class="col-md-8 abcd">
        			    <?php the_content(); ?>
        			</div>
        			<div class="col-md-4">
        			<?php
        			if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'full' , array('class' => 'img-fluid') );
                    }
                    ?>
        			</div>
        		</div>
     <?php endwhile;
	   }
        ?>
	</div>
</div>
<?php get_footer() ; ?>