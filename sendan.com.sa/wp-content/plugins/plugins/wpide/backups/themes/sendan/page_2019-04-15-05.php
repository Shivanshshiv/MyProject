<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290ece391d1d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page_2019-04-15-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sendan
 * @since 1.0.0
 */


get_header();
?>
<div class="container-fluid main-content-home" style="padding-bottom:20px;">
	 <div class="container">
	   <div class="row">
	    <div class="col-md-12"><br><br>
	    
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
    </div>
</div>


<?php
get_footer();
