<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "7982aa54476fd16bcad57507a70666cb17eda3dfe3"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/download-pdf.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/download-pdf_2020-05-21-11.php") )  ) ){
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
         <div class="col-md-8 about-ceo f-left">
            <div class="col-md-12 padd0">
               <h2 class="aboutus-title">Downloads brochure</h2>
            </div>
            <div class="col-md-12 padd0 dw-brochure-text">
               <h4>Seamlessly integrate your organisational processes with a powerful Enterprise ERP Solution</h4>
               <h5>
                  An intelligent and robust Enterprise ERP Solution is now within your reach. The ORION ERP Suite aligns your business segments to work together. Experience true collaboration inter-departmentally and globally.
               </h5>
               <p>What sets the ORION 11j Enterprise ERP Suite apart?</p>
               <ul>
                  <li>Manages every area of your business – sales, finance, inventory, purchase, HR, CRM and more</li>
                  <li>Seamless integration with other enterprise systems</li>
                  <li>Scalable solution for small and medium enterprises</li>
                  <li>Mobile-enabled for ‘anytime, anywhere’ access</li>
                  <li>Available on-premise and is cloud-enabled</li>
                  <li>Gives 360-degree view into business performance</li>
               </ul>
            </div>
         </div>
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