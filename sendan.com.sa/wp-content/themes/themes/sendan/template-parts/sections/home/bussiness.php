<div class="container-fluid  section-20">
   <div class="container section-20-b">
      <div class="row">
         <div class="col-md-12" style="text-align: center;">
            <h2 class="aboutus-title">OUR BUSINESS</h2>
         </div>
      </div>
      <div class="col-md-12 padd0">
         <div class="row">
            <div class="col-md-12 padd0">
               <div id="mixedSlider" class="">
                  <div class="MS-content">
                  
                  <?php 
					$query =  get_child_page_list('157')  ;
					$post_details  = get_posts( $query );
					$count =0;
                     if (  $post_details ) 
                     {
                           $k = 1;
                               
        			while ( $query->have_posts() ) :
        			$query->the_post(); 
        			?>
        			
        			
                     <div class="item">
                        <div class="col-md-12 business-list">
                           <div class="col-md-12 padd0 busin-img">
                              <?php
                        			if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full' , array('class' => 'img-fluid') );
                                    }
                                    ?>
                           </div>
                           <div class="col-md-12 business-detail">
                              <h4><?php the_title(); ?></h4>
                              <p><?php echo wp_trim_words( get_the_content() , 12,  '...' , true ); ?></p>
                              <a href="<?php the_permalink() ?>">Read More</a>
                           </div>
                        </div>
                     </div>
                      
                 
                    <?php
                    $count++;
               
                wp_reset_postdata(); ?>
			<?php 
		     endwhile; 
		     //wp_reset_postdata();
             }
			  ?>
			   </div>
                  <div class="MS-controls MS-controls-slide-2">
                     <button class="MS-left btn btn-gray2  leftLst  "><img width="8" src="<?php echo get_template_directory_uri() ?>/assets/image/left.png"></button>
                     <button class="MS-right btn btn-gray2 rightLst f-right "><img width="8" src="<?php echo get_template_directory_uri() ?>/assets/image/right.png"></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="" id="sustainability"></div>
</div>