<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29ed727cf70a"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/growth-at-sendan.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/growth-at-sendan_2019-04-17-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Growth at sendan 
 *
 * @package Sendan
 * @since 1.0.0
 */


get_header();
?>
<div class="container-fluid all-pages-padding">
	 <div class="container">
	   <div class="row">
	    <div class="col-md-12">
        	<?php 
        		if(have_posts()){
        			while ( have_posts() ) :
        				the_post();
        				?>
                		<?php the_content(); ?>
                		
                		 <?php
                            if( have_rows('Images_grow') ):
                                $count = 0;     
                                while ( have_rows('Images_grow') ) : the_row(); 
                                ?>
                                <div class="col-md-6">
                        		  <img src="<?php echo the_sub_field('images'); ?>" class="img-fluid" style="border:1px #ccc solid;">
                        	  </div>
                                
                        <?php endwhile;
                        endif;
                        ?>

             <?php endwhile;
        	   }
                ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
