<?php
/**
 * TrailZone Inscricoes CPT.
 *
 * @package WordPress
 * @subpackage TrailZone
 * @since TrailZone Theme 1.0
 */

/**
 * Register the Inscricoes custom post type.
 *
 * @since    1.0.0
 */

add_action( 'init', 'trailzone_register_inscricoes_cpt' );

function trailzone_register_inscricoes_cpt() {

	$labels = array(
		"name" => "Inscrições",
		"singular_name" => "Inscrição",
		"menu_name" => "Inscrições",
		"all_items" => "Inscrições",
		"add_new" => "Adicionar nova",
		"add_new_item" => "Adicionar nova inscrição",
		"edit" => "Editar",
		"edit_item" => "Editar inscrição",
		"new_item" => "Nova inscrição",
		"view" => "Visualizar",
		"view_item" => "Visualizar inscrição",
		"search_items" => "Pesquisar inscrição",
		"not_found" => "Não foram encontradas inscrições",
		"not_found_in_trash" => "Não existem inscrições no lixo",
		"parent" => "Inscrição pai",
		);

	$args = array(
		"labels" => $labels,
		"description" => "Inscrições em eventos de corrida, trail ou caminhada",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "inscricao", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 17,
		"menu_icon" => "dashicons-id",
		"supports" => array( "title" ),
	);

	register_post_type( "inscricao", $args );
}