<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f509243645378"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/slider-counter.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/slider-counter_2020-03-26-07.php") )  ) ){
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
<div class="col-md-9 f-left">

            <div class="clear-topbb">&nbsp;</div>
            <div class="row text-center mainbbcount">
            <?php
            if( have_rows('slider_counter') ):
                $count = 1 ;     
                while ( have_rows('slider_counter') ) : the_row(); 
                ?>	
                <div class="col-md-3 col-sm-6 countermainarea">
                    <div class="counter">
                        <i class="<?php echo the_sub_field('counter_icon'); ?> fa-2x"></i>
                        <h2 class="timer " data-to="1994" data-speed="1500">1994</h2>
                        <p>FOUNDED</p>
                    </div>
                </div>
                <?php endwhile;
    		endif;
    		?>
            </div>

        </div>
        
        
<div class="container-fluid cus-countdown d-none d-sm-block">
    <div class="row text-center">
        
        <div class="col-md-2 col-xs-2"></div>
         &nbsp;   &nbsp;  &nbsp; &nbsp;
        <div class="counter"> <i class="fa fa-building fa fa-2x"></i>
                <div class="bussness"><h2 class="timer count-title" data-to="<?php echo "1994"; ?>"><?php echo "1994"; ?></h2></div>
                <p class="count-text ">Founded</p>
            </div>
            &nbsp;   &nbsp;  &nbsp; &nbsp;   &nbsp;  &nbsp; &nbsp;   &nbsp;  &nbsp; &nbsp;  
         <?php
        if( have_rows('slider_counter') ):
            $count = 1 ;     
            while ( have_rows('slider_counter') ) : the_row(); 
            ?>	
        <div class="col-md-2 col-sm-2">
            <div class="counter"> <i class="<?php echo the_sub_field('counter_icon'); ?> fa-2x"></i>
                <div class="bussness"><span class="timer count-title" data-to="<?php echo the_sub_field('counter_number'); ?>" data-speed="1500"><?php echo the_sub_field('counter_number'); ?></span><span style="font-size:30px; padding-left:5px;"><?php echo "+"; ?></span></div>
                <p class="count-text "><?php echo the_sub_field('counter_title'); ?></p>
            </div>
        </div>
        <?php endwhile;
		endif;
		?>

 
        <div class="col-md-2 col-xs-2"></div>
    </div>
</div>