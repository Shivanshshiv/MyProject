<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "1c0c4960880e545f7724d71f4e8389cad0c345246b"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/meet-our-people-new.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/meet-our-people-new_2020-08-31-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Meet our people New
*/
get_header();
?>
<?php
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
        ?>
 <div  class="container-fluid  section-10  meet_ttall"  style=" margin-top: 56px; background-image: url(<?php echo $featured_img_url; ?>);  "  >
   <div class="container">
      <div class="col-md-12 padd0">
         <div class="col-md-12 about-ceo f-left padd0">
            <div class="col-md-12 padd0">
               <h2 class="aboutus-title" style="color: #fff;"> <?php the_field('page_heading'); ?> </h2>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>

<div class="container  section-10" data-aos="fade-left">
   <div class="row">
      <div class="col-md-12">
         <h2 class="aboutus-title">Sendan Executive Committee</h2>
      </div>
   </div>
   <div class="row">
     <?php   
       $args = array(
                      'numberposts' => -1,
                      'post_type'   => 'our_people',
                      
                       
                    );                                     
        $post_details  = get_posts( $args );
        if (  $post_details ) {
            foreach (  $post_details as $post ) : 
                setup_postdata( $post ); 
                ?>
                <div class="col-md-4 executive_all">
                     <div class="col-md-12 propic_ex">
                         <?php
            			if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'our-people-thumb' , array('class' => 'img-fluid') );
                        }
                        ?>
                     </div>
                     <h4><?php the_title() ; ?></h4>
                     <!--h5>ERP Manager</h4-->
                     <a href="<?php the_permalink(); ?>">Get to know me <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
          <?php 
                endforeach;
            }
        ?>
      
   </div>
</div>
 
<?php get_Footer() ; ?>