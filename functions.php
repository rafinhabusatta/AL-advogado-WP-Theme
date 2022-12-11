<?php

function aladvogados_files() {
  wp_enqueue_style('aladvogados_main_styles', get_stylesheet_uri());
  // wp_enqueue_style('aladvogados_secondary_styles', get_template_directory_uri() . '/css/s.css');
}
add_action('wp_enqueue_scripts', 'aladvogados_files');