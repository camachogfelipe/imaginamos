<style type="text/css">#wall-bt {border-bottom:2px solid #888;}</style>
<div class="content_int clearfix">
	<h1 class="bebas main-title"><span><?php echo $productos->tiutlo; ?></span></h1>
  <ul class="miga clearfix">
  	<li><a href="<?php echo base_url(); ?>home">Home</a></li>
    <li><a>></a></li>
  	<li><a href="<?php echo base_url(); ?>tienda">Tienda</a></li>
    <li><a>></a></li>
    <li><a class="sec-act">Producto info</a></li>
  </ul>
  <hr class="sep-rom">
  
 
  <div class="content_cat_fn left clearfix">
    <div class="product_detail left">
    
    	<!--Imagen grande-->
        <?php
          $color = $productos->get_colores(array('imagen','imagen1','imagen2','imagen3','imagen4','color'),'color_id'); 
          $disenador = $productos->get_disenador('producto'); 
          ?>
         <?php
		   $i = 1; 
		   foreach ($color as $cvalue): ?>  
             <img class="big_img big-1<?php echo $i;  ?>"  src="<?php echo base_url().$cvalue->imagen_path; ?>" width="460" height="340"/>       
             <img class="big_img big-2<?php echo $i;  ?>" src="<?php echo base_url().$cvalue->imagen1_path; ?>" width="460" height="340"/>  
             <img class="big_img big-3<?php echo $i;  ?>" src="<?php echo base_url().$cvalue->imagen2_path; ?>" width="460" height="340" />  
             <img class="big_img big-4<?php echo $i;  ?>" src="<?php echo base_url().$cvalue->imagen3_path; ?>" width="460" height="340"/>  
             <img class="big_img big-5<?php echo $i;  ?>" src="<?php echo base_url().$cvalue->imagen4_path; ?>" width="460" height="340" /> 
         <?php $i++;  endforeach; ?>
       <!--   
      <img class="big_img big-1" src="assets/img/tienda-img-b1.jpg" width="460">
      <img class="big_img big-2" src="assets/img/tienda-img-b2.jpg" width="460">
      <img class="big_img big-3" src="assets/img/tienda-img-b3.jpg" width="460">
      <img class="big_img big-4" src="assets/img/tienda-img-b1.jpg" width="460">
      <img class="big_img big-5" src="assets/img/tienda-img-b2.jpg" width="460">
      -->
      
      <div class="clearfix">
        <!--Colores-->
        <div class="colors_int colors_int_fn">
          <?php $i=1; foreach ($color as $cvalue): ?>  
          <a data-id="thumbs-<?php echo $i; ?>" id="big-1<?php echo $i;  $i++;  ?>"  src="<?php echo base_url().$cvalue->imagen_path; ?>" style="background-color:<?php echo $cvalue->color_valor; ?>;"></a>
          <?php endforeach; ?>   
         <!-- <a data-id="thumbs-1" style="background-color:#2096d3;"></a>
          <a data-id="thumbs-2" style="background-color:#ff0000;"></a>
          <a data-id="thumbs-3" style="background-color:#00ff60;"></a>
          <a data-id="thumbs-4"><img src="assets/img/multi-color.jpg" height="20" width="20" alt=""></a> -->
        </div>
        <!--Minis-->
         <?php 
		  $i = 1; 
		 foreach ($color as $cvalue): ?>  
          <div class="thumbs thumbs-<?php echo $i;  ?>">
             <img data-id="big-1<?php echo $i;  ?>"  src="<?php echo base_url().$cvalue->imagen_path; ?>" width="85" height="85"/>       
             <img data-id="big-2<?php echo $i;  ?>" src="<?php echo base_url().$cvalue->imagen1_path; ?>" width="85" height="85" />  
             <img data-id="big-3<?php echo $i;  ?>" src="<?php echo base_url().$cvalue->imagen2_path; ?>" width="85" height="85" />  
             <img data-id="big-4<?php echo $i;  ?>" src="<?php echo base_url().$cvalue->imagen3_path; ?>" width="85" height="85" />  
             <img data-id="big-5<?php echo $i;  ?>" src="<?php echo base_url().$cvalue->imagen4_path; ?>" width="85" height="85" />  
          </div>
          
         <div class="con-thumbs-tx thumbs-<?php echo $i; $i++;  ?>">
        	 <p><?php echo $cvalue->label_img; ?></p>
            <p><?php echo $cvalue->label_img1; ?></p>
            <p><?php echo $cvalue->label_img2; ?></p>
            <p><?php echo $cvalue->label_img3; ?></p>
            <p><?php echo $cvalue->label_img4; ?></p>
        </div>
        <?php endforeach; ?>
        
        <!--
        <div class="thumbs thumbs-1">
          <img data-id="big-1" src="assets/img/tienda-img-b1.jpg" width="85">
          <img data-id="big-2" src="assets/img/tienda-img-b2.jpg" width="85">
          <img data-id="big-3" src="assets/img/tienda-img-b3.jpg" width="85">
          <img data-id="big-4" src="assets/img/tienda-img-b1.jpg" width="85">
          <img data-id="big-5" src="assets/img/tienda-img-b2.jpg" width="85">
        </div>
        <div class="thumbs thumbs-2">
          <img data-id="big-1" src="assets/img/tienda-img-b1.jpg" width="85">
          <img data-id="big-2" src="assets/img/tienda-img-b2.jpg" width="85">
          <img data-id="big-3" src="assets/img/tienda-img-b3.jpg" width="85">
          <img data-id="big-4" src="assets/img/tienda-img-b1.jpg" width="85">
          <img data-id="big-5" src="assets/img/tienda-img-b2.jpg" width="85">
        </div>
 
        <div class="thumbs thumbs-3">
          <img data-id="big-1" src="assets/img/tienda-img-b1.jpg" width="85">
          <img data-id="big-2" src="assets/img/tienda-img-b2.jpg" width="85">
          <img data-id="big-3" src="assets/img/tienda-img-b3.jpg" width="85">
          <img data-id="big-4" src="assets/img/tienda-img-b1.jpg" width="85">
          <img data-id="big-5" src="assets/img/tienda-img-b2.jpg" width="85">
        </div>

        <div class="thumbs thumbs-4">
          <img data-id="big-1" src="assets/img/tienda-img-b1.jpg" width="85">
          <img data-id="big-2" src="assets/img/tienda-img-b2.jpg" width="85">
          <img data-id="big-3" src="assets/img/tienda-img-b3.jpg" width="85">
          <img data-id="big-4" src="assets/img/tienda-img-b1.jpg" width="85">
          <img data-id="big-5" src="assets/img/tienda-img-b2.jpg" width="85">
        </div>
        
        <div class="con-thumbs-tx thumbs-1">
        	<p>1</p>
          <p>Frente</p>
          <p>Dorso</p>
          <p>Sobre</p>
          <p>Detalle</p>
        </div>
        <div class="con-thumbs-tx thumbs-2">
        	<p>2</p>
          <p>Frente</p>
          <p>Dorso</p>
          <p>Sobre</p>
          <p>Detalle</p>
        </div>
        <div class="con-thumbs-tx thumbs-3">
        	<p>3</p>
          <p>Frente</p>
          <p>Dorso</p>
          <p>Sobre</p>
          <p>Detalle</p>
        </div>
        <div class="con-thumbs-tx thumbs-4">
        	<p>4</p>
          <p>Frente</p>
          <p>Dorso</p>
          <p>Sobre</p>
          <p>Detalle</p>
        </div>
    
    -->
    
           
        <hr class="sep-b">
        <div class="con-gal-promo left">
          <div class="gal-promo left">
            <h2 class="bebas">Producto más vendido</h2>
            <?php 
                 $color = $producto_venta->get_color('imagen','color','color_id');     
            ?>
            <a href="<?php echo base_url()."custom_prod/info/".$producto_venta->id; ?>" class="dest_prod">
              <div class="item_dest" style="height:250px; margin:0 0 20px; overflow:hidden;">
                <img src="<?php echo base_url().$color->imagen_path; ?>" height="250" width="460" alt="">
                <div class="over_dest over-ds bebas">
                  <div class="table_over">
                    <div class="cell_over">
                      <span class="icon_vermas_dest"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="main_p desc_product">
            	<p><b>Personaliza tu proyecto</b></p>
                <p>Si quieres adaptar este diseño a otras piezas gráficas, comunícate con nosotros a <a href="mailto:#">contacto@tallerpostal.com</a></p>
            </div>
          </div>
          <hr class="sep-rom left">
          <a href="<?php echo base_url(); ?>carrito" class="carrito_menu left">
            <h2 class="bebas">Mi carrito de compras</h2>
            <div class="num_items"><span><?php echo $this->cart->total_items(); ?></span> item agregados</div>
          </a>
        </div>
      </div>
    </div>

    <!-- <div class="content_cat_fn left clearfix">
    <div class="product_detail left">
   
   
   <img class="big_img" src="<?php
          $color = $productos->get_colores(array('imagen','imagen1','imagen2','imagen3','imagen4','color'),'color_id'); 
          $disenador = $productos->get_disenador('producto'); 
          echo base_url().$color->imagen_path;
          ?>" width="460"  height="340" />
      <div class="clearfix">
      	<div class="colors_int colors_int_fn">
          <?php foreach ($color as $cvalue): ?>  
          <a rel="<?php echo $cvalue->imagen_path; ?>" style="background-color:<?php echo $cvalue->color_valor; ?>;"></a>
        <?php endforeach; ?>    
        </div>
        <?php foreach ($color as $cvalue): ?>  
        <div class="thumbs ">
            <img src="<?php echo base_url().$cvalue->imagen_path; ?>" width="85" height="85"/>       
             <img src="<?php echo base_url().$cvalue->imagen1_path; ?>" width="85" height="85" />  
             <img src="<?php echo base_url().$cvalue->imagen2_path; ?>" width="85" height="85" />  
             <img src="<?php echo base_url().$cvalue->imagen3_path; ?>" width="85" height="85" />  
             <img src="<?php echo base_url().$cvalue->imagen4_path; ?>" width="85" height="85" />  
          </div>
        <div class="con-thumbs-tx">
          <p><?php echo $cvalue->label_img; ?></p>
          <p><?php echo $cvalue->label_img1; ?></p>
          <p><?php echo $cvalue->label_img2; ?></p>
          <p><?php echo $cvalue->label_img3; ?></p>
          <p><?php echo $cvalue->label_img4; ?></p>
        </div>
           <?php endforeach; ?>   
           
          
        <hr class="sep-b">
        <?php if($producto_venta->result_count()>0): ?>
        <div class="con-gal-promo left">
          <div class="gal-promo left">
            <h2 class="bebas">Producto más vendido</h2>
            <?php 
                 $color1 = $producto_venta->get_color('imagen','color','color_id');     
            ?>
            <a href="<?php echo base_url()."custom_prod/info/".$producto_venta->id; ?>" class="dest_prod">
              <div class="item_dest" style="height:250px; margin:0 0 20px; overflow:hidden;">
                <img src="<?php echo base_url().$color1->imagen_path; ?>" height="250" width="460" alt="">
                <div class="over_dest over-ds bebas">
                  <div class="table_over">
                    <div class="cell_over">
                      <span class="icon_vermas_dest"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="main_p desc_product">
            	<p><b>Personaliza tu proyecto</b></p>
                <p>Si quieres adaptar este diseño a otras piezas gráficas, comunícate con nosotros a <a href="mailto:contacto@tallerpostal.com">contacto@tallerpostal.com</a></p>
            </div>
          </div>
          <hr class="sep-rom left">
          <a href="<?php echo base_url(); ?>carrito" class="carrito_menu left">
            <h2 class="bebas">Mi carrito de compras</h2>
            <div class="num_items"><span><?php echo $this->cart->total_items(); ?></span> item agregados</div>
          </a>
        </div>
          <?php endif; ?>
      </div>
    </div>  --->
    
      <form action="<?php echo base_url()."carrito/add_to_cart"; ?>" method="post" >
        <input type="hidden" name="producto_id" value="<?php echo $productos->id; ?>" /> 
        <div class="form_product_fn right">
    	<h2 class="bebas"><?php echo $productos->tiutlo; ?></h2>
        <h3 class="disenador"> por <a href="<?php echo base_url(); ?>disenadores/disenador/<?php echo $productos->disenador_id; ?>"><?php echo $productos->disenador_nombre; ?></a></h3>
        <hr class="sep-rom left">
        <div class="main_p desc_product">
          <p>
            <?php echo $productos->texto; ?>
          </p>
        </div>
    
      <div class="con-custom-fn clearfix">
          <h1 class="bebas"><?php echo strtoupper($productos->categoria_titulo);  ?></h1>
       
         <div class="con-item-list clearfix">  
           <h4 class="elect bebas left">Elige cantidad</h4>
            <select  name="cantidad_producto_id" id="cantidad_producto_id" class="select_cambio select1 right">
                <option value="1" >Selecciona</option>
             <?php for ($i = $cantidades->cantidad_inico; $i < $cantidades->cantidad_fin; $i++) : ?> 
                <option data-cantidad="<?php echo $i; ?>" value="<?php echo $i; ?>"><?php echo $i; ?></option>
             <?php endfor; ?>   
            </select>
           <div class="con-tool"><span></span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
           </div>
         </div>
          
        <div class="linea_home left"></div>
        
        
         <div class="con-item-list clearfix">
        <h4 class="elect bebas left">Elige papel</h4>
        <div class="clearfix tipo_papel right">
          <?PHP 
          $i =0; 
          foreach ($papels as $papel): ?>
          <fieldset class="left">
              <input type="radio" data-precio='<?php echo $papel->precio;  ?>' value="<?php echo $papel->id; ?>" data-id="<?php echo $papel->id; ?>" data-url="<?php echo base_url()."custom_prod/color_papel/".$papel->id;  ?>" class="papel" name="papel_producto_id" id="ck-<?php echo $i; ?>">
            <label for="ck-<?php echo $i; ?>"><?php echo $papel->papel_titulo ?></label>
          </fieldset>
          <?php $i++; endforeach; ?>  
        </div>
        <a class="bt-modal-papel modals-act" href="#modal-papel"></a>
        </div>
        
        
        <div class="linea_home left"></div>
        
        <div class="con-item-list clearfix">
            <h4 class="elect bebas left">Elige color del papel</h4>
            <select id="color_papel" name="color_papel" class="select_cambio select1 right">
              <option>Selecciona</option>
            </select>
            <div class="con-tool"><span></span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
        </div>
        
        
        <div class="linea_home left"></div>
        
        
          <div class="con-item-list clearfix">
            <div class="clearfix tipo_papel tipo_papel2 left">
              <fieldset class="left" style="margin:5px 0 5px 0; width:280px;">
                  <input id="diseno" data-precio="<?php echo $productos->precio_cdiseno; ?>" type="checkbox" value="<?php echo$productos->precio_cdiseno; ?>" name="ck-req" id="color-ds" onclick="verReq('req')">
                <label class="ck-custom"  style="width:auto;" for="color-ds">Cambia el color del diseño</label>
              </fieldset>
                <p   class="cost-more right">+<?php echo number_format($productos->precio_cdiseno,0,",",".");  ?></p>
              <div class="pro-req left" id="req">
                <p>Requerimientos de cambio de color</p>
                <textarea name="color_diseno"></textarea>
                <p><a href="#">Ver catálogo de colores</a></p>
              </div>
            </div>
             <div class="con-tool"><span></span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
        </div>
        
        
        <div class="linea_home left"></div>
        
      <div class="con-item-list clearfix">
            <div class="clearfix tipo_papel tipo_papel2 left">
              <fieldset class="left" style="margin:5px 0 5px 0; width:280px;">
                  <input id="dorso" data-precio="<?php echo $productos->precio_idorso;  ?>" type="checkbox" name="precio_dorso" value="<?php echo $productos->precio_idorso;  ?>" id="imp-dor">
                <label class="ck-custom" style="width:auto;" for="imp-dor">Incluye la impresión de dorsos</label>
              </fieldset>
              <p class="cost-more right">+<?php echo number_format($productos->precio_idorso, 0, ',', '.');  ?></p>
            </div>
            <div class="con-tool"><span></span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </div>    
      
      <div class="con-custom-fn clearfix">
      	<h1 class="bebas">SOBRES</h1>
        <div class="clearfix tipo_papel tipo_papel2 left">
        
           <?php foreach ($sobres as $val): ?>
            <input type="hidden" name="sobre_id" value="<?php echo $sobres->id; ?>" /> 
            <div>
            <p class="bt-acor"><span class="icon-more"></span><?php echo $val->titulo; ?></p>
            <div class="pro-req left">
            
            
            <div class="con-item-list clearfix">
              <h4 class="elect bebas left">Elige cantidad</h4>
              <select name="cantidad_sobre_id" id="cantidad_sobre_id" class="select_cambio select1 right">
                <option>Selecciona</option>
                <?php  
                $catas = $val->get_cantidades();
                 for ($i = $catas->cantidad_inico; $i > $catas->cantidad_fin; $i++ ) : ?>  
                <option value="<?php echo $i  ?>"><?php echo $i;  ?></option>
                <?php endfor; ?>
              </select>
                <div class="con-tool"><span></span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              
              <div class="linea_home left"></div>
              
               <div class="con-item-list clearfix">
              <h4 class="elect bebas left">Elige papel</h4>
              <div class="clearfix tipo_papel right">
                <?php foreach ($val->get_pepeles() as $spapel): ?>  
                <fieldset class="left">
                    <input  data-precio='<?php echo $spapel->precio;  ?>' data-url="<?php echo base_url()."custom_prod/color_sobre/".$spapel->id;  ?>"  type="radio" value="<?php echo $spapel->id; ?>" name="papel_sobre_id" class="ck-5" id="ck-5">
                  <label for="ck-5"><?php echo $spapel->papel_titulo ?></label>
                </fieldset>
                 <?php endforeach; ?> 
              </div>
               <a class="bt-modal-papel modals-act" href="#modal-papel"></a>
              </div>

              
              
              <div class="linea_home left"></div>
              
               <div class="con-item-list clearfix">
              <h4 class="elect bebas left">Elige color del sobre</h4>
              <select  name="color_sobre_id" class="select_cambio select1 right">
                  <option value="0">Selecciona</option>
                 <?php foreach ($val->get_colores() as $scolor): ?> 
                <option value="<?php echo $scolor->id;  ?>"><?php echo $scolor->color_titulo;  ?></option>
              <?php endforeach; ?> 
              </select>
              <p><a href="#">Ver catálogo de colores</a></p>
              <div class="con-tool"><span></span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              
              
            </div>
            <div class="linea_home left"></div>
          </div>
         <?php endforeach; ?> 
        </div>
      </div>
      
      <h1 class="tt-labels bebas">ESCRIBE TU MENSAJE</h1>
      <textarea name="mensaje" class="textarea_product"></textarea>
      <div class="linea_home"></div>
      
      <h1 class="tt-labels bebas">OPCIONES DE ENTREGA</h1>
      <div class="clearfix">
        <div class="clearfix tipo_papel tipo_papel3 left">
          <fieldset class="left" style="margin:5px 0 5px 0; width:400px;">
              <input id="envio1" type="radio"  value="0" name="valor_envio" id="rb-envio1">
            <label class="ck-custom" style="width:auto;" for="rb-envio1">Lo recoges</label>
          </fieldset>
          <p class="cost-more right">+0,00</p>
        </div>
      </div>
      <div class="clearfix">
        <div class="clearfix tipo_papel tipo_papel3 left">
          <fieldset class="left" style="margin:5px 0 5px 0; width:400px;">
              <input id="envio" data-precio="<?php echo $productos->precio_envio;  ?>"  type="radio" value="<?php echo $productos->precio_envio;  ?>" name="valor_envio" id="rb-envio2">
            <label class="ck-custom" style="width:auto;" for="rb-envio2">Te lo llevamos</label>
          </fieldset>
          <p class="cost-more right">+<?php echo number_format($productos->precio_envio, 0, ',', '.');  ?></p>
        </div>
      </div>
      <div class="linea_home"></div>
      
      <h2 id="total"  data-precio="<?php echo $productos->precio ?>" class="precio bebas left">TOTAL: $<?php echo $productos->precio; ?></h2>
      <input style="border: none; width: 210px; " type="submit" class="btn_add bebas right" value="Agregar al carrito" /> 
     <!-- <input id="add_to_car" style="border: none; width: 210px; " type="button" class="btn_add bebas right" value="Agregar al carrito" /> --->

    </div>
    </form>

  </div>
</div>

<div class="con-modals">
	<div class="info-modal clearfix" id="modal-papel">
  	<div class="scroll-wrap">
    	<!--Tipo papel-->
    	<div class="con-papel clearfix">
      	<h1>NOMBRE PAPEL</h1>
      	<img src="<?php echo base_url(); ?>assets/img/papel-img-1.jpg" width="246">
    		<p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</p>
      </div>
      <!--Tipo papel-->
    	<div class="con-papel clearfix">
      	<h1>NOMBRE PAPEL</h1>
      	<img src="<?php echo base_url(); ?>assets/img/papel-img-2.jpg" width="246">
    		<p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</p>
      </div>
      <!--Tipo papel-->
    	<div class="con-papel clearfix">
      	<h1>NOMBRE PAPEL</h1>
      	<img src="<?php echo base_url(); ?>assets/img/papel-img-3.jpg" width="246">
    		<p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</p>
      </div>
      <!--Tipo papel-->
    	<div class="con-papel clearfix">
      	<h1>NOMBRE PAPEL</h1>
      	<img src="<?php echo base_url(); ?>assets/img/papel-img-4.jpg" width="246">
    		<p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</p>
      </div>
    </div>
  </div>
</div>


