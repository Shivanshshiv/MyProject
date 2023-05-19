<?php
/* News style 
*/
get_header(); ?>
<?php
while ( have_posts() ) : the_post();
?>
<div class="container  section-10" style="margin-top:80px;">
	<div class="row">
		<div class="col-md-12 f-left">
		<a href="https://sendan.com.sa/latest-news/#news">	<h2 class="aboutus-title">News</h2> </a>
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
					
						<div class="carousel-item <?php if($count == 1) echo 'active' ; ?> suspage-img">
						<!--	<img class="img-fluid " src="<?php echo the_sub_field('news_image'); ?>">--->
							 <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-caption="" data-image="<?php the_sub_field('news_image') ?>" data-target="#image-gallery">
        
        <img class="img-fluid" src="<?php the_sub_field('news_image') ?>" style="height:312px;" />
        </a>
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
				<!--<h5><i class="fa fa-clock" aria-hidden="true"></i> Record : <?php echo get_field('record_time'); ?></h5>-->
				<h5><i class="fa fa-clock" aria-hidden="true"></i> Published : <?php the_date('d-m-Y'); ?></h5>
				  <?php the_content(); ?>
			</div>
		</div>
		<!-------------------------------------------->
	</div>
</div>
<?php endwhile; ?>

<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="modal-header award-mhead">
        <!--h5>All Major Clients</h5-->
        <button type="button" class="close cus-colse" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body award-body">
          <img class="img-fluid" id="image-gallery-image" class="img-responsive" src="">
        </div>
            <!--div class="modal-footer ">
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>
                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div-->
        </div>
    </div>
</div>
<?php get_footer(); ?>