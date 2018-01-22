<?php
/*
Template Name: Página Luego de Enviar Correo de Contacto
*/
?>
<?php get_header(); ?> 

<div class="cuerpo">

  <div class="parallax-container  portada-sub portada-principal-oscuro">
    <div class="parallax">
      <img src="<?php bloginfo('template_url')?>/images/portadas/portada-contacto.jpg">

    </div>
    <div class="row   ">
            <div class=" flex seccion-2">
                <div class="row">
                  <div class="col s12 l5 offset-l2">
                    <h2 class="white-text titulo-portada"><?php the_title() ?></h2>
                  </div>
                </div>
            </div>
          </div>
  </div>

  <div class="row white seccion">
    <h3>Gracias</h3>
  </div>
</div>


<?php get_footer() ?>