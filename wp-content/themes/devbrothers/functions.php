<?php
/**
 * Devbrothers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Devbrothers
 */

if ( ! function_exists( 'devbrothers_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function devbrothers_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Devbrothers, use a find and replace
	 * to change 'devbrothers' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'devbrothers', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'devbrothers' ),
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
	add_theme_support( 'custom-background', apply_filters( 'devbrothers_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'devbrothers_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function devbrothers_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'devbrothers_content_width', 640 );
}
add_action( 'after_setup_theme', 'devbrothers_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function devbrothers_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'devbrothers' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'devbrothers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'devbrothers_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function devbrothers_scripts() {
	wp_enqueue_style( 'devbrothers-style', get_stylesheet_uri() );

	wp_enqueue_script( 'devbrothers-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'devbrothers-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'devbrothers_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// Register Custom Post Type
function eferka_courses() {

	$labels = array(
		'name'                  => _x( 'Kursy', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Kurs', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Kursy', 'text_domain' ),
		'name_admin_bar'        => __( 'Kurs', 'text_domain' ),
		'archives'              => __( 'Kursy', 'text_domain' ),
		'attributes'            => __( 'Atrybuty kursu', 'text_domain' ),
		'parent_item_colon'     => __( 'Nadrzędny kurs', 'text_domain' ),
		'all_items'             => __( 'Wszystkie kursy', 'text_domain' ),
		'add_new_item'          => __( 'Dodaj nowy kurs', 'text_domain' ),
		'add_new'               => __( 'Dodaj nowy', 'text_domain' ),
		'new_item'              => __( 'Nowy kurs', 'text_domain' ),
		'edit_item'             => __( 'Edytuj kurs', 'text_domain' ),
		'update_item'           => __( 'Aktualizuj kurs', 'text_domain' ),
		'view_item'             => __( 'Zobacz kurs', 'text_domain' ),
		'view_items'            => __( 'Zobacz kursy', 'text_domain' ),
		'search_items'          => __( 'Szukaj kursu', 'text_domain' ),
		'not_found'             => __( 'Nie znaleziono kursów', 'text_domain' ),
		'not_found_in_trash'    => __( 'Nie znaleziono kursów', 'text_domain' ),
		'featured_image'        => __( 'Obrazek kursu', 'text_domain' ),
		'set_featured_image'    => __( 'Dodaj obrazek kursu', 'text_domain' ),
		'remove_featured_image' => __( 'Usuń obrazek kursu', 'text_domain' ),
		'use_featured_image'    => __( 'Użyj jako obrazek kursu', 'text_domain' ),
		'insert_into_item'      => __( 'Dodaj do kursu', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'kursy',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Kurs', 'text_domain' ),
		'description'           => __( 'Kursy EFERKA', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'eferka_course', $args );

}
add_action( 'init', 'eferka_courses', 0 );

add_action('admin_menu','remove_default_post_type');

function remove_default_post_type() {
	remove_menu_page('edit.php');
}
