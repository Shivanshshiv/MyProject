<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50e8986733bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/career.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/career_2020-04-23-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* Template Name: Career
*/
get_header();
?>


<!-- ceo message -->

<div class="container-fluid  section-10 career-join" style=" margin-top: 76px;  background-color: #f5f5f5;background-image: url(<?php the_field('jog_background_image') ?>);">
    <div class="container">
        <div class="row">

        </div>

        <div class="col-md-12 padd0">
            <div class="col-md-5 about-ceo f-left padd0">
                <div class="col-md-12 padd0">
                    <h2 class="aboutus-title"><?php the_titele(); ?></h2>
                </div>
            </div>

            <div class="col-md-7 f-left  jointext-car" data-aos="fade-right">
                <h4><?php the_field('jog_title'); ?></h4>
                <?php the_field('jog_content'); ?>
            </div>

        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-------------------------------------------------------------->

<div class="container  section-10" data-aos="fade-left">
    <div class="row">
        <div class="col-md-12">
            <h2 class="aboutus-title">Your Growth at Sendan</h2>
        </div>
    </div>

    <div class="col-md-5 f-left padd0">
        <div id="career-20" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#career-20" data-slide-to="0" class="active"></li>
                <li data-target="#career-20" data-slide-to="1" class=""></li>
                <li data-target="#career-20" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner height-200">
                <div class="carousel-item active">
                    <img style="width: 100%;" src="image/ca-20.jpg">
                </div>
                <div class="carousel-item">
                    <img style="width: 100%;" src="image/ca-20.jpg">
                </div>
                <div class="carousel-item">
                    <img style="width: 100%;" src="image/ca-20.jpg">
                </div>
            </div>

            <a style="margin-left: -34px; height: 242px; display: none;" class="carousel-control-prev" href="#career-20" role="button" data-slide="prev">
                <div class="cus-pre">
                    <img width="10" src="image/left.png">
                </div>
            </a>
            <a style=" height: 242px;   margin-right: -34px; display: none;" class="carousel-control-next" href="#career-20" role="button" data-slide="next">
                <div class="cus-pre">
                    <img width="10" src="image/right.png">
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-7  working-text f-left">
        <p>Working at Sendan is not only about facing your daily routines and challenges. We take a long view when we hire people. We provide them with ample opportunities for training and career growth. Stories abound regarding employees who have managed to grow their career at Sendan. You, too, can create your own success story by taking on the challenges and opportunities we provide.
        </p>
    </div>
</div>

<!---------------------------------------------------------->

<div class="container-fluid  section-20 team-join">
    <div class="container section-20-career" data-aos="fade-right">
        <div class="row">
            <div class="col-md-12 f-left">
                <h2 class="aboutus-title">Meet Our People</h2>
                <p>Working at Sendan is not only about facing your daily routines and challenges. We take a long view when we hire people. We provide them with ample opportunities for training and career growth. Stories abound regarding employees who have managed to grow their career at Sendan. You, too, can create your own success story by taking on the challenges and opportunities we provide.</p>
            </div>

            <div class="col-md-12 f-left padd0 mt-20">
                <div id="team10" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner height-200">
                        <div class="carousel-item active">
                            <div class="col-md-12 padd0">
                                <div class="col-md-3 f-left">
                                    <div class="single-team">
                                        <img src="image/team/team.jpg" alt="">
                                        <div class="team-hover">
                                            <h4>Ajay Misra <span>ERP Manager </span></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; India</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 f-left">
                                    <div class="single-team">
                                        <img src="image/team/team0.jpg" alt="">
                                        <div class="team-hover">
                                            <h4>Gopi Shukla <span>Assistant Manager</span></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; India</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 f-left">
                                    <div class="single-team">
                                        <img src="image/team/team0-1.jpg" alt="">
                                        <div class="team-hover">
                                            <h4>Abbas Ahmad <span>Oracle Consultant</span></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; India</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 f-left">
                                    <div class="single-team">
                                        <img src="image/team/team4.jpg" alt="">
                                        <div class="team-hover">
                                            <h4>Hassa Busbait<span>Admin Officer</span></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; Saudi Arabia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-12 padd0">
                                <div class="col-md-3 f-left">
                                    <div class="single-team">
                                        <img src="image/team/team5.jpg" alt="">
                                        <div class="team-hover">
                                            <h4>Raheel Khan <span>Corporate HSE Manager</span></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; Pakistan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 f-left">
                                    <div class="single-team">
                                        <img src="image/team/team6.jpg" alt="">
                                        <div class="team-hover">
                                            <h4>Mirza Muhammed Asim <span>Manager BD & Marketing</span></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; Pakistan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 f-left">
                                    <div class="single-team">
                                        <img src="image/team/team7.jpg" alt="">
                                        <div class="team-hover">
                                            <h4>Thomas Varghese <span>Construction Manager</span></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; India</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 f-left">
                                    <div class="single-team">
                                        <img src="image/team/team8.jpg" alt="">
                                        <div class="team-hover">
                                            <h4>Joel Famodulan<span>Electrical Superintendent</span></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; Philippines</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a style="margin-left: -34px; height: 280px; opacity: 1;" class="carousel-control-prev" href="#team10" role="button" data-slide="prev">
                        <div class="cus-pre">
                            <img width="10" src="image/left.png">
                        </div>
                    </a>
                    <a style=" height: 280px;   margin-right: -34px; opacity: 1;" class="carousel-control-next" href="#team10" role="button" data-slide="next">
                        <div class="cus-pre">
                            <img width="10" src="image/right.png">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>