<?php 
$obj = new Pintar();
$pintar = $obj->Pintarfooter();
$contac = $obj->PintarContactenos();
?>	
<div class="footer">
  	<div class="footer-top"></div>
  	<div class="margen-footer">
      <div class="footer-content">
        <div class="footer-col-1">
          <h5><?php echo $pintar[0]['nosotros_title']?></h5>
          <p class="p-footer"><?php  
			$txt = utf8_encode($pintar[0]['nosotros_article']);
			$txt = nl2br($txt);				
			echo $txt;
		  
			//echo $pintar[0]['nosotros_article']
		  
		  ?></p>
          <div class="sep"></div>
          <h5 class="follow">Síguenos</h5>
          <div class="redes-footer">
          	<a href="#" target="_blank"><div class="footer-red-1"></div></a>
            <a href="#" target="_blank"><div class="footer-red-2"></div></a>
          </div>
        </div>
        <div class="footer-col-2">
          <h5>Mapa del sitio</h5>
          <ul class="lista-footer">
            <a href="index.php"><li><p>Home</p></li></a>
            <div class="sep-2"></div>
            <a href="nosotros.php"><li><p>Quiénes somos</p></li></a>
            <div class="sep-2"></div>
            <a href="catalogos.php"><li><p>Catálogos</p></li></a>
            <div class="sep-2"></div>
            <a href="productos.php"><li><p>Productos</p></li></a>
            <div class="sep-2"></div>
            <a href="novedades.php"><li><p>Novedades</p></li></a>
            <div class="sep-2"></div>
            <a href="distribuidores.php"><li><p>Distribuidores</p></li></a>
            <div class="sep-2"></div>
            <a href="contacto.php"><li><p>Contáctenos</p></li></a>
          </ul>
        </div>
        <div class="footer-col-3">
        	<h5>Contáctenos</h5>
          <div class="slide-footer">
          	<div id="page-sedes"> 
              <div class="sedes-wrap">
                
                  <ul id="slider-footer" class="multiple">
                  <?php for ($i = 0; $i < count($contac); $i++) {?>
                         
                     
                      <li>
                  	<div class="sede-footer">
                            <p class="t-sede"><?php echo utf8_encode($contac[$i]['contacto_title']) ?></p>
                    	<p class="p-sede">
                        <?php echo nl2br(utf8_encode($contac[$i]['contacto_article']))?>
                          
                      </p>
                    	<div class="con-mapa-footer">
                      	<div class="mapa">
                        	<?php echo $contac[$i]['contacto_mapa']?>
                        </div>
                      </div>
                    </div>
                  </li>
                  <?php }?>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sep"></div>
        <div class="footer-derechos">
        	<p>&copy; 2013 TECNOSALUD. Todos los derechos reservados</p>
          <div class="footer-ahorranito"></div> 
        </div>
      </div>
    </div>
  </div>