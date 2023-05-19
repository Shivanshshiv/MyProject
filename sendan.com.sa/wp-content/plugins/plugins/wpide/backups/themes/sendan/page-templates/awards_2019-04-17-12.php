<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29ed727cf70a"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/awards.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/awards_2019-04-17-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
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
            $args = array(
              'numberposts' => 10,
              'post_type'   => 'awards'
            );                                     
            $awards = get_posts( $args );
            $count =1;
            if ( $awards ) {
                foreach ( $awards as $post ) :
                     setup_postdata( $post ); 
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
                wp_reset_postdata();
                $count++;
                endforeach;
            }
        ?>    			
			</tbody>
		</table>
		<div class="row">
			<div class="col-sm-5">
				<div class="dataTables_info" id="example_info" role="status" aria-live="polite"><?php echo get_field('term_content'); ?></div>
			</div>
			<div class="col-sm-7">
				<div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
					<ul class="pagination">
						<li class="paginate_button previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0">Previous</a>
						</li>
						<li class="paginate_button active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0">1</a>
						</li>
						<li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0">2</a>
						</li>
						<li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0">3</a>
						</li>
						<li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0">4</a>
						</li>
						<li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0">5</a>
						</li>
						<li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0">6</a>
						</li>
						<li class="paginate_button next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0">Next</a>
						</li>
					</ul>
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