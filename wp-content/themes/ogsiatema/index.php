
<?php get_header(); ?> 

  <div class="cuerpo">
    <!--div class="row portada-principal portada-1 ">
        <div class="portada-principal-oscuro flex flex-row">
          <div class="container ">
            <div class="row">
              <div class="col s12 l8">
                <h2 class="white-text">BIENVENIDOS</h2>
                <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
    </div-->

    <div class="parallax-container">
      <div class="parallax">
        <img src="<?php bloginfo('template_url')?>/images/portadas/portada1.jpg">

      </div>
      <div class="row portada-principal">
          <div class="portada-principal-oscuro flex flex-row">
            <div class="container ">
              <div class="row">
                <div class="col s12 l8">
                  <h2 class="white-text">BIENVENIDOS</h2>
                  <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="row white seccion" id="nosotros">
      <div class="container ">
        <div class="col l6 hide-on-med-and-down">

        </div>
        <div class="col s12 l6">
          <div class="row">
            <div class="col s12">
              <h5 class="color-secundario text-negrita">Misión</h5>
              <p class="parrafo-mediano color-oscuro">La oficina General de Cooperación Técnica y Relaciones Internacionales UNPRG tiene como misión contribuir a la Internacionalización de nuestros servicios educativos, a través de convenios que permitan el intercambio cultural y académico con instituciones líderes a nivel nacional e internacional, con el propósito de ofrecer a nuestra comunidad universitaria una visión integral del mundo.</p>
            </div>
            <div class="col s12">
              <h5 class="color-secundario text-negrita">Visión</h5>
              <p class="parrafo-mediano color-oscuro">Ser reconocidos como agente de cambio y socio estratégico para la internacionalización de la Universidad.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row portada-secundario portada-2 hide-on-med-and-down">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">
            <div class="col s12 l6 offset-l1">
              <h2 class="white-text">COOPERACIÓN TÉCNICA</h2>
              <p class="white-text">Proveemos asistencia técnica para el establecimiento de acuerdos de cooperación en beneficio de la comunidad universitaria y la región Lambayeque.</p>
            </div>
          </div>
      </div>
    </div>

    <!--VISTA PARA MOVIL-->
    <div class="row  hide-on-med-and-up portada-2">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">
            <div class="col s12 l6 offset-l1">
              <h4 class="white-text text-negrita">COOPERACIÓN TÉCNICA</h4>
              <p class="white-text">Proveemos asistencia técnica para el establecimiento de acuerdos de cooperación en beneficio de la comunidad universitaria y la región Lambayeque.</p>
            </div>
          </div>
      </div>
    </div>

    <!--MOVILIDAD ESTUDIANTIL Inicio-->
    <div class="row hide-on-med-and-down portada-secundario portada-4 ">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">
            <div class="col s12 l4 offset-l1">
              <div class="container">
                <div class=" card card-seccion-2 row white">
                  <div class="col s12 ">
                    <h5 class="titulo-borde-izquierdo-2">Convocatorias Vigentes</h5>
                  </div>

                  <!--LOOP Wordpress Inicio-->
                  <?php
                        query_posts(array(
                          "showposts" => 3,
                          "cat" => 4,
                          //'post_type'=>'',
                          'order' => 'DES'
                          ));
                  ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  
                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s3 bg-secundario l">
                        <h6 class="white-text" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                      </div>
                      <div class="col s8">
                        <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                      </div>
                    </div>
                  </div>

                  <?php endwhile; ?>
                  <!-- post navigation -->
                  <?php else: ?>
                  <!-- no posts found -->
                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s4 bg-secundario l">
                        <h5 class="white-text" style="text-align:center">Muy<br>Pronto</h5>
                      </div>
                      <div class="col s7">
                        <h5 class="color-oscuro titulo-item">Nuevas Convotarias</h5>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
                  <!--LOOP Wordpress Fin-->

                  <div class="col s12 item">
                    <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 13 ) ?>">Ver más</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col s12 l5 offset-l1">

            <!--Llamar Pagina de  Wordpress Inicio-->
            <?php
            query_posts('pagename=Movilidad Estudiantil');
            while (have_posts()) : the_post();
            ?>
              <h2 class="white-text"><?php the_title()?></h2>
              <div class="white-text contenido-portada"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <!--Llamar Pagina de  Wordpress Fin-->

            </div>
          </div>
      </div>
    </div>

    <!--VISTA PARA MOVIL-->
    <div class="row hide-on-med-and-up portada-4 ">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">
            <div class="col s12 l5 offset-l1">

            <!--Llamar Pagina de  Wordpress Inicio-->
            <?php
            query_posts('pagename=Movilidad Estudiantil');
            while (have_posts()) : the_post();
            ?>
              <h4 class="white-text"><?php the_title()?></h4>
              <div class="white-text " style="margin:10px 0px!important;"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <!--Llamar Pagina de  Wordpress Fin-->

            </div>
            <div class="col s12 l4 offset-l1">
              <div class="container">
                <div class=" card card-seccion-2 row white">
                  <div class="col s12 ">
                    <h5 class="titulo-borde-izquierdo-2">Convocatorias Vigentes</h5>
                  </div>

                  <!--LOOP Wordpress Inicio-->
                  <?php
                        query_posts(array(
                          "showposts" => 3,
                          "cat" => 4,
                          //'post_type'=>'',
                          'order' => 'DES'
                          ));
                  ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s3 bg-secundario l">
                        <h6 class="white-text" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                      </div>
                      <div class="col s8">
                        <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                      </div>
                    </div>
                  </div>
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  <?php else: ?>
                  <!-- no posts found -->
                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s4 bg-secundario l">
                        <h5 class="white-text" style="text-align:center">Muy<br>Pronto</h5>
                      </div>
                      <div class="col s7">
                        <h5 class="color-oscuro titulo-item">Nuevas Convotarias</h5>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
                  <!--LOOP Wordpress Fin-->
                  
                  <div class="col s12 item">
                    <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 13 ) ?>">Ver más</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
      </div>
    </div>
    <!--MOVILIDAD ESTUDIANTIL Fin-->

    <!--INTERNACIONALIZACIÓN DOCENTE Inicio-->                      
    <div class="row hide-on-med-and-down portada-secundario portada-3 ">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">
            <div class="col s12 l6 offset-l1">
              <!--Llamar Pagina de  Wordpress Inicio-->
              <?php
              query_posts('pagename=Internacionalizacion Docentes');
              while (have_posts()) : the_post();
              ?>
                <h2 class="white-text"><?php the_title()?></h2>
                <div class="white-text contenido-portada"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
              <!--Llamar Pagina de  Wordpress Fin-->
            </div>

            <div class="col s12 l4">
              <div class="container">
                <div class=" card card-seccion-2 row white">
                  <div class="col s12 ">
                    <h5 class="titulo-borde-izquierdo-2">Convocatorias Vigentes</h5>
                  </div>

                  <!--LOOP Wordpress Inicio-->
                  <?php
                        query_posts(array(
                          "showposts" => 3,
                          "cat" => 5,
                          //'post_type'=>'',
                          'order' => 'DES'
                          ));
                  ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  
                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s3 bg-secundario l">
                        <h6 class="white-text" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                      </div>
                      <div class="col s8">
                        <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                      </div>
                    </div>
                  </div>
                  
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  <?php else: ?>
                  <!-- no posts found -->
                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s4 bg-secundario l">
                        <h5 class="white-text" style="text-align:center">Muy<br>Pronto</h5>
                      </div>
                      <div class="col s7">
                        <h5 class="color-oscuro titulo-item">Nuevas Convotarias</h5>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
                  <!--LOOP Wordpress Fin-->

                  <div class="col s12 item">
                    <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 15 ) ?>">Ver más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!--VISTA PARA MOVIL-->
    <div class="row hide-on-med-and-up portada-3 ">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">
            <div class="col s12 l6 offset-l1">
              <!--Llamar Pagina de  Wordpress Inicio-->
              <?php
              query_posts('pagename=Internacionalizacion Docentes');
              while (have_posts()) : the_post();
              ?>
                <h4 class="white-text"><?php the_title()?></h4>
                <div class="white-text " style="margin:10px 0px!important;"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
              <!--Llamar Pagina de  Wordpress Fin-->
            </div>

            <div class="col s12 l4">
              <div class="container">
                <div class=" card card-seccion-2 row white">
                  <div class="col s12 ">
                    <h5 class="titulo-borde-izquierdo-2">Convocatorias Vigentes</h5>
                  </div>

                  <!--LOOP Wordpress Inicio-->
                  <?php
                        query_posts(array(
                          "showposts" => 3,
                          "cat" => 5,
                          //'post_type'=>'',
                          'order' => 'DES'
                          ));
                  ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s3 bg-secundario l">
                        <h6 class="white-text" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                      </div>
                      <div class="col s8">
                        <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                      </div>
                    </div>
                  </div>
                  <?php endwhile; ?>
                  
                  <!-- post navigation -->
                  <?php else: ?>
                  <!-- no posts found -->
                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s4 bg-secundario l">
                        <h5 class="white-text" style="text-align:center">Muy<br>Pronto</h5>
                      </div>
                      <div class="col s7">
                        <h5 class="color-oscuro titulo-item">Nuevas Convotarias</h5>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
                  <!--LOOP Wordpress Fin-->
                  
                  <div class="col s12 item">
                    <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 15 ) ?>">Ver más</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!--INTERNACIONALIZACIÓN DOCENTE Fin--> 
    
    <!--OTRAS CONVOCATORIAS Inicio-->  
    <div class="row hide-on-med-and-down portada-secundario portada-5 ">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">
            <div class="col s12 l4 offset-l1">
              <div class="container">
                <div class=" card card-seccion-2 row white">
                  <div class="col s12 ">
                    <h5 class="titulo-borde-izquierdo-2">Convocatorias Vigentes</h5>
                  </div>

                  <!--LOOP Wordpress Inicio-->
                  <?php
                        query_posts(array(
                          "showposts" => 3,
                          "cat" => 6,
                          //'post_type'=>'',
                          'order' => 'DES'
                          ));
                  ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s3 bg-secundario l">
                        <h6 class="white-text" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                      </div>
                      <div class="col s8">
                        <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                      </div>
                    </div>
                  </div>
                  
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  <?php else: ?>
                  <!-- no posts found -->
                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s4 bg-secundario l">
                        <h5 class="white-text" style="text-align:center">Muy<br>Pronto</h5>
                      </div>
                      <div class="col s7">
                        <h5 class="color-oscuro titulo-item">Nuevas Convotarias</h5>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
                  <!--LOOP Wordpress Fin-->

                  <div class="col s12 item">
                    <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 19 ) ?>">Ver más</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 l5 offset-l1">
              <!--Llamar Pagina de  Wordpress Inicio-->
              <?php
              query_posts('pagename=Otras Convocatorias');
              while (have_posts()) : the_post();
              ?>
                <h2 class="white-text"><?php the_title()?></h2>
                <div class="white-text contenido-portada"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
              <!--Llamar Pagina de  Wordpress Fin-->
            </div>
          </div>
      </div>
    </div>

    <!--VISTA PARA MOVIL-->
    <div class="row hide-on-med-and-up portada-5 ">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">
            <div class="col s12 l5 offset-l1">
              <!--Llamar Pagina de  Wordpress Inicio-->
              <?php
              query_posts('pagename=Otras Convocatorias');
              while (have_posts()) : the_post();
              ?>
                <h4 class="white-text"><?php the_title()?></h4>
                <div class="white-text " style="margin:10px 0px!important;"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
              <!--Llamar Pagina de  Wordpress Fin-->
            </div>

            <div class="col s12 l4 offset-l1">
              <div class="container">
                <div class=" card card-seccion-2 row white">
                  <div class="col s12 ">
                    <h5 class="titulo-borde-izquierdo-2">Convocatorias Vigentes</h5>
                  </div>

                  <!--LOOP Wordpress Inicio-->
                  <?php
                        query_posts(array(
                          "showposts" => 3,
                          "cat" => 5,
                          //'post_type'=>'',
                          'order' => 'DES'
                          ));
                  ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s3 bg-secundario l">
                        <h6 class="white-text" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                      </div>
                      <div class="col s8">
                        <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                      </div>
                    </div>
                  </div>
                  <?php endwhile; ?>
                  
                  <!-- post navigation -->
                  <?php else: ?>
                  <!-- no posts found -->
                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s4 bg-secundario l">
                        <h5 class="white-text" style="text-align:center">Muy<br>Pronto</h5>
                      </div>
                      <div class="col s7">
                        <h5 class="color-oscuro titulo-item">Nuevas Convotarias</h5>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
                  <!--LOOP Wordpress Fin-->

                  <div class="col s12 item">
                    <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 19 ) ?>">Ver más</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
      </div>
    </div>
    <!--OTRAS CONVOCATORIAS Fin--> 


    <div class="row bg-fondo-oscuro seccion-2">
      <div class="container ">
        <div class="col s12 l4 altura-igual-2">
          <div class=" card card-seccion-2 row white" style="height:100%;">
            <div class="col s12 ">
              <h5 class="titulo-borde-izquierdo-2">Últimas Noticias</h5>
            </div>

                  <!--LOOP Wordpress Inicio-->
                  <?php
                        query_posts(array(
                          "showposts" => 1,
                          "cat" => 12,
                          //'post_type'=>'',
                          'order' => 'DES'
                          ));
                  ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="col s12 item">
                    <div class="row">
                      <div class="col s12">
                        <img class="responsive-img" src="<?php the_field( 'portada_de_noticia' ); ?>" alt="">
                      </div>
                      <div class="col s12">
                        <h5 class="color-secundario titulo-item"><?php the_field( 'fecha_de_noticia' ); ?></h5>
                        <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title() ?></h5></a>
                        
                      </div>
                    </div>
                  </div>

                  <?php endwhile; ?>
                  <!-- post navigation -->
                  <?php else: ?>
                  
                  <!-- no posts found -->
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
                  <!--LOOP Wordpress Fin-->
                  
            <div class="col s12 item" >
              <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 21 ) ?>">Ver más Noticias</a>
            </div>
          </div>
        </div>

        <div class="col s12 l8 altura-igual-2">
          <div class=" card card-seccion-2 row white" style="height:100%;">
            <div class="col s12 ">
              <h5 class="titulo-borde-izquierdo-2">Proximos Eventos</h5>
            </div>
             <!--LOOP Wordpress Inicio-->
             <?php
                        query_posts(array(
                          "showposts" => 1,
                          "cat" => 11,
                          //'post_type'=>'',
                          'order' => 'DES'
                          ));
                  ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="col s12 item">
              <div class="row">
                <div class="col s3 l2 bg-secundario l">
                  <h6 class="white-text" style="text-align:center"><?php the_field('fecha_de_evento');?></h6>
                </div>
                <div class="col s7 l8">
                  <a href="<?php the_permalink()?>"><h class="color-oscuro titulo-item"><?php the_title() ?></h5></a>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
                  <!-- post navigation -->
                  <?php else: ?>
                  
                  <!-- no posts found -->
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
                  <!--LOOP Wordpress Fin-->
          
            <div class="col s12 item" style="">
              <a class="btn btn-flat color-secundario text-negrita" href="#">Ver más Eventos</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row bg-secundario seccion-2" id="convenios">
      <div class="">
        <div class="swiper-container container">
          <div class="swiper-wrapper row ">
              <div class="swiper-slide">
                <div class="row">
                  <div class="col s6 l3">

                  </div>
                  <div class="col s6 l9">
                    <h6 class="white-text">Nuestra Universidad <br> Nacional Pedro Ruiz Gallo</h6>
                    <h5 class="white-text">Cuenta con Convenios con las <br>siguientes Instituciones</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col s6 l3">

                  </div>
                  <div class="col s6 l9">
                    <h6 class="white-text">Nuestra Universidad <br> Nacional Pedro Ruiz Gallo tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Nacional <br> de Trujillo</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col s6 l3">

                  </div>
                  <div class="col s6 l9">
                    <h6 class="white-text">Nuestra Universidad <br> Nacional Pedro Ruiz Gallo tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Nacional <br> de Chimbote</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col s6 l3">

                  </div>
                  <div class="col s6 l9">
                    <h6 class="white-text">Nuestra Universidad <br> Nacional Pedro Ruiz Gallo tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Nacional <br> de Piura</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">Slide 9</div>
              <div class="swiper-slide">Slide 10</div>
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer() ?>
