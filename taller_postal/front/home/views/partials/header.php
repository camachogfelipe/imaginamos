<div class="header">
    <div class="clearfix">
      <a class="left" href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets/img/logo.png" class="logo left" /></a>
      <div class="right">
        <!--a href="<?php echo base_url(); ?>carrito" class="btn_check"></a-->
        <div class="con-main-nav clearfix">
        	<a href="<?php echo base_url(); ?>carrito" class="btn_check right"></a>
          <div class="search clearfix right">
              <form action="<?php echo base_url(); ?>resultados" method="post">
                <input name="q" type="text" class="input_search right" />
            	<input type="submit" class="left btn_search" value="" />
            </form>
          </div>
          <ul class="menu1 right">
          	<li class="right">
              <a href="<?php echo base_url(); ?>preguntas" class="<?php echo ($current_page == "preguntas")?"activo":"";?>">Preguntas</a>
            </li>
            <li class="right">
              <a href="<?php echo base_url(); ?>servicios" class="<?php echo ($current_page == "servicios")?"activo":"";?>">Servicios</a>
            </li>
            <li class="right">
              <a href="<?php echo base_url(); ?>comunidades" class="<?php echo ($current_page == "comunidades")?"activo":"";?>" id="ds-bt">Comunidad</a>
            </li>
<!--            <li class="right">
              <a href="<?php echo base_url(); ?>tienda" class="<?php echo ($current_page == "tienda")?"activo":"";?>" id="wall-bt">Tienda</a>
            </li>-->
          </ul>
        </div>
      </div>
      <div class="menu2 clearfix bebas right">
      	<hr class="sep-b">
	<ul class="slider-nav">
        	<!--Slide-subnav-x4-->
          
          	<!--Bt-subnav-->
         <?php
            $i = 0; 
            $abre =false; 
           foreach ($_lineas as $linea) :
               if($i == 0):
               ?>
                <li class="left">
              <?php $abre=true; endif; ?>      
                <div class="ver-sub">
              <a class="left" href="#"><?php echo $linea->titulo; ?></a>
              <div class="subnav<?php echo ($i == 0)?" clearfix":""; ?> ">
                  <?php $categoria = $linea->get_categoria('linea');  ?>  
                  <?php foreach ($categoria as $categ): ?>
                  <ul class="left">
                  <li><a href="<?php echo base_url()."tienda/categoria/".$categ->id; ?>"><h3><?php echo $categ->titulo; ?></h3></a></li>
                  </ul>
                  <?php endforeach; ?>
                </div>
                </div>
               <?php if($i==3 AND $abre): ?>     
               </li>
               <?php $i = -1; $abre=false;  endif; $i++; ?>

              <?php endforeach; ?>
               <?php if($abre): ?>
                  </li>
                <?php endif;?> 
             </ul>     
             <?php
            /* if(isset($_lineas)){
              
               foreach ($_lineas as $linea): ?>       
              <div class="ver-sub">
              <a class="left" href="#"><?php echo $linea->titulo ?></a>
              <div class="subnav clearfix">
              
               <?php foreach ($linea->get_categoria('linea') as $categoria): ?>
               <ul class="left">
                       <li><h3><?php echo strtoupper($categoria->titulo); ?></h3></li>
                <?php foreach ($categoria->get_categoria('categoria_basic') as $subcategoria) : ?>   
                 <li><a href="<?php echo base_url(); ?>cat_tienda/<?php echo $subcategoria->id; ?>"><?php echo $subcategoria->titulo;  ?></a></li>
                <?php endforeach; ?>
               </ul>
          
            <?php endforeach; ?>
                  
             </div>
         <?php endforeach; } */?>  

    <?php /*?><div class="carrito">
      <div class="btn_close" onClick="cerrarCarrito();"></div>
      <h2 class="bebas">Mi carrito</h2>
      <h3 class="agregados"><span class="bold">1</span> producto agregado(s) al carrito</h3>
      <div class="linea_home"></div>
      <div class="scroll-pane content_items">
        <div class="item_carrito clearfix">
          <img src="<?php echo base_url(); ?>assets/img/img_dest2.jpg" class="left" width="50">
          <h4 class="left bebas">Diseño lorem ipsum dolor sit</h4>
          <div class="cantidad left">
            <!--<h5 class="bold">Cantidad</h5>-->
            <input value="1" type="text" class="input cant" />
          </div>
          <a href="#" class="delete right"></a>
        </div>
        <div class="item_carrito clearfix">
          <img src="<?php echo base_url(); ?>assets/img/img_dest2.jpg" class="left" width="50">
          <h4 class="left bebas">Diseño lorem ipsum dolor sit</h4>
          <div class="cantidad left">
            <!--<h5 class="bold">Cantidad</h5>-->
            <input value="1" type="text" class="input cant" />
          </div>
          <a href="#" class="delete right"></a>
        </div>
        <div class="item_carrito clearfix">
          <img src="<?php echo base_url(); ?>assets/img/img_dest2.jpg" class="left" width="50">
          <h4 class="left bebas">Diseño lorem ipsum dolor sit</h4>
          <div class="cantidad left">
            <!--<h5 class="bold">Cantidad</h5>-->
            <input value="1" type="text" class="input cant" />
          </div>
          <a href="#" class="delete right"></a>
        </div>
        <div class="item_carrito clearfix">
          <img src="<?php echo base_url(); ?>assets/img/img_dest2.jpg" class="left" width="50">
          <h4 class="left bebas">Diseño lorem ipsum dolor sit</h4>
          <div class="cantidad left">
            <!--<h5 class="bold">Cantidad</h5>-->
            <input value="1" type="text" class="input cant" />
          </div>
          <a href="#" class="delete right"></a>
        </div>
        <div class="item_carrito clearfix">
          <img src="<?php echo base_url(); ?>assets/img/img_dest2.jpg" class="left" width="50">
          <h4 class="left bebas">Diseño lorem ipsum dolor sit</h4>
          <div class="cantidad left">
            <!--<h5 class="bold">Cantidad</h5>-->
            <input value="1" type="text" class="input cant" />
          </div>
          <a href="#" class="delete right"></a>
        </div>
      </div>
      <div class="vals bebas">
        <div class="item_val clearfix">
          <h4 class="left">Subtotal</h4>
          <h5 class="right">150.000</h5>
        </div>
        <div class="item_val clearfix">
          <h4 class="left">IVA</h4>
          <h5 class="right">10.000</h5>
        </div>
        <div class="item_val clearfix">
          <h4 class="left">Costo de envío</h4>
          <h5 class="right">20.000</h5>
        </div>
        <div class="item_val clearfix item_total">
          <h4 class="left">Total</h4>
          <h5 class="right">200.000</h5>
        </div>
        
      </div>
      <a href="<?php echo base_url(); ?>registro_compra" class="btn_comprar">Comprar</a>
    </div><?php */?>
  </div>
   </div>  
</div>     
  
  