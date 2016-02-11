<?php include("head.php"); ?>
	<style type="text/css">#nav-bt6 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
	<?php include("header.php"); ?>

  <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1>Contáctenos</h1>
        <h2 class="sub-contact-tt1 fl">Sala de exhibición</h2>
        <div class="contact-col fl">
        	<div class="contact-img" style="background:url(assets/img/contacto-img.jpg);"></div>
        </div>
        <div class="contact-col fr">
          <h1>Teléfonos:</h1>
          <p>(+571) 123 4578 - 123 4578</p>
          <h1>Fax:</h1>
          <p>(+571) 123 4578</p>
          <h1>E-mails:</h1>
          <p><a href="mailto:#" target="_blank">&bull; email@dajerequipos.com</a></p>
          <p><a href="mailto:#" target="_blank">&bull; email@dajerequipos.com</a></p>
          <h1>Horario de atención:</h1>
          <p>Lunes a Viernes:</p>
          <p>de 7:30am a 12m y de 2:00pm a 5:00pm</p>
          <h1>Bogotá DC - Colombia</h1>
        </div>
        <h2 class="sub-contact-tt2 fl">Formulario de contacto</h2>
        <form action="#" class="grl-form cfx" method="post">
        	<div class="contact-col fl">
            <input class="validate[required]" type="text" placeholder="Empresa...">
            <input class="validate[required]" type="text" placeholder="Nombre...">
            <input class="validate[required, custom[phone]]" type="text" placeholder="Teléfono fijo...">
            <input class="validate[required, custom[phone]]" type="text" placeholder="Celular...">
            <input class="validate[required, custom[email]]" type="text" placeholder="Correo eléctronico...">
          </div>
          <div class="contact-col fr">
            <input class="validate[required]" type="text" placeholder="Ciudad...">
            <input class="validate[required]" type="text" placeholder="Dirección...">
            <textarea class="validate[required]" type="text" placeholder="Comentarios..."></textarea>
            <input class="submit-bt" type="submit" value="Enviar">
          </div>
        </form>
      </div>
    </div>
  </section>

 	<div class="con-modals">
    <div class="info-modal cfx" id="modal-ok">
  		<h1>FORMULARIO ENVIADO!</h1>
    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  	</div>
  </div>

<?php include("footer.php"); ?>