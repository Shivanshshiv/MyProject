<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290b0df6b826"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/single-our-people.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/single-our-people_2019-04-20-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying all Our People posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sendan
 * @since 1.0.0
 */


get_header();
?>
	<div class="container-fluid all-pages-padding">
	 <div class="container">
	   <div class="row meet-our-people-question">		  
		  <div class="col-md-9">
		   <h6>When did you join Sendan?</h6>
		   <p>I joined Sendan in June 19, 2011.</p>
		   <h6>Please summarize your career milestones in Sendan?</h6>
		   <p>After graduating from my MBA studies in Troy University in USA, I first joined Sendan as an HR Officer. Management recognized my leadership skills so they promoted me to become HR Supervisor in 2012 and then to Admin Superintendent in 2013. Currently, I am in-charge of the Benefits Administration and Head Office Administration which include Government Relations, Records Management, Iqama and Visa Processing, License and Permits Processing, etc.</p>
		   <h6>What do you like best about your current job?</h6>
		   <p>I'm the type who always look for new and greater challenges. That's what I enjoy most about working in Sendan. I enjoy giving direct support to Senior Management in a way that really makes difference. My current job has been wonderful since I get the opportunity to split my time between creative and administrative tasks. I love that duality. Sometimes, when I get stuck up with administrative duties, I can switch gears and do some creative stuff.</p>
		   <h6>What do you like best about working in Sendan?</h6>
		   <p>I like many things in Sendan. It provides grooming and effective working environment. It has also good reputation. By working in Sendan, it helps me to explore my skill, prove my abilities and gain more valuable experience.</p>
		   <h6>Any other positive comments about working in Sendan?</h6>
		   <p>I like to work in a company which provides ample opportunity for employees to fulfill their career aspirations, and SENDAN is one of these companies.</p>
		  </div>
		  <div class="col-md-3 meet-out-people">
		   <div class="inner">
		    <img src="img/raji_sahwan.jpg" class="img-fluid" />
			<p><b>Raji Sahwan</b><br/>Manager HR & Admin<br/>Saudi Arabia</p>
		   </div>
		  </div>
		</div>  
	 </div>
	</div>
	


<?php get_footer() ; ?>
	