<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50878d0e7cd1"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/sections/home/our-project.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/our-project_2020-03-25-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * This section use to Mange Home page Project Section
 *
 * @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
 */
?>
<!-------------------------our---------------------------------->


<div class="container-fluid  section-project" >
  <div class="inner-bg">
    <div class="row">
  <div class="container">
    
   <div class="col-md-12 col-12" style="text-align: center;">
    <h2 class="aboutus-title">Project</h2>  
   </div>
 

  <div class="col-md-12 col-12">
  <div class="container-fluid">
     <div class="col-md-12 col-12">  

      <div id="verticalproject" class="carousel vert slide" data-ride="carousel" data-interval="3000">
        <ul class="carousel-indicators cus-projectlist">
            <li data-target="#verticalproject" data-slide-to="0" class="active"></li>
            
        </ul>
        <div class="carousel-inner">
       
        <?php
        $left_side_details = get_field('left_side_details');	
        if( $left_side_details ):  
            $k=1;
            while ( get_field('left_side_details') ) :
            ?> 
       
            <div class="carousel-item<?php echo ($count++ == 0 ) ? 'active' : '' ; ?>">
          <div class="col-md-12 ">
           <div class="col-md-3 f-left">&nbsp;</div>
           <div class="col-md-6 f-left project-deatals">
            <div class="col-md-12 project-imgpr">
             <img  src="<?php echo $left_side_details['image'] ?>">
            </div>
             <h4><?php the_field('our_projects_title'); ?></h4>
             <p><?php the_field('our_project_description'); ?></p>
            
           </div>
         </div>
            </div>
              <?php 
              $k++;
              endwhile; 
              endif; ?> 
          
        </div>

        <!--
        <a class="carousel-control-prev" href="#verticalproject" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#verticalproject" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>  -->

     

    </div>


    </div>
  </div>  
</div>
</div>
</div>
<div class="" id="Career"></div>
</div>


</div>
 