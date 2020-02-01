<?php 
require_once( get_theme_file_path("/lib/tgm-plugin/class-tgm-plugin-activation.php") );
require_once( get_theme_file_path("/inc/tgm.php") );
require_once( get_theme_file_path( "/lib/companion/companion-plugin.php" ) );
require_once( get_theme_file_path( "/widgets/social-icons-widget.php" ) );
require_once( get_theme_file_path( "/lib/csf/cs-framework.php" ) );
require_once( get_theme_file_path( "/inc/mj-wp-breadcrumb/mj-wp-breadcrumb.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/page-landing.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/page-about.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/page-attorneys.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/page-contact.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/page-practice-.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/page-testimonials.php" ) );
require_once( get_theme_file_path( "/inc/metaboxes/page-booking.php" ) );
define( 'CS_ACTIVE_FRAMEWORK', false ); // default true
define( 'CS_ACTIVE_METABOX', true ); // default true
define( 'CS_ACTIVE_TAXONOMY', false ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', false ); // default true
if ( ! file_exists( get_template_directory() . '/assets/nav-walker/class-wp-bootstrap-navwalker.php' ) ) {
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    require_once get_template_directory() . '/assets/nav-walker/class-wp-bootstrap-navwalker.php';
}
if ( site_url() == "http://localhost" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}
function jurist_theme_setup() {
	load_theme_textdomain( 'jurist', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
    $jurist_custom_header_details = array(
        'header-text'        => true,
        'default-text-color' => '#222',
        'width'              => 1200,
        'height'             => 600,
        'flex-height'        => true,
        'flex-width'         => true,
    );
    add_theme_support( "custom-header", $jurist_custom_header_details );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'jurist' ),
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'gallery',
		'caption',
		'comment-list',
	) );
    $jurist_custom_logo_defaults = array(
        "width"  => '100px',
        "height" => '60px'
    );
    add_theme_support( "custom-logo", $jurist_custom_logo_defaults );
	add_theme_support( 'custom-background', apply_filters( 'jurist_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    // custom Image size.
    add_image_size( "jurist-team-image", 500, 500,array("center","center"), true); 
}
add_action( 'after_setup_theme', 'jurist_theme_setup' );
function jurist_add_editor_styles() {
	add_editor_style( '/lib/custom-editor-style.css' );
}
add_action( 'admin_init', 'jurist_add_editor_styles' );
function jurist_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jurist_content_width', 1170 );
}
add_action( 'after_setup_theme', 'jurist_content_width', 0 );
function jurist_assets(){
	wp_enqueue_style('google-fonts','fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900');
    wp_enqueue_style('google-fonts-swap','fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap');
	wp_enqueue_style('bootstrap-css',get_theme_file_uri('/assets/css/open-iconic-bootstrap.min.css'));
	wp_enqueue_style('carousel-css',get_theme_file_uri('/assets/css/owl.carousel.min.css'));
    wp_enqueue_style('animate-css',get_theme_file_uri('/assets/css/animate.css'));
	wp_enqueue_style('theme-default-css',get_theme_file_uri('/assets/css/owl.theme.default.min.css'));
    wp_enqueue_style('magnific-css',get_theme_file_uri('/assets/css/magnific-popup.css'));
	wp_enqueue_style('ionicons-css',get_theme_file_uri('/assets/css/ionicons.min.css'));
    wp_enqueue_style('fonts-css',get_theme_file_uri('/assets/fonts/flaticon/font/flaticon.css'));
    wp_enqueue_style('icomoon-css',get_theme_file_uri('/assets/css/icomoon.css'));
    wp_enqueue_style('aos-css',get_theme_file_uri('/assets/css/aos.css'));
    wp_enqueue_style('jurist-design-css',get_theme_file_uri('/assets/css/style.css'));
	wp_enqueue_style('jurist-css',get_stylesheet_uri(),null,VERSION);
	wp_enqueue_script('bootstrap-js',get_theme_file_uri('/assets/js/bootstrap.min.js'),['jquery'],'default',true);
	wp_enqueue_script('migrate-js',get_theme_file_uri('/assets/js/jquery-migrate-3.0.1.min.js'),['jquery'],'default',true);
	wp_enqueue_script('carousel-js',get_theme_file_uri('/assets/js/owl.carousel.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('easing-js',get_theme_file_uri('/assets/js/jquery.easing.1.3.js'),['jquery'],VERSION,true);
    wp_enqueue_script('popper-js',get_theme_file_uri('/assets/js/popper.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('waypoints-js',get_theme_file_uri('/assets/js/jquery.waypoints.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('stellar-js',get_theme_file_uri('/assets/js/jquery.stellar.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('magnific-js',get_theme_file_uri('/assets/js/jquery.magnific-popup.min.js'),['jquery'],VERSION,true);
    wp_enqueue_script('aos-js',get_theme_file_uri('/assets/js/aos.js'),['jquery'],time(),true); 
    wp_enqueue_script('animateNumber-js',get_theme_file_uri('/assets/js/jquery.animateNumber.min.js'),['jquery'],time(),true);
    wp_enqueue_script('scrollax-js',get_theme_file_uri('/assets/js/scrollax.min.js'),['jquery'],time(),true);   
    wp_enqueue_script('google-map-js',get_theme_file_uri('/assets/js/google-map.js'),['jquery'],time(),true);   
    wp_enqueue_script('googlemap-js',get_theme_file_uri('//maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false'),['jquery'],time(),true);    
    wp_enqueue_style('mailchimp-css','//cdn-images.mailchimp.com/embedcode/classic-10_7.css');
		$style = <<<EOD
#mc_embed_signup {
    background: #fff;
    clear: left;
    font: 14px Helvetica, Arial, sans-serif;
}
EOD;
		wp_add_inline_style('mailchimp-css',$style);

		wp_enqueue_script('mailchimp-js','//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js',array('jquery'),'1.0',true);
		$script = <<<EOD
(function ($) {
    window.fnames = new Array();
    window.ftypes = new Array();
    fnames[0] = 'EMAIL';
    ftypes[0] = 'email';
    fnames[1] = 'FNAME';
    ftypes[1] = 'text';
    fnames[2] = 'LNAME';
    ftypes[2] = 'text';
    fnames[3] = 'ADDRESS';
    ftypes[3] = 'address';
    fnames[4] = 'PHONE';
    ftypes[4] = 'phone';
}(jQuery));
var \$mcj = jQuery.noConflict(true);
EOD;

		wp_add_inline_script('mailchimp-js',$script);
    
    
    
    wp_enqueue_script('main-js',get_theme_file_uri('/assets/js/main.js'),['jquery'],time(),true);
}
add_action('wp_enqueue_scripts','jurist_assets');
function jurist_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Single page Sidebar', 'jurist' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jurist' ),
		'before_widget' => '<section id="%1$s" class="p-2 widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'jurist' ),
		'id'            => 'sidebar-blog',
		'description'   => esc_html__( 'Add widgets here.', 'jurist' ),
		'before_widget' => '<div id="%1$s" class="p-2 text-light widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title text-light">',
		'after_title'   => '</h3>',
	) );
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar one', 'jurist' ),
		'id'            => 'footer-sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jurist' ),
		'before_widget' => '<div id="%1$s" class="pl-2 text-light widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-heading mb-4 text-light widget-title">',
		'after_title'   => '</h3>',
	) );
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar Two', 'jurist' ),
		'id'            => 'footer-sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'jurist' ),
		'before_widget' => '<div id="%1$s" class="list-unstyled pl-2 text-light widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-heading mb-4 text-light widget-title">',
		'after_title'   => '</h3>',
	) );
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar three', 'jurist' ),
		'id'            => 'footer-sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'jurist' ),
		'before_widget' => '<div id="%1$s" class="pl-2 text-light widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-heading mb-4 widget-title text-light">',
		'after_title'   => '</h3>',
	) );
        ;register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar four', 'jurist' ),
		'id'            => 'footer-sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'jurist' ),
		'before_widget' => '<div id="%1$s" class="pl-2 text-light widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-heading mb-4 text-light widget-title">',
		'after_title'   => '</h3>',
	) );   
    ;register_sidebar( array(
		'name'          => esc_html__( 'Google Map', 'jurist' ),
		'id'            => 'google-map',
		'description'   => esc_html__( 'Add widgets here.', 'jurist' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title mb-5">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'jurist_widgets_init' );
function jurist_csf_init(){
    CSFramework_metabox::instance(array());
}
add_action('init', 'jurist_csf_init');
function jurist_about_page_template_banner() {
    if ( is_page() ) {
        if ( current_theme_supports( "custom-header" ) ) {
            ?>
<style>
    .hero-wrap {
        background-image: url(<?php echo header_image();
        ?>);
        background-size: cover;
    }

</style>
<?php
        }
    }
}
add_action( "wp_head", "jurist_about_page_template_banner", 11 );
function saneem_search_form( $form ) {
    $homedir      = home_url( "/" );
    $label        = __( "Search for:", "saneem" );
    $button_label = __( "Search", "saneem" );
    $newform = <<<FORM
<form role="search" method="get" class="header__search-form" action="{$homedir}">
    <label>
        <span class="hide-content">{$label}</span>
        <input type="search" class="form-control" placeholder="Type Keywords" value="" name="s"
               title="{$label}" autocomplete="off">
    </label>
    {$post_type}
    <input type="submit" class="btn btn-primary btn-sm" value="{$button_label}">
</form>
FORM;
    return $newform;
}
add_filter( "get_search_form", "saneem_search_form" );
function saneem_highlight_search_results( $text ) {
    if ( is_search() ) {
        $pattern = '/(' . join( '|', explode( ' ', get_search_query() ) ) . ')/i';
        $text    = preg_replace( $pattern, '<span class="search-highlight">\0</span>', $text );
    }
    return $text;
}
add_filter( 'the_content', 'saneem_highlight_search_results' );
add_filter( 'the_excerpt', 'saneem_highlight_search_results' );
add_filter( 'the_title', 'saneem_highlight_search_results' );















