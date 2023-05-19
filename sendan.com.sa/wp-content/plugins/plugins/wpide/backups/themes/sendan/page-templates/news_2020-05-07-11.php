<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "36a295ae66f10625d2857ccde42e42bd6c2464ae15"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/news.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/news_2020-05-07-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: News
*/
get_header();
?>
 
 
 <div class="container  section-10" style="margin-top:80px;">
	<div class="row">
		<div class="col-md-5 f-left">
			<h2 class="aboutus-title">News</h2> 
		</div>
		<div class="col-md-7 f-left">
			<form action="" method="GET" >
				<div class="col-md-5 f-left">
					<input type="text" name='s' class="form-control" placeholder="Search News">
				</div>
				<div class="col-md-5 f-left">
					<select class="form-control" name="newsyear">
						<option>2020</option>
						<option>2019</option>
						<option>2018</option>
						<option>2017</option>
						<option>2016</option>
					</select>
				</div>
				<div class="col-md-2 f-left">
				 <input type="submit" class="btn  btn-primary-2 mb-2" name="search" value="Search"> 
				</div>
			</form>
		</div>
	</div>
	<div class="row">
	 <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$posts_per_page = 2;
			
           $args = array(
                'post_type' => 'news',
                'posts_per_page' => $posts_per_page,
                'paged' => $paged,               
                'post_status' => 'publish',
                'order'        => 'DESC',
                'orderby'      => 'date',
               
            );
            
            if(!empty($_GET["newsmonth"])){
            	 $args['date_query']['month']=$_GET["newsmonth"];
            	 $monthName = date("F", mktime(0, 0, 0, $_GET['newsmonth'], 10));
            } 
            if(!empty($_GET["newsyear"])){
            	$args['date_query']['year']=$_GET["newsyear"];
            }
             $query = new WP_Query( $args);
            ?>
             <?php 
              if( !empty($_GET["newsyear"]) || !empty($_GET["newsmonth"]) ):
              ?>
              <div class="search-heading">
                    LATEST NEWS FROM <?php if(!empty ($monthName) ) echo $monthName . ' '  ; ?> <?php echo $_GET["newsyear"]; ?>
              </div>
              <?php endif; ?>
              <?php

			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
                    get_template_part( 'template-parts/content/content' ,'news' );
                endwhile;
                 wp_reset_postdata();
            else:
                echo "No Post Found" ;
                 
            endif;
            
              ?>
 		
		<!----------------------------------------------------------->
	
				 
				 <?php sendan_pagination($query) ; ?>
		 
			
	</div>
</div>

 
<div class="container-fluid  section-20">
	<div class="container section-20-b">
		<div class="row">
			<div class="col-md-12 f-left">
				<h2 class="aboutus-title">Brochure</h2> 
			</div>
			<div class="col-md-12 f-left padd0">
				<div class="col-md-12 f-left our-valuear aos-init" data-aos="fade-left" style="padding: 20px 15px;">
					<div id="allbrochure" class="carousel slide" data-ride="carousel" style="width: 100%;">
						<div class="carousel-inner ">
							<?php 
							 $i = 0; $j = 1; 
                            $broucheure_lists = get_posts(
                            	array(
                            		'post_type'      => 'broucheure',
                            		'posts_per_page' => -1, 
                            	)
                            );
                            
                            $post_count = count( $broucheure_lists );
                            
                            // print_r($post_count);
                            if ( $broucheure_lists ) {
                            $count = 0;
                            ?>
                             
                                    <?php
                					foreach ( $broucheure_lists as $post ) :
                						setup_postdata( $post );
                						 
                						$featured_img_url = get_the_post_thumbnail_url($post->id,'full');
                					 
                						  if($j == 1 ){ 
                						?> 
                                     <div class="carousel-item <?php if($count == 0 ) echo 'active' ; ?>">
                                         <div class="col-md-12 ">
                                <?php } ?>
                                
            							        <div class="col-md-3 f-left  text-center padd0">
            										<div class="col-md-12 f-left  text-center Download-brochure">
            											<a href="<?php echo get_field('upload_pdf'); ?>" target="_blank">
            												<img class="img-fluid" src="<?php echo $featured_img_url; ?>">
            												<button class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Brochure</button>
            											</a>
            										</div>
            									</div>
						
							   <?php if($j % 4 == 0 || $i ==  $post_count  ) {  $j =1;
                                        
                                 ?>	      
                                </div>

                            </div> 
                            <?php
                            }
                            
                            else{
                                 $j++;
                            }
                                 $i++;
                                  $count++;
                                     wp_reset_postdata();
                                    endforeach;
                                    ?>
                                
                               
                            
                            <?php
                            }
                            ?>
						
						</div>
					
					
						<a style="margin-left: -34px; opacity: 1" class="carousel-control-prev" href="#allbrochure" role="button" data-slide="prev">
							<div class="cus-pre">
								<img width="10" src="<?php echo get_template_directory_uri() ;?>/assets/image/left.png">
							</div>
						</a>
						<a style=" margin-right: -34px; opacity: 1" class="carousel-control-next" href="#allbrochure" role="button" data-slide="next">
							<div class="cus-pre">
								<img width="10" src="<?php echo get_template_directory_uri() ;?>/assets/image/right.png">
							</div>
						</a>
					</div>
				</div>
			</div>
			
			</div>
			</div>
			
			
		</div>
	</div>
</div>



<div class="container-fluid  section-20">
	<div class="container section-20-b">
		<div class="row">
			<div class="col-md-12 f-left">
				<h2 class="aboutus-title">Brochure</h2> 
			</div>
			<div class="col-md-12 f-left padd0">
				<div class="col-md-12 f-left our-valuear aos-init" data-aos="fade-left" style="padding: 20px 15px;">
					<div id="allbrochure" class="carousel slide" data-ride="carousel" style="width: 100%;">
						<div class="carousel-inner ">
							<?php 
							 $i = 0; $j = 1; 
                            $broucheure_lists = get_posts(
                            	array(
                            		'post_type'      => 'broucheure',
                            		'posts_per_page' => -1, 
                            	)
                            );
                            
                            $post_count = count( $broucheure_lists );
                            
                            // print_r($post_count);
                            if ( $broucheure_lists ) {
                            $count = 0;
                            ?>
                             
                                    <?php
                					foreach ( $broucheure_lists as $post ) :
                						setup_postdata( $post );
                						 
                						$featured_img_url = get_the_post_thumbnail_url($post->id,'full');
                					 
                						  if($j == 1 ){ 
                						?> 
                                     <div class="carousel-item <?php if($count == 0 ) echo 'active' ; ?>">
                                         <div class="col-md-12 ">
                                <?php } ?>
                                
            							        <div class="col-md-3 f-left  text-center padd0">
            										<div class="col-md-12 f-left  text-center Download-brochure">
            											<a href="<?php echo get_field('upload_pdf'); ?>" target="_blank">
            												<img class="img-fluid" src="<?php echo $featured_img_url; ?>">
            												<button class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download Brochure</button>
            											</a>
            										</div>
            									</div>
						
							   <?php if($j % 3 == 0 || $i ==  $post_count  ) {  $j =1;
                                        
                                 ?>	      
                                </div>

                            </div> 
                            <?php
                            }
                            
                            else{
                                 $j++;
                            }
                                 $i++;
                                  $count++;
                                     wp_reset_postdata();
                                    endforeach;
                                    ?>
                                
                               
                            
                            <?php
                            }
                            ?>
						
						</div>
					
					
						<a style="margin-left: -34px; opacity: 1" class="carousel-control-prev" href="#allbrochure" role="button" data-slide="prev">
							<div class="cus-pre">
								<img width="10" src="<?php echo get_template_directory_uri() ;?>/assets/image/left.png">
							</div>
						</a>
						<a style=" margin-right: -34px; opacity: 1" class="carousel-control-next" href="#allbrochure" role="button" data-slide="next">
							<div class="cus-pre">
								<img width="10" src="<?php echo get_template_directory_uri() ;?>/assets/image/right.png">
							</div>
						</a>
					</div>
				</div>
			</div>
			
			</div>
			</div>
			
			
		</div>
	</div>
</div>



<div class="container  section-10">
	<div class="row">
		<div class="col-md-12 f-left">
			<h2 class="aboutus-title">Event</h2> 
		</div>
	</div>
	<div class="row">
		<div id="eventsall" class="carousel slide" data-ride="carousel" style="width: 100%;">
			<div class="carousel-inner ">
							<?php 
							 $i = 0; $j = 1; 
                            $event_lists = get_posts(
                            	array(
                            		'post_type'      => 'event',
                            		'posts_per_page' => -1, 
                            	)
                            );
                            
                            $post_count = count( $event_lists );
                            
                            // print_r($post_count);
                            if ( $event_lists ) {
                            $count = 0;
                            ?>
                             
                                    <?php
                					foreach ( $event_lists as $post ) :
                						setup_postdata( $post );
                						 
                						$featured_img_url = get_the_post_thumbnail_url($post->id,'full');
                					 
                						  if($j == 1 ){ 
                						?> 
                                     <div class="carousel-item <?php if($count == 0 ) echo 'active' ; ?>">
                                         <div class="col-md-12 ">
                                <?php } ?>
                                
            						<div class="col-md-4 f-left">
            							<div class="single-team ">
            								<img class="img-fluid" src="<?php echo $featured_img_url; ?>">
            								<div class="team-hover">
            									<div class="col-md-12 f-left event-details text-left">
            										<p style="margin-bottom: 10px;"><?php the_title(); ?></p>
            										<h5><i class="fa fa-clock" aria-hidden="true"></i> Record : <?php echo get_field('record_time'); ?></h5>
            										<h5><i class="fa fa-clock" aria-hidden="true"></i> Published : <?php echo get_the_date(); ?></h5>
            									</div>
            								</div>
            							</div>
            						</div>
							   <?php if($j % 4 == 0 || $i ==  $post_count  ) {  $j =1;
                                        
                                 ?>	      
                                </div>

                            </div> 
                            <?php
                            }
                            
                            else{
                                 $j++;
                            }
                                 $i++;
                                  $count++;
                                     wp_reset_postdata();
                                    endforeach;
                                    ?>
                                
                               
                            
                            <?php
                            }
                            ?>
						
						</div>
                    	
                    	<a style="margin-left: -34px; opacity: 1" class="carousel-control-prev" href="#allbrochure" role="button" data-slide="prev">
							<div class="cus-pre">
								<img width="10" src="<?php echo get_template_directory_uri() ;?>/assets/image/left.png">
							</div>
						</a>
						<a style=" margin-right: -34px; opacity: 1" class="carousel-control-next" href="#allbrochure" role="button" data-slide="next">
							<div class="cus-pre">
								<img width="10" src="<?php echo get_template_directory_uri() ;?>/assets/image/right.png">
							</div>
						</a>
						
					</div>
				</div>
			</div>
			
			</div>
			</div>

	</div>
	</div>
</div>

<?php get_footer() ; ?>