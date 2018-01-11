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
            <div class="col s12 l6 offset-l1">
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
</div>


<?php get_footer() ?>
