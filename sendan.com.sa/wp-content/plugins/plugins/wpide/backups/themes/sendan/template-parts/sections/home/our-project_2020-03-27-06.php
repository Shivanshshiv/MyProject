<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f501de994cda4"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/our-project.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/our-project_2020-03-27-06.php") )  ) ){
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
    
   <div class="col-md-12 col-12" style="text-align: center;">
    <h2 class="aboutus-title"><?php the_field('all_projects_title'); ?></h2>  
   </div>
 
            <?php
            $project_count = get_the_field('project_count');
			
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

  <div class="col-md-12 col-12">
  <div class="container-fluid">
     <div class="col-md-12 col-12">  

      <div id="verticalproject" class="carousel vert slide" data-ride="carousel" data-interval="3000">
        <ul class="carousel-indicators cus-projectlist">
            <?php
             $j=0;
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
			?>	
            <li data-target="#verticalproject" data-slide-to="<?php echo $j; ?>" class="<?php if($j == 0){ ?> active <?php } ?>"></li>
            <?php 
            $j=$j+1;
            endwhile;
            wp_reset_postdata();
            endif;
            ?>
        </ul>
        <div class="carousel-inner">
        <?php 
            $i=1;
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
				$sector_types = wp_get_post_terms( get_the_id(), 'sector-type', array("fields" => "names") );
			?>
            <div class="carousel-item <?php if($i==1){ ?> active <?php }?>">
                  <div class="col-md-12 ">
                      <div class="col-md-3 f-left">&nbsp;</div>
                        <div class="col-md-6 f-left project-deatals">
                            <div class="col-md-12 project-imgpr">
                                <?php
                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail( 'full' );
                                }
                                ?>
                                <!--img  src="<?php the_field('project_details_image'); ?>" alt="<?php the_title(); ?>"-->
                            </div>
                         <h4><?php echo $sector_types[0] ?></h4>
                         <p><?php the_title(); ?></p>
                         
                         <?php if( get_field('p_client') ): ?>
                         <h5> <?php the_field('p_client') ; ?></h5>
                         <?php endif; ?>
                      </div>
                 </div>
            </div>
            <?php 
            $i=$i+1;
            endwhile;
            wp_reset_postdata();
             else: 
                echo "<tr> <td colspan='5' class='text-center' > No Project Found </td> </tr>";
            endif;
            ?>
            
            
          
       
        
        </div>

        <!--
        <a class="carousel-control-prev" href="#verticalproject" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#verticalproject" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>  -->

     

    </div>


    </div>
  </div>  
</div>
</div>
</div>
<div class="" id="Career"></div>
</div>


</div>