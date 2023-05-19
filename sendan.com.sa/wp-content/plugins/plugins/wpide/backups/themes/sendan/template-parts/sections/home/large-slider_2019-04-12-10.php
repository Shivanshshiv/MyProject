<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e297ec9de31bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/sections/home/large-slider.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/large-slider_2019-04-12-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><div class="container-fluid" style="padding:0;">
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
        
                     <div class="carousel-item active">
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