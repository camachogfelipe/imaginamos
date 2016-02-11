
<?php include("header.php"); ?>
<!-- contenido -->

<?php include("menu.php"); ?>
<!-- menu -->


<div class="container contenidos clearfix">
  <div class="div_gris  "></div>
  <h2 class="tit_secciones">
    Contáctenos
  </h2>
  <div class="div_gris margin_bottom"></div>
  <div class="cont_imagentexto960 clearfix">
    <img src="assets/img/imagenquienes.jpg">
    <div class="columna_contder">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non massa blandit, fringilla metus tincidunt, semper nisl. Aliquam eu velit tortor. Etiam mattis sapien quis ultricies venenatis. Proin sit amet tincidunt ligula. Proin rutrum id mauris lobortis placerat. Vivamus tempus mauris ut lectus varius accumsan. Nullam vestibulum nisl nec diam vulputate rhoncus. Aliquam laoreet ornare sapien, eu auctor dui hendrerit vel. Nunc tincidunt, sem sed malesuada fermentum, elit dolor facilisis augue, a pellentesque dolor urna eget dui. Quisque vitae neque odio. Proin condimentum ipsum sit amet nulla mollis pretium. Praesent a aliquet augue. </p>
      <div class="div_gris"></div>
      <h3 class="subtitsecciones"> Nuestros datos de contacto</h3>
      <div class="div_gris margin_bottom"></div>
      <p class="caracteristicas_detalle">
        <span>Dirección:</span>
        Cra 123 #14-34
      </p>
      <p class="caracteristicas_detalle">
        <span>Telefóno:</span>
        57(1) 123456
      </p>
      <p class="caracteristicas_detalle">
        <span>Correo electrónico:</span>
        lorem@ipsum.com
      </p>
    </div>
  </div>
  <div class="div_gris margin_bottom"></div>
  <div class="row cont_form cont_formcontacto">
    <form action="post" id="contactoForm">      
      <div class="span6">
        <fieldset>
          <input type="text" placeholder="Nombre*">
          <input type="text" placeholder="Correo electrónico*" class="required" name="mi_email">
          <input type="text" placeholder="Telefóno" class="required" name="telefono">
          <input type="text" placeholder="Celular"> 
        </fieldset>
      </div>
      <div class="span6">
        <fieldset>
          <textarea  class="tex_contacto"></textarea>
        </fieldset>
      </div>
      <div class="clear"></div>
      <fieldset>
        <button type="submit" class="bt_anadir float_right">Enviar</button>
      </fieldset>

    </form>
  </div>

</div><!-- contenidos -->


<?php include("footer.php"); ?>
<!-- footer -->
    