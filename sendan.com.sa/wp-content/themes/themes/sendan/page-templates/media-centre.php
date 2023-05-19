<?php 
/*
* Template Name: Media Centre
*/
get_header();
?>
<style>
    .media-centre h3 {
        padding-bottom: 0px;
        margin: 0;
    }
    
    .media-centre h5 {
        border-top: 1px #ccc solid;
        padding-top: 10px;
        margin-top: 20px;
    }
    
    .media-centre p {
        margin-bottom: 0;
    }
    
    .media-centre p span {
        margin-bottom: 0;
        color: #005825;
    }
    
    .media-centre .more {
        text-decoration: underline;
    }
</style>
<div class="container-fluid all-pages-padding">
    <div class="container">
        <div class="row media-centre">
            <div class="col-md-5">
                <div class="media-centre-box">
                    <h4><?php the_field('si_inquireie_title'); ?></h4>
                    <?php the_field('si_inquiry_details'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media-centre-box">
                    <h4><?php the_field('general_inquiries_title'); ?></h4>
                    <?php the_field('general_inquiries_descriptions'); ?>
                </div>
            </div>
            <div class="col-md-3">
           
                <h4>Social Network:</h4>
                   <?php
                   if( have_rows('social_link_details') ):     
                    while ( have_rows('social_link_details') ) : the_row(); 
                        ?>    
                        <a style="color:#005825;font-size:18px;margin-right:10px;" target="_blank" href="<?php echo the_sub_field('social_icon_url'); ?>">
                        <i class="<?php echo  the_sub_field('soical_icon_class'); ?>"></i></a>
                        <?php
                    endwhile;
                endif;
                ?>
                  </div>
             <?php if( get_field('show_news') ):  ?>
                 <div class="news-section-box">
                  <div class="col-md-12">
                            <h3>Latest News</h3>
                    <?php
                    $args = array(
                              'numberposts' => (  get_field('blog_count')  ? get_field('blog_count') : 6 ),
                              'post_type'   => 'news'
                            );                                     
                    $post_details  = get_posts( $args );
                    if (  $post_details ) {
                    foreach (  $post_details as $post ) : 
                        setup_postdata( $post ); 
                    ?>
                   
                            <h5><b><?php the_title(); ?></b></h5>
                            <p><span><b><?php echo get_the_date(); ?></b></span></p>
                            <p><?php echo wp_trim_words( get_the_content(), '100', '...' , true ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="more">more</a>
                        
                   <?php
                   wp_reset_postdata();
                    endforeach;
                 }
                    ?>
                    </div>
                </div>
            <?php endif; ?>
            </div>
    </div>
</div>

<?php get_footer(); ?>
