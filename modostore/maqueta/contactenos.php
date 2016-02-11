<?php include("head.php"); ?>
	<style type="text/css">#nav-act-5 {color:#ff902c;} #nav-act-5 span {opacity:1; filter:alpha(opacity=99); -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=99)";}</style>
	<?php include("header.php"); ?>
  
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <h1 class="pro-title">Contáctenos</h1>
        <div class="con-info-contact cfx">
        	<div class="info-contact fl">
          	<h1>Nuestros datos de contacto</h1>
            <p><strong>Dirección: </strong>Carrera 999 # 999-999 Edf. 999 Apto. 999</p>
            <p><strong>Teléfono: </strong>(+578) 999 9999</p>
            <p><strong>Correo electrónico: </strong><a class="tr" href="mailto:#" target="_blank">loremipsum@modostore.com.co</a></p>
            <p><strong>Ciudad: </strong>Pereira</p>
          </div>
          <div class="info-contact info-map fr">
          	<iframe width="446" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/ms?msa=0&amp;msid=210883790538219805436.0004ea84c1d5de6798832&amp;hl=es-419&amp;ie=UTF8&amp;t=m&amp;ll=4.891204,-75.698547&amp;spn=0.684141,1.233215&amp;z=9&amp;output=embed"></iframe>
          </div>
        </div>
        <form action="" class="grl-form cfx" method="post">
        	<h1>Formulario de contacto</h1>
          <div class="grl-col fl">
            <input class="tr validate[required]" placeholder="Nombre" type="text">
            <input class="tr validate[required, custom[phone]]" placeholder="Teléfono" type="text">
          </div>
          <div class="grl-col fr">
            <input class="tr validate[required, custom[email]]" placeholder="Correo electrónico" type="text">
            <input class="tr validate[required, custom[phone]]" placeholder="Celular" type="text">
          </div>
          <div class="grl-col-b fr">
          	<textarea class="tr validate[required]" placeholder="Comentarios"></textarea>
          </div>
          <div class="con-grl-bts">
            <input class="grl-submit fr tr" type="submit" value="ENVIAR">
          </div>
        </form>
      </div>
    </div>
  </section>
  <div class="call-bt"><a href="javascript:void(0);" yodi="D0FEB8E7C671ED75BF75F2B7F5B9EE8E"></a></div>
  <div class="con-modals">
  	<div class="info-modal cfx" id="modal-ok">
    	<h1>Formulario enviado</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
  </div>

<?php include("footer.php"); ?>