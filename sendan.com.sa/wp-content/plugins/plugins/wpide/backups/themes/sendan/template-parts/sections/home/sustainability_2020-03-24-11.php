<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f508ab9e9831c"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/sustainability.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/sustainability_2020-03-24-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><div  class="container  section-10" >

   <div class="row">
   	<?php 
    		if(have_posts()):
    			while ( have_posts() ) :
    				the_post();
    				?>
   <div class="col-md-12" style="text-align: center;">
    <h2 class="aboutus-title">SUSTAINABILITY</h2>  
   </div>
  


<div class="col-md-12 padd0">
<div class="col-md-9 padd0 lefta-sus f-left">
                     <?php
                       if( have_rows('sustainability_images') ):     
                        while ( have_rows('sustainability_images') ) : the_row(); 
                            ?>    

                     <?php
                        endwhile;
                    endif;
                    ?>
</div>
<div class="col-md-4  righta-sus f-left ">
  <p>  <?php the_content() ; ?></p>
    <a href="#">View More</a>
</div>
  
</div>
 <?php endwhile;
            endif;
            ?>

</div>
<div class="" id="Project"></div>

</div>
