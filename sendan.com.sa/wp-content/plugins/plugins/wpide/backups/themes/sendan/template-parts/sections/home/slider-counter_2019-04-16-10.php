<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2912ff7e007a"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/sections/home/slider-counter.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/slider-counter_2019-04-16-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><div class="container-fluid cus-countdown">
            <div class="row text-center">
                <div class="col-md-2 col-xs-2"></div>
                 <?php
                if( have_rows('slider_counter') ):
                    $count = 1 ;     
                    while ( have_rows('slider_counter') ) : the_row(); 
                    ?>	
                <div class="col-md-2 col-sm-2">
                    <div class="counter"> <i class="fa fa-building fa-2x"></i>
                        <h2 class="timer count-title" data-to="1994" data-speed="1500">1994</h2>
                        <p class="count-text ">FOUNDED</p>
                    </div>
                </div>
                <?php endwhile;
    			endif;
    			?>
		
         
                <div class="col-md-2 col-xs-2"></div>
            </div>
        </div>