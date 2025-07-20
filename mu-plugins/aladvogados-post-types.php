<?php
function alAdvogados_post_types() {
  
  // Especialidade post type
  register_post_type('especialidade', array(
    'rewrite' => array('slug' => 'especialidades'),
    'public' => true,
    'labels' => array(
      'name' => 'Especialidades',
      'add_new_item' => 'Adicionar nova especialidade',
      'edit_item' => 'Editar especialidade',
      'all_items' => 'Todas as especialidades',
      'singular_name' => 'Especialidade'
    ),
    'menu_icon' => 'dashicons-bank',
    'supports' => array('title', 'editor'),
    'show_in_rest' => true,
  ));

  // Benefício post type
  register_post_type('beneficio', array(
    'rewrite' => array('slug' => 'beneficios'),
    'public' => true,
    'labels' => array(
      'name' => 'Benefícios',
      'add_new_item' => 'Adicionar novo benefício',
      'edit_item' => 'Editar benefício',
      'all_items' => 'Todos os benefícios',
      'singular_name' => 'Benefício'
    ),
    'menu_icon' => 'dashicons-index-card',
    'supports' => array('title', 'editor'),
    'show_in_rest' => true,
  ));
}
add_action('init', 'alAdvogados_post_types');
?>