<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f5004aa0767e8"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/contact.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/contact_2020-04-16-09.php") )  ) ){
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
                    <h2 class="aboutus-title">Contact us</h2>
                </div>
            </div>
            <div class="col-md-7 f-left  contact-rightar" data-aos="zoom-in">
                <div class="col-md-12  ">
                    <h4>Your <b>Inquiry</b></h4>
                </div>

                <div class="col-md-12 padd0 contact-form">
                     <?php $cotact_form_shortcode = get_field('contact_form_shortcode'); 
                        echo do_shortcode($cotact_form_shortcode) ; ?>            
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-------------------------------------------------------------->

<div class="container  section-10" data-aos="fade-left">
    <div class="row">
        <div class="col-md-12">
            <h2 class="aboutus-title">Contact us</h2>
        </div>
    </div>

    <div class="col-md-12 project-tab padd0" id="tabs">
        <nav class="tab-bg">
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
             <?php
                    if( have_rows('global_presence') ):
                        $count = 0;     
                        while ( have_rows('global_presence') ) : the_row(); $count++;
                            $country_title = get_sub_field('country_title');
                            $make_slug = str_replace(' ', '-', strtolower($country_title)); 
                        ?>	
                <a class="nav-item nav-link <?php if($count==1) echo 'active' ; ?>" id="nav-<?php echo $make_slug; ?>-tab" data-toggle="tab" href="#nav-<?php echo $make_slug; ?>" role="tab" aria-controls="nav-<?php echo $make_slug; ?>" aria-selected="true"><?php echo $country_title ; ?></a>
                <?php 

                 endwhile;
                	endif;
                	?>
        </nav>
        <div class="tab-content tab-main-box " id="nav-tabContent">
            <!------------------------------------------------------------------------->
            <?php
                if( have_rows('global_presence') ):
                    $count1 = 0;     
                    while ( have_rows('global_presence') ) : the_row(); $count1++;
                        $country_title = get_sub_field('country_title');
                        $make_slug = str_replace(' ', '-', strtolower($country_title)); 
                    ?>	
            <div class="tab-pane fade show <?php if($count1 == 1) echo 'active' ; ?>" id="nav-<?php echo $make_slug; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $make_slug; ?>-tab">
                <div class="col-md-12 padd0">
                   <?php while( have_rows('office_heading') ): the_row(); 
                   ?>
                    <div class="col-md-4  f-left">
                        <div class="col-md-12 main-condetail">
                            <h4><?php the_sub_field('office_title'); ?></h4>
                            <h5><?php the_sub_field('city_title'); ?></h5>
                            <p><i class="fas fa-phone"></i> : <?php the_sub_field('phone_number'); ?></p>
                            <p><i class="fas fa-fax"></i> : <?php the_sub_field('mobile_number'); ?></p>
                            <p><i class="far fa-envelope"></i> : <?php the_sub_field('email_address'); ?></p>
                            <p><i class="fas fa-map-marker-alt"></i>   <?php the_sub_field('address'); ?></p>
                        </div>
                    </div>
                    <?php 

                 endwhile;
                    
?>
                </div>
            </div>

             <?php 

                 endwhile;
                	endif;
                	?> 

        </div>
    </div>
</div>
 
<?php get_footer(); ?>