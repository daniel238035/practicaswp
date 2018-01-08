<?php
/*
Template Name: Página Movilidad Nivel Nacional
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
  
  <div class="row  white ">
    <div class="">
        <ul id="tabs-swipe-demo" class="tabs">
            <li class="tab col s6">
                <a class="active" href="#test-swipe-1">Red Peruana de Universidades</a>
            </li>
            <li class="tab col s6">
                <a  href="#test-swipe-2">Otras Universidades</a>
            </li>
        </ul>
        <div id="test-swipe-1" class="col s12 ">
            <div class="container">
                <div class="row seccion">
                    <div class="col s12 l4">
                        <div class="row">
                            <div class="col s12 flex-row">
                                <img style="width:50%" src="<?php bloginfo('template_url')?>/images/icono-alumno.png">
                            </div>
                            <div class="col s12 flex-row">
                                <!--Llamar Pagina de  Wordpress Inicio-->
                                <?php
                                query_posts('pagename=Movilidad Nacional Alumno');
                                while (have_posts()) : the_post();
                                ?>
                                <h5 style="text-align: center;"><?php the_title()?></h5>
                                <div style="text-align: center;" class="altura-igual-1"><?php the_excerpt() ?></div>
                                <a class="btn btn-principal text-negrita" href="<?php the_permalink()?>">Más Información</a> 
                                <?php endwhile; ?>
                                <?php wp_reset_query(); ?>
                                <!--Llamar Pagina de  Wordpress Fin-->
                
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4 ">
                        <div class="row">
                            <div class="col s12 flex-row">
                                <img style="width:50%" src="<?php bloginfo('template_url')?>/images/icono-docente.png">
                            </div>
                            <div class="col s12 flex-row">
                                <!--Llamar Pagina de  Wordpress Inicio-->
                                <?php
                                query_posts('pagename=Movilidad Nacional Docente');
                                while (have_posts()) : the_post();
                                ?>
                                <h5 style="text-align: center;"><?php the_title()?></h5>
                                <div style="text-align: center;" class="altura-igual-1"><?php the_excerpt() ?></div>
                                <a class="btn btn-principal text-negrita" href="<?php the_permalink()?>">Más Información</a> 
                                <?php endwhile; ?>
                                <?php wp_reset_query(); ?>
                                <!--Llamar Pagina de  Wordpress Fin-->
                
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="row">
                            <div class="col s12 flex-row">
                                <img style="width:50%" src="<?php bloginfo('template_url')?>/images/icono-administrativo.png">
                            </div>
                            <div class="col s12 flex-row">
                                <!--Llamar Pagina de  Wordpress Inicio-->
                                <?php
                                query_posts('pagename=Movilidad Nacional Administrativo');
                                while (have_posts()) : the_post();
                                ?>
                                <h5 style="text-align: center;"><?php the_title()?></h5>
                                <div style="text-align: center;" class="altura-igual-1"><?php the_excerpt() ?></div>
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
        <div id="test-swipe-2" class="col s12 red">Test 2</div>
    </div>

    
  </div>
</div>


<?php get_footer() ?>
