<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2941990ccb62"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/single-news.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/single-news_2019-04-24-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* News style 
*/
get_header(); ?>
<?php
while ( have_posts() ) : the_post();
?>
    <div class="container-fluid all-pages-padding">
    	<div class="container">
    		<div class="row">
    	    	<?php 
    	    	$class= "col-md-8" ;
    	    	if ( !has_post_thumbnail() ) $class= "col-md-12"; ?>
                              
    			<div class="<?php echo $class; ?>">
    				<p><b><?php echo get_the_date(); ?></b>
    				</p>
    			    <?php the_content() ; ?>
    			</div>
    			<?php 
    				if ( has_post_thumbnail() ) {
    				    echo '	<div class="col-md-4">';
                            the_post_thumbnail( 'news-thumb' , array('class' => 'img-fluid') );
                            echo '</div>';
                        }
                        ?>
    			
    			<div class="col-md-12" style="padding-top:20px;">
    				<div class="row">
    				<?php
                       if( have_rows('news_images') ):     
                            $count = 1; 
                            while ( have_rows('news_images') ) : the_row(); 
                            ?>
            
            					<div class="col-md-4">
            						<img src="<?php echo the_sub_field('news_image'); ?>" alt= "<?php echo the_sub_field('title'); ?>" class="img-fluid" style="border:1px #ccc solid;" />
            					</div>
    					<?php
    				    	endwhile;
    					endif;
    					?>
    				</div>
    			</div>
    			
    			
    			<div class="col-md-12" style="padding-top:20px;">
    				<p><b>Media Contact:</b>
    					<br/>Mirza Muhammad Asim
    					<br/>Phone: +966 55 7088434
    					<br/>Email: media@sendan.com.sa</p>
    			</div>
    		</div>
    	</div>
    </div>
<?php
endwhile; 
?>
<?php get_footer(); ?>