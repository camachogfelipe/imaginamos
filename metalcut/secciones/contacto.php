<?php include("head.php"); ?>
	<?php include("header-int.php"); ?>
   <?php
   $cContacto = new Dbcontacto();
   $mData = array("where"=>"idcontacto=1");
   $contacto = $cContacto->getListOne($mData);
   ?>
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>Cont&#225;ctenos</h1>
        <div class="con-contact clearfix">
          <div class="con-cont-img"><img src="assets/img/contacto/<?php echo $contacto['imagen']?>" width="396" height="220" alt=""></div>
          <div class="con-cont-info">
            <div class="cont-hd">
              <h1>Datos de contacto</h1>
            </div>
            <div class="cont-info">
              <div class="scroll-wrap">
                <ul>
                  <li><strong>Direcci&#243;n</strong><?php echo $contacto['direccion1']?></li>
                  <li><strong>Tel&#233;fono</strong><?php echo $contacto['telefonos']?></li>
                  <li><strong>Correo electr&#233;nico</strong><a href="mailto:#"><?php echo $contacto['correos']?></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sep-line"></div>
        <div class="con-contact-form clearfix">
          <form class="fm-int" action="http://repositorio.imaginamos.com.co/FBZ/metalcut2/index.php?base&seccion=mail" method="post">
            <fieldset>
              <label><strong>Nombre:</strong></label>
              <input type="text" class="validate[required]" id="nombre" name="nombre">
            </fieldset>
            <fieldset>
              <label><strong>Asunto:</strong></label>
              <input type="text" id="asunto" name="asunto">
            </fieldset>
            <fieldset>
              <label><strong>Correo electr&#243;nico:</strong></label>
              <input type="text" class="validate[required, custom[email]]" id="email" name="email">
            </fieldset>
            <fieldset>
              <label><strong>Ciudad:</strong></label>
              <input type="text" id="ciudad" name="ciudad">
            </fieldset>
            <fieldset>
              <label><strong>Tel&#233;fono:</strong></label>
              <input type="text" id="telefono" name="telefono">
            </fieldset>
            <fieldset>
              <label><strong>Nombre de la empresa:</strong></label>
              <input type="text" class="validate[required]" id="empresa" name="empresa">
            </fieldset>
            <fieldset class="field-db">
              <label><strong>Comentarios:</strong></label>
              <textarea id="comentario" name="comentario"></textarea>
            </fieldset>
            <div class="bt-ingreso">
              <input type="submit" class="bt-envio" value="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
					
<?php include("footer.php"); ?>
<?php 
 if (isset($_GET['Erno'])) {
    if (intval($_GET['Erno'])) {
        $valor = $_GET['Erno'];
        if ($valor == 1) {
            ?><div class="section-sep"></div>
                <div class="con-modals">
                  <div id="modal-rec-ok">
                    <h1>Informaci&#243;n enviada correctamente.</h1>
                    <p>En las prxi&#243;mas 24 horas uno de nuestros asesores se pondra en contacto.</p>
                  </div>
                </div>
            <?php
        }
    }
}
?>