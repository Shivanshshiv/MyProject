<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f508ab9e9831c"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/bussiness.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/bussiness_2020-03-24-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><div class="clearfix"></div>

<div class="container-fluid  section-20">
    <div class="container">
        <div class="row" >
		<div class="col-md-12" style="text-align: center;">
            <h2 class="aboutus-title">OUR BUSINESS</h2>
        </div>
    </div>

    <div class="col-md-12 padd0">
        <div id="business" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
									<?php 
										$query =  get_child_page_list('157')  ;
										$j = 2;
										$k = 1;
										while ( $query->have_posts() ) :
										$query->the_post();             
									?>
                        <div class="col-md-4 business-list">
						 <?php 
            			 
            			 if(  $query->current_post < $j ) :  ?>	 		  
    			            
                            <div class="col-md-12 padd0 busin-img">
							 <?php
                			if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'our-business-thumb' , array('class' => 'img-fluid') );
                            }
                            ?>
                
                            </div>
                            <div class="col-md-12 business-detail">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words( get_the_content() , 25,  '...' , true ); ?></p>

                                	<a href="<?php the_permalink() ?>">Read more..</a>
                            </div>
                        </div>
						
                        <div class="col-md-4 business-list">
                            <div class="col-md-12 padd0 busin-img">
                              <?php
                			if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'our-business-thumb' , array('class' => 'img-fluid') );
                            }
                            ?>
                            </div>
                            <div class="col-md-12 business-detail">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words( get_the_content() , 25,  '...' , true ); ?></p>
                                <a href="<?php the_permalink() ?>">Read more..</a>
                            </div>
                        </div>
                        <div class="col-md-4 business-list">
                            <div class="col-md-12 padd0 busin-img">
                                <?php
                			if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'our-business-thumb' , array('class' => 'img-fluid') );
                            }
                            ?>
                            </div>
                            <div class="col-md-12 business-detail">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words( get_the_content() , 25,  '...' , true ); ?></p>
                                <a href="<?php the_permalink() ?>">Read more..</a>
                            </div>
                        </div>
							<?php
            				if($k % 2 == 0 ){
            				   $j = $j + 4;
            				}
            				
            			endif; 
    			     ?> 	 
                    </div>
					 <?php 
							$k++ ;
							endwhile ;
                            wp_reset_postdata();
						?>
                </div>
            </div>
            <a style="    margin-left: -44px; opacity: 1;" class="carousel-control-prev" href="#business" role="button" data-slide="prev">
                <div class="cus-pre">
                    <i class="fa fa-angle-left"></i>
                </div>
            </a>
            <a style="    margin-right: -44px; opacity: 1;" class="carousel-control-next" href="#business" role="button" data-slide="next">
                <div class="cus-pre">
                    <i class="fa fa-angle-right"></i>
                </div>
            </a>
        </div>
    </div>

</div>
<div class="" id="sustainability"></div>
</div>