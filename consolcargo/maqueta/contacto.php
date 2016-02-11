<?php include("head.php"); ?>
	<?php include("header.php"); ?>
  
  <section class="cfx">
    <ul class="nav-din-con cfx">
      <li><a data-id="info-b1" class="nav-din-con-bt nav-din-act">Contáctenos</a></li>
      <li><a data-id="info-b2" class="nav-din-con-bt">Nuestras oficinas</a></li>
    </ul>
    <div class="con-info-bc info-b1">
      <h1>Contáctenos</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <form action="#" class="grl-form cfx" method="post">
        <div class="grl-form-col">
          <div class="con-ing-form">
            <input class="validate[required]" type="text" placeholder="Nombre..." value="">
          </div>
          <div class="con-ing-form">
            <select class="validate[required]">
            <option value="">País...</option>
            <option value="1">&nbsp; &bull; País 1</option>
            <option value="2">&nbsp; &bull; País 2</option>
            <option value="3">&nbsp; &bull; País 3</option>
          </select>
          </div>
          <div class="con-ing-form">
            <select class="validate[required]">
            <option value="">Ciudad...</option>
            <option value="1">&nbsp; &bull; Ciudad 1</option>
            <option value="2">&nbsp; &bull; Ciudad 2</option>
            <option value="3">&nbsp; &bull; Ciudad 3</option>
          </select>
          </div>
          <div class="con-ing-form">
            <input class="validate[required, custom[email]]" type="text" placeholder="Correo electrónico..." value="">
          </div>
          <div class="con-ing-form">
            <textarea value="" placeholder="Comentarios..."></textarea>
          </div>
          <input class="bt-form" type="submit" value="Enviar">
        </div>
        <div class="grl-form-col">
          <figure class="contact-img">
            <img src="assets/img/contact-img.jpg" alt="">
          </figure>
        </div>
      </form>
    </div>
    <div class="con-info-bc info-b2">
      <h1>Nuestras oficinas</h1>
      <!--Oficina-->
      <div class="grl-form-col">
        <div class="con-ofc">
          <h1>Oficina Bogotá</h1>
          <ul class="grl-list">
            <li>Calle 999A # 999-999</li>
            <li>Teléfono: (+571) 999 9999</li>
            <li>Fax: (+571) 999 9999</li>
            <li>E-mail: <a href="mailto:contacto@consolcargo.com.co">contacto@consolcargo.com</a></li>
          </ul>
        </div>
      </div>
      <!--Oficina-->
      <div class="grl-form-col">
        <div class="con-ofc">
          <h1>Oficina Medellín</h1>
          <ul class="grl-list">
            <li>Calle 999A # 999-999</li>
            <li>Teléfono: (+571) 999 9999</li>
            <li>Fax: (+571) 999 9999</li>
            <li>E-mail: <a href="mailto:contacto@consolcargo.com.co">contacto@consolcargo.com</a></li>
          </ul>
        </div>
      </div>
      <!--Oficina-->
      <div class="grl-form-col">
        <div class="con-ofc">
          <h1>Oficina Cartagena</h1>
          <ul class="grl-list">
            <li>Calle 999A # 999-999</li>
            <li>Teléfono: (+571) 999 9999</li>
            <li>Fax: (+571) 999 9999</li>
            <li>E-mail: <a href="mailto:contacto@consolcargo.com.co">contacto@consolcargo.com</a></li>
          </ul>
        </div>
      </div>
      <!--Oficina-->
      <div class="grl-form-col">
        <div class="con-ofc">
          <h1>Oficina Buenaventura</h1>
          <ul class="grl-list">
            <li>Calle 999A # 999-999</li>
            <li>Teléfono: (+571) 999 9999</li>
            <li>Fax: (+571) 999 9999</li>
            <li>E-mail: <a href="mailto:contacto@consolcargo.com.co">contacto@consolcargo.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
<?php include("footer.php"); ?>