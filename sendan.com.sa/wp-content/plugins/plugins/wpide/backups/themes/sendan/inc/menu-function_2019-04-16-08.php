<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2912ff7e007a"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/inc/menu-function.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/inc/menu-function_2019-04-16-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
// Add nav-link classs on a href

function add_menuclass($classes) {
     return preg_replace('/<a /', '<a class="nav-link"', $classes);
   
}
add_filter('wp_nav_menu','add_menuclass');

// add nav-item class in li
function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

// add dropdown menu class in sub-menu 
function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu dropdown-menu-right" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 

//add dropdown in nav class which has chilren
add_filter('nav_menu_css_class' , 'dropdown_nav_class' , 10 , 2 );
function dropdown_nav_class($classes, $item) {
    if (in_array('menu-item-has-children', $classes) ){
        $classes[] = 'dropdown';
    }
    return $classes;
}

// Add CSS class to children menu item on WordPress
add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' );
function add_menu_parent_class( $items ) {

    foreach ( $items as $item ) {
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $item->classes[] = 'menu-children-item';
        }
    }
    return $items;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current_page_parent', $classes) ){
        $classes[] = 'active ';
    }
return $classes;
}