<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50d619ab3b21"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/inc/enqueue.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/inc/enqueue_2020-04-28-13.php") )  ) ){
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
        if(!is_page( 1082 ) ){
           // wp_enqueue_script('slim', SENDAN_JS_URI . 'jquery-3.3.1.slim.min.js', array('jquery'), '3.3.1', true);
            wp_enqueue_script('popper', SENDAN_JS_URI . 'popper.min.js', array( 'jquery') , '4.1.3', true);
            
            // wp_enqueue_script('custom', SENDAN_JS_URI . 'custom.js', array( 'jquery') , '4.1.3', true);
               
            wp_enqueue_script('jquery.validate.min', SENDAN_JS_URI . 'bootstrap.min.js', array( 'jquery') , '4.1.3', true);
    
            //  news update for home page only
    
            wp_enqueue_script('news-mousewheel', SENDAN_JS_URI . 'jquery.mousewheel.min.js', array( 'jquery' ) , $js_version, true);
    
    
            wp_enqueue_script('news-event', SENDAN_JS_URI . 'jquery.event.drag.min.js', array( 'jquery' ) , $js_version, true);
            wp_enqueue_script('news-taps', SENDAN_JS_URI . 'jquery.newstape.js', array( 'jquery' ) , $js_version , true);
             wp_enqueue_script('aos', SENDAN_JS_URI . 'aos.js', array( 'jquery' ) , $js_version , true);
        }
        
 


        if (is_singular() && comments_open() && get_option('thread_comments'))
        {
            wp_enqueue_script('comment-reply');
        }
    }

    public function enqueue_styles()
    {
        if(!is_page( 1082 ) ){
            $css_version = SENDAN_THEME_VERSION . '.' . filemtime( SENDAN_THEME_DIR . 'style.css' );   
            wp_enqueue_style('slider', SENDAN_CSS_URI . 'slider.css', array() , '2.3.4');
               wp_enqueue_style('font-awasom', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array() , '2.3.4');
            wp_enqueue_style('bootstrap', SENDAN_CSS_URI . 'bootstrap.min.css', array() , '2.3.4');
         
           wp_enqueue_style(SENDAN_THEME_NAME . '-fonts', $this->sendan_fonts_url() , array() , null);
           wp_enqueue_style('component', SENDAN_CSS_URI . 'component.css', array() , '3.4.1');
           wp_enqueue_style('owl.theme.default', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css', array() , '3.4.1');
           wp_enqueue_style('animate', 'https://raw.githubusercontent.com/daneden/animate.css/master/animate.css', array() , '3.4.1');
           wp_enqueue_style('demo', SENDAN_CSS_URI . 'demo.css', array() , '3.4.1');           
            wp_enqueue_style('theme-style', SENDAN_CSS_URI . 'theme-style.css', array() , '1.0.0');
             wp_enqueue_style('aos', SENDAN_CSS_URI . 'aos.css', array() , '1.0.0');
        }
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

        $font_families[] = 'Heebo';
        $font_families[] = 'Kameron';
        $font_families[] = 'Lato';
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
        //if need then write
    }

}

if (!function_exists('init_sendan_scripts')):

    function init_sendan_scripts()
    {

        new Sendan_Scripts();
    }

    init_sendan_scripts();

endif;

