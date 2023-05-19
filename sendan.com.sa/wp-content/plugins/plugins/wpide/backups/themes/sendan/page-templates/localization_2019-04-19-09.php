<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29d7f8492138"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/localization.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/localization_2019-04-19-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Localization
*/

get_header();
?>
	<div class="container-fluid all-pages-padding">
    <div class="container">
        <div class="row">
        <?php 
    	if(have_posts()):
    		while ( have_posts() ) :
    			the_post();
    			?>  
            <div class="col-md-3">
               <?php the_content(); ?>
            </div>
            
	        <?php
            if( have_rows('localization_Image') ):  
                $count  = 1 ; 
                while ( have_rows('localization_Image') ) : the_row(); 
                if($count++ == 1 ) :
                ?>	                            
                    <div class="col-md-9">
                        <img src="<?php echo the_sub_field('image'); ?>" class="img-fluid" style="border:1px #ccc solid;" />
                        <br/>
                        <br/>
                   
        <?php   else: ?>
                    <div class="col-md-3">
                        <img src="<?php echo the_sub_field('image'); ?>" class="img-fluid" style="border:1px #ccc solid;" />
                    </div>
      <?php  endif; ?>
                 <?php 
                endwhile;
            endif;
            ?>
            <?php 
            endwhile;
        endif;
        ?>
        </div>
    </div>
</div>
 <?php get_footer(); ?>