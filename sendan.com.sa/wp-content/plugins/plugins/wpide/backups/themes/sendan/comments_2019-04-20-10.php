<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290b0df6b826"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/comments.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/comments_2019-04-20-10.php") )  ) ){
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
 *
 * @package sendan
 *
 * @since 1.0.0
 * @version 1.0.6
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area" id="comments">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>

		<h2 class="comments-title">
			
			<?php
				$comments_number = get_comments_number();
			if ( 1 === (int) $comments_number ) {
				/* translators: %s: post title */
				printf( esc_html_x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'sendan' ), '<span>' . get_the_title() . '</span>' );
			}

			else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'sendan'
					),
					number_format_i18n( $comments_number ),
					'<span>' . get_the_title(). '</span>'
				);
			}


	
			?>

		</h2><!-- .comments-title -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>			
			<nav class="comment-navigation" id="comment-nav-above">
				
				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'sendan' ); ?></h1>
				
				<?php if ( get_previous_comments_link() ) { ?>
						<div class="nav-previous">
							<?php
							previous_comments_link(
								__(
									'&larr; Older Comments',
									'sendan'
								)
							);
							?>
						</div>
					<?php
					}
					if ( get_next_comments_link() ) {
						?>
						<div class="nav-next">
							<?php
							next_comments_link(
								__(
									'Newer Comments &rarr;',
									'sendan'
								)
							);
							?>
						</div>
				<?php } ?>

			</nav><!-- #comment-nav-above -->

		<?php endif; // check for comment navigation. ?>

		<ol class="comment-list">

			<?php
			wp_list_comments(
							array(
								'style'      => 'ol',
								'short_ping' => true,
							)
						);
			?>

		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through. ?>
			
			<nav class="comment-navigation" id="comment-nav-below">
				
				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'sendan' ); ?></h1>
				
				<?php if ( get_previous_comments_link() ) { ?>
						<div class="nav-previous">
							<?php
							previous_comments_link(
											__(
												'&larr; Older Comments',
												'sendan'
											)
										);
							?>
						</div>
					<?php
					}
					if ( get_next_comments_link() ) {
					?>
						<div class="nav-next">
						<?php
						next_comments_link(
							__(
								'Newer Comments &rarr;',
								'sendan'
							)
						);
						?>
						</div>
				<?php } ?>

			</nav><!-- #comment-nav-below -->
			
		<?php endif; // check for comment navigation. ?>

	<?php endif; // endif have_comments(). ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sendan' ); ?></p>

	<?php endif; ?>

	<?php comment_form(); // Render comments form. ?>

</div><!-- #comments -->
