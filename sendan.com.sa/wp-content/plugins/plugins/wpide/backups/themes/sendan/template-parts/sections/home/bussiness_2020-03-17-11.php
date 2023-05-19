<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50c1dbe19959"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/bussiness.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/bussiness_2020-03-17-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?> <style>
        .inner {
            margin: 0 auto;
            position: relative;
            width: 100%;
        }
        
        .inner h2 {
            height: auto;
            font-size: 2.25rem;
            line-height: 2.875rem;
        }
        
        .inner p {
            line-height: 1.6875rem;
        }
        
        .inner .row-cta {
            padding: 0;
        }
        
        .inner .row-cta a {
            font-size: 16px;
        }
        
        .inner .image-container {
            float: right;
        }
        
        .inner .block.image {
            margin: 0;
            position: relative;
            overflow: hidden;
        }
        
        .ob {
            padding-bottom: 0px !important;
            border-bottom: none !important;
        }
    </style>
    <style>
        /* PROFIL */
        
        .blog .carousel-indicators {
            left: 0;
            top: auto;
            bottom: -40px;
        }
        /* The colour of the indicators */
        
        .blog .carousel-indicators li {
            background: #a3a3a3;
            border-radius: 50%;
            width: 8px;
            height: 8px;
            margin-bottom: 10px;
        }
        
        .our-team .pic {
            display: inline-block;
            width: 250px;
            height: 240px;
            z-index: 1;
            position: relative;
        }
        
        .blog .carousel-indicators .active {
            background: #707070;
            margin-bottom: 10px;
        }
        
        .our-team-section {
            position: relative;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        
        .our-team-section:before {
            position: absolute;
            top: -0;
            left: 0;
            content: " ";
            background: url(img/service-section-bottom.png);
            background-size: 100% 100px;
            width: 100%;
            height: 100px;
            float: left;
            z-index: 99;
        }
        
        .our-team {
            text-align: center;
            overflow: hidden;
            position: relative;
        }
        
        .our-team {
            min-height: 336px;
        }
        
        .our-team:hover .pic:before {
            height: 100%;
            background: #2f2f2f;
        }
        
        .our-team:hover .pic:after {
            background: #7ab92d;
        }
        
        .our-team .pic img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            transform: scale(1);
            transition: all 0.9s ease 0s;
            box-shadow: 0 0 0 14px #f7f5ec;
            transform: scale(0.7);
            position: relative;
            z-index: 2;
        }
        
        .our-team:hover .pic img {
            box-shadow: 0 0 0 14px #f7f5ec;
            transform: scale(0.7);
        }
        
        .our-team .team-content {
            margin-bottom: 30px;
        }
        
        .our-team .title {
            font-size: 22px;
            font-weight: 700;
            color: #4e5052;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin-bottom: 5px;
        }
        
        .our-team .post {
            display: block;
            font-size: 15px;
            color: #4e5052;
            text-transform: capitalize;
        }
        
        .our-team .social {
            width: 100%;
            padding-top: 10px;
            margin: 0;
            background: #2f2f2f;
            position: absolute;
            bottom: -100px;
            left: 0;
            transition: all 0.5s ease 0s;
        }
        
        .our-team .social li {
            display: inline-block;
        }
        
        .our-team .social li a {
            display: block;
            padding-top: 6px;
            font-size: 15px;
            color: #fff;
            transition: all 0.3s ease 0s;
        }
        
        .our-team .social li a:hover {
            color: #2f2f2f;
            background: #f7f5ec;
        }
        
        @media only screen and (max-width: 990px) {
            .our-team {
                margin-bottom: 10px;
            }
        }
        
        .sli {
            width: 100%;
            height: 700px;
        }
    </style>
 <div class="container-fluid our-projects-home">
        <div class="container">

            <h2>OUR BUSINESS</h2>
            <div class="col-md-12" style="padding:0px;">
                <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a class="ob" href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/our_business_img_12.jpg">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Civil Construction</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a class="ob" href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/mechanical_construction_img_2.jpg">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Mechanical Construction</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a class="ob" href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/electrical_instrumentation_construction_img_2.jpg">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Electrical & Instrumentation Construction</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a class="ob" href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/plant_services_img_2.jpg">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Plant Services (Maintenance & Shutdown)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                
                               
                      
                            </div>
                            <!--.row-->
                        </div>
						        <div class="carousel-item active">
                        <div class="row">
						        <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a class="ob" href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/scaffolding-services_img_2.jpg">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Scaffolding Services</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020//bolt.jpg">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Bolt Integrity Solutions</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Electrical Maintenance, Testing & Commissioning Services</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Integrated Turnkey Solution Provider Of (Telecommunication & Automation System)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
						</div>
						</div>
						<div class="carousel-item active">
						<div class="row">
						 <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/construction_services_img_2.jpg">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Construction Services</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/human_resource_services_img_2.jpg">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Human Resource Services</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Warehousing & Material Handling</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/industrial_materials_supply_img_1.jpg">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Industrial Material Supply</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
						</div>
						</div>
                        <!--.item-->
						<div class="carousel-item">
                            <div class="row">
							          <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Technical Services Division</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Valve Repair & Testing Techniques</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Heat Exchanger Repair & Maintenance</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Rotating Equipment & Pump Repair</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
							</div>
							</div>

                        <div class="carousel-item">
                            <div class="row">
							 <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/skid_manufacturing_img_2.jpg">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Skid Manufacturing</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
							<div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Heat Transfer Solutions</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a class="ob" href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Blast Resistant Modules</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a class="ob" href="our-business.html">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/">
                                            </div>
                                            <div class="team-content">
                                                <span class="post">Manufacturing of Temperature Sensors</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                

                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                    </div>
                    <!--.carousel-inner-->
                </div>
                <!--.Carousel-->

            </div>
            <div class="inner">
                <div class="row">
                    <div class="col col-xs-12 col-md-6 image-container">
                        <div class="sabic-loader finished">
                            <div class="sabic-loader-image"></div>
                        </div>

                        <div class="block image">
                            <div class="with-ratio">
                                <img src="http://sendanit.com/sendan_web/wp-content/uploads/2020/dum1.jpg" data-preloadattr="src" data-preloadsrc="img/dum1.jpg" alt="Two" people="" in="" a="" meeting="">
                            </div>
                        </div>
                    </div>
                    <div class="col col-xs-12 col-md-6">
                        <div class="block html">
                            <h2>SUSTAINABILITY</h2>
                            <p>
                                Knowing that the facilities we build and maintain represent the growth of industries and economies we serve inspires our thinking and action. Yet, we strongly believe that for growth to be sustainable, the communities where we operate must continue to thrive. Thus, we are fully committed to promoting sustainable growth through innovative, safe, environment-friendly and socially responsible business practices.
                            </p>
                        </div>
                        <div class="row-cta">
                            <a href="sustainability.html"><span>View more</span></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>