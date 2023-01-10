<?php 

function aladvogadosRegisterSearch() {
  register_rest_route('al-advogados/v1', 'search', array(
    'methods' => WP_REST_SERVER::READABLE, // GET request (crud)
    'callback' => 'aladvogadosSearchResults'
  )); // namespace, route, array of options
}
add_action('rest_api_init', 'aladvogadosRegisterSearch');

function aladvogadosSearchResults($dataSearch) {
  $mainQuery = new WP_QUERY(array(
    'post_type' => array('post', 'page', 'especialidade', 'beneficio'),
    's' => sanitize_text_field($dataSearch['term'])
  ));

  $results = array(
    'generalInfo' => array(),
    'beneficios' => array(),
    'especialidades' => array(),
  );

  while($mainQuery->have_posts()) {
    $mainQuery->the_post();

    if (get_post_type() == 'post' OR get_post_type() == 'page') {
      array_push($results['generalInfo'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink() ,
        'postType' => get_post_type(),
        'authorName' => get_the_author()
      ));
    }

    if (get_post_type() == 'especialidade') {
      array_push($results['especialidades'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }

    if (get_post_type() == 'benefcio') {
      array_push($results['beneficios'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink() 
      ));
    }    
  }
  return $results;
}