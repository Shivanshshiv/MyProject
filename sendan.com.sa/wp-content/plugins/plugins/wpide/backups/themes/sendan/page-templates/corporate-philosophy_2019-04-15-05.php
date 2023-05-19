<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290ece391d1d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/corporate-philosophy.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/corporate-philosophy_2019-04-15-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Corporate Philosophy
*/
get_header();
?>
	<div class="container-fluid all-pages-padding" style="padding-top:0;">
	 <div class="container">
	   <div class="row">
	        <?php
               if( have_rows('corporate_philosophy_green_box') ):     
                while ( have_rows('corporate_philosophy_green_box') ) : the_row(); 
                    ?>
                    <div class="col-md-6" style="padding-bottom:30px;">
                		   <div style="background:#005825;padding:15px;color:#fff;"><h2><?php echo the_sub_field('title'); ?></h2>
                		   <p><?php echo the_sub_field('descriptions'); ?></p></div>
                	</div>
                <?php endwhile;
                endif;
             ?>
		 
		 <div class="row">
    		  <div class="col-md-12" style="padding-bottom:30px;">
    		     <h2><b style="color:#005825;">OUR VALUES</b></h2>
    		  </div>
		 </div>
		 
		 <div class="row">	  
		  <?php
           if( have_rows('our_value_content') ):     
            while ( have_rows('our_value_content') ) : the_row(); 
                ?>
    		  <div class="col-md-4" style="padding-bottom:30px;">
    		    <h5><b style="color:#005825;"><?php echo the_sub_field('title'); ?></b></h5>
    		    <p><?php echo the_sub_field('descriptions'); ?></p>
    		  </div>
	   <?php endwhile;
            endif;
         ?>
		 </div>
	 </div>
	</div>
	
	<?php get_footer(); ?>