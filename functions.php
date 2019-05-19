<?php
/**
 * It's Dave Beach functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package It's_Dave_Beach
 */

if ( ! function_exists( 'itsdavebeach_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function itsdavebeach_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on It\'s Dave Beach, use a find and replace
		 * to change 'itsdavebeach' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'itsdavebeach', get_template_directory() . '/languages' );

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

		// Add theme support for menus
		register_nav_menus( array(
			'primary-menu' => __('Primary'),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
        
        remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'start_post_rel_link');
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'adjacent_posts_rel_link');
	}
endif;
add_action( 'after_setup_theme', 'itsdavebeach_setup' );

/**
 * Enqueue scripts and styles.
 */
function itsdavebeach_scripts() {
	wp_enqueue_style( 'itsdavebeach-style', get_stylesheet_uri() );
	wp_enqueue_style( 'davebeach-stylesheet', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all' );

	wp_enqueue_script( 'skrollr', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js', null, '0.6.30', true );
	wp_enqueue_script( 'davebeach-scripts', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true );

	if ( is_home() ) {
		wp_enqueue_style( 'itsdavebeach-style__home', get_template_directory_uri() . '/dist/css/home.css' );

		wp_enqueue_script( 'itsdavebeach__scroll', get_template_directory_uri() . '/js/scroll.js', null, 1.0, true);
		wp_enqueue_script( 'itsdavebeach__single-page-nav', get_template_directory_uri() . '/js/single-page-nav.js', null, 1.0, true);
		wp_enqueue_script( 'itsdavebeach__home', get_template_directory_uri() . '/js/home.js', null, 1.0, true);
	} else {
		wp_enqueue_script( 'itsdavebeach-content-page', get_template_directory_uri() . '/js/content-page.js', null, 1.0, true);
	}
}
add_action( 'wp_enqueue_scripts', 'itsdavebeach_scripts' );

function itsdavebeach_add_googleanalytics() { ?>
	<script>
		window.ga = function() {
			ga.q.push(arguments);
		};
		ga.q = [];
		ga.l = +new Date();
		ga('create', 'UA-132742582-1', 'auto');
		ga('send', 'pageview');
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async defer></script>
<?php }
add_action('wp_footer', 'itsdavebeach_add_googleanalytics');
