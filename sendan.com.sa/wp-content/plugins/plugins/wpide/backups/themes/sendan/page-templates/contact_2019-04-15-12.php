<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290ece391d1d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/contact.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/contact_2019-04-15-12.php") )  ) ){
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
                <br style="clear:both">
                  <h3 style="margin-bottom: 25px; text-align: left;">Contact Form</h3>
                <?php $cotact_form_shortcode = get_field('contact_form_shortcode'); 
                echo do_shortcode($cotact_form_shortcode) ; ?>            
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
                    <div class="row">
                        <?php
                        while( have_rows('country_name') ): the_row(); 
                        ?>
                        
                            <div class="col-md-4 ap m-b20 ">
                                <h5><?php echo get_sub_field('city_title' ); ?> </h5> 
                                 <?php echo get_sub_field('location_details' ); ?>
                            </div>
                       
                        
                        <?php endwhile; ?>
                      </div>
                      <section> &nbsp; </section>   
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