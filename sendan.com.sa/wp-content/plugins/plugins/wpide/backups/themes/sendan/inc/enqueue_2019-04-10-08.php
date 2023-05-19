<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29b42cb94a1a"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/inc/enqueue.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/inc/enqueue_2019-04-10-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
if (!defined('ABSPATH'))
{
    exit; // No direct access
    
}

/**
 * sendan enqueue styles & scripts
 *
 * @package sendan
 * @since 1.0.0
 * @version 1.0.0
 */
class Sendan_Scripts
{

    public function __construct()
    {

        add_action('wp_enqueue_scripts', array( $this, 'enqueue_styles' ));
        add_action('wp_enqueue_scripts', array( $this, 'enqueue_scripts' ));
        add_action('admin_enqueue_scripts', array( $this, 'load_admin_scripts' ));
        add_filter('wp_resource_hints', array( $this, 'resource_hints' ) , 10, 2);
    }

    public function enqueue_scripts()
    {

        $js_version = '1.0.0';

        wp_deregister_script('jquery');
        wp_register_script('jquery', SENDAN_JS_URI . 'jquery.min.js', array() , '3.3.1', true);
        wp_enqueue_script('jquery');

        // wp_enqueue_script('popper-min', SENDAN_JS_URI . 'popper.min.js', array('jquery'), '1.14.3', true);
        wp_enqueue_script('bootstrap', SENDAN_JS_URI . 'bootstrap.min.js', array(
            'jquery'
        ) , '4.1.3', true);

        wp_enqueue_script('jquery.validate.min', SENDAN_JS_URI . 'jquery.validate.min.js', array(
            'jquery'
        ) , '4.1.3', true);

        wp_enqueue_script('fancybox', SENDAN_JS_URI . 'jquery.fancybox.min.js', array(
            'jquery'
        ) , '3.4.1', true);

        wp_enqueue_script('owl-carousel', SENDAN_JS_URI . 'owl.carousel.min.js', array(
            'jquery'
        ) , '2.3.4', true);

        wp_enqueue_script('scrolling-tabs', SENDAN_JS_URI . 'jquery.scrolling-tabs.js', array(
            'jquery'
        ) , '2.4.0', true);

        wp_enqueue_script('mixitup-min', SENDAN_JS_URI . 'jquery.mixitup.min.js', array(
            'jquery'
        ) , '2.4.0', true);
        wp_enqueue_script('scripts', SENDAN_JS_URI . 'scripts.min.js', array(
            'jquery'
        ) , $js_version, true);

        if (is_singular() && comments_open() && get_option('thread_comments'))
        {
            wp_enqueue_script('comment-reply');
        }
    }

    public function enqueue_styles()
    {

        $css_version = SENDAN_THEME_VERSION . '.' . filemtime( SENDAN_THEME_DIR . 'style.css' );
        
        wp_enqueue_style(SENDAN_THEME_NAME . '-fonts', $this->sendan_fonts_url() , array() , null);
        wp_enqueue_style('owl-carousel', SENDAN_CSS_URI . 'owl.carousel.min.css', array() , '2.3.4');
        wp_enqueue_style('owl-theme-default', SENDAN_CSS_URI . 'owl.theme.default.min.css', array() , '2.3.4');
        wp_enqueue_style('fancybox', SENDAN_CSS_URI . 'jquery.fancybox.min.css', array() , '3.4.1');

    }

    /**
     * Register google fonts.
     */
    function sendan_fonts_url()
    {
        $fonts_url = '';

        /*
         * Translators: If there are characters in your language that are not
         * supported by Libre Franklin, translate this to 'off'. Do not translate
         * into your own language.
        */

        $font_families = array();

        $font_families[] = 'Open Sans:300,400,600,700,800';
        $font_families[] = 'Frank Ruhl Libre:300,400,700';
        $query_args = array(
            'family' => urlencode(implode('|', $font_families))
        );

        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');

        return esc_url_raw($fonts_url);
    }

    /**
     * Add preconnect for Google Fonts.
     *
     * @since Sendan 1.0
     *
     * @param array  $urls           URLs to print for resource hints.
     * @param string $relation_type  The relation type the URLs are printed.
     * @return array $urls           URLs to print for resource hints.
     */
    public function resource_hints($urls, $relation_type)
    {
        if (wp_style_is('Sendan-google-fonts', 'queue') && 'preconnect' === $relation_type)
        {

            $urls[] = array(
                'href' => 'https://fonts.gstatic.com',
                'crossorigin',
            );
        }
        return $urls;
    }

    public function load_admin_scripts()
    {

        // Load unyson icon
        if (function_exists("fw"))
        {
            fw()
                ->backend
                ->option_type('icon-v2')
                ->packs_loader
                ->enqueue_frontend_css();
        }

    }

}

if (!function_exists('init_sendan_scripts')):

    function init_sendan_scripts()
    {

        new Sendan_Scripts();
    }

    init_sendan_scripts();

endif;

