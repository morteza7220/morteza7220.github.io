<?php
/**
 * Theme functions and definitions.
 *
 * @package Custom_Mobile_Nav_Theme
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Theme setup.
if ( ! function_exists( 'custom_mobile_nav_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function custom_mobile_nav_theme_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Register navigation menus.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'custom-mobile-nav-theme' ),
				'mobile'  => esc_html__( 'Mobile Menu', 'custom-mobile-nav-theme' ),
			)
		);

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
}
add_action( 'after_setup_theme', 'custom_mobile_nav_theme_setup' );

// Enqueue scripts and styles.
if ( ! function_exists( 'custom_mobile_nav_theme_scripts' ) ) {
	/**
	 * Enqueues scripts and styles.
	 */
	function custom_mobile_nav_theme_scripts() {
		// Enqueue theme stylesheet.
		wp_enqueue_style( 'custom-mobile-nav-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'custom_mobile_nav_theme_scripts' );
