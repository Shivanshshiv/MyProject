<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50e8986733bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/single-projects.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/single-projects_2020-04-23-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php

/* Single Project Details */
get_header(); ?>
<div class="container-fluid section-10 business-bg" style="margin-top:80px;">
    <div class="container">

        <div class="row">
            <h2 class="aboutus-title">Mechanical Construction</h2>
        </div>

        <div class="row">
            <div id="businessquato2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#businessquato2" data-slide-to="0" class="active"></li>
                    <li data-target="#businessquato2" data-slide-to="1" class=""></li>
                    <li data-target="#businessquato2" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="image/business/bg-2-11.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="image/business/bg-2-10.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="image/business/bg-2-11.jpg">
                    </div>
                </div>

                <a style="margin-left: -34px; " class="carousel-control-prev" href="#businessquato2" role="button" data-slide="prev">
                    <div class="cus-pre">
                        <img width="10" src="image/left.png">
                    </div>
                </a>
                <a style="   margin-right: -34px; " class="carousel-control-next" href="#businessquato2" role="button" data-slide="next">
                    <div class="cus-pre">
                        <img width="10" src="image/right.png">
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 padd0 mt-20" data-aos="fade-left">
                <h2 class="aboutus-title">Our Services</h2>
                <p class="all-p">We provide a diverse range of Mechanical Construction Services. With our well experienced professionals and resources, we have established a solid reputation of completing projects within time and as per quality and safety standards. The various commendations we received from our clients signify our reputation as a reliable and reputable Mechanical Services provider in Saudi Arabia.</p>
            </div>

            <div class="col-md-12 f-left padd0 business-page" data-aos="fade-right">

                <ul>
                    <li>
                        <div class="service-icon"><img src="image/tick.png"></div>
                        Piping Fabrication
                    </li>
                    <li>
                        <div class="service-icon"><img src="image/tick.png"></div>
                        Steel Structure Erection
                    </li>
                    <li>
                        <div class="service-icon"><img src="image/tick.png"></div>
                        Painting
                    </li>
                    <li>
                        <div class="service-icon"><img src="image/tick.png"></div>
                        Piping Erection
                    </li>
                    <li>
                        <div class="service-icon"><img src="image/tick.png"></div>
                        Static Equipment Installation
                    </li>
                    <li>
                        <div class="service-icon"><img src="image/tick.png"></div>
                        Insulation
                    </li>
                    <li>
                        <div class="service-icon"><img src="image/tick.png"></div>
                        Steel Structure Fabrication
                    </li>
                    <li>
                        <div class="service-icon"><img src="image/tick.png"></div>
                        Rotating Equipment Installation
                    </li>
                </ul>

            </div>
        </div>

    </div>

</div>
<div class="clearfix"></div>



<?php 
 while ( have_posts() ) : the_post(); ?>
    <div class="container-fluid main-content-home" style="padding-top:0;">
    	<div class="container">
    		<div class="row">
    			<?php if( get_field('details_page_banner')  ): ?>
        			<div class="col-md-12">
        				<img src="<?php the_field('details_page_banner') ; ?>" alt="<?php the_title(); ?>" style="width:100%">
        			</div>
        		<?php endif; ?>
    		</div>
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back1">
    							<p><strong>Project:</strong> <?php the_title(); ?></p>
    						</div>	<span class="top"></span>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back1">
    							<p><strong>Client:</strong> <?php the_field('p_client') ; ?> </p>
    						</div>	<span class="top"></span>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back1">
    							<p><strong>Completion Year:</strong> <?php the_field('p_year') ; ?> </p>
    						</div>	<span class="top"></span>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back">
    							<p><strong>Prime Contractor:</strong> <?php the_field('p_prime_contractor') ; ?>  </p>
    						</div>	<span class="top"></span>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back">
    							<p><strong>Scope of Work:</strong>  <?php the_field('scope_of_work') ; ?>  </p>
							</div>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back">
    							<p><strong>Location:</strong>  <?php the_field('p_location') ; ?> </p>
    						</div>	<span class="top"></span>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="main-p" style="text-align:justify;">
    				    <?php the_Content(); ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    	
<?php endwhile; ?>
	
	
	
	
	
<?php get_footer(); ?>