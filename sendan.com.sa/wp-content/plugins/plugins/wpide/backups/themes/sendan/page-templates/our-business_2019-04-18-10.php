<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2966d3320f00"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/our-business.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/our-business_2019-04-18-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/*
* Template Name: Our Business
*/
get_header();
?>
<div class="container-fluid all-pages-padding">
    <div class="container cus-our-business">
        <div class="row" style="margin-right:0px;margin-left:0px;">
            <?php 
            $query =  get_child_page_list('157')  ;
            $counts = array(
    '',
    'One',
    'Two',
    'Three',
    'Four',
);

$i = 0; 
$j = 2;
while ( $query->have_posts() ) :
    $query->the_post();
    

?>
			 <div class="col-md-6 <?php ?> ">
			 <div class="row inner">
			 <?php if( $query->current_post >= $i && $query->current_post < $j ) : ?>	  
			  <div class="col-md-6" style="padding:0; text-align:right;" >
				<img src="img/our_business_img_9.jpg" class="img-fluid" />
			  </div>			 
			  <div class="col-md-6 text-center">		  
				<h5>Electrical & Instrumentation Construction</h5>
				<p>Our commendable reputation in E&I Construction has been built over 20 years of successful execution of various large projects for major companies..</p>
				<a href="electrical-instrumentation-construction.html">read more..</a>
				 </div>	
				 
				 
				<?php endif; ?> 
				 
				 
			 </div>
		     </div>
		     
<?php endwhile ?>