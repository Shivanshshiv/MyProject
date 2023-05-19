<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2912ff7e007a"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/header/menu-section.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/header/menu-section_2019-04-16-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?> <?php 
 if ( is_front_page() || is_home() ) 
     $nav_class ='navbar navbar-expand-md navbar-dark main-menu';
else
    $nav_class = 'navbar navbar-expand-md navbar-dark main-menu other-inner-menu sticky';
 ?>
 
 <nav id="navbar" class="<?php echo $nav_class ;?>">
            <a href="index.html" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" style="height:45px;" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">    <span class="navbar-toggler-icon"></span>
            </button>
            <?php 
           wp_nav_menu( array(
                    'menu'              => "Main Menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                    'menu_class'        => "navbar-nav ml-auto", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                    'container'         => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                    'container_class'   => "navbar-collapse collapse order-md-last", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                    'container_id'      => "mainNav", // (string) The ID that is applied to the container.
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new macho_bootstrap_walker
                     
                     
                ) );
                ?>
            
            
            
            
            
           
        </nav>