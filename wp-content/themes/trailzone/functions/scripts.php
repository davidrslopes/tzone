<?php
/**
 * TrailZone theme enqueue/dequeue/requeue scripts and styles
 *
 * @package WordPress
 * @subpackage TrailZone
 * @since TrailZone Theme 1.0
 */

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since TrailZone Theme 1.0
 */
add_action( 'wp_enqueue_scripts', 'trailzone_theme_enqueue_scripts' );

function trailzone_theme_enqueue_scripts() {

	// Dynamic version, busts the JS & CSS cache - don't use after launch
	$version = filemtime( TRAILZONE_THEME_DIR . '/assets/js/scripts.min.js' );

	wp_enqueue_style(
		'app-style',
		TRAILZONE_THEME_URI . '/assets/css/style.min.css',
		array(),
		$version
	);

	wp_enqueue_script(
		'app-script',
		TRAILZONE_THEME_URI . '/assets/js/scripts.min.js',
		array(),
		$version,
		true
	);

}

/**
 * Remove ?ver=xxx from enqueued scripts/css.
 *
 * @since TrailZone Theme 1.0
 * @see   http://wpengineer.com/2513/filename-cache-busting-wordpress/ for eventual caching issues.
 * @return string      Clean query string.
 */
add_filter( 'style_loader_src', 'trailzone_theme_remove_script_version', 9999 );
add_filter( 'script_loader_src', 'trailzone_theme_remove_script_version', 9999 );

function trailzone_theme_remove_script_version( $src ) {

    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;

}

/**
 * Add 'async' to the script tag.
 *
 * @since TrailZone Theme 1.0
 * @return string      Async JS URL
 */
add_filter ( 'script_loader_tag', 'trailzone_theme_load_js_async', 10, 3 );

function trailzone_theme_load_js_async( $tag, $handle ) {

	if ( 'app-script' == $handle ) {
		return str_replace( '<script type', '<script async type', $tag );
	} else {
		return $tag;
	}

};
