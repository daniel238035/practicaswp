<?php
/*
Template Name: Página Contáctanos
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
    <div class="container">
      <div class="row s12">
        <div class="col s12 l5">
          <div class="row" style="margin: 10px 0px!important;">
						    <div class="col s2 flex-row-start">
									<i class="material-icons tooltipped color-secundario" data-position="left">room</i>
								</div>
								<div class="col s10">
                  <span class="text-negrita">Direccíón:</span> Calle Juan Fanning 134 Lambayeque
								</div>
					</div>
          <div class="row" style="margin: 10px 0px!important;">
						    <div class="col s2 flex-row-start">
									<i class="material-icons tooltipped color-secundario" data-position="left">settings_phone</i>
								</div>
								<div class="col s10">
                  <span class="text-negrita">Teléfono:</span> 074-310731
								</div>
					</div>
          <div class="row" style="margin: 10px 0px!important;">
						    <div class="col s2 flex-row-start">
									<i class="material-icons tooltipped color-secundario" data-position="left">email</i>
								</div>
								<div class="col s10">
                  <span class="text-negrita">Correo Electrónico:</span> relacionesnacionaleseinternacionales <br> @unprg.edu.pe
								</div>
          </div>
          <div class="row" style="margin: 10px 0px!important;">
            <div class="col s2 flex-row-start">
              <i class="material-icons tooltipped color-secundario" data-position="left">schedule</i>
            </div>
            <div class="col s10">
              <span class="text-negrita">Horario:</span> L-V 8:00am - 6:00pm
            </div>
          </div>
        </div>
        <div class="col s12 l7">
        <div class="row">
           <form class="col s12" action="validar.php" method="post">
              <div class="row">
                   <div class="input-field col s12 l6">
                   <i class="material-icons prefix">account_circle</i>
                   <input id="icon_prefix" type="text" name="nombre_apellido" class="validate" required>
                    <label for="icon_prefix">Nombres y Apellidos</label>
                    </div>
                  <div class="input-field col s12 l6">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" name="telefono"  class="validate" required>
                    <label for="icon_telephone">Telefono</label>
                  </div>
                   <div class="input-field col s12">
                    <i class="material-icons prefix">mail</i>
                    <input id="icon_telephone" type="email" name="correo"  class="validate" required>
                    <label for="icon_telephone">Correo Electrónico</label>
                  </div>
                  <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" name="asunto"  class="validate" required></textarea>
                    <label for="textarea1">Mensaje</label>
                  </div>
                  
                  <input class="waves-effect waves-light btn btn-principal" type="submit" value="ENVIAR" id="boton">
              </div>
              
             </form>
             
        </div>
        
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer() ?>