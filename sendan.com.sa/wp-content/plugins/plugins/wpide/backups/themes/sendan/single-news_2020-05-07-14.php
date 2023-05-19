<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "36a295ae66f10625d2857ccde42e42bd5af7d27c91"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/single-news.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/single-news_2020-05-07-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* News style 
*/
get_header(); ?>
<?php
while ( have_posts() ) : the_post();
?>
<div class="container  section-10" style="margin-top:80px;">
	<div class="row">
		<div class="col-md-12 f-left">
			<h2 class="aboutus-title">News</h2> 
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 news-mainar aos-init aos-animate" data-aos="fade-left">
			<div class="col-md-5  f-left">
				<div id="newsdetails" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner height-200">
					
					<?php
                   if( have_rows('news_images') ):     
                        $count = 1; 
                        while ( have_rows('news_images') ) : the_row(); 
                        ?>
					
						<div class="carousel-item">
							<img class="img-fluid " src="image/news/2020-02-26/01.jpg">
						</div> 
				<?php
    				    $count++;
    			    	endwhile;
    				endif;
    				?>
						
						
						
					</div>
					<a style="margin-left: -24px; " class="carousel-control-prev" href="#newsdetails" role="button" data-slide="prev">
						<div class="cus-pre">
							<img width="10" src="<?php echo get_template_directory_uri();?>/assets/image/left.png">
						</div>
					</a>
					<a style="margin-right: -24px; " class="carousel-control-next" href="#newsdetails" role="button" data-slide="next">
						<div class="cus-pre">
							<img width="10" src="<?php echo get_template_directory_uri();?>/assets/image/right.png">
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-7 f-left news-details">
				<h4><?php the_title(); ?></h4>
				<h5><i class="fa fa-clock" aria-hidden="true"></i> Record : <?php echo get_field('record_time'); ?></h5>
				<h5><i class="fa fa-clock" aria-hidden="true"></i> Published : <?php the_date(); ?></h5>
				  <?php the_content(); ?>
			</div>
		</div>
		<!-------------------------------------------->
	</div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>