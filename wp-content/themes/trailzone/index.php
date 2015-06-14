<?php
/**
 * TrailZone - Main
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage TrailZone
 * @since TrailZone Theme 1.0
 */

get_header(); ?>

<main class="container container-lg">

<?php
	//THIS CHECKS IF THE USER IS LOGGED IN
	if ( is_user_logged_in() ):
?>

	<section>
		<header class="text-center">
			<img class="img-responsive center-block" src="<?php echo TRAILZONE_THEME_URI; ?>/assets/img/trailzone-logo.png" title="TrailZone - Trail running & trekking Portugal" alt="TrailZone - Trail running & trekking Portugal">
		</header>
		<article>
			<p>Bem vindo.</p>
		</article>
	</section>

<?php else: ?>

	<section class="col-md-offset-3 col-md-6 tz-offline">
		<header class="text-center">
			<a href="http://trailzone.net" title="TrailZone.net" alt="TrailZone.net"><img class="img-responsive center-block" src="<?php echo TRAILZONE_THEME_URI; ?>/assets/img/trailzone-logo.png" title="TrailZone - Trail running & trekking Portugal" alt="TrailZone - Trail running & trekking Portugal"></a>
		</header>
		<p>Este site está em fase de densenvolvimento, por favor volte mais tarde ou volte para o portal <a href="http://trailzone.net" title="TrailZone.net" alt="TrailZone.net">aqui</a>.</p>
	</section>

<?php endif; ?>

</main>

<?php get_footer();