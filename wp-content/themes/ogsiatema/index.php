
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

    <div class="parallax-container" style="height: 400px;">
      <div class="parallax">
        <img src="<?php bloginfo('template_url')?>/images/portadas/portada-bienvenido-2.jpg">

      </div>
      <div class="row portada-principal">
          <div class="portada-principal-oscuro flex flex-row" style="height:80%;">
            <div class="container ">
              <div class="row">
                <div class="col s12 l8">
                  <h2 class="white-text titulo-portada">Bienvenidos</h2>
                  <p class="white-text">Te damos la mas cordial bienvenida a nuestra pagina web. Agradecemos el interés por conocer mejor los servicios que brindamos.</p>
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
              <p class="text-justificado parrafo-mediano color-oscuro">La oficina General de Cooperación Técnica y Relaciones Internacionales UNPRG tiene como misión contribuir a la Internacionalización de nuestros servicios educativos, a través de convenios que permitan el intercambio cultural y académico con instituciones líderes a nivel nacional e internacional, con el propósito de ofrecer a nuestra comunidad universitaria una visión integral del mundo.</p>
            </div>
            <div class="col s12">
              <h5 class="color-secundario text-negrita">Visión</h5>
              <p class="text-justificado parrafo-mediano color-oscuro">Ser reconocidos como agente de cambio y socio estratégico para la internacionalización de la Universidad.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--COOPERACION TECNICA inicio-->
    <div id="cooperacion" class="row portada-secundario portada-2 hide-on-med-and-down">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">
            <div class="col s12 l6 offset-l1">
            <!--Llamar Pagina de  Wordpress Inicio-->
            <?php
            query_posts('pagename= Cooperacion Tecnica');
            while (have_posts()) : the_post();
            ?>
              <h2 class="white-text titulo-portada"><?php the_title()?></h2>
              <div class="text-justificado  white-text contenido-portada"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <!--Llamar Pagina de  Wordpress Fin-->
            <div class="col s12 item">
               <a class="btn btn-principal  text-negrita" href="<?php the_permalink( 89 ) ?>">Ver más</a>
            </div>
            </div>
            
            <!--OCULTAR LISTA-->
            <div class=" col s12 l4 hide">
              <div class="container">
                  <div class=" card card-seccion-2 row white">
                    <div class="swiper-container swiper-container-horizontal-3  ">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div>
                            <div class="col s12 ">
                                <h5 class="titulo-borde-izquierdo-2">Convenios <br> Nacionales</h5>
                              </div>

                              <div class="row">
                                <!--REPETIDOR DE ARCHIVOS COOPERACION NACIONAL inicio -->
                                <?php if( have_rows('lista_archivo_cooperacion') ): $i = 0; ?>
                                
                                  <?php while( have_rows('lista_archivo_cooperacion') ): the_row();
                                      // variables
                                      $content_nombre_archivo = get_sub_field('nombre_de_archivo_cooperacion');
                                      $content_archivo = get_sub_field('archivo_cooperacion');
                                  ?>

                                  <?php $i++; ?>
                                  <?php if( $i > 3 ): ?>
                                  <?php break; ?>
                                  <?php endif; ?>
                                  <div class="col s12 m12">
                                      <div class="" style="padding:0px!important;">
                                          <div class="row">
                                              <div class="col s12 m4 ">
                                              <img class ="responsive-img" src="<?php bloginfo('template_url')?>/images/icono-descargar.png">

                                              </div>
                                              <div class="col s12 m8" style="margin: 15px 0px">
                                              <a class="color-oscuro" href="<?php echo $content_archivo; ?>" target="_blank"><h6><?php echo $content_nombre_archivo; ?></h6></a> 

                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                  <?php endwhile; else : endif ?>
                                  
                                  <!--REPETIDOR DE ARCHIVOS COOPERACION NACIONAL fin -->
                              </div>
                              

                              <div class="col s12 item">
                                <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 89 ) ?>">Ver más</a>
                              </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div>
                            <div class="col s12 ">
                                <h5 class="titulo-borde-izquierdo-2">Convenios Internacionales</h5>
                              </div>

                              <div class="row">

                                  <?php if( have_rows('lista_archivo_cooperacion_internacional') ):  $i = 0;?>
                                
                                  <?php while( have_rows('lista_archivo_cooperacion_internacional') ): the_row();
                                      // variables
                                      $content_nombre_archivo = get_sub_field('nombre_archivo_cooperacion_internacional');
                                      $content_archivo = get_sub_field('archivo_cooperacion_internacional');
                                  ?>
                                  <?php $i++; ?>
                                  <?php if( $i > 3 ): break; ?>
                                  <?php endif; ?>
                                  <div class="col s12 ">
                                    <div class="" style="padding:0px!important;">
                                        <div class="row">
                                            <div class="col s12 m4 ">
                                            <img class ="responsive-img" src="<?php bloginfo('template_url')?>/images/icono-descargar.png">

                                            </div>
                                            <div class="col s12 m8" style="margin: 15px 0px">
                                            <a class="color-oscuro" href="<?php echo $content_archivo; ?>" target="_blank"><h6><?php echo $content_nombre_archivo; ?></h6></a> 

                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                
                                  <?php endwhile; else : endif ?>

                            
                        </div>

                              <div class="col s12 item">
                                <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 89 ) ?>">Ver más</a>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-pagination swiper-pagination-v"></div>
                    </div>
                  </div>
              </div>
            </div>

          </div>
      </div>
    </div>

    <!--VISTA PARA MOVIL-->
    <div class="row  hide-on-med-and-up portada-2">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">
            <div class="col s12 l6 offset-l1">
              <!--Llamar Pagina de  Wordpress Inicio-->
            <?php
            query_posts('pagename= Cooperacion Tecnica');
            while (have_posts()) : the_post();
            ?>
              <h4 class="white-text titulo-portada"><?php the_title()?></h4>
              <div class="text-justificado  white-text contenido-portada"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <!--Llamar Pagina de  Wordpress Fin-->
            </div>
            
            <div class="col s12 item">
               <a class="btn btn-principal  text-negrita" href="<?php the_permalink( 89 ) ?>">Ver más</a>
            </div>
          </div>
      </div>
    </div>

    

    <!--COOPERACION TECNICA fin -->

    <!--MOVILIDAD ESTUDIANTIL Inicio-->
    <div id="movilidad" class="row hide-on-med-and-down portada-secundario portada-4 ">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">

          <div class=" col s12 l4 offset-l1">
            <div class="container">
                <div class=" card card-seccion-2 row white">
                  <div class="swiper-container swiper-container-horizontal-2  ">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div>
                          <div class="col s12 ">
                              <h5 class="titulo-borde-izquierdo-2">Convocatorias Vigentes</h5>
                          </div>

                            <!--LOOP Wordpress Inicio-->

                            <!--Llamar Pagina de  Wordpress Inicio-->
                            <?php
                            query_posts('pagename=Movilidad Nacional Alumno');
                            while (have_posts()) : the_post();
                            ?>
                            <div class="col s12 item">
                              <div class="row flex-row">
                                <div class="col s3 bg-secundario l">
                                  <h6 class="white-text text-justificado" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                                </div>
                                <div class="col s8">
                                  <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                                </div>
                              </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                            <!--Llamar Pagina de  Wordpress Fin-->

                            <!--Llamar Pagina de  Wordpress Inicio-->
                            <?php
                            query_posts('pagename=Movilidad Nacional Docente');
                            while (have_posts()) : the_post();
                            ?>
                            <div class="col s12 item">
                              <div class="row flex-row">
                                <div class="col s3 bg-secundario l">
                                  <h6 class="white-text text-justificado" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                                </div>
                                <div class="col s8">
                                  <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                                </div>
                              </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                            <!--Llamar Pagina de  Wordpress Fin-->

                            <!--Llamar Pagina de  Wordpress Inicio-->
                            <?php
                            query_posts('pagename=Movilidad Nacional Administrativo');
                            while (have_posts()) : the_post();
                            ?>
                            <div class="col s12 item">
                              <div class="row flex-row">
                                <div class="col s3 bg-secundario l">
                                  <h6 class="white-text text-justificado" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                                </div>
                                <div class="col s8">
                                  <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                                </div>
                              </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                            <!--Llamar Pagina de  Wordpress Fin-->

                            <!--LOOP Wordpress Fin-->

                            <div class="col s12 item">
                              <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 110 ) ?>">Ver más</a>
                            </div>
                        </div>
                      </div>
                      <!--SWIPER OCULTO POR EL MOMENTO -->
                      <div class=" hide swiper-slide">
                        <div>
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
                              <div class="row flex-row">
                                <div class="col s3 bg-secundario l">
                                  <h6 class="white-text text-justificado" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
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
                    <div class="swiper-pagination swiper-pagination-v"></div>
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
              <h2 class="white-text titulo-portada"><?php the_title()?></h2>
              <div class="text-justificado white-text contenido-portada"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
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
              <h4 class="white-text titulo-portada"><?php the_title()?></h4>
              <div class="text-justificado white-text " style="margin:10px 0px!important;"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <!--Llamar Pagina de  Wordpress Fin-->

            </div>
            <div class="col s12 l4 offset-l1">
              <div class="container">
                <div class=" card card-seccion-2 row white">
                  <div class="col s12 ">
                              <h5 class="titulo-borde-izquierdo-2">Convocatorias Vigentes en UNPRG</h5>
                          </div>

                            <!--LOOP Wordpress Inicio-->

                            <!--Llamar Pagina de  Wordpress Inicio-->
                            <?php
                            query_posts('pagename=Movilidad Nacional Alumno');
                            while (have_posts()) : the_post();
                            ?>
                            <div class="col s12 item">
                              <div class="row flex-row">
                                <div class="col s3 bg-secundario l">
                                  <h6 class="white-text text-justificado" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                                </div>
                                <div class="col s8">
                                  <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                                </div>
                              </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                            <!--Llamar Pagina de  Wordpress Fin-->

                            <!--Llamar Pagina de  Wordpress Inicio-->
                            <?php
                            query_posts('pagename=Movilidad Nacional Docente');
                            while (have_posts()) : the_post();
                            ?>
                            <div class="col s12 item">
                              <div class="row flex-row">
                                <div class="col s3 bg-secundario l">
                                  <h6 class="white-text text-justificado" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                                </div>
                                <div class="col s8">
                                  <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                                </div>
                              </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                            <!--Llamar Pagina de  Wordpress Fin-->

                            <!--Llamar Pagina de  Wordpress Inicio-->
                            <?php
                            query_posts('pagename=Movilidad Nacional Administrativo');
                            while (have_posts()) : the_post();
                            ?>
                            <div class="col s12 item">
                              <div class="row flex-row">
                                <div class="col s3 bg-secundario l">
                                  <h6 class="white-text text-justificado" style="text-align:center"><?php the_field( 'inicio_de_convocatoria' ); ?></h6>
                                </div>
                                <div class="col s8">
                                  <a href="<?php the_permalink()?>"><h5 class="color-oscuro titulo-item"><?php the_title()?></h5></a>
                                </div>
                              </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                            <!--Llamar Pagina de  Wordpress Fin-->

                            <!--LOOP Wordpress Fin-->

                            <div class="col s12 item">
                              <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 110 ) ?>">Ver más</a>
                            </div>

                </div>
              </div>
            </div>

          </div>
      </div>
    </div>
    
    <!--SECCION ADICIONAL EN MOVILIDAD ESTUDIANTIL-->
    <div class="row  white seccion">

          <div class="container">
            <div class="row">
              <div class="col s12 l6">
                <div class="row">
                  <!--Llamar Pagina de  Wordpress Inicio-->
                    <?php
                    query_posts('pagename=Programa de Movilidad a Nivel Nacional');
                    while (have_posts()) : the_post();
                    ?>
                  <div class="col s12 flex-row">
                    <a class="flex-row" href="<?php the_permalink()?>"><img style="width:50%" src="<?php bloginfo('template_url')?>/images/icono-peru.png"></a>
                  </div>
                  <div class="col s12 flex-row">
                    
                      <a class="black-text text-negrita" href="<?php the_permalink()?>"><h5 style="text-align: center;"><?php the_title()?></h5></a>
                      <div class="text-justificado color-oscuro parrafo-mediano" style="text-align: center;"><?php the_excerpt() ?></div>

                  </div>
                   <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                    <!--Llamar Pagina de  Wordpress Fin-->
                </div>
              </div>
              <div class="col s12 l6">
                <div class="row">
                  <!--Llamar Pagina de  Wordpress Inicio-->
                    <?php
                    query_posts('pagename=Programa de Movilidad a Nivel Internacional');
                    while (have_posts()) : the_post();
                    ?>
                  <div class="col s12 flex-row">
                    <a class="flex-row" href="<?php the_permalink()?>"><img style="width:50%" src="<?php bloginfo('template_url')?>/images/icono-mundo.png"></a>
                  </div>

                  <div class="col s12 flex-row">
                    
                      <a class="black-text text-negrita" href="<?php the_permalink()?>"><h5 style="text-align: center;"><?php the_title()?></h5></a>
                      <div class="text-justificado color-oscuro parrafo-mediano" style="text-align: center;"><?php the_excerpt() ?></div>
                    
                  </div>
                  <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                    <!--Llamar Pagina de  Wordpress Fin-->
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
                <h2 class="white-text titulo-portada"><?php the_title()?></h2>
                <div class="text-justificado white-text contenido-portada"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
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
                    <div class="row flex-row">
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
                <h4 class="white-text titulo-portada"><?php the_title()?></h4>
                <div class="text-justificado white-text " style="margin:10px 0px!important;"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
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
                    <div class="row flex-row">
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
                <h2 class="white-text titulo-portada"><?php the_title()?></h2>
                <div class="text-justificado white-text contenido-portada"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
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
                <h4 class="white-text titulo-portada"><?php the_title()?></h4>
                <div class="text-justificado white-text " style="margin:10px 0px!important;"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
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
                    <div class="row flex-row">
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
                  "showposts" => 3,
                   "cat" => 11,
                   //'post_type'=>'',
                   'order' => 'DES'
                    ));
              ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="col s12 item">
              <div class="row flex-row">
                <div class="col s3 l2 bg-secundario l">
                  <h6 class="white-text" style="text-align:center"><?php the_field('fecha_de_evento');?></h6>
                </div>
                <div class="col s7 l8">
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
              <a class="btn btn-flat color-secundario text-negrita" href="<?php the_permalink( 23 ) ?>">Ver más Eventos</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row bg-secundario seccion-2" id="convenios">
      <div class="">
        <div class="swiper-container container swiper-container-horizontal-1">
          <div class="swiper-wrapper row ">
              <div class="swiper-slide">
                <div class="row">
                  <div class="hide-on-med-and-down col l3 offset-s1 flex-row">
                    <img src="<?php bloginfo('template_url')?>/images/logos/unprg.png" style="width: 60%;">
                  </div>
                  <div class="col s10 offset-s1 l8">
                    <h6 class="white-text">Nuestra <span class="text-negrita"> Universidad <br> Nacional Pedro Ruiz Gallo</span></h6>
                    <h5 class="white-text">Cuenta con Convenios con las <br>siguientes Instituciones</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="hide-on-med-and-down col l3 offset-s1 flex-row">
                    <img src="<?php bloginfo('template_url')?>/images/logos/sanmarcos.png" style="width: 60%;">
                  </div>
                  <div class="col s10 offset-s1 l8">
                    <h6 class="white-text">Nuestra <span class="text-negrita"> Universidad <br> Nacional Pedro Ruiz Gallo</span> tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Nacional Mayor <br> de San Marcos</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="hide-on-med-and-down col l3 offset-s1 flex-row">
                    <img src="<?php bloginfo('template_url')?>/images/logos/uni.png" style="width: 60%;">
                  </div>
                  <div class="col s10 offset-s1 l8">
                    <h6 class="white-text">Nuestra <span class="text-negrita"> Universidad <br> Nacional Pedro Ruiz Gallo</span> tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Nacional <br> de Ingenieria</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="hide-on-med-and-down col l3 offset-s1 flex-row">
                    <img src="<?php bloginfo('template_url')?>/images/logos/agrariamolina.png" style="width: 60%;">
                  </div>
                  <div class="col s10 offset-s1 l8">
                    <h6 class="white-text">Nuestra <span class="text-negrita"> Universidad <br> Nacional Pedro Ruiz Gallo</span> tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Nacional Agraria<br> La Molina</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="hide-on-med-and-down col l3 offset-s1 flex-row">
                    <img src="<?php bloginfo('template_url')?>/images/logos/cayetano.png" style="width: 60%;">
                  </div>
                  <div class="col s10 offset-s1 l8">
                    <h6 class="white-text">Nuestra <span class="text-negrita"> Universidad <br> Nacional Pedro Ruiz Gallo</span> tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Peruana<br> Cayetano Heredia</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="hide-on-med-and-down col l3 offset-s1 flex-row">
                    <img src="<?php bloginfo('template_url')?>/images/logos/trujillo.png" style="width: 60%;">
                  </div>
                  <div class="col s10 offset-s1 l8">
                    <h6 class="white-text">Nuestra <span class="text-negrita"> Universidad <br> Nacional Pedro Ruiz Gallo</span> tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Nacional<br> de Trujillo</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="hide-on-med-and-down col l3 offset-s1 flex-row">
                    <img src="<?php bloginfo('template_url')?>/images/logos/piura.png" style="width: 60%;">
                  </div>
                  <div class="col s10 offset-s1 l8">
                    <h6 class="white-text">Nuestra <span class="text-negrita"> Universidad <br> Nacional Pedro Ruiz Gallo</span> tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Nacional<br> de Piura</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="hide-on-med-and-down col l3 offset-s1 flex-row">
                    <img src="<?php bloginfo('template_url')?>/images/logos/cajamarca.png" style="width: 60%;">
                  </div>
                  <div class="col s10 offset-s1 l8">
                    <h6 class="white-text">Nuestra <span class="text-negrita"> Universidad <br> Nacional Pedro Ruiz Gallo</span> tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Nacional<br> de Cajamarca</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="hide-on-med-and-down col l3 offset-s1 flex-row">
                    <img src="<?php bloginfo('template_url')?>/images/logos/catolicatrujillo.png" style="width: 60%;">
                  </div>
                  <div class="col s10 offset-s1 l8">
                    <h6 class="white-text">Nuestra <span class="text-negrita"> Universidad <br> Nacional Pedro Ruiz Gallo</span> tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Católica<br> de Trujillo</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="hide-on-med-and-down col l3 offset-s1 flex-row">
                    <img src="<?php bloginfo('template_url')?>/images/logos/catolicachimbote.png" style="width: 60%;">
                  </div>
                  <div class="col s10 offset-s1 l8">
                    <h6 class="white-text">Nuestra <span class="text-negrita"> Universidad <br> Nacional Pedro Ruiz Gallo</span> tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Católica<br> de Chimbote</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row">
                  <div class="hide-on-med-and-down col l3 offset-s1 flex-row">
                    <img src="<?php bloginfo('template_url')?>/images/logos/altiplano.png" style="width: 60%;">
                  </div>
                  <div class="col s10 offset-s1 l8">
                    <h6 class="white-text">Nuestra <span class="text-negrita"> Universidad <br> Nacional Pedro Ruiz Gallo</span> tiene convenio con: </h6>
                    <h5 class="white-text">Universidad Nacional<br> de Altiplano</h5>
                  </div>
                </div>
              </div>
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer() ?>
