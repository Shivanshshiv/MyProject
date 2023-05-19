<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e297ec9de31bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/sections/slider.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/slider_2019-04-12-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?> <div class="pic-wrapper">
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
<br/>
<div class="container-fluid" style="padding-left:30px;padding-right:30px;">
    <div class="row">
    
    
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div style="background:rgba(0, 0, 0, .5);height:250px;width:300px;margin-top:107px;border-radius:5px;padding:20px;color:#fff;">
                        <h4 style="border-bottom:1px #ccc solid;">Clients Review</h4>
                        <div id="cbp-qtrotator" class="cbp-qtrotator">
                            <div class="cbp-qtcontent current">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/clients_logo_5.png" alt="img01" />
                                <blockquote>
                                    <p>People eat meat and think they will become as strong as an ox, forgetting that the ox eats grass.</p>
                                    <footer>Pino Caruso</footer>
                                </blockquote>
                            </div>
                            <div class="cbp-qtcontent">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/clients_logo_4.png" alt="img02" />
                                <blockquote>
                                    <p>Nothing will benefit human health and increase the chances for survival of life on Earth as much as the evolution to a vegetarian diet.</p>
                                    <footer>Albert Einstein</footer>
                                </blockquote>
                            </div>
                            <div class="cbp-qtcontent">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/clients_logo_3.png" alt="img03" />
                                <blockquote>
                                    <p>If you don't want to be beaten, imprisoned, mutilated, killed or tortured then you shouldn't condone such behaviour towards anyone, be they human or not.</p>
                                    <footer>Moby</footer>
                                </blockquote>
                            </div>
                            <div class="cbp-qtcontent">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/clients_logo_2.png" alt="img04" />
                                <blockquote>
                                    <p>My body will not be a tomb for other creatures.</p>
                                    <footer>Leonardo Da Vinci</footer>
                                </blockquote>
                            </div>  <span class="cbp-qtprogress"></span> 
                        </div>
                        <!-- / main -->
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="col-md-6">
            <div id="demo" class="carousel slide text-center banner-count-slider" data-ride="carousel" style="padding-top:22%;">
                <!-- Indicators -->
                <ul class="carousel-indicators" style="margin-bottom:-20px;">
                <?php
                if( have_rows('slider_banner_content') ):
                    $count = 0 ;     
                    while ( have_rows('slider_banner_content') ) : the_row(); 
                ?>
                    <li data-target="#demo" data-slide-to="<?php echo $count++; ?>" <?php if($count == 0 ) echo 'class="active"' ?> style="height:8px;width:8px;"></li>
                    <?php 
                    endwhile;
                endif;
                    ?>
                </ul>
                
                
                <!-- The slideshow -->
                <div class="carousel-inner">
              <?php
                if( have_rows('slider_banner_content') ): 
                    $count = 0 ;  
                    while ( have_rows('slider_banner_content') ) : the_row(); 
                     
                ?>
                    <div class="carousel-item <?php if($count == 0 ) echo "active" ; ?>  ">
                        <h2><?php echo  the_sub_field( "slider_heading" ) ; ?></h2>
                        <p><?php echo the_sub_field( "slider_banner_subheading" ) ; ?></p>
                    </div>
                    
                <?php
                $count++;
                    endwhile;
                endif;
                ?>
                </div>
                
                
            </div>
        </div>
        
        
        <div class="col-md-3">
            
            
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="https://vision2030.gov.sa/" target="_blank">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/vision_logo.jpg" style="height:50px;border-radius:2px;" />
                    </a>
                    <br/> <a href="events.html" target="_self" style="font-size:18px;color:#fff;margin-top:5px;display:block;">Events & Exhibitions</a>
                </div>
            </div>
            
            
            <div style="background:rgba(0, 0, 0, .5);height:250px;width:300px;margin-top:20px;border-radius:5px;float:right;padding:20px;color:#fff;">
                <h4 style="border-bottom:1px #ccc solid;">News Update</h4>  
                <div class="newstape">
                    <div class="newstape-content">
                        <div class="news-block">
                            <h5>SENDAN Successfully Completed YANSAB EG-DBN Project</h5>
                            <small>December 26 2018</small>
                            <p class="text-justify">This is really an auspicious moment to get the recognition from YANSAB President &amp; E&amp;PM Executive Vice President on the successful completion...</p> <a href="#">More</a>
                            <hr />
                        </div>
                        <div class="news-block">
                            <h5>SENDAN Successfully Completed YANSAB EG-DBN Project</h5>
                            <small>December 26 2018</small>
                            <p class="text-justify">This is really an auspicious moment to get the recognition from YANSAB President &amp; E&amp;PM Executive Vice President on the successful completion...</p> <a href="#">More</a>
                            <hr />
                        </div>
                        <div class="news-block">
                            <h5>SENDAN Successfully Completed YANSAB EG-DBN Project</h5>
                            <small>December 26 2018</small>
                            <p class="text-justify">This is really an auspicious moment to get the recognition from YANSAB President &amp; E&amp;PM Executive Vice President on the successful completion...</div>
                    </div>
                </div>
                <div>   <a href="news.html" style="text-decoration:underline;font-weight:bold;">Read More...</a>
                </div>
            </div>
            
            
            
        </div>
    </div>
</div>
        
        
        