<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2987b0fcf20b"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/clients.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/clients_2019-04-19-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/*
* Template Name: Client
*/
get_header() ; ?>

<div class="container-fluid all-pages-padding" style="padding-top:0;">
    <div class="container">
        <div class="car-brands-logo">
            <div class="container">

                <div class="row">
                	<?php
                    if( have_rows('clients_details') ):    
                        while ( have_rows('clients_details') ) : the_row(); 
                        ?>
                    
                    <div class="col-md-3 text-center mb-20">
                        <div class="card">
                            <div class="card-body gmd-5">
                                <img src="<?php echo the_sub_field('client_image'); ?>">
                               <?php if(!empty(get_sub_field('vendor_number') ) ){ ?> <h6 class="pt-2">Vendor no : <?php  echo the_sub_field('vendor_number');   ?></h6> <?php } ?>
                                <a href="<?php  echo the_sub_field('clients_web_url');   ?>" target="_blank">
                                    <p><?php  echo the_sub_field('client_website_name');   ?></p>
                                </a>
                            </div>
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

<?php get_footer() ; ?>