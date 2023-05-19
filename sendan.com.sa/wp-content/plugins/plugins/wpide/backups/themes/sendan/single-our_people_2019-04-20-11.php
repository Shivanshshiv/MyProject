<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290b0df6b826"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/single-our_people.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/single-our_people_2019-04-20-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying all Our People posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sendan
 * @since 1.0.0
 */


get_header();
?>
<div class="container-fluid all-pages-padding">
    <div class="container">
        <div class="row meet-our-people-question">
        	<?php  while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-9">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-md-3 meet-out-people">
                        <div class="inner">
                           	<?php 
                        	if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'people-thumb' , array('class' => 'img-fluid') );
                            }
                        	?>
                            <p><b>Raji Sahwan</b>
                                <br/>Manager HR & Admin
                                <br/>Saudi Arabia</p>
                        </div>
                    </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer() ; ?>