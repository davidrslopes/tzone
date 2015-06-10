<?php
/**
 * TrailZone theme functions and definitions
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * @package WordPress
 * @subpackage TrailZone
 * @since TrailZone Theme 1.0
 */

// THE CONSTANTS
define ( 'TRAILZONE_THEME_DIR', get_template_directory() );
define ( 'TRAILZONE_THEME_URI', get_template_directory_uri() );
define ( 'TRAILZONE_ROOT', 		get_site_url() );


//WORDPRESS BACKEND FUNCTIONS

//THE ADMIN
//require TRAILZONE_THEME_DIR . '/functions/admin/admin.php';

//THE CUSTOM POST TYPES
//require TRAILZONE_THEME_DIR . '/functions/admin/cpt-eventos.php';
//require TRAILZONE_THEME_DIR . '/functions/admin/cpt-inscricoes.php';

//THE TAXONIMIES
//require TRAILZONE_THEME_DIR . '/functions/admin/tax-provas.php';
//require TRAILZONE_THEME_DIR . '/functions/admin/tax-escaloes.php';


//WORDPRESS THEME FUNCTIONS

// THE THEME SETUP
//require TRAILZONE_THEME_DIR . '/functions/setup.php';

// THE SCRIPTS
//require TRAILZONE_THEME_DIR . '/functions/scripts.php';

// THE STYLES
//require TRAILZONE_THEME_DIR . '/functions/styles.php';