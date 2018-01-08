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
                              
                <div class="col s12">
                    <h5>Convenios Nacionales</h5>
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="card" style="padding:0px!important;">
                                <div class="row">
                                    <div class="col s12 m6 ">
                                     <img class ="responsive-img" src="<?php bloginfo('template_url')?>/images/icono-descargar.png">

                                    </div>
                                    <div class="col s12 m6" style="margin: 15px 0px">
                                       <a class="color-oscuro" href=""><h6>Convenio Alianza del Pacifico</h6></a> 

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 ">
                            <div class="card" style="padding:0px!important;">
                                <div class="row">
                                    <div class="col s12 m6 ">
                                     <img class ="responsive-img" src="<?php bloginfo('template_url')?>/images/icono-descargar.png">

                                    </div>
                                    <div class="col s12 m6">
                                       <a class="color-oscuro" href=""><h6>Convenio Alianza del Pacifico</h6></a> 

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card" style="padding:0px!important;">
                                <div class="row">
                                    <div class="col s12 m6 ">
                                     <img class ="responsive-img" src="<?php bloginfo('template_url')?>/images/icono-descargar.png">

                                    </div>
                                    <div class="col s12 m6">
                                       <a class="color-oscuro" href=""><h6>Convenio Alianza del Pacifico</h6></a> 

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <h5>Convenios Internacionales</h5>
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="card" style="padding:0px!important;">
                                <div class="row">
                                    <div class="col s12 m6 ">
                                     <img class ="responsive-img" src="<?php bloginfo('template_url')?>/images/icono-descargar.png">

                                    </div>
                                    <div class="col s12 m6">
                                       <a class="color-oscuro" href=""><h6>Convenio Alianza del Pacifico</h6></a> 

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card" style="padding:0px!important;">
                                <div class="row">
                                    <div class="col s12 m6 ">
                                     <img class ="responsive-img" src="<?php bloginfo('template_url')?>/images/icono-descargar.png">

                                    </div>
                                    <div class="col s12 m6">
                                       <a class="color-oscuro" href=""><h6>Convenio Alianza del Pacifico</h6></a> 

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card" style="padding:0px!important;">
                                <div class="row">
                                    <div class="col s12 m6 ">
                                     <img class ="responsive-img" src="<?php bloginfo('template_url')?>/images/icono-descargar.png">

                                    </div>
                                    <div class="col s12 m6">
                                       <a class="color-oscuro" href=""><h6>Convenio Alianza del Pacifico</h6></a> 

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
              </div>
            </div>
  </div>
</div>

<?php get_footer() ?>