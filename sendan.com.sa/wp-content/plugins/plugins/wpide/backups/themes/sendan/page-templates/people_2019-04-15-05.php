<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290ece391d1d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/people.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/people_2019-04-15-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: People
*/
get_header();
?>
<div class="container-fluid all-pages-padding" style="padding-top:0;">
	<div class="container">
		<?php
        if( have_rows('people_details') ):     
            while ( have_rows('people_details') ) : the_row(); 
            ?>	
    		<div class="row">
    		
    			<div class="col-md-6" style="padding-bottom:30px;">
    				<h4><?php echo the_sub_field('title'); ?></h4>
    				<p><?php echo the_sub_field('descriptions'); ?></p>
    			</div>
    			
    			<div class="col-md-6" style="padding-bottom:30px;">
    				<img src="<?php echo the_sub_field('image'); ?>" class="img-fluid" style="border:1px #ccc solid;" />
    			</div>
    		</div>
		<?php 
		   endwhile;
	    endif;
		?>
    				
	</div>
</div>
	
<?php get_footer(); ?>