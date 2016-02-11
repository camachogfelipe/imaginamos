    <footer>
      <div class="con-footer">
        <div class="mg-footer cfx">
          <div class="con-foo-cols">
          	<div class="foo-logo"><a href="index.php"><img src="<?php echo global_asset('img/footer-logo.png') ?>" width="190" height="82" alt=""></a></div>
            <div class="foo-logo-sep"></div>
            <div class="foo-c1">
            	<h1>DIRECCIÓN</h1>
              <ul>
              	<li><?php echo isset($data_contact->direccion)?$data_contact->direccion:""; ?></li>
                <li><?php echo isset($data_contact->edificio)?$data_contact->edificio:""; ?></li>
                <li>Barrio <?php echo isset($data_contact->barrio)?$data_contact->barrio:""; ?></li>
                <li><?php echo isset($data_contact->ciudad)?$data_contact->ciudad:""; ?></li>
              </ul>
            </div>
            <div class="foo-c2">
            	<h1>CONTÁCTENOS</h1>
              <ul>
              	<li class="foo-info-1">Telefóno: <?php echo isset($data_contact->telefono)?$data_contact->telefono:""; ?></li>
                <li class="foo-info-2">Mobile: <?php echo isset($data_contact->mobile)?$data_contact->mobile:""; ?></li>
                <li class="foo-info-3"><a href="mailto:#"><?php echo isset($data_contact->email)?$data_contact->email:""; ?></a></li>
              </ul>
            </div>
            <div class="foo-c3">
            	<h1>MAPA DE NAVEGACIÓN</h1>
              <ul>
              	<li><a href="empresa.php" id="foo-bt-1">Info. Corporativa</a></li>
                <li><a href="integracion.php" id="foo-bt-2">Integración</a></li>
                <li><a href="comunicaciones.php" id="foo-bt-3">Comunicaciones</a></li>
                <li><a href="tecnico.php" id="foo-bt-4">Servicio Técnico</a></li>
                <li><a href="seguridad.php" id="foo-bt-5">Electrónica</a></li>
                <li><a href="gestion.php" id="foo-bt-6">Gestión de Flota</a></li>
                <li><a href="tecnico.php" id="foo-bt-7">CCTV</a></li>
                <li><a href="contacto.php" id="foo-bt-8">Contáctenos</a></li>
              </ul>
            </div>
          </div>
          <div class="con-foo-copy">
          	<div class="foo-copy"><p>&copy; 2013 <strong>SETRONICS</strong> - Todos los derechos reservados - Prohibida su reproducción parcial o total</p></div>
          	<div class="footer-ahorranito"></div>
          </div>
        </div>
      </div>
    </footer>
    <div class="con-modals">
    	<div id="modal-reg">
      	<h1>FORMULARIO DE REGISTRO</h1>
        <form class="modal-form" action="<?php echo base_url('home/add_client') ?>" method="post">
          <fieldset>
            <div class="input-modal"><input type="text" name="cli_nom" placeholder="Nombre..." class="validate[required]"></div>
          </fieldset>
          <fieldset>
            <div class="input-modal"><input type="text" name="cli_ape" placeholder="Apellido..." class="validate[required]"></div>
          </fieldset>
          <fieldset>
            <div class="input-modal"><input type="text" name="cli_tel" placeholder="Teléfono..." class="validate[required, custom[phone]]"></div>
          </fieldset>
          <fieldset>
            <div class="input-modal"><input type="text" name="cli_ema" placeholder="Correo electrónico..." class="validate[required, custom[email]]"></div>
          </fieldset>
          <fieldset>
            <div class="input-modal"><input type="text" name="cli_com" placeholder="Compañia..." class="validate[required]"></div>
          </fieldset>
          <fieldset>
            <select name="cli_tip">
              <option value="">Cliente / Proveedor</option>
              <option value="1">Cliente</option>
              <option value="2">Proveedor</option>
            </select>
          </fieldset>
          <fieldset>
            <select name="cli_dep">
              <option value="">Departamento</option>
              <?php foreach ($deptos as $dat_deptos) : ?>
              <option value="<?php echo $dat_deptos['id'] ?>"><?php echo $dat_deptos['nombre'] ?></option>
              <?php endforeach; ?>
            </select>
          </fieldset>
          <fieldset>
            <div class="input-modal"><input type="text" name="cli_ciu" placeholder="Ciudad..." class="validate[required]"></div>
          </fieldset>
          <p class="reg-tx">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        	<fieldset>
          	<div class="input-modal"><input type="text" name="cli_id_usu" placeholder="ID Usuario..." class="validate[required]"></div>
          </fieldset>
          <fieldset>
          	<div class="input-modal"><input type="password" name="cli_pass_usu" placeholder="Contraseña..." class="validate[required]"></div>
          </fieldset>
          <fieldset style="width: 840px;">
            <input type="submit" class="submit-bt" value="Enviar">
          </fieldset>
        </form>
      </div>
      <div id="modal-login">
      	<h1>LOGIN</h1>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
        <form class="modal-form" action="zona-segura.php" method="get">
        	<fieldset>
          	<div class="input-modal"><input type="text" placeholder="Usuario..." class="validate[required]"></div>
          </fieldset>
          <fieldset>
          	<div class="input-modal"><input type="password" placeholder="Contraseña..." class="validate[required]"></div>
          </fieldset>
          <a href="#modal-rec" class="modals-act"><p>¿Olvido su contraseña?</p></a>
          <input type="submit" class="submit-bt" value="Ingresar">
        </form>
      </div>
      <div id="modal-rec">
      	<h1>RECUPERAR CONTRASEÑA</h1>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
        <form class="modal-form" action="#" method="get">
        	<fieldset>
          	<div class="input-modal"><input type="text" placeholder="Correo electrónico..." class="validate[required, custom[email]]"></div>
          </fieldset>
          <input type="submit" class="submit-bt" value="Enviar">
        </form>
      </div>
      <div id="modal-coco">
        <h1 class="main-title">COMPRAR COTIZAR</h1>
        <h2>Resumen</h2>
        <div class="con-tabla-rs-coco">
          <div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-rs-coco">
              <thead>
                <tr>
                  <th width="120">Ítem(s)</th>
                  <th width="120">Referencia</th>
                  <th width="120">Cantidad</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>00000</td>
                  <td>Lorem ipsum</td>
                  <td>Lorem ipsum</td>
                </tr>
                <tr>
                  <td>00000</td>
                  <td>Lorem ipsum</td>
                  <td>Lorem ipsum</td>
                </tr>
                <tr>
                  <td>00000</td>
                  <td>Lorem ipsum</td>
                  <td>Lorem ipsum</td>
                </tr>
                <tr>
                  <td>00000</td>
                  <td>Lorem ipsum</td>
                  <td>Lorem ipsum</td>
                </tr>
                <tr>
                  <td>00000</td>
                  <td>Lorem ipsum</td>
                  <td>Lorem ipsum</td>
                </tr>
                <tr>
                  <td>00000</td>
                  <td>Lorem ipsum</td>
                  <td>Lorem ipsum</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="con-btsv">
          <a href="zona-segura.php"><div class="btv">Ir a Comprar</div></a>
          <a href="#modal-cot-ok" class="modals-act"><div class="btv">Cotizar</div></a>
        </div>
      </div>
      <div id="modal-cot-ok">
        <h1 class="main-title" style="padding: 20px 0 0; width: 100%;">Información enviada correctamente.</h1>
        <p>En las próximas 24 horas uno de nuestros asesores se pondra en contacto.</p>
      </div>
    </div>
    
    <script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.plugs.min.js"></script>
		<script type="text/javascript" src="assets/js/actions.js"></script>
    <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>

	</body>
</html>