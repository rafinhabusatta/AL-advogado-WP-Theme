<?php get_header();  ?>
  <!-- generic blog post page -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row mx-0 mx-md-4 px-2">
          <div class="col-12 px-md-0">
            <h1 class="text-center mb-4 text-uppercase">All Events</h1>
          </div>
        </div>
        <div class="row mx-0 mx-md-4 px-2">
          <div class="col-12 px-md-0 m-xl-auto">
            <p class="class-justify">
              See whats going on in our world.
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
                  <p>
                    Data: <?php 
                      $eventDate = new DateTime(get_field('event_date'));
                      echo $eventDate->format('d/m/y') ?>
                  </p>
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
    <hr>
    <p>Looking for a recap of past events? <a href="<?php echo site_url('/past-events') ?>">Check out our past events archive</a></p>
  </div>
<?php  get_footer(); ?>