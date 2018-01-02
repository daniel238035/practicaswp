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
              <div class="white-text contenido-portada"><?php the_field( 'descripcion_movilidad_estudiantil' ); ?></div>
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
                        "cat" => 4,
                        //'post_type'=>'',
                        'order' => 'ASC'
                        ));
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                  <div class="col s12 m4">
                    <div class="card" style="padding:0px!important;">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?php bloginfo('template_url')?>/images/portadas/portada3.jpg">
                      </div>
                      <div class="card-content" style="padding:15px!important;">
                        <div class="row flex-row">
                          <div class="col s10">
                            <h5 class="titulo-borde-izquierdo-2 activator"><?php the_title() ?></h5>
                          </div>
                          <div class="col s2">
                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col s12" style="margin: 8px 0px!important;">
                            <div class="row" >
                                <div class="col s2 flex-row-start">
                                  <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Institución">place</i>
                                </div>
                                <div class="col s10">
                                  <?php the_field( 'institucion' ); ?>
                                </div>
                            </div>
                          </div>
                          <div class="col s12" style="margin: 8px 0px!important;">
                            <div class="row">
                                <div class="col s2 flex-row-start">
                                  <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Inicio">event</i>
                                </div>
                                <div class="col s10">
                                  <?php the_field( 'inicio_de_convocatoria' ); ?>
                                </div>
                            </div>
                          </div>
                          <div class="col s12" style="margin: 8px 0px!important;">
                            <div class="row">
                                <div class="col s2 flex-row-start">
                                  <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Duración">date_range</i>
                                </div>
                                <div class="col s10">
                                  <?php the_field( 'institucion' ); ?>
                                </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="card-action" style="padding: 5px 5px!important">
                        <a class="btn btn-flat green-text text-negrita" href="<?php the_permalink() ?>" >Inscríbete</a>
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
