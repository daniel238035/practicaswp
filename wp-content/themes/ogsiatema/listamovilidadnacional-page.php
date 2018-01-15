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
                    <div class="col s12">
                        <h5>¿Qué es la Red Peruana de Universidades?</h5>
                        <p class="parrafo-mediano color-oscuro text-justificado">La RPU agrupa a 21 universidades alrededor de todo el país, con el objetivo de promover la integración, el intercambio y la construcción de conocimiento entre universidades. Esto se logra a través de la promoción de programas de movilidad para docentes, estudiantes y administrativos, proyectos de investigación y convenios a nivel regional.</p>
                    </div>
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
                                <div style="text-align: center;" class="color-oscuro altura-igual-1"><?php the_excerpt() ?></div>
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
                                <div style="text-align: center;" class="color-oscuro altura-igual-1"><?php the_excerpt() ?></div>
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
                                <div style="text-align: center;" class="color-oscuro altura-igual-1"><?php the_excerpt() ?></div>
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
        <div id="test-swipe-2" class="col s12">
         <div class="container seccion">
        
            <div class="row">
                <!--LOOP Wordpress Inicio-->
                <?php
                      query_posts(array(
                        "showposts" => 12,
                        "cat" => 13,
                        //'post_type'=>'',
                        'order' => 'DES'
                        ));
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col s12 m4">
                    <div class="card" style="padding:0px!important;">
                        <div class="row">
                            <div class="col s12 m4 ">
                            <img class="activator" src="<?php the_field( 'imagen_universidad' ); ?>">

                            </div>
                            <div class="col s12 m8" style="margin: 15px 0px">
                            <a class="color-oscuro" href="<?php the_field( 'enlace_universidad' ); ?>" target="_blank"><h6><?php the_title() ?></h6></a> 

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


<?php get_footer() ?>
