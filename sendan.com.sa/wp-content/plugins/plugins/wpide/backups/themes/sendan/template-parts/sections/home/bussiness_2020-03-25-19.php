<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f503babbd84c8"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/bussiness.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/bussiness_2020-03-25-19.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><div class="clearfix"></div>

<div class="container-fluid  section-20">
    <div class="container">
        <div class="row" >
		<div class="col-md-12" style="text-align: center;">
            <h2 class="aboutus-title">OUR BUSINESS</h2>
        </div>
    </div>

    <div class="col-md-12 padd0">
        <div id="business" class="carousel slide" data-ride="carousel">
                                    
            <div class="carousel-inner">
		        <?php 
                $query =  get_child_page_list('157')  ;
                $j = 2;
                $k = 1;
                $i=0;
                
                
                while ( $query->have_posts() ) :
                $query->the_post();             
                ?>
				<?php if($i==0 || $i%2==0 ){ echo '<div class="carousel-item '.(($i==0)?'active':'').'">'; } ?>		
                <!--div class="carousel-item active"-->
				
				
                    <div class="row">
									 
                        <div class="col-md-4 business-list">
						 
                            <div class="col-md-12 padd0 busin-img">
							 <?php
                			if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'our-business-thumb' , array('class' => 'img-fluid') );
                            }
                            ?>
                
                            </div>
                            <div class="col-md-12 business-detail">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words( get_the_content() , 25,  '...' , true ); ?></p>

                                	<a href="<?php the_permalink() ?>">Read more..</a>
                            </div>
                        </div>
                    </div>
                <!--/div--->
				<?php echo ($i%2!=0)?'</div>':''; ?>
                <?php $i++; endwhile; ?>
				
            </div>
            <a style="    margin-left: -44px; opacity: 1;" class="carousel-control-prev" href="#business" role="button" data-slide="prev">
                <div class="cus-pre">
                    <i class="fa fa-angle-left"></i>
                </div>
            </a>
            <a style="    margin-right: -44px; opacity: 1;" class="carousel-control-next" href="#business" role="button" data-slide="next">
                <div class="cus-pre">
                    <i class="fa fa-angle-right"></i>
                </div>
            </a> 	
			
        </div>
    </div>

</div>
<div class="" id="sustainability"></div>
</div>