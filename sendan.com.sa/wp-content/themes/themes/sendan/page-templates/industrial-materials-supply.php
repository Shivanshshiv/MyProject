<?php 
/*
* Template Name: Industrial Materials Supply
*/
get_header(); 
?>

<div class="container-fluid all-pages-padding" style="padding-top:0;">
    <div class="container">
       
        	<?php 
        		if(have_posts()):
        			while ( have_posts() ) :
        				the_post();
        				?>
        				 <div class="row">
                             <div class="col-md-12">
                             
                              <?php the_content(); ?>
                              </div>
                              
                         </div>
                <?php endwhile;
                endif;
                ?>
                
                <?php
                if( have_rows('extra_content') ):     
                    while ( have_rows('extra_content') ) : the_row(); 
                    ?>    
                        <div class="row" style="padding-top:40px;padding-bottom:20px;border-bottom:1px #ccc solid;">
                            <div class="col-md-2 col-center m-auto cus-testimonial">
                                <img src=" <?php echo  ( the_sub_field('image') ) ?>" class="img-fluid" />
                            </div>
                            <div class="col-md-10">
                                <?php echo  ( the_sub_field('content') ) ?>
                                <br/>
                                <?php if(!empty (get_sub_field('url') ) ) : ?>
                                     <a href=" <?php echo  ( the_sub_field('url') ) ?>" target="_blank"><b>Read More..</b></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
    </div>
</div>
<?php get_footer(); ?>