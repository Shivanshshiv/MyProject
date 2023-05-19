<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e297ec9de31bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/sections/home/message.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/message_2019-04-12-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>    <!-- ceo message -->
    <div class="container-fluid message-home">
        <div class="second-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">
                        <div id="demomessage" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators" style="margin-bottom:-30px;">
                            <?php
                            if( have_rows('message_options_page') ):
                                $count = 0 ;     
                                while ( have_rows('message_options_page') ) : the_row(); 
                                ?>
                                <li data-target="#demomessage" data-slide-to="0" <?php echo ($count++ == 0 ) ? 'class="active"' : '' ?> ></li>
                                
                                <?php
                                endwhile;
                            endif;
                            ?>
                           </ul>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                             <?php
                            if( have_rows('message_options_page') ):
                                $count = 0 ;     
                                while ( have_rows('message_options_page') ) : the_row(); 
                                ?>
                                <div class="carousel-item <?php echo ($count++ == 0 ) ? 'active' : '' ?>">
                                    <img src="<?php echo the_sub_field('image'); ?>" />
                                    <h2> <?php echo the_sub_field('title'); ?></h2>
                                    <p><?php echo the_sub_field('message'); ?> </p> 
                                    <a href="<?php echo the_sub_field('url'); ?>">Read More</a> 
                                </div>
                            
                               <?php endwhile;
                               endif;
                               ?>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>