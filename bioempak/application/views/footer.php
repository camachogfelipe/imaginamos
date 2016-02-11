    
    
    <div class="footer">
      <div class="clearfix">
        <img class="logo2" src="<?php echo base_url() ?>assets/img/logo2.png" />
        <ul class="navmap">
          <li><a href="<?php echo base_url() ?>site/index">Home</a></li>
          <li><a href="<?php echo base_url() ?>site/us/#nogo">Nosotros</a></li>
          <li><a href="<?php echo base_url() ?>site/prods">Productos</a></li>
          <li><a href="<?php echo base_url() ?>site/news">Noticias</a></li>
          <li><a href="<?php echo base_url() ?>site/tech">Tecnología</a></li>
          <li><a href="<?php echo base_url() ?>site/contact">Contáctenos</a></li>
        </ul>
        <p class="info_footer">
        <span>Información</span><br />
        CRA 19B # 168-77<br />
        Bogotá, Colombia<br />
        Teléfono (57) (1)  6747423 <br />
        Fax. (57) (1)  6746915<br />
        administracion@bioempak.com
        </p>
        <div class="redes_footer">
          <h5>Síguenos</h5>
          <div class="clearfix">
            <a class="facebook_footer" href="http://www.facebook.com/bioempak.sa?fref=ts" target="_blank"></a>
            <a class="twitter_footer" href="https://twitter.com/bioempak" target="_blank"></a>
            <a class="youtube" href="#"></a>
          </div>
          <div class="tobrochure">
            <h3>Brochures:</h3>
            <a target="_blank" href="brochure_farma">Farmacéuticos</a>
            <a target="_blank" href="brochure_alimentos">Alimentos</a>
          </div>
        </div>
      </div>
      <div class="clearfix autor1">
        <h6>Copyright © 2012 - BIOEMPAK - Todos los derechos reservados</h6>
        <div class="imag">
          <a target="_blank" href="http://www.imaginamos.com">Diseño Web: </a><a target="_blank" class="imagina1" href="http://www.imaginamos.com">imagin<span>a</span>mos.com</a>
        </div>
      </div>
    </div>
<div class="form_cotiza" id="registro">
  <div class="bg_cotiza"></div>
  <div style="height:400px; margin-top:-180px;" class="content_cotiza">
    <a class="btn_cerrar"></a>
    <h1>Formulario de <span class="light_blue">Registro</span></h1>
    <h2>Te invitamos hacer parte de esta gran comunidad <span class="light_blue">BIOEMPAK</span> ingresa tus datos a continuación...</h2>
    <div class="clearfix content_form_cotiza">
    	<?php echo form_open('site/registro'); ?>
      <input style="width:540px; float:none;" onclick="if(this.value=='Nombre completo')this.value=''" onblur="if(this.value=='')this.value='Nombre completo'" id="nombrer" name="nombrer" value="Nombre completo" />
      <input onclick="if(this.value=='Correo electrónico')this.value=''" onblur="if(this.value=='')this.value='Correo electrónico'" id="correor" value="Correo electrónico" name="correo" style="width: 540px; float: none;" />
      <div class="clearfix">
        <select id="country_id6" name="sector_r">
            <option value="0">¿A qué sector perteneces?</option>
            <?php
              foreach($sectores as $sector) :
                echo '<option value="'.$sector->id.'">'.$sector->nombre.'</option>'."\n";
              endforeach;
            ?>
        </select> 
        <select id="country_id7" name="empresa_r">
            <option value="0">Empresa o Independiente</option>
            <option value="empresa">Empresa</option>        
            <option value="independiente">Independiente</option>              
        </select>
        <input id="empresa_r" type="text" name="empresa_r" style="display: none; width:540px; float:none;" onclick="if(this.value=='Nombre de la empresa')this.value=''" onblur="if(this.value=='')this.value='Nombre de la empresa'" value="Nombre de la empresa" />
        <input id="cargo_r" type="text" name="cargo_r" onclick="if(this.value=='Cargo')this.value=''" value="Cargo" />
        <input type="hidden" id="vista" value="<?php echo $this->uri->segment(2) ?>" />
        <a class="btn_cerrar"></a>
       </div>
      <a class="env_cotiza" onclick="return sendRegistro()">Enviar</a>
      <?php echo form_close(); ?>
		</div>
    <script>
            function sendRegistro(){
								/*
								1. Poner las variables que faltan
								2. Poner option:selected despues del id en los campos select
								3. Validar si es empresa que se llene el campo
								4. Cantidades debe ser numerico
								5. Traer los productos de la base de datos
								*/
                if(jQuery('#nombrer').val() == "Nombre"){
                    alert('Escriba su nombre');
                    return false;
                }   
                if(jQuery('#correor').val() == "Correo electrónico"){
                    alert('Escriba su correo');
                    return false;
                } 
                if(jQuery('#country_id6 option:selected').val() == "0"){
                    alert('Seleccione el sector al que pertenece');
                    return false;
                }
                if(jQuery('#country_id7 option:selected').val() == "0"){
                    alert('Seleccione empresa o independiente');
                    return false;
                }
                if(jQuery('#country_id7 option:selected').val() == "empresa" && jQuery('#empresa_r').val() == "Nombre de la empresa"){
                    alert('Por favor ingrese el nombre de la empresa');
                    return false;
                }
                if(jQuery('#country_id7 option:selected').val() == "empresa" && jQuery('#cargo_r').val() == "Cargo"){
                    alert('Ingrese el cargo por favor');
                    return false;
                }
                jQuery.ajax({
                   url  :   '<?php echo base_url(); ?>site/registro',
                   type :   'POST',
                   data :   {
                       'nombre'  : jQuery('#nombrer').val(),
                       'correo'  : jQuery('#correor').val(),
                       'sector'  : jQuery('#country_id6 option:selected').val(),
                       'tempresario'  : jQuery('#country_id7 option:selected').val(),
                       'empresa' : jQuery('#empresa_r').val(),
                       'cargo' : jQuery('#cargo_r').val(),
											 'vista' : jQuery('#vista').val()
                   },
                   success:function(){
										 alert('Registro enviado. A vuelta de correo recibirá su contraseña de acceso. Gracias.');									 
										 jQuery(location).attr('href', window.location.pathname);
                   }
                });
            }
        </script>
  </div>
</div>

<div class="bg_gris">
  <div class="gris_left"></div>
  <div class="gris_right"></div>
</div>

<div class="form_cotiza" id="ingreso">
  <div class="bg_cotiza"></div>
  <div style="height:300px; margin-top:-180px;" class="content_cotiza">
    <a class="btn_cerrar"></a>
    
    <h1 class="tittle_tecno">Ingresar</h1>
    <div class="clearfix content_form_cotiza">
    	<?php $attributes = array('id' => 'login'); echo form_open('site/login', $attributes); ?>
        <div class="form_contacto clearfix" id="form-ingreso">
          <div class="input_contacto" >
          	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Email</label><br>
            <input id="emailingreso" name="email" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Password</label><br>
            <input type="password" id="password" name="password" />
            <input type="hidden" id="vista" value="<?php echo $this->uri->segment(2) ?>" />
            <a class="recovery1" style="cursor:pointer">¿Olvidó su contraseña?</a>
          </div>
        </div>
        <a href="#form" onclick="ingresar();" class="enviar_contacto" id="ingresando" style="margin-bottom: 20px">ingresar</a>
      <?php echo form_close(); ?>
		</div>
    <script>
            function ingresar(){
                if(jQuery('#emailingreso').val() == ""){
                    alert('Escriba su email de registro');
                    return false;
                }   
                if(jQuery('#password').val() == ""){
                    alert('Escriba su contraseña');
                    return false;
                }
								jQuery("#login").submit();
            }
        </script>
  </div>
</div>

<div class="form_cotiza" id="recovery">
  <div class="bg_cotiza"></div>
  <div style="height:300px; margin-top:-180px;" class="content_cotiza">
    <a class="btn_cerrar"></a>
    
    <h1 class="tittle_tecno">Recuperar la contraseña</h1>
    <div class="clearfix content_form_cotiza">
    	<?php $attributes = array('id' => 'login'); echo form_open('site/recovery', $attributes); ?>
        <div class="form_contacto clearfix" id="form-ingreso">
          <div class="input_contacto" >
          	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Email</label><br>
            <input id="emailrecovery" name="email" />
            <input type="hidden" id="vista" value="<?php echo $this->uri->segment(2) ?>" />
          </div>
        </div>
        <a href="#form" onclick="recovery();" class="enviar_contacto" id="ingresando" style="margin-bottom: 20px">Recuperar</a>
      <?php echo form_close(); ?>
		</div>
    <script>
            function recovery(){
                if(jQuery('#emailrecovery').val() == ""){
                    alert('Escriba su email de registro');
                    return false;
                }
                jQuery.ajax({
                   url  :   '<?php echo base_url(); ?>site/recovery',
                   type :   'POST',
                   data :   {
                       'email'  : jQuery('#emailrecovery').val(),
											 'vista' : jQuery('#vista').val()
                   },
                   success:function(data){
										 alert('Se restablecio la contraseña. Verifíque su correo por favor.');
										 jQuery(location).attr('href', window.location.pathname);
                   }
                });
            }
        </script>
  </div>
</div>