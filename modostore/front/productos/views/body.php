<style type="text/css">
#nav-act-3 {
	color: #ff902c;
}
#nav-act-3 span {
	opacity: 1;
	filter: alpha(opacity=99);
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=99)";
}
</style>

<section>
  <div class="con-section">
    <div class="mg-section cfx">
      <div class="con-int-src">
        <h1>Buscador por filtro</h1>
        <form action="<?php echo URL_CURRENT; ?>" class="fiters-form cfx" method="post">
          <div class="src-select fl tr">
            <select name="vehiculo" data-url="<?php echo base_url()."productos/filtro_modelo/" ?>" id="step-1">
              <option value="">Marca del vehículo</option>
              <?php foreach ($marcas as $marca): ?>
              <option  value="<?php echo $marca->id ?>">&nbsp; &bull; &nbsp; <?php echo strtoupper($marca->nombre); ?></option>
              <?php endforeach;  ?>
            </select>
          </div>
          <div class="src-select fl tr">
            <select name="modelo" data-url="<?php echo base_url()."productos/filtro_tipo/" ?>" class="filter-1" readonly id="step-2">
              <option value="">Modelo</option>
            </select>
          </div>
          <div class="src-select fl tr">
            <select name="tipo" data-url="<?php echo base_url()."productos/filtro_producto/" ?>" class="filter-2"  readonly id="step-3">
              <option value="">Tipo de repuesto</option>
            </select>
          </div>
          <div  class="src-select fl tr">
            <select name="nombre" data-url="<?php echo base_url()."productos/filtro_producto_marca/" ?>" class="filter-3" readonly id="step-4">
              <option value="">Nombre del producto</option>
            </select>
          </div>
          <div  class="src-select fl tr">
            <select name="marca" class="filter-4" readonly id="step-5">
              <option value="">Marca del producto</option>
            </select>
          </div>
          <input class="filter-submit fr tr" name="bt_buscar" type="submit" value="BUSCAR">
        </form>
      </div>
      <h1 class="pro-title">Lista de productos</h1>
      <div class="pro-can fl">
        <p class="fl"><?php echo $num_productos; ?> de <?php echo $total_productos; ?> productos</p>
        <?php if(!empty($paginacion)) : ?>
        <form action="<?php echo base_url("productos"); ?>" id="form_val" class="can-form cfx fr" method="post">
          <div class="src-select fr tr">
            <select name="val" id="select_val">
              <option value="6">&nbsp; &bull; &nbsp; Ver 6 productos</option>
              <option value="12">&nbsp; &bull; &nbsp; Ver 12 productos</option>
              <option value="18">&nbsp; &bull; &nbsp; Ver 18 productos</option>
              <option value="24">&nbsp; &bull; &nbsp; Ver 24 productos</option>
              <option value="30">&nbsp; &bull; &nbsp; Ver 30 productos</option>
              <option value="">&nbsp; &bull; &nbsp; Ver todos los productos</option>
            </select>
          </div>
        </form>
        <?php endif; ?>
        <div class="con-pag-pro fr"> <?php echo $paginacion; ?> </div>
        <?php /*if($num_pages > 1){ ?>
           <a href="<?php echo $ultimo; ?>">Último</a>
          <?php if($sig != false){ ?>
           <a href="<?php echo $sig; ?>">Sig.</a>
          <?php } ?>
           <p>...</p>
         <?php 
           $n_p = ($num_pages < 3)?$num_pages:3;   
           $s= round(($cur-1)/$n_p);
           $ini=($s*$n_p)+1;
           if($cur<$num_pages)
           {
             $f=$ini+$n_p-1;
           }else{
             $f=$n_p;
             $ini = $ini-1;
           } 
         for ($i = $f; $i >= $ini ; $i--){ ?>
          <a class="<?php echo($i == $cur)?"pag-act":""; ?>" href="<?php echo $base_url.$i; ?>"><?php echo $i; ?></a>
         <?php } ?>  
          <p>...</p>
           <?php if($ant != false){ ?>
           <a href="<?php echo $ant; ?>">Ant.</a>
          <?php } ?>
          <a href="<?php echo $primero; ?>">Primero</a> 
       <?php } ?>
        </div>  */?>
      </div>
      <!--Fila productos x3-->
      <div class="con-greats">
        <div class="great great-int">
          <?php $x = 0; foreach ($productos as $producto) : ?>
          <div class="great-item fl tr">
            <div class="fig-great"><img src="<?php echo base_url().$producto->imagen_path; ?>" alt=""></div>
            <h1 class="tr" id="great-title"><?php echo strtoupper($producto->nombre); ?></h1>
            <h1 class="tr" id="great-ref">Marca: <?php echo $producto->marca; ?></h1>
            <p class="tr"><?php echo substr(strip_tags($producto->descripcion),0,100).".."; ?></p>
            <?php if(isset($producto->promociones_antes) and !empty($producto->promociones_antes)) : ?>
            <h1 class="tr" id="great-cost"><span class="fl">Antes: <?php
            	echo number_format($producto->promociones_antes, 0, ",", "."); ?></span>
              <span class="fr">Ahora: <?php echo number_format($producto->promociones_ahora, 0, ",", "."); ?></span></h1>
            <?php else : ?>
            <h1 class="tr" id="great-cost">$ <?php echo number_format($producto->precio, 0, ",", "."); ?></h1>
            <?php endif; ?>
            <div class="con-great-bts"><a class="great-bt-1 tr add_to_cart"   data-url="<?php echo  base_url()."carrito/add_to_cart"; ?>" data-datos="id=<?php echo $producto->id; ?>"  href="#">COMPRAR</a><a class="great-bt-2 tr" href="<?php echo base_url(); ?>producto-info/index/<?php echo $producto->id; ?>">VER MÁS</a></div>
          </div>
          <?php
						$x++;
						if(($x%3) == 0 and $x < $per_page) :
							echo "\t\t\t\t</div>\n";
							echo "\t\t\</div>\n";
							echo "\t<div class=\"con-greats\">";
							echo "<div class=\"great great-int\">\n";
						endif;
          ?>
          <?php endforeach; ?>
        </div>
      </div>
      <!--Fin fila productos x3--> 
    </div>
  </div>
</section>
