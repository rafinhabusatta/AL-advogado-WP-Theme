<!-- Modal -->
<?php
  $Specialties = new WP_QUERY(array(
    'posts_per_page' => -1,
    'post_type' => 'especialidade',
    'orderby' => 'title',
    'order' => 'ASC'
  ));
  while($Specialties->have_posts()) {
    $Specialties->the_post(); 
?>

  <div class="modal fade" id="Modal<?php echo get_the_ID(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><?php the_title(); ?></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php
            $Beneficios = new WP_QUERY(array(
              'posts_per_page' => -1,
              'post_type' => 'beneficio',
              'orderby' => 'title',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'especialidade_relacionada',
                  'compare' => 'LIKE',
                  'value' => '"' . get_the_ID() . '"' // get_the_ID() is the id of the current benefit
                )
              )
            ));
            while($Beneficios->have_posts()) {
              $Beneficios->the_post(); 
          ?>
          <h2 class="fs-6 fw-bold"><?php the_title(); ?></h2>
          <?php the_content(); } wp_reset_postdata(); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

<?php } wp_reset_postdata(); ?>
