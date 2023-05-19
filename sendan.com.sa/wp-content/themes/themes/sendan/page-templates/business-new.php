<?php
/* 
*   Template Name: Business Page
*/

get_header(); ?>

 <div class="container-fluid section-10 business-bg" style="margin-top:80px;">
    <div class="container">

        <div class="row">
            <h2 class="aboutus-title"><?php the_title(); ?></h2>
        </div>

        <div class="row">
            <div id="businessquato2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators slide-botom">
                <?php
                $count = 0;
                if( have_rows('slider_images') ): 

                	while( have_rows('slider_images') ): the_row(); 
                	?>
                        <li data-target="#businessquato2" data-slide-to="<?php echo $count; ?>" class="<?php if($count == 0) echo 'active' ?>"></li> 
                        	<?php 
                        $count++;
                    endwhile;
        		 endif;
        		?>
                </ol>
                <div class="carousel-inner ">
                 <?php
                    $count = 0;
                    if( have_rows('slider_images') ): 
    
                    	while( have_rows('slider_images') ): the_row(); 
                    	?>                
                            <div class="carousel-item <?php if($count == 0) echo 'active' ?>">
                                <img class="img-fluid" src="<?php echo get_sub_field('images'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                            </div>
                        <?php $count++;
                        endwhile;
            		endif;
            		?>

                </div>

                <a style="margin-left: -34px; " class="carousel-control-prev" href="#businessquato2" role="button" data-slide="prev">
                    <div class="cus-pre">
                        <img width="10" src="<?php echo get_template_directory_uri(); ?>/assets/image/left.png">
                    </div>
                </a>
                <a style="   margin-right: -34px; " class="carousel-control-next" href="#businessquato2" role="button" data-slide="next">
                    <div class="cus-pre">
                        <img width="10" src="<?php echo get_template_directory_uri(); ?>/assets/image/right.png">
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 padd0 mt-20" data-aos="fade-left">
                <!--h2 class="aboutus-title">Our Services</h2-->
                	<?php 
            		if(have_posts()):
            			while ( have_posts() ) :
            				the_post();
            				the_content();
    			        endwhile;
                    endif;
                    ?> 
                
            </div>

            <div class="col-md-12 f-left padd0 business-page" data-aos="fade-right">
                <h2 class="aboutus-title">Our Services</h2>
                <ul>
                 <?php
                    $count = 1;
                    if( have_rows('services_list') ): 
    
                    	while( have_rows('services_list') ): the_row(); 
                    	?>  
                
                    <li>
                        <div class="service-icon"><img src="<?php echo get_template_directory_uri() ;?>/assets/image/tick.png"></div>
                        <?php echo get_sub_field('services_name'); ?>
                    </li>
                     <?php 
                        endwhile;
                    endif;
                    ?> 
                    
                </ul>

            </div>
        </div>

    </div>

</div>
<div class="clearfix"></div>

<?php get_footer(); ?>