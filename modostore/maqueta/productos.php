<?php include("head.php"); ?>
	<style type="text/css">#nav-act-3 {color:#ff902c;} #nav-act-3 span {opacity:1; filter:alpha(opacity=99); -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=99)";}</style>
	<?php include("header.php"); ?>
  
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <div class="con-int-src">
        	<h1>Buscador por filtro</h1>
          <form action="resultados.php" class="fiters-form cfx" method="post">
          	<div class="src-select fl tr">
              <select id="step-1">
                <option value="">Marca del vehículo</option>
                <option value="step-0">&nbsp; &bull; &nbsp; Opción</option>
                <option value="step-0">&nbsp; &bull; &nbsp; Opción</option>
                <option value="step-0">&nbsp; &bull; &nbsp; Opción</option>
              </select>
            </div>
            <div class="src-select fl tr">
              <select class="filter-1" id="step-2">
                <option value="">Modelo</option>
                <option value="step-1">&nbsp; &bull; &nbsp; Opción</option>
                <option value="step-1">&nbsp; &bull; &nbsp; Opción</option>
                <option value="step-1">&nbsp; &bull; &nbsp; Opción</option>
              </select>
            </div>
            <div class="src-select fl tr">
              <select class="filter-2" id="step-3">
                <option value="">Tipo de repuesto</option>
                <option value="step-2">&nbsp; &bull; &nbsp; Opción</option>
                <option value="step-2">&nbsp; &bull; &nbsp; Opción</option>
                <option value="step-2">&nbsp; &bull; &nbsp; Opción</option>
              </select>
            </div>
            <div class="src-select fl tr">
              <select class="filter-3" id="step-4">
                <option value="">Nombre del producto</option>
                <option value="step-3">&nbsp; &bull; &nbsp; Opción</option>
                <option value="step-3">&nbsp; &bull; &nbsp; Opción</option>
                <option value="step-3">&nbsp; &bull; &nbsp; Opción</option>
              </select>
            </div>
            <div class="src-select fl tr">
              <select class="filter-4">
                <option value="">Marca del producto</option>
                <option value="step-4">&nbsp; &bull; &nbsp; Opción</option>
                <option value="step-4">&nbsp; &bull; &nbsp; Opción</option>
                <option value="step-4">&nbsp; &bull; &nbsp; Opción</option>
              </select>
            </div>
            <input class="filter-submit fr tr" type="submit" value="BUSCAR">
          </form>
        </div>
        <h1 class="pro-title">Lista de productos</h1>
        <div class="pro-can fl">
        	<p class="fl">6 de 24 productos</p>
          <form action="" class="can-form cfx fr" method="post">
            <div class="src-select fr tr">
              <select>
                <option value="">&nbsp; &bull; &nbsp; Ver 6 productos</option>
                <option value="">&nbsp; &bull; &nbsp; Ver 12 productos</option>
                <option value="">&nbsp; &bull; &nbsp; Ver 18 productos</option>
                <option value="">&nbsp; &bull; &nbsp; Ver 24 productos</option>
                <option value="">&nbsp; &bull; &nbsp; Ver 30 productos</option>
                <option value="">&nbsp; &bull; &nbsp; Ver todos los productos</option>
              </select>
            </div>
          </form>
          <div class="con-pag-pro fr">
            <a href="#">Último</a>
            <a href="#">Sig.</a>
            <p>...</p>
            <a href="#">100</a>
            <a href="#">99</a>
            <a class="pag-act" href="#">98</a>
            <p>...</p>
            <a href="#">Ant.</a>
            <a href="#">Primero</a>
          </div>
        </div>
        <!--Fila productos x3-->
        <div class="con-greats">
        	<div class="great great-int">
          	<div class="great-item fl tr">
            	<div class="fig-great"><img src="assets/img/great-img-1.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost">$789.500</h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="producto-info.php">VER MÁS</a></div>
            </div>
            <div class="great-item fl tr">
            	<div class="fig-great"><img src="assets/img/great-img-2.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost">$789.500</h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="producto-info.php">VER MÁS</a></div>
            </div>
            <div class="great-item fl tr">
            	<div class="fig-great"><img src="assets/img/great-img-3.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost">$789.500</h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="producto-info.php">VER MÁS</a></div>
            </div>
          </div>
        </div>
        <!--Fin fila productos x3-->
        <!--Fila productos x3-->
        <div class="con-greats">
        	<div class="great great-int">
          	<div class="great-item fl tr">
            	<div class="fig-great"><img src="assets/img/great-img-1.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost"><span class="fl">Antes: $789.500</span><span class="fr">Ahora: $789.500</span></h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="producto-info.php">VER MÁS</a></div>
            </div>
            <div class="great-item fl tr">
            	<div class="fig-great"><img src="assets/img/great-img-2.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost"><span class="fl">Antes: $789.500</span><span class="fr">Ahora: $789.500</span></h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="producto-info.php">VER MÁS</a></div>
            </div>
            <div class="great-item fl tr">
            	<div class="fig-great"><img src="assets/img/great-img-3.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost"><span class="fl">Antes: $789.500</span><span class="fr">Ahora: $789.500</span></h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="producto-info.php">VER MÁS</a></div>
            </div>
          </div>
        </div>
        <!--Fin fila productos x3-->
      </div>
    </div>
  </section>

<?php include("footer.php"); ?>