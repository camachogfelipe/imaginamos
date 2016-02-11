
<?php include("header.php"); ?>

<div class="cont_emergente600">
   <div class="cont_tit">
      <h1 class="inline">COMPRA <span>UN PLAN</span></h1>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum varius augue, eu sodales dolor pretium non. Vivamus lobortis neque sodales, consectetur nisi posuere, vestibulum ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce euismod, nisl eget cursus consectetur, </p>
    <div class="clear espacio_en_blanco"></div>
    <form>
      <fieldset>
        <div class="row-fluid">
          <div class="span3">
            <div class="span9">
              <label title="Plan 1" class="conttoltip">Plan 1:</label>
            </div>
            <div class="span3">
              <input type="radio" name="optionsRadios" id="optionsRadios1-1" value="option1-1">
            </div>
          </div>
          <div class="span3">
            <div class="span9">
              <label title="Plan 2" class="conttoltip">Plan 2:</label>
            </div>
            <div class="span3">
              <input type="radio" name="optionsRadios" id="optionsRadios1-2" value="option1-2">
            </div>
          </div>
          <div class="span3">
            <div class="span9">
              <label title="Plan 3" class="conttoltip">Plan 3:</label>
            </div>
            <div class="span3">
              <input type="radio" name="optionsRadios" id="optionsRadios1-3" value="option1-3">
            </div>
          </div>
          <div class="span3">
            <div class="span9">
              <label title="Plan 4" class="conttoltip">Plan 4:</label>
            </div>
            <div class="span3">
              <input type="radio" name="optionsRadios" id="optionsRadios1-4" value="option1-4">
            </div>
          </div>
        </div>
      </fieldset>
      <div class="clear espacio_en_blanco"></div>
      <fieldset>

        <label>Métodos de pago:</label>
        <div class="clear espacio_en_blancopeque"></div>
        <div class="modo_pagos">
          <img alt="" src="assets/img/tarjetas/1.png">
          <img alt="" src="assets/img/tarjetas/2.png">
          <img alt="" src="assets/img/tarjetas/3.png">
          <img alt="" src="assets/img/tarjetas/4.png">
        </div>
        <a href="ingreso_planes.php" target="_parent" class="btn btn-primary inline float_right">Registrarse</a>
      </fieldset>
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

   <!-- Llamados
================================================== -->
<script>

/*  Check y Radios */  
  $('input').ezMark();

/* Tooltip */ 
  $(function () {
    $('.conttoltip').tooltip();
  });



</script>

</body>
</html>