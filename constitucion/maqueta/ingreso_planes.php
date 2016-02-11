
<?php include("header.php"); ?>
<?php include("menu.php"); ?>

<div class="container">

  <div class="cont_emergente450 cont_ingresoplanes">
     <div class="cont_tit">
        <h1 class="inline">INGRESAR A <span>MI CUENTA</span></h1>
      </div>
      <div class="clear"></div>
      <form action="">
          <div class="row-fluid">
            <fieldset>
              <div class="span12">
                <input type="text" placeholder="Tu email">
              </div>
              <div class="row-fluid">
                <div class="span12">
                <input type="text" placeholder="Contraseña">
              </div>
              </div>
              
            </fieldset>
            <div class="clear espacio_en_blanco"></div>
            <fieldset>
              <div class="span4">
                <a href="#" class="color_azul inline conttoltip" data-placement="right" data-toggle="tooltip" title="La contraseña se te enviara a tu correo">Olvide mi contraseña</a>
              </div>
              <div class="span4 offset4">
                <button class="btn btn-primary ancho100" type="submit">Registrarse</button>
              </div>
            </fieldset>

        </div>
      </form>
      <div class="clear espacio_en_blanco"></div>
      <p class="inline ancho100 text_centrado">
        ¿No tienes Cuenta? has <a class="inline carga_modal" href="modal_registro.php">CLICK AQUÍ</a> para crear una
      </p>
  </div>
  

</div>

<div class="clear espacio_en_blancofooter"></div>

<?php include("footer.php"); ?>


