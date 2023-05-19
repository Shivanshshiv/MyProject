<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29d7f8492138"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/inc/pagination.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/inc/pagination_2019-04-19-10.php") )  ) ){
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
       <ul class="pagination">

           

                <?php

                    foreach ( $links as $key => $link ) { ?>

                        <li class="paginate_button  <?php echo strpos( $link, 'current' ) ? 'active' : '' ?>">

                            <?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>

                        </li>

                <?php } ?>


        </ul>

        <?php
    }
}