

<?php

/* 
* Template Name: Download Pdf
*/

$postid = $_REQUEST['id'];
if(!$postid){
    wp_redirect(site_url().'/latest-news/#brochure');
}
get_header();

?>


<div class="container-fluid section-10" style="margin-top: 76px; background-color: #fff; float: left;">
   <div class="container">
      <div class="col-md-12 padd0">
      <?php 
		if(have_posts()){
			while ( have_posts() ) :
				the_post();
				?>
				
                    <div class="col-md-8 about-ceo f-left">
            <div class="col-md-12 padd0">
               <h2 class="aboutus-title">Downloads brochure</h2>
            </div>
            <div class="col-md-12 padd0 dw-brochure-text">
            
            <?php  
            if($postid){    
                $post_data = get_post($postid);
                $title = $post_data->post_title;
                $feature_image_url = get_the_post_thumbnail_url($post_data->ID, 'full'); 
            }
            
            
?>              



            <div class="col-md-5 padd0 dw-brochure-text m-auto">
                <img class="img-fluid" src="<?php echo $feature_image_url; ?>">
                <div class="pdf_title"><span id="pdf_name"> <?php echo $title; ?> </span> </div>
          </div>
          
          
            </div>
         </div>
         
                <?php endwhile;
        	   }
                ?>
         <div style="background-color: #f5f5f5;" class="col-md-4 f-left contact-rightar aos-init aos-animate" data-aos="zoom-in">
            <div class="col-md-12">
               <h4>Brochures <b></b></h4>
            </div>
            
            
            <?php echo do_shortcode('[contact-form-7 id="2634" title="download pdf"]'); ?>
            
            
            
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>





<?php get_footer(); ?>
<script>
jQuery(document).ready(function(){
    jQuery('#other_country').hide(); 
  var title= jQuery('#pdf_name').html() ; 
  jQuery("select#brochure_no option[value='"+jQuery.trim(title)+"']").attr('selected', 'selected'); 
});

jQuery('#country_name').on('change', function() {
    var country_val = jQuery('#country_name').val();
    console.log(country_val);
if (country_val == 'Other') {
        
     jQuery('#other_country').show(); 
}
else  {
     jQuery('#other_country').hide(); 
}
});

</script>