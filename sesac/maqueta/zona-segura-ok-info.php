<?php include("head.php"); ?>
	<style type="text/css">.nav-login .login-bt {display:none;} .grl-form {background:none; padding:0;} .grl-form .form-col {margin: 0 0 0 15px; width:auto;} .grl-form .form-col .con-campo input {margin: 0 0 0 15px;}</style>
	<?php include("header.php"); ?>
  
  <div class="con-login">
  	<div class="mg-login cfx">
    	<form action="index.php" class="grl-form" method="post">
      	<div class="form-col fr">
          <div class="con-campo-submit">
            <span class="icon-ok"></span>
            <input class="fr submit-bt" type="submit" value="Logout">
          </div>
        </div>
        <div class="form-col fr">
        	<div class="con-campo">
          	<a class="media-bt" href="javascript:history.back()"><span class="icon-b"></span>Volver</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <h1 class="main-title">Bienvenido usuario</h1>
        <div class="bien-tx contact-tx">
          <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim</p>
        </div>
        <div class="con-dw">
          <div class="lista-dw">
          	<div class="con-fila con-fila-head">
            	<div class="dw-col fl">Fecha</div>
              <div class="dw-col dw-col-tc fl">Nombre</div>
              <div class="dw-col fl">Acción</div>
            </div>
          	<div class="con-items-dw">
            	<div class="scroll-wrap">
              	<!--Fila descargas-->
              	<div class="con-fila fl">
                  <div class="dw-col fl">01/01/2013</div>
                  <div class="dw-col dw-col-tc fl">Lorem ipsum</div>
                  <div class="dw-col dw-col-tl fl"><a class="media-bt" href="pdf.pdf" target="_blank"><span class="icon-dl"></span>Descargar archivo</a></div>
                </div>
                <!--Fila descargas-->
                <div class="con-fila fl">
                  <div class="dw-col fl">01/01/2013</div>
                  <div class="dw-col dw-col-tc fl">Lorem ipsum</div>
                  <div class="dw-col dw-col-tl fl"><a class="media-bt" href="pdf.pdf" target="_blank"><span class="icon-dl"></span>Descargar archivo</a></div>
                </div>
                <!--Fila descargas-->
                <div class="con-fila fl">
                  <div class="dw-col fl">01/01/2013</div>
                  <div class="dw-col dw-col-tc fl">Lorem ipsum</div>
                  <div class="dw-col dw-col-tl fl"><a class="media-bt" href="pdf.pdf" target="_blank"><span class="icon-dl"></span>Descargar archivo</a></div>
                </div>
                <!--Fila descargas-->
                <div class="con-fila fl">
                  <div class="dw-col fl">01/01/2013</div>
                  <div class="dw-col dw-col-tc fl">Lorem ipsum</div>
                  <div class="dw-col dw-col-tl fl"><a class="media-bt" href="pdf.pdf" target="_blank"><span class="icon-dl"></span>Descargar archivo</a></div>
                </div>
                <!--Fila descargas-->
                <div class="con-fila fl">
                  <div class="dw-col fl">01/01/2013</div>
                  <div class="dw-col dw-col-tc fl">Lorem ipsum</div>
                  <div class="dw-col dw-col-tl fl"><a class="media-bt" href="pdf.pdf" target="_blank"><span class="icon-dl"></span>Descargar archivo</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="con-up fl" id="an-up">
          	<a class="an-din media-bt ul-bt" href="#an-up"><span class="icon-ul"></span>Subir archivo</a>
            <h1 class="main-title">Adjuntar archivo</h1>
          	<div class="datos-up fr">
            	<form action="zona-segura-ok.php" class="grl-form" method="post">
                <div class="form-col fr">
                  <div class="con-campo-submit">
                    <span class="icon-ul"></span>
                    <input class="fr submit-bt" type="submit" value="Subir archivo">
                  </div>
                </div>
                <div class="form-col fr">
                  <div class="con-campo">
                    <input class="fl validate[required]" placeholder="Nombre del archivo..." type="text" value="">
                    <input class="fr validate[required]" type="file" value="">
                  </div>
                </div>
              </form>
              <div class="arrow-tl"></div>
          		<div class="arrow-br"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
<?php include("footer.php"); ?>