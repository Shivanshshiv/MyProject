<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e297f79842019"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/at-a-glance.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/at-a-glance_2019-04-13-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: At A Glance
*/
get_header();
?>
<div class="container-fluid all-pages-padding" style="padding-top:0;">
	 <div class="container">
	   <div class="row">
	   <?php 
		if(have_posts()):
			while ( have_posts() ) :
				the_post();
				?>        
        	    <div class="col-md-5">
        	    <?php
        			if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'full' , array('class' => 'img-fluid border-solid-1') );
                    }
                    ?>	 
        		</div>
    		<div class="col-md-7 text-center">
    		 <div class="row">
    		  <div class="col-md-4">
    		   <h2>2800+</h2>
    		   <p>Employees in Saudi Arabia</p>
    		  </div>
    		  <div class="col-md-4">
    		   <h2>500+</h2>
    		   <p>Employees in UAE</p>
    		  </div>
    		  <div class="col-md-4">
    		   <h2>170+</h2>
    		   <p>Projects in the Middle East</p>
    		  </div>
    		 </div>
    		 
    		 <div class="row" style="padding-top:20px;">
    		  <div class="col-md-4">
    		   <h5>CERTIFICATE</h5>
    		   <p>ISO 9001:2008</p>
    		  </div>
    		  <div class="col-md-4">
    		   <h5>HEADQUARTERS</h5>
    		   <p>Jubail Industrial City,Saudi Arabia</p>
    		  </div>
    		  <div class="col-md-4">
    		   <h5>BRANCHES</h5>
    		   <p>Yanbu, Saudi Arabia<br/>
    Dubai, United Arab Emirates (UAE)<br/>
    Dubai Freezone, U.A.E.<br/>
    Abu Dhabi, UAE<br/>
    Seoul, Korea</p>
    		  </div>		  
    		 </div>
    		</div>
    	   </div>
    	   
    	   <div class="row" style="padding-top:20px;">
    	    <div class="col-md-3">
    		 <h4>SECTORS</h4>
    		 <ul>
    		  <li>Oil & Gas</li>
    		  <li>Petrochemicals & Refineries</li>
    		  <li>Power and Water</li>
    		  <li>Transportation</li>
    		 </ul>
    		</div>
    		<div class="col-md-5">
    		 <h4>Expertise</h4>
    		 <ul>
    		  <li>Integrated Turnkey Solution Provider Of Telecommunication & Automation System</li>
    		  <li>Bolt Integrity Solutions</li>
    		  <li>Skid Manufacturing</li>
    		  <li>Blast Resistant Modules</li>
    		  <li>Electrical Maintenance, Testing & Commissioning Services</li>
    		  <li>Fabrication and Installation of Storage Tanks</li>
    		  <li>Civil Construction</li>
    		 </ul>
    		</div>
    		<div class="col-md-4">
    		 <h4></h4>
    		 <ul>
    		  <li>Mechanical Construction</li>
    		  <li>Electrical & Instrumentation Construction</li>
    		  <li>Plant Services</li>
    		  <li>Scaffolding Services</li>
    		  <li>Construction Services</li>
    		  <li>Human Resource Services</li>
    		  <li>Material Handling Services</li>
    		  <li>Industrial Materials Supply</li>
    		 </ul>
    		</div>
    	   </div>
    	   
    	   <div class="row" style="padding-top:40px;">
    	    <div class="col-md-12">
    		 <h4 style="border-bottom:1px #ccc solid;">Major Clients</h4>
    		</div>
    	   </div>
    	   <div class="row text-center">
    	    <div class="col-md-2"><a href="http://www.sabic.com/corporate/en/" target="_blank"><img src="img/clients_logo_1.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    		<div class="col-md-2"><a href="http://www.saudiaramco.com/" target="_blank"><img src="img/clients_logo_2.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    		<div class="col-md-2"><a href="http://www.se.com.sa/" target="_blank"><img src="img/clients_logo_3.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    		<div class="col-md-2"><a href="http://www.marafiq.com.sa/" target="_blank"><img src="img/clients_logo_4.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    		<div class="col-md-2"><a href="http://www.takreer.com/" target="_blank"><img src="img/clients_logo_5.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    		<div class="col-md-2"><a href="http://www.takreer.com/" target="_blank"><img src="img/clients_logo_6.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    		<div class="col-md-2"><a href="http://www.satorp.com/" target="_blank"><img src="img/clients_logo_7.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    		<div class="col-md-2"><a href="https://www.sadara.com/en/" target="_blank"><img src="img/clients_logo_8.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    		<div class="col-md-2"><a href="https://www.sasref.com.sa/" target="_blank"><img src="img/clients_logo_9.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    		<div class="col-md-2"><a href="http://www.yasref.com/" target="_blank"><img src="img/clients_logo_10.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    		<div class="col-md-2"><a href="http://www.samref.com.sa/" target="_blank"><img src="img/clients_logo_11.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    		<div class="col-md-2"><a href="http://www.tasnee.com/" target="_blank"><img src="img/clients_logo_12.png" class="img-fluid" style="border:14px #fff solid;margin-top:10px;"/></a></div>
    	   </div>
    	   <?php 
    	   endwhile;
    	  endif;
    	   ?>
	 </div>
	</div>
	
	<?php get_footer(); ?>