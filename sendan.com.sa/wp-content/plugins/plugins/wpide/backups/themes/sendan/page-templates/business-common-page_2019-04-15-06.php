<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290ece391d1d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/business-common-page.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/business-common-page_2019-04-15-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* 
*   Template Name: Business Common Page
*/

get_header(); ?>

<div class="container-fluid all-pages-padding" style="padding-top:0;">
    <div class="container">
    	<?php 
        		if(have_posts()):
        			while ( have_posts() ) :
        				the_post();
        				?>
        				
                        <div class="row">
                            <div class="col-md-7">
                                <?php
                			if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'full' , array('class' => 'img-fluid border-12px') );
                            }
                            ?>
                            </div>
                            <div class="col-md-5 text-justify">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 col-center m-auto cus-testimonial">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel indicators 
                				<ol class="carousel-indicators">
                					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                					<li data-target="#myCarousel" data-slide-to="1"></li>
                					<li data-target="#myCarousel" data-slide-to="2"></li>
                				</ol>  -->
                                    <!-- Wrapper for carousel items -->
                                    <div class="carousel-inner">
                                        <div class="item carousel-item active">
                                            <p class="testimonial">I would like to thank Sendan International for their quick response in regard to the delivery of the material, documents and installation at RC corridor that resulted in meeting the project premises.</p>
                                            <p class="overview"><b>Said Bager Al-Muhaimeed</b>, Project Manager, SADAF </p>
                                        </div>
                                        <div class="item carousel-item">
                                            <p class="testimonial">I take the opportunity to thank and appreciate each and everyone who have contributed to make successful completion of the Recovered Water Line Project safely and ahead of schedule! Please keep it up.</p>
                                            <p class="overview"><b>Zahrani Mohammed</b>, President, SADAF</p>
                                        </div>
                                        <div class="item carousel-item">
                                            <p class="testimonial">After completing the Ar-Razi V Revamp Project with SENDAN, our confidence as MHI on SENDAN has been enhanced, and we are looking forward to have more close business relations with SENDAN in future.</p>
                                            <p class="overview"><b>Katsuyuki Morinaga</b>, AR-RAZI (SABIC)</p>
                                        </div>
                                        <div class="item carousel-item">
                                            <p class="testimonial">Sendan worked professionally to execute the entire job with safety and quality. The role of Execution, HSE and QAQC teams has been outstanding.</p>
                                            <p class="overview"><b>Ahwad Al-Ghamdi</b>, IBN-RUSHD (SABIC)</p>
                                        </div>
                                        <div class="item carousel-item">
                                            <p class="testimonial">Excellent performance and Safe execution of 3EG, OLF and 2EG TAM</p>
                                            <p class="overview"><b>Mohammed Al Sulami</b>, Sharq (SABIC)</p>
                                        </div>
                                        <div class="item carousel-item">
                                            <p class="testimonial">Overall performance by SENDAN in executing EG1 and EG2 TA projects is highly appreciated by SPJ team at UNITED.</p>
                                            <p class="overview"><b>Mohammed Ahmed Maniyar</b>, United (SABIC)</p>
                                        </div>
                                        <div class="item carousel-item">
                                            <p class="testimonial">On behalf of the IBNZAHR project team we would like to express our thanks to all SENDAN team for their great demonstrated job in the assigned tasks and completing the project as per required target and contract scope for the subject project.</p>
                                            <p class="overview"><b>Ali Hassan Al-Suwaiyel</b>, Saudi European Petrochemical Company</p>
                                        </div>
                                    </div>
                                    <!-- Carousel controls -->
                                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="<?php echo get_field('image_for_right_side_on_details_page_'); ?>" class="img-fluid border-12px"  />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 other-service-link">
                                <div style="border-top:1px #ccc solid;margin-top:10px;padding-top:10px;">
                                    <h4>OUR SERVICES</h4>
                                    <div class="row">
                                    <ul>
                                    <?php
                                   if( have_rows('services_list') ):     
                                    while ( have_rows('services_list') ) : the_row(); 
                                        ?>    
                                      <li> <?php echo the_sub_field('descriptions'); ?> </li>
                                      <?php endwhile;
                                      endif;
                                      ?>
                                      </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                ?>
    </div>
</div>



<?php get_footer(); ?>