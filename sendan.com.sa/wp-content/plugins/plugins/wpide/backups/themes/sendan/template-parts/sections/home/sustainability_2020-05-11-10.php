<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "36a295ae66f10625d2857ccde42e42bdc32e208ff5"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/sustainability.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/sustainability_2020-05-11-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>
<div class="container  section-10">

   <div class="row">
   <div class="col-md-12">
    <h2 class="aboutus-title"><?php echo get_field('sustainability_title');	 ?></h2>  
   </div>
  



<div class="col-md-12 ">
<div class="col-md-9 padd0 lefta-sus f-left">
  <img class="img-fluid" src="<?php echo get_field('sustainability_image');	 ?>">
  <div class="col-md-6 img-uptext">
        <?php echo get_field('sustainability_left_content');	 ?>
  </div>
</div>
<div class="col-md-4  righta-sus f-left ">
  <p><?php echo get_field('sustainability_description'); ?></p>
    <a href="<?php echo get_field('sustainability_link'); ?>">Read More</a>
</div>
  
</div>



</div>
<div class="" id="Project"></div>

</div>