<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50a9e8390dcb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/template-parts/header/menu-section.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/template-parts/header/menu-section_2020-03-18-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><style>
#navbar {z-index:1001;}
.sticky {position:fixed !important;top:0;width: 100%;background:#fff;-webkit-transition: width 5s; /* For Safari 3.1 to 6.0 */
  transition: width 5s;box-shadow:0px 2px 5px #3c8c5e;}
.sticky ul li .nav-link{color:#000 !important;}
.navbar-dark .navbar-nav .nav-link{color:#000;padding:.5rem .7rem;text-transform: uppercase;font-weight:bold;    letter-spacing: 0.2px;}
.navbar{padding:0.5rem 2rem;}
a:hover{text-decoration:none;}
</style>
 <?php 
 if ( is_front_page() || is_home() ) 
     $nav_class ='navbar navbar-expand-md navbar-dark main-menu';
else
    $nav_class = 'navbar navbar-expand-md navbar-dark main-menu other-inner-menu sticky';
 ?>
 
 <nav id="navbar" class="<?php echo $nav_class ;?>">
 	<?php if ( has_custom_logo() ) : ?>
		<div class="navbar-brand"><?php the_custom_logo(); ?></div>
	<?php else: ?>
	<?php $blog_info = get_bloginfo( 'name' ); ?>
	<?php if ( ! empty( $blog_info ) ) : ?>
    		<?php if ( is_front_page() && is_home() ) : ?>
    			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    		<?php else : ?>
    			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    		<?php endif; ?>
    	<?php endif; ?>
	<?php endif; ?>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">    <span class="navbar-toggler-icon"></span>
            </button>
            <?php 
           wp_nav_menu( array(
                    'menu'              => "Main Menu",
                    //'menu'              => "Test_Menu",
                    'menu_class'        => "navbar-nav ml-auto",
                    'menu_id'           => "",
                    'container'         => "div",
                    'container_class'   => "navbar-collapse collapse order-md-last",
                    'container_id'      => "mainNav",
                    'depth'             => 2, 
                ) );
                ?>
            
            
            
            
            
           
        </nav>