<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e297ec9de31bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/about-us.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/about-us_2019-04-12-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: About Us Page
*/

get_header();
?>
<div class="container-fluid main-content-home" style="padding-bottom:0px;">
 <div class="container">
   <div class="row">
    <div class="col-md-12"><br><br>
	 <h2>About Us</h2>
	</div>
   </div>
 </div>
</div>
<style>
	.about-circle {padding-bottom:40px;}
	.about-circle .inner{background:#005825;width:140px;height:140px;border-radius:100px;color:#fff;text-align:center;vertical-align:middle;padding-top:35px;font-size:15px;}
</style>

<div class="container-fluid all-pages-padding">
	<div class="container">
		<div class="row about-circle">
			<div class="col-md-3">
				<div class="inner">
					<h4>1994</h4>
					<p>FOUNDED</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="inner">
					<h4>178</h4>
					<p>PROJECTS</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="inner">
					<h4>4,294</h4>
					<p>EMPLOYEE</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="inner">
					<h4>15</h4>
					<p>GLOBAL
						<br/>PRESENCE</p>
				</div>
			</div>
		</div>
		<?php 
		if(have_posts()){
		        	// Start the loop.
			while ( have_posts() ) :
				the_post();
				?>
        		<div class="row">
        			<div class="col-md-8">
        			    <?php the_content(); ?>
        			</div>
        			<div class="col-md-4">
        				<img src="img/about_sendan_img_1.jpg" class="img-fluid" style="border:1px #ccc solid;" />
        			</div>
        		</div>
        		<?php endwhile;
		}
        ?>
	</div>
</div>
<?php get_footer() ; ?>