<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29cc5ff866ba"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/content/content-news.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/content/content-news_2019-04-22-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>    
<div class="row mb-2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <?php
            			if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'news-thumb' , array('class' => 'img-fluid') );
                        }
                        ?>
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="news-content">
                                <h3><?php the_title() ; ?></h3>
                                <div class="date"><i class="fa fa-calendar"></i> <?php echo get_The_date(); ?></div>
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