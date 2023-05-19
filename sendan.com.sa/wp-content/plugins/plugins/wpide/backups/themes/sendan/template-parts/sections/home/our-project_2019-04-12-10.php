<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e297ec9de31bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/sections/home/our-project.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/our-project_2019-04-12-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>  <div class="container-fluid our-projects-home">
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