<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0bdae52e11cf3cce78c578ddf3df4d1cc936a93efe"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/download-pdf.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/download-pdf_2020-05-24-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php

/* 
* Template Name: Download Pdf
*/


get_header();

?>


<div class="container-fluid section-10" style="margin-top: 76px; background-color: #fff;">
   <div class="container">
      <div class="col-md-12 padd0">
      <?php 
		if(have_posts()){
			while ( have_posts() ) :
				the_post();
				?>
				
                    <div class="col-md-8 about-ceo f-left">
            <div class="col-md-12 padd0">
               <h2 class="aboutus-title">Downloads brochure</h2>
            </div>
            <div class="col-md-12 padd0 dw-brochure-text">
               <?php the_content() ;?>
            </div>
         </div>
         
                <?php endwhile;
        	   }
                ?>
         <div style="background-color: #f5f5f5;" class="col-md-4 f-left contact-rightar aos-init aos-animate" data-aos="zoom-in">
            <div class="col-md-12">
               <h4>Brochures <b></b></h4>
            </div>
            
            
            <?php echo do_shortcode('[contact-form-7 id="2634" title="download pdf"]'); ?>
            
            
            
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>




<?php get_footer(); ?>