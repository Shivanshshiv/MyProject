<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2912ff7e007a"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/inc/template-functions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/inc/template-functions_2019-04-16-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Sendan
 * @since 1.0.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sendan_body_classes( $classes ) {

	if ( is_singular() ) {
		// Adds `singular` to singular pages.
		$classes[] = 'singular';
	} else {
		// Adds `hfeed` to non singular pages.
		$classes[] = 'hfeed';
	}

	// Adds a class if image filters are enabled.
	if ( sendan_image_filters_enabled() ) {
		$classes[] = 'image-filters-enabled';
	}

	return $classes;
}
add_filter( 'body_class', 'sendan_body_classes' );

/**
 * Adds custom class to the array of posts classes.
 */
function sendan_post_classes( $classes, $class, $post_id ) {
	$classes[] = 'entry';

	return $classes;
}
add_filter( 'post_class', 'sendan_post_classes', 10, 3 );


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function sendan_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'sendan_pingback_header' );

/**
 * Changes comment form default fields.
 */
function sendan_comment_form_defaults( $defaults ) {
	$comment_field = $defaults['comment_field'];

	// Adjust height of comment form.
	$defaults['comment_field'] = preg_replace( '/rows="\d+"/', 'rows="5"', $comment_field );

	return $defaults;
}
add_filter( 'comment_form_defaults', 'sendan_comment_form_defaults' );

/**
 * Filters the default archive titles.
 */
function sendan_get_the_archive_title() {
	if ( is_category() ) {
		$title = __( 'Category Archives: ', 'sendan' ) . '<span class="page-description">' . single_term_title( '', false ) . '</span>';
	} elseif ( is_tag() ) {
		$title = __( 'Tag Archives: ', 'sendan' ) . '<span class="page-description">' . single_term_title( '', false ) . '</span>';
	} elseif ( is_author() ) {
		$title = __( 'Author Archives: ', 'sendan' ) . '<span class="page-description">' . get_the_author_meta( 'display_name' ) . '</span>';
	} elseif ( is_year() ) {
		$title = __( 'Yearly Archives: ', 'sendan' ) . '<span class="page-description">' . get_the_date( _x( 'Y', 'yearly archives date format', 'sendan' ) ) . '</span>';
	} elseif ( is_month() ) {
		$title = __( 'Monthly Archives: ', 'sendan' ) . '<span class="page-description">' . get_the_date( _x( 'F Y', 'monthly archives date format', 'sendan' ) ) . '</span>';
	} elseif ( is_day() ) {
		$title = __( 'Daily Archives: ', 'sendan' ) . '<span class="page-description">' . get_the_date() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = __( 'Post Type Archives: ', 'sendan' ) . '<span class="page-description">' . post_type_archive_title( '', false ) . '</span>';
	} elseif ( is_tax() ) {
		$tax = get_taxonomy( get_queried_object()->taxonomy );
		/* translators: %s: Taxonomy singular name */
		$title = sprintf( esc_html__( '%s Archives:', 'sendan' ), $tax->labels->singular_name );
	} else {
		$title = __( 'Archives:', 'sendan' );
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'sendan_get_the_archive_title' );

/**
 * Determines if post thumbnail can be displayed.
 */
function sendan_can_show_post_thumbnail() {
	return apply_filters( 'sendan_can_show_post_thumbnail', ! post_password_required() && ! is_attachment() && has_post_thumbnail() );
}

/**
 * Returns true if image filters are enabled on the theme options.
 */
function sendan_image_filters_enabled() {
	return 0 !== get_theme_mod( 'image_filter', 1 );
}

/**
 * Add custom sizes attribute to responsive image functionality for post thumbnails.
 *
 * @origin Twenty Nineteen 1.0
 *
 * @param array $attr  Attributes for the image markup.
 * @return string Value for use in post thumbnail 'sizes' attribute.
 */
function sendan_post_thumbnail_sizes_attr( $attr ) {

	if ( is_admin() ) {
		return $attr;
	}

	if ( ! is_singular() ) {
		$attr['sizes'] = '(max-width: 34.9rem) calc(100vw - 2rem), (max-width: 53rem) calc(8 * (100vw / 12)), (min-width: 53rem) calc(6 * (100vw / 12)), 100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'sendan_post_thumbnail_sizes_attr', 10, 1 );

/**
 * Returns the size for avatars used in the theme.
 */
function sendan_get_avatar_size() {
	return 60;
}

/**
 * Favicon Icon
 *
 * @author  sendan Team 
 * @version 1.0.0
 * @since   1.0.0
 * @return  return favicon icon which show in before </head>
 */

function sendan_favicon()
{
    
    //$favicon_icon = setup_default_data('favicon-icon');
    ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" >
	
<?php
}
add_action('wp_head', 'sendan_favicon');

// get child page
function get_child_page_list($page_id){ 
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $page_id,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
     );
    
    
    $parent = new WP_Query( $args );
    return $parent;
}

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');


/**
 * Custom Bootstrap Nav Walker
 */

class macho_bootstrap_walker extends Walker_Nav_Menu
{

/**
 * @see Walker::start_lvl()
 * @since 3.0.0
 *
 * @param string $output Passed by reference. Used to append additional content.
 * @param int $depth Depth of page. Used for padding.
 */
public function start_lvl(&$output, $depth = 0, $args = array())
{
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\">\n";
}

/**
 * @see Walker::start_el()
 * @since 3.0.0
 *
 * @param string $output Passed by reference. Used to append additional content.
 * @param object $item Menu item data object.
 * @param int $depth Depth of menu item. Used for padding.
 * @param int $current_page Menu item ID.
 * @param object $args
 */
public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
{
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    /**
     * Dividers, Headers or Disabled
     * =============================
     * Determine whether the item is a Divider, Header, Disabled or regular
     * menu item. To prevent errors we use the strcasecmp() function to so a
     * comparison that is not case sensitive. The strcasecmp() function returns
     * a 0 if the strings are equal.
     */
    if (strcasecmp($item->attr_title, 'divider') == 0 && $depth === 1) {
        $output .= $indent . '<li role="presentation" class="divider">';
    } else if (strcasecmp($item->title, 'divider') == 0 && $depth === 1) {
        $output .= $indent . '<li role="presentation" class="divider">';
    } else if (strcasecmp($item->attr_title, 'dropdown-header') == 0 && $depth === 1) {
        $output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr($item->title);
    } else if (strcasecmp($item->attr_title, 'disabled') == 0) {
        $output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr($item->title) . '</a>';
    } else {

        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

        if ($args->has_children)
            $class_names .= ' dropdown';

        if (in_array('current-menu-item', $classes))
            $class_names .= ' active';

        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . '>';

        $atts = array();
        $atts['title'] = !empty($item->title) ? $item->title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';


        $atts['custom'] = !empty($item->custom) ? $item->custom : '';

        // If item has_children add atts to a.
        if ($args->has_children && $depth === 0) {
            $atts['href'] = '#';
            $atts['data-toggle'] = 'dropdown';
            $atts['class'] = 'dropdown-toggle';
            $atts['aria-haspopup'] = 'true';
        } else {
            $atts['href'] = !empty($item->url) ? $item->url : '';
        }

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);


        $attributes = '';
        foreach ($atts as $attr => $value) {


            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;

       
    }
}


public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
{
    if (!$element)
        return;

    $id_field = $this->db_fields['id'];

    // Display this element.
    if (is_object($args[0]))
        $args[0]->has_children = !empty($children_elements[$element->$id_field]);

    parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
}


public static function fallback($args)
{
    if (current_user_can('manage_options')) {

        extract($args);

        $fb_output = null;

        if ($container) {
            $fb_output = '<' . $container;

            if ($container_id)
                $fb_output .= ' id="' . $container_id . '"';

            if ($container_class)
                $fb_output .= ' class="' . $container_class . '"';

            $fb_output .= '>';
        }

        $fb_output .= '<ul';

        if ($menu_id)
            $fb_output .= ' id="' . $menu_id . '"';

        if ($menu_class)
            $fb_output .= ' class="' . $menu_class . '"';

        $fb_output .= '>';
        $fb_output .= '<li><a href="' . admin_url('nav-menus.php') . '">Add a menu</a></li>';
        $fb_output .= '</ul>';

        if ($container)
            $fb_output .= '</' . $container . '>';

        echo $fb_output;
    }
}
}

