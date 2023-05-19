<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f506c2464ae15"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/sustainability.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/sustainability_2020-05-06-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* 
*   Template Name: Sustainability
*/

get_header(); ?>
<?php
    $count = 1;
   if( have_rows('sustainability_content') ):     
    while ( have_rows('sustainability_content') ) : the_row(); 
        if($count % 2 == 0 )
            $sclass = 'container-fluid  section-20' ;
        else
            $sclass = 'container section-10';
        ?>    
        
<div id="<?php echo strtolower(str_replace(' ', '_', get_sub_field('title'))) ?>" class="<?php echo $sclass ; ?>" <?php if($count == 1 ) echo 'style="padding-top:80px;"' ?>>
   <?php 
   if($count % 2 == 0 ){
   ?><div class="container <?php if($count == 1 ) echo 'section-20-b'; else echo 'section-20-b' ?> ">
   <?php } ?>
        <div class="row">
            <div class="col-md-12 f-left">
                <h2 class="aboutus-title"><?php the_sub_field('title') ?> </h2>
            </div>

            <div class="col-md-12">
                <div class="col-md-5 padd0 mt-20 suspage-img f-left" data-aos="fade-left">
                    <img class="img-fluid" src="<?php the_sub_field('image') ?>">
                </div>

                <div class="col-md-7  mt-20 f-left" data-aos="fade-left">
                    <?php the_sub_field('content') ?>
                </div>
            </div>
        </div>
<?php 
   if($count % 2 == 0 ){ ?>
    </div>
    <?php } ?>
</div>

 <?php
    $count++;
    endwhile;
endif;
?>
<div class="container  section-10">
    <div class="row">
        <div class="col-md-12">
            <h2 class="aboutus-title">HSE Management</h2>
        </div>
    </div>

    <div class="row">
        <div id="hseall" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <?php
              $count = 0;
               if( have_rows('hse_management') ):     
                while ( have_rows('hse_management') ) : the_row(); 
                ?>
                <li data-target="#hseall" data-slide-to="<?php echo $count ?>" class="<?php if ($count == 0) echo 'active' ; ?>"></li>
                 <?php
                $count++;
                endwhile;
                else:
                    echo "sssssssssssssssss";
            endif;
            ?>     
            </ol>
            <div class="carousel-inner height-400">
                <?php
              $count = 0;
               if( have_rows('hse_management') ):     
                while ( have_rows('hse_management') ) : the_row(); 
                ?>
                <div class="carousel-item <?php if ($count == 0) echo 'active' ; ?>">
                    <div class="col-md-12">
                        <h4 style="font-size: 18px; margin-bottom: 30px;"><?php the_sub_field('title') ?></h4>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-5 padd0 suspage-img f-left aos-init aos-animate" data-aos="fade-left">
                            <img class="img-fluid" src="<?php the_sub_field('image') ?>">
                        </div>

                        <div class="col-md-7 f-left aos-init aos-animate" data-aos="fade-left">
                            <p class="all-p"><?php the_sub_field('discription') ?></p>
                        </div>
                    </div>
                </div>
               <!----------------------------------------------------------------->
                <?php
                $count++;
                endwhile;
            endif;
            ?>      

            </div>
        </div>

    </div>
</div>


<?php get_footer(); ?>