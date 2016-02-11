<section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>Contáctenos</h1>
        <form class="contact-form" action="contactenos/send" method="post">
        	<fieldset>
                    <div class="con-inputs"><input type="text" name="nombre" placeholder="Nombre..." class="validate[required]"></div>
          </fieldset>
          <fieldset>
              <div class="con-inputs"><input type="text" name="email" placeholder="Correo electrónico..." class="validate[required, custom[email]]"></div>
          </fieldset>
          <fieldset>
          	<div class="con-inputs"><input type="text" name="celular" placeholder="Celular..." class="validate[required, custom[phone]]"></div>
          </fieldset>
          <fieldset>
              <div class="con-inputs"><input type="text" name="asunto" placeholder="Asunto..."></div>
          </fieldset>
          <fieldset>
              <textarea placeholder="Comentarios..." name="comentario" class="validate[required]"></textarea>
          </fieldset>
          <input type="submit" class="submit" value="Enviar">
        </form>
      </div>
    </div>
  </section>
<?php if ($send==1){?>
  <div class="con-modals">
  	<div id="modal-ok">
    	<h1>Formulario enviado.</h1>
      <p>Sus datos se han enviado correctamente, en las próximas horas uno de nuestros asesores lo contáctaran.</p>
    </div>
  </div>
<?php }?>