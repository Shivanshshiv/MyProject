<?php
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
           
 <?php // echo strpos( $link, 'currentactive' ) ? 'activepage' : '' ?>
                <?php

                    foreach ( $links as $key => $link ) { ?>
                   
                        <li class="page-item">
                        <?php echo str_replace( 'page-numbers', 'page-link', $link ); ?></li>
                <?php } ?>

	            </ul>
			</nav>
		</div>

        <?php
    }
}