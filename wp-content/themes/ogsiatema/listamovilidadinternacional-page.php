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
            <!--LOOP Wordpress Inicio-->
                <?php
                      query_posts(array(
                        "showposts" => 1,
                        "cat" => 14,
                        //'post_type'=>'',
                        'order' => 'DES'
                        ));
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                                    <img src="<?php the_field( 'imagen_alianza' ); ?>" class="responsive-img z-depth-1 imagen-evento" style="width: 100%;!important; height:450px!important;">
                                </div>
                            </div>

                            <div class="col s12 " id="sec_1" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Presentación</h4>
                                <div class="text-justificado">
                                    <?php the_field( 'presentacion_alianza' ); ?>
                                </div>
                            </div>

                            <div class="col s12 " id="sec_2" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Áreas del Programa</h4>
                                <div class="text-justificado">
                                    <?php the_field( 'areas_del_programa' ); ?>
                                </div>
                            </div>

                            <div class="col s12 " id="sec_3" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Duración de la Beca</h4>
                                <h5>Estudiantes de pregrado</h5>
                                <div class="text-justificado">
                                    <?php the_field( 'duracion_de_la_beca_pregrado' ); ?>
                                </div>
                                <h5>Estudiantes de doctorado, investigadores y profesores</h5>
                                <div class="text-justificado">
                                    <?php the_field( 'duracion_de_la_beca_postgrado' ); ?>
                                </div>

                            </div>

                            <div class="col s12 " id="sec_4" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Vigencia y cronograma de la convocatoria para el 1er y 2o período académico</h4>
                                <div>
                                    <?php if( have_rows('vigencia_alianza') ): ?>
                                    <table class="highlight responsive-table">
                                        <thead>
                                            <tr>
                                                <th>Etapa</th>
                                                <th>Fechas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php while( have_rows('vigencia_alianza') ): the_row();
                                            // variables
                                            $content_etapa = get_sub_field('etapa_de_convocatoria');
                                            $content_fecha = get_sub_field('fechas_de_etapa_de_convocatoria');
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $content_etapa; ?>
                                            </td>
                                            <td>
                                                <?php echo $content_fecha; ?>
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>

                            <div class="col s12 " id="sec_5" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Beneficios</h4>
                                <div class="text-justificado">
                                    
                                    <img src="<?php the_field( 'beneficios_alianza' ); ?>" class="responsive-img z-depth-1 imagen-evento" style="width: 100%;!important; height:450px!important;">
                                </div>
                            </div>

                            <div class="col s12 " id="sec_6" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Universidades e Instituciones de Educación Superior</h4>
                                <div class="text-justificado">
                                    <?php the_field( 'universidad_de_alianza' ); ?>
                                </div>
                                <ul class="collection">
                                    <li class="collection-item"><a class="text-negrita color-oscuro"href="<?php the_field( 'relacion_universidades_alianza' ); ?>" target="_black"><H6>Relación de Universidades Elegibles <i class="material-icons right">file_download</i></H6> </a></li>
                                </ul>
                                
                            </div>

                            <div class="col s12 " id="sec_7" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Proceso de postulación</h4>
                                <div class="text-justificado">
                                    <?php the_field( 'proceso_de_postulacion_alianza' ); ?>
                                </div>
                            </div>

                            <div class="col s12 " id="sec_8" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Documentos de postulación</h4>
                                <div>
                                    <?php if( have_rows('documentos_de_postulacion_alianza') ): ?>
                                    <table class="highlight responsive-table">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Archivo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while( have_rows('documentos_de_postulacion_alianza') ): the_row();
                                                // variables
                                                $content_nombre = get_sub_field('nombre_de_documento_de_alianza');
                                                $content_descripción = get_sub_field('descripcion_de_documento_de_alianza');
                                                $content_archivo = get_sub_field('archivo_de_documento_de_alianza');
                                                            ?>
                                            <tr>
                                                <td>
                                                <?php echo $content_nombre; ?>
                                                </td>
                                                <td>
                                                <?php echo $content_descripción; ?>
                                                </td>
                                                <td>
                                                <a class="color-oscuro" href="<?php echo $content_archivo; ?>">Descargar</a>
                                                </td>
                                            </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                    <?php endif; ?>

                                </div>
                            </div>

                            <div class="col s12 " id="sec_9" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Proceso de preselección</h4>
                                <div class="text-justificado">
                                    <?php the_field( 'proceso_de_preseleccion_alianza' ); ?>
                                </div>
                            </div>

                            <div class="col s12 " id="sec_10" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Proceso de selección</h4>
                                <div class="text-justificado">
                                    <?php the_field( 'proceso_de_eleccion_alianza' ); ?>
                                </div>
                            </div>

                            <div class="col s12 " id="sec_11" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Gastos no cubiertos por la beca</h4>
                                <div class="text-justificado">
                                    <?php the_field( 'gastos_no_cubiertos' ); ?>
                                </div>
                            </div>

                            <div class="col s12 " id="sec_12" style="margin:15px 0px!important;">
                                <h4 class="color-secundario">Consideraciones para visa</h4>
                                <div class="text-justificado">
                                    <?php the_field( 'consideracion_para_visa_alianza' ); ?>
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
                                    <i class="material-icons  color-secundario">bubble_chart</i>
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
                                    <i class="material-icons  color-secundario">date_range</i>
                                </div>
                                <div class="col s10">
                                    <a href="#sec_4" class="black-text">Vigencia y cronograma</a>
                                </div>
                            </div>
                            <div class="row" style="margin: 12px 0px!important;">
                                <div class="col s2 flex-row-start text-negrita">
                                    <i class="material-icons  color-secundario">start</i>
                                </div>
                                <div class="col s10">
                                    <a href="#sec_5" class="black-text">Beneficios</a>
                                </div>
                            </div>
                            <div class="row" style="margin: 12px 0px!important;">
                                <div class="col s2 flex-row-start text-negrita">
                                    <i class="material-icons  color-secundario">account_balance</i>
                                </div>
                                <div class="col s10">
                                    <a href="#sec_6" class="black-text">Universidades Elegibles</a>
                                </div>
                            </div>
                            <div class="row" style="margin: 12px 0px!important;">
                                <div class="col s2 flex-row-start text-negrita">
                                    <i class="material-icons  color-secundario">linear_scale</i>
                                </div>
                                <div class="col s10">
                                    <a href="#sec_7" class="black-text">Proceso de postulación</a>
                                </div>
                            </div>
                            <div class="row" style="margin: 12px 0px!important;">
                                <div class="col s2 flex-row-start text-negrita">
                                    <i class="material-icons  color-secundario">content_paste</i>
                                </div>
                                <div class="col s10">
                                    <a href="#sec_8" class="black-text">Documentos de postulación</a>
                                </div>
                            </div>
                            <div class="row" style="margin: 12px 0px!important;">
                                <div class="col s2 flex-row-start text-negrita">
                                    <i class="material-icons  color-secundario">check</i>
                                </div>
                                <div class="col s10">
                                    <a href="#sec_9" class="black-text">Proceso de preselección</a>
                                </div>
                            </div>
                            <div class="row" style="margin: 12px 0px!important;">
                                <div class="col s2 flex-row-start text-negrita">
                                    <i class="material-icons  color-secundario">check_box</i>
                                </div>
                                <div class="col s10">
                                    <a href="#sec_10" class="black-text">Proceso de selección</a>
                                </div>
                            </div>
                            <div class="row" style="margin: 12px 0px!important;">
                                <div class="col s2 flex-row-start text-negrita">
                                    <i class="material-icons  color-secundario">do_not_disturb_on</i>
                                </div>
                                <div class="col s10">
                                    <a href="#sec_11" class="black-text">Gastos no cubiertos</a>
                                </div>
                            </div>
                            <div class="row" style="margin: 12px 0px!important;">
                                <div class="col s2 flex-row-start text-negrita">
                                    <i class="material-icons  color-secundario">class</i>
                                </div>
                                <div class="col s10">
                                    <a href="#sec_12" class="black-text">Consideraciones para visa</a>
                                </div>
                            </div>
                            <div class="row hide" style="margin: 12px 0px!important;">
                                <div class="col s2 flex-row-start text-negrita">
                                    <i class="material-icons  color-secundario">collections_bookmark</i>
                                </div>
                                <div class="col s10">
                                    <a href="#sec_12" class="black-text">Disposiciones Complementarias</a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 25px 0px!important;">
                            <h5 class="titulo-borde-izquierdo-2">DOCUMENTOS COMPLEMENTARIOS</h5>
                            <div class="col s12">
                                <?php if( have_rows('documentos_complementarios') ): ?>
                                    <ul class="">
                                    <?php while( have_rows('documentos_complementarios') ): the_row();
                                        // variables
                                        $content_nombre_documento = get_sub_field('nombre_documento_alianza');
                                        $content_archivo = get_sub_field('archivo_documento_alianza');
                                    ?>
                                    
                                    <li class="flex-row-start" style="margin:10px 0px!important">
                                        <i class="material-icons color-secundario" style="margin-right:5px!important">cloud_download</i>
                                        <a href="<?php echo $content_archivo; ?>" class="black-text" target="_blank"><?php echo $content_nombre_documento; ?></a>
                                    </li>
                                    <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>

                            </div>

                        </div>
                        <div class="row hide" style="margin: 25px 0px!important;">
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
                <?php endwhile; ?>
                <!-- post navigation -->
                <?php else: ?>
                <!-- no posts found -->
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <!--LOOP Wordpress Fin-->
        </div>
        <div id="test-swipe-2" class="col s12 ">
            <div class="container seccion">
                <div class="row">
                    <h4>
                        ERASMUS
                    </h4>
                    <p class="text-justificado">
                        El programa ERASMUS+ permite la realización de movilidad académica en universidades de Europa. Actualmente, se ha implementado con la Universidad Pública de Navarra.
                    </p>
                </div>
            </div>
        </div>
        <div id="test-swipe-3" class="col s12">
            <div class="container seccion">
        
            <div class="row">
                <!--LOOP Wordpress Inicio-->
                <?php
                      query_posts(array(
                        "showposts" => 12,
                        "cat" => 16,
                        //'post_type'=>'',
                        'order' => 'DES'
                        ));
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col s12 m4">
                    <div class="card" style="padding:0px!important;">
                        <div class="row">
                            <div class="col s12 m4 ">
                                <img class="responsive-img activator" src="<?php the_field( 'imagen_universidad' ); ?>" style="height:86px; width:86px;">

                            </div>
                            <div class="col s12 m8" style="margin: 15px 0px">
                                <div class="row flex-row">
                                    <a class=" col s12 color-oscuro " href="<?php the_field( 'enlace_universidad' ); ?>" target="_blank"><h6 class="altura-igual-2"><?php the_title() ?></h6></a> 
                                    
                                </div>

                            </div>
                            <a class="col s12 btn btn-flat color-secundario text-negrita " href="<?php the_field( 'documento_convenio' ); ?>" target="_black">Ver Convenio <i class="material-icons right">file_download</i></a>
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
