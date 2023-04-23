<?php


/**
 * Add Parent styles to the editor
 *
 * @since 1.0.0
 *
 * @return void
function cloned_miniblock_ooak_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( '../miniblock-ooak/style.css' ); // cloned from parent, b
}
add_action( 'after_setup_theme', 'cloned_miniblock_ooak_setup' );

 */


/**
 * @TODO
 * clean up
 *
 * This is  ALMOST the same @ 3 places
 *  - twentytwentytwo-ft
 *  - twentytwentytwo-ft-core
 *
 * 
 *  - twentytwentytwo-ft__katharina-muschiol
 *
 * @package project_name
 * @version 2022.07.22
 * @author  Carsten Bach
 *
 */
function tt2km_theme_enqueue_styles() {


	
	wp_deregister_style( 'twentytwentytwo-style' );

	//
	$file_min = ( defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ) ? '' : '.min';
	// $style_css = '/style.css';
	$style_css = '/style' . $file_min.'.css';

	//
	#$template_css_url = get_template_directory_uri() . $style_css;
	#$template_css_dir = get_template_directory() . $style_css;
	$template_css_url = get_stylesheet_directory_uri() . $style_css;
	$template_css_dir = get_stylesheet_directory() . $style_css;

	//
	$version_prevent_cache = ( defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ) ? time() : filemtime( $template_css_dir );
	

	// register template styles
	wp_register_style(
		'twentytwentytwo-style',
		$template_css_url,
		array('wp-block-library'),
		$version_prevent_cache,
		'all'
	);

	//
	wp_enqueue_style( 'twentytwentytwo-style' );


#    $style_css_url = get_stylesheet_directory_uri() . $style_css;
#    $style_css_dir = get_stylesheet_directory() . $style_css;
#    // register parent styles
#    wp_register_style(
#        'twentytwentytwo-child-style',
#        $style_css_url,
#        array( 'twentytwentytwo-style' ),
#        filemtime( $style_css_dir ),
#        'all'
#    );

}

// DISABLED because file doesn't exist
// and should not be copied every time the theme is updated
// 
// add_action('wp_enqueue_scripts', 'tt2km_theme_enqueue_styles', 11 );



