
 <?php 
 if ( is_front_page() || is_home() ) 
     $nav_class ='navbar navbar-expand-lg navbar-dark main-menu'; 
 
 ?>
 
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark main-menu">
    
    
         <?php the_custom_logo(); ?>
        
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse order-md-last" id="mainNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url() ; ?>">Home</a>
                </li>
                <?php
                if( have_rows('menu_details' ,'option') ):
                    $count1 = 0;     
                    while ( have_rows('menu_details' ,'option') ) : the_row(); $count1++;
                    ?>
                        <li class="nav-item dropdown drop-down-mega">
                            <a class="nav-link ddicon menu__after" href="<?php the_sub_field('main_menu_url'); ?>" aria-haspopup="true" aria-expanded="false">
                                 <?php the_sub_field('menu_name'); ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right custome-ddmenu row " aria-labelledby="navbarDropdownMenuLink">
                                <!--<div class="<?php the_sub_field('menu_class'); ?>"></div>-->
                                <div class="col-md-12 f-left boxallmn">
                                    
                                    <div class="col-md-3 f-left leftddmeab">
                                        <h4><?php the_sub_field('menu_content_title'); ?></h4>
                                        <p> <?php the_sub_field('menu_content'); ?></p>
                                        <!--button>Downloads</button-->
                                    </div>
                                    <?php  while ( have_rows('menu_section' ,'option') ) : the_row(); ?>
                                        <div class="col-md-3 f-left menulistabb">
                                            <ul> <?php  while ( have_rows('menu_list' ,'option') ) : the_row(); ?>
                                                <li><a href="<?php the_sub_field('menu_url'); ?>"><?php the_sub_field('page_name'); ?></a></li>
                                                 <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    <?php endwhile; ?>
                                    
                                    
                                </div>
                            </ul>
                        </li>                
                 
                  <?php 

                 endwhile;
                	endif;
                	?> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url(); ?>/contact-us/">  Contact Us </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url(); ?>/customer-complaint-register/">  Customer </a>
                </li>
            </ul>
        </div>
    </nav>