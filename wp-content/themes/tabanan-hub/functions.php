<?php
/**
 * tabanan-hub functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tabanan-hub
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tabanan_hub_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on tabanan-hub, use a find and replace
		* to change 'tabanan-hub' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'tabanan-hub', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'tabanan-hub' ),
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
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'tabanan_hub_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'tabanan_hub_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tabanan_hub_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tabanan_hub_content_width', 640 );
}
add_action( 'after_setup_theme', 'tabanan_hub_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tabanan_hub_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tabanan-hub' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tabanan-hub' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tabanan_hub_widgets_init' );
// -----------------------------------------------------------------------
// CUSTOM WP FUNCTIONS
// -----------------------------------------------------------------------

/**
 * Add version for cache busting
 */
require_once(get_template_directory() . '/inc/utils.php');

/**
 * Enqueue scripts and styles.
 */
function tabanan_hub_scripts() {
	// -------------------------------------
	// CSS
	// -------------------------------------
	// Libraries - Start
	wp_enqueue_style('tabanan-hub-bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css') . getFileVersionByLastMod(get_template_directory() . '/assets/css/bootstrap.min.css'));
	wp_enqueue_style('tabanan-hub-material-design', get_theme_file_uri('/assets/css/materialdesignicons.min.css') . getFileVersionByLastMod(get_template_directory() . '/assets/css/materialdesignicons.min.css'));
	// Libraries - End

	// Icons - Start
	wp_enqueue_style('tabanan-hub-line', 'https://unicons.iconscout.com/release/v3.0.3/css/line.css');
	wp_enqueue_style('tabanan-hub-solid', 'https://unicons.iconscout.com/release/v3.0.3/css/solid.css');
	wp_enqueue_style('tabanan-hub-font-awesome', get_theme_file_uri('/assets/fonts/fontawesome-pro/css/all.min.css') . getFileVersionByLastMod(get_template_directory() . '/assets/fonts/fontawesome-pro/css/all.min.css'));
	// Icons - End

	// Flexslider - Start
	wp_enqueue_style('tabanan-hub-flexslider', get_theme_file_uri('/assets/css/flexslider.css') . getFileVersionByLastMod(get_template_directory() . '/assets/css/flexslider.css'));
	// Flexslider - End

	// Slider - Start
	wp_enqueue_style('tabanan-hub-owl-carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css') . getFileVersionByLastMod(get_template_directory() . '/assets/css/owl.carousel.min.css'));
	wp_enqueue_style('tabanan-hub-owl-carousel-theme', get_theme_file_uri('/assets/css/owl.theme.default.min.css') . getFileVersionByLastMod(get_template_directory() . '/assets/css/owl.theme.default.min.css'));
	wp_enqueue_style('tabanan-hub-slick', get_theme_file_uri('/assets/css/slick.css') . getFileVersionByLastMod(get_template_directory() . '/assets/css/slick.css'));
	wp_enqueue_style('tabanan-hub-slick-theme', get_theme_file_uri('/assets/css/slick-theme.css') . getFileVersionByLastMod(get_template_directory() . '/assets/css/slick-theme.css'));
	// Slider - End
	
	// Main CSS - Start
	wp_enqueue_style('tabanan-hub-style', get_theme_file_uri('/assets/css/style.css') . getFileVersionByLastMod(get_template_directory() . '/assets/css/style.css'));
	wp_enqueue_style('tabanan-hub-colors', get_theme_file_uri('/assets/css/colors/default.css') . getFileVersionByLastMod(get_template_directory() . '/assets/css/colors/default.css'));
	wp_enqueue_style('tabanan-hub-app', get_theme_file_uri('/assets/css/app.css') . getFileVersionByLastMod(get_template_directory() . '/assets/css/app.css'));
	// Main CSS - End

	// -------------------------------------
	// JS
	// -------------------------------------
	// Javascript - Start
	wp_enqueue_script('tabanan-hub-jquery-min', get_theme_file_uri('/assets/js/jquery-3.5.1.min.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/jquery-3.5.1.min.js'), ['jquery'], null, true);
	wp_enqueue_script('tabanan-hub-bs-bundle', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/bootstrap.bundle.min.js'), ['jquery'], null, true);
	wp_enqueue_script('tabanan-hub-jquery', get_theme_file_uri('/assets/js/jquery.easing.min.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/jquery.easing.min.js'), ['jquery'], null, true);
	wp_enqueue_script('tabanan-hub-scrollspy', get_theme_file_uri('/assets/js/scrollspy.min.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/scrollspy.min.js'), ['jquery'], null, true);
	// Javascript - End

	// Flexslider - Start
	wp_enqueue_script('tabanan-hub-flexslider', get_theme_file_uri('/assets/js/jquery.flexslider-min.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/jquery.flexslider-min.js'), ['jquery'], null, true);
	wp_enqueue_script('tabanan-hub-flexslider-init', get_theme_file_uri('/assets/js/flexslider.init.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/flexslider.init.js'), ['jquery'], null, true);
	// Flexslider - End

	// Owl Slider - Start
	wp_enqueue_script('tabanan-hub-owl-carousel', get_theme_file_uri('/assets/js/owl.carousel.min.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/owl.carousel.min.js'), ['jquery'], null, true);
	wp_enqueue_script('tabanan-hub-owl-carousel-init', get_theme_file_uri('/assets/js/owl.init.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/owl.init.js'), ['jquery'], null, true);
	wp_enqueue_script('tabanan-hub-slick', get_theme_file_uri('/assets/js/slick.min.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/slick.min.js'), ['jquery'], null, true);
	wp_enqueue_script('tabanan-hub-slick-init', get_theme_file_uri('/assets/js/slick.init.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/slick.init.js'), ['jquery'], null, true);
    // Owl Slider - End

    // Icons - Start
	wp_enqueue_script('tabanan-hub-feather', get_theme_file_uri('/assets/js/feather.min.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/feather.min.js'), ['jquery'], null, true);
	wp_enqueue_script('tabanan-hub-unicons', 'https://unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js', null, null, true);
    // Icons - End
    
    // Main Js - Start
	wp_enqueue_script('tabanan-hub-switcher', get_theme_file_uri('/assets/js/switcher.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/switcher.js'), ['jquery'], null, true);
	wp_enqueue_script('tabanan-hub-app', get_theme_file_uri('/assets/js/app.js') . getFileVersionByLastMod(get_template_directory() . '/assets/js/app.js'), ['jquery'], null, true);
	// Main Js - End
	// -------------------------------------
}
add_action( 'wp_enqueue_scripts', 'tabanan_hub_scripts' );
// -----------------------------------------------------------------------

/**
 * Disable wordpress admin bar
 */
add_filter('show_admin_bar', '__return_false');

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
// -----------------------------------------------------------------------

// -----------------------------------------------------------------------
function my_deregister_scripts(){
	wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');
// -----------------------------------------------------------------------

// -----------------------------------------------------------------------
function remove_gutenberg_styles() {
	wp_dequeue_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'remove_gutenberg_styles', 100 );
// -----------------------------------------------------------------------

// -----------------------------------------------------------------------
// BASIC WP_HEAD
// -----------------------------------------------------------------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
// -----------------------------------------------------------------------

// -----------------------------------------------------------------------
function remove_widget_action() {
    global $wp_widget_factory;

    remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
}
add_action('wp_head', 'remove_widget_action', 1);
// -----------------------------------------------------------------------

// -----------------------------------------------------------------------
// REMOVE https://api.w.org
// -----------------------------------------------------------------------
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
// -----------------------------------------------------------------------

/**
 * Register custom posts with custom field area
 */
require get_template_directory() . '/inc/custom-posts/custom-post-news.php';
require get_template_directory() . '/inc/custom-posts/custom-post-product.php';
// -----------------------------------------------------------------------

/**
 * Filter Usage Page Navi
 */
add_filter('wp_pagenavi_class_previouspostslink', 'theme_pagination_previouspostslink_class');
add_filter('wp_pagenavi_class_nextpostslink', 'theme_pagination_nextpostslink_class');
add_filter('wp_pagenavi_class_page', 'theme_pagination_page_class');

function theme_pagination_previouspostslink_class($class_name) {
  return 'pagination__control-link pagination__control-link--previous';
}

function theme_pagination_nextpostslink_class($class_name) {
  return 'pagination__control-link pagination__control-link--next';
}

function theme_pagination_page_class($class_name) {
  return 'pagination__current-page';
}
// -----------------------------------------------------------------------

/**
 * Defer parsing of JS
 */
function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    return str_replace('src', 'defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
// -----------------------------------------------------------------------

/**
 * override aiosp title for custom post type archive.
 * using custom post type label
 * @param $title
 * @return mixed
 */
function post_type_title_custom_archive($title){
    if(is_post_type_archive()){
        $post_type = get_post_type_object(get_post_type());
        if($post_type->labels->archive_seo_title){
            $title = $post_type->labels->archive_seo_title;
        }
    }
    return $title;
}

add_filter('aioseop_title', 'post_type_title_custom_archive', 1);

/**
 * @param $description
 * @return mixed
 */
function post_type_description_custom_archive($description){
	if(is_post_type_archive()){
		$post_type = get_post_type_object(get_post_type());
		if ($post_type->labels->archive_seo_descriptions){
			$description = $post_type->labels->archive_seo_descriptions;
		}
	}
	return $description;
}

add_filter('aioseop_description', 'post_type_description_custom_archive', 1);
// -----------------------------------------------------------------------