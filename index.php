<?php

//require_once("admin/seguranca.php");
require_once('admin/conexao/banco.php');

$sql = "SELECT *, date_format(alu_data_nascimento, '%d/%m/%Y') as data_nascimento FROM tb_aluno ";
$sql = mysqli_query($con, $sql) or die ("Erro no SQL!");
$dados = mysqli_fetch_array($sql);

$sql2 = "SELECT *, date_format(pro_data_cadastro, '%d de %M, %Y') as data_cadastro FROM tb_projetos";
$sql2 = mysqli_query($con, $sql2) or die ("Erro no SQL!");

$sql3 = "SELECT *, date_format(ski_data_cadastro, '%d/%m/%Y') as data_cadastro FROM tb_skill";
$sql3 = mysqli_query($con, $sql3) or die ("Erro no SQL!");

$sql4 = "SELECT *, date_format(ser_data_cadastro, '%d/%m/%Y') as data_cadastro FROM tb_servicos";
$sql4 = mysqli_query($con, $sql4) or die ("Erro no SQL!");

?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfólio - Luís Eduardo</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v2.3.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Portfólio</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Trabalhos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Página</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ======= Intro Section ======= -->
  <div id="home" class="intro route bg-image" style="background-image: url(assets/img/fundo_codigo.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Luís Eduardo</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Técnico em Informática,Gestor Boost Informática,Desenvolvedor Web e Desktop</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/meu_icon.png" class="img-fluid rounded b-shadow-a" alt="Foto do Perfil">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nome: </span> <span><?php echo $dados['alu_nome']; ?></span></p>
                        <p><span class="title-s">Perfil: </span> <span>Estudante de desenvolvimento web e desktop</span></p>
                        <p><span class="title-s">Email: </span> <span><?php echo $dados['alu_email']; ?></span></p>
                        <p><span class="title-s">Telefone: </span> <span><?php echo $dados['alu_telefone']; ?></span></p>
                        <p><span class="title-s">Objetivo: </span> <span><?php echo $dados['alu_objetivo']; ?></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Habilidades</p>
                  <?php while($dados3 = mysqli_fetch_array($sql3)){?>
                    
                    
                      <span><?php echo $dados3['ski_descricao']; ?></span> <span class="pull-right"><?php echo $dados3['ski_porcentagem']; ?>%</span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $dados3['ski_porcentagem']; ?>%;" aria-valuenow="<?php echo $dados3['ski_porcentagem']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    <?php } ?>
                      <!--

                    <span>CSS</span> <span class="pull-right">40%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">40%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right">30%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>BANCO DE DADOS</span> <span class="pull-right">25%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>BOOTSTRAP</span> <span class="pull-right">40%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>MANUTENÇÂO</span> <span class="pull-right">80%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>-->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Sobre Mim
                      </h5>
                    </div>
                    <p class="lead">
                      Moro em Santa Bárbara d’ Oeste e sou um apaixonado por tecnologia.
                    </p>
                    <p class="lead">
                      Desde o Ensino Fundamental 2, de forma totalmente autodidata, busco cada vez mais entender como todo tipo de dispositivo conectado à internet funciona.
                    </p>
                    <p class="lead">
                      Tive uma grande oportunidade e atualmente estou cursando Médio + Técnico em Informática.
                    </p>
                    <div class="socials text-center">
                      <ul>
                        <li><a href="https://github.com/luised-dev" target="_blank"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Serviços
              </h3>
              <p class="subtitle-a">
                O que faço?
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
        <?php while($dados4 = mysqli_fetch_array($sql4)){ ?>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="<?php echo $dados4["ser_icone"]; ?>"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?php echo $dados4["ser_titulo"]; ?></h2>
                <p class="s-description text-center">
                  <?php echo $dados4["ser_descricao"]; ?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>

        <!--
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-monitor"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                  Formulação de um layout ideal para qualquer que seja o objetivo do site. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-code-working"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Development</h2>
                <p class="s-description text-center">
                  Desenvolvimento dos códigos de Front-End e Back-End de Web Sites.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Design Responsivo</h2>
                <p class="s-description text-center">
                  Uso de frameworks para criar sites que se adaptam aos diferentes tamanhos de telas.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-settings"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Manutenção</h2>
                <p class="s-description text-center">
                  Suporte Técnico à computadores, notebooks e celulares.
                </p>
              </div>
            </div>
          </div>-->



        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/fundo_computador.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-lg-4">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">12</p>
                <span class="counter-text">TRABALHOS CONCLUÍDOS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">2</p>
                <span class="counter-text">ANOS DE EXPERIÊNCIA</span>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">7</p>
                <span class="counter-text">CLIENTES</span>
              </div>
            </div>
          </div>
          <!--
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">0</p>
                <span class="counter-text">PREMIOS GANHOS</span>
              </div>
            </div>
          </div>
          -->
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                Projetos realizados
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">

        <?php while($dados2 = mysqli_fetch_array($sql2)){?>
          <div class="col-md-4">
            <div class="work-box">
              <a href="admin/projetos/<?php echo $dados2["pro_foto"];?>" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="admin/projetos/<?php echo $dados2["pro_foto"];?>" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?php echo $dados2["pro_descricao"];?></h2>
                    <div class="w-more">
                      <span class="w-ctegory">Boost Informática</span> - <span class="w-date"><?php echo $dados2["data_cadastro"];?></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <!--<div class="w-like">
                      <a href="portfolio-boostinformatica-2.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <!--
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/trabalhos/cliente2.png" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/trabalhos/cliente2.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Troca de Memória RAM e Formatação</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Boost Informática</span> / <span class="w-date">4 Julho 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-boostinformatica-2.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/trabalhos/cliente1.png" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/trabalhos/cliente1.png" alt="Cliente Suporte Técnico" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Formatação e Troca de Sistema Operacional</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Boost Informática</span> / <span class="w-date">29 Junho 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-boostinformatica-1.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/trabalhos/cliente3.png" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/trabalhos/cliente3.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Site Mezic</h2><br>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Junho 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-3.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/trabalhos/projeto4.png" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/trabalhos/projeto4.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Template SkateShop</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Desenvolviemnto Web</span> / <span class="w-date">29 de Maio 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-4.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/trabalhos/projeto6.png" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/trabalhos/projeto6.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Controle de Vendas</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Desenvolviemnto Web</span> / <span class="w-date">14 Abril 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-6.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/trabalhos/projeto5.png" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/trabalhos/projeto5.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Álbum de Música</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Desenvolviemnto Web</span> / <span class="w-date">11 Abril 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-5.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          -->
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/fundo_net.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-mf" class="owl-carousel owl-theme">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="assets/img/linus.png" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Linus Torvalds</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Talk is cheap. Show me the code. <br>
                    (Falar é fácil, me mostre o código)
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
              <!--<div class="testimonial-box">
                <div class="author-test">
                  <img src="assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Marta Socrate</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Página
              </h3>
              <p class="subtitle-a">
                Boost Informática - Suporte Técnico<br>
                <a href="http://facebook.com/boostinformatica.sbo" target="_blank"><i class="ion-social-facebook" style="width: 20px;"></i></a>
                <a href="http://instagram.com/boostinformatica_" target="_blank"><i class="ion-social-instagram"></i></a>
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="https://www.instagram.com/p/CBYP-pKh92h/" target="_blank"><img src="assets/img/pagina-2.png" alt="Postagem Instagram: @boostinformatica_" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Quem Sou?</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="https://www.instagram.com/p/CBYP-pKh92h/" target="_blank">Veja a publicação</a></h3>
                <p class="card-description">
                  Apresesentação pessoal.<br><br>
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#blog">
                    <img src="assets/img/logo.png" alt="" class="avatar rounded-circle">
                    <span class="author">Boost Informática</span>
                  </a>
                </div>
                <!--
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
                -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="https://www.instagram.com/p/CAyXv4UBMdM/" target="_blank"><img src="assets/img/pagina-3.png" alt="Postagem Instagram: @boostinformatica_" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Por que formatar?</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="https://www.instagram.com/p/CAyXv4UBMdM/" target="_blank">Veja a publicação</a></h3>
                <p class="card-description">
                  Explicação sobre os benefícios de uma limpeza total dos dados da máquina.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#blog">
                    <img src="assets/img/logo.png" alt="" class="avatar rounded-circle">
                    <span class="author">Boost Informática</span>
                  </a>
                </div>
                <!--
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
                -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="https://www.instagram.com/p/B-0iOYvnw9-/" target="_blank"><img src="assets/img/pagina-1.png" alt="Postagem Instagram: @boostinformatica_" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Assistência Técnica</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="https://www.instagram.com/p/B-0iOYvnw9-/" target="_blank">Veja a publicação</a></h3>
                <p class="card-description">
                  Formatação de Computadores Celulares e Notebooks.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#blog">
                    <img src="assets/img/logo.png" alt="" class="avatar rounded-circle">
                    <span class="author">Boost Informática</span>
                  </a>
                </div>
                <!--
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
                -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/fundo_servidor.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Envie uma Mensagem
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Digite pelo menos 4 caracteres" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Por favor digite um email válido" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Digite pelo menos 8 caracteres do assunto" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escreva para mim" placeholder="Mensagem"></textarea>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 text-center mb-3">
                            <div class="loading">Carregando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Enviar!</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Entre Em Contato
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Me contate para mais informações ou participar de uma entrevista.
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> <?php echo $dados['alu_logradouro'] . ', ' . $dados['alu_numero'] . ' - ' . $dados['alu_cidade']; ?></li>
                        <li><span class="ion-ios-telephone"></span> <?php echo $dados['alu_telefone']; ?></li>
                        <li><span class="ion-email"></span> <?php echo $dados['alu_email']; ?> </li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://facebook.com/xx.luisin" target="_blank"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href="https://instagram.com/boostinformatica_" target="_blank"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                        <li><a href="https://linkedin.com/in/luis-eduardo-o-g" target="_blank"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                        <li><a href="https://github.com/luised-dev" target="_blank"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <!--<p class="copyright">&copy; Copyright <strong>Luís Eduardo</strong></p>-->
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://github.com/luised-dev" target="_blank">Luís Eduardo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>