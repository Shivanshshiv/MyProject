<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "36a295ae66f10625d2857ccde42e42bd309b9e0237"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/about-us-new.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/about-us-new_2020-05-09-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/* 
* Template Name: About US New
*/
get_header();
?>

<div  id="ceo-message"></div>
<div class="clearfix"></div>
<div  class="container  section-10" style=" padding-top: 90px;">
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <h2 class="aboutus-title">About Us</h2>
        </div>
    
    <div class="col-md-12 padd0">
    
<?php
    if( have_rows('message_options_page',5) ):
        $count = 0 ;     
        while ( have_rows('message_options_page',5) ) : the_row(); 
        ?>
  <div class="col-md-3 f-left padd0 ceoname">
   <img class="img-fluid" src="<?php echo the_sub_field('image'); ?>">
   <h4> <?php echo the_sub_field('name_of_ceo'); ?></h4>
   <h5><?php echo the_sub_field('position'); ?></h5>


  </div>
  <div class="col-md-9 about-ceo f-left">
    <h4><?php echo the_sub_field('title'); ?></h4>
      <p><?php echo the_sub_field('message'); ?></p>
 
    <div class="col-md-12 f-left mainquutto">
        <h2 class="quote-main">
          <img width="40" src="<?php echo get_template_directory_uri() ;?>/assets/image/quote.png">
         <?php echo the_sub_field('quotation_author'); ?>
        </h2>
        <p class="quote-main-2">
        -- “ <?php echo the_sub_field('quotation_content'); ?> ”
        <br>
        </p>
    </div>
           
        
    </div>
    <?php endwhile;
       endif;
       ?>
    </div>
    </div>
    <div  id="at-a-glance"></div>

</div>
<div class="clearfix"></div>

<!-------------------------------------------------------------->

<div class="container-fluid  section-20" data-aos="fade-right">
    <div class="container section-20-b">
        <div class="row">
            <div class="col-md-12">
                <h2 class="aboutus-title">At a Glance</h2>
            </div>
        </div>

        <div id="about-ss" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" style="bottom: -20px;">
                <li data-target="#about-ss" data-slide-to="0" class="active"></li>
                <li data-target="#about-ss" data-slide-to="1" class=""></li>
                <li data-target="#about-ss" data-slide-to="2" class=""></li>
                <li data-target="#about-ss" data-slide-to="3" class=""></li>
                <li data-target="#about-ss" data-slide-to="4" class=""></li>
            </ol>
            <div class="carousel-inner height-400">
<!--At a glance-->
                <div class="carousel-item active">
                    <div class="row ">
                        <div class="col-md-8 f-left text-center">
                            <img class="img-fluid" src="<?php the_field('at_a_glance_image'); ?>">
                             <?php
                                if( have_rows('slider_counter', 5) ):
                                    $count = 0;     
                                    while ( have_rows('slider_counter', 5) ) : the_row(); $count++;
                                ?>      
                            <div class="col-md-3 col-sm-6 f-left countermainarea-about">
                                <div class="counter-about">
                                    <i styl="display:block" class="<?php echo the_sub_field('counter_icon'); ?> fa-2x"></i>
                                    <span class="timer count-title-about count-number " data-to="<?php echo the_sub_field('counter_number'); ?>" data-speed="1500"><?php echo the_sub_field('count_number'); ?></span>
                                    <?php if($count != 1 ) { ?> <span style="font-size: 30px;">+</span> <?php } ?>
                                    <p><?php echo the_sub_field('counter_title'); ?></p>
                                </div>
                            </div>
                              <?php endwhile;
                            	endif;
                            	?>
                        </div>
                        <div class="col-md-4 f-left right-headar">
                            <div class="col-md-12 f-left head-offic-ab mt-0">
                                <h4>Headquarters</h4>
                                <ul><?php
                                if( have_rows('headquarters') ):
                                    $count = 0;     
                                    while ( have_rows('headquarters') ) : the_row(); $count++;
                                ?>      
                                    <li><?php echo the_sub_field('headquarters_list'); ?></li>
                                     <?php endwhile;
                            	endif;
                            	?>
                                </ul>
                            </div>
                            <div class="col-md-12 f-left head-offic-ab">
                                <h4>Branches & subsidiaries</h4>
                                <ul>
                                    <?php
                                if( have_rows('branch') ):
                                    $count = 0;     
                                    while ( have_rows('branch') ) : the_row(); $count++;
                                ?>    
                                 <li><?php echo the_sub_field('branch_list'); ?></li>
                                     <?php endwhile;
                            	endif;
                            	?>
                                </ul>
                            </div>

                            <div class="col-md-12 f-left head-offic-ab">
                                <h4>Certificates</h4>
                                <ul> <?php
                                    if( have_rows('certificate') ):
                                        $count = 0;     
                                        while ( have_rows('certificate') ) : the_row(); $count++;
                                    ?>    
                                     <li><?php echo the_sub_field('certificate_list'); ?></li>
                                     <?php endwhile;
                            	endif;
                            	?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
<!--Sectors-->
                <div class="carousel-item">
                    <div class="col-md-12 f-left padd0">
                        <h4 style="font-size: 18px; margin-bottom: 30px;">Sectors</h4>
                    </div>
                    <div class="col-md-12 f-left padd0">
                    <?php
                    if( have_rows('our_value_options', 5) ):
                        $count = 0;     
                        while ( have_rows('our_value_options', 5) ) : the_row(); $count++;
                        ?>	
                        <div class="col-md-4 col-6 f-left stctore-list ">
                            <div class="col-md-3 f-left padd0">
                                <img width="60" src="<?php echo the_sub_field('sector_image'); ?>">
                            </div>
                            <div class="col-md-9 f-left sectore-list">
                                <h4><?php echo the_sub_field('ourvaluetitle'); ?></h4>
                                <p><?php echo the_sub_field('ourvaluedescription'); ?> </p>
                                <a href="<?php echo the_sub_field('url_of_sector'); ?>">Read more</a>
                            </div>
                        </div>

                    <?php endwhile;
                    endif;
                    ?>    
                    </div>
                </div>
<!--Expertise -->
                <div class="carousel-item">
                    <div class="col-md-12 f-left padd0">
                        <h4 style="font-size: 18px; margin-bottom: 10px;">Expertise</h4>
                    </div>
                    <div class="col-md-12 f-left padd0">

                        <div class="col-md-12 padd0">
                            <div class="col-md-5 padd0 lefta-sus f-left">
                                <img class="img-fluid" src="<?php the_field('expertise_image'); ?>">
                            </div>
                            <div class="col-md-7  righta-expertise f-left ">
                                          
                                <div class="col-md-6 padd0  righta-expertise-20 f-left ">
                                    <ul>
                                        <?php
                                        if( have_rows('expertise_details_left') ):
                                            $count = 0;     
                                            while ( have_rows('expertise_details_left') ) : the_row(); $count++;
                                            ?>	
                                            
                                            <li><?php echo the_sub_field('expertise_text'); ?></li>
                                            
                                            <?php endwhile;
                                            	endif;
                                            	?>
                                                   
                                    </ul>
                                </div>
                                <div class="col-md-6   righta-expertise-20 f-left p-r-0">
                                    <ul>
                                        <?php
                                        if( have_rows('expertise_details_Right') ):
                                            $count = 0;     
                                            while ( have_rows('expertise_details_Right') ) : the_row(); $count++;
                                            ?>	
                                            
                                            <li><?php echo the_sub_field('expertise_text'); ?></li>
                                            
                                            <?php endwhile;
                                            	endif;
                                            	?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--major client-->
                <div class="carousel-item">
                    <div class="col-md-12 f-left padd0">
                        <h4 style="font-size: 18px;">Major Clients</h4>
                    </div>
                    <div class="col-md-12 padd0 major-client">
                        <ul>
                            <?php
                            if( have_rows('clients_details_home', 5) ):
                                $count = 0;     
                                while ( have_rows('clients_details_home', 5) ) : the_row(); $count++;
                                ?>	
                            <li>
                                <a href="#"><img src="<?php echo the_sub_field('client_image'); ?>" /></a>
                            </li>
                           <?php 
                                if($count == 15) break; 
                             endwhile;
                            	endif;
                            	?>
                        </ul>
                      
                       <a class="read-more-major-2" href="javascript:void(0)" data-toggle="modal" data-target="#allclient">View more</a>
                    </div>

                </div>
            
                 <div class="carousel-item">
                   <div class="col-md-12 padd0 f-left">
                      <?php
                            if( have_rows('certificate_image') ):
                                $count = 0;     
                                while ( have_rows('certificate_image') ) : the_row(); $count++;
                                ?>	
                                    <div class="col-md-3 f-left">
                                         <div class="col-md-12 f-left about-award padd0">
                                            <div class="col-lg-12 thumb certifi-img  f-left">
                                               <img class="img-fluid" src="<?php echo the_sub_field('certificate_list'); ?>">
                                            </div>
                                         </div>
                                      </div>
                        <?php 
                                
                             endwhile;
                            	endif;
                            	?>
                   </div>
                   <div class="col-md-12">
                      <a data-toggle="modal" data-target="#allcertificate" class="read-more-major-2" href="javascript:void(0)">View more</a>
                   </div>
                </div>           
            
            </div>

        </div>
    </div>
    <div class="" id="history"></div>
</div>

<!--------------------------------------------------------->

<div id="history" class="container-fluid  section-10 history-bg" style="background-image: url(<?php the_field('history_banner') ?>);">
    <div class="container section-20-c" data-aos="fade-left">
        <div class="row">
            <div class="col-md-12">
                <h2 class="aboutus-title" style="color: #fff;">History</h2>
            </div>
            <div class="col-md-12 ">
                <div class="tab-content col-md-12 padd0">
                    <?php
                    if( have_rows('history_details') ):
                        $count = 0;     
                        while ( have_rows('history_details') ) : the_row(); $count++;
                        ?>	
                    <div role="tabpanel" class="tab-pane <?php if($count==1) echo 'active'; ?>" id="tab<?php echo $count; ?>">
                        <div class="design-process-content">
                            <div class="row">
                                <div class="col-md-12 col-12 f-left">
                                    <div class="col-md-1 f-left">&nbsp;</div>
                                    <div class="col-md-2 f-left text-right" style="padding-right: 40px; padding-top: 6px;">
                                        <h3 class="semi-bold"><?php echo the_sub_field('history_year'); ?></h3>
                                    </div>
                                    <div class="col-md-8 f-left history-details">
                                       <?php echo the_sub_field('history_content'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                      <?php endwhile;
                    	endif;
                    	?>

                </div>

                <div class="col-md-12 f-left padd0">

                    <div id="cmhistory" class="carousel slide">
                        <div class="carousel-inner">
                        <?php
                                if( have_rows('history_details') ):
                                    $count = 0;  
                                    $onetime_show = 10;
                                    $j = 1;$k= 1;
                                    $no_of_history = count(get_field('history_details')); 
                                  
                                    while ( have_rows('history_details') ) : the_row(); $count++;
                                    
                                        if($j == 1 ){
                                    ?>	
                                         <div class="carousel-item <?php if($count == 1) echo 'active'; ?>">
                                            <div class="col-md-12 padd0">
                                                <ul style="margin-bottom: 0px;" class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                                           
                                        <?php } ?>                    
                                                            <li role="presentation" class="<?php if($count == 1) echo 'active' ?>">
                                                                <a href="#tab<?php echo $count; ?>" aria-controls="tab<?php echo $count; ?>" role="tab" data-toggle="tab">
                                                                    <div class="circle-1"></div>
                                                                    <p><?php echo the_sub_field('history_year'); ?> </p>
                                                                </a>
                                                            </li>
                                             <?php if($j % 10 == 0 || $k ==  $no_of_history  ) {  $j =1;
                                        
                                                 ?>	         
                                                </ul>
                                            </div>
                                        </div>
                                       <?php
                                            }
                                            
                                    else{
                                         $j++;
                                    }
                                         $k++;
                                       
                                        endwhile;
                    	endif;
                    	?>  
                    	</div>
                                        	 
                    
                        <a style="width: 3%;" class="carousel-control-prev" href="#cmhistory" role="button" data-slide="prev">
                            <img class="left-hyicon" width="20" src="<?php echo get_template_directory_uri() ;?>/assets/image/send-3.png">
                        </a>
                        <a style="width: 3%;" class="carousel-control-next" href="#cmhistory" role="button" data-slide="next">
                            <img class="right-hyicon" width="20" src="<?php echo get_template_directory_uri() ;?>/assets/image/send-2.png">
                        </a>
                    </div>

                </div>

            </div>

        </div>
        <div class="" id="corporate-philosophy" ></div>
    </div>
</div>

<!------------------------------------------------------->
 

<!------------------------------------------------------>

<div class="container-fluid  section-20">
    <div class="container section-20-b">
        <div class="row">
            <div class="col-md-12 f-left">
                <h2 class="aboutus-title">Corporate Philosophy</h2>
            </div>

            <div class="col-md-12 f-left padd0">
                <div class="col-md-5 f-left padd0">
                    <div class="col-md-12 col-12 f-left stctore-list " style="margin-top: 55px;">
                        <div class="col-md-3 f-left padd0">
                            <img class="missionar" src="<?php the_field('cp_vision_image'); ?>">
                        </div>
                        <div class="col-md-9 f-left sectore-list">
                            <h4>Vision</h4>
                            <p> <?php the_field('cp_vision_content'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 f-left stctore-list ">
                        <div class="col-md-3 f-left padd0">
                            <img class="missionar" src="<?php the_field('cp_mission_image'); ?>">
                        </div>
                        <div class="col-md-9 f-left sectore-list">
                            <h4>Mission</h4>
                            <p>   <?php the_field('cp_mission_content'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 f-left  our-valuear" data-aos="flip-left">
                    <h4 style="font-size: 20px; margin-bottom: 20px; border-bottom: thin solid #f5f5f5;
    padding-bottom: 11px;">Our Value</h4>
                    <?php
                        if( have_rows('our_value') ):
                            $count = 0;     
                            while ( have_rows('our_value') ) : the_row(); $count++;
                            ?>	
                            <div class="col-md-4 f-left  text-center mainvbox">
                                <div class="iconbox-medium">
                                    <img width="30" src="<?php echo the_sub_field('our_value_image'); ?>">
                                </div>
                                <h4><?php echo the_sub_field('our_value_title'); ?></h4>
                                <p> <?php echo the_sub_field('our_value_description'); ?></p>
                            </div>
                          <?php endwhile;
                    	endif;
                    	?>    

                </div>

            </div>
        </div>
        <div class="" id="people"></div>
    </div>
</div>

<!------------------------------------------------------->

<div class="container  section-10">

    <div class="row">
        <div class="col-md-12">
            <h2 class="aboutus-title">People</h2>
        </div>
    </div>

    <div class="row people-sendan" data-aos="fade-right">
        <div class="col-md-12 tabs">
            <div class="col-xl-3 people-sendan f-left" style="padding-left: 1px; padding-bottom: 1px;">
                <ul class="nav nav-pills nav-stacked flex-column">
                <?php
                        if( have_rows('people_details') ):
                            $count = 0;     
                            while ( have_rows('people_details') ) : the_row(); $count++;
                            ?>	
                                
                            <li class="<?php if($count == 1 ) echo 'active' ; ?>"><a href="#tab_<?php echo $count ; ?>" data-toggle="pill"><?php echo the_sub_field('people_title'); ?> </a></li>
                    <?php endwhile;
                    	endif;
                    	?>   
 
                </ul>
            </div>

            <div class="col-xl-9 f-left right-peoarea">
                <div class="tab-content">
                 <?php
                        if( have_rows('people_details') ):
                            $count = 0;     
                            while ( have_rows('people_details') ) : the_row(); $count++;
                            ?>	
                    <div class="tab-pane <?php if($count == 1 ) echo 'active' ; ?>" id="tab_<?php echo $count ; ?>">
 
                        <div class="col-md-12 padd0">
                            <div class="col-md-12 f-left padd0 ceoname">
                                <img class="img-fluid" src="<?php echo the_sub_field('people_image'); ?>">
                            </div>
                            <div class="col-md-12 about-ceo f-left">
                                <div class="col-md-12 f-left mainquutto-peo padd0">
                                    <div class="col-md-1 f-left">
                                        <img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/image/quote.png">
                                    </div>
                                    <div class="col-md-11 f-left">
                                        <p>
                                               <?php echo the_sub_field('people_description'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php endwhile;
                    	endif;
                    	?>   

                </div>
            </div>
        </div>
    </div>
<div class="" id="award"></div>
</div>
<div  class="container-fluid section-20 award-mansec" style="background-image: url(<?php the_field('award_background') ?>);">
    <div class="container ">
        <div class="row">
            <div class="col-md-12" style="padding-left: 22px;">
                <h2 class="aboutus-title">Awards &amp; Achievements</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 project-tab padd0" id="tabs">
                <nav class="tab-bg">
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <?php
                        $award_year = get_terms( 'award-year' , array(  'hide_empty' => true ) );
                        $i = 1;
						if ( $award_year) {
							foreach ( $award_year as $year ) {
								?>
                        <a class="nav-item nav-link show <?php if($i == 1) echo 'active'; ?>" id="nav-<?php echo esc_html( $year->slug ); ?>-tab" data-toggle="tab" href="#nav-<?php echo esc_html( $year->slug ); ?>" role="tab" aria-controls="nav-<?php echo esc_html( $year->slug ); ?>" aria-selected="false"><?php echo esc_html( $year->name ); ?></a>
                        <?php
                        $i++;
							}
						}
						?>
					</div>
                </nav>
               
               <div class="tab-content tab-main-box " id="nav-tabContent" style="background-color: #ffffffdb;">
                        <!------------------------------------------------------------------------->
                     <?php
                    $award_year = get_terms( 'award-year' , array(  'hide_empty' => true ) );
                    $i = 0; $j = 1; 
					if ( $award_year) {
						foreach ( $award_year as $year ) {
						    $k = 1;
						    $i++;
						    ?>
                            <div class="tab-pane fade <?php if ($i == 1 ) echo 'active show' ?>" id="nav-<?php echo esc_html( $year->slug ); ?>" role="tabpanel" aria-labelledby="nav-<?php echo esc_html( $year->slug ); ?>-tab">

                                <!----------------------------------------------->
    
                                <div class="row">
                                    <div id="Awards-<?php echo esc_html( $year->slug ); ?>" class="carousel slide" data-ride="carousel" style="width: 100%;">
    
                                        <div class="carousel-inner ">
                                        
                                        
                                        
                                        
                                        
                                        <?php 
                                            $awards_lists = get_posts(
                                            	array(
                                            		'post_type'      => 'awards',
                                            		'posts_per_page' => -1,
                                            		'award-year' => $year->slug
                                            	)
                                            );
                                            //	print_r($awards_lists);
                                            $post_count = count( $awards_lists );
                                            
                                            
                                            if ( $awards_lists ) {
                                            $count = 0;
                                            ?>
                                             
                                                    <?php
                                					foreach ( $awards_lists as $post ) :
                                						setup_postdata( $post );
                                						 
                                						$featured_img_url = get_the_post_thumbnail_url($post->id,'full');
                                					 
                                						  if($j == 1 ){ 
                                						?> 
                                                     <div class="carousel-item <?php if($count == 0 ) echo 'active' ; ?>">
                                                <div class="col-md-12 ">
                                                <?php } ?>
                                                
                                                             <div class="col-md-3 f-left  <?php echo $year->slug ?>">
                                                        <div class="col-md-12 f-left about-award padd0">
                                                            <div class="col-lg-12 thumb onlyaw-img padd0 f-left">
                                                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-caption="" data-image="<?php echo $featured_img_url; ?>" data-target="#image-gallery">
                                                                  <img class="img-fluid" src="<?php echo $featured_img_url; ?>">
                                                                </a>
                                                            </div>
                                                            <div class="col-md-12 f-left about-award-2">
                                                               <h3> <?php the_title(); ?></h3>
                                                                <p><?php echo get_field('term_content'); ?></p>
                                                                <h4><b>Client </b>: <?php echo get_field('clients_name'); ?></h4>
                                                                <h5><b>Project</b> :<?php echo get_field('award_project_name'); ?></h5>
                                                                <p><b>Date </b>: <?php echo get_field('award_year'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                               
                                                              </li>
                                             <?php if($j % 4 == 0 || $k ==  $post_count  ) {  $j =1;
                                        
                                                 ?>	      
                                                </div>
    
                                            </div> 
                                            <?php
                                            }
                                            
                                            else{
                                                 $j++;
                                            }
                                                 $k++;
                                                  $count++;
                                                     wp_reset_postdata();
                                                    endforeach;
                                                    ?>
                                                
                                               
                                            
                                            <?php
                                            }
                                            ?>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        </div>
                                        <a style="margin-left: -34px; opacity: 1" class="carousel-control-prev" href="#Awards-<?php echo esc_html( $year->slug ); ?>" role="button" data-slide="prev">
                                            <div class="cus-pre">
                                                <img width="10" src="<?php echo get_template_directory_uri() ?>/assets/image/left.png">
                                            </div>
                                        </a>
                                        <a style=" margin-right: -34px; opacity: 1" class="carousel-control-next" href="#Awards-<?php echo esc_html( $year->slug ); ?>" role="button" data-slide="next">
                                            <div class="cus-pre">
                                                <img width="10" src="<?php echo get_template_directory_uri() ?>/assets/image/right.png">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-------------------------------------------->
    
                            </div>

                      

                        <!--------------------------------------------------------------------------->
                        <?php
						}
					}
					
					?>
                    </div>
               

                     

                </div>
            </div>

        </div>
    </div>
</div>


 
<!--------------------------modal------------------->
    
  <div class="modal fade " id="allclient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
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
        if( have_rows('home_more_clients', 5) ):
            while ( have_rows('home_more_clients', 5) ) : the_row(); 
            ?> 
                <li><a href="#"><img src="<?php echo the_sub_field('images'); ?>"></a></li> 
           <?php
            endwhile;
        endif;
            ?>
        </ul>
        
      </div>
      </div>
       
    </div>
   </div>
   </div>

<!------------------------------------------------------------->

<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="modal-header award-mhead">
        <!--h5>All Major Clients</h5-->
        <button type="button" class="close cus-colse" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body award-body">
          <img class="img-fluid" id="image-gallery-image" class="img-responsive" src="">
        </div>
            
        </div>
    </div>
</div>
<!------------------------------------------------------------->
<div class="modal fade" id="allcertificate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
   <div class="modal-dialog modal-xl " role="document">
      <div class="modal-content">
         <div class="modal-header all-mhead">
            <h5>Certificates</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="col-md-12" style="padding-bottom: 30px;">
               <div id="certificate2" class="carousel slide" data-ride="carousel" style="width: 100%;">
                  <div class="carousel-inner ">
                    
                    <?php
                                if( have_rows('more_certificate') ):
                                    $count = 0;  
                                    $onetime_show = 10;
                                    $j = 1;$k= 1;
                                    $no_of_certificate = count(get_field('more_certificate')); 
                                  
                                    while ( have_rows('more_certificate') ) : the_row(); $count++;
                                    
                                        if($j == 1 ){
                                    ?>	
                                         <div class="carousel-item <?php if($count == 1) echo 'active'; ?>">
                                             <div class="col-md-12 ">
                                         <?php } ?>   
                   
                           <div class="col-md-3 f-left">
                              <div class="col-md-12 f-left about-award padd0">
                                 <div class="col-lg-12 thumb certifi-img padd0 f-left">
                                    <img class="img-fluid" src="<?php  echo get_field('certificate_list'); ?> ">
                                 </div>
                              </div>
                           </div>
                            <?php if($j % 4 == 0 || $k ==  $no_of_certificate  ) {  $j =1;
                                        
                                     ?>	         
                                     
                                </div>
                            </div>
                           <?php
                                }
                                
                        else{
                             $j++;
                        }
                             $k++;
                           
                            endwhile;
                    	endif;
                    	?>  
                  
                  
                  </div>
                  
                  
                  
                  
                  <a style="margin-left: -34px; opacity: 1" class="carousel-control-prev" href="#certificate2" role="button" data-slide="prev">
                     <div class="cus-pre">
                        <img width="10" src="<?php echo get_template_directory_uri(); ?>/assets/image/left.png">
                     </div>
                  </a>
                  <a style=" margin-right: -34px; opacity: 1" class="carousel-control-next" href="#certificate2" role="button" data-slide="next">
                     <div class="cus-pre">
                        <img width="10" src="<?php echo get_template_directory_uri(); ?>/assets/image/right.png">
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <!--div class="modal-footer allmodal-foot">
            <button type="button" class="btn closebtn-2" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn savebtn">Save</button> 
            </div-->
      </div>
   </div>
</div>
<?php get_footer(); ?>