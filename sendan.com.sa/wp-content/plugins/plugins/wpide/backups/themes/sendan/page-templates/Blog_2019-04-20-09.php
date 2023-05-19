<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290b0df6b826"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/Blog.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/Blog_2019-04-20-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* 
* Template Name: Blog
*/

get_header();
?>
	<style>
	.news-content {margin-top:-26px;}
	.news-content h3 {color:#005825;font-size:1.5rem;}
	.news-content h3:hover {color: #012912;}
	.news-content .date{margin-bottom:10px;}
	.card-body{padding-bottom:0px;}
    ul.pagination a {color: #005825;}
	.page-item.active .page-link {z-index: 1;color: #fff;background-color: #012912;border-color: #007bff;}
	a.btn.btn-default.btn-sm.pull-right {padding: 5px; border: 1px solid #005825;}
	a.btn.btn-default.btn-sm.pull-right:hover { background: #005825; color: #fff;}
	.bg-light {background-color: #f3f3f3;}
	.pt-3, .py-3 {padding-top: 0.3rem !important;}
	.form-control {border: 1px solid #4CAF50;height: calc(2rem + 0px);font-size: 13px;}
	.row.align-items-center.justify-content-center {padding: 12px 12px;}
	.card.border-danger.golge .btn-primary {background: #005825;border: #012912;}
    select:focus::-ms-value {
            background-color: gray;
            color: orange;
        }
	</style>
    <style>
	.isteColor{
    color: #005825;
  }
  .isteColor:hover{
    color: #353A40;
  }
/*haber akışı list*/
ul.timeline {
  list-style-type: none;
  position: relative;
}
ul.timeline:before {
  content: ' ';
  background: #d4d9df;
  display: inline-block;
  position: absolute;
  left: 29px;
  width: 2px;
  height: 100%;
  z-index: 400;
}
ul.timeline > li {
  margin: 20px 0;
  padding-left: 20px;
}
ul.timeline > li:before {
  content: ' ';
  background: white;
  display: inline-block;
  position: absolute;
  border-radius: 50%;
  border: 3px solid #cd2147;
  left: 20px;
  width: 20px;
  height: 20px;
  z-index: 400;
}
/*vertical carousel*/
.vert .carousel-item-next.carousel-item-left,
.vert .carousel-item-prev.carousel-item-right {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.vert .carousel-item-next,
.vert .active.carousel-item-right {
    -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100% 0);
}

.vert .carousel-item-prev,
.vert .active.carousel-item-left {
-webkit-transform: translate3d(0,-100%, 0);
        transform: translate3d(0,-100%, 0);
}

.border-danger {
    border-color: #012912!important;
}
ul.timeline a{color:#d5b006;}
ul.timeline:before{background:#005825;}
ul.timeline > li:before{border:3px solid #012912;}
.bg-light {background-color: none !important;}
</style>
<div class="container-fluid main-content-home" style="padding-top:0;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$posts_per_page =  get_option( 'posts_per_page' );
			
            $query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => $posts_per_page,
                'paged' => $paged,
                'post_status' => 'publish',
            ));

			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
			        get_template_part( 'template-parts/content/content' );
                endwhile;
            endif;
            ?>
            
            <?php sendan_pagination($query); ?>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <?php get_Sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
    


<?php get_footer() ; ?>