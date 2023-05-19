<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29d7f8492138"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/our-projects.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/our-projects_2019-04-19-11.php") )  ) ){
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
<style>

	.pagination {
    float: right;
}
	select.form-control.input-sm {
    background: #276e46 !important;
    border: 0px  !important;
    border-radius: 0px  !important;
    color: #FFF  !important;
        font-weight: 500 !important;
    font-size: 13px !important;
    font-family: 'Roboto', sans-serif;
    -webkit-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
-moz-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
}


.pagination>li>a, .pagination>li>span{
	position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #428bca;
    text-decoration: none;
    border: 1px solid #ddd;
     background: #276e46 !important;
    border: 0px  !important;
    border-radius: 0px  !important;
    color: #FFF  !important;
    font-weight: 500 !important;
    font-size: 13px !important;
    font-family: 'Roboto', sans-serif;
    -webkit-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
-moz-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
}

.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #276e46 !important;
    color: #FFF!important;
    font-size: 13px!important;
     font-family: 'Roboto', sans-serif;
    font-weight: 500!important;
}
tr.even {
    background: #bfbfbf!important;
    color: #000!important;
    font-size: 13px!important;
    font-weight: 500!important;
     font-family: 'Roboto', sans-serif;
}

th.sorting,.sorting_asc {
      font-family: 'Roboto', sans-serif;
      font-weight:500 !important;
    border:1px solid #FFF !important;
    color: #FFF;
    border: 1px solid #93CE37;
    border-bottom: 3px solid #9ED929;
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#30b3ff+0,00a1ff+100 */
background: rgb(48,179,255); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(48,179,255,1) 0%, rgba(0,161,255,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(48,179,255,1) 0%,rgba(0,161,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(48,179,255,1) 0%,rgba(0,161,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#30b3ff', endColorstr='#00a1ff',GradientType=0 ); /* IE6-9 */

    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius: 5px 5px 0px 0px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

table#example{border:0px !important;}

input.form-control.input-sm{ background: #276e46 !important;
    border: 0px  !important;
    border-radius: 0px  !important;
    color: #FFF  !important;
        font-weight: 500 !important;
    font-size: 13px !important;
    font-family: 'Roboto', sans-serif;
    -webkit-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
-moz-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);}
	table#example a {
    color: #fff;
}
.hyper{color:#000 !important;}
</style>

<div class="container-fluid all-pages-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="dataTables_length" id="example_length">
                    <label>Select the sector
                        <select name="example_length" aria-controls="example" class="form-control input-sm">
                            <option value="all">All</option>
                            <?php
                                $sector_type = get_terms( 'sector-type' , array(  'hide_empty' => false ) );
                                    if ( $sector_type ) {
        							foreach ( $sector_type as $sector ) {
        							    echo ' <option value="'.esc_html( $sector->slug ).'">'.esc_html( $sector->name ).'</option>' ;                    								
        							}
        						}
        					?>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-sm-6" align="right">
                <div id="example_filter" class="dataTables_filter">
                    <label>Search:
                        <input type="search" class="form-control input-sm" placeholder="" aria-controls="example">
                    </label>
                </div>
            </div>
        </div>
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Sector</th>
                    <th>Project</th>
                    <th>Client</th>
                    <th>Location</th>
                    <th>Completion</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$posts_per_page =  get_option( 'posts_per_page' );
			
            $query = new WP_Query(array(
                'post_type' => 'projects',
                'posts_per_page' => $posts_per_page,
                'paged' => $paged,
                'post_status' => 'publish',
                'tax_query' => array(
            		array(
            			'taxonomy' => 'project-category',
                        'field'    => 'slug',
                        'terms'    => 'our-project'
            		),
            	),
	
            ));

			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
				$sector_types = wp_get_post_terms( get_the_id(), 'sector-type', array("fields" => "names") );
			?>
               
                <tr>
                    <td><?php echo $sector_types[0] ?></td>

                    <td><a href="#" data-toggle="modal" data-target="#myModal"><?php the_title(); ?></a></td>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><i class="fa fa-users" aria-hidden="true"></i> <?php the_title(); ?></h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>
                                <div class="modal-body">
                                    <img src="<?php the_field('project_details_image'); ?>" alt="<?php the_title(); ?>" class="">
                                    <p><?php the_title(); ?></p>
                                    
                                      <?php if( get_field('p_client') ): ?>
                                        <div class="project-details">
                                            <div> Client : </div>
                                            <div> <?php the_field('p_client') ; ?></div>
                                        </div>
                                    <?php endif; ?>
                                    
                                  
                                    <?php if( get_field('p_prime_contractor') ): ?>
                                        <div class="project-details">
                                            <div>Prime Contractor : </div>
                                            <div><?php the_field('p_prime_contractor'); ?></div>
                                        </div>
                                    <?php endif; ?>
                                   
                                   <?php if( get_field('disciplines') ): ?>
                                   
                                        <div class="project-details">
                                            <div>Disciplines :</div>
                                            <div><?php the_field('disciplines' ); ?></div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if( get_field('p_location') ): ?>
                                        <div class="project-details">
                                            <div>Location :</div>
                                            <div><?php the_field('p_location' ); ?></div>
                                        </div>
                                    <?php endif; ?>
                                     <?php if( get_field('p_year') ): ?>
                                     
                                        <div class="project-details">
                                            <div>Completion :</div>
                                            <div><?php the_field('p_year' ); ?></div>
                                        </div>
                                    <?php endif; ?>
                                     <?php if( get_field('scope_of_work') ): ?>
                                        <div class="project-details">
                                            <div>Scope of Work :</div>
                                            <div> <?php the_field('scope_of_work') ; ?>  </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="modal-footer"> </div>
                            </div>
                        </div>
                    </div>
                    <td>Saudi Aramco</td>
                    <td>Shedgum, GOSP-5, KSA</td>
                    <td>May, 2018</td>
                </tr>
            <?php 
            endwhile;
            endif;
            ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-5">
                <div class="dataTables_info" id="example_info" role="status" aria-live="polite">* please click project name to check further information about the project</div>
            </div>
            <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                <?php sendan_pagination($query); ?>
                </div>
            </div>
        </div>
    </div>
    </div

<?php get_footer() ; ?>