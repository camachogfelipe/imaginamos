<?php include("head.php"); ?>
	<style type="text/css">#nav-bt2 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
	<?php include("header.php"); ?>

  <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1>Catálogo info<a class="back-bt" href="javascript:history.back()">« Volver</a></h1>
		    <div class="an-sp" id="an-cat"></div>
        <div class="con-catalogo-info">
        	<!--Fotos catálogo grandes-->
          <div class="con-catalogo-img fl">
          	<div class="catalogo-img catalogo-img-1" style="background:url(assets/img/catalogo-img-1.jpg);"><a class="catalogo-bt" href="pdf.pdf" target="_blank"><span></span>Descargar archivo</a></div>
            <div class="catalogo-img catalogo-img-2" style="background:url(assets/img/catalogo-img-2.jpg);"><a class="catalogo-bt" href="pdf.pdf" target="_blank"><span></span>Descargar archivo</a></div>
            <div class="catalogo-img catalogo-img-3" style="background:url(assets/img/catalogo-img-3.jpg);"><a class="catalogo-bt" href="pdf.pdf" target="_blank"><span></span>Descargar archivo</a></div>
            <div class="catalogo-img catalogo-img-4" style="background:url(assets/img/catalogo-img-4.jpg);"><a class="catalogo-bt" href="pdf.pdf" target="_blank"><span></span>Descargar archivo</a></div>
          </div>
          <!--Fin fotos catálogo grandes-->
          <div class="con-catalogo-car fl">
            <ul class="cat-slider">
            	<a class="an-din cat-act" data-id="catalogo-img-1" href="#an-cat">
                <li>
                  <div class="car-thum" style="background:url(assets/img/catalogo-img-1.jpg);"></div>
                  <h1>Lorem ipsum</h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </li>
              </a>
              <a class="an-din" data-id="catalogo-img-2" href="#an-cat">
                <li>
                  <div class="car-thum" style="background:url(assets/img/catalogo-img-2.jpg);"></div>
                  <h1>Lorem ipsum</h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </li>
              </a>
              <a class="an-din" data-id="catalogo-img-3" href="#an-cat">
                <li>
                  <div class="car-thum" style="background:url(assets/img/catalogo-img-3.jpg);"></div>
                  <h1>Lorem ipsum</h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </li>
              </a>
              <a class="an-din" data-id="catalogo-img-4" href="#an-cat">
                <li>
                  <div class="car-thum" style="background:url(assets/img/catalogo-img-4.jpg);"></div>
                  <h1>Lorem ipsum</h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </li>
              </a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
    
<?php include("footer.php"); ?>