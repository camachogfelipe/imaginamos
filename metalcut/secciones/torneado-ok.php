<?php include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); ?>
  
  <script type="text/javascript">function soloNumeros(evt){if(window.event){keynum = evt.keyCode;}else{keynum = evt.which;}if(keynum>47 && keynum<58){return true;}else{return false;}}</script>
    
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <div class="con-full">
          <h1>
            Resultado
            <a href="javascript:history.back()"><div class="back-vn"></div></a>
          </h1>
          <div class="sep-line"></div>
          <div class="con-torn-img"><img src="assets/img/torneado-img-rs.jpg" width="396" height="450" alt=""></div>
          <div class="con-torn-info">
            <div class="torn-hd">
              <h1>Resumen</h1>
            </div>
            <div class="torn-info">
              <div class="scroll-wrap">
                <ul>
                  <li><strong>Titulo</strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee</li>
                  <li><strong>Titulo</strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee</li>
                  <li><strong>Titulo</strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee</li>
                  <li><strong>Titulo</strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee</li>
                  <li><strong>Titulo</strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee</li>
                  <li><strong>Titulo</strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee</li>
                </ul>
              </div>
            </div>
            <div class="torn-fn">
            	<form class="torn-fm">
              	<fieldset>
                	<label>
                  	<strong>Costo:</strong>
                    <strong class="costo">$999´999.999</strong>
                  </label>
                  <label>
                  	<strong>Cantidad:</strong>
                  	<input placeholder="0" onkeypress="return soloNumeros(event)" onpaste="return soloNumeros(event)">
                  </label>
                </fieldset>
                <fieldset>
                	<a href="#modal-ref" class="submit-torn modals-act"></a>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
  <div class="con-modals">
    <div id="modal-rec-ok">
      <h1>Información enviada correctamente.</h1>
      <p>Ya puede ingresar a nuestro sistema.</p>
    </div>
  </div>
  
<?php include("footer.php"); ?>