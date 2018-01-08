<?php
/*
Template Name: Página Movilidad
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
              <h2 class="white-text"><?php the_title() ?></h2>
              <div class="white-text contenido-portada"><?php the_field( 'descripcion_pagina_convocatoria' ); ?></div>
            </div>
          </div>
      </div>
    </div>
  </div>
  
  <div class="row  white seccion">

          <div class="container">
            <div class="row">
              <div class="col s12 l6">
                <div class="row">
                  <div class="col s12 flex-row">
                    <img style="width:50%" src="<?php bloginfo('template_url')?>/images/icono-peru.png">
                  </div>
                  <div class="col s12 flex-row">
                    <!--Llamar Pagina de  Wordpress Inicio-->
                    <?php
                    query_posts('pagename=Programa de Movilidad a Nivel Nacional');
                    while (have_posts()) : the_post();
                    ?>
                      <h5 style="text-align: center;"><?php the_title()?></h5>
                      <div style="text-align: center;"><?php the_excerpt() ?></div>
                      <a class="btn btn-principal text-negrita" href="<?php the_permalink()?>">Más Información</a> 
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                    <!--Llamar Pagina de  Wordpress Fin-->

                  </div>
                </div>
              </div>
              <div class="col s12 l6">
                <div class="row">
                  <div class="col s12 flex-row">
                    <img style="width:50%" src="<?php bloginfo('template_url')?>/images/icono-mundo.png">
                  </div>

                  <div class="col s12 flex-row">
                    <!--Llamar Pagina de  Wordpress Inicio-->
                    <?php
                    query_posts('pagename=Programa de Movilidad a Nivel Internacional');
                    while (have_posts()) : the_post();
                    ?>
                      <h5 style="text-align: center;"><?php the_title()?></h5>
                      <div style="text-align: center;"><?php the_excerpt() ?></div>
                      <a class="btn btn-principal text-negrita" href="<?php the_permalink()?>">Más Información</a> 
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                    <!--Llamar Pagina de  Wordpress Fin-->

                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>
</div>


<?php get_footer() ?>
