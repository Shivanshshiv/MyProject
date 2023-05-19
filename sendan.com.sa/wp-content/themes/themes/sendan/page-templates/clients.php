<?php
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
                               <h6 class="pt-2"><?php if(!empty(get_sub_field('vendor_number') ) ){ ?> Vendor no : <?php  echo the_sub_field('vendor_number');   ?> <?php } ?></h6>
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