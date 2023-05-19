<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f5048f2e4301a"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/about-us-new.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/about-us-new_2020-04-15-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/* 
* Template Name: About US New
*/
get_header();
?>

<div class="container  section-10" style=" margin-top: 80px;">
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <h2 class="aboutus-title">About Us</h2>
        </div>
    </div>

    <div class="col-md-12 padd0">

        <div class="col-md-3 f-left padd0 ceoname">
            <img class="img-fluid" src="<?php the_field('ceo_image'); ?>">
            <h4> <?php the_field('ceo_name'); ?></h4>
            <h5><?php the_field('ceo_designation'); ?></h5>

        </div>
        <div class="col-md-9 about-ceo f-left" data-aos="fade-right">
            <h4>Message from CEO</h4>
           <?php the_field('ceo_message'); ?>

            <div class="col-md-12 f-left mainquutto">
                <h2 class="quote-main">
  <img width="40" src="<?php the_field('quotation_image'); ?>">
  <?php the_field('quotation_author'); ?>
</h2>
                <p class="quote-main-2">
                    -- “<?php the_field('quotation_description'); ?>”
                    <br>
                </p>
            </div>

        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-------------------------------------------------------------->

<div class="container-fluid  section-20" data-aos="fade-right">
    <div class="container section-20-b">
        <div class="row">
            <div class="col-md-12">
                <h2 class="aboutus-title">At a Glance</h2>
            </div>
        </div>

        <div id="about-ss" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" style="bottom: -20px;">
                <li data-target="#about-ss" data-slide-to="0" class="active"></li>
                <li data-target="#about-ss" data-slide-to="1" class=""></li>
                <li data-target="#about-ss" data-slide-to="2" class=""></li>
                <li data-target="#about-ss" data-slide-to="3" class=""></li>
            </ol>
            <div class="carousel-inner height-400">
                <div class="carousel-item active">
                    <div class="row ">
                        <div class="col-md-8 f-left text-center">
                            <img class="img-fluid" src="<?php the_field('at_a_glance_image'); ?>">
                             <?php
                                if( have_rows('about_counter') ):
                                    $count = 0;     
                                    while ( have_rows('about_counter') ) : the_row(); $count++;
                                ?>      
                            <div class="col-md-3 col-sm-6 f-left countermainarea-about">
                                <div class="counter-about">
                                    <i styl="display:block" class="<?php echo the_sub_field('counter_icon'); ?> fa-2x"></i>
                                    <span class="timer count-title-about count-number " data-to="<?php echo the_sub_field('count_number'); ?>" data-speed="1500"><?php echo the_sub_field('count_number'); ?></span>
                                    <?php if($count != 1 ) { ?> <span style="font-size: 30px;">+</span> <?php } ?>
                                    <p><?php echo the_sub_field('count_description'); ?></p>
                                </div>
                            </div>
                              <?php endwhile;
                            	endif;
                            	?>
                        </div>
                        <div class="col-md-4 f-left right-headar">
                            <div class="col-md-12 f-left head-offic-ab mt-0">
                                <h4>Headquarters</h4>
                                <ul><?php
                                if( have_rows('headquarters') ):
                                    $count = 0;     
                                    while ( have_rows('headquarters') ) : the_row(); $count++;
                                ?>      
                                    <li><?php echo the_sub_field('headquarters_list'); ?></li>
                                     <?php endwhile;
                            	endif;
                            	?>
                                </ul>
                            </div>
                            <div class="col-md-12 f-left head-offic-ab">
                                <h4>Branch</h4>
                                <ul>
                                    <?php
                                if( have_rows('branch') ):
                                    $count = 0;     
                                    while ( have_rows('branch') ) : the_row(); $count++;
                                ?>    
                                 <li><?php echo the_sub_field('branch_list'); ?></li>
                                     <?php endwhile;
                            	endif;
                            	?>
                                </ul>
                            </div>

                            <div class="col-md-12 f-left head-offic-ab">
                                <h4>Certificate</h4>
                                <ul> <?php
                                    if( have_rows('certificate') ):
                                        $count = 0;     
                                        while ( have_rows('certificate') ) : the_row(); $count++;
                                    ?>    
                                     <li><?php echo the_sub_field('certificate_list'); ?></li>
                                     <?php endwhile;
                            	endif;
                            	?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-md-12 f-left padd0">
                        <h4 style="font-size: 18px; margin-bottom: 30px;">Sectors</h4>
                    </div>
                    <div class="col-md-12 f-left padd0">
                    <?php
                    if( have_rows('sectors_details') ):
                        $count = 0;     
                        while ( have_rows('sectors_details') ) : the_row(); $count++;
                        ?>	
                        <div class="col-md-4 col-6 f-left stctore-list ">
                            <div class="col-md-3 f-left padd0">
                                <img width="60" src="<?php echo the_sub_field('sector_icon'); ?>">
                            </div>
                            <div class="col-md-9 f-left sectore-list">
                                <h4><?php echo the_sub_field('sectors_title'); ?></h4>
                                <p><?php echo the_sub_field('sectors_description'); ?> </p>
                                <a href="<?php echo the_sub_field('sectors_url'); ?>">Read more</a>
                            </div>
                        </div>

                    <?php endwhile;
                    endif;
                    ?>    
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-md-12 f-left padd0">
                        <h4 style="font-size: 18px; margin-bottom: 10px;">Expertise</h4>
                    </div>
                    <div class="col-md-12 f-left padd0">

                        <div class="col-md-12 padd0">
                            <div class="col-md-5 padd0 lefta-sus f-left">
                                <img class="img-fluid" src="<?php the_field('expertise_image'); ?>">
                            </div>
                            <div class="col-md-7  righta-expertise f-left ">
                                          
                                <div class="col-md-6 padd0  righta-expertise-20 f-left ">
                                    <ul>
                                        <?php
                                        if( have_rows('expertise_details_left') ):
                                            $count = 0;     
                                            while ( have_rows('expertise_details_left') ) : the_row(); $count++;
                                            ?>	
                                            
                                            <li><?php echo the_sub_field('expertise_text'); ?></li>
                                            
                                            <?php endwhile;
                                            	endif;
                                            	?>
                                                   
                                    </ul>
                                </div>
                                <div class="col-md-6   righta-expertise-20 f-left p-r-0">
                                    <ul>
                                        <?php
                                        if( have_rows('expertise_details_Right') ):
                                            $count = 0;     
                                            while ( have_rows('expertise_details_Right') ) : the_row(); $count++;
                                            ?>	
                                            
                                            <li><?php echo the_sub_field('expertise_text'); ?></li>
                                            
                                            <?php endwhile;
                                            	endif;
                                            	?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-md-12 f-left padd0">
                        <h4 style="font-size: 18px;">Major Clients</h4>
                    </div>
                    <div class="col-md-12 padd0 major-client">
                        <ul>
                            <?php
                            if( have_rows('major_clients_list') ):
                                $count = 0;     
                                while ( have_rows('major_clients_list') ) : the_row(); $count++;
                                ?>	
                            <li>
                                <a href="#"><img src="<?php echo the_sub_field('major_clients_image'); ?>" /></a>
                            </li>
                           <?php 
                                if($count == 19) break; 
                             endwhile;
                            	endif;
                            	?>
                        </ul>
                        <?php if ($count == 19 ){ ?>
                        <a class="read-more-major-2" href="javascript:void(0)" data-toggle="modal" data-target="#allclient">Read more</a>
                        <?php } ?>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="" id="ourbusiness"></div>
</div>

<!--------------------------------------------------------->

<div class="container-fluid  section-10 history-bg">
    <div class="container section-20-c" data-aos="fade-left">
        <div class="row">
            <div class="col-md-12">
                <h2 class="aboutus-title" style="color: #fff;">History</h2>
            </div>
            <div class="col-md-12 ">
                <div class="tab-content col-md-12 padd0">
                    <div role="tabpanel" class="tab-pane active" id="tab10">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">2019</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>Category upgradation done for Saudi Aramco.</li>
                                            <li>E&I GBS</li>
                                            <li>In-Plant construction works.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab11">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">2018</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>Established Technical Services Division as a part of localization programe.
                                                <br> - Valve Repair & Testing Techniques (EFCO India).
                                                <br> - Heat Exchanger Repair & Maintenance
                                                <br> - Rotating Equipment & Pump Repair

                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab12">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">2017</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>Saudi Aramco GBS
                                                <br> - In-Plant Construction
                                                <br> - Site Preparation & Temporary Facilities
                                            </li>

                                            <li> Skid Manufacturing </li>
                                            <li> Blast Resistant Modules</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab13">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">2015</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>ASME Approvals for U, PP and R Stamp</li>
                                            <li>Saudi Aramco GBS for Mechanical & Maintenance Works. </li>
                                            <li>Established First SENDAN Contracting & Trading Co. WLL in Qatar.</li>
                                            <li>Saudi Aramco (GBS)
                                                <br> - Scaffolding Services, Electrical & Instrumentation Services.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab14">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">2014</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li> Started major Mechanical Construction project as EPC Contractor with Satorp(Remove).</li>
                                            <li>Started Specialized Bolt Tighening Solution with Tentec (Part of the Atlas Copco Group).</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab15">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">2012</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>Started Plant Services business.</li>
                                            <li>Started Mechanical Construction business.</li>
                                            <li>Established Mawad Sendan.</li>
                                            <li>Established presence in Yanbu, Saudi Arabia.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab16">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">2011</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>Completed DUBAI Metro Project as key partner of MITSUBISHI for Electrical and Instrumentation works and Materials Supply.</li>
                                            <li> Started Civil Construction Business.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="tab17">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">2010</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>Established SENDAN Korea.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab18">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">2009</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>Acquired ISO 9001:2008 Certification.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab19">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">2006</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>Opened SENDAN Int'l Free-Zone, UAE.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab20">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">1996</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>Started Human Resource Services Division. Established Trading Division.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab21">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">1995</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>Started Contracting Activities.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab22">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold">1996</h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                        <ul>
                                            <li>SENDAN was established.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-12 f-left padd0">

                    <div id="cmhistory" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-md-12 padd0">
                                    <ul style="margin-bottom: 0px;" class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab10" aria-controls="tab10" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>2019</p>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab11" aria-controls="tab11" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>2018</p>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab12" aria-controls="tab12" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>2017</p>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab13" aria-controls="tab13" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>2015</p>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>2014</p>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab15" aria-controls="tab15" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>2012</p>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab16" aria-controls="tab16" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>2011</p>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab17" aria-controls="tab17" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>2010</p>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab18" aria-controls="tab18" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>2009</p>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab19" aria-controls="tab19" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>2006</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-12 padd0">
                                    <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab20" aria-controls="tab20" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>1996</p>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>1995</p>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab">
                                                <div class="circle-1"></div>
                                                <p>1994</p>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a style="width: 3%;" class="carousel-control-prev" href="#cmhistory" role="button" data-slide="prev">
                            <img class="left-hyicon" width="20" src="image/send-3.png">
                        </a>
                        <a style="width: 3%;" class="carousel-control-next" href="#cmhistory" role="button" data-slide="next">
                            <img class="right-hyicon" width="20" src="image/send-2.png">
                        </a>
                    </div>

                </div>

            </div>

        </div>
        <div class="" id="Project"></div>
    </div>
</div>

<!------------------------------------------------------->

<!--div class="container-fluid  section-20"> 
<div class="container section-20-b"> 
   <div class="row">
   <div class="col-md-12">
    <h2 class="aboutus-title">Organization Structure</h2>  
   </div>
  </div>

 <div class="row">
 <div class="col-md-12">
   <img src="image/Corporate-Organisation.jpg">
 </div>
 </div>
</div>
</div-->

<!------------------------------------------------------>

<div class="container-fluid  section-20">
    <div class="container section-20-b">
        <div class="row">
            <div class="col-md-12 f-left">
                <h2 class="aboutus-title">Corporate Philosophy</h2>
            </div>

            <div class="col-md-12 f-left padd0">
                <div class="col-md-5 f-left padd0">
                    <div class="col-md-12 col-12 f-left stctore-list " style="margin-top: 55px;">
                        <div class="col-md-3 f-left padd0">
                            <img class="missionar" src="image/imhw.jpg">
                        </div>
                        <div class="col-md-9 f-left sectore-list">
                            <h4>Vision</h4>
                            <p>Our vision is to become a world class Engineering, Procurement and Construction (EPC) Contractor in Industrial Construction and Plant Services and a preferred supplier of Construction Materials and Human Resource Services in the GCC region</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 f-left stctore-list ">
                        <div class="col-md-3 f-left padd0">
                            <img class="missionar" src="image/mission-img.jpg">
                        </div>
                        <div class="col-md-9 f-left sectore-list">
                            <h4>Mission</h4>
                            <p>Our mission is to build and maintain industrial plants, infrastructures, and facilities that help propel economic growth and the development of human potentials in the countries where we operate.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 f-left  our-valuear" data-aos="flip-left">
                    <h4 style="font-size: 20px; margin-bottom: 20px; border-bottom: thin solid #f5f5f5;
    padding-bottom: 11px;">Our Value</h4>

                    <div class="col-md-4 f-left  text-center mainvbox">
                        <div class="iconbox-medium">
                            <img width="30" src="image/shield.png">
                        </div>
                        <h4>Safety</h4>
                        <p>We are committed to Zero accident in every task that we do. We believe that strong safety practice is an essential part of our business.</p>
                    </div>
                    <div class="col-md-4 f-left  text-center mainvbox">
                        <div class="iconbox-medium">
                            <img width="30" src="image/reward.png">
                        </div>
                        <h4>Excellence</h4>
                        <p>We give our best in ways that delight our customers and give us pride in our work.</p>
                    </div>
                    <div class="col-md-4 f-left  text-center mainvbox">
                        <div class="iconbox-medium">
                            <img width="30" src="image/support.png">
                        </div>
                        <h4>Teamwork and Commitment</h4>
                        <p>We find greater strength in collaborating as one team to achieve our common goals.</p>
                    </div>
                    <div class="col-md-4 f-left  text-center mainvbox">
                        <div class="iconbox-medium">
                            <img width="30" src="image/union.png">
                        </div>
                        <h4>Integrity</h4>
                        <p>We deliver what we promise; we practice what we say.</p>
                    </div>
                    <div class="col-md-4 f-left  text-center mainvbox">
                        <div class="iconbox-medium">
                            <img width="30" src="image/growth.png">
                        </div>
                        <h4>Learning and Growth</h4>
                        <p>We pursue with passion the development of our people and the continual improvement of our operations.</p>
                    </div>

                    <div class="col-md-4 f-left  text-center mainvbox">
                        <div class="iconbox-medium">
                            <img width="30" src="image/medal.png">
                        </div>
                        <h4>Quality</h4>
                        <p>Quality is everyone's business</p>
                    </div>

                </div>

            </div>
        </div>
        <div class="" id="Project"></div>
    </div>
</div>

<!------------------------------------------------------->

<div class="container  section-10">

    <div class="row">
        <div class="col-md-12">
            <h2 class="aboutus-title">People</h2>
        </div>
    </div>

    <div class="row people-sendan" data-aos="fade-right">
        <div class="col-md-12 tabs">
            <div class="col-xl-3 people-sendan f-left" style="padding-left: 1px; padding-bottom: 1px;">
                <ul class="nav nav-pills nav-stacked flex-column">
                    <li class="active"><a href="#tab_a" data-toggle="pill">Diversity in Action</a></li>
                    <li><a href="#tab_b" data-toggle="pill">Our People Philosophy</a></li>
                    <li><a href="#tab_c" data-toggle="pill">Training and Development</a></li>
                    <!--li><a href="#tab_d" data-toggle="pill">Our People Philosophy</a></li>
      <li><a href="#tab_e" data-toggle="pill">Training and Development</a></li-->
                </ul>
            </div>

            <div class="col-xl-9 f-left right-peoarea">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_a">

                        <!--div class="col-md-12 peohead1">
           <h2>Diversity in Action</h2>
          </div-->
                        <div class="col-md-12 padd0">
                            <div class="col-md-12 f-left padd0 ceoname">
                                <img class="img-fluid" src="image/ban22.jpg">
                            </div>
                            <div class="col-md-12 about-ceo f-left">
                                <div class="col-md-12 f-left mainquutto-peo padd0">
                                    <div class="col-md-1 f-left">
                                        <img width="30" src="image/quote.png">
                                    </div>
                                    <div class="col-md-11 f-left">
                                        <p>
                                            SENDAN has close to <b>4200</b> plus workforce from more than 20 nationalities working together to deliver safe, reliable and quality services to petrochemical and industrial companies in <b>GCC</b>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_b">
                        <div class="col-md-12 padd0">
                            <div class="col-md-12 f-left padd0 ceoname">
                                <img class="img-fluid" src="image/ban23.jpg">
                            </div>
                            <div class="col-md-12 about-ceo f-left">
                                <div class="col-md-12 f-left mainquutto-peo padd0">
                                    <div class="col-md-1 f-left">
                                        <img width="30" src="image/quote.png">
                                    </div>
                                    <div class="col-md-11 f-left">
                                        <p>
                                            Our people reflect who we are as a company. They shape our future. They define our destiny. Thus, we put strong emphasis on hiring and retaining competent people. We believe that as we take care of our people, they will also take care of our business. Yet, we also ensure that those who positively contribute to the growth of our business are the ones who are retained, recognized and rewarded.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="tab_c">
                        <div class="col-md-12 padd0">
                            <div class="col-md-12 f-left padd0 ceoname">
                                <img class="img-fluid" src="image/ban22.jpg">
                            </div>
                            <div class="col-md-12 about-ceo f-left">
                                <div class="col-md-12 f-left mainquutto-peo padd0">
                                    <div class="col-md-1 f-left">
                                        <img width="30" src="image/quote.png">
                                    </div>
                                    <div class="col-md-11 f-left">
                                        <p>
                                            SENDAN actively supports the growth of our employees. At Sendan, we breed technical experts and effective leaders. We provide excellent opportunities for people to develop their technical skills and leadership competencies through challenging assignments, coaching and mentoring, on-the-job training, and other structured training methodologies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid section-20 award-mansec">
    <div class="container ">
        <div class="row">
            <div class="col-md-12" style="padding-left: 22px;">
                <h2 class="aboutus-title">Awards &amp; Achievements</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 project-tab padd0" id="tabs">
                <nav class="tab-bg">
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link show" id="nav-home-tab" data-toggle="tab" href="#nav-Arabia" role="tab" aria-controls="nav-home" aria-selected="false">2019</a>
                        <a class="nav-item nav-link show" id="nav-profile-tab" data-toggle="tab" href="#nav-Emirates" role="tab" aria-controls="nav-profile" aria-selected="false">2018</a>
                        <a class="nav-item nav-link show" id="nav-contact-tab" data-toggle="tab" href="#nav-qatar" role="tab" aria-controls="nav-contact" aria-selected="false">2016-17</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-korea" role="tab" aria-controls="nav-contact" aria-selected="false">2015</a>
                        <a class="nav-item nav-link show" id="nav-contact-tab" data-toggle="tab" href="#nav-india" role="tab" aria-controls="nav-contact" aria-selected="false">2013-14</a>
                        <a class="nav-item nav-link show active" id="nav-contact-tab" data-toggle="tab" href="#nav-india" role="tab" aria-controls="nav-contact" aria-selected="true">2007-12</a>
                    </div>
                </nav>
                <div class="tab-content tab-main-box " id="nav-tabContent" style="background-color: #fff;">
                    <!------------------------------------------------------------------------->

                    <div class="tab-pane fade" id="nav-Arabia" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="col-md-12 ">
                            <div class="col-md-3 f-left">
                                <div class="col-md-12 f-left about-award padd0">
                                    <div class="col-md-12 padd0">
                                        <img class="img-fluid" src="image/award/aw-1.jpg">
                                    </div>
                                    <div class="col-md-12 f-left about-award-2">
                                        <h3> Plaque of Appreciation</h3>
                                        <p>Successful Completion of Project</p>
                                        <h4><b>Client </b>: SABIC - Yansab</h4>
                                        <h5><b>Project</b> : DBN &amp; T/A Project</h5>
                                        <p><b>Date </b>: 31 December, 2018</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 f-left">
                                <div class="col-md-12 f-left about-award padd0">
                                    <div class="col-md-12 padd0">
                                        <img class="img-fluid" src="image/award/aw-1.jpg">
                                    </div>
                                    <div class="col-md-12 f-left about-award-2">
                                        <h3> Plaque of Appreciation</h3>
                                        <p>Successful Completion of Project</p>
                                        <h4><b>Client </b>: SABIC - Yansab</h4>
                                        <h5><b>Project</b> : DBN &amp; T/A Project</h5>
                                        <p><b>Date </b>: 31 December, 2018</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 f-left">
                                <div class="col-md-12 f-left about-award padd0">
                                    <div class="col-md-12 padd0">
                                        <img class="img-fluid" src="image/award/aw-1.jpg">
                                    </div>
                                    <div class="col-md-12 f-left about-award-2">
                                        <h3> Plaque of Appreciation</h3>
                                        <p>Successful Completion of Project</p>
                                        <h4><b>Client </b>: SABIC - Yansab</h4>
                                        <h5><b>Project</b> : DBN &amp; T/A Project</h5>
                                        <p><b>Date </b>: 31 December, 2018</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 f-left">
                                <div class="col-md-12 f-left about-award padd0">
                                    <div class="col-md-12 padd0">
                                        <img class="img-fluid" src="image/award/aw-1.jpg">
                                    </div>
                                    <div class="col-md-12 f-left about-award-2">
                                        <h3> Plaque of Appreciation</h3>
                                        <p>Successful Completion of Project</p>
                                        <h4><b>Client </b>: SABIC - Yansab</h4>
                                        <h5><b>Project</b> : DBN &amp; T/A Project</h5>
                                        <p><b>Date </b>: 31 December, 2018</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!------------------------------------------------------------------------->

                    <div class="tab-pane fade" id="nav-Emirates" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="col-md-12 padd0">

                        </div>
                    </div>

                    <!------------------------------------------------------------------------->

                    <div class="tab-pane fade" id="nav-qatar" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="col-md-12 padd0">

                        </div>
                    </div>

                    <!------------------------------------------------------------------------->

                    <div class="tab-pane fade" id="nav-korea" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="col-md-12 padd0">

                        </div>
                    </div>

                    <!--------------------------------------------------------------------------->

                    <div class="tab-pane fade active show" id="nav-india" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="col-md-12 padd0">

                        </div>
                    </div>

                    <!--------------------------------------------------------------------------->

                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>