<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29d7f8492138"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/industrial-materials-supply.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/industrial-materials-supply_2019-04-19-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Industrial Materials Supply
*/
get_header(); 
?>

<div class="container-fluid all-pages-padding" style="padding-top:0;">
    <div class="container">
       
        	<?php 
        		if(have_posts()):
        			while ( have_posts() ) :
        				the_post();
        				?>
        				 <div class="row">
                             <div class="col-md-12">
                              <?php
                    			if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'full' , array('class' => 'img-fluid border-12px') );
                                }
                              ?>
                              <?php the_content(); ?>
                              </div>
                              
                         </div>
                <?php endwhile;
                endif;
                ?>
                
                <?php
                if( have_rows('extra_content') ):     
                    while ( have_rows('extra_content') ) : the_row(); 
                    ?>    
                        <div class="row" style="padding-top:40px;padding-bottom:20px;border-bottom:1px #ccc solid;">
                            <div class="col-md-2 col-center m-auto cus-testimonial">
                                <img src=" <?php echo  ( the_sub_field('image') ) ?>" class="img-fluid" />
                            </div>
                            <div class="col-md-10">
                                <?php echo  ( the_sub_field('content') ) ?>
                                <br/>
                                <?php if(!empty (get_sub_field('url') ) ) : ?>
                                     <a href=" <?php echo  ( the_sub_field('url') ) ?>" target="_blank"><b>Read More..</b></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
    </div>
</div>
<?php get_footer(); ?>