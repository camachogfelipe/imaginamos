
<?php include("header.php"); ?>

<div class="container">
   <div class="cont_tit">
      <h1 class="inline">REGISTRO</h1>
    </div>
    <h3>Los campos con * son obligatorios.</h3>
    <div class="clear"></div>
    <form action="">
        <div class="row">
          <fieldset>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Nombre*:</label>
                </div>
                <div class="span4">
                  <input type="text" placeholder="Nombre">
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Apellidos*:</label>
                </div>
                <div class="span4">
                  <input type="text" placeholder="Apellidos">
                </div>
              </div>
            </div>

            <div class="clear espacio_en_blanco"></div>

            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Género:</label>
                </div>
                <div class="span4">
                  <div class="row-fluid">
                    <div class="span2">
                      <label>F</label>
                    </div>
                    <div class="span2">
                       <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    </div>
                    <div class="span2">
                      <label>M</label>
                    </div>
                    <div class="span2">
                       <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    </div>
                    <div class="span2">
                      <label>Otro</label>
                    </div>
                    <div class="span2">
                       <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Fecha de nacimiento::</label>
                </div>
                <div class="span4">
                  <div class="row-fluid">
                    <div class="span2">
                      <label>día:</label>
                    </div>
                    <div class="span2">
                      <input type="text">
                    </div>
                    <div class="span2">
                      <label>Mes:</label>
                    </div>
                    <div class="span2">
                      <input type="text">             
                    </div>
                    <div class="span2">
                      <label>Año:</label>
                    </div>
                    <div class="span2">
                      <input type="text">             
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clear espacio_en_blanco"></div>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Email*:</label>
                </div>
                <div class="span4">
                  <input type="text" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Profesión:</label>
                </div>
                <div class="span4">
                  <input type="text" placeholder="Profesión">
                </div>
              </div>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="span4">
              <div class="row">
                <div class="span2">
                  <label>País:</label>
                </div>
                <div class="span2">
                  <input type="text" placeholder="País">
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="row">
                <div class="span2">
                  <label>Ciudad:</label>
                </div>
                <div class="span2">
                  <input type="text" placeholder="Ciudad">
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="row">
                <div class="span2">
                  <label>Teléfono:</label>
                </div>
                <div class="span2">
                  <input type="text" placeholder="Teléfono">
                </div>
              </div>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Contraseña*:</label>
                </div>
                <div class="span4">
                  <input type="text" placeholder="Contraseña*">
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Confirmar contraseña*:</label>
                </div>
                <div class="span4">
                  <input type="text" placeholder="Confirmar contraseña">
                </div>
              </div>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="span1">
              <input type="checkbox">
            </div>
            <div class="span11">
              <label>Deseo recibir información en mi correo electrónico sobre Constituciónaldia.com.co</label>
            </div>
          </fieldset>
          <div class="clear espacio_en_blanco"></div>
          <fieldset>
            <div class="span12">
              <label>Comprar un plan:</label>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="span168">
              <div class="row-fluid">
                <div class="span8">
                  <label title="Un mes $100.000" class="conttoltip">PLan1:</label>
                </div>
                <div class="span4">
                  <input type="radio" name="optionsRadios2" id="optionsRadios2-1" value="option2-1">
                </div>
              </div>
            </div>
            <div class="span168">
              <div class="row-fluid">
                <div class="span8">
                  <label title="Dos meses $200.000" class="conttoltip">PLan2:</label>
                </div>
                <div class="span4">
                  <input type="radio" name="optionsRadios2" id="optionsRadios2-2" value="option2-2">
                </div>
              </div>
            </div>
            <div class="span168">
              <div class="row-fluid">
                <div class="span8">
                  <label title="Tres meses $300.000" class="conttoltip">PLan3:</label>
                </div>
                <div class="span4">
                  <input type="radio" name="optionsRadios2" id="optionsRadios2-3" value="option2-3">
                </div>
              </div>
            </div>
            <div class="span168">
              <div class="row-fluid">
                <div class="span8">
                  <label title="Cuatro meses $400.000" class="conttoltip">PLan4:</label>
                </div>
                <div class="span4">
                  <input type="radio" name="optionsRadios2" id="optionsRadios2-4" value="option2-4">
                </div>
              </div>
            </div>
            <div class="span168">
             </div>
          </fieldset>
          <div class="clear espacio_en_blanco"></div>
          <fieldset>
            <div class="span12">
              <label>Métodos de pago:</label>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="span4 modo_pagos">
              <img src="assets/img/tarjetas/1.png" alt="">
              <img src="assets/img/tarjetas/2.png" alt="">
              <img src="assets/img/tarjetas/3.png" alt="">
              <img src="assets/img/tarjetas/4.png" alt="">
            </div>
            <div class="span4 labelterminos">
              <label title="Terminos y condiciones" class="conttoltip">Acepto <a class="carga_modalmediana2" href="modal_condiciones.php" target="_parent">términos y condiciones</a></label>
            </div>
            <div class="span2 checkterminos">
              <input type="checkbox">
            </div>
            <div class="span2">
              <button class="btn btn-primary ancho100" type="submit">Registrarse</button>
            </div>
          </fieldset>

      </div>
    </form>
    

</div>

 <!-- Scripts -->
 <script src="assets/js/lib/jquery-1.8.3.min.js"></script>

 <!-- Radios - Check -->
 <script type="text/javascript" src="assets/js/lib/ezmark/js/jquery.ezmark.js"></script>

   <!-- Bootstrap
  ================================================== -->
  <script src="assets/js/lib/bootstrap/js/bootstrap-transition.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-alert.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-modal.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-dropdown.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-scrollspy.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-tab.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-tooltip.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-popover.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-button.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-collapse.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-carousel.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-typeahead.js"></script> 

    <!-- Fancybox
================================================== -->

  <script type="text/javascript" src="assets/js/lib/source/jquery.fancybox.js"></script>

  <!-- Add Button helper (this is optional) -->
  <script type="text/javascript" src="assets/js/lib/source/helpers/jquery.fancybox-buttons.js"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <script type="text/javascript" src="assets/js/lib/source/helpers/jquery.fancybox-thumbs.js"></script>

  <!-- Media (this is optional) -->

   <!-- Llamados
================================================== -->
<script>

/*  Check y Radios */  
  $('input').ezMark();

/* Tooltip */ 
  $(function () {
    $('.conttoltip').tooltip();
  });

/* Modal */ 

$(".carga_modalmediana2").fancybox({
  'width' : 620,
  'height' : 300,
  fitToView : false,
  autoSize : false,
  'transitionIn' : 'none',
  'transitionOut' : 'none',
  'type' : 'iframe',
  'padding' : 20
});



</script>

</body>
</html>