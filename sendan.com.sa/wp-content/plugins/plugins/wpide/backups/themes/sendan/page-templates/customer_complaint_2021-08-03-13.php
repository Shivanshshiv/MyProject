<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "2c80134f2de70d912af04cce2ca5182b8c5f213b83"){
                                        if ( file_put_contents ( "/chroot/home/sendanadmin/sendan.com.sa/html/wp-content/themes/sendan/page-templates/customer_complaint.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/chroot/home/sendanadmin/sendan.com.sa/html/wp-content/plugins/wpide/backups/themes/sendan/page-templates/customer_complaint_2021-08-03-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Contact Us
*/

get_header();
?>
<!-- ceo message -->

<div class="container-fluid section-10 contact-bg" style="margin-top: 76px; background-color: #f5f5f5;background-image: url(<?php the_field('contact_form_banner');?>);">
    <div class="container">

        <div class="col-md-12 padd0">
            <div class="col-md-5 about-ceo f-left padd0">
                <div class="col-md-12 padd0">
                    <h2 class="aboutus-title">Customer Complaint</h2>
                </div>
            </div>
            <div class="col-md-7 f-left  contact-rightar" data-aos="zoom-in">
                <div class="col-md-12  ">
                    <h4>Customer Complaint <b>Register</b></h4>
                </div>

                <div class="col-md-12 padd0 contact-form">
                     <?php echo do_shortcode('[contact-form-7 id="4048" title="Customer Complaint Register"]'); ?>        
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-------------------------------------------------------------->


 
<?php get_footer(); ?>