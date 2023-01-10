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

  <div class="modal fade" id="Modal<?php echo str_replace(' ', '',get_the_title()); ?>" tabindex="-1" aria-labelledby="Modal<?php echo str_replace(' ', '',get_the_title()); ?>" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5"><?php the_title(); ?></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
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
          
            <div class="col-12 col-lg-6">
              <hr>
             <h2 class="fs-5 fw-bold"><?php the_title(); ?></h2>
              <?php the_content(); ?> 
            </div>
          
          <?php } wp_reset_postdata(); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

<?php } wp_reset_postdata(); ?>
