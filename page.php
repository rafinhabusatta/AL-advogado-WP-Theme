<h1>This is a page php</h1>
<?php
get_header();
 while(have_posts()) {
  the_post(); ?>
  <h2><?php the_title(); ?></h2>
  
  <?php the_content(); ?>

  <?php }
  get_footer();
?>