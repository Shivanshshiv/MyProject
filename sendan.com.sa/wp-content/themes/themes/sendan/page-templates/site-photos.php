<?php
/* 
* Template Name: Site Photos
*/
get_header(); 
?>
	<style>
	.mb-10px{
	    margin-bottom:30px;
	}
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
                <div class="modal-header">
                    <h6 class="modal-title" id="myModalLabel"></h6>
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  	<span class="sr-only">Close</span></button>
                </div>
                
                    
              	<div class="modal-body">
                    <img src="" class="imagepreview" style="width: 100%;" >
                </div>
                    
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
			jQuery('.modal-title').html( jQuery(this).find('img').attr('alt') );
			jQuery('#imagemodal').modal('show');   
		});		
		// Get the <span> element that closes the modal
        

});
</script>
<?php get_footer(); ?>