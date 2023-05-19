<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "36a295ae66f10625d2857ccde42e42bd5af7d27c91"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/content/content-news.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/content/content-news_2020-05-07-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>
 <div class="col-md-12 news-mainar" data-aos="fade-left">
    <div class="col-md-3 news-img f-left">
      <?php
		if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'news-thumb' , array('class' => 'img-fluid') );
        }
        ?> 
    </div>

   <div class="col-md-9 f-left news-details" >
        <h4><?php the_title(); ?></h4>
        <h5><i class="fa fa-clock" aria-hidden="true"></i> Record : 30-01-2020</h5>
		<h5><i class="fa fa-clock" aria-hidden="true"></i> <?php echo get_The_date(); ?> </h5>
	  <p><?php echo wp_trim_words( get_the_content() , 50 , '...', true ) ; ?></p> 
		
		<a href="<?php the_permalink() ;?>">Read More</a>
	</div>
</div> 