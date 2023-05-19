<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2966d3320f00"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/our-business.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/our-business_2019-04-18-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/*
* Template Name: Our Business
*/
get_header();
?>
<div class="container-fluid all-pages-padding">
    <div class="container cus-our-business">
        <div class="row" style="margin-right:0px;margin-left:0px;">
            <?php 
            $the_query = get_child_page_list('157');
           
            if ( $the_query->have_posts() ) {
                $count = 1;
	while ( $the_query->have_posts() ) {
                    
                    //for($i = 1; $i <=2 ; $i++){
                    
            ?>
             <div class="col-md-6">
                <div class="row inner">
                    <div class="col-md-6" style="padding:0;">
                        <img src="img/our_business_img_1.jpg" class="img-fluid" />
                    </div>
                    <div class="col-md-6 text-center">
                        <h5><?php echo $count ; ?> <?php the_title() ; ?></h5>
                        <p>SENDAN with its commitment to be a automation & telecom system integrator of choice, delivers high quality and affordable solutions to different industry segments.</p>
                        <a href="integrated-turnkey-solution-provider-of-telecommunication-automation-system.html">read more..</a>
                    </div>
                </div>
            </div>
            
            <?php
                   // }
              
                $count++;
                wp_reset_postdata();
	}
            }
        ?>      
            
        </div>
    </div>
</div>


<?php get_footer(); ?>