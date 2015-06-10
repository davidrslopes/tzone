<?php
/**
 * TrailZone Escalões taxonomy.
 *
 * @package WordPress
 * @subpackage TrailZone
 * @since TrailZone Theme 1.0
 */

/**
 * Register the Escalões taxonomy, this is linked with both Eventos and Inscrições CPT
 *
 * @since    1.0.0
 */

add_action( 'init', 'trailzone_register_escaloes_tax' );

function trailzone_register_escaloes_tax() {

	$labels = array(
		"name" => "escaloes",
		"label" => "Escalões",
		"menu_name" => "Escalões",
		"all_items" => "Todos os escalões",
		"edit_item" => "Editar escalão",
		"view_item" => "Visualizar escalão",
		"update_item" => "Atualizar nome do escalão",
		"add_new_item" => "Adicionar novo escalão",
		"new_item_name" => "Novo nome de escalão",
		"parent_item" => "Escalão pai",
		"parent_item_colon" => "Pertence a:",
		"search_items" => "Pesquisar escalões",
		"popular_items" => "Escalões populares",
		"separate_items_with_commas" => "Separe escalões com virgulas",
		"add_or_remove_items" => "Adicionar ou remover escalões",
		"choose_from_most_used" => "Escolha dos escalões mais comuns",
		"not_found" => "Escalões não encontrados",
	);

	$args = array(
		"labels" => $labels,
		"hierarchical" => true,
		"label" => "Escalões",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'escaloes', 'with_front' => true ),
		"show_admin_column" => false,
	);

	register_taxonomy( "escaloes", array( "evento" ), $args );
}