<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29891ec0b68f"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/qhse.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/qhse_2019-04-23-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* 
*   Template Name: QHSC 
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
    			
    			<div class="container-fluid all-pages-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <?php the_content() ; ?>
                            </div>
                        </div>    
                        <div class="row">
                        	<?php
                            if( have_rows('quality_management_topics') ):    
                                while ( have_rows('quality_management_topics') ) : the_row(); 
                                ?>		
                            
                                <div class="col-md-4 text-center" style="padding-top:30px;">
                                    <img src="<?php echo the_sub_field('image'); ?>" class="img-fluid" style="border:1px #ccc solid;height:150px;" />
                                    <h6 style="padding-top:20px;"><b><?php echo the_sub_field('title'); ?></b></h6>
                                    <p style="text-align:justify;"><?php echo the_sub_field('descriptions'); ?></p>
                                </div>
                            <?php endwhile;
                			endif;
                			?>
                        </div>    
                            <!--accordion-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>HSE Management </h2>
                                </div>
                            </div>                                
                            
                            <section class="ac-container">
                                <?php
                                if( have_rows('hse_management') ):    
                                    $count = 1 ; 
                                    while ( have_rows('hse_management') ) : the_row(); 
                                    ?>	
                                    
                                <?php $count++;
                                    endwhile;
                                endif;
                                ?>
                            </section>
                        </div>
            
                        <div class="row" style="padding-top:20px;text-align:center;">
                         <?php
                           if( have_rows('gallery') ):     
                               $count =1;
                            while ( have_rows('gallery') ) : the_row(); 
                                ?>                                                   
                             <div class="col-md-3">
                                <!-- Trigger the Modal -->                                 
                            <a href="#" class="pop">
                                <img src="<?php echo  ( the_sub_field('large_image') ) ?>" alt="<?php the_sub_field('title'); ?>"  style="width:100%;max-width:300px">
                            </a>
    
                            </div>
                            <?php endwhile;
                            endif;
                            ?>
                            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">              
                                  <div class="modal-body">
                                  	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
                                  	<span class="sr-only">Close</span></button>
                                    <img src="" class="imagepreview" style="width: 100%;" >
                                    <div class="caption"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>                
                </div>
    			<?php endwhile;
    			endif;
    		?>
    		
    		</div>
    	</div>
    </div>   
 </div>
       



        
   <script>     
    
   jQuery(function() {
		jQuery('.pop').on('click', function() {
			jQuery('.imagepreview').attr('src', jQuery(this).find('img').attr('src'));
			jQuery('.caption').html( jQuery(this).find('img').attr('alt') );
			jQuery('#imagemodal').modal('show');   
		});		
		// Get the <span> element that closes the modal
        

});
</script>
<?php get_footer(); ?>