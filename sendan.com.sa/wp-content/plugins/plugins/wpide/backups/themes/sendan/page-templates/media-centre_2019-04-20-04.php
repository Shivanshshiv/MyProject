<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290b0df6b826"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/media-centre.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/media-centre_2019-04-20-04.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Media Centre
*/
get_header();
?>
<style>
    .media-centre h3 {
        padding-bottom: 0px;
        margin: 0;
    }
    
    .media-centre h5 {
        border-top: 1px #ccc solid;
        padding-top: 10px;
        margin-top: 20px;
    }
    
    .media-centre p {
        margin-bottom: 0;
    }
    
    .media-centre p span {
        margin-bottom: 0;
        color: #005825;
    }
    
    .media-centre .more {
        text-decoration: underline;
    }
</style>
<div class="container-fluid all-pages-padding">
    <div class="container">
        <div class="row media-centre">
            <div class="col-md-5">
                <div style="media-centre-box">
                    <h4><?php the_field('si_inquireie_title'); ?></h4>
                    <?php the_field('si_inquiry_details'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div style="media-centre-box">
                    <h4><?php the_field('general_inquiries_title'); ?></h4>
                    <?php the_field('general_inquiries_descriptions'); ?>
                </div>
            </div>
            <div class="col-md-3">
                <h4>Social Network:</h4>
                <a style="color:#005825;font-size:18px;margin-right:10px;" target="_blank" href="https://www.facebook.com/Sendaninternational"><i class="fab fa-facebook-f"></i></a>
                <a style="color:#005825;font-size:18px;margin-right:10px;" target="_blank" href="https://twitter.com/SendanSaudi"><i class="fab fa-twitter"></i></a>
                <a style="color:#005825;font-size:18px;margin-right:10px;" target="_blank" href="https://www.linkedin.com/company/sendan-al-emarat-contracting-llc"><i class="fab fa-linkedin-in"></i></a>
                <a style="color:#005825;font-size:18px;margin-right:10px;" target="_blank" href="http://sendan-international.blogspot.com/"><i class="fab fa-blogger"></i></a>
                <a style="color:#005825;font-size:18px;margin-right:10px;" target="_blank" href="https://www.flickr.com/photos/sendaninternational"><i class="fab fa-flickr"></i></a>
            </div>
            <div class="col-md-12" style="padding-top:50px;">
                <h3>Latest News</h3>
                <h5><b>SENDAN Successfully Completed YANSAB EG-DBN Project</b></h5>
                <p><span><b>December 26 2018</b></span></p>
                <p>This is really an auspicious moment to get the recognition from YANSAB President & E&PM Executive Vice President on the successful completion of most Challenging & Toughest Shutdown in the History of SABIC. It is a great moment indeed and an achieved milestone for the successful completion of YANSAB EG-DBN Project. SENDAN would like to extend its gratitude to all the Team members and stakeholders involved and for entrusting us for our most challenging work yet. It is a consolidated team effort completing the project ahead of time safely. SENDAN assures its continuous team improvement and development for our future engagements with our clients. Thank you!</p>
                <a href="news.html" class="more">more</a>
            </div>
            <div class="col-md-12">
                <h5><b>4th Annual Contractors F2F Campaign At Ibn Rushd – Yanbu</b></h5>
                <p><span><b>December 19 2018</b></span></p>
                <p>It is with great pleasure to inform you that 4th Annual Contractors F2F Campaign at Ibn Rushd has just finished and SENDAN received many compliments and admirations from its client. Business Development & Marketing Department made significant identification by making a fabulous presence in this event. We would like to extend our sincere thanks to Mr. Asad Tanoli from Safety Department who have worked together with BDM to make SENDAN presence and BDM efforts successful. It was really very nice that SENDAN participated and interact with Ibn-Rushd technical team.</p>
                <a href="news.html" class="more">more</a>
            </div>
            <div class="col-md-12">
                <h5><b>SENDAN Circulated 4th HSE Newsletter For The Month of July & August – 2018</b></h5>
                <p><span><b>September 06 2018</b></span></p>
                <p>SENDAN developing and distributing a monthly safety newsletter can provide a dedicated means of communicating vital safety-related information, including but not limited to: announcing new safety practices and guidelines and reviewing existing guidelines. Many elements contribute to the successful management of an organization's safety program. In OSHA's fact sheet, "Effective Workplace Safety and Health Management Systems," a checklist of essential tasks stresses that employers should "develop and communicate a safety and health policy to all employees."</p>
                <a href="news.html" class="more">more</a>
            </div>
        </div>
    </div>
</div>











<?php get_footer(); ?>
