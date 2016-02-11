
<?php include("header.php"); ?>

<div class="cont_emergente450">
   <div class="cont_tit">
      <h1 class="inline">COMPRAR <span>LIBRO</span></h1>
    </div>
        <div class="img_compra">
      <img src="assets/img/img_compra.jpg" alt="">
    </div>
    <h2 class="sub_titformularios centrar_contenido color_azul">Titulo del libro</h2>
    <div class="clear"></div>
    <form action="">
        <div class="row-fluid">
          <fieldset>
              <div class="span12">
                <select>
                  <option>Tipo de item</option>
                  <option>2</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="clear espacio_en_blanco"></div>
              <div class="row-fluid">
                <div class="span12">
                  <div class="row-fluid">
                    <div class="span4">
                      <div class="row-fluid">
                        <div class="span8">
                          <label title="Digital" class="conttoltip">Digital:</label>
                        </div>
                        <div class="span4">
                          <input type="radio" name="optionsRadios2" id="optionsRadios2-2" value="option2-2">
                        </div>
                      </div>
                    </div>
                    <div class="span4">
                      <div class="row-fluid">
                        <div class="span8">
                          <label title="Impreso" class="conttoltip">Impreso:</label>
                        </div>
                        <div class="span4">
                          <input type="radio" name="optionsRadios2" id="optionsRadios2-3" value="option2-3">
                        </div>
                      </div>
                    </div>
                    <div class="span4">
                      <div class="row-fluid">
                        <div class="span8">
                          <label title="Los dos" class="conttoltip">Los dos:</label>
                        </div>
                        <div class="span4">
                          <input type="radio" name="optionsRadios2" id="optionsRadios2-4" value="option2-4">
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="row-fluid">
                <div class="span6">
                  <p class="text_precios color_azul">Precio: <span>$200.000</span></p>
                </div>
                <div class="span6">
                  <p class="text_precios color_azul">Precio envio*: <span>$200.000</span></p>
                </div>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="row-fluid">
                <div class="span6">
                  <input type="text" placeholder="Nombres">
                </div>
                <div class="span6">
                  <input type="text" placeholder="Apellidos">
                </div>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="row-fluid">
                <div class="span4">
                  <input type="text" placeholder="Dirección">
                </div>
                <div class="span4">
                  <input type="text" placeholder="Ciudad">
                </div>
                <div class="span4">
                  <input type="text" placeholder="Teléfono">
                </div>
            </div>
          </fieldset>
          <div class="clear espacio_en_blanco"></div>
          <fieldset>
            <div class="span8">
              <p class="tit_asterisco">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="span4">
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