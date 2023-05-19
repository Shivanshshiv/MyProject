<?php
/* 
*   Template Name: Business Inner Page Left Content
*/

get_header(); ?>

<div class="container-fluid all-pages-padding" style="padding-top:0;">
    <div class="container">
    	<?php 
        		if(have_posts()):
        			while ( have_posts() ) :
        				the_post();
        				?>
        				
                        <div class="row">
                         <?php
                         if( !empty( get_field('listing_page_image') ) ):  ;?>
                            <div class="col-md-7"><br>
                                <?php the_content(); ?>
                            </div>
                            <div class="col-md-5 text-justify">   
                            	<img src="<?php the_field('listing_page_image'); ?>" class = "img-fluid border-12px" />                                 
                            </div>
                        <?php 
                        else: ?>
                                <div class="col-md-12">
                                <?php the_content(); ?>
                                </div>
                        <?php
                        endif;
                           ?>
                        </div>
                        <div class="row">
                            <div class="col-md-7 col-center m-auto cus-testimonial">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                   <div class="carousel-inner">
                                   <?php 
                                    $args = array(
                                      'numberposts' => 10,
                                      'post_type'   => 'business_review'
                                    );
                                     
                                    $business_review = get_posts( $args );
                                    $count =0;
                                    if ( $business_review ) {
                                        foreach ( $business_review as $post ) :
                                            setup_postdata( $post ); ?>                                                  
                                                <div class="item carousel-item <?php echo ($count ++ == 0 ) ? 'active' : '' ; ?>">
                                                    <?php the_content() ; ?>
                                                    <p class="overview"><b><?php the_title() ; ?> </b>, <?php the_field( 'Other Details' ); ?> </p>
                                                </div>
                                                 <?php
                                        endforeach; 
                                        wp_reset_postdata();
                                    }
                                    ?>
                                       
                                       
                                    </div>
                                    <!-- Carousel controls -->
                                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="<?php echo get_field('image_for_right_side_on_details_page_'); ?>" class="img-fluid border-12px"  />
                            </div>
                        </div>
                         <?php
                           if( have_rows('other_services') ):     
                            while ( have_rows('other_services') ) : the_row(); 
                                ?>      <div class="row">
                                <div class="col-md-12 other-service-link">
                        		   <div style="border-top:1px #ccc solid;margin-top:10px;padding-top:10px;">
                            		   <h4><?php echo  ( the_sub_field('title') ) ?></h4>
                            		   <div class="row">
                                		 	<?php echo  ( the_sub_field('content') ) ?>
                            		   </div>
                        		   </div>
                        		  </div>
        		  </div>
		  
                       
                            <?php endwhile;
                            endif;
                            ?>
                                    
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                ?>
    </div>
</div>



<?php get_footer(); ?>