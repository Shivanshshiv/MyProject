<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sendan
 * @since 1.0.0
 */


get_header();
?>
<div class="container-fluid main-content-home" style="padding-top:0;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->
					<?php
					while ( have_posts() ) :
						the_post();
					    get_template_part( 'template-parts/content/content' );
					
					endwhile;
				else : ?>

					<?php get_template_part( 'template-parts/loop-templates/content', 'none' ); ?>

				<?php
				endif; ?>
            <?php sendan_pagination(); ?>
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