<?php 
/*
* Template Name: Meet our people New
*/
get_header();
?>
<?php
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
        ?>
<!-- <div  class="container-fluid  section-10  meet_ttall"  style=" margin-top: 56px; background-image: url(<?php echo $featured_img_url; ?>);  "  >-->
<!--   <div class="container">-->
<!--      <div class="col-md-12 padd0">-->
<!--         <div class="col-md-12 about-ceo f-left padd0">-->
<!--            <div class="col-md-12 padd0">-->
               <!--<h2 class="aboutus-title" style="color: #fff;"> <?php the_field('page_heading'); ?> </h2>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->


<div class="container section-10 section-1a" style='margin-top: 80px;'>

        <div class="row">
            <h2 class="aboutus-title">Our People</h2>
        </div>

        <div class="row">
            <div id="businessquato2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators slide-botom">
                 <?php
                    if( have_rows('banner_details') ):
                        $count = 0;     
                        while ( have_rows('banner_details') ) : the_row(); 
                        ?>
                        
                                        <li data-target="#businessquato2" data-slide-to="<?php echo $count; ?>"  <?php echo ($count++ == 0 ) ? 'class="active"' : '' ; ?>></li> 
                                      
                          <?php 
                        endwhile;
                    endif;
                    ?>            
                </ol>
                <div class="carousel-inner ">
                <?php
                if( have_rows('banner_details') ):
                    $count = 0;     
                    while ( have_rows('banner_details') ) : the_row(); 
                    ?>       
                                 
                            <div class="carousel-item <?php echo ($count++ == 0 ) ? 'active' : '' ; ?>">
                                <img class="img-fluid" src="<?php echo the_sub_field('image_url'); ?>" alt="">
                            </div>
                    
                     <?php endwhile; 
               endif;
               ?>         
                           
                        
                </div>
                
               

                <a style="margin-left: -34px; " class="carousel-control-prev" href="#businessquato2" role="button" data-slide="prev">
                    <div class="cus-pre">
                        <img width="10" src="<?php echo get_template_directory_uri();?>/assets/image/left.png">
                    </div>
                </a>
                <a style="   margin-right: -34px; " class="carousel-control-next" href="#businessquato2" role="button" data-slide="next">
                    <div class="cus-pre">
                        <img width="10" src="<?php echo get_template_directory_uri();?>/assets/image/right.png">
                    </div>
                </a>
            </div>
        </div>


    </div>
<div class="clearfix"></div>

<div class="container  section-10" data-aos="fade-left">
   <div class="row">
      <div class="col-md-12">
         <h2 class="aboutus-title"><?php the_field('sendan_executive_committee'); ?></h2>
      </div>
   </div>
   <div class="row">
     <?php   
       $args = array(
                      'numberposts' => -1,
                      'post_type'   => 'our_people',
                      
                       
                    );                                     
        $post_details  = get_posts( $args );
        if (  $post_details ) {
            foreach (  $post_details as $post ) : 
                setup_postdata( $post ); 
                ?>
                <div class="col-md-4 executive_all">
                     <div class="col-md-12 propic_ex">
                        <a href="<?php the_permalink(); ?>"> 
                        <?php
            			if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'our-people-thumb' , array('class' => 'img-fluid') );
                        }
                        ?>
                        </a>
                     </div>
                     <h4><?php the_title() ; ?></h4>
                     <!--h5>ERP Manager</h4-->
                     <a href="<?php the_permalink(); ?>">Get to know me <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
          <?php 
                endforeach;
            }
        ?>
      
   </div>
</div>
 
<?php get_Footer() ; ?>