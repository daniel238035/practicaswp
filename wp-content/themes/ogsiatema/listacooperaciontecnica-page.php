<?php
/*
Template Name: Página Cooperacion Tecnica
*/
?>
<?php get_header(); ?> 

<div class="cuerpo">

  <div class="parallax-container">
    <div class="parallax">
      <img src="<?php bloginfo('template_url')?>/images/portadas/portada3.jpg">

    </div>
    <div class="row portada-secundario ">
      <div class="portada-principal-oscuro flex seccion-2">
          <div class="row" style="width:100%;">
            <div class="col s12 l5 offset-l1">
              <h2 class="white-text titulo-portada"><?php the_title() ?></h2>
              <div class="text-justificado white-text contenido-portada"><?php the_field( 'descripcion_pagina_convocatoria' ); ?>
              </div>
            </div>
            
          </div>
      </div>
    </div>
  </div>

  <div class="row  white seccion">
            <div class="container">
              <div class="row">
                              
                <div class="col s12">
                    <h5>Convenios Nacionales</h5>
                    <div class="row">
                            <?php if( have_rows('lista_archivo_cooperacion') ): ?>
                            
                              <?php while( have_rows('lista_archivo_cooperacion') ): the_row();
                                  // variables
                                  $content_nombre_archivo = get_sub_field('nombre_de_archivo_cooperacion');
                                  $content_archivo = get_sub_field('archivo_cooperacion');
                              ?>
                              <div class="col s12 m4">
                                    <div class="card" style="padding:0px!important;">
                                        <div class="row">
                                            <div class="col s12 m6 ">
                                            <img class ="responsive-img" src="<?php bloginfo('template_url')?>/images/icono-descargar.png">

                                            </div>
                                            <div class="col s12 m6" style="margin: 15px 0px">
                                            <a class="color-oscuro" href="<?php echo $content_archivo; ?>" target="_blank"><h6><?php echo $content_nombre_archivo; ?></h6></a> 

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            
                        <?php endif; ?>

                        
                    </div>
                </div>
                <div class="col s12">
                    <h5>Convenios Internacionales</h5>
                    <div class="row">
                            <?php if( have_rows('lista_archivo_cooperacion_internacional') ): ?>
                            
                              <?php while( have_rows('lista_archivo_cooperacion_internacional') ): the_row();
                                  // variables
                                  $content_nombre_archivo = get_sub_field('nombre_archivo_cooperacion_internacional');
                                  $content_archivo = get_sub_field('archivo_cooperacion_internacional');
                              ?>
                              <div class="col s12 m4">
                                    <div class="card" style="padding:0px!important;">
                                        <div class="row">
                                            <div class="col s12 m6 ">
                                            <img class ="responsive-img" src="<?php bloginfo('template_url')?>/images/icono-descargar.png">

                                            </div>
                                            <div class="col s12 m6" style="margin: 15px 0px">
                                            <a class="color-oscuro" href="<?php echo $content_archivo; ?>" target="_blank"><h6><?php echo $content_nombre_archivo; ?></h6></a> 

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>

                        
                    </div>
                </div>

                
              </div>
            </div>
  </div>
</div>

<?php get_footer() ?>