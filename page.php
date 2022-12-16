<?php
get_header();
 while(have_posts()) {
  the_post(); ?>
  <!-- Template name: fabico -->
<?php get_header(); ?>
<div class="container-fluid">
  <div class="row bg-header">
    <div class="col-12 top-header">
      <div class="row mx-0 mx-md-4 px-2">
        <div class="col-12 px-md-0">
          <h1 class="text-center mb-4 text-uppercase"><?php the_title(); ?></h1>
        </div>
      </div>
      <div class="row mx-0 mx-md-4 px-2">
        <div class="col-12 px-md-0 m-xl-auto">
          <!-- <p class="text-justify">
            <?php //echo get_theme_mod('header_page_text', 'A Faculdade de Biblioteconomia e Comunicação foi criada pela Portaria nº 714, assinada pelo Reitor Eduardo Zaccaro Faraco, em 1º de setembro de 1970, em sequência à Reforma Universitária implantada pela Lei nº 5540 de 1968.'); 
            ?>
          </p> -->
          <p class="class-justify">
            A Faculdade de Biblioteconomia e Comunicação foi criada pela Portaria nº 714, assinada pelo Reitor Eduardo Zaccaro Faraco, em 1º de setembro de 1970, em sequência à Reforma Universitária implantada pela Lei nº 5540 de 1968.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mx-0 mt-3">
    <div class="col-lg-3 d-none d-lg-block mt-5">
      <nav class="side-menu">
        <ul class="side-menu-ul">
          <li class="menu-item">
            <a href="#historico">Histórico</a>
            <ul class="menu-subsection">
              <li><a href="#memorias">Memórias da Fabico</a></li>
              <li><a href="#galeria">Galeria de Ex-Diretores</a></li>
            </ul>
          </li>
          <li class="menu-item"><a href="#conselho">Conselho da Unidade</a></li>
          <li class="menu-item"><a href="#administracao">Administração</a></li>
          <li class="menu-item"><a href="#gerencia">Gerência Administrativa</a></li>
          <li class="menu-item"><a href="#departamentos">Departamentos</a></li>
          <li class="menu-item"><a href="#in-fabico">InFabico</a></li>
          <li class="menu-item"><a href="#infraestrutura">Infraestrutura</a></li>
          <li class="menu-item"><a href="#setores">Setores e Ramais</a></li>
          <li class="menu-item"><a href="#servidores">Servidores</a></li>
          <li class="menu-item"><a href="#nau">NAU - Núcleo de Avaliação da Unidade</a></li>
          <li class="menu-item"><a href="#ngd">NGD - Núcleo de Gestão de Desempenho</a></li>
          <li class="menu-item"><a href="#cosat">COSAT - Comissão de Saúde e Ambiente de Trabalho</a></li>
          <li class="menu-item"><a href="#biblioteca">Biblioteca Fabico</a></li>
        </ul>
        <?php
        ?>
      </nav>
    </div>
    <div class="col-12 col-lg-9">
      <div id="historico">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Histórico</h2>
            <p class="text-justify">
              Estão na sua origem o Curso de Graduação em Jornalismo, criado em 1952, vinculado à antiga Faculdade de Filosofia, e a Escola de Biblioteconomia e Documentação, formada a partir do curso técnico de Biblioteconomia, de 1947, agregado à Faculdade de Ciências Econômicas e aprovado como curso superior em 1958.
            </p>
            <p class="text-justify">
              Com a criação da FABICO, o antigo Jornalismo é reformulado, tornando-se uma das habilitações do novo curso de Comunicação Social. Em agosto de 1970 é feita a mudança para o prédio da Gráfica da Universidade, no Campus Saúde, onde passa a ocupar o terceiro andar, com salas de aula, sala de redação, laboratório fotográfico, chefia do Departamento de Comunicação e Direção da nova Unidade.
            </p>
            <p class="text-justify">
              Em 1972, o curso de Biblioteconomia e Documentação e a Biblioteca da Faculdade instalam-se no prédio, ocupando o quarto andar. Nesta época são estabelecidas as habilitações unificadas do curso de Comunicação Social – Jornalismo Gráfico e Audiovisual, Relações Públicas e Publicidade e Propaganda.
            </p>
            <p class="text-justify">
              Em 1985 o currículo do curso de Comunicação é reformulado e são estabelecidas as habilitações em Jornalismo, em Publicidade e Propaganda e em Relações Públicas para a formação de bacharéis em Comunicação.
            </p>
            <p class="text-justify">
              O Programa de Pós-Graduação em Comunicação e Informação - PPGCOM é aprovado e implantado em 1996, em nível de Mestrado, sendo ampliado em 2000 com a implantação do Doutorado.
            </p>
            <p class="text-justify">
              Na área de Ciências da Informação são criados o curso de graduação em Arquivologia, no ano de 1999, e o curso de Museologia, em 2008.
            </p>
            <p class="text-justify">
              Desde 2006, com a transferência da Gráfica da Universidade para Rua Ramiro Barcelos, 2500, a FABICO passou a ocupar todo o prédio e parte do Anexo 1 do Campus Saúde. Abriga 1.532 alunos, 71 professores, 40 técnico-administrativos e equipe terceirizada.
            </p>
            <p class="text-justify">
              Em 2016, como decorrência de reformulações do MEC para a área da comunicação, são extintas as habilitações e criados os cursos de Jornalismo, Relações Públicas e Publicidade e Propaganda.
            </p>
          </div>
        </div>
        <div class="row bloco-container">
          <div class="col-12 col-lg-10" id="memorias">
            <div class="row box-sombra mt-3 p-5">
              <div class="col-12 col-lg-6">
                <a href="<?php bloginfo("template_directory"); ?>/docs/memorias-digitais.pdf" target="_blank">
                  <h3>Memórias da Fabico</h3>
                  <h4>Livro Digital - 40 anos</h4>
                </a>
                <p class="text-justify">Num processo complexo, dinâmico e inusitado, a FABICO completa 40 anos. Muitas histórias e estórias fazem parte dessa trajetória. E para que suas memórias não caiam no esquecimento, se inicia o registro das lembranças dos alunos, professores e técnico-administrativos que dela fizeram ou fazem parte.</p>
                <p class="text-justify">Este espaço está aberto para todos aqueles que quiserem enviar sua colaboração. Alegres, tristes, divertidas, importantes ou fortuitas, tanto faz! Todas as colaborações são importantes, porque representam recortes desse caminho. Faça parte dessa história!</p>
              </div>
              <div class="col-12 col-lg-6 d-flex flex-column align-items-center justify-content-around">
                <img src="<?php bloginfo("template_directory"); ?>/assets/livro-digital.jpg" alt="Livro Digital Memórias Fabico 40 anos">
                <a href="<?php bloginfo("template_directory"); ?>/docs/memorias-digitais.pdf" class="btn-fabico" target="_blank">Acessar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5 bloco-container">
          <div class="col-12 col-lg-10" id="galeria">
            <h3>Galeria de Ex-Diretores</h3>
            <div id="carousel-galeria" class="carousel slide" data-ride="carousel" data-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Karla Maria Müller</h4>
                      <p class="galeria-year mb-0">(2016-2020)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-1" aria-expanded="false" aria-controls="teste" onclick="expandCard(1)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-1">
                        <div class="card card-body">
                          <p class="text-justify">
                            Possui doutorado em Ciências da Comunicação, pela Universidade do Vale do Rio dos Sinos (2003); mestrado em Comunicação, pela Pontifícia Universidade Católica do Rio Grande do Sul (1997); especialista em Educação de Adultos pela FAAPA (1987); graduação em Comunicação Social - Jornalismo e Editoração Gráfica, pela Universidade Federal do Rio Grande do Sul (1986); graduação em Comunicação Social - Relações Públicas, Publicidade e Propaganda, pela Universidade Federal do Rio Grande do Sul (1982).Tem experiência na área de Comunicação, atuando principalmente nos seguintes temas: comunicação fronteiriça, comunicação e cultura, mídia e fronteiras, comunicação e cultura organizacional e comunicação pública, comunicação e práticas socioculturais. Assessora Ad Hoc da Capes e do CNPq, faz parte de conselhos editoriais e grupos de pesquisa. Professora Titular, Convidada no Programa de Pós-Graduação em Comunicação (PPGCOM/UFRGS).
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Ana Maria Mielniczuk de Moura</h4>
                      <p class="galeria-year mb-0">(2012-2016)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-2" aria-expanded="false" aria-controls="teste" onclick="expandCard(2)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-2">
                        <div class="card card-body">
                          <p class="text-justify">
                            Possui graduação em Biblioteconomia pela Universidade Federal do Rio Grande do Sul – UFRGS (1992), Especialização em Informática na Educação pelo PGIE/UFRGS em 2001, mestrado em Comunicação e Informação pelo PPGCOM/UFRGS em 2001 e doutorado em Comunicação e Informação pelo PPGCOM/UFRGS em 2009. Atualmente é professora associada no Departamento de Ciências da Informação da Faculdade de Biblioteconomia e Comunicação da Universidade Federal do Rio Grande do Sul e professora permanente no Programa de Pós Graduação em Ciência da Informação (PPGCIN/UFRGS).
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row carousel-item-height">
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Regina Helena Van Der Laan </h4>
                      <p class="galeria-year mb-0">(2012 - outubro a dezembro)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-3" aria-expanded="false" aria-controls="teste" onclick="expandCard(3)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-3">
                        <div class="card card-body">
                          <p class="text-justify">
                            Graduada em Biblioteconomia pela Universidade Federal do Rio Grande do Sul (1977), Mestre em Educação pela Pontifícia Universidade Católica do Rio Grande do Sul (1995) e Doutora em Letras pela Universidade Federal do Rio Grande do Sul (2002). Professora aposentada da Universidade Federal do Rio Grande do Sul, atuou na área de Ciências da Informação, com ênfase em Teoria da Classificação.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Ricardo Schneiders da Silva </h4>
                      <p class="galeria-year mb-0">(2008-2012; 1996-2000)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-4" aria-expanded="false" aria-controls="teste" onclick="expandCard(4)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-4">
                        <div class="card card-body">
                          <p class="text-justify">
                            Graduado em Comunicação Social pela Universidade Federal do Rio Grande do Sul (1973). Atualmente é professor adjunto, vinculado ao Departamento de Comunicação e Centro Integrado de Comunicação. Responsável por disciplinas teóricas e práticas experimentais em Comunicação. É Secretário de Comunicação Social da UFRGS na Gestão 2012 - 2016.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row carousel-item-height">
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Valdir José Morigi</h4>
                      <p class="galeria-year mb-0">(2004-2008)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-5" aria-expanded="false" aria-controls="teste" onclick="expandCard(5)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-5">
                        <div class="card card-body">
                          <p class="text-justify">
                            Graduado em Ciências Sociais pela Pontifícia Universidade Católica do Rio Grande do Sul (1984), Graduado em Biblioteconomia pela Universidade Federal da Paraíba (1998), Mestre em Sociologia Rural pela Universidade Federal do Rio Grande do Sul (1988) e Doutor em Sociologia pela Universidade de São Paulo (2001). Atualmente é professor associado, vinculado ao Departamento de Ciências da Informação e ao Programa de Pós-Graduação em Comunicação e Informação (PPGCOM), atuando na área da Sociologia e Ciências da Informação, com ênfase em Processos de Disseminação da Informação.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Márcia Benetti Machado</h4>
                      <p class="galeria-year mb-0">(2000-2004)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-6" aria-expanded="false" aria-controls="teste" onclick="expandCard(6)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-6">
                        <div class="card card-body">
                          <p class="text-justify">
                            Graduada em Jornalismo pela Universidade Federal de Santa Maria (1988), Mestre em Comunicação Social pela Universidade Metodista de São Paulo (1994), Doutora em Comunicação e Semiótica pela Pontifícia Universidade Católica de São Paulo (2000). Atualmente é professora associada vinculada ao Departamento de Comunicação. É pesquisadora do CNPq - Bolsa Produtividade nível 2, vinculada ao Programa de Pós-Graduação em Comunicação e Informação (PPGCOM).
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row carousel-item-height">
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Ana Maria Dalla Zen</h4>
                      <p class="galeria-year mb-0">(1992-1996)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-7" aria-expanded="false" aria-controls="teste" onclick="expandCard(7)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-7">
                        <div class="card card-body">
                          <p class="text-justify">
                            Graduada em História pela Universidade Federal do Rio Grande do Sul (1971), Mestre em Educação pela Universidade Federal do Rio Grande do Sul (1980) e Doutora em Ciências da Comunicação pela Universidade de São Paulo (2003). Atualmente é professora associada vinculada ao Departamento de Ciências da Informação. É professora convidada da UNIPAZ - Universidade Holística Internacional. Coordena o Programa Ilha da Pintada: Mulheres, Trabalho e Memória, na Ilha da Pintada, Porto Alegre, Rio Grande do Sul.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Blásio Hugo Hickmann</h4>
                      <p class="galeria-year mb-0">(1988-1992)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-8" aria-expanded="false" aria-controls="teste" onclick="expandCard(8)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-8">
                        <div class="card card-body">
                          <p class="text-justify">
                            Graduado em Jornalismo pela Universidade Federal do Rio Grande do Sul (1961) e Mestre em Letras pela Pontifícia Universidade Católica do Rio Grande do Sul (1980). Atuou como diretor presidente da Editora Sulina.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row carousel-item-height">
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Lourdes Gregol Fagundes da Silva</h4>
                      <p class="galeria-year mb-0">(1984-1988)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-9" aria-expanded="false" aria-controls="teste" onclick="expandCard(9)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-9">
                        <div class="card card-body">
                          <p class="text-justify">
                            Graduada em Biblioteconomia, foi presidente da Associação Rio-Grandense de Bibliotecários e membro do Conselho Federal de Biblioteconomia. Coordenou em 1966 a instalação do Conselho Regional de Biblioteconomia da 10ª Região, em Porto Alegre.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Lilia Maria Vargas</h4>
                      <p class="galeria-year mb-0">(1980-1984)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-10" aria-expanded="false" aria-controls="teste" onclick="expandCard(10)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-10">
                        <div class="card card-body">
                          <p class="text-justify">
                            Graduada em Biblioteconomia e Comunicação pela Universidade Federal do Rio Grande do Sul (1968), Mestre em Administração pela Universidade Federal do Rio Grande do Sul (1986) e Doutora em Administração – Université Pierre Mendès France, Ecole Superieure Des Affaires (ESA), Grenoble – França (1991). Atualmente é professora titular da Universidade Federal do Rio Grande do Sul, junto à Escola de Administração e ao Programa de Pós-Graduação em Administração (PPGA).
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row carousel-item-height">
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Fernando José Pinto Guerreiro</h4>
                      <p class="galeria-year mb-0">(1976-1980)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-11" aria-expanded="false" aria-controls="teste" onclick="expandCard(11)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-11">
                        <div class="card card-body">
                          <p class="text-justify">
                            Jornalista, atuou como assessor de imprensa do Ministério da Saúde nos anos 60. Foi membro nato do Conselho Regional de Biblioteconomia da 10ª região de 1977 à 1981.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg mx-3 galeria-card">
                      <h4 class="galeria-title mb-0">Zenaira Garcia Marques</h4>
                      <p class="galeria-year mb-0">(1970-1976)</p>
                      <button class="btn down-button" type="button" data-toggle="collapse" data-target="#card-12" aria-expanded="false" aria-controls="teste" onclick="expandCard(12)">
                        <span class="styled-down-icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Expandir</span>
                      </button>
                      <div class="collapse pb-3" id="card-12">
                        <div class="card card-body">
                          <p class="text-justify">
                            Graduada em Biblioteconomia, foi presidente do Conselho Federal de Biblioteconomia e diretora da Escola de Biblioteconomia e Documentação da UFRGS. Atuou na Comissão de Tomada de Contas e na Comissão de Ética Profissional do Conselho Regional de Biblioteconomia da 10ª região. Recebeu pela UFRGS o título honorífico de Professor emérito, o qual é concedido àqueles que atingiram alto grau de projeção no exercício de sua atividade acadêmica.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-target="#carousel-galeria" data-slide="prev">
                <span class="styled-prev-icon carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </button>
              <button class="carousel-control-next" type="button" data-target="#carousel-galeria" data-slide="next">
                <span class="styled-next-icon carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
              </button>
            </div>
      </div> <!-- /histórico -->
      <div id="conselho">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Conselho da Unidade</h2>
            <p class="text-justify">O Conselho da Unidade é o órgão de deliberação superior no âmbito da Faculdade de Biblioteconomia e Comunicação, tendo sua composição, competências e funcionamento definidos e regulados no Estatuto e no Regimento Geral da Universidade e no Regimento Interno, aprovado pelo CONSELHO UNIVERSITÁRIO, em sessão de 15 de janeiro de 2016, tendo em vista o constante no processo nº 23078.029632/2015-41, de acordo com o Parecer nº 392/2015 da Comissão de Legislação e Regimentos e as emendas aprovadas em plenário.</p>
          </div>
        </div>
      </div>
      <div id="administracao">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Administração</h2>
            <p class="text-justify">
              A Direção e a Gerência Administrativa têm por objetivo viabilizar e promover o ensino, a pesquisa e a extensão nas áreas das Ciências da Informação (Arquivologia, Biblioteconomia e Museologia) e Comunicação (Jornalismo, Relações Públicas e Publicidade Propaganda), contribuindo para o pleno desenvolvimento da sociedade nos planos político, social, econômico e cultural.
            </p>
            <p class="text-justify">
              A administração da FABICO é composta pelos seguintes professores e técnico-administrativos:
            </p>
          </div>
        </div>
        <div class="row equipe justify-content-around bloco-container">
          <?php
          $args = array(
            'post_type' => 'team_adm',
          );
          $adm = new WP_Query($args);
          ?>
          <?php if ($adm->have_posts()) : while ($adm->have_posts()) : $adm->the_post(); ?>
              <div class="col-12">
                <h4 class="mb-3">
                  <?php echo get_field("departamento") ?>
                </h4>
              </div>
              <div class="col-12 col-md-5 col-lg-4 mb-4">
                <div class="b-left box-equipe">
                  <p class="mb-3">
                    <?php echo get_field("cargo") ?>
                  </p>
                  <h3 class="font-weight-bold">
                    <?php the_title() ?>
                  </h3>
                  <p class="mb-3">
                    Telefone: <?php echo get_field("telefone") ?>
                  </p>
                  <p class="mb-3">
                    E-mail: <?php echo get_field("email") ?>
                  </p>
                </div>
              </div>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
      <div id="gerencia">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Gerência Administrativa</h2>
            <p class="text-justify">
              Abrange atividades administrativas e acadêmicas ligadas aos Departamentos, às Comissões de Graduação, Extensão e Pesquisa, agrupadas em setores.
            </p>
            <p class="text-justify">Tem por atribuição:</p>
            <p class="text-justify">
              Coordenar, planejar, acompanhar, avaliar, organizar e normatizar as atividades relacionadas à administração de bens materiais, bens móveis e imóveis, zeladoria, transporte, comunicação, reparos e manutenções de imóveis e equipamentos, bem como gerenciamento dos recursos de informática;
              Organizar a infraestrutura necessária à execução da programação estabelecida pela Unidade Acadêmica;
              Planejar, juntamente com a Direção, o planejamento anual;
              Participar da elaboração da Programação Orçamentária Plurianual;
              Coordenar, planejar, acompanhar, avaliar e organizar as atividades relacionadas à administração de recursos humanos;
              Assegurar o cumprimento das metas estabelecidas pelo Programa de Avaliação de Desempenho;
              Desenvolver estudos, elaborar propostas e implantar modificações necessárias à organização administrativa;
              Articular-se com a Direção da Unidade;
              Gerenciar os recursos de caráter institucional da Unidade, provenientes de convênios e outras fontes em conformidade com programação previamente definida;
              Representar formalmente a Unidade Acadêmica junto aos órgãos competentes em questões pertinentes à sua área, quando solicitado.
            </p>
            <p>Contato</p>
            <ul>
              <li>Telefone: (51) 3308.5067</li>
              <li>E-mail: fabico@ufrgs.br</li>
              <li>Sala 212 - Anexo 1 - Saúde</li>
              <li>Horário: 8h às 18h</li>
            </ul>
          </div>
        </div>
      </div>
      <div id="departamentos">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Departamentos</h2>
          </div>
        </div>
      </div>
      <div id="in-fabico">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">InFabico</h2>
          </div>
        </div>
      </div>
      <div id="infraestrutura">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Infraestrutura</h2>
          </div>
        </div>
      </div>
      <div id="setores">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Setores e Ramais</h2>
          </div>
        </div>
      </div>
      <div id="servidores">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Servidores</h2>
          </div>
        </div>
      </div>
      <div id="nau">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title"><a href="https://www.ufrgs.br/naufabico/">NAU - Núcleo de Avaliação da Unidade</a></h2>
            <p class="text-justify">O Núcleo de Avaliação da Unidade (NAU) é organismo com atuação autônoma segundo o Regimento Interno da Faculdade de Biblioteconomia e Comunicação aprovado pelo Conselho Universitário da UFRGS (CONSUN – Decisão 025/2016) e vincula-se diretamente à Secretaria de Avaliação Institucional (SAI) na condição de executor de trabalhos destinados à Comissão Própria de Avaliação (CPA) da Universidade.</p>
            <p class="text-justify">O NAU tem por objetivo realizar ações de avaliação interna nas dimensões determinadas pela legislação federal (Lei 10.861, de 14/04/204) que implantou o Sistema Nacional de Avaliação da Educação Superior (SINAES) e de acordo com disposições do CONSUN (Decisão 184/2009).</p>
            <p class="text-justify">O NAU FABICO é composto por representação paritária dos seguintes segmentos: Docentes (Departamento de Comunicação - DECOM e Departamento de Ciências da Informação - DCI); Técnico-Administrativos; Discentes (Graduação e Pós-Graduação). Os docentes e técnicos são designados pela Direção da Unidade com mandato de três anos que expira em 07/05/2020. Os representantes dos Discentes têm mandato de um ano, sendo indicados pelo Centro Acadêmico de Biblioteconomia, Arquivologia e Museologia – CABAM (uma vaga), Diretório Acadêmico da Comunicação - DACOM (uma vaga) e pelo conjunto dos alunos matriculados nos cursos de Mestrado e Doutorado do PPGCOM (uma vaga).</p>
            <p class="text-justify">O NAU da Fabico realiza reuniões às 11h, nos dias listados a seguir, sala 502 da Fabico (Rua Ramiro Barcelos, 2705 - Santana, Porto Alegre - RS). Caso tenha interesse em participar, recomendamos confirmar o horário e data pelo email <a href="mailto:nau_fabico@ufrgs.br" class="font-weight-bold">nau_fabico@ufrgs.br</a>.</p>
            <p class="text-justify"><a href="https://www.ufrgs.br/naufabico/">Clique aqui</a> para visitar o site do NAU.</p>
          </div>
        </div>
      </div>
      <div id="ngd">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">NGD - Núcleo de Gestão de Desempenho</h2>
            <p class="text-justify">O Núcleo de Gestão de Desempenho da FABICO tem por objetivo:</p>
            <ul>
              <li>Coordenar e acompanhar o plano de metas definidas pelos Departamentos;</li>
              <li>Assessorar a aplicação da avaliação de desempenho de Técnico-Administrativos na FABICO;</li>
              <li>Acompanhar os prazos de aplicação da avaliação;</li>
              <li>Analisar e dar parecer sobre os pedidos de reconsideração encaminhados na FABICO;</li>
              <li>Organizar os procedimentos para avaliação pelos usuários, de acordo com as políticas a serem definidas.</li>
            </ul>
          </div>
        </div>
      </div>
      <div id="cosat">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title"><a href="https://www.ufrgs.br/cosatfabico/">COSAT - Comissão de Saúde e Ambiente de Trabalho</a></h2>
            <p class="text-justify">A COSAT - Comissão de Saúde e Ambiente de Trabalho - é um órgão de natureza deliberativa sobre questões pertinentes à saúde, à segurança e ao ambiente de trabalho. A COSAT tem como finalidade a melhoria das condições de trabalho e do meio ambiente, buscando soluções que promovam um estado de bem-estar físico, psíquico e social do trabalhador e a qualificação do meio ambiente, tendo principalmente, uma função preventiva.</p>
            <p class="text-justify">As COSAT, no âmbito da UFRGS, foram criadas pela Portaria 1992, de 19 de maio de 1997, assinada pela Reitora Profa.
              Wrana Maria Panizzi.</p>
            <p class="text-justify">Os membros de cada COSAT, titulares e suplentes, são eleitos pelos servidores, através de eleições, com mandato de 2 (dois) anos. A atual COSAT da Fabico foi eleita em maio de 2018 e tem mandato até maio de 2020.</p>
            <p class="text-justify">IMPORTANTE: Mandato 2018/2020 prorrogado para dezembro de 2021 em razão da pandemia de COVID-19</p>
            <p class="text-justify"><a href="https://www.ufrgs.br/cosatfabico/">Clique aqui</a> para acessar o site da COSAT Fabico.</p>
            <a href="<?php bloginfo("template_directory"); ?>/docs/regulamento-cosat.doc">Regulamento da COSAT aprovado em 19 de maio de 1997</a>
          </div>
        </div>
        <div class="row bloco-container">
          <div class="col-12">
            <p class="text-justify">Medidas para retorno das funções na UFRGS, quando possível: pandemia COVID-19</p>
            <ul>
              <li><a href="<?php bloginfo("template_directory"); ?>/docs/medidas-para-retorno-das-funcoes-na-ufrgs.pdf">Atividades Acadêmicas, Relações de Trabalho, Saúde e Segurança nos Ambientes</a></li>
              <li><a href="<?php bloginfo("template_directory"); ?>/docs/medidas-para-retorno-das-funcoes-na-ufrgs-laboratorios.pdf">Trabalho em Laboratórios</a></li>
              <li><a href="<?php bloginfo("template_directory"); ?>/docs/medidas-para-retorno-das-funcoes-na-ufrgs-laboratorios-Prestadores-de-Servicos.pdf">Prestadores de Serviços</a></li>
              <li><a href="<?php bloginfo("template_directory"); ?>/docs/medidas-para-retorno-das-funcoes-na-ufrgs-laboratorios-srestadores-de-servicos-saida-de-campo-e-atividades-externas.pdf">Saídas de Campo e Atividades Externas</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            Equipe
          </div>
        </div>
      </div>
      <div id="biblioteca">
        <div class="row bloco-container">
          <div class="col-12 col-lg-10">
            <h2 class="title">Biblioteca Fabico</h2>
            <p class="text-justify"><a href="https://www.ufrgs.br/bibfbc/">Clique aqui</a> para acessar o site da biblioteca da FABICO.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>

  <?php }
  get_footer();
?>