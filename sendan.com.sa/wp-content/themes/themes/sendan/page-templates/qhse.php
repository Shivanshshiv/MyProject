<?php
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
                                    <div>
                                         <input id="ac-<?php echo $count; ?>" name="accordion-1" type="radio" 
                                         <?php echo ( $count == 0 ) ? 'checked=""' : ''; ?>>
                                          <label for="ac-<?php echo $count; ?>"><?php echo the_sub_field('title') ; ?> </label>
                                          <article class="ac-small">
                                            <div class="container">
                                              <div class="row">
                                                <div class="col-md-2 ap">
                                                  <a href="<?php echo the_sub_field('image') ; ?> " target="_blank"><img src="<?php echo the_sub_field('image') ; ?> " alt="HSC" class="img-fluid"></a>
                                                   </div>
                                                <div class="col-md-10 ap">
                                                <?php echo the_sub_field('descriptions') ; ?>
                                                  </div>
                                              </div>
                                              
                                            </div>
                                          </article>
                                    </div>
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
                            
                            <div class="modal" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                <img src="" class="modal-content" style="width: 100%;" >
                                <div class="caption"></div>
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
			jQuery('.modal-content').attr('src', jQuery(this).find('img').attr('src'));
			jQuery('.caption').html( jQuery(this).find('img').attr('alt') );
			jQuery('#imagemodal').modal('show');   
		});		
		// Get the <span> element that closes the modal
        

});
</script>
<?php get_footer(); ?>