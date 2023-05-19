<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "2c80134f2de70d912af04cce2ca5182bac8bd5337f"){
                                        if ( file_put_contents ( "/chroot/home/sendanadmin/sendan.com.sa/html/wp-content/themes/sendan/functions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/chroot/home/sendanadmin/sendan.com.sa/html/wp-content/plugins/wpide/backups/themes/sendan/functions_2021-10-21-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Sendan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sendan
 * @since 1.0.0
 */

/**
 * Sendan only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
/**
 * Define Theme variables.
 *
 * @author Sendan Team 
 * @since 1.0.0
 * @version 1.0.0
 */
 

$sendanTheme = wp_get_theme();
define( 'SENDAN_THEME_NAME', $sendanTheme->get('Name') );
define( 'SENDAN_THEME_SLUG', $sendanTheme->get('Name') );
define( 'SENDAN_THEME_VERSION', $sendanTheme->get('Version') );
define( 'SENDAN_THEME_DIR', trailingslashit( get_template_directory()) );
define( 'SENDAN_THEME_URI', trailingslashit( get_template_directory_uri() ) );
define( 'SENDAN_JS_URI', SENDAN_THEME_URI . 'assets/js/' );
define( 'SENDAN_CSS_URI', SENDAN_THEME_URI . 'assets/css/' );
define( 'SENDAN_IMG_DIR', SENDAN_THEME_DIR . 'assets/images/' );
define( 'SENDAN_IMG_URI', SENDAN_THEME_URI . 'assets/img/' );
define( 'SENDAN_ADMIN_ICON', SENDAN_IMG_URI . 'menu-icons/' );

// Sendan setup

if ( ! function_exists( 'sendan_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sendan_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sendan, use a find and replace
		 * to change 'sendan' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sendan', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_image_size( 'backend-img' , 60, 60, true );
		add_image_size( 'client-review' , 60, 60 ,true ); 
		add_image_size( 'project-thumb' , 280, 167 ,true ); 
		 add_image_size( 'blog-home-thumb' , 350, 142 ,true ); 
		 add_image_size( 'our-business-thumb' , 276,292 , true);
		 add_image_size('major-project-thumb' ,255,205 ,true );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				//'Test_Menu' => __( 'Primary', 'sendan' ),
			    'menu-1' => __( 'Primary', 'sendan' ),
				'footer' => __( 'Footer Menu', 'sendan' ),				
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'sendan_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sendan_widgets_init() {

	register_sidebar(
		array(
	        'name'          => __( 'Right Sidebar', 'sendan' ),
			'id'            => 'right-sidebar',
			'description'   => __( 'Right sidebar widget area', 'sendan' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
		
	register_sidebar(
    	array(
    		'name'          => __( 'Footer 1', 'Sendan' ),
    		'id'            => 'footer-1',
    		'description'   => __( 'Add widgets here to appear in your First Footer Section 1.', 'sendan' ),
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h4 class="widget-title">',
    		'after_title'   => '</h4>',
    	)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'Sendan' ),
			'id'            => 'footer-2',
			'description'   => __( 'Add widgets here to appear in your Footer Section 2.', 'sendan' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'Sendan' ),
			'id'            => 'footer-3',
			'description'   => __( 'Add widgets here to appear in your Footer Section 3.', 'sendan' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

}
add_action( 'widgets_init', 'sendan_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function sendan_scripts() {
	wp_enqueue_style( 'sendan-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sendan_scripts' );

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

//enquiee files
require get_template_directory() . '/inc/enqueue.php';

//custom post type class
require get_template_directory() . '/inc/class-cpt.php';

//Customposttype creation
require get_template_directory() . '/inc/theme-post-type.php';

//Customposttype creation
require get_template_directory() . '/inc/menu-function.php';

//pagination  creation
require get_template_directory() . '/inc/pagination.php';

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


add_filter('manage_edit-awards_columns', 'my_columns');
function my_columns($columns) {
    $columns['eventYear'] = 'Event Year';
    $columns['client'] = 'Client Name';
    $columns['projects'] = 'PROJECT';
    return $columns;
}

add_action('manage_posts_custom_column',  'my_show_columns');
function my_show_columns($name) {
    global $post;
    if( $name == 'eventYear' ) {
            $eventYear = get_post_meta($post->ID, 'award_year', true);
            echo $eventYear;
    }
    if( $name == 'client'){
            $client = get_post_meta($post->ID, 'clients_name', true);
            echo $client;
    }
    if( $name == 'projects' ){
        echo get_post_meta($post->ID, 'award_project_name', true);
    }
}

// add_filter( 'manage_edit-awards_sortable_columns', 'my_sortable_date_column' );
// function my_sortable_date_column( $columns ) {
//     $columns['eventDate'] = 'Event Date';

//     return $columns;
// }



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


add_action( 'wpcf7_before_send_mail', function($contact_form){
 
// create new instance of WPCF7_Submission class
$submission = WPCF7_Submission::get_instance();
 
 
 $posted_data = $submission->get_posted_data() ;
 
 if($posted_data['_wpcf7'] == '2109' ){
     if($posted_data['country'] == 'Saudi Arabia'){ 
         // email address you want to change
         //  $toEmail = 'jobs2@sendan.com.sa';
        //$toEmail = 'hariomkumarmth@gmail.com';
         $toEmail = 'recruitment@sendan.com.sa';
        // set the email address to recipient
         $mailProp = $contact_form->get_properties('mail');
         
        
         $mailProp['mail']['recipient'] = $toEmail;         
         
         $contact_form->set_properties(array('mail' => $mailProp['mail'])); 
    }else{
        
            // email address you want to change
        $toEmail = 'recruitment@sendan.com.sa';
        //$toEmail = 'anandy075@gmail.com';
         
        // set the email address to recipient
        $mailProp = $contact_form->get_properties('mail');
         
        
        $mailProp['mail']['recipient'] = $toEmail;         
         
        $contact_form->set_properties(array('mail' => $mailProp['mail'])); 
        
        }
        
 }    
 
 if($posted_data['_wpcf7'] == '1213' ){
     if($posted_data['menu-486'] == 'Business Development'){ 
        // email address you want to change
        //  $toEmail = 'jobs2@sendan.com.sa';
         //$toEmail = 'hariomkumarmth@gmail.com';
         $toEmail = 'recruitment@sendan.com.sa';
        // set the email address to recipient
         
    }else{
        
            // email address you want to change
        $toEmail = 'recruitment@sendan.com.sa';
        //$toEmail = 'anandy075@gmail.com';
          
    }
     // set the email address to recipient
    $mailProp = $contact_form->get_properties('mail');
     
    
    $mailProp['mail']['recipient'] = $toEmail;
    $contact_form->set_properties(array('mail' => $mailProp['mail'])); 
        
 }    
 
 if($posted_data['_wpcf7'] == '4048' ){
   
   try {
       
        $url ="https://uat.sendan.com.sa/customer_complaint_api/customer_complaint_register/";
        $myvars = 'cname=' .  $posted_data[cname] . '&email=' . $posted_data[email] . '&proj_name=' . $posted_data[proj_name] . '&phone_no=' . $posted_data[phone_no]. '&customer_details=' . $posted_data[customer_details];
      
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        
        $response = curl_exec( $ch ); 
        //echo($response);
   }
   catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();
    }
 }

});

add_action("wpcf7_posted_data", "wpcf7_modify_this");
function wpcf7_modify_this($posted_data) { 
     if($posted_data['_wpcf7'] == '2634' ){
         
        if($posted_data['brochure_no'] == 'Bolt Integrity Solution'){
            $posted_data['brochure_no'] = site_url()."/wp-content/uploads/2020/05/Bolt-Integrity-Solutions.pdf";
        }
        elseif($posted_data['brochure_no'] == 'Valve Repair And Testing Techniques'){
            $posted_data['brochure_no'] =  site_url()."/wp-content/uploads/2020/05/Valve-Repair-Maintenance-Services.pdf";
        }
        
         elseif($posted_data['brochure_no'] == 'Sendan Corporate Profile'){
            $posted_data['brochure_no'] = site_url()."/wp-content/uploads/2020/05/SENDAN-Corporate-Profile.pdf";
        }
         elseif($posted_data['brochure_no'] == 'Rotating Equipment And Pump Services'){
            $posted_data['brochure_no'] = site_url()."/wp-content/uploads/2020/05/Rotating-Equipment.pdf";
        }
         elseif($posted_data['brochure_no'] == 'Heat Exchanger'){
            $posted_data['brochure_no'] = site_url()."/wp-content/uploads/2020/05/Heat-Exchanger.pdf";
        }
         elseif($posted_data['brochure_no'] == 'Electrical Maintenance'){
            $posted_data['brochure_no'] = site_url()."/wp-content/uploads/2020/05/ElectricalMaintenance-1.pdf";
        }
        else{             
            $posted_data['brochure_no'] = site_url()."/wp-content/uploads/2020/05/SENDAN-Corporate-Profile.pdf";
        }

     }

    return $posted_data;
}
 
