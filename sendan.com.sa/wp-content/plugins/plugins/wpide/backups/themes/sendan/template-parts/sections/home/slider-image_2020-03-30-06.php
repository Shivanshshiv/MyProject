<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f5016e43de5df"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/slider-image.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/slider-image_2020-03-30-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The section use for Home page main slider image 
 *
 * @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
 */
?>

 <div class="pic-wrapper">
    <?php
    if( have_rows('slider_banner') ):
        $count = 1 ;     
        while ( have_rows('slider_banner') ) : the_row(); 
        ?>
        
         <figure class="pic-<?php echo $count++ ; ?>">
            <img src="<?php echo the_sub_field('slider-image'); ?>" alt="<?php echo the_sub_field('image_title'); ?>" />
        </figure>    
        
        <?php
        endwhile;
    endif;
    ?>
</div>
