<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "1c0c4960880e545f7724d71f4e8389ca40f04735fc"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/aboutus.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/aboutus_2020-08-24-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * This section use to Mange Home page About Section
 *
 * @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
 */
?>
<div class="container-fluid main-content-home" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">            
                <h2>
                <?php the_field('welcome_message_text'); ?>
                </h2>
                <div class="row main-box-section" style="padding-bottom:20px;">
                   <?php
                    if( have_rows('welcome_message_options') ):  
                        while ( have_rows('welcome_message_options') ) : the_row(); 
                        ?> 
                        <div class="col-md-6 box">
                            <div><i class="<?php echo the_sub_field('icons'); ?>" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h4><b><?php echo the_sub_field('title'); ?></b></h4>
                                <p><?php echo the_sub_field('descriptions'); ?></p>
                            </div>
                            <!--div class="col-md-12 f-left mainquutto">
                                <h2 class="quote-main">
                                  <img width="40" src="<?php echo get_template_directory_uri() ;?>/assets/image/quote.png">
                                 <?php echo the_sub_field('quotation_author'); ?>
                                </h2>
                                <p class="quote-main-2">
                                -- “ <?php echo the_sub_field('quotation_content'); ?> ”
                                <br>
                                </p>
                            </div--->
                        </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                
                </div>
                <div class="row main-box-section" style="background:#e8fff2;border:1px #b5e4c9 solid;">
                    <div class="col-md-12 box">
                        <h3><b><?php the_field('our_value_text'); ?></b></h3>
                    </div>
                     <?php
                    if( have_rows('our_value_options') ):
                        while ( have_rows('our_value_options') ) : the_row(); 
                        ?>
                        <div class="col-md-4 box">
                        
                            <div>
                                <i class="<?php echo the_sub_field('ourvalueicon'); ?>"></i>
                            </div>
                            
                            <div>
                                <h5><?php echo the_sub_field('ourvaluetitle'); ?></h5>
                                <p><?php echo the_sub_field('ourvaluedescription'); ?></p>
                            </div>
                            
                        </div>
                        <?php
                        endwhile;
                    endif;
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>