<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29cc5ff866ba"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/style-news.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/style-news_2019-04-22-10.php") )  ) ){
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

<div class="container-fluid all-pages-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<p><b>December 26 2018</b>
				</p>
				<p>This is really an auspicious moment to get the recognition from YANSAB President & E&PM Executive Vice President on the successful completion of most Challenging & Toughest Shutdown in the History of SABIC.</p>
				<p>It is a great moment indeed and an achieved milestone for the successful completion of YANSAB EG-DBN Project. SENDAN would like to extend its gratitude to all the Team members and stakeholders involved and for entrusting us for our most challenging work yet. It is a consolidated team effort completing the project ahead of time safely. SENDAN assures its continuous team improvement and development for our future engagements with our clients. Thank you!</p>
			</div>
			<div class="col-md-4">
				<img src="img/blog_1_img_1.jpg" class="img-fluid" style="border:1px #ccc solid;" />
			</div>
			<div class="col-md-12" style="padding-top:20px;">
				<div class="row">
					<div class="col-md-4">
						<img src="img/blog_1_img_2.jpg" class="img-fluid" style="border:1px #ccc solid;" />
					</div>
					<div class="col-md-4">
						<img src="img/blog_1_img_3.jpg" class="img-fluid" style="border:1px #ccc solid;" />
					</div>
					<div class="col-md-4">
						<img src="img/blog_1_img_4.jpg" class="img-fluid" style="border:1px #ccc solid;" />
					</div>
				</div>
			</div>
			<div class="col-md-12" style="padding-top:20px;">
				<p><b>Media Contact:</b>
					<br/>Mirza Muhammad Asim
					<br/>Phone: +966 55 7088434
					<br/>Email: media@sendan.com.sa</p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>