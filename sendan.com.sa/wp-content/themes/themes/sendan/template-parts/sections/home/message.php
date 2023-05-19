<?php
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