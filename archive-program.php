<?php get_header();  ?>
  <!-- generic blog post page -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row mx-0 mx-md-4 px-2">
          <div class="col-12 px-md-0">
            <h1 class="text-center mb-4 text-uppercase">All Programs</h1>
          </div>
        </div>
        <div class="row mx-0 mx-md-4 px-2">
          <div class="col-12 px-md-0 m-xl-auto">
            <p class="class-justify">
              There is something for everyone. Have a look around.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mx-0 mt-3">
      <div class="col-12">
        <div class="row">
          <?php
          while(have_posts()) {
            the_post(); ?>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <div class="card-body">
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary">Apply</a>
                </div>
              </div>
            </div>
          <?php }
          ?>
        </div>
      </div>
    </div>
    <?php echo paginate_links(); ?>
  </div>
<?php  get_footer(); ?>