<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                if ( have_posts() ) :
				while ( have_posts() ) :
						the_post();
			        get_template_part( 'template-parts/content/content' );
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            
           <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
             <?php sendan_pagination(); ?>
            </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <?php get_Sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
    



<?php
get_footer();
