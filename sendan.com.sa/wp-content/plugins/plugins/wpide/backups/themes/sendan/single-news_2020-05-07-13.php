<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "36a295ae66f10625d2857ccde42e42bd5af7d27c91"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/single-news.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/single-news_2020-05-07-13.php") )  ) ){
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
						<div class="carousel-item">
							<img class="img-fluid " src="image/news/2020-02-26/01.jpg">
						</div>
						<div class="carousel-item">
							<img class="img-fluid " src="image/news/2020-02-26/02.jpg">
						</div>
						<div class="carousel-item">
							<img class="img-fluid " src="image/news/2020-02-26/03.jpg">
						</div>
						<div class="carousel-item active">
							<img class="img-fluid " src="image/news/2020-02-26/04.jpg">
						</div>
						<div class="carousel-item">
							<img class="img-fluid " src="image/news/2020-02-26/05.jpg">
						</div>
						<div class="carousel-item">
							<img class="img-fluid " src="image/news/2020-02-26/06.jpg">
						</div>
						<div class="carousel-item">
							<img class="img-fluid " src="image/news/2020-02-26/07.jpg">
						</div>
					</div>
					<a style="margin-left: -24px; " class="carousel-control-prev" href="#newsdetails" role="button" data-slide="prev">
						<div class="cus-pre">
							<img width="10" src="image/left.png">
						</div>
					</a>
					<a style="margin-right: -24px; " class="carousel-control-next" href="#newsdetails" role="button" data-slide="next">
						<div class="cus-pre">
							<img width="10" src="image/right.png">
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-7 f-left news-details">
				<h4>SENDAN Participated In 13th Edition Of SABIC Expo</h4>
				<h5><i class="fa fa-clock" aria-hidden="true"></i> Record : 26-02-2020</h5>
				<h5><i class="fa fa-clock" aria-hidden="true"></i> Published : 26-02-2020</h5>
				<p>Exhibition of SABIC conference 2020 is an international platform for SABIC vendors and suppliers and all companies who look to establish business partnerships with SABIC and the major participating companies.It is the 13th edition of its kind, taking place between 17th and 20th February 2020 in King Abdallah Cultural Center – Jubail Industrial City in the Kingdom of Saudi Arabia. It brings together an expected number of 35,000 attendants along with an expected participation of 400 companies from over 35 countries</p>
				<p>&gt;We highly appreciate SABIC for arranging such practical &amp; productive platform for its partners to share &amp; exchange knowledge to analyze the market and its needs to optimize &amp; address through the best available latest techniques.</p>
				<p>SENDAN participated in 13th Edition of SABIC Expo, where SENDAN showed a distinctive booth, received visitors and introduced the company services &amp; its strength along with the compliance and participation in local Content Development for future endeavors in line with 2030 vision.</p>
			</div>
		</div>
		<!-------------------------------------------->
	</div>
</div>
<?php
while ( have_posts() ) : the_post();
?>
    <div class="container-fluid all-pages-padding">
    	<div class="container">
    		<div class="row">
    	    	<?php 
    	    	$class= "col-md-8" ;
    	    	if ( !has_post_thumbnail() ) $class= "col-md-12"; ?>
                              
    			<div class="<?php echo $class; ?>">
    				<p><b><?php echo get_the_date(); ?></b>
    				</p>
    			    <?php the_content() ; ?>
    			</div>
    			<?php 
    				if ( has_post_thumbnail() ) {
    				    echo '	<div class="col-md-4">';
                            the_post_thumbnail( 'news-thumb' , array('class' => 'img-fluid') );
                            echo '</div>';
                        }
                        ?>
    			
    			<div class="col-md-12" style="padding-top:20px;">
    				<div class="row">
    				<?php
                       if( have_rows('news_images') ):     
                            $count = 1; 
                            while ( have_rows('news_images') ) : the_row(); 
                            ?>
            
            					<div class="col-md-4">
            						<img src="<?php echo the_sub_field('news_image'); ?>" alt= "<?php echo the_sub_field('title'); ?>" class="img-fluid" style="border:1px #ccc solid;" />
            					</div>
    					<?php
    				    	endwhile;
    					endif;
    					?>
    				</div>
    			</div>
    			
    			
    			<div class="col-md-12" style="padding-top:20px;">
    				<?php the_field('media_details'); ?>
    			</div>
    		</div>
    	</div>
    </div>
<?php
endwhile; 
?>
<?php get_footer(); ?>