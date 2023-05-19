<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50c1dbe19959"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/career.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/career_2020-03-17-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><!-- Career -->
<div class="container-fluid" style="background:#00000073;padding:40px 40px 40px 40px;">
<div class="container">
                <div class="row">
                        <div class="col col-xs-12 col-md-6">
                            <div class="block html">
                                    <h2>CAREERS</h2>

                                    <div>
                                        <p>People have helped us to develop, produce and market innovative solutions that make a difference both to industry and to humanity. At SENDAN we enable you to realize your ideas and make an impact.</p>
                                    </div>
                            </div>

                                <div class="row-cta">
                                    <a href="#"><span>VIEW JOB OPPORTUNITIES</span></a>
                                </div>
                        </div>
                        <div class="col col-xs-12 col-md-6 image-container">
                            <div class="sabic-loader finished">
                                <div class="sabic-loader-image"></div>
                            </div>
                                <a href="javascript:;">
                                    <div class="block image">
                                        <div class="with-ratio">
                                            <img src="img/career.jpg" alt="Three people looking at a whiteboard" title="Three people looking at a whiteboard" data-aspect="1.62" width="478">
                                        </div>
                                    </div>
                                </a>
                        </div>
                </div>
            </div>
    </div>