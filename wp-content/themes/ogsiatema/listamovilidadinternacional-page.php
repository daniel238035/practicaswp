<?php
/*
Template Name: Página Movilidad Nivel Internacional
*/
?>
<?php get_header(); ?> 

<div class="cuerpo">

  <div class="parallax-container">
    <div class="parallax">
      <img src="<?php bloginfo('template_url')?>/images/portadas/portada6.jpg">

    </div>
    <div class="row portada-secundario  ">
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
  
  <div class="row  white ">
    <div class="">
        <ul id="tabs-swipe-demo" class="tabs">
            <li class="tab col s4">
                <a class="active" href="#test-swipe-1">Alianza del Pacifico</a>
            </li>
            <li class="tab col s4">
                <a  href="#test-swipe-2">ERASMUS</a>
            </li>
            <li class="tab col s4">
                <a  href="#test-swipe-3">Otras Universidades</a>
            </li>
        </ul>
        <div id="test-swipe-1" class="col s12 ">
            <div class="row seccion">
                <div class="col s12 offset-l1 l7">

                    <div class="row">
                        <h4 class="text-negrita">
                            <?php the_title()?>
                        </h4>
                    </div>

                    <div class="row" style="padding-bottom: 5px">
                        <div class="col s12 l12">
                            <div class="row">
                                <div class="col s12 l6" style="margin: 8px 0px!important;">
                                    <div class="col s12 l4 flex-row-start text-negrita">
                                        <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Inicio">event</i>
                                        Inicio:
                                    </div>
                                    <div class="col s12 l8">
                                        <?php the_field( 'inicio_de_convocatoria' ); ?>
                                    </div>
                                </div>
                                <div class="col s12 l6" style="margin: 8px 0px!important;">
                                    <div class="col s12 l4 flex-row-start text-negrita">
                                        <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Duración">date_range</i>
                                        Duración:
                                    </div>
                                    <div class="col s12 l8">
                                        <?php the_field( 'duracion_de_convocatoria' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 hide-on-med-and-down">
                            <div class="row" style="margin: 15px 0px!important;">
                                <img src="<?php the_field( 'imagen_de_portada_convocatoria' ); ?>" class="responsive-img z-depth-1 imagen-evento" style="width: 100%;!important; height:450px!important;">
                            </div>
                        </div>

                        <div class="col s12 " id="sec_1" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Presentación</h4>
                            <div class="text-justificado">
                                <?php the_field( 'presentacion' ); ?>
                            </div>
                        </div>

                        <div class="col s12 " id="sec_2" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Áreas del Programa</h4>
                            <div class="text-justificado">
                                <?php the_field( 'beneficios' ); ?>
                            </div>
                        </div>

                        <div class="col s12 hide" id="sec_3" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Duración de la Beca</h4>
                            <h5>Estudiantes de pregrado</h5>
                            <div class="text-justificado">
                                <?php the_field( 'beneficios' ); ?>
                            </div>
                            <h5>Estudiantes de doctorado, investigadores y profesores</h5>
                            <div class="text-justificado">
                                <?php the_field( 'beneficios' ); ?>
                            </div>

                        </div>

                        <div class="col s12 " id="sec_4" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Vigencia y cronograma de la convocatoria para el 1er y 2o período académico</h4>
                            <div class="text-justificado">
                                <?php the_field( 'requerimientos_para_postular' ); ?>
                            </div>
                        </div>

                        <div class="col s12 " id="sec_5" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Beneficios</h4>
                            <div class="text-justificado">
                                <?php the_field( 'areas_de_conocimiento' ); ?>
                            </div>
                        </div>

                        <div class="col s12 " id="sec_6" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Universidades e Instituciones de Educación Superior</h4>
                            <div class="text-justificado">
                                <?php the_field( 'pasos_para_postular' ); ?>
                            </div>
                        </div>

                        <div class="col s12 " id="cronograma" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Proceso de postulación</h4>
                            <div class="text-justificado">
                                <?php the_field( 'cronograma' ); ?>
                            </div>
                        </div>

                        <div class="col s12 " id="duracion" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Documentos de postulación</h4>
                            <div class="text-justificado">
                                <?php the_field( 'duracion_de_la_beca' ); ?>
                            </div>
                        </div>

                        <div class="col s12 " id="documentacion" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Proceso de preselección</h4>
                            <div class="text-justificado">
                                <?php the_field( 'documentos_obligatorios' ); ?>
                            </div>
                        </div>

                        <div class="col s12 " id="documentacion" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Proceso de selección</h4>
                            <div class="text-justificado">
                                <?php the_field( 'documentos_obligatorios' ); ?>
                            </div>
                        </div>

                        <div class="col s12 " id="bases" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Gastos no cubiertos por la beca</h4>
                            <div class="text-justificado">
                                <?php the_field( 'bases_y_modificaciones' ); ?>
                            </div>
                        </div>

                        <div class="col s12 " id="bases" style="margin:15px 0px!important;">
                            <h4 class="color-secundario">Consideraciones para visa</h4>
                            <div class="text-justificado">
                                <?php the_field( 'bases_y_modificaciones' ); ?>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col s12 l3 barra-lateral">
                    <div class="row" style="margin: 15px 0px!important;">
                        <div class="col s12">
                            <a class="btn btn-principal text-negrita" href="#">Postula Aquí</a>
                        </div>
                    </div>
                    <div class="row" style="margin: 25px 0px!important;">
                        <h5 class="titulo-borde-izquierdo-2">DATOS GENERALES</h5>
                        <div class="row" style="margin: 12px 0px!important;">
                            <div class="col s2 flex-row-start text-negrita">
                                <i class="material-icons  color-secundario">edit</i>
                            </div>
                            <div class="col s10">
                                <a href="#sec_1" class="black-text">Presentación</a>
                            </div>
                        </div>
                        <div class="row" style="margin: 12px 0px!important;">
                            <div class="col s2 flex-row-start text-negrita">
                                <i class="material-icons  color-secundario">start</i>
                            </div>
                            <div class="col s10">
                                <a href="#sec_2" class="black-text">Áreas del Programa</a>
                            </div>
                        </div>
                        <div class="row hide" style="margin: 12px 0px!important;">
                            <div class="col s2 flex-row-start text-negrita">
                                <i class="material-icons  color-secundario">account_balance</i>
                            </div>
                            <div class="col s10">
                                <a href="#sec_3" class="black-text">Duración de la Beca</a>
                            </div>
                        </div>
                        <div class="row" style="margin: 12px 0px!important;">
                            <div class="col s2 flex-row-start text-negrita">
                                <i class="material-icons  color-secundario">content_paste</i>
                            </div>
                            <div class="col s10">
                                <a href="#sec_4" class="black-text">Vigencia y cronograma</a>
                            </div>
                        </div>
                        <div class="row" style="margin: 12px 0px!important;">
                            <div class="col s2 flex-row-start text-negrita">
                                <i class="material-icons  color-secundario">bubble_chart</i>
                            </div>
                            <div class="col s10">
                                <a href="#sec_5" class="black-text">Beneficios</a>
                            </div>
                        </div>
                        <div class="row" style="margin: 12px 0px!important;">
                            <div class="col s2 flex-row-start text-negrita">
                                <i class="material-icons  color-secundario">linear_scale</i>
                            </div>
                            <div class="col s10">
                                <a href="#sec_6" class="black-text">Universidades Elegibles</a>
                            </div>
                        </div>
                        <div class="row" style="margin: 12px 0px!important;">
                            <div class="col s2 flex-row-start text-negrita">
                                <i class="material-icons  color-secundario">date_range</i>
                            </div>
                            <div class="col s10">
                                <a href="#cronograma" class="black-text">Cronograma</a>
                            </div>
                        </div>
                        <div class="row" style="margin: 12px 0px!important;">
                            <div class="col s2 flex-row-start text-negrita">
                                <i class="material-icons  color-secundario">schedule</i>
                            </div>
                            <div class="col s10">
                                <a href="#duracion" class="black-text">Duración de la Beca</a>
                            </div>
                        </div>
                        <div class="row" style="margin: 12px 0px!important;">
                            <div class="col s2 flex-row-start text-negrita">
                                <i class="material-icons  color-secundario">inbox</i>
                            </div>
                            <div class="col s10">
                                <a href="#documentacion" class="black-text">Documentación Obligatorios</a>
                            </div>
                        </div>
                        <div class="row" style="margin: 12px 0px!important;">
                            <div class="col s2 flex-row-start text-negrita">
                                <i class="material-icons  color-secundario">class</i>
                            </div>
                            <div class="col s10">
                                <a href="#bases" class="black-text">Bases y Modificaciones</a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin: 25px 0px!important;">
                        <h5 class="titulo-borde-izquierdo-2">DOCUMENTOS</h5>
                        <div class="col s12">
                            <?php if( have_rows('lista_documentos_convocatoria') ): ?>
                                <ul class="">
                                <?php while( have_rows('lista_documentos_convocatoria') ): the_row();
                                    // variables
                                    $content_nombre_documento = get_sub_field('nombre_documento_convocatoria');
                                    $content_archivo_convocatoria = get_sub_field('archivo_documento_convocatoria');
                                ?>
                                <a href="<?php echo $content_enlace; ?>" class="collection-item black-text" target="_blank"><?php echo $content_universidad; ?></a>
                                <li class="flex-row-start" style="margin:10px 0px!important">
                                    <i class="material-icons color-secundario" style="margin-right:5px!important">cloud_download</i>
                                    <a href="<?php echo $content_archivo_convocatoria; ?>" class="black-text" target="_blank"><?php echo $content_nombre_documento; ?></a>
                                </li>
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                        </div>

                    </div>
                    <div class="row" style="margin: 25px 0px!important;">
                        <h5 class="titulo-borde-izquierdo-2">RESULTADOS</h5>
                        <div class="col s12">
                            <?php if( have_rows('lista_resultados_convocatorias') ): ?>
                                <ul class="">
                                <?php while( have_rows('lista_resultados_convocatorias') ): the_row();
                                    // variables
                                    $content_nombre_documento = get_sub_field('nombre_resultados_convocatoria');
                                    $content_archivo_convocatoria = get_sub_field('archivos_resultados_convocatoria');
                                ?>
                                <a href="<?php echo $content_enlace; ?>" class="collection-item black-text" target="_blank"><?php echo $content_universidad; ?></a>
                                <li class="flex-row-start" style="margin:10px 0px!important">
                                    <i class="material-icons color-secundario" style="margin-right:5px!important">cloud_download</i>
                                    <a href="<?php echo $content_archivo_convocatoria; ?>" class="black-text" target="_blank"><?php echo $content_nombre_documento; ?></a>
                                </li>
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div id="test-swipe-2" class="col s12 red">Test 2</div>
        <div id="test-swipe-3" class="col s12">
            <div class="container seccion">
        
            <div class="row">
                <!--LOOP Wordpress Inicio-->
                <?php
                      query_posts(array(
                        "showposts" => 12,
                        "cat" => 15,
                        //'post_type'=>'',
                        'order' => 'DES'
                        ));
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col s12 m4">
                    <div class="card" style="padding:0px!important;">
                        <div class="row">
                            <div class="col s12 m4 ">
                            <img class="activator" src="<?php the_field( 'imagen_universidad_internacional' ); ?>">

                            </div>
                            <div class="col s12 m8" style="margin: 15px 0px">
                            <a class="color-oscuro" href="<?php the_field( 'enlace_universidad_internacional' ); ?>" target="_blank"><h6><?php the_title() ?></h6></a> 

                            </div>
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
    </div>

    
  </div>
</div>


<?php get_footer() ?>
