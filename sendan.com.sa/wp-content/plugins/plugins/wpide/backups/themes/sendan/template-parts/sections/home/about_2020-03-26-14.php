<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f509243645378"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/about.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/about_2020-03-26-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>
<div  class="container  section-10" >
   <div class="row">
   <div class="col-md-12" style="text-align: center;">
    <h2 class="aboutus-title">About Us</h2>  
   </div>
  </div>

  <div id="about-ss" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#about-ss" data-slide-to="0" class="active"></li>
      <li data-target="#about-ss" data-slide-to="1" class=""></li>
      <li data-target="#about-ss" data-slide-to="2" class=""></li>
    </ol>
  <div class="carousel-inner height-400">
   <div class="carousel-item active">
    <div class="col-md-12 padd0">
    
<?php
                            if( have_rows('message_options_page') ):
                                $count = 0 ;     
                                while ( have_rows('message_options_page') ) : the_row(); 
                                ?>
  <div class="col-md-3 f-left padd0 ceoname">
   <img class="img-fluid" src="<?php echo the_sub_field('image'); ?>">
   <h4> <?php echo the_sub_field('name_of_ceo'); ?></h4>
   <h5><?php echo the_sub_field('position'); ?></h5>


  </div>
  <div class="col-md-9 about-ceo f-left">
    <h4><?php echo the_sub_field('title'); ?></h4>
      <p><?php echo the_sub_field('message'); ?></p>
        
        
    </div>
    <?php endwhile;
       endif;
       ?>
    </div>
    </div>
<div class="carousel-item">
	<div class="col-md-12 f-left padd0">
		<h4 style="font-size: 18px; margin-bottom: 30px;"><?php the_field('our_value_text'); ?></h4>
	</div>
	<div class="col-md-12 f-left padd0">
	
	 <?php
        if( have_rows('our_value_options') ):
            while ( have_rows('our_value_options') ) : the_row(); 
            ?>
		<div class="col-md-4 f-left stctore-list ">
			<div class="col-md-3 f-left padd0">
				<img width="60" src="image/valve.png">
			</div>
			<div class="col-md-9 f-left sectore-list">
				<h4><?php echo the_sub_field('sector_image'); ?></h4>
				<p>Considered being the biggest sector in the world in terms of dollar value,</p> <a href="<?php echo the_sub_field('url_of_sector'); ?>">Explore more</a>
			</div>
		</div>
        <?php
            endwhile;
        endif;
            ?>
	</div>
</div>
<div class="carousel-item">
	<div class="col-md-12 f-left padd0">
		<h4 style="font-size: 18px;">Major Clients</h4>
	</div>
	<div class="col-md-12 padd0 major-client">
		<ul>
			<?php if( have_rows( 'clients_details_home') ): while ( have_rows( 'clients_details_home') ) : the_row(); ?>
			<li><a href="#"><img src="<?php  echo the_sub_field('client_image');   ?>" /></a>
			</li>
			<?php endwhile; endif; ?>
		</ul>
	</div>
</div>
  </div>
  
</div>
<div class="" id="ourbusiness"></div>
</div>