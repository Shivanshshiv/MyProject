<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290b0df6b826"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/news.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/news_2019-04-20-06.php") )  ) ){
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
            <div class="col-md-9">
            <?php
            $args = array(
                      'numberposts' => (  get_field('blog_count')  ? get_field('blog_count') : 6 ),
                      'post_type'   => 'news'
                    );                                     
            $post_details  = get_posts( $args );
            if (  $post_details ) {
            foreach (  $post_details as $post ) : 
                setup_postdata( $post ); 
            ?>
                    
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <?php
                            			if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'news-thumb' , array('class' => 'img-fluid') );
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="news-content">
                                                <h3><?php the_title() ; ?></h3>
                                                <div class="date"><i class="fa fa-calendar"></i> <?php echo get_The_date(); ?></div>
                                                <p><?php echo wp_trim_words( get_the_content() , 50 , '...', true ) ; ?></p>
                                                <a href="<?php the_permalink() ;?>">Read More</a>
                                            </div>
                                            <div class="news-footer">
                                                <div class="news-author">
                                                    <ul class="list-inline list-unstyled">
                                                        <li class="list-inline-item text-secondary">

                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    wp_reset_postdata();
                endforeach;
            }
            ?>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="card border-danger golge">
                        <div class="card-header">
                            <a href="anasayfa.html" class="isteColor">
                                <h5 class="text-center m-2" style="font-weight: bold">Search News by month and year</h5>
                            </a>
                        </div>

                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-12 pt-3">
                                        <div class="form-group">
                                            <select id="inputState" class="form-control">
                                                <option selected>Year</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pt-3">
                                        <div class="form-group">
                                            <select id="inputState" class="form-control">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-block">Search</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    




<?php get_footer() ; ?>