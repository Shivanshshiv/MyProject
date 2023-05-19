<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0bdae52e11cf3cce78c578ddf3df4d1c3643765718"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/career.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/career_2020-06-06-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* Template Name: Career
*/
get_header();
?>


<!-- ceo message -->
<div  id="join_group"></div>
<div class="clearfix"></div>
<div class="container-fluid  section-10 career-join" style=" padding-top: 90px;  background-color: #f5f5f5;background-image: url(<?php the_field('jog_background_image') ?>);">
    <div class="container">
        <div class="row">

        

        <div class="col-md-12 padd0">
            <div class="col-md-5 about-ceo f-left padd0">
                <div class="col-md-12 padd0">
                    <h2 class="aboutus-title"><?php the_title(); ?></h2>
                </div>
            </div>

            <div class="col-md-7 f-left  jointext-car" data-aos="fade-right">
                <h4><?php the_field('jog_title'); ?></h4>
                <?php the_field('jog_content'); ?>
            </div>

        </div>
        </div>
    </div>
    <div  id="your_growth"></div>
</div>
<div class="clearfix"></div>

<!-------------------------------------------------------------->

<div class="container  section-10" id="your_growth111" data-aos="fade-left">
    <div class="row">
        <div class="col-md-12">
            <h2 class="aboutus-title">Your Growth at Sendan</h2>
        </div>
    </div>

    <div class="col-md-6 f-left padd0">
        <div id="career-20" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" style="bottom: -40px;">
            <?php
                $count = 1;
                if( have_rows('gas_slider_image') ): 

                	while( have_rows('gas_slider_image') ): the_row(); 
                	?>
                        <li data-target="#career-20" data-slide-to="<?php echo $count; ?>" class="<?php if($count == 1) echo 'active' ?>"></li> 
                        	<?php 
                        $count++;
                    endwhile;
        		 endif;
        		?> 
            </ol>
            <div class="carousel-inner height-200">
                <?php
                    $count = 1;
                    if( have_rows('gas_slider_image') ): 
    
                    	while( have_rows('gas_slider_image') ): the_row(); 
                    	?>                
                            <div class="carousel-item <?php if($count == 1) echo 'active' ?>">
                                <img class="img-fluid" src="<?php echo get_sub_field('images'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                            </div>
                        <?php $count++;
                        endwhile;
            		endif;
            		?>

            </div>

            <a style="margin-left: -34px; height: 242px; display: none;" class="carousel-control-prev" href="#career-20" role="button" data-slide="prev">
                <div class="cus-pre">
                    <img width="10" src="<?php echo get_template_directory_uri(); ?>/assets/image/left.png">
                </div>
            </a>
            <a style=" height: 242px;   margin-right: -34px; display: none;" class="carousel-control-next" href="#career-20" role="button" data-slide="next">
                <div class="cus-pre">
                    <img width="10" src="<?php echo get_template_directory_uri(); ?>/assets/image/right.png">
                </div>
            </a>
        </div>
        
    </div>

    <div class="col-md-6  working-text f-left">
        <p> <?php the_field('gas_content'); ?>
        </p>
    </div>
</div>

<!---------------------------------------------------------->


<div class="container-fluid  section-20 team-join" style="background-image: url(<?php the_field('mop_background_image'); ?>">
   <div class="container section-20-career" data-aos="fade-right">
      <div class="row">
         <div class="col-md-12 f-left">
            <h2 class="aboutus-title"> <?php the_field('mop_title'); ?></h2>
            <p>   <?php the_field('mop_content'); ?> .</p>            
         </div>
         <div class="col-md-12 padd0">
            <div id="mixedSlider_people" class="mixedSlider_people">
               <div class="MS-content career-team">
               <?php
                   $count = 0;
                    $no_post = get_field('no_of_people'); 
                    
                    $args = array(
                              'numberposts' => ($no_post) ? $no_post: -1,
                              'post_type'   => 'our_people',
                              
                            );                                     
                    $post_details  = get_posts( $args );
                    $post_count = count( $post_details );
                    if (  $post_details ) {
                        
                        foreach (  $post_details as $post ) : 
                            setup_postdata( $post );  
                        ?>
               
                             <div class="item">
                                 <div class="col-md-12 f-left">
                                    <div class="single-team">
                                        <?php
                            			if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'full' , array('class' => 'img-fluid') );
                                        }
                                        ?>
                                       <div class="team-hover">
                                            <h4><?php the_title() ; ?> <span><?php the_field('designation'); ?> </span></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; <?php the_field('location'); ?></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                     
                     <?php
                     $count++;
                   
                    wp_reset_postdata(); ?>
    			    <?php 
    		            endforeach; 
    		     //wp_reset_postdata();
                    }
    			  ?>
                  
                  
               </div>
               <div class="MS-controls MS-controls-slide">
                  <button class="MS-left btn btn-gray2 leftLst "><img width="8" src="<?php echo get_template_directory_uri() ?>/assets/image/left.png"></button>
                  <button class="MS-right btn btn-gray2 rightLst f-right"><img width="8" src="<?php echo get_template_directory_uri() ?>/assets/image/right.png"></button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>




<?php /*
<div class="container-fluid  section-20 team-join" style="background-image: url(<?php the_field('mop_background_image'); ?>">
    <div class="container section-20-career" data-aos="fade-right">
        <div class="row">
            <div class="col-md-12 f-left">
                <h2 class="aboutus-title"> <?php the_field('mop_title'); ?></h2>
                <p>     <?php the_field('mop_content'); ?> .</p>
            </div>

            <div class="col-md-12 f-left padd0 mt-20">
                <div id="team10" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner height-200">
                        <?php
                        $j = 1; $k = 1;$count = 0;
                        $no_post = get_field('no_of_people'); 
                        
                        $args = array(
                                  'numberposts' => ($no_post) ? $no_post: -1,
                                  'post_type'   => 'our_people',
                                  
                                );                                     
                        $post_details  = get_posts( $args );
                        $post_count = count( $post_details );
                        if (  $post_details ) {
                            
                            foreach (  $post_details as $post ) : 
                                setup_postdata( $post );
                                 if($j == 1 ){ 
                            ?>
                        <div class="carousel-item <?php if($count == 0 ) echo 'active' ; ?>">
                            <div class="col-md-12 padd0">
                              <?php } ?>
                                                   
                                <div class="col-md-3 f-left">
                                    <div class="single-team">
                                         <?php
                            			if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'our-people-thumb' , array('class' => 'img-fluid') );
                                        }
                                        ?>
                                        <div class="team-hover">
                                            <h4><?php the_title() ; ?> <span><?php the_field('designation'); ?> </span></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; <?php the_field('location'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php if($j % 4 == 0 || $k ==  $post_count  ) {  $j =1;  ?>
                            </div>
                        </div>
                    
                        <?php
                                }
                                
                                else{
                                     $j++;
                                }
                                     $k++; $count++;
                            endforeach;
                        }
                    ?>
                 
                    </div>

                    <a style="margin-left: -34px; height: 280px; opacity: 1;" class="carousel-control-prev" href="#team10" role="button" data-slide="prev">
                        <div class="cus-pre">
                            <img width="10" src="<?php echo get_template_directory_uri(); ?>/assets/image/left.png">
                        </div>
                    </a>
                    <a style=" height: 280px;   margin-right: -34px; opacity: 1;" class="carousel-control-next" href="#team10" role="button" data-slide="next">
                        <div class="cus-pre">
                            <img width="10" src="<?php echo get_template_directory_uri(); ?>/assets/image/right.png">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
*/ ?>
<?php get_footer(); ?>