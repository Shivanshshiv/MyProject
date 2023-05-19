<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29dddbabea9d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/history.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/history_2019-04-17-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: History
*/
get_header();
?>
<style>
big, .big {
  font-size: 16px;
  line-height: 28px;
  font-weight: 400;
  letter-spacing: 0px;
}

.wpb_wrapper > div {
  margin-bottom: 35px;
}

.timeline-wrapper {
  background-color: #fff;
  margin: 0;
  font-family: 'Raleway', sans-serif;
}

.timeline-wrapper:before {
  content: '';
  position: absolute;
  top: 0px;
  left: 50%;
  bottom: 0px;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
  width: 10px;
  background-color: #005825;
  border-radius: 10px;
}

.timeline-wrapper .entries {
  width: calc(100% - 80px);
  max-width: 800px;
  margin: auto;
  position: relative;
  left: -5px;
}

.timeline-wrapper .entries .entry {
  width: calc(50% - 80px);
  float: left;
  padding: 20px;
  clear: both;
  text-align: right;
  background: #f6f6f6;
  box-shadow: 0 20px 25px -15px rgba(0, 0, 0, 0.3);
  background-image: url(http://www.dicetek.net/wp-content/uploads/2018/02/timeline-bg.png);
  background-repeat: no-repeat;
  background-position: left -40px;
}

.timeline-wrapper .entries .entry .title {
  background: #005825;
  border-radius: 10px;
  color: #FFFFFF;
  padding: 5px 10px;
  font-size: 28px;
  font-weight: 600;
  margin-bottom: 12px;
  position: relative;
}

.timeline-wrapper .entries .entry .title:before {
  content: '';
  position: absolute;
  width: 24px;
  height: 24px;
  border: 4px solid #ffffff;
  background-color: #ec262e;
  border-radius: 100%;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  right: -104px;
  z-index: 1000;
}

.timeline-wrapper .entries .entry .title.big:before {
  width: 15px;
  height: 15px;
  -webkit-transform: translate(8px, -50%);
  transform: translate(8px, -50%);
}

.timeline-wrapper .entries .entry .body {
  color: #333;
}

.timeline-wrapper .entries .entry .body p {
  line-height: 1.4em;
  font-weight: 600 !important;
}

.timeline-wrapper .entries .entry:nth-child(2n) {
  text-align: left;
  float: right;
}

.timeline-wrapper .entries .entry:not(:first-child) {
  margin-top: -60px;
}

.timeline-wrapper .entries .entry:not(:first-child) {
  margin-top: -60px;
}

.timeline-wrapper .entries .entry:nth-child(2n) .title:before {
  left: -107px;
}
	
</style>
<div class="container-fluid all-pages-padding text-center" style="padding-top:0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php the_Content(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="timeline-wrapper">
					<div class="entries">
					<?php
                       if( have_rows('sendan_journey') ):     
                            $count = 1; 
                            while ( have_rows('sendan_journey') ) : the_row(); 
                            ?>
    						<div class="entry">
    							<div class="title big"><?php echo the_sub_field('year'); ?></div>
    							<div class="body">
    								<p><?php echo the_sub_field('content'); ?></p>
    							</div>
    						</div>
    					<?php endwhile;
    					endif;
    					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>