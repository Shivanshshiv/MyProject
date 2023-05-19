<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50d8c4e88ce4"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/sustainability.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/sustainability_2020-03-23-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>
<div  class="container  section-10" >

   <div class="row">
   <div class="col-md-12" style="text-align: center;">
    <h2 class="aboutus-title">SUSTAINABILITY</h2>  
   </div>
  


<div class="col-md-12 padd0">
<div class="col-md-9 padd0 lefta-sus f-left">
   <?php
                       if( have_rows('sustainability_images') ):     
                        while ( have_rows('sustainability_images') ) : the_row(); 
                            ?>    
                           <img src="<?php echo  ( the_sub_field('image') ) ; ?> " class="img-fluid" />
                          
                        <?php
                        endwhile;
                    endif;
                    ?>
</div>
<div class="col-md-4  righta-sus f-left ">
  <p>Knowing that the facilities we build and maintain represent the growth of industries and economies we serve inspires our thinking and action. Yet, we strongly believe that for growth to be sustainable, the communities where we operate must continue to thrive. Thus, we are fully committed to promoting sustainable growth through innovative,</p>
    <a href="#">View More</a>
</div>
  
</div>
</div>
<div class="" id="Project"></div>

</div>
