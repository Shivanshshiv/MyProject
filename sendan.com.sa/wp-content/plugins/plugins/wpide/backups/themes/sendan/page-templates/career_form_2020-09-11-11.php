<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "1c0c4960880e545f7724d71f4e8389cafcb30b35ed"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/career_form.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/career_form_2020-09-11-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Career Form
*/

get_header();
?>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 

  
  
<!-- career form -->
<div class="container  section-10" style="margin-top:80px;">
<div class="row">
  <div class="col-md-12 f-left">
  <h2 class="aboutus-title">Join Us</h2> 
</div>

</div>

<div class="row">
<div class="col-md-12 aos-init" data-aos="fade-left">
 <div class="col-md-12 col-lg-6 bdr news-mainar" style="padding:10px 25px; margin:auto;">
 <?php echo do_shortcode('[contact-form-7 id="2109" title="join us"]'); ?>
    
   </div>
</div>

   
  </div>

<!-------------------------------------------->

 </div>
</div>
<!-- career form -->
<script>
 

jQuery(function($) {
    jQuery("select.form-control option:first-child").attr('disabled', 'disabled');// Disable the first value/label ---
    jQuery('#privacy').parent().removeClass('wpcf7-list-item-label')
  });

</script>


  <script>
  
  jQuery( function() {
    jQuery( "#dob" ).datepicker({
        dateFormat: "dd/mm/yy",
        changeMonth: true,
        changeYear: true,
        maxDate: "-18Y",
        minDate: "-100Y",
        yearRange: "-100:-16"
    });
    
  } );
  
jQuery(document).ready(function(){
    
     

 jQuery('#numberonly').bind('keyup blur',function(){ 
    var node = jQuery(this);
    node.val(node.val().replace(/[^0-9+]/g,'') ); }
);


jQuery("#numberonly")[0].maxLength = 15;
// OR:
jQuery("#numberonly").attr('maxlength', 15);
// OR you can use prop if you are using jQuery 1.6+:
jQuery("#numberonly").prop('maxLength', 15);

    
})

// jQuery('#country').on('change', function() {
//     var country_val = jQuery('#country').val();
//     console.log(country_val);
// if (country_val == 'Saudi Arabia') {
    
// jQuery('#recipient').val("hariom.kumar@crebritech.com");
// }
// else  {
//     jQuery('#recipient').val("anandy075@gmail.com");
// }
// });






  </script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php get_footer(); ?>