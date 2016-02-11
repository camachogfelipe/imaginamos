<div class="content_int clearfix">
	<h1 class="bebas main-title"><span>Preguntas</span></h1>
  <div class="tab_preguntas bebas clearfix">
    <a class="left tab_activo btn_contacto" href="javascript:void(0);">Contacto</a>
    <a class="left btn_faq" href="javascript:void(0);">Preguntas frecuentes</a>
  </div>
  
  <div class="content_tab content_contacto">
    <div class="main_p">
      <p>
      Para atender tus comentarios, sugerencias o inquietudes, puedes contactarnos llenando los siguientes datos.
      </p>
    </div>
      <form class="form_contacto" method="post" action="<?php echo base_url()."preguntas/enviar_email" ?>">
      <div class="clearfix">
      <div class="left">
          <input type="text" name="nombre" class="input1 validate[required]" placeholder="Nombre" />
          <input type="text" name="email" class="input1 validate[required, custom[email]]" placeholder="Correo electrónico" />
          <input type="text" name="direccion" class="input1" placeholder="Dirección" />
          <input type="text" name="telefono" class="input1 validate[required, custom[phone]]" placeholder="Teléfono" />
        <input type="text" name="celular" class="input1" placeholder="Celular" onkeypress="return justNumbers(event);"  />
      </div>
      <div class="right">
        <select class="select_contact select1">
          <option value="" >Ciudad</option>
          <?php foreach ($municipios as $value): ?>
          <option value="<?php echo $value->nombre; ?>"><?php echo $value->nombre; ?></option>
         <?php endforeach; ?>
        </select>
          <textarea name="comentario" class="textarea1 validate[required]" placeholder="Comentario"></textarea>
      </div>
      </div>
      <input type="submit" class="submit1" value="Enviar" />
    </form>
    
  </div>
  
  
  <div class="content_tab content_faq">
    
      <?php foreach ($pqr as $p) :?>
      <div class="item_acord">
      <div class="btn_acord clearfix bebas">
        <h3 class="left "><?php echo $p->pregunta; ?></h3>
        <div class="indic_btn_acord item_cerrado"></div>
      </div>
      <div class="content_acord">
        <div class="clearfix">
          <div class="main_p">
          <?php echo $p->respuesta; ?>
          </div>
        </div>
      </div>
    </div>
     <?php endforeach; ?> 
  <!-- <div class="item_acord">
      <div class="btn_acord clearfix bebas">
        <h3 class="left ">Pregunta 1 lorem ipsum</h3>
        <div class="indic_btn_acord item_cerrado"></div>
      </div>
      <div class="content_acord">
        <div class="clearfix">
          
          <p class="main_p">
          
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat porttitor neque, rutrum gravida dolor ullamcorper a. In sed dapibus augue. Aliquam nisl elit, consectetur a eros eget, volutpat interdum nulla. Quisque fermentum lorem dolor, fermentum mollis turpis commodo non. In tempor, nulla vel egestas sagittis, arcu sapien dapibus lorem, fringilla vulputate nunc quam id mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt neque et urna pellentesque, id suscipit libero hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque mauris nisl, adipiscing posuere velit non, congue egestas ipsum. Quisque sagittis velit eu purus mattis vulputate. Morbi tristique, eros vitae commodo dictum, libero arcu rhoncus sapien, vitae venenatis tellus ante a eros.<br /><br />
  
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat porttitor neque, rutrum gravida dolor ullamcorper a. In sed dapibus augue. Aliquam nisl elit, consectetur a eros eget, volutpat interdum nulla. Quisque fermentum lorem dolor, fermentum mollis turpis commodo non. In tempor, nulla vel egestas sagittis, arcu sapien dapibus lorem, fringilla vulputate nunc quam id mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt neque et urna pellentesque, id suscipit libero hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque mauris nisl, adipiscing posuere velit non, congue egestas ipsum. Quisque sagittis velit eu purus mattis vulputate. Morbi tristique, eros vitae commodo dictum, libero arcu rhoncus sapien, vitae venenatis tellus ante a eros.
          </p>
        </div>
      </div>
    </div>
    <div class="item_acord">
      <div class="btn_acord clearfix bebas">
        <h3 class="left ">Pregunta 1 lorem ipsum</h3>
        <div class="indic_btn_acord item_cerrado"></div>
      </div>
      <div class="content_acord">
        <div class="clearfix">
          
          <p class="main_p">
          
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat porttitor neque, rutrum gravida dolor ullamcorper a. In sed dapibus augue. Aliquam nisl elit, consectetur a eros eget, volutpat interdum nulla. Quisque fermentum lorem dolor, fermentum mollis turpis commodo non. In tempor, nulla vel egestas sagittis, arcu sapien dapibus lorem, fringilla vulputate nunc quam id mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt neque et urna pellentesque, id suscipit libero hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque mauris nisl, adipiscing posuere velit non, congue egestas ipsum. Quisque sagittis velit eu purus mattis vulputate. Morbi tristique, eros vitae commodo dictum, libero arcu rhoncus sapien, vitae venenatis tellus ante a eros.<br /><br />
  
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat porttitor neque, rutrum gravida dolor ullamcorper a. In sed dapibus augue. Aliquam nisl elit, consectetur a eros eget, volutpat interdum nulla. Quisque fermentum lorem dolor, fermentum mollis turpis commodo non. In tempor, nulla vel egestas sagittis, arcu sapien dapibus lorem, fringilla vulputate nunc quam id mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt neque et urna pellentesque, id suscipit libero hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque mauris nisl, adipiscing posuere velit non, congue egestas ipsum. Quisque sagittis velit eu purus mattis vulputate. Morbi tristique, eros vitae commodo dictum, libero arcu rhoncus sapien, vitae venenatis tellus ante a eros.
          </p>
        </div>
      </div>
    </div>
    <div class="item_acord">
      <div class="btn_acord clearfix bebas">
        <h3 class="left ">Pregunta 1 lorem ipsum</h3>
        <div class="indic_btn_acord item_cerrado"></div>
      </div>
      <div class="content_acord">
        <div class="clearfix">
          
          <p class="main_p">
          
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat porttitor neque, rutrum gravida dolor ullamcorper a. In sed dapibus augue. Aliquam nisl elit, consectetur a eros eget, volutpat interdum nulla. Quisque fermentum lorem dolor, fermentum mollis turpis commodo non. In tempor, nulla vel egestas sagittis, arcu sapien dapibus lorem, fringilla vulputate nunc quam id mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt neque et urna pellentesque, id suscipit libero hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque mauris nisl, adipiscing posuere velit non, congue egestas ipsum. Quisque sagittis velit eu purus mattis vulputate. Morbi tristique, eros vitae commodo dictum, libero arcu rhoncus sapien, vitae venenatis tellus ante a eros.<br /><br />
  
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat porttitor neque, rutrum gravida dolor ullamcorper a. In sed dapibus augue. Aliquam nisl elit, consectetur a eros eget, volutpat interdum nulla. Quisque fermentum lorem dolor, fermentum mollis turpis commodo non. In tempor, nulla vel egestas sagittis, arcu sapien dapibus lorem, fringilla vulputate nunc quam id mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt neque et urna pellentesque, id suscipit libero hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque mauris nisl, adipiscing posuere velit non, congue egestas ipsum. Quisque sagittis velit eu purus mattis vulputate. Morbi tristique, eros vitae commodo dictum, libero arcu rhoncus sapien, vitae venenatis tellus ante a eros.
          </p>
        </div>
      </div>
    </div> -->
  </div>
</div>  
 <?php if($newletter_send == true): ?>
 	<div class="con-modals">
    <div class="info-modal cfx" id="modal-ok">
         <h1>SUSCRIPCION EXITOSA!</h1>
    	 <p>Gracias por suscribite...!</p>
  	</div>
  </div>
<?php endif; ?>
 <?php if($email_send == true): ?>
 	<div class="con-modals">
    <div class="info-modal cfx" id="modal-ok">
         <h1>FORMULARIO ENVIADO!</h1>
    	 <p>Gracias por contactarnos, pronto nos pondremos en contacto con usted...!</p>
  	</div>
  </div>
<?php endif; ?>

