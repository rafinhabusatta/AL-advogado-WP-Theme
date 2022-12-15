<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
</head>
<body>
<header>
  <nav class="navbar navbar-dark navbar-expand-lg bg-blue">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets/Logo.svg" alt="Logo" height="100" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
        <!-- <form class="d-flex" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Pesquisar"
            aria-label="Pesquisar"
          />
          <button class="btn btn-outline-success" type="submit">
            Pesquisar
          </button>
        </form> -->
      </div>
    </div>
  </nav>
  <div class="header-banner text-center text-lg-start bg-blue">
    <div class="row w-100">
      <div class="col-12 col-lg-6">
        <h1 class="text-gold fw-bold mx-3 fs-32 fs-lg-65">
          Há 20 anos garantindo os direitos previdenciários dos cidadãos
          brasileiros
        </h1>
        <button type="button" class="btn btn-dark btn-al-advogados mt-3 mt-lg-5">Faça uma consulta gratuita</button>
        <button type="button" class="btn btn-dark btn-al-advogados mt-3 mt-lg-5">Entre em contato</button>
        <div class="row mt-5 pt-0 pt-lg-5">
          <div class="col-3"><p>15K</p><span>casos ganhos</span></div>
          <div class="col-3"><p>15K</p><span>casos ganhos</span></div>  
        </div>
      </div>
      <div class="col-lg-6 themis"></div>
    </div>
  </div>
</header>
  
