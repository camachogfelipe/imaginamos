<?php include("head.php"); ?>
	<style type="text/css">.header-logos {margin: 0; height:165px;} .header-logo-2 {width:220px; height:165px;} .header-logo-2 img {width:220px; height:165px;}</style>
	<a id="sec-com-1"></a>
  <?php include("header-lechesan.php");
  $correos_e = DbHandler::GetAll("SELECT * FROM correos");
$correo = DbHandler::GetAll("SELECT * FROM phpmailer");
if (isset($_POST["bandera"])) {


    if ($_POST["bandera"] == "abc") {
        $subir = DbHandler::Execute("INSERT INTO form_contactenos(
                                            id,
                                            nombre,
                                            ciudad,
                                            correo,                                            
                                            telefono,                                           
                                            tipo,                                           
                                            comentario)
                                            VALUES (
                                            NULL,
                                            '" . utf8_decode(GetData("nombre")) . "',
                                            '" . utf8_decode(GetData("ciudad")) . "',
                                            '" . GetData("correo") . "',                                            
                                            '" . GetData("telefono") . "',                                           
                                            '" . GetData("tipo") . "',                                           
                                            '" . utf8_decode(GetData("comentario")) . "'                                            
                                            )");

        $body = '
            <center><img src="assets/img/header-logo-1.png"></center>
            <center><img src="assets/img/header-logo-2.png"></center>
            <br><br>
            Hola,<br>
            Un usuario env&iacute;a este mensaje desde la zona de contacto.
            <br><br>                                 
            <b>Nombre</b> : ' . utf8_decode(GetData("nombre")) . ' <br>                 
            <b>Ciudad</b> : ' . utf8_decode(GetData("ciudad")) . ' <br>                 
            <b>Email</b>: <a href="mailto:' . GetData("correo") . ' " target="_blank">' . GetData("correo") . '</a> <br>            
            <b>Tel&eacute;fono</b> : ' . GetData("telefono") . ' <br>            
            <b>Comentario</b> : ' . utf8_encode(GetData("comentario")) . ' <br> 
            <b>Fecha de env&iacute;o</b>: ' . date("Y-m-d H:i:s") . '<br>';

        $asunto = utf8_decode("Contáctenos");
        $cCorreos = new Dbcontacto();
        $contac = $cCorreos->getByPk(1);
        $cCorreo = new Correo();
        if (GetData("tipo") == "Pecition") {
            $cCorreo->SendEmail($correos_e[0]["peticion"], $asunto, $body, $correo);
        }
        if (GetData("tipo") == "Queja") {
            $cCorreo->SendEmail($correos_e[0]["queja"], $asunto, $body, $correo);
        }
        if (GetData("tipo") == "Reclamo") {
            $cCorreo->SendEmail($correos_e[0]["recurso"], $asunto, $body, $correo);
        }
        if (GetData("tipo") == "Otro") {
            $cCorreo->SendEmail($correos_e[0]["otro"], $asunto, $body, $correo);
        }
        echo '<script> window.location.href = "index.php?seccion=contacto-lechesan&cr";</script>';
    }
}
  ?>
  
  <div class="con-slider">
    <div class="sliderContainer fullWidth clearfix">
       <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
            <!--Slide-->
            <?php
            $banner = DbHandler::GetAll("SELECT * FROM banner WHERE posicion = 2 ORDER BY id DESC");

            for ($a = 0, $b = count($banner); $a < $b; $a++) {
                ?>
                <div class="rsContent" data-rsDelay="6000">
                	<img class="rsImg" src="img/banner/1349_516_<?php echo $banner[$a]["img"] ?>" height="516" alt="">
                </div>
            <?php } ?>
        </div>
    </div>
  </div>
	<section>
    <div class="con-section">
      <div class="mg-section-other clearfix">
        <h2 id="sec-com-2">Formulario de contacto</h2>
        <div class="con-form-int clearfix">
        	<form class="fm-int" action="" method="post">
                    <div class="form-db">
                        <fieldset>
                            <input type="hidden" name="bandera" value="abc"/> 
                            <label>Nombre</label>
                            <input name="nombre" class="validate[required]">
                        </fieldset>
                        <fieldset>
                            <label>Ciudad</label>
                            <input name="ciudad">
                        </fieldset>
                        <fieldset>
                            <label>Teléfono</label>
                            <input name="telefono" class="validate[required, custom[phone]]">
                        </fieldset>
                        <fieldset>
                            <label>Correo electrónico</label>
                            <input name="correo" class="validate[required, custom[email]]">
                        </fieldset>
                    </div>
                    <div class="form-db">
                        <fieldset>
                            <label>Tipo de solicitud</label>
                            <select name="tipo" class="validate[required]" data-validation-placeholder="">
                                <option value="">-</option>
                                <option value="Peticion">&nbsp; &bull; Petición</option>
                                <option value="Queja">&nbsp; &bull; Queja</option>
                                <option value="Reclamo">&nbsp; &bull; Recurso</option>
                                <option value="Otro">&nbsp; &bull; Otro</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <label>Comentario</label>
                            <textarea name="comentario"></textarea>
                        </fieldset>
                        <fieldset>
                            <input type="submit" class="bt-submit" value="ENVIAR">
                        </fieldset>
                    </div>
                </form>
        </div>
      </div>
    </div>
  </section>
  <div class="con-fx-nav">
  	<a class="fx-nav" href="#sec-com-1"><div class="fx-pick fx-pick-8"><div class="fx-nav-tip">Galería<span></span></div></div></a>
  	<a class="fx-nav" href="#sec-com-2"><div class="fx-pick fx-pick-2"><div class="fx-nav-tip">Formulario<span></span></div></div></a>
  </div>
					
<?php include("footer.php"); ?>