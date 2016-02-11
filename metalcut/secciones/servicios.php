<?php include("head.php"); ?>
	<?php include("header-int.php"); ?>
   <?php 
         $cPorta_= new Dbportafolio_servicios();
         $porta = $cPorta_->getList();
          $cant = count($porta);
         
        ?> 
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <div class="con-arbol">
          <!--Paso 1-->
          <div class="con-paso">
          	<h1>Portafolio de servicios</h1>
            <div class="paso">
              <ul class="slider-tree">
                  <?php 
                  foreach($porta as $obj) {
                      ?>
                  <li>
                	<div class="paso-item">
                    <h1><?php echo $obj['titulo'];?></h1>
                    <div class="paso-img">
                        <img src="assets/img/portafolio_servicios/<?php echo $obj['imagen']?>" width="191" height="98" alt="">                    
                    </div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                        <?php echo $obj['texto'];?>
                      </div>
                    </div>
                    <a href="index.php?base&seccion=servicio-<?php echo $obj['id']?>" class="vn-nav paso-item-p1"><div class="paso-bt-port"></div></a>
                  </div>
                </li>
                  <?php
                  }
                  ?>
              </ul>
            </div>
          </div>
          <!--Fin paso 1-->
          <div class="con-paso con-paso-fn clearfix"></div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>