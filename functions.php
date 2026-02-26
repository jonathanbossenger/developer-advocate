<?php
/**
 * Jonathan Bossenger theme functions.
 *
 * @package jonathan-bossenger
 */

if ( ! function_exists( 'jb_theme_setup' ) ) :
	function jb_theme_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'custom-logo', array(
			'height'      => 192,
			'width'       => 192,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'jb_theme_setup' );

/**
 * Enqueue front-end scripts and styles.
 */
function jb_enqueue_assets() {
	wp_enqueue_style(
		'jb-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'jb-theme-toggle',
		get_template_directory_uri() . '/assets/js/theme-toggle.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'jb_enqueue_assets' );

/**
 * Add inline script to <head> to prevent FOUC on theme toggle.
 * Runs before the page renders so the saved theme is applied immediately.
 */
function jb_theme_toggle_inline() {
	?>
	<script>
	(function() {
		var saved = localStorage.getItem('theme');
		if (saved) {
			document.documentElement.setAttribute('data-theme', saved);
		}
	})();
	</script>
	<?php
}
add_action( 'wp_head', 'jb_theme_toggle_inline', 1 );

/**
 * Register block pattern categories.
 */
function jb_register_pattern_categories() {
	register_block_pattern_category(
		'jb-sections',
		array(
			'label'       => __( 'JB Homepage Sections', 'jonathan-bossenger' ),
			'description' => __( 'Sections for the Jonathan Bossenger homepage.', 'jonathan-bossenger' ),
		)
	);
}
add_action( 'init', 'jb_register_pattern_categories' );
