<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2912ff7e007a"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/sections/home/slider-content.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/slider-content_2019-04-16-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The section use to Mange Home page main slider content as client review , latest news and event logo
 *
 * @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
 */
?>

<div class="container-fluid" style="padding-left:30px;padding-right:30px;">
    <div class="row">    
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="clint-review-list" >
                        <h4 style="border-bottom:1px #ccc solid;">Clients Review</h4>
                        <div id="cbp-qtrotator" class="cbp-qtrotator">
                            <?php 
                            $args = array(
                              'numberposts' => 10,
                              'post_type'   => 'testimonials'
                            );                                     
                            $testimonials = get_posts( $args );
                            $count =0;
                            if ( $testimonials ) {
                                foreach ( $testimonials as $post ) :
                                     setup_postdata( $post ); 
                            ?>
                                <div class="cbp-qtcontent <?php echo ( $count == 1 ) ? 'current' : '' ; ?> ">                                    
                                    <?php
                        			if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full' , array('class' => 'img-fluid') );
                                    }
                                    ?>
                                    <blockquote>
                                        <?php the_content( ) ;?>
                                        <footer><?php the_title() ; ?></footer>
                                    </blockquote>
                                </div>
                             <?php
                                wp_reset_postdata();
                                $count++;
                                endforeach;
                            }
                        ?>                            
                            <span class="cbp-qtprogress"></span> 
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
        
        <?php 
        if( get_field('show_event') ): 
            if( have_rows('events_&_exhibitions_details') ): 

	            while( have_rows('events_&_exhibitions_details') ): the_row(); 
        ?>
        
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="<?php echo get_sub_field('events_&_exhibitions_link'); ?>" alt="<?php echo get_sub_field('events_&_exhibitions_title'); ?>" target="_blank">
                            <img src="<?php echo get_sub_field('events_&_exhibitions_image'); ?>" style="height:50px;border-radius:2px;" />
                        </a>
                        <br/> <a href="<?php echo get_sub_field('events_&_exhibitions_link'); ?>" target="_self" style="font-size:18px;color:#fff;margin-top:5px;display:block;">Events & Exhibitions</a>
                    </div>
                </div>
                <?php
                endwhile;
            endif;
            ?>
                
         <?php
         endif; ?>       
            
            <div style="background:rgba(0, 0, 0, .5);height:250px;width:300px;margin-top:20px;border-radius:5px;float:right;padding:20px;color:#fff;">
                <h4 style="border-bottom:1px #ccc solid;">News Update</h4>  
                <div class="newstape">
                    <div class="newstape-content">
                        <?php 
                        $news_details  = get_field('blog details');	
                            $args = array(
                              'numberposts' =>( ($news_details['number_of_post'] ) ? $news_details['number_of_post'] : 3 ),
                              'post_type'   => 'news'
                            );                                     
                            $post_list = get_posts( $args );
                            $count =0;
                            if ( $post_list ) {
                                foreach ( $post_list as $post ) :
                                     setup_postdata( $post ); 
                            ?>
                                <div class="news-block">
                                    <h5><?php the_title(); ?></h5>
                                    <small><?php echo get_the_date(); ?></small>
                                    <p class="text-justify"><?php echo wp_trim_words( get_the_content() , 20 , '...',  true ); ?></p>
                                    <a href="<?php the_permalink(); ?>">More</a>
                                    <hr />
                                </div>
                                <?php
                                endforeach;
                            }
                            ?>
                    </div>
                    
                </div>
                <div>   <a href="<?php echo  $news_details['read_more_url']; ?>" style="text-decoration:underline;font-weight:bold;">Read More...</a>
                </div>
            </div>
            
            
            
        </div>
    </div>
</div>
        
        
        