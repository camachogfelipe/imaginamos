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
                  <li><strong>Dirección</strong>Lorem Ipsum is simply dummy.</li>
                  <li><strong>Teléfono</strong>Lorem Ipsum is simply dummy.</li>
                  <li><strong>Correo electrónico</strong><a href="mailto:#">info@metalcut.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sep-line"></div>
        <div class="con-contact-form clearfix">
          <form class="fm-int" action="" method="post">
            <fieldset>
              <label><strong>Nombre:</strong></label>
              <input type="text" class="validate[required]">
            </fieldset>
            <fieldset>
              <label><strong>Asunto:</strong></label>
              <input type="text">
            </fieldset>
            <fieldset>
              <label><strong>Correo electr&#243;nico:</strong></label>
              <input type="text" class="validate[required, custom[email]]">
            </fieldset>
            <fieldset>
              <label><strong>Ciudad:</strong></label>
              <input type="text">
            </fieldset>
            <fieldset>
              <label><strong>Tel&#233;fono:</strong></label>
              <input type="text">
            </fieldset>
            <fieldset>
              <label><strong>Nombre de la empresa:</strong></label>
              <input type="text" class="validate[required]">
            </fieldset>
            <fieldset class="field-db">
              <label><strong>Comentarios:</strong></label>
              <textarea></textarea>
            </fieldset>
            <div class="bt-ingreso">
              <input type="submit" class="bt-envio" value="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
  <div class="con-modals">
    <div id="modal-rec-ok">
      <h1>Informaci&#243;n enviada correctamente.</h1>
      <p>En las prxi&#243;mas 24 horas uno de nuestros asesores se pondra en contacto.</p>
    </div>
  </div>
					
<?php include("footer.php"); ?>