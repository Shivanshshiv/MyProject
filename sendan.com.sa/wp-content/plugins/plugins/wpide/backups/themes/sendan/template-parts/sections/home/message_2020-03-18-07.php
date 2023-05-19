<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50697d06080d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/message.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/message_2020-03-18-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * This section use to Mange Home page ceo message
 *
 * @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
 */
?>

<!-- ceo message -->
<div class="container-fluid message-home" style = "background:#fff url('<?php echo get_field('message_background_image'); ?>') no-repeat; background-size: cover;
background-position: center;">
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
                                <li data-target="#demomessage" data-slide-to="<?php echo $count; ?>" <?php echo ($count++ == 0 ) ? 'class="active"' : '' ?> ></li>
                                
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
                                    <a href="<?php echo the_sub_field('url'); ?>"> Read More </a> 
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