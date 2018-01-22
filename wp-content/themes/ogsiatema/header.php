<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
    <head>
      <title> <?php   bloginfo('name'); ?></title>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
      <meta name="google" value="notranslate"/>
      <?php   wp_head(); ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!--link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/-->
      <!--Import stylos.css-->
      <!--link type="text/css" rel="stylesheet" href="css/stylos.css"  media="screen,projection"/-->
      <!--Import Swiper -->
       <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/swiper.min.css">
      <!--FONTS IMPORTADOS-->
      <link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Poppins|Reem+Kufi" rel="stylesheet">
      <link rel="shortcut icon" type="image/x-icon" href="<?php  bloginfo('template_directory');?>/images/logo.png" />
      <style>
        .portada-1{
          background: url('<?php bloginfo('template_url')?>/images/portadas/portada1.jpg');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        .portada-2{
          background: url('<?php bloginfo('template_url')?>/images/portadas/portada3.jpg');
          height: 500px;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        .portada-3{
          background: url('<?php bloginfo('template_url')?>/images/portadas/portada5.jpg');

          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        .portada-4{
          background: url('<?php bloginfo('template_url')?>/images/portadas/portada6.jpg');

          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        .portada-5{
          background: url('<?php bloginfo('template_url')?>/images/portadas/portada4.jpg');

          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        .portada-form{
          background: url('<?php bloginfo('template_url')?>/images/portadas/portadaform.jpg');

          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
      </style>
    </head>

    <body class="">
      <header class="header">
        <div class="row white menu-superior hide-on-med-and-down">
          <div class="col s12 l6 men-sup-izquierda white">
            <p class="color-oscuro" style="margin:2px;">Bienvenidos a la <a href="http://www.unprg.edu.pe" class="color-secundario text-negrita" style="text-decoration:none;">Universidad Nacional Pedro Ruiz Gallo</a> </p>
          </div>
          <div class="col s12 l6 men-sup-derecha white">
            <div class="row right-align">
              <div class="col l3 color-oscuro" style="font-size: 13px;">
                <span class=" icon-phone color-secundario" style="font-size:15px;"></span>
                (074) 310731
              </div>
              <div class=" col l7 color-oscuro" style="font-size: 13px;">
                <span class=" icon-envelop color-secundario" style="font-size:15px;"></span>
                relacionesnacionaleseinternacionales@unprg.edu.pe
              </div>
              <div class="col l2 color-oscuro left-align" style="font-size: 13px;">
                <a class="color-oscuro" href="https://www.facebook.com/CTRIUNPRG/" target="_black">
                  <span class="icon-facebook color-secundario" style="font-size:15px;"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row  menu-principal  flex-row ">
          <div class="col m6 ">
            <div class="row  flex flex-row">
              <div class="col s3 offset-s1  logo-menu center"> 
                <img class="responsive-img" src="<?php bloginfo('template_url')?>/images/logo.png" alt="">
              </div>
              <div class="col s8  ">
                <a href='<?php bloginfo(); ?>'><h6 class="color-oscuro text-negrita" style="font-size: 18px;">OFICINA GENERAL DE COOPERACIÓN TÉCNICA <br> Y RELACIONES INTERNACIONALES</h6></a>
              </div>
            </div>
          </div>
          <!--HEADER PRINCIPAL-->
          <div class="col m6  hide-on-med-and-down" style="height:100%;">
            <!--div class="row ">
              <ul class="hide-on-med-and-down ">
                  <li class="col s2 color-oscuro btn-menu center"><a  class='' href='#'>Nosotros</a></li>
                  <li class="col s2 color-oscuro btn-menu center"><a  class='' href='#'>Convenios</a></li>
                  <li class="col s2 color-oscuro btn-menu center"><a  class='' href='#'>Noticias</a></li>
                  <li class="col s2 color-oscuro btn-menu center"><a  class='' href='#'>Eventos</a></li>
                  <li class="col s2 color-oscuro btn-menu center"><a  class='' href='#'>Galeria</a></li>
                  <li class="col s2 color-oscuro btn-menu center"><a  class='' href='#'>Contáctanos</a></li>
              </ul>
            </div-->
            <?php wp_nav_menu( array (
                'theme_location' => 'menu_principal',
                'container' => 'div',
                //clase de la etiqueta que contiene al <ul>
                'container_class' => 'row',
                'items_wrap' => '<ul class="hide-on-med-and-down">%3$s</ul>',
                //clase de la etiqueta <ul>
                'menu_class' => 'hide-on-med-and-down',
              ) ) ?>
          </div>
        </div>

        <!--HEADER SECUNDARIO-->
        <div class="menu-fijo hide-on-med-and-down" style="width:100%;">
          <div class="row ">
            <div class=" col s12 l3 bg-secundario">
              <a href="<?php the_permalink( 89 ) ?>"><div class="btn-sec-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Aqui puedes descargar los Convenios Nacionales e Internacionales"></div></a>
            </div>
            <div class="col s12 l3 bg-secundario">
              <a href="<?php the_permalink( 13 ) ?>"><div class="btn-sec-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Estudia un semestre en otra Universidad"></div></a>
            </div>
            <div class="col s12 l3 bg-secundario">
              <a href="<?php the_permalink( 15 ) ?>"><div class="btn-sec-3 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Desarrolla Proyectos de Investigación Internacional"></div></a> 
            </div>
            <div class="col s12 l3 bg-secundario">
              <a href="<?php the_permalink( 19 ) ?>"><div class="btn-sec-4 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Puedes encontrar prácticas Pre y Post Profesionales"></div></a>
            </div>
          </div>
        </div>

        <!--HEADER MOVIL-->
        <nav class="hide-on-med-and-up bg-primario">
         <div class="nav-wrapper">
           <a href="#!" class="brand-logo"></a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <!--div>
            <ul class="side-nav bg-secundario" id="mobile-demo">
              <li><a class="white-text" href="#">Inicio</a></li>
              <li><a class="white-text" href="#">Nosotros</a></li>
              <li><a class="white-text" href="#">Convenios</a></li>
              <li><a class="white-text" href="#">Noticias</a></li>
              <li><a class="white-text" href="#">Eventos</a></li>
              <li><a class="white-text" href="#">Galeria</a></li>
              <li><a class="white-text" href="#">Contactanos</a></li>
              <div class="divider"></div>
              <li><a class="white-text" href="#">Cooperacion técnica</a></li>
              <li><a class="white-text" href="#">Movilidad Estudiantil</a></li>
              <li><a class="white-text" href="#">Internacionalización  docente</a></li>
              <li><a class="white-text" href="#">Otras Convocatorias</a></li>
            </ul>
           </div-->
           <?php wp_nav_menu( array (
                'theme_location' => 'menu_movil',
                'container' => 'div',
                //clase de la etiqueta que contiene al <ul>
                'container_class' => '',
                'items_wrap' => '<ul class="side-nav bg-secundario" id="mobile-demo">%3$s</ul>',
                //clase de la etiqueta <ul>
                'menu_class' => 'side-nav bg-secundario',
              ) ) ?>
         </div>

         
       </nav>
      </header>
