<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290b0df6b826"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/archive.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/archive_2019-04-20-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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