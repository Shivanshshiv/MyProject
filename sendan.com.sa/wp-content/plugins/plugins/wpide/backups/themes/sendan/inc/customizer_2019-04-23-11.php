<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29891ec0b68f"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/inc/customizer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/inc/customizer_2019-04-23-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Twenty Nineteen: Customizer
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sendan_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'sendan_customize_partial_blogname',
			)
		);
		
	}
	
	/* Contact Us */
	
	$wp_customize->add_section( 'contact_us', array( 'title' => __( 'Footer Contact Settings', 'sendan' ), 'priority' => 85, ) );

	//Contact us Title setting
	$wp_customize->add_setting( 'contact_us_title', array( 'default' => __( 'Visit Our Office', 'sendan' ),  'capability' => 'edit_theme_options', 'sanitize_callback' => 'wp_filter_nohtml_kses', ) );

	//Contact us Title control
	$wp_customize->add_control( 'contact_us_title', array( 'label' => esc_html__( 'Contact Title', 'sendan' ), 'section' => 'contact_us', 'settings' => 'contact_us_title', ) );

	//Contact us Email control
	$wp_customize->add_setting( 'contact_mail', array( 'default' => 'sendan@sendan.com.sa', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'wp_kses_post', ) );

	$wp_customize->add_control( 'contact_mail', array( 'label' => esc_html__( 'Email Address', 'sendan' ), 'section' => 'contact_us', 'settings' => 'contact_mail', ) );

	//Contact us Phone setting
	$wp_customize->add_setting( 'contact_phone', array( 'default' => '+966-13-341-2343', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'wp_kses_post', ) );

	//Contact us Phone setting
	$wp_customize->add_control( 'contact_phone', array( 'label' => esc_html__( 'Phone Number', 'sendan' ), 'section' => 'contact_us', 'settings' => 'contact_phone', ) );

	
	//Contact us Address Control
	$wp_customize->add_setting( 'contact_address', array( 'default' => 'P.O. Box 11049 Tareeq <br> 114 Jubail Industrial City 31961 <br>
      Kingdom of Saudi Arabia', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'wp_kses_post', ) );

	$wp_customize->add_control( 'c_address', array( 'label' => esc_html__( 'Enter Address', 'sendan' ), 'section' => 'contact_us', 'type' => 'textarea', 'settings' => 'contact_address', ) );
	
	//Contact Form shortcode
	$wp_customize->add_setting( 'contact_form_shortcode', array( 'default' => '', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'wp_kses_post', ) );

	$wp_customize->add_control( 'c_form_shortcode', array( 'label' => esc_html__( 'Enter Contact Form Shortcode', 'sendan' ), 'section' => 'contact_us', 'type' => 'text', 'settings' => 'contact_form_shortcode', ) );
	
	//Contact Form shortcode
	$wp_customize->add_setting( 'contact_map_address', array( 'default' => '', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'wp_kses_post' ) );

	$wp_customize->add_control( 'c_map_address', array( 'label' => esc_html__( 'Enter Map Embeded code', 'sendan' ), 'section' => 'contact_us', 'type' => 'textarea', 'settings' => 'contact_map_address', ) );
   
   	//facebook setting
	$wp_customize->add_setting( 'facebook_url', array( 'default' => __( '#', 'sendan' ),  'capability' => 'edit_theme_options', 'sanitize_callback' => 'wp_filter_nohtml_kses', ) );

	//facebook control
	$wp_customize->add_control( 'facebook_url', array( 'label' => esc_html__( 'Facebook URL', 'sendan' ), 'section' => 'contact_us', 'settings' => 'facebook_url', ) );
    
    	//twitter setting
	$wp_customize->add_setting( 'twitter_url', array( 'default' => __( '#', 'sendan' ),  'capability' => 'edit_theme_options', 'sanitize_callback' => 'wp_filter_nohtml_kses', ) );

	//twitter control
	$wp_customize->add_control( 'twitter_url', array( 'label' => esc_html__( 'Twitter URL', 'sendan' ), 'section' => 'contact_us', 'settings' => 'twitter_url', ) );	
	
		//twitter setting
	$wp_customize->add_setting( 'linkedin_url', array( 'default' => __( '#', 'sendan' ),  'capability' => 'edit_theme_options', 'sanitize_callback' => 'wp_filter_nohtml_kses', ) );

	//twitter control
	$wp_customize->add_control( 'linkedin_url', array( 'label' => esc_html__( 'Linked-In URL', 'sendan' ), 'section' => 'contact_us', 'settings' => 'linkedin_url', ) );
 
    	//twitter setting
	$wp_customize->add_setting( 'flicker_url', array( 'default' => __( '#', 'sendan' ),  'capability' => 'edit_theme_options', 'sanitize_callback' => 'wp_filter_nohtml_kses', ) );

	//twitter control
	$wp_customize->add_control( 'flicker_url', array( 'label' => esc_html__( 'Flicker URL', 'sendan' ), 'section' => 'contact_us', 'settings' => 'flicker_url', ) );   	
}
add_action( 'customize_register', 'sendan_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function sendan_customize_partial_blogname() {
	bloginfo( 'name' );
}



function custom_wpkses_post_tags( $tags, $context ) {
	if ( 'post' === $context ) {
		$tags['iframe'] = array(
			'src'             => true,
			'height'          => true,
			'width'           => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
		);
	}
	return $tags;
}
add_filter( 'wp_kses_allowed_html', 'custom_wpkses_post_tags', 10, 2 );

