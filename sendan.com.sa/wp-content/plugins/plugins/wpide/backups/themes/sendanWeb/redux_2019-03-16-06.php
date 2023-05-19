<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e2985ad5ea380"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendanWeb/redux.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendanWeb/redux_2019-03-16-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
define('OPTIONS_PATH', get_template_directory_uri().'/themeoptions/assets/');
 /**
  * ReduxFramework Sample Config File
  * For full documentation, please visit: http://docs.reduxframework.com/
  */
 if ( ! class_exists('Redux')) {
     return;
 }
 // This is your option name where all the Redux data is stored.
 $opt_name = "panoply_option";
 // This line is only for altering the demo. Can be easily removed.
 $opt_name = apply_filters('panoply_demo/opt_name', $opt_name);
 /*
  *
  * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
  *
  */
 $theme = wp_get_theme(); // For use with some settings. Not necessary.
 $args = array(
     // TYPICAL -> Change these values as you need/desire
     'opt_name'             => $opt_name,
     // This is where your data is stored in the database and also becomes your global variable name.
     'display_name'         => $theme->get('Name'),
     // Name that appears at the top of your panel
     'display_version'      => $theme->get('Version'),
     // Version that appears at the top of your panel
     'menu_type'            => 'menu',
     //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
     'allow_sub_menu'       => true,
     // Show the sections below the admin menu item or not
     'menu_title'           => __('Theme Options', 'panoply' ),
     'page_title'           => __('Theme Options', 'panoply' ),
     // You will need to generate a Google API key to use this feature.
     // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
     'google_api_key'       => '',
     // Set it you want google fonts to update weekly. A google_api_key value is required.
     'google_update_weekly' => false,
     // Must be defined to add google fonts to the typography module
     'async_typography'     => false,
     // Use a asynchronous font on the front end or font string
     //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
     'admin_bar'            => false,
     // Show the panel pages on the admin bar
     'admin_bar_icon'       => 'dashicons-portfolio',
     // Choose an icon for the admin bar menu
     'admin_bar_priority'   => 50,
     // Choose an priority for the admin bar menu
     'global_variable'      => '',
     // Set a different name for your global variable other than the opt_name
     'dev_mode'             => false,
     // Show the time the page took to load, etc
     'update_notice'        => true,
     // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
     'customizer'           => true,
     // Enable basic customizer support
     //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
     //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
     // OPTIONAL -> Give you extra features
     'page_priority'        => 50,
     // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
     'page_parent'          => 'themes.php',
     // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
     'page_permissions'     => 'manage_options',
     // Permissions needed to access the options panel.
     'menu_icon'            => '',
     // Specify a custom URL to an icon
     'last_tab'             => '',
     // Force your panel to always open to a specific tab (by id)
     'page_icon'            => 'icon-themes',
     // Icon displayed in the admin panel next to your menu_title
     'page_slug'            => '',
     // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
     'save_defaults'        => true,
     // On load save the defaults to DB before user clicks save or not

     'default_show'         => false,
     // If true, shows the default value next to each field that is not the default value.
     'default_mark'         => '',
     // What to print by the field's title if the value shown is default. Suggested: *
     'show_import_export'   => true,
     // Shows the Import/Export panel when not used as a field.
     // CAREFUL -> These options are for advanced use only
     'transient_time'       => 60 * MINUTE_IN_SECONDS,
     'output'               => true,
     // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
     'output_tag'           => true,
     // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
     // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
     // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
     'database'             => '',
     // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
     'use_cdn'              => true,
     // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
     // HINTS
     'hints' => array(
 'icon' => 'el el-question-sign',
 'icon_position' => 'right',
 'icon_color'    => 'lightgray',
 'icon_size'     => 'normal',
 'tip_style'     => array(
     'color'   => 'red',
     'shadow'  => true,
     'rounded' => false,
     'style'   => '',
 ),
 'tip_position'  => array(
     'my' => 'top left',
     'at' => 'bottom right',
 ),
 'tip_effect'    => array(
     'show' => array(
         'effect'   => 'slide',
         'duration' => '500',
         'event'    => 'mouseover',
     ),
     'hide' => array(
         'effect'   => 'slide',
         'duration' => '500',
         'event'    => 'click mouseleave',
     ),
 ),
     )
 );
 // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
 $args['admin_bar_links'][] = array(
     'id'    => 'redux-docs',
     'href'  => 'http://docs.reduxframework.com/',
     'title' => __('Documentation', 'panoply'),
 );
 $args['admin_bar_links'][] = array(
     //'id'    => 'redux-support',
     'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
     'title' => __( 'Support', 'panoply' ),
 );
 $args['admin_bar_links'][] = array(
     'id'    => 'redux-extensions',
     'href'  => 'reduxframework.com/extensions',
     'title' => __('Extensions', 'panoply'),
 );
 // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
 $args['share_icons'][] = array(
     'url'   => 'https://www.facebook.com/ydesignservices/',
     'title' => 'facebook',
     'icon'  => 'fa fa-facebook'
 );
	   $args['share_icons'][] = array(
     'url'   => 'https://twitter.com/yachika',
     'title' => 'twitter',
     'icon'  => 'fa fa-twitter'
 );
	   $args['share_icons'][] = array(
     'url'   => 'https://www.youtube.com/channel/UCnCxPjeDV7bP3msBquGoPnw',
     'title' => 'youtube',
     'icon'  => 'fa fa-youtube'
 );
	   $args['share_icons'][] = array(
     'url'   => 'https://www.instagram.com/ydesignservices/',
     'title' => 'instagram',
     'icon'  => 'fa fa-instagram'
 );
	   $args['share_icons'][] = array(
     'url'   => 'https://plus.google.com/+YdesignServices',
     'title' => 'google',
     'icon'  => 'fa fa-google'
 );
 // Panel Intro text -> before the form
 if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
     if ( ! empty( $args['global_variable'] ) ) {
 $v = $args['global_variable'];
     } else {
 $v = str_replace( '-', '_', $args['opt_name'] );
     }
     /*$args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'panoply' ), $v );
 } else {
     $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'panoply' );*/
 }
 // Add content after the form.
 ///$args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'panoply' );
 Redux::setArgs( $opt_name, $args );
 /*
  * ---> END ARGUMENTS
  */
 /*
  * ---> START HELP TABS
  */
 $tabs = array(
     array(
 'id'      => 'redux-help-tab-1',
 'title'   => __( 'Theme Information 1', 'panoply' ),
 'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'panoply' )
     ),
     array(
 'id'      => 'redux-help-tab-2',
 'title'   => __( 'Theme Information 2', 'panoply' ),
 'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'panoply' )
     )
 );
 Redux::setHelpTab( $opt_name, $tabs );
 // Set the help sidebar
 $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'panoply' );
 Redux::setHelpSidebar( $opt_name, $content );
 /*
  * <--- END HELP TABS
  */
 /*
  *
  * ---> START SECTIONS
  *
  */
 /*
     As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
  */
 // -> START Basic Fields
	global $wpdb;
	$blocks = $wpdb->get_results("SELECT ID, post_title FROM $wpdb->posts WHERE post_type = 'page'");
	$blocks_array = array('');
	if ($blocks) {
		foreach ( $blocks as $block ) {
$blocks_array[$block->ID] = $block->post_title;
		}
	} else {
		$blocks_array["No content blocks found"] = 0;
	}
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Home Page Settings', 'panoply' ),
        'id'               => 'header_settings',
        'desc'             => __( 'All general options are listed here', 'panoply' ),
        
        'icon'             => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Slider Section', 'panoply' ),
        'id'               => 'slider_section',
        'subsection'       => true,        
        'desc'             => __( '', 'panoply' ),
        'fields'           => array(
     array(
         'id'=>'slider_slide',
         'type' => 'slides',
         'customizer' => false,
         'title' => __('Slider section
        ', 'panoply'),
         'subtitle'=> __('', 'panoply'),
             ),
             array(
         'id'=>'countdown_no',
         'type' => 'slides',
         'customizer' => false,
         'title' => __('Countdown section
        ', 'panoply'),
         'subtitle'=> __('', 'panoply'),
             ),
               
 )
    ) );
	//Page Behaviour
Redux::setSection( $opt_name, array(
        'title'            => __( 'Welcome Section', 'panoply' ),
        'id'               => 'page_behaviour',
        'subsection'       => true,        
        'desc'             => __( 'Page behaviour options are listed here', 'panoply' ),
        'fields'           => array(
            array(
    	   'id'=>'welcome_title',
    	    'type' => 'text', 
    		'title' => __("Welcome Title", 'panoply'),
    	    'subtitle'=> __('Please enter the title', 'panoply'),
            'default' => '',
     ),
     array(
         'id'=>'welcome_notes',
         'type' => 'slides',
         'customizer' => false,
         'title' => __('Welcome note
        ', 'panoply'),
         'subtitle'=> __('', 'panoply'),
             ),
             array(
    	   'id'=>'our_value_title',
    	    'type' => 'text', 
    		'title' => __("Our Value Title", 'panoply'),
    	    'subtitle'=> __('Please enter the title', 'panoply'),
            'default' => '',
     ),
             array(
         'id'=>'our_values_slide',
         'type' => 'slides',
         'customizer' => false,
         'title' => __('Our Value section
        ', 'panoply'),
         'subtitle'=> __('', 'panoply'),
             ),
		 )
    ) );
	

	//Custom Code
Redux::setSection( $opt_name, array(
        'title'            => __( 'Testimonials Section ', 'panoply' ),
        'id'               => 'custom_code',
        'subsection'       => true,        
        'desc'             => __( 'Custom code options are listed here', 'panoply' ),
        'fields'           => array(
            array(
             'id'       => 'testimonial_bg_image',
             'type'     => 'media',
        	'url'=> true,
              'customizer' => false,
             'title'    => __('Background Image', 'panoply'), 
             'subtitle' => __('', 'panoply'),
          ),
          array(
         'id'=>'testimonial_slide',
         'type' => 'slides',
         'customizer' => false,
         'title' => __('Add Testimonials', 'panoply'),
         'subtitle'=> __('', 'panoply'),
             ),
     )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Our Project Section ', 'panoply' ),
        'id'               => 'our_project_section',
        'subsection'       => true,        
        'desc'             => __( '', 'panoply' ),
        'fields'           => array(
            array(
    	   'id'=>'our_project_title',
    	    'type' => 'text', 
    		'title' => __("Enter title", 'panoply'),
    	    'subtitle'=> __('Please enter the title', 'panoply'),
            'default' => '',
     ),
     array(
    	   'id'=>'our_project_des',
    	    'type' => 'text', 
    		'title' => __("Enter Description", 'panoply'),
    	    'subtitle'=> __('Please enter the description', 'panoply'),
            'default' => '',
     ),
          array(
         'id'=>'our_project_slide',
         'type' => 'slides',
         'customizer' => false,
         'title' => __('Add Our Project', 'panoply'),
         'subtitle'=> __('', 'panoply'),
             ),
     )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Gallery Section ', 'panoply' ),
        'id'               => 'gallery_section',
        'subsection'       => true,        
        'desc'             => __( '', 'panoply' ),
        'fields'           => array(
            array(
            'id'       => 'client_gallery',
            'type'     => 'gallery',
            'title'    => __('Add/Edit Gallery', 'panoply'),
            'subtitle' => __('Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'panoply'),
            'desc'     => __('This is the description field, again good for additional info.', 'panoply'),
        ),
     )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'All Project Section ', 'panoply' ),
        'id'               => 'project_section',
        'subsection'       => true,        
        'desc'             => __( '', 'panoply' ),
        'fields'           => array(
            array(
            'id'       => 'project_title',
            'type'     => 'text',
            'title'    => __('Enter Title', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
        array(
            'id'       => 'project_desc',
            'type'     => 'textarea',
            'title'    => __('Enter Description', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
     )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Blog Section ', 'panoply' ),
        'id'               => 'blog_section',
        'subsection'       => true,        
        'desc'             => __( '', 'panoply' ),
        'fields'           => array(
            array(
            'id'       => 'blog_title',
            'type'     => 'text',
            'title'    => __('Enter Title', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
        array(
            'id'       => 'blog_desc',
            'type'     => 'textarea',
            'title'    => __('Enter Description', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
     )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Address Section ', 'panoply' ),
        'id'               => 'address_section',
        'subsection'       => true,        
        'desc'             => __( '', 'panoply' ),
        'fields'           => array(
            array(
            'id'       => 'telephone',
            'type'     => 'text',
            'title'    => __('Enter Telephone No', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
        array(
            'id'       => 'email',
            'type'     => 'text',
            'title'    => __('Enter Email Address', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
        array(
            'id'       => 'addrress',
            'type'     => 'textarea',
            'title'    => __('Enter Address', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
     )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Map Section ', 'panoply' ),
        'id'               => 'map_section',
        'subsection'       => true,        
        'desc'             => __( '', 'panoply' ),
        'fields'           => array(
            
        array(
            'id'       => 'map',
            'type'     => 'textarea',
            'title'    => __('Enter Iframe Code', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
     )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Footer Section ', 'panoply' ),
        'id'               => 'footer_section',
        'subsection'       => true,        
        'desc'             => __( '', 'panoply' ),
        'fields'           => array(
            
        array(
            'id'       => 'copyright',
            'type'     => 'textarea',
            'title'    => __('Enter copyright text', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
     )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Social Icon Section ', 'panoply' ),
        'id'               => 'social_section',
        'subsection'       => true,        
        'desc'             => __( '', 'panoply' ),
        'fields'           => array(
            
        array(
            'id'       => 'facebook',
            'type'     => 'text',
            'title'    => __('Facebook', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
        array(
            'id'       => 'twitter',
            'type'     => 'text',
            'title'    => __('Twitter', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
        array(
            'id'       => 'linkdin',
            'type'     => 'text',
            'title'    => __('Linkdin', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
        array(
            'id'       => 'thumbler',
            'type'     => 'text',
            'title'    => __('Thumbler', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
        array(
            'id'       => 'instagram',
            'type'     => 'text',
            'title'    => __('Instagram', 'panoply'),
            'subtitle' => __('', 'panoply'),
            'desc'     => __('', 'panoply'),
        ),
     )
    ) );
	//Logo & Favicon
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Logo & Favicon', 'panoply' ),
        'id'               => 'logo_favicon',
        'desc'             => __( 'All logo & favicon options are listed here', 'panoply' ),        
        'icon'             => 'el el-picture'
    ) );	
	Redux::setSection( $opt_name, array(
     'icon' => 'el el-picture',
     'id' => 'logo_favicon',
     'icon_class' => 'el',
     'title' => __('Logo & Favicon', 'panoply'),
     'desc' => "<div class='redux-info-field'><h3>".__('All logo & favicon options are listed here', 'panoply')."</h3></div>",
     'fields' => array(
 
 array(
     'id'       => 'logo_image',
     'type'     => 'media',
	'url'=> true,
      'customizer' => true,
     'title'    => __('Logo Image', 'panoply'), 
     'subtitle' => __('Upload or enter the direct path to your main logo (recommended size 220 x 90)', 'panoply'),
	 'readonly'=>false,
	 
  ),
 

  
 
 	array(
     'id'       => 'retina_logo',
     'type'     => 'media',
	 'url'=> true,
      'customizer' => true,
     'title'    => __('Retina Logo Image', 'panoply'), 
     'subtitle' => __('Upload or enter the direct path to your retina logo (recommended size 120 x 50)', 'panoply'),
	 'readonly'=>false,
	 'required' => array('retina_logo_type','=','1')
  ),   
  
 array(
     'id'       => 'favicon',
     'type'     => 'media',
	  'url'=> true,
      'customizer' => true,
     'title'    => __('Favicon', 'panoply'), 
     'subtitle' => __('Upload or Enter the direct path to your favicon (recommended size 16 x 16)', 'panoply'),
	 'readonly'=>false,
  ),	
 	),));


/*
 * <--- END SECTIONS
 */
	//->End Basic Fields
 if ( file_exists( dirname( __FILE__ ) . '/../README.md' ) ) {
     $section = array(
 'icon'   => 'el el-list-alt',

 'title'  => __( 'Documentation', 'panoply' ),
 'fields' => array(
     array(
         'id'       => '17',
         'type'     => 'raw',
         'markdown' => true,
         'content_path' => dirname( __FILE__ ) . '/../README.md', // FULL PATH, not relative please
         //'content' => 'Raw content here',
     ),
 ),
     );
     Redux::setSection( $opt_name, $section );
 }
 /*
  * <--- END SECTIONS
  */
 /*
  *
  * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
  *
  */
 /*
 *
 * --> Action hook examples
 *
 */
 // If Redux is running as a plugin, this will remove the demo notice and links
 //add_action( 'redux/loaded', 'remove_demo' );
 // Function to test the compiler hook and demo CSS output.
 // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
 ///add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);
 // Change the arguments after they've been declared, but before the panel is created
 //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );
 // Change the default value of a field after it's been set, but before it's been useds
 //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );
 // Dynamically add a section. Can be also used to modify sections/fields
 //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');
 /**
  * This is a test function that will let you see when the compiler hook occurs.
  * It only runs if a field    set with compiler=>true is changed.
  * */
 if ( ! function_exists( 'compiler_action' ) ) {
     function compiler_action( $options, $css, $changed_values ) {
 echo '<h1>The compiler hook has run!</h1>';
 echo "<pre>";
 print_r( $changed_values ); // Values that have changed since the last save
 echo "</pre>";
 //print_r($options); //Option values
 //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
     }
 }
 /**
  * Custom function for the callback validation referenced above
  * */
 if ( ! function_exists( 'redux_validate_callback_function' ) ) {
     function redux_validate_callback_function( $field, $value, $existing_value ) {
 $error   = false;
 $warning = false;
 //do your validation
 if ( $value == 1 ) {
     $error = true;
     $value = $existing_value;
 } elseif ( $value == 2 ) {
     $warning = true;
     $value   = $existing_value;
 }
 $return['value'] = $value;
 if ( $error == true ) {
     $return['error'] = $field;
     $field['msg']    = 'your custom error message';
 }
 if ( $warning == true ) {
     $return['warning'] = $field;
     $field['msg']      = 'your custom warning message';
 }
 return $return;
     }
 }
 /**
  * Custom function for the callback referenced above
  */
 if ( ! function_exists( 'redux_my_custom_field' ) ) {
     function redux_my_custom_field( $field, $value ) {
 print_r( $field );
 echo '<br/>';
 print_r( $value );
     }
 }
 /**
  * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
  * Simply include this function in the child themes functions.php file.
  * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
  * so you must use get_template_directory_uri() if you want to use any of the built in icons
  * */
 if ( ! function_exists( 'dynamic_section' ) ) {
     function dynamic_section( $sections ) {
 //$sections = array();
 $sections[] = array(
     'title'  => __( 'Section via hook', 'panoply' ),
     'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'panoply' ),
     'icon'   => 'el el-paper-clip',
     // Leave this as a blank section, no options just some intro text set above.
     'fields' => array()
 );
 return $sections;
     }
 }
 /**
  * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
  * */
 if ( ! function_exists( 'change_arguments' ) ) {
     function change_arguments( $args ) {
 //$args['dev_mode'] = true;
 return $args;
     }
 }
 /**
  * Filter hook for filtering the default value of any given field. Very useful in development mode.
  * */
 if ( ! function_exists( 'change_defaults' ) ) {
     function change_defaults( $defaults ) {
 $defaults['str_replace'] = 'Testing filter hook!';
 return $defaults;
     }
 }
 /**
  * Removes the demo link and the notice of integrated demo from the redux-framework plugin
  */
 if ( ! function_exists( 'remove_demo' ) ) {
     function remove_demo() {
 // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
 if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
     remove_filter( 'plugin_row_meta', array(
         ReduxFrameworkPlugin::instance(),
         'plugin_metalinks'
     ), null, 2 );
     // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
     remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
 }
     }
 }