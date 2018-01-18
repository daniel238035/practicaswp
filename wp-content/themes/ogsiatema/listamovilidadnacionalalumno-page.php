<?php
/*
Template Name: Página Movilidad Nivel Nacional Alumno
*/
?>
<?php get_header(); ?> 

  <div class="cuerpo">
        <div class="parallax-container portada-sub portada-principal-oscuro">
          <div class="parallax">
            <img src="<?php bloginfo('template_url')?>/images/portadas/portada6.jpg">

          </div>
          <div class="row   ">
            <div class=" flex seccion-2">
                <div class="row">
                  <div class="col s12 l7 offset-l2">
                    
                    <h2 class="white-text titulo-portada">Programa de Movilidad</h2>
                  </div>
                </div>
            </div>
          </div>
        </div>
        
        <div class="row seccion">
          <div class="col s12 offset-l1 l7">

            <div class="row">
              <h5 class="text-negrita color-secundario">Red Peruana de Universidades</h5>
              <h4 class="text-negrita"><?php the_title()?></h4>
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

              <div class="col s12 " id="presentacion" style="margin:15px 0px!important;">
                <h4 class="color-secundario" >Presentación</h4>
                <div class="text-justificado"><?php the_field( 'presentacion' ); ?></div>
              </div>

              <div class="col s12 " id="beneficios" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Beneficios</h4>
                <div class="text-justificado"><?php the_field( 'beneficios' ); ?></div>
              </div>

              <div class="col s12 " id="instituciones_elegibles" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Universidades Elegibles</h4>
                    <?php if( have_rows('ies_elegibles') ): ?>
                        <ul class="collection ">
                      	<?php while( have_rows('ies_elegibles') ): the_row();
                  		    // variables
                              $content_universidad = get_sub_field('universidad_elegible');
                              $content_enlace = get_sub_field('enlace_universidad_elegible');
                  		  ?>
                        <a href="<?php echo $content_enlace; ?>" class="collection-item black-text" target="_blank"><?php echo $content_universidad; ?></a>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>

              </div>

              <div class="col s12 " id="requerimientos" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Requerimientos para Postular</h4>
                <div class="text-justificado"><?php the_field( 'requerimientos_para_postular' ); ?></div>
              </div>

              <div class="col s12 " id="areas_conocimiento" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Áreas de Conocimiento</h4>
                <div class="text-justificado"><?php the_field( 'areas_de_conocimiento' ); ?></div>
              </div>

              <div class="col s12 " id="pasos" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Pasos para Postular</h4>
                <div class="text-justificado"><?php the_field( 'pasos_para_postular' ); ?></div>
              </div>

              <div class="col s12 " id="cronograma" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Cronograma</h4>
                <div class="text-justificado"><?php the_field( 'cronograma' ); ?></div>
              </div>

              <div class="col s12 " id="duracion" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Duración de la Beca</h4>
                <div class="text-justificado"><?php the_field( 'duracion_de_la_beca' ); ?></div>
              </div>

              <div class="col s12 " id="documentacion" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Documentación Obligatoria</h4>
                <div class="text-justificado"><?php the_field( 'documentos_obligatorios' ); ?></div>
              </div>

              

            </div>
          </div>

          <div class="col s12 l3 barra-lateral">
            <div class="row hide" style="margin: 15px 0px!important;">
              <div class="col s12">
                <a class="btn btn-principal text-negrita" href="#" >Postula Aquí</a>
              </div>
            </div>
            <div class="row" style="margin: 25px 0px!important;">
              <h5 class="titulo-borde-izquierdo-2">DATOS GENERALES</h5>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">edit</i>
                  </div>
                  <div class="col s10">
                    <a href="#presentacion" class="black-text">Presentación</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">start</i>
                  </div>
                  <div class="col s10">
                    <a href="#beneficios" class="black-text">Beneficios</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">account_balance</i>
                  </div>
                  <div class="col s10">
                    <a href="#instituciones_elegibles" class="black-text">Universidades Eleigles</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">content_paste</i>
                  </div>
                  <div class="col s10">
                    <a href="#requerimientos" class="black-text">Requermientos para Postular</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">bubble_chart</i>
                  </div>
                  <div class="col s10">
                    <a href="#areas_conocimiento" class="black-text">Áreas de Conocimiento</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">linear_scale</i>
                  </div>
                  <div class="col s10">
                    <a href="#pasos" class="black-text">Pasos para Postular</a>
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
              <div class="row hide" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">class</i>
                  </div>
                  <div class="col s10">
                    <a href="#bases" class="black-text">Bases y Modificaciones</a>
                  </div>
              </div>
            </div>
            <div class="row" style="margin: 25px 0px!important;">
                <h5 class="titulo-borde-izquierdo-2">BASES Y MODIFICACIONES</h5>
                <div class="col s12">
                    <?php if( have_rows('bases_y_modificaciones') ): ?>
                        <ul class="">
                      	<?php while( have_rows('bases_y_modificaciones') ): the_row();
                  		    // variables
                              $content_nombre_documento = get_sub_field('nombre_base');
                              $content_archivo_convocatoria = get_sub_field('documento_base');
                  		  ?>
                        
                        <li class="flex-row-start" style="margin:10px 0px!important">
                            <i class="material-icons color-secundario" style="margin-right:5px!important">cloud_download</i>
                            <a href="<?php echo $content_archivo_convocatoria; ?>" class="black-text" target="_blank"><?php echo $content_nombre_documento; ?></a>
                        </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>

                </div>

            </div>
            <div class="row hide" style="margin: 25px 0px!important;">
              <h5 class="titulo-borde-izquierdo-2">RESULTADOS</h5>
              <div class="col s12">
                <ul class="">
                  <li class="flex-row-start" style="margin:10px 0px!important"><i class="material-icons color-secundario" style="margin-right:5px!important">cloud_download</i><a href="#" class="black-text">Resultados 1</a></li>
                  <li class="flex-row-start" style="margin:10px 0px!important"><i class="material-icons color-secundario" style="margin-right:5px!important">cloud_download</i><a href="#" class="black-text">Resultados 1</a></li>
                  <li class="flex-row-start" style="margin:10px 0px!important"><i class="material-icons color-secundario" style="margin-right:5px!important">cloud_download</i><a href="#" class="black-text">Resultados 1</a></li>

                </ul>
              </div>

            </div>
          </div>
        </div>
  </div>

<?php get_footer() ?>