<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2921ec7a44b4"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/sections/home/slider-counter.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/slider-counter_2019-04-24-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * This section use to Mange Home page main slider counter
 *
 * @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
 */
?>
<div class="container-fluid cus-countdown hidden-sm-down hidden-xs-down">
    <div class="row text-center">
        <div class="col-md-2 col-xs-2"></div>
         <?php
        if( have_rows('slider_counter') ):
            $count = 1 ;     
            while ( have_rows('slider_counter') ) : the_row(); 
            ?>	
        <div class="col-md-2 col-sm-2">
            <div class="counter"> <i class="<?php echo the_sub_field('counter_icon'); ?> fa-2x"></i>
                <h2 class="timer count-title" data-to="<?php echo the_sub_field('counter_number'); ?>" data-speed="1500"><?php echo the_sub_field('counter_number'); ?></h2>
                <p class="count-text "><?php echo the_sub_field('counter_title'); ?></p>
            </div>
        </div>
        <?php endwhile;
		endif;
		?>

 
        <div class="col-md-2 col-xs-2"></div>
    </div>
</div>