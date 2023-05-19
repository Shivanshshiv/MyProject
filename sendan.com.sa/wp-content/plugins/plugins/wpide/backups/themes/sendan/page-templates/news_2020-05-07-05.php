<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f506c2464ae15"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/news.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/news_2020-05-07-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: News
*/
get_header();
?>
 
 
 <div class="container  section-10" style="margin-top:80px;">
	<div class="row">
		<div class="col-md-5 f-left">
			<h2 class="aboutus-title">News</h2> 
		</div>
		<div class="col-md-7 f-left">
			<form action="" method="GET" >
				<div class="col-md-5 f-left">
					<input type="text" class="form-control" placeholder="Search News">
				</div>
				<div class="col-md-5 f-left">
					<select class="form-control" name="newsyear">
						<option>2020</option>
						<option>2019</option>
						<option>2018</option>
						<option>2017</option>
						<option>2016</option>
					</select>
				</div>
				<div class="col-md-2 f-left">
				 <input type="submit" class="btn  btn-primary-2 mb-2" name="search" value="Search"> 
				</div>
			</form>
		</div>
	</div>
	<div class="row">
	 <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$posts_per_page = 2;
			
           $args = array(
                'post_type' => 'news',
                'posts_per_page' => $posts_per_page,
                'paged' => $paged,               
                'post_status' => 'publish',
                'order'        => 'DESC',
                'orderby'      => 'date',
               
            );
            
            if(!empty($_GET["newsmonth"])){
            	 $args['date_query']['month']=$_GET["newsmonth"];
            	 $monthName = date("F", mktime(0, 0, 0, $_GET['newsmonth'], 10));
            } 
            if(!empty($_GET["newsyear"])){
            	$args['date_query']['year']=$_GET["newsyear"];
            }
             $query = new WP_Query( $args);
            ?>
             <?php 
              if( !empty($_GET["newsyear"]) || !empty($_GET["newsmonth"]) ):
              ?>
              <div class="search-heading">
                    LATEST NEWS FROM <?php if(!empty ($monthName) ) echo $monthName . ' '  ; ?> <?php echo $_GET["newsyear"]; ?>
              </div>
              <?php endif; ?>
              <?php

			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
                    get_template_part( 'template-parts/content/content' ,'news' );
                endwhile;
                 wp_reset_postdata();
            else:
                echo "No Post Found" ;
                 
            endif;
            
              ?>
 		
		<!----------------------------------------------------------->
	
				 
				 <?php sendan_pagination($query) ; ?>
		 
			
	</div>
</div>

 

<?php get_footer() ; ?>