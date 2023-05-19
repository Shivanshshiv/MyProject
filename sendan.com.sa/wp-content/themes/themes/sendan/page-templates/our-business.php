<?php
/*
* Template Name: Our Business
*/
get_header();
?>
<div class="container-fluid all-pages-padding">
    <div class="container cus-our-business">
        <div class="row" style="margin-right:0px;margin-left:0px;">
            <?php 
            $query =  get_child_page_list('157')  ;
            $j = 2;
            $k = 1;
            while ( $query->have_posts() ) :
                $query->the_post();             
                ?>
                    <div class="col-md-6">
			            <div class="row inner">
            			 <?php 
            			 
            			 if(  $query->current_post < $j ) :  ?>	 		  
    			            <div class="col-md-6" style="padding:0;">
    			            <?php
                			if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'our-business-thumb' , array('class' => 'img-fluid') );
                            }
                            ?>
                			</div>
                             <div class="col-md-6 text-center">		  
                				<h5><?php the_title(); ?></h5>
                				<p><?php echo wp_trim_words( get_the_content() , 25,  '...' , true ); ?></p>
                				<a href="<?php the_permalink() ?>">read more..</a>
                			  </div>	
        				<?php 
        				else: ?>
            				<div class="col-md-6 text-center">		  
                				<h5><?php the_title(); ?></h5>
                				<p><?php echo wp_trim_words( get_the_content() , 25,  '...' , true ); ?></p>
                				<a href="<?php the_permalink() ?>">read more..</a>
            				</div>
            				<div class="col-md-6" style="padding:0;text-align:right;">
                			 <?php
                    			if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'our-business-thumb' , array('class' => 'img-fluid') );
                                }
                            ?>
            			 	</div>
            				<?php
            				if($k % 2 == 0 ){
            				   $j = $j + 4;
            				}
            				
            			endif; 
    			     ?> 	 
			        </div>
		        </div>
		     
            <?php 
            $k++ ;
            endwhile ;
                        wp_reset_postdata();?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>