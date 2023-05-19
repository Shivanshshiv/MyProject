<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290ece391d1d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/contact.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/contact_2019-04-15-11.php") )  ) ){
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
<div class="container-fluid all-pages-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="form-area">
                    <form role="form">
                        <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: left;">Contact Form</h3>
                        <div class="form-group">
                            <input type="text" style="font-size:12px;" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <input type="email" style="font-size:12px;" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <input type="text" style="font-size:12px;" class="form-control" id="company" name="company" placeholder="company" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" style="font-size:12px;">
                                <option value="Integrated Turnkey Solution Provider Of Telecommunication &amp; Automation System">Integrated Turnkey Solution Provider Of Telecommunication &amp; Automation System</option>
                                <option value="Bolt Integrity Solutions">Bolt Integrity Solutions</option>
                                <option value="Skid Manufacturing">Skid Manufacturing</option>
                                <option value="Blast Resistant Modules">Blast Resistant Modules</option>
                                <option value="Electrical Maintenance, Testing &amp; Commissioning Services">Electrical Maintenance, Testing &amp; Commissioning Services</option>
                                <option value="Fabrication and Installation of Storage Tanks">Fabrication and Installation of Storage Tanks</option>
                                <option value="Civil Construction">Civil Construction</option>
                                <option value="Mechanical Construction">Mechanical Construction</option>
                                <option value="Electrical &amp; Instrumentation Construction">Electrical &amp; Instrumentation Construction</option>
                                <option value="Plant Services">Plant Services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" style="font-size:12px;" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" style="font-size:12px;" type="textarea" id="message" placeholder="Description" maxlength="140" rows="7"></textarea>
                            <span class="help-block">
            <p id="characterLeft" class="help-block ">You have reached the limit</p>
            </span> </div>
                        <div align="right">
                            <button type="reset" id="Reset" onclick="myFunction()" class="btn btn-primary" value="Reset form" style="background:#005825;border:none;">Reset</button>
                            <button type="btn btn-md btn-rounded btn-block form-control submit" id="Submit" name="Submit" class="btn btn-primary pull-right" style="background:#005825;border:none;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
           	<?php 
        		if(have_posts()){
        			while ( have_posts() ) :
        				the_post();
        				?>
                        <div class="col-md-4">
                            <div class="">
                                <br style="clear:both">
                                <h3 style="margin-bottom: 25px; text-align: left;">Contact Us</h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php endwhile;
        		}
                        ?>
            
        </div>
    </div>

    <!--accordion-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Global Presence</h2></div>
        </div>
        <section class="ac-container" style="font-size:12px;">

        <?php if( have_rows('global_presence') ):
        $count = 1; ?>
            <?php 
            while( have_rows('global_presence') ): the_row(); 
                $country_name = get_sub_field('country_name');
            ?>
            <div>
                <input id="ac-<?php echo $count; ?>" name="accordion-1" type="radio" <?php echo ($count == 1 ) ? 'checked=""' : '' ?> >
                <label for="ac-<?php echo $count; ?>"><?php echo get_sub_field('country_title' ); ?></label>
                <article class="ac-small">
                    <div class="container">
                        <?php
                        while( have_rows('country_name') ): the_row(); 
                        ?>
                        <div class="row">
                            <div class="col-md-4 ap">
                                <h5><?php echo get_sub_field('city_title' ); ?> </h5> 
                                 <?php echo get_sub_field('location_details' ); ?>
                            </div>
                            <div class="col-md-4 ap">
                                <h5>Ethics Line</h5> ETHICS LINE
                                <br/> To report a misconduct or a violation of the SENDAN code of Business Conduct, please contact the Ethics Line as follows and provide specific details:
                                <br> Tel : +966-5-04966175 E-mail : ethics@sendan.com.sa Internal Audit Committee, SENDAN P.O Box 11049, Tareeq 114 Jubail Industrial City 31961 Kingdom Of Saudi Arabia The Ethics Line is available 24 hours a day, 365 days a year. You do not have to disclose your name. </div>
                            <div class="col-md-4 ap">
                                <h5>Headquarters</h5> SENDAN INTERNATIONAL COMPANY, LTD.
                                <br> Tel : +966-13-341-2343
                                <br> Fax : +966-13-341-1288
                                <br> E-mail : marketing@sendan.com.sa
                                <br> P.O. Box 11049 Tareeq 114 Jubail Industrial City 31961 Kingdom of Saudi Arabia </div>
                        </div>
                        <section> &nbsp; </section>
                        <div class="row">
                            <div class="col-md-4 ap">
                                <h5>Mawad Sendan</h5> MAWAD SENDAN
                                <br/> Tel : +966-13-847-0400
                                <br> Fax : +966-13-847-0402
                                <br> E-mail : sales-info@mawad.sa
                                <br> Website : www.mawad.sa
                                <br> P.O. BOX 10989, Dammam 31443, Hail Centre - Office No. 1109, Dammam - Khobar Highway , Kingdom of Saudi Arabia </div>
                            <div class="col-md-4 ap">
                                <h5>Tajanos Chemicals</h5> TAJANOS CHEMICALS
                                <br/> Tel : +966-13-3412330
                                <br> Fax : +966-13-3408232
                                <br> E-mail : sales@tajanos.sa
                                <br> Website : www.tajanos.sa'
                                <br> Tajanos Chemicals, PO BOX 11049, Tareeg 114, Jubail Industrial City, Kingdom of Saudi Arabia </div>
                            <div class="col-md-4 ap">
                                <h5>Sensortech Saudi</h5> SENSORTECH SAUDI CO. LTD
                                <br/> Tel : +966-13-8085373
                                <br> Fax : +966-13-8085370
                                <br> E-mail : sales@sensortech.com.sa
                                <br> E-mail : info@sensortech.com.sa
                                <br> Website : www.sensortech.com.sa
                                <br> PO Box NO: 79392, Almousa Industrial Area, South Thoqba, Al-khobar 31952, Kingdom of Saudi Arabia </div>
                        </div>
                        <section> &nbsp; </section>
                        <div class="row">
                            <div class="col-md-4 ap">
                                <h5>Sendan Modern Trading Est.</h5> SENDAN MODERN TRADING EST.
                                <br/> Tel : +966 13 3615465
                                <br> Fax : +966 13 3612453
                                <br> E-mail : trading@sendan.com.sa
                                <br> Website : sendan.com.sa
                                <br> Jeddah Street, Jubail City 31951 Kingdom of Saudi Arabia </div>
                        </div>
                        <?php endwhile; ?>
                        
                    </div>
                </article>
            </div>
       
       <?php $count ++ ; 
            endwhile;
       endif;
       ?>
       
        </section>
    </div>

    <!--accordion end-->
</div>
<?php get_footer(); ?>