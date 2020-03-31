<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- METAS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <!-- TÍTULO -->
    <title>
      <?php if ( is_category() ) {
        echo 'Categoria de &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_tag() ) {
        echo 'Arquivo de &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_archive() ) {
        wp_title(''); echo ' Arquivo | '; bloginfo( 'name' );
      } elseif ( is_search() ) {
        echo 'Buscar por &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
      } elseif ( is_home() || is_front_page() ) {
        bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
      }  elseif ( is_404() ) {
        echo 'Erro 404 - Não Encontrado | '; bloginfo( 'name' );
      } elseif ( is_single() ) {
        wp_title('');
      } else {
        echo wp_title();
      } ?>
    </title>
    <!-- IMPORTAÇÃO DOS ÍCONES-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- IMPORTAÇÃO DO BOOTSTRAP -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/bootstrap.min.css"  media="screen,projection"/>
    <!-- IMPORTAÇÃO DO STYLE.CSS -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css"  media="screen,projection"/>
    <!-- IMPORTAÇÃO DO DEFAULT.CSS -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/default.css"  media="screen,projection"/>
    <!-- IMPORTAÇÃO DO LINE ICONS CSS -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/LineIcons.css"  media="screen,projection"/>
    <!-- IMPORTAÇÃO DO MAGNIFIC POPUP CSS -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/magnific-popup.css"  media="screen,projection"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.2/bootstrap-table.min.css">
    <!-- FAVICON -->
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/assets/images/favicon/cropped-favicon-270x270.png" />
    <!-- WP HEAD -->
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161456388-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-161456388-1');
    </script>
    <!-- Fim do gtag -->
  </head>
  <body>
  <!--====== HEADER PART START ======-->
  <header class="header-area">
    <div class="navgition navgition-transparent">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-branca.png" width="200" class="image-center" />
              </a>

              <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                <ul class="navbar-nav m-auto">
                  <li class="nav-item active">
                    <a class="page-scroll" href="/">Início</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#como-funciona">Como Funciona</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#valores">Valores</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#contato">Contato</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo site_url(); ?>/termos-de-servico">Termos de Serviço</a>
                  </li>
                </ul>
              </div>

            </nav> <!-- navbar -->
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- navgition -->

    <div id="inicio" class="header-hero bg_cover" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/header-bg.jpg);background-position: left;background-repeat: no-repeat;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-10">
            <div class="header-content text-center">
              <h3 class="header-title">Notícias de Direita, Isentas de Fake-News</h3>
              <p class="text">Receba diretamente no seu WhatsApp as melhores notícias sobre o Governo Bolsonaro, Direita e o Avanço do Brasil.</p>
              <ul class="header-btn">
                <li><a class="main-btn btn-one" href="#como-funciona">Como Funciona</a></li>
                <li><a class="main-btn btn-two" href="#assinar">QUERO RECEBER <i class="lni-play"></i></a></li>
              </ul>
            </div> <!-- header content -->
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- header content -->
  </header>
  <!--====== HEADER PART ENDS ======-->  