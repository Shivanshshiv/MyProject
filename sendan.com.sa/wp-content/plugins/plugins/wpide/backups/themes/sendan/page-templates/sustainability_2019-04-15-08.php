<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290ece391d1d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/sustainability.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/sustainability_2019-04-15-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* 
*   Template Name: Sustainability
*/

get_header(); ?>
<div class="container-fluid all-pages-padding">
    <div class="container">
        <div class="row">
        	<?php 
    		if(have_posts()):
    			while ( have_posts() ) :
    				the_post();
    				?>
        				        				
                    <div class="col-md-4">
                        <?php the_content() ; ?>
                    </div>
                    
                    <div class="col-md-8">
                     <?php
                       if( have_rows('sustainability_images') ):     
                        while ( have_rows('sustainability_images') ) : the_row(); 
                            ?>    
                           <img src="<?php echo  ( the_sub_field('image') ) ; ?> " class="img-fluid border-1px" />
                        <?php
                        endwhile;
                    endif;
                    ?>
                    </div>
                <?php endwhile;
            endif;
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>