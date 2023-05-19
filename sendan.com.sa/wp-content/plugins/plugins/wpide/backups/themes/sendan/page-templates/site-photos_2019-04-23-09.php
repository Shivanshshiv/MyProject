<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29891ec0b68f"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/site-photos.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/site-photos_2019-04-23-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* 
* Template Name: Site Photos
*/
get_header(); 
?>
	<style>
.portfolio .thumbnail {
    position: relative;
}

.portfolio .thumbnail:hover {
    cursor: pointer;
}

.portfolio .caption {
    bottom: 0;
    position: absolute;
}

.portfolio .btn {
    opacity: 0.75;
}
.thumbnail img {
    width: 100%;
}
.modal-body img {
    width: 100%;
}
.mar{margin-top:30px;}
.shadow-depth-3:hover{
  -webkit-box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
  -moz-box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
  box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19); 
  }
</style>
<?php
	$posts_per_page =  get_option( 'posts_per_page' );
			 $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $query = new WP_Query(array(
                'post_type' => 'site_phots',
                'posts_per_page' => $posts_per_page,
                'paged' => $paged,
                'post_status' => 'publish',
            ));

?>

<div class="container-fluid all-pages-padding" style="padding-top:0;">
    <div class="container">
       
       
        <div class="row portfolio">
        <?php 
        if ( $query->have_posts() ) :
			while ( $query->have_posts() ) : $query->the_post();
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
  
			?>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail shadow-depth-3 mb-30px">
      
                            
                    <a href="#" class="pop">         
                        <img class="img-responsive" src="<?php echo $featured_img_url; ?>" alt="<?php the_title() ; ?>" style="width:100%;max-width:300px">
                    </a>
                    <div class="caption"></div>
                </div>
            </div>
            
            <?php 
            endwhile;
            wp_reset_postdata();
        endif;
       ?>
        </div>
       <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">              
              <div class="modal-body">
              	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
              	<span class="sr-only">Close</span></button>
                <img src="" class="imagepreview" style="width: 100%;" >
                <div class="caption"></div>
              </div>
            </div>
          </div>
        </div>
     
    </div>
    <br/>
    <div class="container">
       <?php sendan_pagination($query) ; ?>
    </div>
</div>

   <script>     
    
 jQuery(function() {
		jQuery('.pop').on('click', function() {
			jQuery('.imagepreview').attr('src', jQuery(this).find('img').attr('src'));
			jQuery('.caption').html( jQuery(this).find('img').attr('alt') );
			jQuery('#imagemodal').modal('show');   
		});		
		// Get the <span> element that closes the modal
        

});
</script>
<?php get_footer(); ?>