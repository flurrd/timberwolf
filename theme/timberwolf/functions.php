<?php
/**
 * timberwolf functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package timberwolf
 */

if ( ! function_exists( 'timberwolf_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function timberwolf_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on timberwolf, use a find and replace
		 * to change 'timberwolf' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'timberwolf', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Primary', 'timberwolf' ),
			'main-menu-top' => esc_html__( 'Primary-Top', 'timberwolf' ),
			'mobile-menu' => esc_html__( 'push-menu', 'timberwolf' ),
			'footer-menu' => esc_html__( 'footer-nav', 'timberwolf' ),			
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'timberwolf_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'timberwolf_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function timberwolf_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'timberwolf_content_width', 640 );
}
add_action( 'after_setup_theme', 'timberwolf_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function timberwolf_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'timberwolf' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'timberwolf' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'timberwolf_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function timberwolf_scripts() {


	//Vendor scripts common to all pages
	wp_register_script( 'timberwolf-vendor', get_template_directory_uri() . '/dist/vendor.js', array(), date("H:i:s"), true );
	wp_enqueue_script('timberwolf-vendor');

	wp_enqueue_script ( 'skrollr', get_template_directory_uri() . '/js/skrollr.min.js' );

	//Global scripts common to all pages
    wp_register_script( 'timberwolf-main', get_template_directory_uri() . '/dist/main.js', array(), date("H:i:s"), true );
	wp_enqueue_script('timberwolf-main');

  	wp_register_script( 'font-awesome', 'https://kit.fontawesome.com/595162865f.js', null, null, true );
	wp_enqueue_script('font-awesome');



	wp_enqueue_style( 'timberwolf-main-style', get_template_directory_uri() . '/dist/main.css', array(), date("H:i:s"));

	//Register template specific scripts
	wp_register_script( 'timberwolf-home', get_template_directory_uri() . '/dist/home.js', array(), date("H:i:s"), true );
	wp_register_script( 'timberwolf-single', get_template_directory_uri() . '/dist/single.js', array(), date("H:i:s"), true );
	wp_register_script( 'timberwolf-category', get_template_directory_uri() . '/dist/category.js', array(), date("H:i:s"), true );	


	//Conditionally include template specific scripts
    if(is_front_page()){
		wp_enqueue_script('timberwolf-home');
    }
	if ( is_singular()) {
		wp_enqueue_script( 'timberwolf-single' );
		wp_enqueue_style( 'timberwolf-single-style', get_template_directory_uri() . '/dist/single.css', array(), date("H:i:s"));
	}
	if ( is_category()) {
		wp_enqueue_script( 'timberwolf-category' );
		wp_enqueue_style( 'timberwolf-category-style', get_template_directory_uri() . '/dist/category.css', array(), date("H:i:s"));
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'timberwolf_scripts' );

function namespace_add_custom_types( $query ) {
	if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
	  $query->set( 'post_type', array(
	   'post', 'nav_menu_item', 'service', 'market'
		  ));
		return $query;
	  }
  }

add_filter( 'pre_get_posts', 'namespace_add_custom_types' );



function my_cptui_add_post_types_to_archives( $query ) {
	// We do not want unintended consequences.
	if ( is_admin() || ! $query->is_main_query() ) {
		return;    
	}

	if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		$cptui_post_types = cptui_get_post_type_slugs();

		$query->set(
			'post_type',
			array_merge(
				array( 'post' ),
				$cptui_post_types
			)
		);
	}
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_types_to_archives' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

