<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "36a295ae66f10625d2857ccde42e42bd5af7d27c91"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/page-templates/our-projects.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/page-templates/our-projects_2020-05-07-15.php") )  ) ){
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
		<div class="col-md-9 f-left padd0">
			<form method="GET" action="<?php echo site_url() ?>/our-project/">
				<div class="col-md-4 f-left">
				    
				    <input type="hidden" name="term_slug" value="<?php if(!empty( $_GET['term_slug'] ) ) echo $_GET['term_slug'];  ?>" >
                    <input type="password" class="form-control" name="search-text" placeholder="Search"  value="<?php if(!empty( $_GET['search-text'] ) ) echo $_GET['search-text'] ?>" >
					 
				</div>
				<div class="col-md-3 f-left">
					<select class="form-control">
    					<?php
                                $sector_cat_slug = get_queried_object()->slug;
                                $sector_type = get_terms( 'sector-type' , array(  'hide_empty' => false ) );
                                
                                    if ( $sector_type ) {
        							foreach ( $sector_type as $sector ) {
        							    $select_value = ( $sector->slug == $_GET['term_slug'] ) ? 'selected = "selected"' : '' ; 
        							    echo ' <option data-url="'.site_url().'/sector-type/'.$sector->slug.'" value="'.esc_html( $sector->slug ).'"  ' . $select_value .' >'.esc_html( $sector->name ).'</option>' ;                    								
        							}
        						}
        					?>
					</select>
				</div>
				<div class="col-md-3 f-left">
					<select class="form-control">
						<option>2020</option>
						<option>2019</option>
						<option>2018</option>
						<option>2017</option>
						<option>2016</option>
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
			<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Sector</th>
						<th width="400">Project</th>
						<th>Client</th>
						<th>Location</th>
						<th>Completion</th>
					</tr>
				</thead>
				<tbody>
					<?php
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        			$posts_per_page =  get_option( 'posts_per_page' );
        			
                    $args = array(
                        'post_type' => 'projects',
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
                        'post_status' => 'publish',
                        's' => ( !empty($_GET['search-text'] ) ? $_GET['search-text'] : '' ) ,
                        'tax_query' => array(
                    		array(
                    			'taxonomy' => 'project-category',
                                'field'    => 'slug',
                                'terms'    => array('major-project')
                    		),
                    		
                    	),
        	
                    );
                    if( !empty( $_GET['term_slug'] ) ) {
                        $args['tax_query'] = array(
                           'relation' => 'AND',
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
        				print($sector_types);
        			?>
					<tr>
						<td><?php echo $sector_types[0] ?></td>
						<td><a href="#" data-toggle="modal" data-target="#projectdd"><?php the_title(); ?></a>
						</td>
						<!-- Modal -->
						 <td><?php the_field('p_client') ; ?></td>
                    <td><?php the_field('p_location' ); ?></td>
                    <td><?php the_field('p_year' ); ?></td>
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
	<?php sendan_pagination($query); ?>
	</div>
</div>




<?php get_footer() ; ?>