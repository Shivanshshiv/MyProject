<?php
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

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'page_special_nav_class' , 10 , 2);
function page_special_nav_class($classes, $item){
    if( in_array('current_page_parent', $classes) ){
        $classes[] = 'active ';
    }
return $classes;
}