<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29dddbabea9d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/sections/home/blog.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/blog_2019-04-17-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><div class="container-fluid our-sustainability-home" style="padding:0;">
        <div id="demo1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators" style="margin-bottom:-40px;">
                <li data-target="#demo1" data-slide-to="0" class="active"></li>
                <li data-target="#demo1" data-slide-to="1"></li>
            </ul>
            <!-- The slideshow -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_field('our_blog_title'); ?></h2>
                        <p class="main-p">
                            <?php the_field( 'our_blog_descriptions' ); ?>
                        </p>
                    </div>
                </div>
                <div class="carousel-inner" style="padding-top:50px;">
                 <?php 
                    $args = array(
                      'numberposts' => 10,
                      'post_type'   => 'post'
                    );                                     
                    $post_details  = get_posts( $args );
                    $count =0;
                     if ( $testimonials ) {
                        foreach ( $testimonials as $post ) :
                            setup_postdata( $post ); 
                            if($count % 3 == 0 ){
                            ?>
                            <div class="carousel-item <?php echo ($count == 0 ) ? 'active' : '' ; ?>">
                            <div class="row">
                            <?php } ?>
                                
                                    <div class="col-md-4 ">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/saudi_office_small_img.jpg" class="img-fluid" />
                                        <h5>Sendan Received Appreciation Email from Sadaf President</h5>
                                        <p>On December 3, 2014, Sendan received an appreciation email from SADAF President, Zahrani A Mohammed for the successful completion of the Recovered Water Line project. The mechanical project was safely completed ahead of schedule on 23rd Nov. 2014.</p> <a href="http://sendan-international.blogspot.com/" target="_blank">Read More</a> 
                                    </div>
                                    <div class="col-md-4">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/saudi_office_small_img.jpg" class="img-fluid" />
                                        <h5>Sadara Isocyanates Project Team Wins Two Awards</h5>
                                        <p>The project team of Sadara Isocyanates is in high spirits after receiving twin awards from Daelim and Sadara Management. In a ceremony organized by Daelim last November 13, 2014, Sendan was presented with Best Contractor of the Month...</p> <a href="http://sendan-international.blogspot.com/" target="_blank">Read More</a> 
                                    </div>
                                    <div class="col-md-4">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/saudi_office_small_img.jpg" class="img-fluid" />
                                        <h5>Sendan PSD Turn Around Team Appreciated by Petrokemya</h5>
                                        <p>While the winter season starts to cool off Saudi Arabia, things continue to get heated up in Sendan. A warm front carrying flurry of achievements hovered around Sendan over the last few days. In another solid display of its execution prowess,</p> <a href="http://sendan-international.blogspot.com/" target="_blank">Read More</a> 
                                    </div>
                                <?php 
                                if($count % 3 == 0 ){
                                    echo '</div>';
                                    echo '</div>' ;
                                }
                                    
                        ?>  

                            <?php 
                            $count++;
                            wp_reset_postdata();
                        endforeach;
                     }
                     ?>
                </div>
            </div>
            <!-- Left and right controls 
      <a class="carousel-control-prev" href="#demo1" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo1" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>-->
        </div>
    </div>
   