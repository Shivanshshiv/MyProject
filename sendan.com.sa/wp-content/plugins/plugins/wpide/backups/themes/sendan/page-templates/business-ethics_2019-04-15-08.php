<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290ece391d1d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/business-ethics.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/business-ethics_2019-04-15-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* 
*   Template Name: Business Ethics
*/

get_header(); ?>

	<div class="container-fluid all-pages-padding">
	 <div class="container">
	   <div class="row">
	   <?php 
    		if(have_posts()):
    			while ( have_posts() ) :
    				the_post();
    				?>    				
        		  <div class="col-md-10">
            	        <?php the_content(); ?>
            	  </div>
            	  <?php 
            	  if( have_rows('business_ethics') ): 

                	while( have_rows('business_ethics') ): the_row(); 
                	?>
	
        		  <div class="col-md-2 text-center">
            		  <img src="<?php get_sub_field('pdf_image'); ?>" class="img-fluid border-1px" />
            		  <a href="<?php get_sub_field('upload_pdf'); ?>" target="_blank"><img src="<?php get_sub_field('pdf_download_image'); ?>" class="img-fluid" style="margin-top:5px;"/></a>
        		  </div>
        		  	<?php endwhile;
        		 endif;
        		?>
        		  
        		</div>  
        		<?php endwhile;
    		 endif;
    		?>
	 </div>
	</div>
	
	

<?php 
get_footer(); ?>