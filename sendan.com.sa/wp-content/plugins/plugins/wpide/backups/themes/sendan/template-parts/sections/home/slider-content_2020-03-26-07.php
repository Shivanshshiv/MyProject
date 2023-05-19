<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f509243645378"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/slider-content.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/slider-content_2020-03-26-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The section use to Mange Home page main slider content as client review , latest news and event logo
 *
 * @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
 */
?>
<div class="container-fluid" style="padding-left:30px;padding-right:30px;">
    <div class="row">
        <div class="col-md-9 f-left">

            <div class="clear-topbb">&nbsp;</div>


        </div>
        <div class="col-md-3 f-left ">

            <div class="col-md-12 text-right padd0" style="margin-top: 90px;">
                <a href="https://vision2030.gov.sa/" target="_blank"><img src="img/vision_logo.jpg" style="margin-bottom:5px;height:50px;border-radius:2px;"></a>
            </div>

            <div class="news-updatemain">
                <h4>News Update</h4>
                <div class="newstape">
                    <div class="newstape-content" style="top: -340px;">
                        <div class="news-block">
                            <h5>SENDAN Successfully Completed YANSAB EG-DBN Project</h5>
                            <small>December 26 2018</small>
                            <p class="text-justify">
                                This is really an auspicious moment to get the recognition from YANSAB President &amp; E&amp;PM Executive Vice President on the successful completion...
                            </p>
                            <a href="#">More</a>
                            <hr>
                        </div>
                        <div class="news-block">
                            <h5>SENDAN Successfully Completed YANSAB EG-DBN Project</h5>
                            <small>December 26 2018</small>
                            <p class="text-justify">
                                This is really an auspicious moment to get the recognition from YANSAB President &amp; E&amp;PM Executive Vice President on the successful completion...
                            </p>
                            <a href="#">More</a>
                            <hr>
                        </div>
                        <div class="news-block">
                            <h5>SENDAN Successfully Completed YANSAB EG-DBN Project</h5>
                            <small>December 26 2018</small>
                            <p class="text-justify">
                                This is really an auspicious moment to get the recognition from YANSAB President &amp; E&amp;PM Executive Vice President on the successful completion...
                            </p>
                        </div>
                    </div>
                </div>

                <a href="news.html" style="text-decoration:underline;font-weight:bold;">Read More...</a>

            </div>

            <div class="client-review-w">
                <h4>Clients Review</h4>
                <div id="cbp-qtrotator" class="cbp-qtrotator">
                    <div class="cbp-qtcontent maincctext" style="display: none;"> <img src="img/clients_logo_5.png" alt="img01">
                        <blockquote>
                            <p>People eat meat and think they will become as strong as an ox, forgetting that the ox eats grass.</p>
                            <p>Pino Caruso</p>
                        </blockquote>
                    </div>
                    <div class="cbp-qtcontent current" style="display: block;"> <img src="img/clients_logo_4.png" alt="img02">
                        <blockquote>
                            <p>Nothing will benefit human health and increase the chances for survival of life on Earth as much as the evolution to a vegetarian diet.</p>
                            <p>Albert Einstein</p>
                        </blockquote>
                    </div>
                    <div class="cbp-qtcontent" style="display: none;"> <img src="img/clients_logo_3.png" alt="img03">
                        <blockquote>
                            <p>If you don't want to be beaten, imprisoned, mutilated, killed or tortured then you shouldn't condone such behaviour towards anyone, be they human or not.</p>
                            <p>Moby</p>
                        </blockquote>
                    </div>
                    <div class="cbp-qtcontent" style="display: none;"> <img src="img/clients_logo_2.png" alt="img04">
                        <blockquote>
                            <p>My body will not be a tomb for other creatures.</p>
                            <p>Leonardo Da Vinci</p>
                        </blockquote>
                    </div>
                    <span class="cbp-qtprogress" style="overflow: hidden; width: 218.879px;"></span> </div>
                <!-- / main -->

            </div>

        </div>

    </div>