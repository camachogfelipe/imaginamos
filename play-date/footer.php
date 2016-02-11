

<div class="footer">
  <div class="margen">
    <div class="footer-left">
      <div class="titulo">Play Date</div>
      <div class="texto-1">línea Nacional<br />
        <span class="telefono">0571/5623260</span></div>
      <div class="texto-2">Bogotá - Colombia</div>
      <div class="texto-3">Carrera 123 No. 45 - 26, Ofi. 123 A</div>
      <div class="texto-3">Tel: + 57 (1) 5472290 / Fax: + 57 (1) 6013041</div>
      <div class="texto-3">info@playdate.com</div>
    </div>
    <form action="" method="POST" class="footer-right" id="seb">
      <div class="titulo">Formulario de Contacto</div>
      <div class="left">
        <input  name="nombre" type="text" value="Nombre Completo:" class="validate[required]" data-validation-placeholder="Nombre Completo:" onblur="javascript:if(this.value=='') this.value='Nombre Completo:';" onfocus="javascript:if(this.value=='Nombre Completo:') this.value='';"/>
        <input  name="direccion" type="text" value="Dirección:" class="validate[required]" data-validation-placeholder="Dirección:" onblur="javascript:if(this.value=='') this.value='Dirección:';" onfocus="javascript:if(this.value=='Dirección:') this.value='';" />
        <input  name="telefono" type="text" value="Teléfono:" class="validate[required]" data-validation-placeholder="Teléfono:" onblur="javascript:if(this.value=='') this.value='Teléfono:';" onfocus="javascript:if(this.value=='Teléfono:') this.value='';" />
        <input name="email" type="text" value="Correo electrónico:" class="validate[required,custom[email]]" data-validation-placeholder="Correo electrónico:" onblur="javascript:if(this.value=='') this.value='Correo electrónico:';" onfocus="javascript:if(this.value=='Correo electrónico:') this.value='';" />
      </div>
      <div class="right">
        <textarea name="coment" cols="" rows="">Comentario:</textarea>
        <input  value="" type="submit" class="boton-enviar" />
        <input type="hidden" name="grabar" value="si"/>
        <?php 
        if(isset($_POST['grabar']) and $_POST['grabar'] ==  'si'){
            //print_r($_POST);
            
                       $obj = new Validar();
                      $obj->enviar_email2();
            
        }
        ?>
      </div>
    </form>
    <div class="clear"></div>
    <div class="copyright">© 2013 <strong>PLAYDATE</strong> - Todos los derechos reservados - Prohibida su reproducción parcial o total</div>
    <div class="footer-ahorranito"></div>
  </div>
</div>
