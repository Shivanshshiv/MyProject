<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50878d0e7cd1"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/our-project.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/our-project_2020-03-25-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * This section use to Mange Home page Project Section
 *
 * @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
 */
?>

  <div class="container-fluid our-projects-home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_field('our_projects_title'); ?></h2>
                    <p class="main-p">
                        <?php the_field('our_project_description'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
        <?php
        $left_side_details = get_field('left_side_details');	
        if( $left_side_details ): ?>            
            <div class="col-md-5 text-right" style="padding:0;">
                <img src="<?php echo $left_side_details['image'] ?>" class="img-fluid" /> <a href="<?php echo $left_side_details['url'] ;?>">
                <?php echo $left_side_details['title']; ?></a> 
            </div>
        <?php endif; ?> 
              
            <div class="col-md-2"></div>
             <?php
        $right_side_details_copy = get_field('right_side_details_copy');	
        if( $right_side_details_copy ): ?>              
            <div class="col-md-5 text-left" style="padding:0;">
                <img src="<?php echo $right_side_details_copy['image'] ?>" class="img-fluid" /> 
                <a href="<?php echo $right_side_details_copy['url'] ?>"><?php echo $right_side_details_copy['title'] ?></a> 
            </div>
        <?php endif; ?>
        </div>
    </div>