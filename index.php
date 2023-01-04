<?php get_header();
  pageBanner(array(
    'title' => 'Bem-vindo ao nosso blog',
    'subtitle' => 'Aqui você encontra as últimas notícias sobre o direito previdenciário.'
  ));
?>
  <!-- generic home page -->
  <div class="container text-center">
    <div class="row mx-0 mt-3 mt-lg-5 mb-4 g-4">
      <?php
      while(have_posts()) {
        the_post(); ?>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card mb-4 h-lg-100 border-0 bg-blue">
            <div class="card-body px-32 py-4 text-end br-8 text-white">
              <h5 class="card-title fs-32 text-center"><?php the_title(); ?></h5>
              <p class="text-start"><?php the_time('d/m/Y'); ?></p>
              <p class="card-text fs-18 text-center"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
            </div>
            <div class="card-footer br-8 border-0 bg-blue text-end pb-4">
              <a href="<?php the_permalink(); ?>" class="btn btn-gold">Leia mais</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <?php echo paginate_links(); ?>
  </div>
<?php  get_footer(); ?>