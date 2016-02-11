<style type="text/css">#wall-bt {border-bottom:2px solid #888;}</style>
<div class="content_int clearfix">
	<h1 class="bebas main-title"><span><?php echo $productos->tiutlo; ?></span></h1>
<!-- <ul class="miga clearfix">
  	<li><a href="<?php //echo base_url(); ?>home">Home</a></li>
    <li><a>></a></li>
  	<li><a href="<?php //echo base_url(); ?>tienda">Tienda</a></li>
    <li><a>></a></li>
    <li><a class="sec-act"><?php //echo $cat->tiutlo; ?></a></li>
	<li><a>></a></li>
	<li><a class="sec-act"><?php //echo $productos->tiutlo; ?></a></li>
  </ul>
  -->

  <ul class="miga clearfix">
  
    <li><a href="<?php echo base_url(); ?>">Home</a></li>
    <li><a>></a></li>
    <?php foreach ($miga as $key => $value):?>
  	<li><a <?php echo ($value=="")?' ':' href="'.$value.'"' ?> ><?php echo $key ?></a></li>
  	
        <?php echo ($value!="")?'<li><a>></a></li>':""; ?>    
    <?php endforeach; ?>
	
	<li><a class="sec-act"><?php echo $productos->tiutlo; ?></a></li>
  </ul>

  
  <hr class="sep-rom">
  
 
  <div class="content_cat_fn left clearfix">
    <div class="product_detail left">
    

        <?php
          $color = $productos->get_colores(array('imagen','imagen1','imagen2','imagen3','imagen4','color'),'color_id'); 
		  //print_r($color);
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
    
      
      <div class="clearfix">
        <!--Colores-->
        <div class="colors_int colors_int_fn">
          <?php $i=1; foreach ($color as $cvalue): ?>  
          <a data-id="thumbs-<?php echo $i; ?>" class="color_diseno_act" data-color="<?php echo $cvalue->color_titulo; ?>" id="big-1<?php echo $i;  $i++;  ?>"  src="<?php echo base_url().$cvalue->imagen_path; ?>" style="background-color:<?php echo $cvalue->color_valor; ?>;"></a>
          <?php endforeach; ?>   
       
        </div>
        <!--Minis-->
         <?php 
		  $i = 1; 
		 foreach ($color as $cvalue): ?>  
          <div id="esconder" class="thumbs thumbs-<?php echo $i;  ?>">
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
        
        
    
           
        <hr class="sep-b">
        <div class="con-gal-promo left">
          <div class="gal-promo left">
          <?php if($producto_venta->exists()):  ?>
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
            <?php endif; ?>  
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
      
        <input type="hidden" id="color_diseno_actual" name="color_diseno_actual" value="" /> 
        <input type="hidden" name="producto_id" value="<?php echo $productos->id; ?>" /> 
        <input type="hidden" name="producto_precio" value="<?php echo $productos->precio; ?>" /> 
        <div class="form_product_fn right">
    	<h2 class="bebas"><?php echo $productos->tiutlo; ?></h2>
        <h3 class="disenador"> por <a id="big-88" href="<?php echo base_url(); ?>disenadores/disenador/<?php echo $productos->disenador_id; ?>"><?php echo $productos->disenador_nombre; ?></a></h3>
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
             <input type="hidden" name="cantidad_producto_precio" value="<?php echo $cantidades->precio; ?>" /> 
            <select data-precio="<?php echo $cantidades->precio; ?>" name="cantidad_producto_id" id="cantidad_producto_id" class="select_cambio select1 right">
            <option  data-cantidad="0" value="0">Seleccione</option>
             <?php for ($i = $cantidades->cantidad_inico; $i < $cantidades->cantidad_fin; $i++) : ?> 
                <option  data-cantidad="<?php echo $i; ?>" value="<?php echo $i; ?>"><?php echo $i; ?></option>
             <?php endfor; ?>   
            </select>
           <div class="con-tool"><span></span>
               <p><?php echo $tool_tips_cantidad->texto; ?></p>
           </div>
         </div>
         
       <?php if(!$view_config->exists() or $view_config->view_papel!=0): ?>    
        <div class="linea_home left"></div>
         <div class="con-item-list clearfix">
        <h4 class="elect bebas left">Elige papel</h4>
        <div class="clearfix tipo_papel right">
        <input type="hidden" id="papel_producto_precio" name="papel_producto_precio" value="0" />
          <?PHP 
          $i =0; 
		  
          foreach ($papels as $papel): ?>
          <fieldset class="left">
              <input type="radio" data-precio='<?php echo $papel->precio;  ?>' value="<?php echo $papel->id; ?>" data-id="<?php echo $papel->id; ?>" data-url="<?php echo base_url()."custom_prod/color_papel/".$papel->papel_id;  ?>" class="papel" name="papel_producto_id" id="ck-<?php echo $i; ?>">
            <label for="ck-<?php echo $i; ?>"><?php echo $papel->papel_titulo ?></label>
          </fieldset>
          <?php $i++; endforeach; ?>  
        </div>
        <a class="bt-modal-papel modals-act" href="#modal-papel<?php echo $productos->id; ?>"></a>
        </div>
        
        
        <div class="con-modals">
         <div class="info-modal clearfix" style="width: 600px; height: 600px;" id="modal-papel<?php echo $productos->id; ?>">
  	<div class="scroll-wrap">
    
             <?php foreach ($papels as $spapel2): ?>  
            
            <!--Tipo papel-->
    	<div class="con-papel clearfix">
            <h1><?php echo mb_strtoupper($spapel2->papel_titulo) ?></h1>
      	<img src="<?php 
                       $imagen = new papel(); 
                       $imagen->join_related('imagen')->get_by_id($spapel2->papel_id); 
                       echo base_url().$imagen->imagen_path; 
                       
                       ?>" width="246">
    		<p align="justify"><?php echo $spapel2->papel_texto ?></p>
      </div>
            <?php endforeach; ?>
     </div>
  </div>
</div>
        
        
       <?php endif; ?>
        
         <?php if(!$view_config->exists() or $view_config->view_color_papel!=0): ?>   
        <div class="linea_home left"></div>
        
        <div class="con-item-list clearfix">
            <h4 class="elect bebas left">Elige color del papel</h4>
            <select id="color_papel" name="color_papel" class="select_cambio select1 right">
              <option>Selecciona</option>
            </select>
            <div class="con-tool"><span></span>
                <p><?php echo $tool_tips_color->texto; ?></p>
              </div>
        </div>
        <?php endif; ?>
        
        
         <?php if(!$view_config->exists() or $view_config->view_cambia_color!=0): ?> 
        <div class="linea_home left"></div>
        
        
          <div class="con-item-list clearfix">
            <div class="clearfix tipo_papel tipo_papel2 left">
              <fieldset class="left" style="margin:5px 0 5px 0; width:280px;">
                  <input id="diseno" data-precio="<?php echo $productos->precio_cdiseno; ?>" type="checkbox" value="<?php echo$productos->precio_cdiseno; ?>" name="ck-req"  >
                <label class="ck-custom"  style="width:auto;" for="color-ds">Cambia el color del diseño</label>
              </fieldset>
                <p   class="cost-more right">+<?php echo number_format($productos->precio_cdiseno,0,",",".");  ?></p>
              <div class="pro-req left" id="req">
                <p>Requerimientos de cambio de color</p>
                <textarea name="color_diseno"></textarea>
                <p><a target="blank" href="<?php echo base_url().$catalogos_diseno->link_path; ?>">Ver catálogo de colores</a></p>
              </div>
            </div>
             <div class="con-tool"><span></span>
                <p><?php echo $tool_tips_diseno->texto; ?></p>
              </div>
        </div>
         <?php endif; ?>
        
          <?php if(!$view_config->exists() or $view_config->view_impresion_dorso!=0): ?> 
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
                <p><?php echo $tool_tips_dorso->texto; ?></p>
            </div>
        </div>
      
          <?php endif; ?>
     </div>  

    <?php if( $sobres->exists() and (!$view_config->exists() or $view_config->view_sobre!=0)): ?> 
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
                <?php  
                $catas = $val->get_cantidades(); ?>
                <input type="hidden" id="cantidad_sobre_precio" name="papel_sobre_precio" value="<?php echo $catas->cantidad_precio;  ?>" /> 
              <select name="cantidad_sobre_id"  data-precio="<?php echo $catas->cantidad_precio;  ?>" id="cantidad_sobre_id<?php echo $val->id; ?>" class="cantidad_sobre_id select_cambio select1 right">
                <?php 
			     for ($i = $catas->cantidad_inico; $i < $catas->cantidad_fin; $i++ ) : ?>  
                <option value="<?php echo $i  ?>" ><?php echo $i;  ?></option>
                <?php endfor; ?>
       
              </select>
              
              
                <div class="con-tool"><span></span>
                  <p><?php echo $tool_tips_cantida_sobre->texto; ?></p>
                </div>
              </div>
             <?php if(!$view_config->exists() or $view_config->view_papel_sobre!=0): ?> 
              <div class="linea_home left"></div>
              
               <div class="con-item-list clearfix">
              <h4 class="elect bebas left">Elige papel</h4>
              <div class="clearfix tipo_papel right">
                <?php foreach ($val->get_pepeles() as $spapel): ?>  
                <fieldset class="left">
                    <input type="hidden" id="papel_sobre_precio" name="papel_sobre_precio" value="<?php echo $spapel->precio;  ?>" /> 
                    <input  data-precio='<?php echo $spapel->precio;  ?>' data-url="<?php echo base_url()."custom_prod/color_sobre/".$spapel->id;  ?>"  type="radio" value="<?php echo $spapel->id; ?>" name="papel_sobre_id" class="ck-5" id="ck-5">
                  <label for="ck-5"><?php echo $spapel->papel_titulo ?></label>
                </fieldset>
                 <?php endforeach; ?> 
              </div>
               <a class="bt-modal-papel modals-act" href="#modal-papel<?php echo $val->id; ?>"></a>
              </div>
     
     <div class="con-modals">
         <div class="info-modal clearfix" style="width: 600px; height: 600px;" id="modal-papel<?php echo $val->id; ?>">
  	<div class="scroll-wrap">
    
             <?php foreach ($val->get_pepeles() as $spapel1): ?>  
            
            <!--Tipo papel-->
    	<div class="con-papel clearfix">
            <h1><?php echo mb_strtoupper($spapel1->papel_titulo) ?></h1>
      	<img src="<?php 
                       $imagen = new papel(); 
                       $imagen->join_related('imagen')->get_by_id($spapel1->papel_id); 
                       echo base_url().$imagen->imagen_path; 
                       
                       ?>" width="246">
    		<p align="justify"><?php echo $spapel1->papel_texto ?></p>
      </div>
            <?php endforeach; ?>
     </div>
  </div>
</div>
            
              <?php endif; ?> 
              
              <?php if(!$view_config->exists() or $view_config->view_color_sobre!=0): ?> 
              <div class="linea_home left"></div>
              
               <div class="con-item-list clearfix">
              <h4 class="elect bebas left">Elige color del sobre</h4>
              <select  name="color_sobre_id" class="select_cambio select1 right">
                  <option value="0">Selecciona</option>
                 <?php foreach ($val->get_colores() as $scolor): ?> 
                <option value="<?php echo $scolor->id;  ?>"><?php echo $scolor->color_titulo;  ?></option>
              <?php endforeach; ?> 
              </select>
              <p><a target="blank" href="<?php echo base_url().$catalogos_sobre->link_path; ?>">Ver catálogo de colores</a></p>
              <div class="con-tool"><span></span>
                  <p><?php echo $tool_tips_color_sobre->texto; ?></p>
                </div>
              </div>
               <?php endif; ?> 
               
               <?php if(!$view_config->exists() or $view_config->view_stiker_cierre!=0): ?> 
                <div class="linea_home left"></div>
                <div class="con-item-list clearfix">
              <div class="clearfix tipo_papel tipo_papel2 left">
                <fieldset class="left" style="margin:5px 0 5px 0; width:280px;">
                  <input data-precio="<?php echo $productos->precio_stiker; ?>" data-id_sobre="cantidad_sobre_id<?php echo $val->id; ?>" value="<?php echo $productos->precio_stiker; ?>" type="checkbox" name="sticker_cierre" class="sticker_cierre" id="imp-st">
                  <label class="ck-custom" style="width:auto;"  for="imp-st">Incluye stickers de cierre</label>
                </fieldset>
                <p class="cost-more right">+ <?php echo number_format($productos->precio_stiker, 0, ',', '.');  ?></p>
              </div>
               <div class="con-tool"><span></span> 
                  <p><?php echo $tool_tips_stiker->texto; ?></p>
               </div>
              
             </div>
                <?php endif; ?> 
              
            </div>
            <div class="linea_home left"></div>
          </div>
         <?php endforeach; ?> 
        </div>
      </div>
     <?php endif; ?> 
     
      <h1  class="tt-labels bebas">ESCRIBE TU MENSAJE</h1>
	
      <textarea name="mensaje" class="textarea_product"></textarea>
      <div class="linea_home"></div>
      
      <h1 class="tt-labels bebas">OPCIONES DE ENTREGA</h1>
      <div class="clearfix">
        <div class="clearfix tipo_papel tipo_papel3 left">
          <fieldset class="left" style="margin:5px 0 5px 0; width:auto;">
              <input id="envio1" type="radio"  value="0" name="valor_envio" id="rb-envio1">
            <label class="ck-custom" style="width:auto;" for="rb-envio1">Lo recoges</label>
          </fieldset>
          <p class="cost-more right">+0,00</p>
        </div>
      </div>
      <div class="clearfix">
        <div class="clearfix tipo_papel tipo_papel3 left">
          <fieldset class="left" style="margin:5px 0 5px 0; width:auto;">
              <input id="envio" data-precio="<?php echo $productos->precio_envio;  ?>"  type="radio" value="<?php echo $productos->precio_envio;  ?>" name="valor_envio" id="rb-envio2">
            <label class="ck-custom" style="width:auto;" for="rb-envio2">Te lo llevamos</label>
          </fieldset>
          <p class="cost-more right">+<?php echo number_format($productos->precio_envio, 0, ',', '.');  ?></p>
        </div>
      </div>
      <div class="linea_home"></div>
      
      <h2 id="total"  data-precio="<?php echo $productos->precio ?>" class="precio bebas left">TOTAL: $<?php echo number_format($productos->precio, 0, ',', '.'); ?></h2>
      <input style="border: none; width: 210px; " type="submit" class="btn_add bebas right" value="Agregar al carrito" /> 
     <!-- <input id="add_to_car" style="border: none; width: 210px; " type="button" class="btn_add bebas right" value="Agregar al carrito" /> --->

    </div>
    </form>

  </div>
</div>

<script>
	$(document).ready(function(){
		$('#esconder').css('display','none');
		$('#big-88').click();
	});
		
	<?php if($sesion != ''): ?>
<?php endif; ?>
</script>

