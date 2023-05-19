<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29e3d7ed36a9"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/left-image-content.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/left-image-content_2019-04-12-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/*
* Template Name: Left Image Contetn
*/
get_header();
?>
<div class="container-fluid main-content-home" style="padding-top:0;">
	 <div class="container">
	   <div class="row">
	    <div class="col-md-12">
		 <img src="img/ceo_img.png" style="float:left;margin-right:20px;">
		 <p style="text-align:justify;" class="">Our website reflects the exciting journey of Sendan Group since we started in 1994. From a subcontractor in Electrical and Instrumentation, Sendan has rapidly grown to become a significant and respected contractor in Civil, Scaffolding, Mechanical and Plant Services for the Petrochemical and Industrial sectors. from its roots in Jubail (Saudi Arabia), Sendan has expanded its wings to establish its presence in the western regions of Saudi Arabia and United Arab Emirates. We have also diversified to include allied businesses involving trading of industrial materials, supply of manpower, bolt integrity solutions and manufacturing of temperature sensors.</p>
		 <p style="text-align:justify;">Through continuous development of our Human Resources, acquisition of latest Technologies, strong adherence to Quality and Safety and by adopting modern best practices, SENDAN continues to grow and solidify its reputation among its clients.</p>
		 <p style="text-align:justify;">On behalf of Sendan Group, I would like to extend my sincere gratitude to all our clients for their unwavering trust and support through all these years and for playing a major role in our success.</p>
		 <img src="img/sign.jpg">
		 
		</div>
	   </div>
	 </div>
	</div>
	
	
<div class="container-fluid main-content-home" style="padding-top:0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				
				<?php 
        		if(have_posts()){
        			while ( have_posts() ) :
        				the_post();
        				?>
                		<div class="row">
                		<div class="col-md-4">
                			<?php
                			if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'full' , array('class' => 'img-fluid') );
                            }
                            ?>
                			</div>
                			<div class="col-md-8">
                			    <?php the_content(); ?>
                			</div>
                			
                		</div>
             <?php endwhile;
        	   }
                ?>
				
			</div>
		</div>
	</div>
</div>


<?php get_footer() ; ?>