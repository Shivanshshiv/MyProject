<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29e5612831b1"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/our-business.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/our-business_2019-04-20-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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
            endwhile ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>