<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e297f79842019"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/at-a-glance.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/at-a-glance_2019-04-13-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: At A Glance
*/
get_header();
?>
<div class="container-fluid all-pages-padding" style="padding-top:0;">
	 <div class="container">
	   <?php 
		if(have_posts()):
			while ( have_posts() ) :
				the_post();
				?>      
			    <div class="row">
            	    <div class="col-md-5">
            	    <?php
            			if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'full' , array('class' => 'img-fluid border-solid-1') );
                        }
                        ?>	 
            		</div>
        		    <div class="col-md-7 text-center">
        		    
        		 <div class="row">
        		   <?php
                    if( have_rows('count_with_content') ):     
                        $count = 1; 
                        while ( have_rows('count_with_content') ) : the_row(); 
                        if($count <= 3 ):
                        ?>       
                        	<div class="col-md-4">
                        		<h2><?php echo the_sub_field('heading'); ?></h2>
                        		<p><?php echo the_sub_field('content'); ?></p>
                        	</div>
                        <?php else: ?>
                        	<div class="col-md-4 pt-20">
                        		<h5><?php echo the_sub_field('heading'); ?></h5>
                        		<p><?php echo the_sub_field('content'); ?></p>
                        	</div>
                        <?php endif; ?>
                    	<?php
                    	    $count++;
                    	endwhile;
                    endif;
                    ?>
                	
                </div>
               
            </div>
        </div>
                    	   
    	<div class="row" style="padding-top:20px;">
    	<div class="col-md-3">
    		<h4>SECTORS</h4>
    		<ul>
        		<?php 
                $terms = get_terms( array( 'taxonomy' => 'sector-type' , 'hide_empty' => false ) );
                foreach ($terms as $term ){
                    echo '<li>'.$term->name . '</li>';    
                }?>    		
    		</ul>
    	</div>
    	<div class="col-md-9">
    		<h4>Expertise</h4>
    		<?php 
    		    $get_child_page_list = get_child_page_list('157');
    		    if ( $get_child_page_list->have_posts() ) : ?>
                <ul class="expertise-list">
                <?php while ( $get_child_page_list->have_posts() ) : $get_child_page_list->the_post(); ?>
            
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            
                <?php endwhile; ?>
            </ul>
            <?php endif; wp_reset_postdata(); ?>
    	</div>
    </div>


   <div class="row" style="padding-top:40px;">
    <div class="col-md-12">
	 <h4 style="border-bottom:1px #ccc solid;">Major Clients</h4>
	</div>
   </div>
   <div class="row text-center">
       <?php
       if( have_rows('major_client_images') ):     
            $count = 1; 
            while ( have_rows('major_client_images') ) : the_row(); 
            ?>
            <div class="col-md-2">
                <a href="<?php echo the_sub_field('url'); ?>" target="_blank">
                <img src="<?php echo the_sub_field('image'); ?>" class="img-fluid" title ="<?php echo the_sub_field('title'); ?>" style="border:14px #fff solid;margin-top:10px;"/>
                </a>
            </div>
           
       <?php
            endwhile;
        endif;
        ?>
    </div>
 <?php
endwhile;
endif;
?>
</div>
</div>

<?php get_footer(); ?>