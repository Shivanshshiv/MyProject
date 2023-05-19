<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sendan
 * @since 1.0.0
 */


get_header();
?>
<div class="container-fluid main-content-home wrapper" style="padding-top:0;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">				
				<?php
		        while ( have_posts() ) : the_post();
			        get_template_part( 'template-parts/content/content','single' );
			
			    endwhile;
                ?>
                
                <?php
					// If comments are open or we have at least one comment, load up the comment template.
				 if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
					?>
					
					
            </div>
            <div class="col-md-4">
                <div class="row">
                    <?php get_Sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
    


<?php get_footer() ; ?>