<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f504e11184901"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/contact.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/contact_2020-04-16-05.php") )  ) ){
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

<div class="container-fluid section-10 contact-bg" style="margin-top: 76px; background-color: #f5f5f5;">
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
                    <div class="col-md-12 f-left padd0">
                        <div class="col-md-6 f-left ">
                            <select class="form-control cust-select">
                                <option>Skid Manufacturing </option>
                                <option>Heat Transfer Solutions</option>
                                <option>Integrated Turnkey Solution Provider Of Telecommunication & Automation System</option>
                                <option>Bolt Integrity Solutions</option>
                                <option>Blast Resistant Modules</option>
                                <option>Electrical Maintenance, Testing & Commissioning Services</option>
                                <option>Civil Construction</option>
                                <option>Mechanical Construction</option>
                                <option>Electrical & Instrumentation Construction</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 f-left ">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-6 f-left ">
                        <input type="text" class="form-control" placeholder="Company">
                    </div>
                    <div class="col-md-6 f-left padd0">
                        <div class="col-auto">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend" style="height: 42px;">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" placeholder="E-Mail Id">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 f-left ">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="col-md-12 f-left ">
                        <textarea style="margin-bottom: 0px;" rows="4" placeholder="Message" class="cus-textarea form-control"></textarea>
                        <span class="f-right">250</span>
                    </div>

                    <div class="text-right col-md-12 f-left" style="margin-top: 20px;">
                        <input type="submit" value="Submit" class="contact-submit">
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
                    $count = 0;     
                    while ( have_rows('global_presence') ) : the_row(); $count++;
                        $country_title = get_sub_field('country_title');
                        $make_slug = str_replace(' ', '-', strtolower($country_title)); 
                    ?>	
            <div class="tab-pane fade show active" id="nav-<?php echo $make_slug; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $make_slug; ?>-tab">
                <div class="col-md-12 padd0">
                   <?php while( have_rows('office_heading') ): the_row(); 
                   ?>
                    <div class="col-md-4  f-left">
                        <div class="col-md-12 main-condetail">
                            <h4><?php get_sub_field('office_title'); ?></h4>
                            <h5><?php get_sub_field('city_title'); ?></h5>
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

<!----------------------location--------------------------->

<div class="container-fluid Location-home-1">
    <div class="row inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="aboutus-title" style="margin: 0 0 14px;">Location</h2>
                    <p>Our offices and branches throughout the region</p>
                </div>
            </div>

            <div class="col-md-12 padd0 f-left">
                <div class="col-md-3 head-bbaddress padd0 f-left">
                    <h4>Headquarters</h4>
                    <p>Saudi Arabia</p>
                </div>

                <div class="col-md-3 head-bbaddress padd0 f-left ">

                    <div class="lo-head-quarters">
                        <a href="#" data-tooltip="P. O. Box 11049, Tareeq 114 Jubail Industrial City 31961,
Kingdom of Saudi Araia">
                            <img src="image/map-20.png">
                        </a>
                    </div>

                    <div class="lo-yanbu-Office">
                        <a href="#" data-tooltip="Madinat Yanbu Industrial. Qadeem Jeddah Road,
Near ARAMCO Bridge – Exit 10-A, Yanbu Kingdom of Saudi Araia">
                            <img src="image/map-20.png">
                        </a>
                    </div>

                    <div class="lo-al-khobar">
                        <a href="#" data-tooltip="P. O. Box 79392, Al-Mosa Industrial Areaa,
South Thuqbah, Al-Khobar 31952, Kingdom of Saudi Araia">
                            <img src="image/map-20.png">
                        </a>
                    </div>
                    <div class="lo-al-khobar-2">
                        <a href="#" data-tooltip="P.O. Box 2569, 1st Floor Kanoo Airline Center,
Al Khobar 31952, Kingdom of Saudi Arabia">
                            <img src="image/map-20.png">
                        </a>
                    </div>
                    <div class="lo-dammam">
                        <a href="#" data-tooltip="2nd Floor, Al Shuwayer Commercial Building,
Al Tubayshi, 32233, Dammam, Kingdom of Saudi Araia">
                            <img src="image/map-20.png">
                        </a>
                    </div>
                    <div class="lo-dubaimain">
                        <a href="#" data-tooltip="P. O. Box 18240, Jabel Ali Free Zone,
JAFZA View18, LB180402, Dubai, United Arab Emirates">
                            <img src="image/map-20.png">
                        </a>
                    </div>

                    <div class="lo-doha">
                        <a href="#" data-tooltip="Hameedco Building # 56, Al Hiteen Street,
Al Muntazah, Doha, State of Qatar.">
                            <img src="image/map-20.png">
                        </a>
                    </div>

                </div>

                <div class="col-md-3 head-bbaddress padd0 f-left ">

                    <div class="lo-mumbay">
                        <a href="#" data-tooltip="316, Building # 02, Sector 03, Millennium Business Park,
Mahape, Navi Mumbai  400710, India.">
                            <img src="image/map-20.png">
                        </a>
                    </div>

                    <div class="lo-noida">
                        <a href="#" data-tooltip="2nd Floor, B-3, Sector 6, Noida, Uttar Pradesh 201301">
                            <img src="image/map-20.png">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 head-bbaddress padd0 f-left">
                    <div class="lo-seoul-korea">
                        <a href="#" data-tooltip="205 Youngchun Building,
227 Bangbaero, Seochogu, Seoul, Korea.">
                            <img src="image/map-20.png">
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-12 mainhh-branch padd0 f-left">
                <h4>Branches & subsidiaries</h4>
            </div>

            <div class="col-md-3 all-bbaddress padd0 f-left">
                <!--p>Arabian Construction Company</p-->
                <h4>Yanbu, Saudi Arabia</h4>
            </div>

            <div class="col-md-3 all-bbaddress padd0 f-left">
                <h4>Dubai, United Arab Emirates</h4>
            </div>

            <div class="col-md-3 all-bbaddress padd0 f-left">
                <h4>Dubai Freezone</h4>
            </div>

            <div class="col-md-3 all-bbaddress padd0 f-left">
                <h4>Abu Dhabi, United Arab Emirates</h4>
            </div>

            <div class="col-md-3 all-bbaddress padd0 f-left">
                <h4>Doha, Qatar</h4>
            </div>
            <div class="col-md-3 all-bbaddress padd0 f-left">
                <h4>Seoul, Korea</h4>
            </div>
            <div class="col-md-3 all-bbaddress padd0 f-left">
                <h4>India</h4>
            </div>

        </div>
    </div>
</div>
 
 
<?php get_footer(); ?>