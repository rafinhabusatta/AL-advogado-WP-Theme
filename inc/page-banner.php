<?php
function pageBanner($args = NULL) {
  if (!$args['title']) {
    $args['title'] = get_the_title();
  }

  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!$args['photo']) {
    if (get_field('page_banner_background_image') AND !is_archive() AND !is_home()) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/assets/bg-generic.svg');
    }
  }

  ?>
  <div class="container-fluid">
    <div class="row bg-blue header-banner generic-banner text-center" style="background-image: url(<?php echo $args['photo']?>); background-repeat: no-repeat; background-size: cover;">
      <div class="col-12">
        <div class="row mx-0 mx-md-4 px-2">
          <div class="col-12 px-md-0">
            <h1 class="text-center text-gold my-4 fw-bold fs-32 fs-lg-65">
              <?php 
                echo $args['title'];
                // if (is_category()) {
                //  single_cat_title();
                // }
                // if (is_author()) {
                //   echo  'Posts by '; the_author();
                // } ?></h1>
          </div>
        </div>
        <div class="row mx-0 mx-md-4 px-2">
          <div class="col-12 px-md-0 m-xl-auto">
            <p class="class-justify">
              <?php echo $args['subtitle'] ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }