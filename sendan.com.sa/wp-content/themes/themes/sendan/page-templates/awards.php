<?php 
/*
* Template Name: Awards
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
 <?php 
if(have_posts()):
	while ( have_posts() ) :
		the_post();
		?>   
<div class="container-fluid all-pages-padding" style="padding-top:0;">
	<div class="container">
		<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>CLIENT</th>
					<th>PROJECT</th>
					<th>AWARD</th>
					<th>AWARD DETAIL</th>
					<th>DATE</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$posts_per_page =  get_option( 'posts_per_page' );
			
            $query = new WP_Query(array(
                'post_type' => 'awards',
                'posts_per_page' => $posts_per_page,
                'paged' => $paged,
                'post_status' => 'publish',
	
            ));

			if ( $query->have_posts() ) :
			     $count =1;
				while ( $query->have_posts() ) : $query->the_post();
            ?>
			
				<tr>
					<td><a href="#" data-toggle="modal" data-target="#myModal<?php echo $count ; ?>"><?php echo get_field('clients_name'); ?></a>
					</td>
					<td><a href="#" data-toggle="modal" data-target="#myModal<?php echo $count ; ?>"><?php echo get_field('award_project_name'); ?></a>
					</td>
					<!-- Modal -->
					<div class="modal fade" id="myModal<?php echo $count ; ?>" role="dialog">
						<div class="modal-dialog modal-lg">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<?php
                        			if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full' , array('class' => 'img-fluid') );
                                    }
                                    ?>
								</div>
								<div class="modal-footer"></div>
							</div>
						</div>
					</div>
					
					<td><a href="#" data-toggle="modal" data-target="#myModal<?php echo $count ; ?>"><?php the_title(); ?></a>
					</td>
					
					<td><a href="#" data-toggle="modal" data-target="#myModal<?php echo $count ; ?>"><?php echo wp_trim_words( get_the_content(),10,'...',true) ; ?></a>
					</td>
					
					<td><a href="#" data-toggle="modal" data-target="#myModal<?php echo $count ; ?>"><?php echo get_field('award_year'); ?></a>
					</td>
				</tr>
			<?php
			      
               
                $count++;
                endwhile ;  
                 wp_reset_postdata();
            endif;
        ?>    			
			</tbody>
		</table>
		<div class="row">
			<div class="col-sm-5">
				<div class="dataTables_info" id="example_info" role="status" aria-live="polite"><?php echo get_field('term_content'); ?></div>
			</div>
			<div class="col-sm-7">
				<div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
					<?php sendan_pagination($query); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
endwhile;
endif;
?>
	<?php get_footer(); ?>