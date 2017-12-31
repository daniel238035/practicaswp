<?php include("header.php"); ?>

<div class="cuerpo">

  <div class="parallax-container portada-sub portada-principal-oscuro">
    <div class="parallax">
      <img src="images/portadas/portadaform.jpg">

    </div>
    <div class="row  ">
      <div class="flex seccion-2">
          <div class="row">
            <div class="col s12 l5 offset-l2">
              <h2 class="white-text">FORMULARIO</h2>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="container seccion">
    <div class="row">
      <h4 class="text-negrita">Datos Personales</h4>
    </div>
    <form class="row" action="index.html" method="post">
      <div class="row">
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Apellidos</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">payment</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Tipo de Documento</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">fingerprint</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Número de Documento</label>
        </div>
        <div class="input-field col s12 l4">
          <i class="material-icons prefix">event</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Fecha de Expedición</label>
        </div>
        <div class="input-field col s12 l4">
          <i class="material-icons prefix">exit_to_app</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Expedido por</label>
        </div>
        <div class="input-field col s12 l4">
          <i class="material-icons prefix">exit_to_app</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Expedido en</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">language</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nacionalidad</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">home</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Direccíón / Domicilio</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">room</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Departamento / Ciudad</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">room</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Región / Estado</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Celular</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">mail</i>
          <input id="icon_telephone" type="email" class="validate">
          <label for="icon_telephone">Correo Electrónico</label>
        </div>
    </form>
    <div class="row">
      <h4 class="text-negrita">Conocimiento de Idiomas</h4>
    </div>
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="col s12 l3">
            <h5 class="color-secundario">Español</h5>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Oral</h5>
            <p>
              <input class="with-gap" name="group1" type="radio" id="test1-1" checked />
              <label for="test1-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group1" type="radio" id="test1-2" checked />
              <label for="test1-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group1" type="radio" id="test1-3" checked />
              <label for="test1-3">Avanzado</label>
            </p>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Escrito</h5>
            <p>
              <input class="with-gap" name="group2" type="radio" id="test2-1" checked />
              <label for="test2-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group2" type="radio" id="test2-2" checked />
              <label for="test2-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group2" type="radio" id="test2-3" checked />
              <label for="test2-3">Avanzado</label>
            </p>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Hablado</h5>
            <p>
              <input class="with-gap" name="group3" type="radio" id="test3-1" checked />
              <label for="test3-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group3" type="radio" id="test3-2" checked />
              <label for="test3-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group3" type="radio" id="test3-3" checked />
              <label for="test3-3">Avanzado</label>
            </p>
          </div>
        </div>
        <div class="divider row" style="margin: 10px 0px!important;"></div>
        <div class="row">
          <div class="col s12 l3">
            <h5 class="color-secundario">Ingles</h5>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Oral</h5>
            <p>
              <input class="with-gap" name="group4" type="radio" id="test4-1" checked />
              <label for="test4-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group4" type="radio" id="test4-2" checked />
              <label for="test4-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group4" type="radio" id="test4-3" checked />
              <label for="test4-3">Avanzado</label>
            </p>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Escrito</h5>
            <p>
              <input class="with-gap" name="group5" type="radio" id="test5-1" checked />
              <label for="test5-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group5" type="radio" id="test5-2" checked />
              <label for="test5-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group5" type="radio" id="test5-3" checked />
              <label for="test5-3">Avanzado</label>
            </p>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Hablado</h5>
            <p>
              <input class="with-gap" name="group6" type="radio" id="test6-1" checked />
              <label for="test6-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group6" type="radio" id="test6-2" checked />
              <label for="test6-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group6" type="radio" id="test6-3" checked />
              <label for="test6-3">Avanzado</label>
            </p>
          </div>
        </div>
        <div class="divider row" style="margin: 10px 0px!important;"></div>
        <div class="row">
          <div class="col s12 l3">
            <h5 class="color-secundario">Francés</h5>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Oral</h5>
            <p>
              <input class="with-gap" name="group7" type="radio" id="test7-1" checked />
              <label for="test7-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group7" type="radio" id="test7-2" checked />
              <label for="test7-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group7" type="radio" id="test7-3" checked />
              <label for="test7-3">Avanzado</label>
            </p>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Escrito</h5>
            <p>
              <input class="with-gap" name="group8" type="radio" id="test8-1" checked />
              <label for="test8-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group8" type="radio" id="test8-2" checked />
              <label for="test8-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group8" type="radio" id="test8-3" checked />
              <label for="test8-3">Avanzado</label>
            </p>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Hablado</h5>
            <p>
              <input class="with-gap" name="group9" type="radio" id="test9-1" checked />
              <label for="test9-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group9" type="radio" id="test9-2" checked />
              <label for="test9-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group9" type="radio" id="test9-3" checked />
              <label for="test9-3">Avanzado</label>
            </p>
          </div>
        </div>
        <div class="divider row" style="margin: 10px 0px!important;"></div>
        <div class="row">
          <div class="col s12 l3">
            <h5 class="color-secundario">Portugues</h5>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Oral</h5>
            <p>
              <input class="with-gap" name="group10" type="radio" id="test10-1" checked />
              <label for="test10-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group10" type="radio" id="test10-2" checked />
              <label for="test10-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group10" type="radio" id="test10-3" checked />
              <label for="test10-3">Avanzado</label>
            </p>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Escrito</h5>
            <p>
              <input class="with-gap" name="group11" type="radio" id="test11-1" checked />
              <label for="test11-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group11" type="radio" id="test11-2" checked />
              <label for="test11-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group11" type="radio" id="test11-3" checked />
              <label for="test11-3">Avanzado</label>
            </p>
          </div>
          <div class="col s12 l3">
            <h5 class="text-negrita">Hablado</h5>
            <p>
              <input class="with-gap" name="group12" type="radio" id="test12-1" checked />
              <label for="test12-1">Basico</label>
            </p>
            <p>
              <input class="with-gap" name="group12" type="radio" id="test12-2" checked />
              <label for="test12-2">Intermedio</label>
            </p>
            <p>
              <input class="with-gap" name="group12" type="radio" id="test12-3" checked />
              <label for="test12-3">Avanzado</label>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top:20px!important">
      <div class="col s12 l12">
        <a class="btn btn-principal text-negrita" href="#">Postula</a>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
