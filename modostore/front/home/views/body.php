
	
  
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <!--Slider-->
        <div class="con-slider-b">
          <div class="slider-src">
          	<h1>Buscador</h1>
            <form action="<?php echo base_url()."productos/" ?>" class="slider-src-form cfx" method="post">
              <div class="slider-src-col slider-src-col-2 fl">
                <label for="car"><span class="icon-label-1"></span>Marca del vehículo</label>
                <div class="src-select tr">
                	<select name="vehiculo" data-url="<?php echo base_url()."productos/filtro_modelo/" ?>" id="step-1" >
                		<option>Escoger</option>
                  	 <?php foreach ($marcas as $marca): ?>
                               <option  value="<?php echo $marca->id ?>">&nbsp; &bull; &nbsp; <?php echo strtoupper($marca->nombre); ?></option>
                         <?php endforeach;  ?>
                	</select>
                </div>
              </div>
              <div class="slider-src-col slider-src-col-2 fr">
                <label for="car"><span class="icon-label-2"></span>Modelo</label>
                <div class="src-select tr">
                	<select name="modelo" data-url="<?php echo base_url()."productos/filtro_tipo/" ?>" class="filter-1" readonly id="step-2" >
                		
                  	</select>
                </div>
              </div>
              <div class="slider-src-col slider-src-col-1 fl">
                <label for="car"><span class="icon-label-3"></span>Tipo de repuesto</label>
                <!--input class="tr" placeholder="Escoger" type="text"-->
                <div class="src-select tr">
                	<select  name="tipo" data-url="<?php echo base_url()."productos/filtro_producto/" ?>" class="filter-2"  readonly id="step-3" >
                		
                	</select>
                </div>
              </div>
              <div class="slider-src-col slider-src-col-1 fl">
                  <label for="car"><span class="icon-label-4"></span>Nombre del producto</label>
                 <!--input class="tr" placeholder="Escoger" type="text"-->
                 <div class="src-select tr">
                	<select name="nombre" data-url="<?php echo base_url()."productos/filtro_producto_marca/" ?>" class="filter-3" readonly id="step-4" >
                	
                	</select>
               </div>
              </div>
              <div class="slider-src-col slider-src-col-1 fl">
                <label for="car"><span class="icon-label-5"></span>Marca del producto</label>
                <!--input class="tr" placeholder="Escoger" type="text"-->
                <div class="src-select tr">
                	<select name="marca" class="filter-4" readonly id="step-5">
                	</select>
                </div>
              </div>
              <input class="src-submit fr tr" name="bt_buscar" type="submit" value="BUSCAR">
          	</form>  
            <div class="logo-pagos"><img src="<?php echo base_url(); ?>assets/img/pagos-img.png" height="40" width="130" alt=""></div>
            <ul class="logo-tarjetas">
            	<li><img src="<?php echo base_url(); ?>assets/img/tarjeta-1.png" height="26" width="44" alt=""></li>
              <li><img src="<?php echo base_url(); ?>assets/img/tarjeta-2.png" height="26" width="44" alt=""></li>
              <li><img src="<?php echo base_url(); ?>assets/img/tarjeta-3.png" height="26" width="44" alt=""></li>
              <li><img src="<?php echo base_url(); ?>assets/img/tarjeta-4.png" height="26" width="44" alt=""></li>
            </ul>
          </div>
          <div class="con-slider-home fr">
          	<ul class="home-slider">
            
                <?php 
                foreach ($banners as $banner) :?>    
                <!--Slide-->
            	<li>
              	<div class="slide-img"><img src="<?php echo base_url().$banner->imagen_path; ?>" height="470" width="640"></div>
                <div class="slide-cp">
                	<h1><?php echo $banner->titulo_negro; ?></h1>
                  <h2><?php echo $banner->titulo_azul; ?></h2>
                  <h3><?php echo $banner->titulo_gris; ?></h3>
                </div>
              </li>
              <!--Fin slide-->
             <?php endforeach; ?>
            
            </ul>
          </div>
					<div class="slider-br slider-br-tr"></div><div class="slider-br slider-br-br"></div>
        </div>
        <!--Fin slider-->
      </div>
    </div>
  </section>
  <section>
    <div class="con-section">
    	<div class="con-great-nav">
      	<ul class="mg-great-nav">
                
           <?php foreach ($categorias as $categoria) : ?>  
            <li>
          	<a class="tr" href="<?php echo base_url(); ?>productos/productos_catgoria/<?php echo $categoria->id; ?>">
            	<figure><img src="<?php echo base_url().$categoria->imagen_path; ?>" height="74" width="120" alt=""></figure>
                <h1><?php echo strtoupper($categoria->titulo); ?></h1>
            </a>
          </li>
          <?php endforeach; ?>
          
       
        </ul>
      </div>
   </div>
  </section>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <div class="home-tabs cfx">
        	<a class="home-tab tab-act fl tr" data-id="great-1">PRODUCTOS NUEVOS</a>
         <?php if(!empty($producto_ventas->nombre)):?>       
          <a class="home-tab fl tr" data-id="great-2">LO MÁS VENDIDO</a>
          <?php endif; ?>  
        </div>
        <div class="con-greats">
        	<div class="great great-home great-1"><!--op-->
          	
               
              <?php foreach ($productos as $producto) : ?>  
              <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url().$producto->imagen_path; ?>" alt=""></div>
              <h1 class="tr" id="great-title"><?php echo $producto->nombre; ?></h1>
              <h1 class="tr" id="great-ref">Marca: <?php echo $producto->marca; ?></h1>
              <p class="tr"><?php echo substr(strip_tags($producto->descripcion),0,90)."..."; ?></p>
              <h1 class="tr" id="great-cost">$<?php echo $producto->precio; ?></h1>
              <div class="con-great-bts"><a class="great-bt-1 tr add_to_cart"  data-url="<?php echo  base_url()."carrito/add_to_cart"; ?>" data-datos="id=<?php echo $producto->id; ?>"  href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto_info/index/<?php echo $producto->id; ?>">VER MÁS</a></div>
            </div>
              <?php endforeach;?> 
                <!--    
            <div class="great-item fl tr">
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
            </div>
              -->
          </div>
          <div class="great great-home great-2"><!--op-->
           
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
           <!--   
              <div class="great-item fl tr">
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
            </div>
            <div class="great-item fl tr">
            	<div class="fig-great"><img src="<?php echo base_url(); ?>assets/img/great-img-1.jpg" alt=""></div>
              <h1 class="tr" id="great-title">RHONCUS BREMBO AMET SCAT</h1>
              <h1 class="tr" id="great-ref">Ref. TELLUS TR</h1>
              <p class="tr">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula.</p>
              <h1 class="tr" id="great-cost">$789.500</h1>
              <div class="con-great-bts"><a class="great-bt-1 tr" href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info">VER MÁS</a></div>
            </div>
           -->
          </div>
        </div>
        <div class="con-slider-logos">
        	<h1>Nuestras Marcas</h1>
          <ul class="logos-slider-1">
                <?php foreach ($marcas as $marca) : ?>
          	<li><img src="<?php echo base_url().$marca->imagen_path; ?>" height="125" width="235" alt=""></li>
                  <?php endforeach; ?>
          </ul><div class="br-fk"></div>
        </div>
        <div class="con-slider-logos">
        	<h1>Patrocinadores</h1>
          <ul class="logos-slider-2">
                <?php foreach ($patrocinadores as $patrocinador) : ?>
          	<li><img src="<?php echo base_url().$patrocinador->imagen_path; ?>" height="125" width="235" alt=""></li>
                  <?php endforeach; ?>
          
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="call-bt"><a href="<?php echo base_url(); ?>javascript:void(0);" yodi="D0FEB8E7C671ED75BF75F2B7F5B9EE8E"></a></div>

