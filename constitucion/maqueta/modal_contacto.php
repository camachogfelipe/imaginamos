
<?php include("header.php"); ?>

<div class="cont_emergente450">
   <div class="cont_tit">
      <h1 class="inline">CONTACTO</h1>
    </div>
    <div class="clear"></div>
    <form action="">
        <div class="row-fluid">
          <fieldset>
            <div class="span12">
              <input type="text" placeholder="Nombre">
            </div>
            <div class="row-fluid">
              <div class="span12">
              <input type="text" placeholder="Correo">
            </div>
            <div class="row-fluid">
              <div class="span12">
              <textarea rows="3" placeholder="Escribe mensaje:"></textarea>
            </div>
            </div>
            
          </fieldset>
          <div class="clear espacio_en_blanco"></div>
          <fieldset>
            <div class="span4 offset8">
              <button class="btn btn-primary ancho100" type="submit">Enviar</button>
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