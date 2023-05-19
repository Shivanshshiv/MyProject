<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f506c2464ae15"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/inc/pagination.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/inc/pagination_2020-05-07-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Pagination layout.
 *
 * @package sendan
 *
 * @since 1.0.0
 * @version 1.0.0
 */

if ( ! function_exists( 'sendan_pagination' ) ) {

	function sendan_pagination( $args = [], $class = 'pagination' ) {
        $max_page_no = ( $GLOBALS['wp_query']->max_num_pages ) ? $GLOBALS['wp_query']->max_num_pages : $args->max_num_pages;
        if ( $max_page_no <= 1 ) return;
            $args = wp_parse_args( $args, 
                [ 'mid_size'         => 2,
                'prev_next'          => true,
                'prev_text'          => __('Previous', 'sendan'),
                'next_text'          => __('Next', 'sendan'),
                'screen_reader_text' => __('Posts navigation', 'sendan'),
                'type'               => 'array',
                'current'            => max( 1, get_query_var('paged') ),
                'total'              => $max_page_no
                ]);
    
        $links = paginate_links( $args );
        ?>
       	<div class="col-md-12 col-12 f-left mt-10 padd0">
			<nav aria-label="Page navigation example ">
				<ul class="pagination">
           

                <?php

                    foreach ( $links as $key => $link ) { ?>
                    <?php // echo strpos( $link, 'current' ) ? 'active' : '' ?>
                        <li class="page-item  ">
                        <?php echo str_replace( 'page-numbers', 'page-item', $link ); ?></li>
                <?php } ?>

	            </ul>
			</nav>
		</div>

        <?php
    }
}