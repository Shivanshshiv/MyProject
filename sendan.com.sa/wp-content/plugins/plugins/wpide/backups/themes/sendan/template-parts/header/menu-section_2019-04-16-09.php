<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2912ff7e007a"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/header/menu-section.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/header/menu-section_2019-04-16-09.php") )  ) ){
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
 	<?php if ( has_custom_logo() ) : ?>
		<div class="navbar-brand"><?php the_custom_logo(); ?></div>
	<?php endif; ?>
	<?php $blog_info = get_bloginfo( 'name' ); ?>
	<?php if ( ! empty( $blog_info ) ) : ?>
		<?php if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
	<?php endif; ?>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">    <span class="navbar-toggler-icon"></span>
            </button>
            <?php 
           wp_nav_menu( array(
                    'menu'              => "Main Menu",
                    'menu_class'        => "navbar-nav ml-auto",
                    'menu_id'           => "",
                    'container'         => "div",
                    'container_class'   => "navbar-collapse collapse order-md-last",
                    'container_id'      => "mainNav",
                    'depth'             => 2, 
                ) );
                ?>
            
            
            
            
            
           
        </nav>