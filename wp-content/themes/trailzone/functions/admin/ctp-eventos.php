<?php
/**
 * TrailZone Eventos CPT.
 *
 * @package WordPress
 * @subpackage TrailZone
 * @since TrailZone Theme 1.0
 */

/**
 * Register the Eventos custom post type.
 *
 * @since    1.0.0
 */

add_action( 'init', 'trailzone_register_eventos_cpt' );

function trailzone_register_eventos_cpt() {

	$labels = array(
		"name" => "Eventos",
		"singular_name" => "Evento",
		"menu_name" => "Eventos",
		"all_items" => "Todos os eventos",
		"add_new" => "Adicionar novo",
		"add_new_item" => "Adicionar novo evento",
		"edit" => "Editar",
		"edit_item" => "Editar evento",
		"new_item" => "Novo evento",
		"view" => "Visualizar",
		"view_item" => "Visualizar evento",
		"search_items" => "Pesquisar evento",
		"not_found" => "Não foram encontrados eventos",
		"not_found_in_trash" => "Não existem eventos no lixo",
		"parent" => "Evento pai",
	);

	$args = array(
		"labels" => $labels,
		"description" => "Gestão de eventos de corrida, trail ou caminhada",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "evento", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 16,
		"menu_icon" => "dashicons-calendar",
		"supports" => array( "title", "revisions", "thumbnail" ),
		"taxonomies" => array( "provas" )
	);

	register_post_type( "evento", $args );
}