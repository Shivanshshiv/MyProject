<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29d7f8492138"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/major-projects.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/major-projects_2019-04-19-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/* 
* Template Name: Major Projects
*/
get_header(); 
?>
<style>
.thumb {
    width: 100%;
    height: auto;
}
.feature-gallery {
    margin: 15px 0;
    overflow: hidden;
    position: relative;
}
.feature-gallery img.thumb {
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 700ms ease;
    -moz-transition: all 700ms ease;
    -ms-transition: all 700ms ease;
    -o-transition: all 700ms ease;
    transition: all 700ms ease;
}
.feature-gallery:hover img.thumb {
    opacity: 1;
    transition: all 0.35s;
    -moz-transform: scale(1.13);
    -webkit-transform: scale(1.13);
    -ms-transform: scale(1.13);
    transform: scale(1.13);
}
.fg-overlay { 
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    transition: all.3s;
    width: 100%;
    height: 100%;
    padding: 30px;
    cursor: pointer;
}
.feature-gallery:hover .fg-overlay {
    background-color: rgba(0, 0, 0, 0.7);
    opacity: 1;
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}
.fg-overlay h2 {
    font-size: 18px;
    font-weight: 400;
    line-height: 22px;
    color: #fff;
    opacity: 0;
    margin-bottom: 5px;
    -moz-transform: scale(0.1);
    -ms-transform: scale(0.1);
    -webkit-transform: scale(0.1);
    transform: scale(0.1);
    transition: all .35s;
}
.fg-overlay p {
    font-size: 14px;
    color: #fff;
    opacity: 0;
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    transition: all .35s;
}
.feature-gallery:hover .fg-overlay h2,
.feature-gallery:hover .fg-overlay p{
    opacity: 1;
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}
.fg-overlay:before {
    opacity: 0;
    border: 1px solid #f1f1f1;
    position: absolute;
    top:15px;
    left:15px;
    bottom:15px;
    right:15px;
    z-index: 10;
    content: "";
    display: block;
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    transition: all .35s;
}
.feature-gallery:hover .fg-overlay:before {
    opacity: 1;
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

</style>

<div class="container-fluid all-pages-padding text-center" style="padding-top:0;">
    <div class="container">
        <div class="row">

            <!--/feature-gallery--->
            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/5.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>Sadara Warehouse Material Handling Service</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--/feature-gallery--->

            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/6.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>SadaraIsocyanates – PMDI & TDI Project Package</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--/feature-gallery--->

            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/7.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>Fire Water Supply Pipelines and Fire Protection System At Jubail Industrial Port (KFIP)</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--/feature-gallery--->

            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/8.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>Yanbu Export Refinery Project – PKG # 3</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/1.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>Bolt Torqueing Tensioning Services Contract for 3 Years with MAADEN</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--/feature-gallery--->

            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/2.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>Bolt Tensioning Long Form Contract for 5 Years- SABIC</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--/feature-gallery--->

            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/3.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>LFC Contract for General Construction Services for (2 Years) -MAADEN</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--/feature-gallery--->

            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/4.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>E & I Work For Aramco COGEN Project</p>
                        </div>
                    </a>
                </div>
            </div>

            <!--/feature-gallery--->
            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/9.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>Wasit Gas Program Project</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--/feature-gallery--->
            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/10.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>KJO Transfer Function Project</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--/feature-gallery--->
            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/11.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>DUBAI International Airport Expansion – II Automated People Movers Concourse 2&3</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--/feature-gallery--->
            <div class="col-md-3 col-sm-3">
                <div class="feature-gallery">
                    <img class="thumb" src="img/major-projects/12.jpg" alt="" title="">
                    <a href="detail.html">
                        <div class="fg-overlay">
                            <p>UAE, PV Project</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>