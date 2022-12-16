<?php get_header();  ?>
  <!-- generic blog post page -->
  <div class="header-banner text-center text-lg-start bg-blue">
  <div class="row h-100 m-auto container">
    <div class="col-12">
      <h1 class="text-gold fw-bold mx-3 fs-32 fs-lg-65">
        Welcome to our blog!
      </h1>
      <p class="class-justify">
        Keep up ith our latest news.
      </p>
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
                  <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('d/m/Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
                  <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
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