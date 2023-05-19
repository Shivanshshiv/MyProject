<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f508ab9e9831c"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/about-us.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/about-us_2020-03-24-08.php") )  ) ){
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
<style>
	.about-circle {padding-bottom:40px;}
	.about-circle .inner{background:#005825;width:140px;height:140px;border-radius:100px;color:#fff;text-align:center;vertical-align:middle;padding-top:35px;font-size:15px;}
</style>

<div class="container-fluid all-pages-padding">
	<div class="container">
		<div class="row about-circle">
	
		</div>
		<?php 
		if(have_posts()){
			while ( have_posts() ) :
				the_post();
				?>
        		<div class="row">
        			<div class="col-md-8">
        			    <?php the_content(); ?>
        			</div>
        			<div class="col-md-4">
        			<?php
        			if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'full' , array('class' => 'img-fluid') );
                    }
                    ?>
        			</div>
        		</div>
     <?php endwhile;
	   }
        ?>
	</div>
</div>
<?php get_footer() ; ?>