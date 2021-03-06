<?php
/*
Template Name: Página Internacionalización Docente
*/
?>
<?php get_header(); ?> 

<div class="cuerpo">

  <div class="parallax-container">
    <div class="parallax">
      <img src="<?php bloginfo('template_url')?>/images/portadas/portada5.jpg">

    </div>
    <div class="row portada-secundario ">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row">
            <div class="col s12 l5 offset-l1">
              <h2 class="white-text titulo-portada"><?php the_title() ?></h2>
              <div class="text-justificado white-text contenido-portada"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="row  white seccion">
            <div class="container">
              <div class="row">
                 <!--LOOP Wordpress Inicio-->
                 <?php
                      query_posts(array(
                        "showposts" => 18,
                        "cat" => 5,
                        //'post_type'=>'',
                        'order' => 'DES'
                        ));
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 
                <div class="col s12 m4">
                  <div class="card" style="padding:0px!important;">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="<?php the_field( 'imagen_convocatoria' ); ?>">
                    </div>
                    <div class="card-content" style="padding:15px!important;">
                      <div class="row flex-row">
                        <div class="col s12">
                          <h5 class="titulo-borde-izquierdo-2 activator altura-igual-convocatoria-titulo"><?php the_title() ?></h5>
                        </div>
                        <div class="col s2 hide">
                          <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12 altura-igual-convocatoria-contenido" style="margin: 8px 0px!important;">
                          <div class="row" >
                              <div class="col s2 flex-row-start">
                                <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Institución">place</i>
                              </div>
                              <div class="col s10">
                              <?php the_field( 'institucion_convocatoria' ); ?>
                              </div>
                          </div>
                        </div>
                        <div class="col s12" style="margin: 8px 0px!important;">
                          <div class="row">
                              <div class="col s2 flex-row-start">
                                <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Inicio">event</i>
                              </div>
                              <div class="col s10">
                               <?php the_field( 'inicio_convocatoria' ); ?>
                              </div>
                          </div>
                        </div>
                        <div class="col s12" style="margin: 8px 0px!important;">
                          <div class="row">
                              <div class="col s2 flex-row-start">
                                <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Duración">date_range</i>
                              </div>
                              <div class="col s10">
                                <?php the_field( 'duracion_convocatoria' ); ?>
                              </div>
                          </div>
                        </div>
                        <div class="col s12" style="margin: 8px 0px!important;">
                          <div class="row">
                              <div class="col s2 flex-row-start">
                                <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Duración">mail</i>
                              </div>
                              <div class="col s10">
                                <?php the_field( 'correo_para_mas_informacion' ); ?>
                              </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="card-action" style="padding: 5px 5px!important">
                       <div class="row">
                          <div class="col s12 m5">
                            <a class="btn btn-flat green-text text-negrita tamaño-pequeño" href="<?php the_field( 'enlace_convocatoria' ); ?>" >Inscríbete</a>
                          </div>
                          <div class="col s12 m5">
                              <a class="btn btn-flat green-text text-negrita tamaño-pequeño" href="<?php the_field( 'formulario_convocatoria' ); ?>" >Formulario</a>
                          </div>
                      </div>
                      
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4"><?php the_title() ?><i class="material-icons right">close</i></span>
                      <div><?php the_field( 'presentacion' ); ?></div>
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
              </div>
            </div>
  </div>
</div>

<?php get_footer() ?>
