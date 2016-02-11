<?php include("head.php"); ?>
	<?php include("header.php"); ?>
  
  <a class="work-an" href="pdf.pdf" target="_blank"><span class="icon-s6 fr"></span> Descargue aquí el formato de hoja de vida</a>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1 class="main-title">Trabaje con nosotros</h1>
        <div class="con-work-form fl">
        	<form action="#" class="grl-form fl" method="post">
            <div class="form-col fl">
            	<div class="con-campo">
              	<label class="fl">Nombre:</label>
                <input class="fr validate[required]" type="text" value="">
              </div>
              <div class="con-campo">
              	<label class="fl">Apellido:</label>
                <input class="fr validate[required]" type="text" value="">
              </div>
              <div class="con-campo">
              	<label class="fl">Genero:</label>
                <select class="fr validate[required]">
                	<option value="">─</option>
                  <option value="1">Masculino</option>
                  <option value="2">Femenino</option>
                </select>
              </div>
              <div class="con-campo">
              	<label class="fl">Correo electrónico:</label>
                <input class="fr validate[required, custom[email]]" type="text" value="">
              </div>
              <div class="con-campo">
              	<label class="fl">País:</label>
                <select class="fr validate[required]">
                	<option value="">─</option>
                  <option value="1">País 1</option>
                  <option value="2">País 2</option>
                </select>
              </div>
              <div class="con-campo">
              	<label class="fl">Ciudad:</label>
                <select class="fr validate[required]">
                	<option value="">─</option>
                  <option value="1">Ciudad 1</option>
                  <option value="2">Ciudad 2</option>
                </select>
              </div>
            </div>
            <div class="form-col fl">
              <div class="con-campo">
              	<label class="fl">Fecha de nacimiento:</label>
                <input class="date-born fr" type="text" value="">
              </div>
            	<div class="con-campo">
              	<label class="fl">Profesión:</label>
                <input class="fr validate[required]" type="text" value="">
              </div>
              <div class="con-campo">
              	<label class="fl">Especialización:</label>
                <input class="fr validate[required]" type="text" value="">
              </div>
              <div class="con-campo">
              	<label class="fl">Celular / Teléfono:</label>
                <input class="fr validate[required, custom[phone]]" type="text" value="">
              </div>
              <div class="con-campo">
              	<label class="fl">Adjuntar archivo:</label>
                <input class="fr validate[required]" type="file" value="">
              </div>
              <div class="con-campo-submit">
              	<span class="icon-ok"></span>
              	<input class="fr submit-bt" type="submit" value="Enviar">
              </div>
            </div>
            <div class="arrow-tl"></div>
          	<div class="arrow-br"></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--<div class="con-modals">
  	<div id="modal-ok" class="cfx">
      <h1 class="main-title">Enviado</h1>
      <p>El formulario se ha enviado correctamente, pronto lo contáctaremos.</p>
    </div>
  </div>-->
    
<?php include("footer.php"); ?>