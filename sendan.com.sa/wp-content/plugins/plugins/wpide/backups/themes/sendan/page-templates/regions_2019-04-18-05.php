<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2994e5c68e85"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/regions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/regions_2019-04-18-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Regions
*/
get_header();
?>
<style>
    .r{
    display: inline-block;
    margin-right: 5px;
    padding: 1px 8px;
    border: 1px solid #030;
    font-size: 12px;
    color: #fff !important;
    text-align: center;
    font-weight: bold;
    background: #030; 
    }
    .k{
        font-family: 'Noto Sans', sans-serif;
    /* font-size: 14px; */
    color: #888282;
    font-weight: 500;
    font-style: normal;
    line-height: 24px;
    display: inline-block;
    }
    .title{isplay: inline;
    font-size: 16px;
    color: #063 !important;
    }
    .cmap {
    display: inline;
    margin-left: 5px;
}   
.aln{display:inline;}
.photo {top: 49%;left: 45.8%;position: absolute;}
.photo img {width:50%}
.zoom {
  transition: transform .2s; /* Animation */
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

.photo1 {bottom: 34%;left: 36.5%;position: absolute;}
.photo1 img {width:50%}
.zoom1 {
  transition: transform .2s; /* Animation */
  margin: 0 auto;
}

.zoom1:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
.pad{padding:0;}
.mid-add1{margin:25px 0 15px 0;}
.text-divider {border-bottom:solid 1px #666;margin: 15px 0 15px 0;}
.mid-add1 p {font-size: 14px; color: #888282; margin-top: 0; margin-bottom: .5rem;}
.mid-add p {font-size: 14px; color: #888282; margin-top: 0; margin-bottom: .5rem;}
</style>

<?php 
$region_value = count( get_field('regions_1_details') );
?>

<div class="container-fluid all-pages-padding" style="padding-top:0;">
    <div class="container">
        <div class="row"><img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/GlobalMap1.jpg" alt="The awesome description">
            
            <?php
            for( $i=1 ; $i <= $region_value ; $i++){
                ?>
                 <div class="photo zoom<?php echo $i; ?>">
                     <a href="javascript:void(0)" onClick="show_div<?php echo $i; ?>()">
                     <img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/marker.png" alt="map">
                     </a>
                 </div>
            <?php } ?>
        
        
        </div>
        
        <?php
        // check if the repeater field has rows of data
        if( have_rows('regions_1_details') ):
        	// loop through the rows of data
        	$region_count =1;
            while ( have_rows('regions_1_details') ) : the_row();
            ?>


        
        <div class="row map_content<?php echo $region_count; ?>" style="display:none; margin-top:20px;">
            <?php
            $count = 1; 
             while ( have_rows('reagions_fields') ) : the_row(); ?>
                <div class="mid-add<?php echo $region_count; ?>">
                    <div class="col-md-4 pad" style="display:inline-block;">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/map/saudi.jpg" alt="The awesome description">
                    </div>
                    <div class="col-md-8" style="float:right;">
                        <div class="r">SAUDI ARABIA</div>
                        <div class="k">HEADQUARTERS</div>
                        <br/>
                        <br/>
                        <h5 class="title aln">SENDAN INTERNATIONAL COMPANY, LTD.</h5>
                        <div class="cmap"><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/assets/img/btnMap.gif" alt="map"></a></div>
                        <br/>
                        <p>P.O. Box 11049 Tareeq 114 Jubail Industrial City 31961 Kingdom of Saudi Arabia</p>
                        <p>TEL: +966-13-341-2343FAX: +966-13-341-1288</p>
                        <p>Email : <a href="#">marketing@sendan.com.sa</a></p>
                    </div>
                </div>
                <div class="text-divider"></div>
            <?php 

            endwhile;            
            ?>
        
        </div>
        <?php
        $region_count++;
        endwhile;
        endif;
        ?>
        
        <div class="row map_content1" style="display:none;">
            <div class="mid-add1">
                <div class="col-md-4 pad" style="display:inline-block;">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/map/koreo.jpg" alt="The awesome description">
                </div>
                <div class="col-md-8" style="float:right;">
                    <div class="r">REPUBLIC OF KOREA</div>
                    <div class="k">REPUBLIC OF KOREA</div>
                    <br/>
                    <h5 class="title aln">SENDAN KOREA LTD</h5>
                    <div class="cmap"><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/assets/img/btnMap.gif" alt="map"></a></div>
                    <p>6F, Ryong-eun B/D, 119-1, Bangbae-Ro, Seocho-Gu, Seoul, Korea</p>
                    <p>TEL: +82-2-586-2590FAX: +82-2-586-2593</p>
                    <p>Email : <a href="#">htpark@sendan.co.kr</a></p>
                </div>
            </div>
        </div>

    </div>

</div>
  
    <script>
    <?php 
    // check if the repeater field has rows of data
        if( have_rows('regions_1_details') ):
        	// loop through the rows of data
        	$count =1;
            while ( have_rows('regions_1_details') ) : the_row();
            ?>
               function show_div<?php echo $count++ ?>()
               { 
           		jQuery(".map_content").css('display','block');
        		jQuery(".map_content1").css('display','none');
           
        	   }
        	   <?php
        	   endwhile;
    	   endif;
    	   ?>
	   function show_div1()
   { 
   	jQuery(".map_content").css('display','none');
	jQuery(".map_content1").css('display','block');
   
	   }
    </script>
    
    <?php get_footer() ; ?>