<?php 
/*
* Template Name: Meet our people
*/
get_header();
?>
	<style>
	.meet-out-people .inner{background:#005825;border-radius:5px;}
	.meet-out-people .inner a{color:#fff;}
	.meet-out-people .inner img{margin-bottom:5px;width:100%;}
	.meet-out-people .inner p{padding:10px;}
	</style>
	
	<div class="container-fluid all-pages-padding">
  
	<?php 
	if(have_posts()):
		while ( have_posts() ) :
			the_post();
			?>
			 <div class="container meet-out-people">
                <div class="row">
                    <div class="col-md-12">
                        <?php the_content(); ?>
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
                             <div class="col-md-3">
                            <div class="inner">
                                <a href="<?php the_permalink(); ?>">
                                     <?php
                            			if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'our-people-thumb' , array('class' => 'img-fluid') );
                                        }
                                        ?>
                                    <p><b><?php the_title() ; ?></b>
                                        <br/><?php the_field('designation'); ?>
                                        <br/><?php the_field('location'); ?></p>
                                </a>
                            </div>
                        </div>
                        <?php 
                            endforeach;
                        }
                    ?>
                 
                </div>
            </div>  
            <?php
            endwhile;
        endif;
        ?>
        
    </div>
<?php get_Footer() ; ?>