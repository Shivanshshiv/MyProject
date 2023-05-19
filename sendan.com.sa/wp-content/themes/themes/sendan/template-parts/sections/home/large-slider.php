<?php
/**
 * This section use to Mange Home page Large Slider Sections
 *
 * @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
 */
?>

<div class="container-fluid" style="padding:0;">
        <div id="demolargeimage" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <?php
                    if( have_rows('upload_slider_banner') ):
                        $count = 0;     
                        while ( have_rows('upload_slider_banner') ) : the_row(); 
                        ?>
                        <li data-target="#demolargeimage" data-slide-to="<?php echo $count; ?>" <?php echo ($count++ == 0 ) ? 'class="active"' : '' ; ?>></li>
                    <?php 
                        endwhile;
                    endif;
                    ?>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                
                <?php
                if( have_rows('upload_slider_banner') ):
                    $count = 0;     
                    while ( have_rows('upload_slider_banner') ) : the_row(); 
                    ?>
        
                     <div class="carousel-item <?php echo ($count++ == 0 ) ? 'active' : '' ; ?>">
                        <img src="<?php echo the_sub_field('images'); ?>" alt="" class="img-fluid">
                    </div>
               <?php endwhile; 
               endif;
               ?>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demolargeimage" data-slide="prev"> <span class="carousel-control-prev-icon"></span> 
            </a>
            <a class="carousel-control-next" href="#demolargeimage" data-slide="next"> <span class="carousel-control-next-icon"></span> 
            </a>
        </div>
    </div>