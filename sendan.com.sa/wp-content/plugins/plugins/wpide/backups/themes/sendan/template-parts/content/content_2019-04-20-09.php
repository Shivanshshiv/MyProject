<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290b0df6b826"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/content/content.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/content/content_2019-04-20-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('row mb-2'); ?> >
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?php the_permalink(); ?>" >
                            <?php
                            $categories_list = get_the_category_list( __( ', ', 'sendan' ) );
                			if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'news-thumb' , array('class' => 'img-fluid') );
                            }
                            ?>
                        </a>
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="news-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h3>
                                <small class="postmeta" style="display: block;">
                                  <i class="fa fa-calendar"></i> <?php echo get_The_date(); ?> | 
                                  <span class="post-cat"> Posted in <?php echo  $categories_list ; ?> </span>
                              </small>
                               
                                <p><?php echo wp_trim_words( get_the_content() , 50 , '...', true ) ; ?></p>
                                <a href="<?php the_permalink() ;?>">Read More</a>
                            </div>
                            <div class="news-footer">
                                <div class="news-author">
                                    <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item text-secondary">

                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>