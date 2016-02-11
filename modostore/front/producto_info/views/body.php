
	<style type="text/css">#nav-act-3 {color:#ff902c;} #nav-act-3 span {opacity:1; filter:alpha(opacity=99); -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=99)";}</style>
	
  
  <a class="back-bt tr" href="<?php echo base_url(); ?>javascript:history.back()">« Volver</a>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <h1 class="pro-title">Nombre del producto</h1>
        <div class="con-pro-gal fl">
         
            <div class="con-pro-img-b cfx">
           <?php foreach ($productos as $producto) : ?>  
                <div class="pro-img-b pro-img-b-<?php echo $producto->imagen_id; ?>"><img src="<?php echo base_url().$producto->imagen_path; ?>" height="396" width="396" alt=""></div>
          <?php endforeach;?>
            </div>
          <div class="con-pro-img-s cfx">
             <?php 
             $i = 0; 
             foreach ($productos as $producto) : ?>    
            <a class="pro-img-s fl tr <?php echo ($i==0)?"pro-thum-act":""; $i++; ?>" data-id="pro-img-b-<?php echo $producto->imagen_id; ?>"><img src="<?php echo base_url().$producto->imagen_path; ?>" height="65" width="65" alt=""><span class="op"></span></a>
           <?php endforeach;?>
          </div>
        </div>
        <div class="con-pro-info fr">
          <div class="pro-info">
            <ul class="cfx">
               <?php foreach ($caracteristicas as $caracteristica) : ?>        
            	<li><span><img src="<?php echo base_url(); ?>assets/img/producto-check.png" height="24" width="24" alt=""></span><?php echo $caracteristica->tipo.": ".$caracteristica->valor; ?></li>
               <?php endforeach;?>
            </ul>
          </div>
          <div class="pro-info">
          	<h1>Características</h1>
                <p><?php echo strip_tags($productos->descripcion); ?></p>
            <form action="" class="cfx" method="post">
            	<input class="compra-bt fr tr" type="submit" value="COMPRAR">
            </form>
          </div>
          <div class="pro-info">
          	<h1>Garantía</h1>
            <p><?php echo strip_tags($productos->garantia); ?></p>
          </div>
          <div class="pro-info">
          	<h1>Tiempo de entrega</h1>
            <p><?php echo strip_tags($productos->tiempo_entrega); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

