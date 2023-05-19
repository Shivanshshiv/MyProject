<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2987b0fcf20b"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/major-projects.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/major-projects_2019-04-19-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/* 
* Template Name: Major Projects
*/
get_header(); 
?>
<style>
.thumb {
    width: 100%;
    height: auto;
}
.feature-gallery {
    margin: 15px 0;
    overflow: hidden;
    position: relative;
}
.feature-gallery img.thumb {
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 700ms ease;
    -moz-transition: all 700ms ease;
    -ms-transition: all 700ms ease;
    -o-transition: all 700ms ease;
    transition: all 700ms ease;
}
.feature-gallery:hover img.thumb {
    opacity: 1;
    transition: all 0.35s;
    -moz-transform: scale(1.13);
    -webkit-transform: scale(1.13);
    -ms-transform: scale(1.13);
    transform: scale(1.13);
}
.fg-overlay { 
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    transition: all.3s;
    width: 100%;
    height: 100%;
    padding: 30px;
    cursor: pointer;
}
.feature-gallery:hover .fg-overlay {
    background-color: rgba(0, 0, 0, 0.7);
    opacity: 1;
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}
.fg-overlay h2 {
    font-size: 18px;
    font-weight: 400;
    line-height: 22px;
    color: #fff;
    opacity: 0;
    margin-bottom: 5px;
    -moz-transform: scale(0.1);
    -ms-transform: scale(0.1);
    -webkit-transform: scale(0.1);
    transform: scale(0.1);
    transition: all .35s;
}
.fg-overlay p {
    font-size: 14px;
    color: #fff;
    opacity: 0;
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    transition: all .35s;
}
.feature-gallery:hover .fg-overlay h2,
.feature-gallery:hover .fg-overlay p{
    opacity: 1;
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}
.fg-overlay:before {
    opacity: 0;
    border: 1px solid #f1f1f1;
    position: absolute;
    top:15px;
    left:15px;
    bottom:15px;
    right:15px;
    z-index: 10;
    content: "";
    display: block;
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    transition: all .35s;
}
.feature-gallery:hover .fg-overlay:before {
    opacity: 1;
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

</style>

<div class="container-fluid all-pages-padding text-center" style="padding-top:0;">
    <div class="container">
        <div class="row">
         <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$posts_per_page =  get_option( 'posts_per_page' );
			
            $query = new WP_Query(array(
                'post_type' => 'projects',
                'posts_per_page' => $posts_per_page,
                'paged' => $paged,
                'post_status' => 'publish',
                'tax_query' => array(
            		array(
            			'taxonomy' => 'project-category',
                        'field'    => 'slug',
                        'terms'    => 'major-project'
            		),
            	),
	
            ));

			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
				?>
                    <!--/feature-gallery--->
                    <div class="col-md-3 col-sm-3">
                        <div class="feature-gallery">
                        <?php
                			if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'major-project-thumb' , array('class' => 'thumb') );
                            }
                            ?>
                            
                            <a href="detail.html">
                                <div class="fg-overlay">
                                    <p><?php the_title(); ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--/feature-gallery--->
                <?php
                endwhile;
            endif;
            ?>

        </div>
    </div>
    <div class="container">
       <?php sendan_pagination($query); ?>
    </div>
</div>
<?php get_footer(); ?>