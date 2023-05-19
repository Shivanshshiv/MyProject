<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e297ec9de31bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/home-templates.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/home-templates_2019-04-12-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Home Page
*/

get_header();
?>
       
        
        
        <div class="container-fluid cus-countdown">
            <div class="row text-center">
                <div class="col-md-2 col-xs-2"></div>
                <div class="col-md-2 col-sm-2">
                    <div class="counter"> <i class="fa fa-building fa-2x"></i>
                        <h2 class="timer count-title" data-to="1994" data-speed="1500">1994</h2>
                        <p class="count-text ">FOUNDED</p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2">
                    <div class="counter"> <i class="fa fa-file fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="178" data-speed="1500"></h2>
                        <p class="count-text ">PROJECTS</p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2">
                    <div class="counter"> <i class="fa fa-users fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="4294" data-speed="1500"></h2>
                        <p class="count-text ">EMPLOYEE</p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2">
                    <a href="contact.html" style="color:#fff;">
                        <div class="counter"> <i class="fa fa-globe fa-2x"></i>
                            <h2 class="timer count-title count-number" data-to="15" data-speed="1500"></h2>
                            <p class="count-text ">GLOBAL PRESENCE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-xs-2"></div>
            </div>
        </div>
    </div>
    <!-- about -->
    
     <?php  get_template_part( 'template-parts/sections/home/about'); ?>  
   

    <!-- our projects -->
    <div class="container-fluid our-projects-home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Projects</h2>
                    <p class="main-p">Sendan diversified its business portfolio in 2010 to include construction company. Within a short period it has given 20 years of experience in managing construction projects. Sendan has successfully completed number of civil contracts in various projects fulfilling stringent deadlines and specifications of our clients like Sabic and Sadara.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 text-right" style="padding:0;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/complete.jpg" class="img-fluid" /> <a href="our-project.html">Our All Projects</a> 
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 text-left" style="padding:0;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/ongoing.jpg" class="img-fluid" /> <a href="major-projects.html">Our Major Projects</a> 
            </div>
        </div>
    </div>
    <!-- large pic gallery -->
    <div class="container-fluid" style="padding:0;">
        <div id="demolargeimage" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demolargeimage" data-slide-to="0" class="active"></li>
                <li data-target="#demolargeimage" data-slide-to="1"></li>
                <li data-target="#demolargeimage" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/img_1.jpg" alt="" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/img_2.jpg" alt="" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/img_3.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demolargeimage" data-slide="prev"> <span class="carousel-control-prev-icon"></span> 
            </a>
            <a class="carousel-control-next" href="#demolargeimage" data-slide="next"> <span class="carousel-control-next-icon"></span> 
            </a>
        </div>
    </div>
    <!-- our gallery -->
    <div class="container-fluid filter-gallery-home">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>All Projects</h2>
                <p class="main-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div style="text-align:center;width:100%;padding-top:30px;padding-bottom:20px;">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="mining_minerals">Mining & Minerals</button>
                <button class="btn btn-default filter-button" data-filter="oil_gas">Oil & Gas</button>
                <button class="btn btn-default filter-button" data-filter="petrochemicals">Petrochemicals</button>
                <button class="btn btn-default filter-button" data-filter="power">Power</button>
                <button class="btn btn-default filter-button" data-filter="steel">Steel</button>
                <button class="btn btn-default filter-button" data-filter="transportation">Transportation</button>
            </div>
            <div class="container-fluid" style="background:#272727;padding:40px 40px 10px 40px;">
                <div class="row">
                    <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter mining_minerals">
                        <div class="project-container">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/our_business/16-Sadara-Aromatics-4.jpg" class="img-fluid  project-image">
                            <div class="project-overlay">
                                <div class="project-text">Retrofit The Dehydrator Vessel At SHGOSP-5 With DFD System <a href="#" data-toggle="modal" data-target="#myModal">Read More..</a> 
                                </div>
                            </div>
                        </div>
                        <h3>Saudi Aramco</h3>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-users" aria-hidden="true"></i> Saudi Aramco</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/our_project_img_1.jpg" class="">
                                    <p>Retrofit The Dehydrator Vessel At SHGOSP-5 With DFD System</p>
                                    <div class="project-details">
                                        <div>Client :</div>
                                        <div>Saudi Aramco</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Prime Contractor :</div>
                                        <div>Saudi Aramco</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Disciplines :</div>
                                        <div>Retrofit The Dehydrator Vessel At SHGOSP-5 With DFD System</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Location :</div>
                                        <div>Shedgum, GOSP-5, KSA</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Completion :</div>
                                        <div>May, 2018</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Scope of Work :</div>
                                        <div>Its includes demolition of Internal Headers, Distributors, Grids, Transformers and Bushings (for both D-211 and D-212). Installation of Vessel Components (Oil Headers, Effluent Water Collector-D-211, Interface draw-off collectors, hangers and support framers, Electrodes, Dual Frequency (DF) Power Units, High Voltage Bushings and Electrode Assemblies, DFD LRC II Control Panel (Control room and interface with DCS & ESD), new nozzles, 480V Power Supply units, level Transmitters).</div>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter oil_gas">
                        <div class="project-container">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/our_business/Mechanical-51.jpg" class="img-fluid  project-image">
                            <div class="project-overlay">
                                <div class="project-text">Long Term Blanket Contract For Execution Of Small & Medium Scale Multi Disciplined Projects <a href="#" data-toggle="modal" data-target="#myModal2">Read More..</a> 
                                </div>
                            </div>
                        </div>
                        <h3>Ma'aden Phosphate</h3>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-users" aria-hidden="true"></i> Ma'aden Phosphate</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/our_project_img_2.jpg" class="">
                                    <p>Long Term Blanket Contract For Execution Of Small & Medium Scale Multi Disciplined Projects</p>
                                    <div class="project-details">
                                        <div>Client :</div>
                                        <div>Ma'aden Phosphate</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Prime Contractor :</div>
                                        <div>Ma'aden Phosphate</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Disciplines :</div>
                                        <div>Long Term Blanket Contract For Execution Of Small & Medium Scale Multi Disciplined Projects</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Location :</div>
                                        <div>Ras Al-Khair, KSA</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Completion :</div>
                                        <div>February, 2021</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Scope of Work :</div>
                                        <div>Engineering, Procurement, Construction, Modification, Repair, Pre-Commissioning and Commissioning of multi discipline project of Civil, Structure, Mechanical, Piping, Electrical and Instrumentation.</div>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter oil_gas">
                        <div class="project-container">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/our_business/Mechanical-51.jpg" class="img-fluid  project-image">
                            <div class="project-overlay">
                                <div class="project-text">Retrofit The Dehydrator Vessel D-211 At HwGOSP-4 With Dual Frequency Desalting (DFD) System <a href="#" data-toggle="modal" data-target="#myModal3">Read More..</a> 
                                </div>
                            </div>
                        </div>
                        <h3>Saudi Aramco</h3>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal3" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-users" aria-hidden="true"></i> Saudi Aramco</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/our_project_img_1.jpg" class="">
                                    <p>Retrofit The Dehydrator Vessel D-211 At HwGOSP-4 With Dual Frequency Desalting (DFD) System</p>
                                    <div class="project-details">
                                        <div>Client :</div>
                                        <div>Saudi Aramco</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Prime Contractor :</div>
                                        <div>Saudi Aramco</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Disciplines :</div>
                                        <div>Retrofit The Dehydrator Vessel D-211 At HwGOSP-4 With Dual Frequency Desalting (DFD) System</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Location :</div>
                                        <div>Hawaiya, GOSP-4, KSA</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Completion :</div>
                                        <div>February, 2021</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Scope of Work :</div>
                                        <div>Demolition work for electrical cathode. New work for electrical cathode protection. Demolition work for instrumentation scope. New work for instrumentation scope Demolition work for piping scope. New work for piping scope. Demolition work for civil /structure scope. New work for civil /structure. Demolition work for Mechanical scope. New work for Mechanical scope excluding Vessel shell internal blasting & coating. Blasting & Coating.</div>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter oil_gas">
                        <div class="project-container">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/our_business/Mechanical-51.jpg" class="img-fluid  project-image">
                            <div class="project-overlay">
                                <div class="project-text">Torqueing For GT-2 T&I At Hawiyah Gas Plant <a href="#" data-toggle="modal" data-target="#myModal4">Read More..</a> 
                                </div>
                            </div>
                        </div>
                        <h3>Saudi Aramco, Hawiyah Gas Plant</h3>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal4" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-users" aria-hidden="true"></i> Saudi Aramco, Hawiyah Gas Plant</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/our_project_img_1.jpg" class="">
                                    <p>Torqueing For GT-2 T&I At Hawiyah Gas Plant</p>
                                    <div class="project-details">
                                        <div>Client :</div>
                                        <div>Saudi Aramco, Hawiyah Gas Plant</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Prime Contractor :</div>
                                        <div>Saudi Aramco, Hawiyah Gas Plant</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Disciplines :</div>
                                        <div>Torqueing For GT-2 T&I At Hawiyah Gas Plant</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Location :</div>
                                        <div>Hawiyah, KSA</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Completion :</div>
                                        <div>May, 2018</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Scope of Work :</div>
                                        <div>Provision of Torqueing crews for Hydraulic services at Hawiyah Gas plant on a 12Hr shift. Hydraulic torqueing and opening shall be performed at H48 at GT#2 during T&I.</div>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter petrochemicals">
                        <div class="project-container">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/our_business/Mechanical-51.jpg" class="img-fluid  project-image">
                            <div class="project-overlay">
                                <div class="project-text">Retrofit Dehydrator Vessel With DFD D HwGOSP-3 <a href="#" data-toggle="modal" data-target="#myModal5">Read More..</a> 
                                </div>
                            </div>
                        </div>
                        <h3>Saudi Aramco</h3>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal5" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-users" aria-hidden="true"></i> Saudi Aramco</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/our_project_img_1.jpg" class="">
                                    <p>Retrofit Dehydrator Vessel With DFD D HwGOSP-3</p>
                                    <div class="project-details">
                                        <div>Client :</div>
                                        <div>Saudi Aramco</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Prime Contractor :</div>
                                        <div>Saudi Aramco</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Disciplines :</div>
                                        <div>Retrofit Dehydrator Vessel With DFD D HwGOSP-3</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Location :</div>
                                        <div>Hawaiya, GOSP-3, KSA</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Completion :</div>
                                        <div>November, 2017</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Scope of Work :</div>
                                        <div>Demolition work for electrical cathode. New work for electrical cathode prote. Demolition work for instrumentation scope. New work for instrumentation scop Demolition work for piping scope. New work for piping scope. Demolition work for civil /structure scope. New work for civil /structure. Demolition work for Mechanical scope. New work for Mechanical scope excluding Vessel shell internal blasting & coating.</div>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter petrochemicals">
                        <div class="project-container">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/our_business/Mechanical-51.jpg" class="img-fluid  project-image">
                            <div class="project-overlay">
                                <div class="project-text">Mechanical, Piping & Steel Structure Construction Works package For YANSAB EG DBN Project <a href="#" data-toggle="modal" data-target="#myModal6">Read More..</a> 
                                </div>
                            </div>
                        </div>
                        <h3>SABIC / YANSAB</h3>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal6" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-users" aria-hidden="true"></i> SABIC / YANSAB</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/our_project_img_3.jpg" class="">
                                    <p>Mechanical, Piping & Steel Structure Construction Works package For YANSAB EG DBN Project</p>
                                    <div class="project-details">
                                        <div>Client :</div>
                                        <div>SABIC / YANSAB</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Prime Contractor :</div>
                                        <div>eTEC Arabia</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Disciplines :</div>
                                        <div>Mechanical, Piping & Steel Structure Construction Works package For YANSAB EG DBN Project</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Location :</div>
                                        <div>Yanbu, KSA</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Completion :</div>
                                        <div>December, 2018</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Scope of Work :</div>
                                        <div>The scope of work includes Mechanical and Piping works as under. Support for Heavy lifting contractor, Installation of new equipment, Demolition and re-installation of equipment, Installation of rotating equipment, Installation of static equipment, Installation of steel structure, Installation of internals, Catalyst filling, Chanel covers replacement for heat exchangers. Equipment cleaning during TA, Repair and modification activities, Grouting Works, Fire proofing, Touch up paint, Insulation for equipment, Pre commissioning. Pipe fabrication works. Piping erection works, FRP pipe erection, Valve and inline instrument installation, NDT and hydro testing, Pipe supports supply, prefabrication and erection, Special support installation, Grouting works, Painting, Tie-ins, Insulation works, Chemical cleaning, Pre commissioning</div>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter oil_gas">
                        <div class="project-container">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/our_business/Mechanical-51.jpg" class="img-fluid  project-image">
                            <div class="project-overlay">
                                <div class="project-text">801 MOV 103B Cold Cutting & Welding During SD2018 At SHARQ <a href="#" data-toggle="modal" data-target="#myModal7">Read More..</a> 
                                </div>
                            </div>
                        </div>
                        <h3>SABIC / SHARQ</h3>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal7" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-users" aria-hidden="true"></i> SABIC / SHARQ</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/our_project_img_4.jpg" class="">
                                    <p>801 MOV 103B Cold Cutting & Welding During SD2018 At SHARQ</p>
                                    <div class="project-details">
                                        <div>Client :</div>
                                        <div>SABIC / SHARQ</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Prime Contractor :</div>
                                        <div>SABIC / SHARQ</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Disciplines :</div>
                                        <div>801 MOV 103B Cold Cutting & Welding During SD2018 At SHARQ</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Location :</div>
                                        <div>Jubail, KSA</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Completion :</div>
                                        <div>March, 2018</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Scope of Work :</div>
                                        <div>The scope of work includes the Pre fabrication of temporary support, removal of structure, cold cutting of 2 joints for 10" MOV and remove the valve, installation and welding of valve after valve repair.</div>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter oil_gas">
                        <div class="project-container">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/our_business/Mechanical-51.jpg" class="img-fluid  project-image">
                            <div class="project-overlay">
                                <div class="project-text">Bolt Torque For Khuff Gas Shut Down <a href="#" data-toggle="modal" data-target="#myModal8">Read More..</a> 
                                </div>
                            </div>
                        </div>
                        <h3>Saudi Aramco / Uthmaniya Gas Plant</h3>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal8" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-users" aria-hidden="true"></i> Saudi Aramco / Uthmaniya Gas Plant</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/our_project_img_1.jpg" class="">
                                    <p>Bolt Torque For Khuff Gas Shut Down</p>
                                    <div class="project-details">
                                        <div>Client :</div>
                                        <div>Saudi Aramco / Uthmaniya Gas Plant</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Prime Contractor :</div>
                                        <div>Saudi Aramco / Uthmaniya Gas Plant</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Disciplines :</div>
                                        <div>Bolt Torque For Khuff Gas Shut Down</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Location :</div>
                                        <div>Uthmaniya, KSA</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Completion :</div>
                                        <div>January, 2018</div>
                                    </div>
                                    <div class="project-details">
                                        <div>Scope of Work :</div>
                                        <div>Provision of Hydraulic bolt tightening (torque machine) to loosen and tighten the bolts at Inlet Area during shut down.</div>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our Sustainability -->
    <div class="container-fluid our-sustainability-home" style="padding:0;">
        <div id="demo1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators" style="margin-bottom:-40px;">
                <li data-target="#demo1" data-slide-to="0" class="active"></li>
                <li data-target="#demo1" data-slide-to="1"></li>
            </ul>
            <!-- The slideshow -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Our Blogs</h2>
                        <p class="main-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                </div>
                <div class="carousel-inner" style="padding-top:50px;">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 col-">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/saudi_office_small_img.jpg" class="img-fluid" />
                                <h5>Sendan Received Appreciation Email from Sadaf President</h5>
                                <p>On December 3, 2014, Sendan received an appreciation email from SADAF President, Zahrani A Mohammed for the successful completion of the Recovered Water Line project. The mechanical project was safely completed ahead of schedule on 23rd Nov. 2014.</p> <a href="http://sendan-international.blogspot.com/" target="_blank">Read More</a> 
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/saudi_office_small_img.jpg" class="img-fluid" />
                                <h5>Sadara Isocyanates Project Team Wins Two Awards</h5>
                                <p>The project team of Sadara Isocyanates is in high spirits after receiving twin awards from Daelim and Sadara Management. In a ceremony organized by Daelim last November 13, 2014, Sendan was presented with Best Contractor of the Month...</p> <a href="http://sendan-international.blogspot.com/" target="_blank">Read More</a> 
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/saudi_office_small_img.jpg" class="img-fluid" />
                                <h5>Sendan PSD Turn Around Team Appreciated by Petrokemya</h5>
                                <p>While the winter season starts to cool off Saudi Arabia, things continue to get heated up in Sendan. A warm front carrying flurry of achievements hovered around Sendan over the last few days. In another solid display of its execution prowess,</p> <a href="http://sendan-international.blogspot.com/" target="_blank">Read More</a> 
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 col-">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/saudi_office_small_img.jpg" class="img-fluid" />
                                <h5>Sendan Received Appreciation Email from Sadaf President</h5>
                                <p>On December 3, 2014, Sendan received an appreciation email from SADAF President, Zahrani A Mohammed for the successful completion of the Recovered Water Line project. The mechanical project was safely completed ahead of schedule on 23rd Nov. 2014.</p> <a href="http://sendan-international.blogspot.com/" target="_blank">Read More</a> 
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/saudi_office_small_img.jpg" class="img-fluid" />
                                <h5>Sadara Isocyanates Project Team Wins Two Awards</h5>
                                <p>The project team of Sadara Isocyanates is in high spirits after receiving twin awards from Daelim and Sadara Management. In a ceremony organized by Daelim last November 13, 2014, Sendan was presented with Best Contractor of the Month...</p> <a href="http://sendan-international.blogspot.com/" target="_blank">Read More</a> 
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/saudi_office_small_img.jpg" class="img-fluid" />
                                <h5>Sendan PSD Turn Around Team Appreciated by Petrokemya</h5>
                                <p>While the winter season starts to cool off Saudi Arabia, things continue to get heated up in Sendan. A warm front carrying flurry of achievements hovered around Sendan over the last few days. In another solid display of its execution prowess,</p> <a href="http://sendan-international.blogspot.com/" target="_blank">Read More</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left and right controls 
      <a class="carousel-control-prev" href="#demo1" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo1" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>-->
        </div>
    </div>
   
   <?php get_footer(); ?>