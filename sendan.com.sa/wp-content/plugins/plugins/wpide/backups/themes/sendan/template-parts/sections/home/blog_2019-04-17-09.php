<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29dddbabea9d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/sections/home/blog.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/blog_2019-04-17-09.php") )  ) ){
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
                  'numberposts' => (  get_field('blog_count')  ? get_field('blog_count') : 6 ),
                  'post_type'   => 'post'
                );                                     
                $post_details  = get_posts( $args );
                $count =0;
                 if (  $post_details ) {
                       $k = 1;
                    foreach (  $post_details as $post ) : 
                        
                        setup_postdata( $post ); 
                        
                        if ($k == 1 ){
                         ?>
                            <div class="carousel-item <?php echo ($count == 0 ) ? 'active' : '' ; ?>">
                                <div class="row"> 
                        <?php } ?>
                                    <div class="col-md-4 ">
                                        <?php
                            			if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'blog-home-thumb' , array('class' => 'img-fluid') );
                                        }
                                        ?>
                                        <h5><?php the_title(); ?></h5>
                                        <p>On <?php echo get_the_date(); ?>, <?php echo wp_trim_words(get_the_content() , 30 , '...',  true ) ; ?></p> 
                                        <a href="<?php the_permalink() ;?>" target="_blank">Read More</a> 
                                    </div>
                        <?php
                        if($k % 3 == 0 ) { $k = 1; ?>  
                                </div>
                            </div>
                       
                        <?php 
                        }
                        else{
                             $k++;
                        }
                        $count++;
                       
                        wp_reset_postdata();
                    endforeach;
                 }
                 ?>
               <!-- Left and right controls 
	  <a class="carousel-control-prev" href="#demo1" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo1" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	  </a>--> 
	  </div>
        </div>
            </div>
        </div>
    </div>
</div>
   