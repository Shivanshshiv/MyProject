<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e297ec9de31bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/sections/home/about.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/about_2019-04-12-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?> <div class="container-fluid main-content-home">
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