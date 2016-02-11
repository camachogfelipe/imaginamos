  	<?php include("head.php"); ?>

		<?php include("header.php"); ?>
				
    <div class="con-content">
    	<div class="mg-content">
        <div class="info-content">
        	<h1>Contáctenos</h1>
          <div class="contact-icon"><img src="assets/img/contact-icon.png" width="160" height="150" alt=""></div>
          <div class="con-info-gral">
          	<h2>Para cotizaciones o consultas, por favor complete este formulario:</h2>
          	<div class="con-form">
            	<form id="contact-form" action="#" method="post">
              	<fieldset>
                	<input value="Nombre..." class="validate[required]" type="text" data-validation-placeholder="Nombre..." onBlur="if(this.value == '') { this.value='Nombre...'}" onFocus="if (this.value == 'Nombre...') {this.value=''}">
                </fieldset>
                <fieldset>
                	<input value="Empresa..." type="text" onBlur="if(this.value == '') { this.value='Empresa...'}" onFocus="if (this.value == 'Empresa...') {this.value=''}">
                </fieldset>
                <fieldset>
                	<input value="Cargo..." type="text" onBlur="if(this.value == '') { this.value='Cargo...'}" onFocus="if (this.value == 'Cargo...') {this.value=''}">
                </fieldset>
                <fieldset>
                	<input value="Teléfono..." class="validate[required, custom[phone]]" type="text" data-validation-placeholder="Teléfono..." onBlur="if(this.value == '') { this.value='Teléfono...'}" onFocus="if (this.value == 'Teléfono...') {this.value=''}">
                </fieldset>
                <fieldset>
                	<input value="Correo electrónico..." class="validate[required, custom[email]]" type="text" data-validation-placeholder="Correo electrónico..." onBlur="if(this.value == '') { this.value='Correo electrónico...'}" onFocus="if (this.value == 'Correo electrónico...') {this.value=''}">
                </fieldset>
                <fieldset>
                	<textarea value="Comentarios..." onBlur="if(this.value == '') { this.value='Comentarios...'}" onFocus="if (this.value == 'Comentarios...') {this.value=''}">Comentarios...</textarea>
                </fieldset>
                <fieldset class="bt-envio">
                	<input type="submit" value="Enviar">
                </fieldset>
              </form>
            </div>
            <div class="con-map">
            	<div class="map-acerarq">
              	<iframe width="368" height="378" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=210883790538219805436.0004d9826372e654c827e&amp;hl=es-419&amp;ie=UTF8&amp;t=m&amp;ll=4.776643,-74.041092&amp;spn=0.004041,0.003937&amp;z=17&amp;output=embed"></iframe>
              </div>
              <div class="info-acerarq">
              	<p><strong>Dirección: </strong> Calle 198 No 22·62 Bogotá DC - Colombia</p>
                <p><strong>Teléfonos: </strong> (+57-1) 672 7404 / 672 3554</p>
                <p><strong>E-mail: </strong> <a href="mailto:proyectos@acerarq.com">proyectos@acerarq.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="con-modals">
      <div id="ok-form">
        <h1>Su consulta ha sido enviada exitosamente.</h1>
        <p>Su respuesta está siendo preparada y la recibirá antes de 24 horas.</p>
      </div>
    </div>
					
		<?php include("footer.php"); ?>