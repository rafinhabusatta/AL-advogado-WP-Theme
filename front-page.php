<?php get_header();  ?>
<?php get_template_part('template-parts/content', 'specialty-modal');?>
<div class="header-banner text-center text-lg-start bg-blue themis">
  <?php get_template_part('template-parts/content', 'homeBanner');?>
</div>
<div class="contact-buttons">
  <?php 
    $wppLink = 'https://wa.me/5551981917162';

    if (wp_is_mobile()) {
      $wppLink = 'https://api.whatsapp.com/send?phone=5551981917162';
    }
    else {
      $wppLink = 'https://web.whatsapp.com/send?phone=5551981917162';
    }
  ?>
  <a href="<?php echo $wppLink; ?>" target="_blank" class="btn btn-gold" id="main_btn_whatsapp" aria-label="Entre em contato pelo WhatsApp!">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-whatsapp contact-buttons-svg" viewBox="0 0 16 16">
      <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
    </svg>
    <span class="d-none d-lg-inline">WhatsApp</span>
  </a>
  <a href="mailto:marcelo@andradeelacerdaadvogados.com.br" target="_blank" class="btn btn-gold" aria-label="Entre em contato por email!">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope contact-buttons-svg" viewBox="0 0 16 16">
      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
    </svg>
    <span class="d-none d-lg-inline">Email</span>
  </a>
</div>
<main class="container">
  <div class="row mt-5 pt-lg-5">
    <div class="col-12 col-lg-6">
      <h2 class="fs-32 fs-lg-48 fw-bold mb-4 position-relative">
        Sobre Nós<span class="shadow-text">Sobre Nós</span>
      </h2>
      <?php 
        $homepageAboutUs = new WP_Query(array(
          'posts_per_page' => 1,
          'post_type' => 'page',
          'pagename' => 'sobre'
        ));
        
        while($homepageAboutUs->have_posts()) {
          $homepageAboutUs->the_post(); ?>
          <p class="text-justify fs-lg-24">
            <?php echo wp_strip_all_tags(get_the_content()); ?>
          </p>
        <?php }
      ?>
    </div>
    <div class="col-12 col-lg-6 background-profile text-center d-flex align-items-center justify-content-center">
      <img src="<?php echo get_template_directory_uri(); ?>/images/profile3.png" alt="Advogado" class="profile-image" height="580">
    </div>
  </div>
  <div class="row mt-5 pt-lg-5">
    <div class="col-12">
      <h2 class="fs-32 fs-lg-48 fw-bold mb-4 position-relative">
        Especialidades<span class="shadow-text">Especialidades</span>
      </h2>
      <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
        <?php
          $homepageSpecialties = new WP_QUERY(array(
            'posts_per_page' => -1,
            'post_type' => 'especialidade',
            'orderby' => 'title',
            'order' => 'ASC'
          ));
          while($homepageSpecialties->have_posts()) {
            $homepageSpecialties->the_post(); 
        ?>
          <div class="col">
            <div class="card bg-blue text-white h-100">
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  <?php the_title(); ?>
                </h5>
                <p class="card-text">
                  <?php the_content(); ?>
                </p>
              </div>
              <div class="card-footer bg-blue border-top-0 pb-4 mb-2">
                <button type="button" class="btn btn-gold" data-bs-toggle="modal" data-bs-target="#Modal<?php echo str_replace(' ', '',get_the_title()); ?>">
                  Saiba mais
                </button>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="row mt-5 mx-0 p-lg-5 text-white bg-blue-light br-8">
    <div class="col-12 col-lg-6 px-3 pt-5 px-lg-5">
      <h2 class="fs-32 fs-lg-48 mb-4">Atendemos todo
        país remotamente!
      </h2>
      <p class="text-justify fs-lg-24">
        Estamos localizados na praça osvaldo cruz 15, na sala 1905, prontos para atender você! Também estamos disponível online através do whatsapp.
      </p>
      <a href="https://web.whatsapp.com/send?phone=5551981917162" target="_blank" class="btn btn-dark" aria-label="Entre em contato pelo WhatsApp!">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
        WhatsApp
      </a>
    </div>
    <div class="col-12 col-lg-6 py-5 px-3 py-lg-5">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13817.464293471843!2d-51.2222615!3d-30.0263539!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31095e2b67fd9055!2sAndrade%20%26%20Lacerda%20Advogados!5e0!3m2!1spt-BR!2sbr!4v1672747017099!5m2!1spt-BR!2sbr" width="100%" height="333" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Mapa com endereço do escritório Andrade e Lacerda Advogados."></iframe>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12 col-lg-6">
      <h2 class="fs-32 fs-lg-65 fw-bold mb-4 text-blue">PLANEJE A SUA APOSENTADORIA CONOSCO</h2>
      <p class="text-justify fs-lg-24">
        Fazemos um estudo de projeção financeira para que você possa aproveitar sua aposentadoria ao máximo!
      </p>
      <a href="https://web.whatsapp.com/send?phone=5551981917162" target="_blank" class="btn btn-dark" aria-label="Entre em contato pelo WhatsApp!">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
        WhatsApp
      </a>
    </div>
    <div class="d-none d-lg-block col-6">
      <img class="" src="<?php echo get_theme_file_uri('assets/investing.svg'); ?>" alt="Ilustração" height="425">
    </div>
  </div>
  <div class="row mt-5 bg-gray p-lg-5 br-8" id="contato">
    <div class="col-12 col-lg-5 mb-3 mb-lg-0">
      <?php Ninja_Forms()->display(2) ?>
    </div>
    <div class="col-12 col-lg-7 text-center d-flex flex-column justify-content-center">
      <p class="fs-lg-24">Entre em contato para tirar dúvidas.</p>
      <p class="fs-lg-24">Deseja entrar em contato por telefone?</p>
      <p class="fs-lg-24">Contate-nos pelo <a href="https://web.whatsapp.com/send?phone=5551981917162" target="_blank" class="fw-bold">WhatsApp</a> ou pelo telefone:</p>
      <p class="fw-bold fs-48"><a href="tel:555132128822">(51) 3212.8822</a></p>
    </div>
  </div>
  <div class="row mt-5 pt-lg-5">
    <div class="col-12">
      <h2 class="fs-32 fs-lg-48 fw-semibold mb-4 position-relative">
        Últimas notícias<span class="shadow-text">Últimas notícias</span>
      </h2>
      <div class="row mb-4">
        <?php
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 3));
            // 'category_name' => 'noticias'
            //'post_type' => 'noticias' ou page
          while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); 
          ?>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4 mb-lg-0 h-lg-100 border-0 bg-blue">
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
        <?php } wp_reset_postdata(); ?>
      </div>
      <a href="<?php echo site_url('/noticias'); ?>" class="btn btn-dark">Ver todas as notícias</a>
    </div>
  </div>
</main>
<?php  get_footer(); ?>