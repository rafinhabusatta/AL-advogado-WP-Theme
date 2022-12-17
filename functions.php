<?php

function aladvogados_files() {
  wp_enqueue_style('google_fonts_preconnect_api', '//fonts.googleapis.com');
  wp_enqueue_style('google_fonts_preconnect_static', '//fonts.gstatic.com');
  wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
  wp_enqueue_style('bootstrap_css', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
  wp_enqueue_style('aladvogados_main_styles', get_stylesheet_uri());
  wp_enqueue_style('aladvogados_secondary_styles', get_theme_file_uri('/css/bootstrap_extention.css'));
  wp_enqueue_script('bootstrap_js', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'aladvogados_files');

function aladvogados_features() {
  // register_nav_menu('headerMenuLocation', 'Header Menu Location');
  // register_nav_menu('FooterLocationOne', 'Footer Location One');
  // register_nav_menu('FooterLocationTwo', 'Footer Location Two');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('professorLandscape', 400, 260, true); //width, height, crop
  add_image_size('professorPortrait', 480, 650, true);
  add_image_size('pageBanner', 1500, 350, true);
}
add_action('after_setup_theme', 'aladvogados_features');

function aladvogados_adjust_queries($query) {
  if (!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }

  if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
      array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
      )
      ));
  }
}
add_action('pre_get_posts', 'aladvogados_adjust_queries');