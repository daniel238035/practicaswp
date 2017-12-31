<?php include("header.php"); ?>

<div class="cuerpo">
  <div class="row portada-sub portada-6 ">
    <div class="portada-principal-oscuro flex seccion-2">
        <div class="row">
          <div class="col s12 l5 offset-l2">
            <h2 class="white-text">CONTACTANOS</h2>
          </div>
        </div>
    </div>
  </div>
  <div class="row white seccion">
    <div class="container">
      <div class="row s12">
        <div class="col s4">
            <p class="color-oscuro titulo-item "><i class="material-icons">room</i> Direccíón: Av.Balta 123</p>
           <p class="color-oscuro titulo-item "><i class="material-icons"> settings_phone</i>Teléfono: 074-235689</p>
           <p class="color-oscuro titulo-item "><i class="material-icons">email</i> Correo Electrónico: agencia@gmail.com</p>
        </div>
        <div class="col s8 ">
        <div class="row">
           <form class="col s12">
              <div class="row">
                   <div class="input-field col s6">
                   <i class="material-icons prefix">account_circle</i>
                   <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Nombres y Apellidos</label>
                    </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" class="validate">
                    <label for="icon_telephone">Telefono</label>
                  </div>
                   <div class="input-field col s12">
                    <i class="material-icons prefix">mail</i>
                    <input id="icon_telephone" type="email" class="validate">
                    <label for="icon_telephone">Correo Electrónico</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">announcement</i>
                    <input id="icon_telephone" type="text" class="validate">
                    <label for="icon_telephone">Asunto</label>
                  </div>
              </div>
              
             </form>
             <a class="waves-effect waves-light btn">Enviar</a>
        </div>
        
        </div>
      </div>
    </div>
  </div>
</div>


<?php include("footer.php"); ?>
