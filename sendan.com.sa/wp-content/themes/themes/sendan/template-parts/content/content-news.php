
 <div class="col-md-12 news-mainar" data-aos="fade-left">
    <div class="col-md-3 news-img f-left">
      <?php
		if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'news-thumb' , array('class' => 'img-fluid') );
        }
        ?> 
    </div>

   <div class="col-md-9 f-left news-details" >
        <h4><?php the_title(); ?></h4>
        <!--<h5><i class="fa fa-clock" aria-hidden="true"></i> Record : <?php echo get_field('record_time'); ?></h5>-->
		<h5><i class="fa fa-clock" aria-hidden="true"></i> Published: <?php echo get_The_date('d-m-Y'); ?> </h5>
	  <p><?php echo wp_trim_words( get_the_content() , 50 , '...', true ) ; ?></p> 
		
		<a href="<?php the_permalink() ;?>">Read More</a>
	</div>
</div> 