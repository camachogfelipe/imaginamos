
<?php include("header.php"); ?>
<!-- header -->
<?php include("menu.php"); ?>
<!-- menu1 -->
<?php include("menu2.php"); ?>
<!-- menu2 -->

  <div class="cont_940 cont_internas clearfix">
    <h2 class="tit_secciones">
      Contáctenos
    </h2>

    <div class="row-fluid">
      <div class="span6 cont_mapa">
        <p><span>Dirección:</span> xxx # xxx-xxx</p>
        <p><span>Teléfono:</span> 00 00000 0000000</p>
        <p><span>Correo Electrónico:</span> ejemplo@akro.com</p>
        <div class="video-container">
         <iframe src="https://mapsengine.google.com/map/u/1/embed?mid=zWbGL2bJFL08.kvpNM0FCJH7s" width="640" height="480"></iframe>
        </div>
      </div>
      <div class="span6 cont_form">
        <form>
          <fieldset>
            <input type="text" placeholder="Nombre*">
            <input type="text" placeholder="Dirección*">
            <input type="text" placeholder="Teléfono*">
            <input type="text" placeholder="Correo electrónico*">
            <textarea placeholder="Mensaje*"></textarea>
          </fieldset>
          <fieldset>
            <div class="cont_btarticulos">
              <button type="submit" class="boton inline bt_enviar">Enviar</button>
            </div>
          </fieldset>
        </form>
      </div>
      <div id="enviado" style="display:none"><div class="cont_enviado">Mensaje enviado</div></div>
    </div>
  
    
  </div>

<!-- contenido -->
<?php include("footer.php"); ?>

