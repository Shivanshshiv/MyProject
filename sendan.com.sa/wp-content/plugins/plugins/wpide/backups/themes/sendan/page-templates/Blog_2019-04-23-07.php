<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29891ec0b68f"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/Blog.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/Blog_2019-04-23-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* 
* Template Name: Blog
*/

get_header();
?>
<div class="container-fluid main-content-home" style="padding-top:0;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <?php
			$posts_per_page =  get_option( 'posts_per_page' );
			
            $query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => $posts_per_page,
                'paged' => $paged,
                'post_status' => 'publish',
            ));

			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
			        get_template_part( 'template-parts/content/content' );
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            
           <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
             <?php sendan_pagination($query); ?>
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
    


<?php get_footer() ; ?>