<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0bdae52e11cf3cce78c578ddf3df4d1c02d680a3f8"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/career.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/career_2020-06-13-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><div class="container-fluid  sectioncar-30" style="background-image: url(<?php the_field('career_background');  ?>);" >
  <div class="row">
 <div class="col-md-4 career-text">

  <div class="col-md-12 padd0">
  <h2  class="aboutus-title">CAREER</h2>
    <!---h2 class="aboutus-title"><?php the_field('career_title'); ?></h2-->  
   </div>
    <p><?php the_field('career_description'); ?></p>

    <a href="<?php the_field('career_url'); ?>">View Job Opportunities</a>
   </div>

</div>
<div class="" id="contact"></div>

</div>