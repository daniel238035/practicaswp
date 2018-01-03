
<?php get_header(); ?> 

  <div class="cuerpo">
        <!--div class="row portada-sub portada-4 ">
          <div class="portada-principal-oscuro flex seccion-2">
              <div class="row">
                <div class="col s12 l5 offset-l2">
                  <h2 class="white-text">MOVILIDAD ESTUDIANTIL</h2>
                </div>
              </div>
          </div>
        </div-->

        <div class="parallax-container portada-sub portada-principal-oscuro">
          <div class="parallax">
            <img src="<?php bloginfo('template_url')?>/images/portadas/portada6.jpg">

          </div>
          <div class="row   ">
            <div class=" flex seccion-2">
                <div class="row">
                  <div class="col s12 l5 offset-l2">
                    <h2 class="white-text">MOVILIDAD ESTUDIANTIL</h2>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="row seccion">
          <div class="col s12 offset-l1 l7">

            <div class="row">
              <h4 class="text-negrita"><?php the_title()?></h4>
            </div>

            <div class="row" style="padding-bottom: 5px">
              <div class="col s12 l6">
                <div class="row" style="margin: 8px 0px!important;" >
                    <div class="col s12 l4 flex-row-start text-negrita">
                      <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Institución">place</i>
                      Institución:
                    </div>
                    <div class="col s12 l8">
                      <?php the_field( 'institucion' ); ?>
                    </div>
                </div>
              </div>
              <div class="col s12 l6">
                <div class="row" style="margin: 8px 0px!important;">
                    <div class="col s12 l4 flex-row-start text-negrita">
                      <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Inicio">event</i>
                      Inicio:
                    </div>
                    <div class="col s12 l8">
                      <?php the_field( 'inicio_de_convocatoria' ); ?>
                    </div>
                </div>
                <div class="row" style="margin: 8px 0px!important;">
                    <div class="col s12 l4 flex-row-start text-negrita">
                      <i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Duración">date_range</i>
                      Duración:
                    </div>
                    <div class="col s12 l8">
                      <?php the_field( 'duracion_de_convocatoria' ); ?>
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
                <div><?php the_field( 'presentacion' ); ?></div>
              </div>

              <div class="col s12 " id="beneficios" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Beneficios</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in debitis pariatur sequi veniam corporis officia ducimus officiis, possimus, maxime beatae assumenda quae tempore a consequatur libero ullam dignissimos quam, quia vel modi ex. Dicta nisi unde quasi id voluptatibus molestiae mollitia quidem et optio, provident veniam illum vitae soluta atque quaerat, est in possimus repellat quis pariatur, a dolore! Dolorem saepe voluptatibus debitis nostrum vero! Id quod labore iste dicta debitis porro dolorem quae eligendi, nam blanditiis! Quod, architecto vel aut minima, quas officiis itaque cupiditate asperiores facilis aperiam illo aliquid labore animi? Laboriosam ab quod officia necessitatibus porro!
                </p>
              </div>

              <div class="col s12 " id="instituciones_elegibles" style="margin:15px 0px!important;">
                <h4 class="color-secundario">IES Elegibles</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in debitis pariatur sequi veniam corporis officia ducimus officiis, possimus, maxime beatae assumenda quae tempore a consequatur libero ullam dignissimos quam, quia vel modi ex. Dicta nisi unde quasi id voluptatibus molestiae mollitia quidem et optio, provident veniam illum vitae soluta atque quaerat, est in possimus repellat quis pariatur, a dolore! Dolorem saepe voluptatibus debitis nostrum vero! Id quod labore iste dicta debitis porro dolorem quae eligendi, nam blanditiis! Quod, architecto vel aut minima, quas officiis itaque cupiditate asperiores facilis aperiam illo aliquid labore animi? Laboriosam ab quod officia necessitatibus porro!
                </p>
              </div>

              <div class="col s12 " id="instituciones_elegibles" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Requerimientos para Postular</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in debitis pariatur sequi veniam corporis officia ducimus officiis, possimus, maxime beatae assumenda quae tempore a consequatur libero ullam dignissimos quam, quia vel modi ex. Dicta nisi unde quasi id voluptatibus molestiae mollitia quidem et optio, provident veniam illum vitae soluta atque quaerat, est in possimus repellat quis pariatur, a dolore! Dolorem saepe voluptatibus debitis nostrum vero! Id quod labore iste dicta debitis porro dolorem quae eligendi, nam blanditiis! Quod, architecto vel aut minima, quas officiis itaque cupiditate asperiores facilis aperiam illo aliquid labore animi? Laboriosam ab quod officia necessitatibus porro!
                </p>
              </div>

              <div class="col s12 " id="instituciones_elegibles" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Áreas de Conocimiento</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in debitis pariatur sequi veniam corporis officia ducimus officiis, possimus, maxime beatae assumenda quae tempore a consequatur libero ullam dignissimos quam, quia vel modi ex. Dicta nisi unde quasi id voluptatibus molestiae mollitia quidem et optio, provident veniam illum vitae soluta atque quaerat, est in possimus repellat quis pariatur, a dolore! Dolorem saepe voluptatibus debitis nostrum vero! Id quod labore iste dicta debitis porro dolorem quae eligendi, nam blanditiis! Quod, architecto vel aut minima, quas officiis itaque cupiditate asperiores facilis aperiam illo aliquid labore animi? Laboriosam ab quod officia necessitatibus porro!
                </p>
              </div>

              <div class="col s12 " id="instituciones_elegibles" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Pasos para Postular</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in debitis pariatur sequi veniam corporis officia ducimus officiis, possimus, maxime beatae assumenda quae tempore a consequatur libero ullam dignissimos quam, quia vel modi ex. Dicta nisi unde quasi id voluptatibus molestiae mollitia quidem et optio, provident veniam illum vitae soluta atque quaerat, est in possimus repellat quis pariatur, a dolore! Dolorem saepe voluptatibus debitis nostrum vero! Id quod labore iste dicta debitis porro dolorem quae eligendi, nam blanditiis! Quod, architecto vel aut minima, quas officiis itaque cupiditate asperiores facilis aperiam illo aliquid labore animi? Laboriosam ab quod officia necessitatibus porro!
                </p>
              </div>

              <div class="col s12 " id="instituciones_elegibles" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Cronograma</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in debitis pariatur sequi veniam corporis officia ducimus officiis, possimus, maxime beatae assumenda quae tempore a consequatur libero ullam dignissimos quam, quia vel modi ex. Dicta nisi unde quasi id voluptatibus molestiae mollitia quidem et optio, provident veniam illum vitae soluta atque quaerat, est in possimus repellat quis pariatur, a dolore! Dolorem saepe voluptatibus debitis nostrum vero! Id quod labore iste dicta debitis porro dolorem quae eligendi, nam blanditiis! Quod, architecto vel aut minima, quas officiis itaque cupiditate asperiores facilis aperiam illo aliquid labore animi? Laboriosam ab quod officia necessitatibus porro!
                </p>
              </div>

              <div class="col s12 " id="instituciones_elegibles" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Duración de la Beca</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in debitis pariatur sequi veniam corporis officia ducimus officiis, possimus, maxime beatae assumenda quae tempore a consequatur libero ullam dignissimos quam, quia vel modi ex. Dicta nisi unde quasi id voluptatibus molestiae mollitia quidem et optio, provident veniam illum vitae soluta atque quaerat, est in possimus repellat quis pariatur, a dolore! Dolorem saepe voluptatibus debitis nostrum vero! Id quod labore iste dicta debitis porro dolorem quae eligendi, nam blanditiis! Quod, architecto vel aut minima, quas officiis itaque cupiditate asperiores facilis aperiam illo aliquid labore animi? Laboriosam ab quod officia necessitatibus porro!
                </p>
              </div>

              <div class="col s12 " id="instituciones_elegibles" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Documentación Obligatoria</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in debitis pariatur sequi veniam corporis officia ducimus officiis, possimus, maxime beatae assumenda quae tempore a consequatur libero ullam dignissimos quam, quia vel modi ex. Dicta nisi unde quasi id voluptatibus molestiae mollitia quidem et optio, provident veniam illum vitae soluta atque quaerat, est in possimus repellat quis pariatur, a dolore! Dolorem saepe voluptatibus debitis nostrum vero! Id quod labore iste dicta debitis porro dolorem quae eligendi, nam blanditiis! Quod, architecto vel aut minima, quas officiis itaque cupiditate asperiores facilis aperiam illo aliquid labore animi? Laboriosam ab quod officia necessitatibus porro!
                </p>
              </div>

              <div class="col s12 " id="instituciones_elegibles" style="margin:15px 0px!important;">
                <h4 class="color-secundario">Bases y Modificaciones</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in debitis pariatur sequi veniam corporis officia ducimus officiis, possimus, maxime beatae assumenda quae tempore a consequatur libero ullam dignissimos quam, quia vel modi ex. Dicta nisi unde quasi id voluptatibus molestiae mollitia quidem et optio, provident veniam illum vitae soluta atque quaerat, est in possimus repellat quis pariatur, a dolore! Dolorem saepe voluptatibus debitis nostrum vero! Id quod labore iste dicta debitis porro dolorem quae eligendi, nam blanditiis! Quod, architecto vel aut minima, quas officiis itaque cupiditate asperiores facilis aperiam illo aliquid labore animi? Laboriosam ab quod officia necessitatibus porro!
                </p>
              </div>

            </div>
          </div>

          <div class="col s12 l3 barra-lateral">
            <div class="row" style="margin: 15px 0px!important;">
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
                    <a href="#" class="black-text">Presentación</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">start</i>
                  </div>
                  <div class="col s10">
                    <a href="#" class="black-text">Beneficios</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">account_balance</i>
                  </div>
                  <div class="col s10">
                    <a href="#" class="black-text">IES Eleigles</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">content_paste</i>
                  </div>
                  <div class="col s10">
                    <a href="#" class="black-text">Requermientos para Postular</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">bubble_chart</i>
                  </div>
                  <div class="col s10">
                    <a href="#" class="black-text">Áreas de Conocimiento</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">linear_scale</i>
                  </div>
                  <div class="col s10">
                    <a href="#" class="black-text">Pasos para Postular</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">date_range</i>
                  </div>
                  <div class="col s10">
                    <a href="#" class="black-text">Cronograma</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">schedule</i>
                  </div>
                  <div class="col s10">
                    <a href="#" class="black-text">Duración de la Beca</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">inbox</i>
                  </div>
                  <div class="col s10">
                    <a href="#" class="black-text">Documentación Obligatorios</a>
                  </div>
              </div>
              <div class="row" style="margin: 12px 0px!important;">
                  <div class="col s2 flex-row-start text-negrita">
                    <i class="material-icons  color-secundario">class</i>
                  </div>
                  <div class="col s10">
                    <a href="#" class="black-text">Bases y Modificaciones</a>
                  </div>
              </div>
            </div>
            <div class="row" style="margin: 25px 0px!important;">
              <h5 class="titulo-borde-izquierdo-2">DOCUMENTOS</h5>
              <div class="col s12">
                <ul class="">
                  <li class="flex-row-start" style="margin:10px 0px!important"><i class="material-icons color-secundario" style="margin-right:5px!important">cloud_download</i><a href="#" class="black-text">Documento 1</a></li>
                  <li class="flex-row-start" style="margin:10px 0px!important"><i class="material-icons color-secundario" style="margin-right:5px!important">cloud_download</i><a href="#" class="black-text">Documento 1</a></li>
                  <li class="flex-row-start" style="margin:10px 0px!important"><i class="material-icons color-secundario" style="margin-right:5px!important">cloud_download</i><a href="#" class="black-text">Documento 1</a></li>

                </ul>
              </div>

            </div>
            <div class="row" style="margin: 25px 0px!important;">
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
