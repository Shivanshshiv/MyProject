<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "1c0c4960880e545f7724d71f4e8389cafcb30b35ed"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/about.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/about_2020-09-11-13.php") )  ) ){
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
  <div class="carousel-inner height-400 mobile-homeabout">
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
 
    <!--div class="col-md-12 f-left mainquutto">
        <h2 class="quote-main">
          <img width="40" src="<?php echo get_template_directory_uri() ;?>/assets/image/quote.png">
         <?php echo the_sub_field('quotation_author'); ?>
        </h2>
        <p class="quote-main-2">
        -- “ <?php echo the_sub_field('quotation_content'); ?> ”
        <br>
        </p>
    </div-->
           
        
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
	<div class="col-md-12 f-left padd0 home_about_us">
	
	 <?php
        if( have_rows('our_value_options') ):
            while ( have_rows('our_value_options') ) : the_row(); 
            ?>
		<div class="col-md-4 col-6 f-left stctore-list h_ab">
			<div class="col-md-2 f-left padd0 h_ab_1">
				<img width="42" src="<?php echo the_sub_field('sector_image'); ?>">
			</div>
			<div class="col-md-10 f-left sectore-list h_ab_1">
				<h4><?php echo the_sub_field('ourvaluetitle'); ?></h4>
			<!--	<p><?php echo the_sub_field('ourvaluedescription'); ?></p> --->
			<!--	<a href="<?php echo the_sub_field('url_of_sector'); ?>">Explore more</a>-->
				<!--<a href="javascript:void(0)">Explore more</a>-->
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
			<li><a href="<?php echo the_sub_field('img_url'); ?>" target="_blank"><img src="<?php  echo the_sub_field('client_image');   ?>" /></a>
			</li>
			<?php endwhile; endif; ?>
		</ul>
		
		 <a class="read-more-major" href="javascript:void(0)" data-toggle="modal" data-target="#allclient">View more</a>
	</div>
</div>
  </div>
  
</div>
<div class="" id="ourbusiness"></div>
</div>

<!--------------------------modal------------------->
    
  <div class="modal fade " id="allclient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header all-mhead">
        <h5>All Major Clients</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12 padd0 major-client-popup f-left">
        <ul class="mt-0">
         <?php
        if( have_rows('home_more_clients') ):
            while ( have_rows('home_more_clients') ) : the_row(); 
            ?> 
                <li><a href="javascript:void(0)"><img src="<?php echo the_sub_field('images'); ?>"></a></li> 
           <?php
            endwhile;
        endif;
            ?>
        </ul>
        
      </div>
      </div>
      <!--div class="modal-footer allmodal-foot">
        <button type="button" class="btn closebtn-2" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn savebtn">Save</button> 
      </div-->
    </div>
   </div>
   </div>

<!------------------------------------------------------------->