
	<style type="text/css">#nav-act-2 {color:#ff902c;} #nav-act-2 span {opacity:1; filter:alpha(opacity=99); -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=99)";}</style>
	
  
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <h1 class="pro-title">Productos nuevos</h1>
        <div class="con-greats">
        	<div class="great great-int"><!--op-->
            <?php foreach ($productos_new as $producto_new): ?>
             <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url().$producto_new->imagen_path; ?>" alt=""></div>
              <h1 class="tr" id="great-title"><?php echo strtoupper($producto_new->nombre); ?></h1>
              <h1 class="tr" id="great-ref">Marca: <?php echo $producto_new->marca; ?></h1>
              <p class="tr"><?php echo substr(strip_tags($producto_new->descripcion),0,100)."..."; ?></p>
              <h1 class="tr" id="great-cost"><?php echo $producto_new->precio; ?></h1>
              <div class="con-great-bts"><a class="great-bt-1 tr add_to_cart" data-url="<?php echo  base_url()."carrito/add_to_cart"; ?>" data-datos="id=<?php echo $producto_new->id; ?>"  href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info/index/<?php echo $producto_new->id; ?>">VER MÁS</a></div>
            </div>
            <?php endforeach; ?>
             <!--       <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url(); ?>assets/img/great-img-2.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost">$789.500</h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info">VER MÁS</a></div>
            </div>
            <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url(); ?>assets/img/great-img-3.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost">$789.500</h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info">VER MÁS</a></div>
            </div> -->
          </div>
        </div>
        <h1 class="pro-title">Promociones del mes</h1>
        <div class="con-greats">
        	<div class="great great-int great-f2"><!--op-->
            <?php foreach ($promociones as $promocion): ?>
             <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url().$promocion->imagen_path; ?>" alt=""></div>
              <h1 class="tr" id="great-title"><?php echo strtoupper($promocion->nombre); ?></h1>
              <h1 class="tr" id="great-ref">Marca: <?php echo $promocion->marca; ?></h1>
              <p class="tr"><?php echo substr(strip_tags($promocion->descripcion),0,100)."..."; ?></p>
              <h1 class="tr" id="great-cost"><span class="fl">Antes: <?php echo $promocion->promociones_antes; ?></span><span class="fr">Ahora: <?php echo $promocion->promociones_ahora; ?></span></h1>
              <div class="con-great-bts"><a class="great-bt-1 tr add_to_cart"  data-url="<?php echo  base_url()."carrito/add_to_cart"; ?>" data-datos="id=<?php echo $promocion->id; ?>"  href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info/index/<?php echo $promocion->id; ?>">VER MÁS</a></div>
            </div>
            <?php endforeach; ?>
                <!--    
                    <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url(); ?>assets/img/great-img-1.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost"><span class="fl">Antes: $789.500</span><span class="fr">Ahora: $789.500</span></h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info">VER MÁS</a></div>
            </div>
            <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url(); ?>assets/img/great-img-2.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost"><span class="fl">Antes: $789.500</span><span class="fr">Ahora: $789.500</span></h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info">VER MÁS</a></div>
            </div>
            <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url(); ?>assets/img/great-img-3.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost"><span class="fl">Antes: $789.500</span><span class="fr">Ahora: $789.500</span></h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info">VER MÁS</a></div>
            </div>  -->
          </div>
        </div>
         <?php if(!empty($producto_ventas->nombre)):?>   
        <h1 class="pro-title">Top 3 de lo más vendido</h1>
        <div class="con-greats">
        	<div class="great great-int great-f3"><!--op-->
          <?php foreach ($producto_ventas as $producto_venta): ?>	
               <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url().$producto_venta->imagen_path; ?>" alt=""></div>
                <h1 class="tr" id="great-title"><?php echo strtoupper($producto_venta->nombre); ?></h1>
              <h1 class="tr" id="great-ref">Marca: <?php echo $producto_venta->marca; ?></h1>
              <p class="tr"><?php echo substr(strip_tags($producto_venta->descripcion),0,100)."..."; ?></p>
              <h1 class="tr" id="great-cost">$<?php echo $producto_venta->precio; ?></h1>
              <div class="con-great-bts"><a class="great-bt-1 tr add_to_cart"  data-url="<?php echo  base_url()."carrito/add_to_cart"; ?>" data-datos="id=<?php echo $producto_venta->id; ?>"  href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info/index/<?php echo $producto_venta->id; ?>">VER MÁS</a></div>
            </div>
           <?php endforeach; ?>         
         <!--   <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url(); ?>assets/img/great-img-2.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost">$789.500</h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info">VER MÁS</a></div>
            </div>
            <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url(); ?>assets/img/great-img-3.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost">$789.500</h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info">VER MÁS</a></div>
            </div> -->
          </div>
        </div>
         <?php endif; ?>  
      </div>
    </div>
  </section>

