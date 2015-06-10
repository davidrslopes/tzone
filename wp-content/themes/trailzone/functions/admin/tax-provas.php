<?php
/**
 * TrailZone Provas taxonomy.
 *
 * @package WordPress
 * @subpackage TrailZone
 * @since TrailZone Theme 1.0
 */

/**
 * Register the Provas taxonomy, this is linked with both Eventos and Inscrições CPT
 *
 * @since    1.0.0
 */

add_action( 'init', 'trailzone_register_provas_tax' );

function trailzone_register_provas_tax() {

	$labels = array(
		"name" => "provas",
		"label" => "Provas",
		"menu_name" => "Provas",
		"all_items" => "Todas as provas",
		"edit_item" => "Editar prova",
		"view_item" => "Visualizar prova",
		"update_item" => "Atualizar nome da prova",
		"add_new_item" => "Adicionar nova prova",
		"new_item_name" => "Novo nome de prova",
		"parent_item" => "Prova pai",
		"parent_item_colon" => "Pertence a:",
		"search_items" => "Pesquisar provas",
		"popular_items" => "Provas populares",
		"separate_items_with_commas" => "Separe provas com virgulas",
		"add_or_remove_items" => "Adicionar ou remover provas",
		"choose_from_most_used" => "Escolha das provas mais comuns",
		"not_found" => "Provas não encontradas",
	);

	$args = array(
		"labels" => $labels,
		"hierarchical" => false,
		"label" => "Provas",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'provas', 'with_front' => true ),
		"show_admin_column" => false,
	);

	register_taxonomy( "provas", array( "evento" ), $args );
}