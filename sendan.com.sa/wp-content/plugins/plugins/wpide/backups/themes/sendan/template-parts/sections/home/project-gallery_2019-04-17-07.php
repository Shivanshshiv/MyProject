<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29dddbabea9d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/sections/home/project-gallery.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/sections/home/project-gallery_2019-04-17-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?> <div class="container-fluid filter-gallery-home">
        <div class="row">
            <div class="col-md-12 text-center">
             <h2><?php the_field('all_projects_title'); ?></h2>
                <p class="main-p">
                    <?php the_field('All Projects Descriptions'); ?>
                </p>
            </div>
            <?php
                $sector_type = get_terms( 'sector-type' , array(  'hide_empty' => false ) );
            ?>
            <div style="text-align:center;width:100%;padding-top:30px;padding-bottom:20px;">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                	<?php
						if ( $sector_type ) {
							foreach ( $sector_type as $sector ) {
								?>
					        	<button class="btn btn-default filter-button" data-filter="<?php echo esc_html( $sector->slug ); ?>" data-rel="<?php echo esc_html( $sector->slug ); ?>"><?php echo esc_html( $sector->name ); ?></button>
							<?php
							}
						}
						?>
            </div>
            <div class="container-fluid" style="background:#272727;padding:40px 40px 10px 40px;">
                <div class="row">
                <?php
					$projects_lists = get_posts(
						array(
							'post_type'      => 'projects',
							'posts_per_page' => -1,
							'tax_query' => array(
                                array(
                                    'taxonomy' => 'project-category',
                                    'field'    => 'slug',
                                    'terms'    => 'our-project'
                                )
                            )
						)
					);
				if ( $projects_lists ) {
				    $count = 0;
					foreach ( $projects_lists as $post ) :
						setup_postdata( $post );
						$sector_types = wp_get_post_terms( $post->ID, 'sector-type', array( 'fields' => 'all' ) );
					    
						$s_list             = '';
						$s_name             = '';
						foreach ( $sector_types as $s_term ) {

							$s_list = $s_list . ' ' . $s_term->slug; //all list
						

						}
						?>
                
                    <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter <?php echo $s_list; ?>">
                        <div class="project-container">
                        <?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'project-thumb', array( 'class' => 'img-fluid project-image' ) );
							}
							?>
                            <div class="project-overlay">
                                <div class="project-text"><?php the_title(); ?> <a href="<?php the_permalink() ; ?>" data-toggle="modal" data-target="#myModal<?php echo $count ; ?>">Read More..</a> 
                                </div>
                            </div>
                        </div>
                        <h3><?php the_field('p_client'); ?></h3>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal<?php echo $count ; ?>" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><i class="fa fa-users" aria-hidden="true"></i> <?php the_field('p_location'); ?> </h4>
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
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    $count++;
                    endforeach;
				}
				?>
                    
                </div>
            </div>
        </div>
    </div>