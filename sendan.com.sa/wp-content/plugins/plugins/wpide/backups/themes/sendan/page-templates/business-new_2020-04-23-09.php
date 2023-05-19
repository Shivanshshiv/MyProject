<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50e8986733bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/business-new.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/business-new_2020-04-23-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* 
*   Template Name: Business Page
*/

get_header(); ?>

 <div class="container-fluid section-10 business-bg" style="margin-top:80px;">
    <div class="container">

        <div class="row">
            <h2 class="aboutus-title">Mechanical Construction</h2>
        </div>

        <div class="row">
            <div id="businessquato2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <?php
                $count = 1;
                if( have_rows('slider_images') ): 

                	while( have_rows('slider_images') ): the_row(); 
                	?>
                        <li data-target="#businessquato2" data-slide-to="<?php echo $count; ?>" class="<?php if($count == 1) echo 'active' ?>"></li> 
                        	<?php 
                        $count++;
                    endwhile;
        		 endif;
        		?>
                </ol>
                <div class="carousel-inner ">
                 <?php
                    $count = 1;
                    if( have_rows('slider_images') ): 
    
                    	while( have_rows('slider_images') ): the_row(); 
                    	?>                
                            <div class="carousel-item <?php if($count == 1) echo 'active' ?>">
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
                <h2 class="aboutus-title">Our Services</h2>
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

                <ul>
                 <?php
                    $count = 1;
                    if( have_rows('services_list') ): 
    
                    	while( have_rows('services_list') ): the_row(); 
                    	?>  
                
                    <li>
                        <div class="service-icon"><img src="<?php echo get_template_directory_uri() ;?>/assets/image/tick.png"></div>
                        Piping Fabrication
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