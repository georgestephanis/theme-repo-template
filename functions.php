<?php
/**
 * Theme Repo Template theme functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ThemeRepoTemplate
 */

namespace ThemeRepoTemplate\Functions;

/**
 * Set up any theme supports we may need, and starter content.
 */
function on_after_setup_theme() {
	require get_template_directory() . '/inc/starter-content.php';
	\add_theme_support( 'starter-content', \ThemeRepoTemplate\StarterContent\get_starter_content() );
}
\add_action( 'after_setup_theme', __NAMESPACE__ . '\on_after_setup_theme' );

/**
 * Handle addition of any enqueues for the front-end.
 *
 * @return void
 */
function enqueue_block_assets() {
	// Handle adding the theme's style.css for generic non-block-specific styles.
	\wp_enqueue_style(
		'theme-repo-template',
		\get_stylesheet_uri(),
		array(),
		(string) filemtime( __DIR__ . '/style.css' )
	);
}
\add_action( 'enqueue_block_assets', __NAMESPACE__ . '\enqueue_block_assets' );

/**
 * Handle addition of any enqueues for the block editor only.
 *
 * @return void
 */
function enqueue_block_editor_assets() {
	\wp_enqueue_script(
		'theme-repo-template',
		\get_theme_file_uri( 'js/block-editor.js' ),
		array(),
		(string) filemtime( __DIR__ . '/js/block-editor.js' ),
		true
	);
}
\add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );
