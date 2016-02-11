<footer>
  <div class="con-footer">
    <div class="mg-footer cfx">
      <div class="con-foo-top">
            <div class="foo-c1 fl">
            <h1>CERTIFICACIONES</h1>
        </div>
            <div class="foo-c2 fl">
            <h1>SÍGUENOS</h1>
        </div>
            <div class="foo-c3 fl">
            <h1>INFORMACIÓN <strong>DE CONTÁCTO</strong></h1>
        </div>
      </div>
      <div class="con-foo-info">
            <div class="foo-c1 fl">
                <a href="empresa-certificados.php"><div class="foo-cer-s"><img src="<?= front_asset("img/footer-certificado-1.png") ?>" height="58" width="58" alt=""></div></a>
                <a href="empresa-certificados.php"><div class="foo-cer-s"><img src="<?= front_asset("img/footer-certificado-2.png") ?>" height="58" width="58" alt=""></div></a>
                <a href="empresa-certificados.php"><div class="foo-cer-s"><img src="<?= front_asset("img/footer-certificado-1.png") ?>" height="58" width="58" alt=""></div></a>
                <a href="empresa-certificados.php"><div class="foo-cer-s"><img src="<?= front_asset("img/footer-certificado-2.png") ?>" height="58" width="58" alt=""></div></a>
                <a href="http://www.infraestructura.org.co/" target="_blank"><div class="foo-cer-b"><img src="<?= front_asset("img/footer-certificado-3.png") ?>" height="62" width="292" alt=""></div></a>
        </div>
            <div class="foo-c2 foo-redes fl">
            <div class="foo-red-v"><a class="foo-red-1" href="https://www.facebook.com/" target="_blank"><span class="icon-arrow"></span> Facebook</a></div>
          <div class="foo-red-v"><a class="foo-red-2" href="https://twitter.com/" target="_blank"><span class="icon-arrow"></span> Twitter</a></div>
          <div class="foo-red-v"><a class="foo-red-3" href="http://co.linkedin.com/" target="_blank"><span class="icon-arrow"></span> Linkedin</a></div>
          <div class="con-foo-red-h">
            <div class="foo-red-h"><a class="foo-red-1" href="https://www.facebook.com/" target="_blank"><span class="icon-fb"></span></a></div>
            <div class="foo-red-h"><a class="foo-red-2" href="https://twitter.com/" target="_blank"><span class="icon-tw"></span></a></div>
            <div class="foo-red-h"><a class="foo-red-3" href="http://co.linkedin.com/" target="_blank"><span class="icon-in"></span></a></div>
          </div>
        </div>
            <div class="foo-c3 fl">
            <ul>
            <li>
              <h1 class="fl"><span class="icon-foo-1 fl"></span>Telefóno:</h1>
              <p class="fr"><?= $footer_info["telefono"] ?></p>
            </li>
            <li>
                <h1 class="fl"><span class="icon-foo-2 fl"></span>Email:</h1>
                <p class="fr">
                <?php foreach ($footer_emails as $email) :?>
                <?= $email["nombre"] ?>:<br> 
                <a href="mailto:<?= $email["email"] ?>"><?= $email["email"] ?></a><br/>
                <?php endforeach; ?>
              </p>
            </li>
            <li>
              <h1 class="fl"><span class="icon-foo-3 fl"></span>Dirección:</h1>
              <p class="fr">
                <a class="tool-foo modals-act" href="#modal-map" target="_blank">
                <?= $footer_info["direccion"] ?>
                  <span>Ver mapa</span>
                </a>
                <br>
                <?= $footer_info["edificio"] ?>
              </p>
            </li>
          </ul>
        </div>
        <div class="foo-c4 fl">
            <ul>
            <li><a href="empresa.php">Nuestra compañía</a></li>
            <li class="map-sep"></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li class="map-sep"></li>
            <li><a href="clientes.php">Aliados y clientes</a></li>
            <li class="map-sep"></li>
            <li><a href="noticias.php">Noticias</a></li>
            <li class="map-sep"></li>
            <li><a href="trabajo.php">Trabaje con nosotros</a></li>
            <li class="map-sep"></li>
            <li><a href="contacto.php">Contáctenos</a></li>
          </ul>
        </div>
      </div>
      <div class="con-foo-copy">
            <p>&copy; 2013 <strong>SESAC</strong> - Todos los derechos reservados - Prohibida su reproducción parcial o total</p>
        <div class="footer-ahorranito"></div>
      </div>          
    </div>
  </div>
</footer>
<!--Modals site-->
<div class="con-modals">
  <div id="modal-g" class="cfx">
    <h1 class="main-title">
      Título
      <span class="date-info">25/Sep/2013</span>
    </h1>
    <div class="des-gal">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    <div class="con-main-gal">
      <div class="gal-info fl">
        <div class="gal-img-b">
          <div class="img-b img-gal-1">
            <img src="<?= front_asset("img/modal-img-1.jpg") ?>" height="315" width="315" alt="">
            <div class="img-cp">
              <h1>1 Lorem ipsum</h1>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>
        <div class="gal-img-s">
          <div class="img-act img-s fl" data-id="img-gal-1"><img src="<?= front_asset("img/modal-img-1.jpg") ?>" height="53" width="53" alt=""></div>
          <div class="img-s fl" data-id="img-gal-2"><img src="<?= front_asset("img/modal-img-2.jpg") ?>" height="53" width="53" alt=""></div>
          <div class="img-s fl" data-id="img-gal-3"><img src="<?= front_asset("img/modal-img-1.jpg") ?>" height="53" width="53" alt=""></div>
          <div class="img-s fl" data-id="img-gal-4"><img src="<?= front_asset("img/modal-img-2.jpg") ?>" height="53" width="53" alt=""></div>
          <div class="img-s fl" data-id="img-gal-5"><img src="<?= front_asset("img/modal-img-1.jpg") ?>" height="53" width="53" alt=""></div>
        </div>
      </div>
      <div class="gal-info fr">
        <div class="scroll-wrap">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
    </div>
    <div class="marca-logo-2"></div>
  </div>
  <div id="modal-v" class="cfx">
    <h1 class="main-title">
      Video
      <span class="date-info">25/Sep/2013</span>
    </h1>
    <div class="con-video">
      <iframe width="560" height="315" src="http://www.youtube.com/embed/off08As3siM" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="info-video">
      <div class="scroll-wrap">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
    <div class="marca-logo-2"></div>
  </div>
  <?php foreach ($articulos as $articulo) {?>
  <div id="modal-articulo-<?= $articulo["id"] ?>" class="cfx">
    <img src="<?= $articulo["imagen"] ?>" height="550" width="484" alt="">
  </div>
  <?php } ?>
  <div id="modal-rec" class="cfx">
    <h1 class="main-title">Recuperar contraseña</h1>
    <div class="des-rec">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    <form action="#" class="grl-form" method="post">
      <div class="form-col fr">
        <div class="con-campo-submit">
          <span class="icon-ok"></span>
          <input class="fr submit-bt" type="submit" value="Enviar">
        </div>
      </div>
      <div class="form-col fl">
        <div class="con-campo">
          <input class="fl validate[required, custom[email]]" placeholder="Correo electrónico..." type="text" value="">
        </div>
      </div>
    </form>
    <div class="marca-logo-2"></div>
  </div>
  <div id="modal-map" class="cfx">
    <img width="600" height="500" src="http://maps.googleapis.com/maps/api/staticmap?center=<?= $footer_info["gmapsX"] ?>,<?= $footer_info["gmapsY"] ?>&amp;zoom=16&amp;size=600x500&amp;maptype=roadmap&amp;markers=<?= $footer_info["gmapsX"] ?>,<?= $footer_info["gmapsY"] ?>&amp;sensor=false">
  </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="<?= front_asset("js/jquery.plugs.min.js") ?>"></script>
<script type="text/javascript" src="<?= front_asset("js/actions.js") ?>"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>