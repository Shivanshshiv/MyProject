<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f5092d4df1646"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/bussiness.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/bussiness_2020-03-26-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><div class="clearfix"></div>
<div class="container-fluid  section-20">
	<div class="container section-20-b">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<h2 class="aboutus-title">OUR BUSINESS</h2> 
			</div>
		</div>
		<div class="col-md-12 padd0">
			<div class="row">
				<div class="MultiCarousel" data-items="1,2,3" data-slide="1" id="MultiCarousel1" data-interval="1000">
					<div class="MultiCarousel-inner" style="transform: translateX(0px); width: 3700px;">
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
						<div class="item" style="width: 370px;">
							<div class="col-md-12 business-list">
								<div class="col-md-12 padd0 busin-img">
        							<?php
                        			if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'our-business-thumb' , array('class' => 'img-fluid') );
                                    }
                                    ?>
                                    
								</div>
								<div class="col-md-12 business-detail">
									<h4><?php the_title(); ?></h4>
									<p><?php echo wp_trim_words( get_the_content() , 15,  '...' , true ); ?></p> <a href="<?php the_permalink() ?>">Read More</a>
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
					<button class="btn btn-gray2 leftLst over">
						<img width="8" src="image/left.png">
					</button>
					<button class="btn btn-gray2 rightLst">
						<img width="8" src="image/right.png">
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="" id="sustainability"></div>
</div>