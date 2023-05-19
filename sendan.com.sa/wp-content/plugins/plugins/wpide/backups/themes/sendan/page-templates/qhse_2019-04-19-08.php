<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29d7f8492138"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/qhse.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/qhse_2019-04-19-08.php") )  ) ){
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
                                    <div>
                                        <input id="ac-<?php echo $count; ?>" name="accordion-1" type="radio"  <?php echo ($count == 1 ) ? 'checked=""' : '' ?>>
                                        <label for="ac-<?php echo $count; ?>"><?php echo the_sub_field('title') ; ?></label>
                                        <article class="ac-small">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-2 ap">
                                                        <a href="<?php echo the_sub_field('image'); ?>" target="_blank">
                                                            <img src="<?php echo the_sub_field('image'); ?>" alt="<?php echo the_sub_field('title'); ?>" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="col-md-10 ap">
                                                        <?php echo the_sub_field('descriptions'); ?>
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
                                <!-- Trigger the Modal -->
                                <img id="myImg6" src="img/QHSE_001-211x300-big-img.jpg" alt="Sendan International Company Ltd." style="width:100%;max-width:300px">
                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <!-- The Close Button -->
                                    <span class="close">×</span>                
                                    <!-- Modal Content (The Image) -->
                                    <img class="modal-content" id="img07">                
                                    <!-- Modal Caption (Image Text) -->
                                    <div id="caption"></div>
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
<?php get_footer(); ?>