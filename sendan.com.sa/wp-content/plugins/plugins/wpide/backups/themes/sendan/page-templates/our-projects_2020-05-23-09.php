<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0bdae52e11cf3cce78c578ddf3df4d1c54a3b55d6b"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/our-projects.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/our-projects_2020-05-23-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/* 
* Template Name: Our Projects
*/
get_header(); 
?>

<div class="container  section-10" style="margin-top:80px;">
	<div class="row">
		<div class="col-md-3 f-left">
			<h2 class="aboutus-title">Projects</h2> 
		</div>
		<div class="col-md-9 f-left padd0 filter-mobile">
			<form method="GET" action="<?php echo site_url() ?>/our-project/">
				<div class="col-md-4 f-left">
				    
				    <!--<input type="hidden" name="term_slug" value="<?php if(!empty( $_GET['term_slug'] ) ) echo $_GET['term_slug'];  ?>" >-->
                    <input type="text" class="form-control" name="search-text" placeholder="Search"  value="<?php if(!empty( $_GET['search-text'] ) ) echo $_GET['search-text'] ?>" >
					 
				</div>
				<div class="col-md-3 f-left">
				<?php
				$sector_cat_slug = get_queried_object()->slug;
                    $sector_type = get_terms( 'sector-type' , array(  'hide_empty' => false ) );
                  //print_r($sector_type);  
                    ?>
					<select name="term_slug" class="form-control">
    					<?php
    					    
                                
                                
                                    if ( $sector_type ) {
                                         echo ' <option value="">ALL</option>' ;                    								
        							foreach ( $sector_type as $sector ) {
        							    $uterm  = ( !empty($_GET['term_slug'] ) ? $_GET['term_slug'] : '' ) ;
        							     
        							    $select_value = ( $sector->slug == $uterm ) ? 'selected = "selected"' : '' ; 
        							    echo ' <option data-url="'.site_url().'/sector-type/'.$sector->slug.'" value="'.esc_html( $sector->slug ).'"  ' . $select_value .' >'.esc_html( $sector->name ).'</option>' ;                    								
        							}
        						}
        					?>
					</select>
				</div>
				<div class="col-md-3 f-left">
					<select name='p_year'  class="form-control">
					<option value="">ALL</option>
						<option value="2020">2020</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
					</select>
				</div>
				<div class="col-md-2 f-left">
					<button type="submit" class="btn  btn-primary-2 mb-2">Search</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 f-left">
		<div class="table-responsive">
			<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				<thead>
					<tr>
					<th>Sector</th>
						<th width="400">Project</th>
						<th>Client</th>
						<th>Location</th>
						<th>Start Date</th>
						<th>End Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        			$posts_per_page =  get_option( 'posts_per_page' );
        			$abc =  ( !empty($_GET['search-text'] ) ? $_GET['search-text'] : '' ) ; 
                    $args = array(
                            'post_type' => 'projects',
                            'posts_per_page' => $posts_per_page,
                            'paged' => $paged,
                            'order' => 'ASC',
                            'post_status' => 'publish',
                            's' => ( !empty($_GET['search-text'] ) ? $_GET['search-text'] : '' ) , 
                
                        );  
                        
                        // $args['tax_query'] = array(
                        //      'relation' => 'AND',
                        //         array(
                        //             'taxonomy' => 'project-category',
                        //             'field'    => 'slug',
                        //             'terms'    => array( 'our-project' ,'major-project'),
                        //         ),
                                
                        //     );
                            
                            if( !empty( $_GET['p_year'] ) ) {
                     
                                $args['meta_query']	= array(
                        		'relation'		=> 'OR',
                            		array(
                            			'key'		=> 'p_year',
                            			'value'		=> $_GET['p_year'],
                            			'compare'	=> 'LIKE'
                            		),
                        		);
                            }
                                
                                
                    if( !empty( $_GET['term_slug'] ) ) {
                        $args['tax_query'] = array(
                        //   'relation' => 'AND',
                          array(
                    			'taxonomy' => 'sector-type',
                    			'field'    => 'slug',
                    			'terms'    => ( !empty( $_GET['term_slug'] )  ? $_GET['term_slug']  : '' ),
                    		) );         
                    }
                    
                    
                    
                    $query = new WP_Query( $args); 
                    
        			if ( $query->have_posts() ) :
        				while ( $query->have_posts() ) : $query->the_post();
        				$sector_types = wp_get_post_terms( get_the_id(), 'sector-type', array("fields" => "names") );
        				$featured_img_url = get_the_post_thumbnail_url(get_the_id(),'full');
        				//print_r($sector_types);
        			?>
					<tr>
					<td><?php echo $sector_types[0] ?></td>
						<td><a href="#" data-toggle="modal" data-target="#projectdd<?php echo get_the_id(); ?>"><?php the_title(); ?></a>
						
						<div class="modal fade" id="projectdd<?php echo get_the_id(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
                        	<div class="modal-dialog modal-lg modal-dialog-centered " role="document">
                        		<div class="modal-content">
                        			<div class="modal-header all-mhead">
                        				<h5><?php the_title(); ?></h5>
                        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span>
                        				</button>
                        			</div>
                        			<div class="modal-body">
                        				<div class="col-md-12 padd0 f-left">
                        					<img class="img-fluid" src="<?php the_field('project_details_image'); ?>">
                        				</div>
                        				<div class="col-md-12 f-left news-details" style="margin-top: 20px;">
                        					<h5><i class="fa fa-clock" aria-hidden="true"></i> Record : <?php the_field('record_time'); ?></h5>
                        					<h5><i class="fa fa-clock" aria-hidden="true"></i> Published : <?php the_date(); ?>
                                            <?php the_content(); ?>
                        
                            
                           </h5>
                        				</div>
                        			</div>
                        			<!--div class="modal-footer allmodal-foot">
                                <button type="button" class="btn closebtn-2" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn savebtn">Save</button> 
                              </div-->
                        		</div>
                        	</div>
                        </div>
						</td>
						<!-- Modal -->
						 <td><?php the_field('p_client') ; ?></td>
                    <td><?php the_field('p_location' ); ?></td>
                   <!-- <td><?php the_field('p_year' ); ?></td>-->
                    <td><?php the_field('p_start_date' ); ?></td>
                    <td><?php the_field('p_end_date' ); ?></td>
					</tr>
				<?php 
                    endwhile;
                    wp_reset_postdata();
                     else: 
                        echo "<tr> <td colspan='5' class='text-center' > No Project Found </td> </tr>";
                    endif;
                    ?>	 
					 
				</tbody>
			</table>
			</div>
		</div>
	<?php sendan_pagination($query); ?>
	</div>
</div>




<?php get_footer() ; ?>