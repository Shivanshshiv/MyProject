<?php

$args = array(
  'numberposts' => (  get_field('blog_count')  ? get_field('blog_count') : 6 ),
  'post_type'   => 'post'
);                                     
$post_details  = get_posts( $args );
$post_count = count( $post_details ) / 3 ;


                ?>
<div class="container-fluid our-sustainability-home" style="padding:0;">
    <div id="demo1" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators" style="margin-bottom:-40px;">
            
           <?php 
            for($i = 0 ; $i < $post_count; $i++ ){
                $active_class = ($i == 0 ) ? 'class="active" ' : "";
                echo '<li data-target="#demo1" data-slide-to="'.$i.'" '. $active_class .' ></li>';
            }
            ?>
            
            
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
                                        <p><?php echo wp_trim_words(get_the_content() , 30 , '...',  true ) ; ?></p> 
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
             
	  </div>
        </div>
            </div>
        </div>
    </div>
</div>
   