<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2994e5c68e85"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/regions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/regions_2019-04-18-07.php") )  ) ){
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


.pad{padding:0;}
.mid-add1{margin:25px 0 15px 0;}
.text-divider {border-bottom:solid 1px #666;margin: 15px 0 15px 0;}
.mid-add1 p {font-size: 14px; color: #888282; margin-top: 0; margin-bottom: .5rem;}
.mid-add p {font-size: 14px; color: #888282; margin-top: 0; margin-bottom: .5rem;}
</style>

<?php 
$region_data = get_field('regions_1_details') ;
$region_value = count( $region_data);
?>

<div class="container-fluid all-pages-padding" style="padding-top:0;">
    <div class="container">
        <div class="row"><img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/GlobalMap1.jpg" alt="The awesome description">
            
            <?php
            for( $i=1 ; $i <= $region_value ; $i++){
                ?>
                 <div class="photo<?php echo $i; ?> zoom" style="position: absolute;<?php echo $region_data[$i-1]['icon-css' ] ; ?>">
                     <a href="javascript:void(0)" onClick="show_div<?php echo $i; ?>()">
                     <img class="img-responsive map-icon-img" src="<?php echo get_template_directory_uri() ;?>/assets/img/marker.png" alt="map">
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
                        <img class="img-responsive" src="<?php echo the_sub_field('office_image'); ?>" 
                        alt="<?php the_sub_field('regions_name'); ?>">
                    </div>
                    <div class="col-md-8" style="float:right;">
                        <div class="r"><?php the_sub_field('regions_name'); ?></div>
                        <div class="k"><?php the_sub_field('regions_type'); ?></div>
                        <br/>
                        <br/>
                        <h5 class="title aln"><?php the_sub_field('office_name'); ?></h5>
                        <div class="cmap"><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/assets/img/btnMap.gif" alt="map"></a></div>
                        <br/>
                        <p><?php the_sub_field('office_address'); ?></p>
                        <p>TEL: <?php the_sub_field('office_tel_number'); ?>FAX: <?php the_sub_field('office_fax_number'); ?></p>
                        <p>Email : <a href="#"><?php the_sub_field('office_email'); ?></a></p>
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
        
        

    </div>

</div>
  
    <script>
    <?php
    for( $i=1 ; $i <= $region_value ; $i++){
        ?>
       function show_div<?php echo $i; ?>()
       { 
           <?php 
           for($j = 1; $j<=$region_value; $j++ ){ 
                if($j == $i){    
               ?>   
               alert('show_div<?php echo $i; ?>');
           		jQuery(".map_content<?php echo $j; ?>").css('display','block');
           		<?php 
                }
                else{ ?>
            		jQuery(".map_content<?php echo $j; ?>").css('display','none');
    		<?php }
    		} ?>
   
	   }
	   <?php
    }
   ?>
	   
    </script>
    
    <?php get_footer() ; ?>