<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290b0df6b826"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/comments.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/comments_2019-04-20-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 */
/**
 * @package      Law&Co
 * @author       EasePress Team
 * @websites     http: //www.easepress.com
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}


// COMMENTS LAYOUT 
function sendan_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <article class="comment-body">
            <footer class="comment-meta">
                <div class="comment-author vcard">
                    <?php echo get_avatar( $comment, $args['avatar_size'] ); ?>

                    <b><?php echo get_comment_author_link(); ?></b>

                    <div class="comment-metadata">						
                        <?php printf( esc_html__( '%1$s at %2$s', 'sendan' ), get_comment_date(), get_comment_time() ) ?>	
                    </div><!-- /.comment-metadata -->
                </div><!-- /.comment-author vcard -->
            </footer><!-- /.comment-meta -->

            <div class="comment-content">

                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <em><i class="icon-info-sign"></i> <?php esc_html_e( 'Comment awaiting approval', 'sendan' ); ?></em>
                    <br />
                <?php endif; ?>
                <?php comment_text(); ?>

            </div>
            <!-- /.comment-content -->

            <footer class="comment-footer">

                <?php comment_reply_link( array_merge( $args, array('reply_text' => '<i class="easepress-icon-share-arrow"></i>' . esc_html__( 'Reply', 'sendan'), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ), $comment->comment_ID); ?>
                 <?php edit_comment_link( esc_html__( 'Edit', 'sendan' ) ); ?>

            </footer>
            <!-- /.reply -->
        </article>
    </li>
    <?php
}
?>
<div class="row">
    <div class="col-md-12">
        <?php if(get_comments_number() > 0) { ?>
        <div class="comments-area" id="comments">
            <?php
            echo "<div class='comments comment-list'><ol>";
            wp_list_comments( array(
                'avatar_size' => 92,
                'style'       => 'ol',
                'short_ping'  => true,
                'callback'    => 'sendan_comments',
                'type'        => 'all'
            ) );

            echo "</ol></div>";

            echo "<div id='comments_pagination'>";

            paginate_comments_links( array('prev_text' => '&laquo;', 'next_text' => '&raquo;') );

            echo "</div>";
            echo '</div>'; //#comments -->
             }   
            $custom_comment_field = '<div class="row">
									<div class="col-md-12">
										<div class="form-group">
										<textarea id="comment" class="form-control" name="comment" cols="45" rows="4" aria-required="true" placeholder="' . esc_attr__( 'Comment', 'sendan' ) . '"></textarea>
										</div>
									</div>
								</div>';  //label removed for cleaner layout
            $aria_req = '';

            $args = array(
                'author' =>
                '<div class="row">
	                    <div class="col-md-6">
							<div class="form-group">
								<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' placeholder="' . esc_attr__( 'YOUR NAME', 'sendan' ) . ( $req ? '*' : '' ) . '" />
							</div>
						</div>',
                'email' =>
                '<div class="col-md-6">
			    	<div class="form-group">
			    		<input id="email" class="form-control" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' placeholder="' . esc_attr__( 'YOUR EMAIL', 'sendan' ) . ( $req ? '*' : '' ) . '" />
			    	</div>
			    </div>',
                'url' =>
                '<div class="col-md-12">
				    	<div class="form-group">
				    		<input id="url" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" placeholder="' . esc_attr__( 'WEBSITE URL', 'sendan' ) . '" />
				    	</div>
				    </div>
				    </div>',
            );

            comment_form(array(
                'comment_field'        => $custom_comment_field,
                'comment_notes_after'  => '',
                'logged_in_as'         => '',
                'comment_notes_before' => '',
                'title_reply'          => esc_html__( 'Leave a Reply', 'sendan' ),
                'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'sendan' ),
                'label_submit'         => esc_html__( 'Post Comment', 'sendan' ),
                'class_submit'         => 'cus-submit',
                'fields'               => $args,
            ));
            ?>

    </div><!-- #col-md-12 -->
</div><!-- /.row -->
