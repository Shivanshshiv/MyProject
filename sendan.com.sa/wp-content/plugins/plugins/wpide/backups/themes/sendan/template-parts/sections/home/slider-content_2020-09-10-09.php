<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "1c0c4960880e545f7724d71f4e8389ca6cf7759cc0"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/slider-content.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/slider-content_2020-09-10-09.php") )  ) ){
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
         <?php  get_template_part( 'template-parts/sections/home/slider-counter'); ?> 
        <div class="col-md-3 f-left ">

            
            <?php 
        if( get_field('show_event') ): 
            if( have_rows('events_&_exhibitions_details') ): 

	            while( have_rows('events_&_exhibitions_details') ): the_row(); 
        ?>
        
                    <div class="col-md-12 text-right padd0 news_home_section">
                        <a href="<?php echo get_sub_field('events_&_exhibitions_link'); ?>" alt="<?php echo get_sub_field('events_&_exhibitions_title'); ?>" target="_blank">
                            <img src="<?php echo get_sub_field('events_&_exhibitions_image'); ?>" style="margin-bottom:5px;height:50px;border-radius:2px;"/>
                        </a>
                      
                    </div> 
                <?php
                endwhile;
            endif;
            ?>
                
         <?php
         endif; 
         ?>
         
         <?php 
         $news_details  = get_field('blog details');	
         ?>
         <div class="news-updatemain">
                <h4><?php echo $news_details['news_title'] ; ?></h4>
                <div class="newstape">
                    <div class="newstape-content" style="top: -340px;">
                    <?php 
                        
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
                            <p class="text-justify">
                               <?php echo wp_trim_words( get_the_content() , 20 , '...',  true ); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>">More</a>
                            <hr>
                        </div>
                       <?php
                             wp_reset_postdata();
                            endforeach;
                        }
                        ?>
                    </div>
                </div>

                <a href="<?php echo  $news_details['read_more_url']; ?>" style="text-decoration:underline;font-weight:bold;">Read More...</a>

            </div>

        <!--div class="client-review-w">
         <?php 
             $client_review_details  = get_field('client-review-details');	
             ?>
                <h4><?php echo $client_review_details['title'] ; ?></h4>
                <div id="cbp-qtrotator" class="cbp-qtrotator">
                    <?php 
                        $args = array(
                          'numberposts' => ( ($client_review_details['number_of_post'] ) ? $client_review_details['number_of_post'] : 4 ),
                          'post_type'   => 'testimonials'
                        );                                     
                        $testimonials = get_posts( $args );
                        $count =0;
                        if ( $testimonials ) {
                            foreach ( $testimonials as $post ) :
                                 setup_postdata( $post ); 
                        ?>
                        
                        <div class="cbp-qtcontent <?php echo ( $count == 1 ) ? '  current' : '' ; ?> maincctext">
                        <?php
                        			if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full' , array('class' => '') );
                                    }
                                    ?>
                                    
                        <blockquote>
                            <p><?php the_content( ) ;?></p>
                            <p><?php the_title() ; ?></p>
                        </blockquote>
                    </div>
                   <?php
                            wp_reset_postdata();
                            $count++;
                            endforeach;
                        }
                    ?>        
                    
                    <span class="cbp-qtprogress" ></span> </div>
                <!-- / main -->

            </div---->

        </div>

    </div>
    <div class="" id="about2"></div>
    
  </div>
