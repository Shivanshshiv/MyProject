<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0bdae52e11cf3cce78c578ddf3df4d1c2eab221eeb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/our-project.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/our-project_2020-06-10-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><div class="container-fluid  section-project" >
    <div class="inner-bg">
        <div class="row">
      <div class="container">
        <div class="col-md-12 col-12 padd0 f-left">
           <div class="col-md-10 col-12 padd0 f-left">
            <h2 class="aboutus-title"><?php the_field('all_projects_title'); ?></h2>  
          </div>
          <div class="col-md-2 col-12 padd0 f-left" >
            <a class="read-more-major" href="<?php echo get_site_url(); ?>/our-project/">View more</a>
          </div>
        </div>
        
            <div class="col-md-12 col-12 f-left padd0">
                <div id="projectfull" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner ">
                        <?php
                $project_count = get_field('project_count');
    			
                $args = array(
                    'post_type' => 'projects',
                    'post_status' => 'publish',
                    'posts_per_page'=> $project_count,
                    'tax_query' => array(
                		array(
                			'taxonomy' => 'project-category',
                            'field'    => 'slug',
                            'terms'    => 'our-project'
                		),
                		
                	),
    	
                );
                if( !empty( $_GET['term_slug'] ) ) {
                    $args['tax_query'] = array(
                       'relation' => 'AND',
                       array(
                			'taxonomy' => 'sector-type',
                			'field'    => 'slug',
                			'terms'    => ( !empty( $_GET['term_slug'] )  ? $_GET['term_slug']  : '' ),
                		) );         
                }
                
                $query = new WP_Query( $args);
                ?>
              <?php 
                $i=1;
    			if ( $query->have_posts() ) :
    				while ( $query->have_posts() ) : $query->the_post();
    				$sector_types = wp_get_post_terms( get_the_id(), 'sector-type', array("fields" => "names") );
    			?>
                        <div class="carousel-item <?php if($i==1){ ?> active <?php }?>">
                      
                            <div class="col-md-12 padd0 f-left">
                               <div class="col-md-12 project-full  padd0">
                                  <?php
                                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                    the_post_thumbnail( 'full' );
                                    }
                                    ?>
                               </div>
                               <div class="col-md-12 project-text20 ">
                                    <h4><?php the_title(); ?></h4>
                                   <!-- <p><?php the_content(); ?></p>-->
                                    <p><?php echo wp_trim_words( get_the_content() , 50,  '...' , true ); ?></p>
                               </div>
                            </div>
                        </div>
             
                        <?php 
                        $i=$i+1;
                    endwhile;
                    wp_reset_postdata();
                     
                    endif;
                    ?>
                    
                    </div>
                  <a style="margin-left: -34px; opacity: 1;" class="carousel-control-prev" href="#projectfull" role="button" data-slide="prev">
                     <div class="cus-pre">
                        <img width="10" src="<?php echo get_template_directory_uri(); ?>/assets/image/left.png">
                     </div>
                  </a>
                  <a style="margin-right: -34px; opacity: 1;" class="carousel-control-next" href="#projectfull" role="button" data-slide="next">
                     <div class="cus-pre">
                        <img width="10" src="<?php echo get_template_directory_uri(); ?>/assets/image/right.png">
                     </div>
                  </a>
                </div>
            </div>
         </div>
      </div>
      <div class="" id="Career"></div>
   </div>
</div>
 