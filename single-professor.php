<?php
  get_header();
 while(have_posts()) {
  the_post(); ?>
  <div class="container">
    <div class="row bg-blue header-banner" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['sizes']['pageBanner'] ?>);">
      <div class="col-12">
        <div class="row mx-0 mx-md-4 px-2">
          <div class="col-12 px-md-0">
            <h1 class="text-center mb-4 text-uppercase">
              <?php 
              the_title();
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
              <?php the_field('page_banner_subtitle') ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mx-0 mt-5">
      <div class="col-12 col-lg-8">
        <?php the_content(); ?>
      </div>
      <div class="col-12 col-lg-4">
      <img src="<?php the_post_thumbnail_url('professorPortrait'); ?>" class="img-thumbnail" alt="Professor <?php the_title(); ?>">
      </div>
      <?php 
        $relatedPrograms = get_field('related_programs');
        //print_r($relatedPrograms);
        if($relatedPrograms) {
          echo '<div class="col-12"><h3>Subject(s) Taught</h3><ul>';
          foreach($relatedPrograms as $program) {
            ?>
              <li>
                <a href="<?php echo get_the_permalink($program); ?>">
                  <?php echo get_the_title($program); ?>
                </a>
              </li>
            <?php
          }
          echo '</ul>
          </div>';
        }
      ?>
    </div>
  </div>

  <?php }
  get_footer();
?>