<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
      <title>Topázio Pousada</title>

      <link rel="dns-prefetch" href="http://maps.googleapis.com" />
      <link rel="dns-prefetch" href="http://fonts.googleapis.com" />
      <link rel="dns-prefetch" href="http://s.w.org" />
      <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
      <link rel="alternate" type="application/rss+xml" title="Desafio Front-End" />
      <link rel="alternate" type="application/rss+xml" title="Desafio Front-End" />

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />
      
      <link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' />
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
      <link rel='stylesheet' href='assets/css/hover-min.css' type='text/css' />
      <link rel='stylesheet' href='assets/css/style.css' type='text/css' />
   </head>

   <body>
      <header>
         <div class="nav">
            <nav class="navbar navbar-default" id="meuMenu">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                  </button>
               </div><!-- .navbar-header -->

               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                     <li><a href="#" class="hvr-underline-from-center">Início</a></li>
                     <li><a href="#" class="hvr-underline-from-center">Pousada</a></li>
                     <li><a href="#" class="hvr-underline-from-center">Acomodações</a></li>
                     <li><a href="#" class="hvr-underline-from-center">Reservas</a></li>
                     <li><a href="#" class="hvr-underline-from-center">Conheça Noronha</a></li>
                     <li><a href="#" class="hvr-underline-from-center">Contato</a></li>
                  </ul><!-- .nav -->
               </div><!-- .navbar-collapse -->

               <div class="info">
                  <span><i class="fa fa-phone" aria-hidden="true"></i> +55 (81) 3619-1110</span>

                  <ul>
                     <li><a href="" class="hvr-float-shadow" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                     <li><a href="" class="hvr-float-shadow" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                  </ul>
               </div><!-- .info -->
            </nav><!-- .navbar -->
         </div><!-- .nav -->
      </header>

      <section class="vitrine">
         <div class="content">
            <a class="hvr-wobble-top" href="#"><img src="assets/images/logo.png" alt="Logo - Topázio Pousada" class="logo" /></a>

            <p>“A MAIS CHARMOSA POUSADA EM FERNANDO DE<br />NORONHA, com 20 anos no mercado dispondo de<br />excelente serviço e qualidade de atendimento”</p>
            <span>- Fulaninha, 19 anos, Macaíba.</span>
         </div><!-- .content -->
      </section><!-- .vitrine -->

      <section class="reserve">
         <div class="content">
            <span class="reserva"><i class="fa fa-calendar" aria-hidden="true"></i> RESERVE <span class="agora">AGORA</span></span>
            
            <form>
               <span class="calendario">Entrada: <input type="text" id="datepicker"><i class="fa fa-calendar" aria-hidden="true"></i></span>
               <span class="calendario last">Saída: <input type="text" id="datepicker2"><i class="fa fa-calendar" aria-hidden="true"></i></span>
               <span class="botao">
                  <button type="submit">Pesquisar <i class="fa fa-search" aria-hidden="true"></i></button>
               </span>
               <span class="criancas"> Adultos
                  <div class="numbers-row">
                     <input type="text" name="adultos" id="adultos" value="1" />
                     <div class="geral"></div>
                  </div><!-- .numbers-row -->
               </span>
               <span class="criancas"> Crianças
                  <div class="numbers-row">
                     <input type="text" name="criancas" id="criancas" value="1" />
                     <div class="geral"></div>
                  </div><!-- .numbers-row -->
               </span>
            </form>
         </div><!-- .content -->
      </section><!-- .reserve -->

      <section class="conheca">
         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 no-padding">
            <div class="fotorama" data-nav="thumbs">
               <img src="assets/images/gal1.png" alt="Galeria - Topázio Pousada" />
               <img src="assets/images/gal2.png" alt="Galeria - Topázio Pousada" />
            </div><!-- .fotorama -->
         </div><!-- .md-8 -->
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
            <div class="content">
               <img src="assets/images/back.png" alt="">

               <div class="conteudo">
                  <h1>CONHEÇA NOSSA POUSADA</h1>
                  <p>Oferecemos o melhor em conforto para que você aproveite ao máximo a sua estadia na ilha de Fernando de Noronha.</p>
                  <p>Temos excelente serviço e qualidade de atendimento, com uma estrutura completa e segura para que você e sua família desfrute do aconchego e toda diversão merecida em sua viagem.</p>
               </div><!-- .conteudo -->
            </div><!-- .content -->
         </div><!-- .md-4 -->
      </section><!-- .conheca -->

      <section class="acomodacoes">
         <div class="titulo">
            <h1>ACOMODAÇÕES</h1>
         </div><!-- titulo -->

         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
            <div id="showum" class="titulo-painel">
               <img src="assets/images/um.png" alt="Acomodações - Topázio Pousada" />
               <div class="content">
                  <h4>COM VARANDA</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis tortor augue. </p>
               </div>
            </div><!-- .titulo-painel -->
            <div id="showdois" class="titulo-painel">
               <img src="assets/images/dois.png" alt="Acomodações - Topázio Pousada" />
               <div class="content">
                  <h4>SEM VARANDA</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis tortor augue. </p>
               </div>
            </div><!-- .titulo-painel -->
            <div id="showtres" class="titulo-painel">
               <img src="assets/images/tres.png" alt="Acomodações - Topázio Pousada" />
               <div class="content">
                  <h4>QUARTO ADAPTADO</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis tortor augue. </p>
               </div>
            </div><!-- .titulo-painel -->
         </div><!-- .md-6 -->

         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
            <div class="um corpo-painel">
               <img src="assets/images/cont_um.png" alt="Acomodações - Topázio Pousada" />
            </div><!-- .corpo-painel -->
            <div class="dois corpo-painel" style="display: none;">
               <img src="assets/images/cont_dois.png" alt="Acomodações - Topázio Pousada" />
            </div><!-- .corpo-painel -->
            <div class="tres corpo-painel" style="display: none;">
               <img src="assets/images/cont_um.png" alt="Acomodações - Topázio Pousada" />
            </div><!-- .corpo-painel -->
         </div><!-- .md-6 -->
      </section><!-- .acomodacoes -->

      <section class="gostou">
         <div class="content">
            <h1>Gostou do que viu? garanta sua reserva!</h1>

            <a href="#">RESERVA ONLINE</a>
            <a href="#">FALE CONOSCO</a>
         </div><!-- .content -->
      </section><!-- .gostou -->

      <section class="certificados">
         <div class="content">
            <a href="#" class="hvr-float-shadow" target="_blank"><img src="assets/images/trip.png" alt="Tripadvisor - Topázio Pousada" /></a>
            <span>CERTIFICADO DE EXCELÊNCIA - 2016</span>
            <a href="#" class="depoimentos">Ver Depoimentos</a>
         </div><!-- .content -->
      </section><!-- .certificados -->

      <section class="localizacao">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.815802733671!2d-32.42731788482346!3d-3.849681097199659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x63652666d497a3d%3A0x57d55dec5aa81dd1!2sPousada+Top%C3%A1zio!5e0!3m2!1spt-BR!2sbr!4v1495570992750" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section><!-- .localizacao -->

      <footer>
         <div class="rodape1">
            <div class="container">
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <p class="mt"><i class="fa fa-map-marker" aria-hidden="true"></i> Rua Padre Gurgel, 4080 - Boldró - Fernando de Noronha </p>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <p class="mt"><i class="fa fa-phone" aria-hidden="true"></i> +55 (84) 3646-4000 / Reservas:  +55 (84) 3646-4007</p>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <p class="mt"><i class="fa fa-whatsapp" aria-hidden="true"></i> +55 (84) 3646-4000</p>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <p>aceitamos</p>
                  <img src="assets/images/cartoes.png" class="cartoes" alt="Cartoes - Topázio Pousada" />
               </div>
            </div><!-- .container -->
         </div><!-- .rodape1 -->

         <div class="rodape2">
            <div class="container">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <p>2016, todos os direitos reservados.</p>
               </div><!-- .md-6 -->
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <a href="" class="hvr-float-shadow" target="_blank"><img src="assets/images/nova.png" alt="Logo - Topázio Pousada" /></a>
               </div><!-- .md-6 -->
            </div><!-- .container -->
         </div><!-- .rodape2 -->
      </footer>

      <script type='text/javascript' src='assets/js/jquery.js'></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
      <script src="https://use.fontawesome.com/6963733f46.js"></script>
      <script type='text/javascript' src='assets/js/script.js'></script>
   </body>
</html>