<div class="content_int clearfix">
	<h1 class="bebas main-title"><span><?php echo $section;?></span></h1>
  
  <ul class="miga clearfix">
    <li><a href="<?php echo base_url(); ?>">Home</a></li>
    <li><a>></a></li>
    <?php foreach ($miga as $key => $value):?>
  	<li><a <?php echo ($value=="")?' class="sec-act"':' href="'.$value.'"' ?> ><?php echo $key ?></a></li>
        <?php echo ($value!="")?'<li><a>></a></li>':""; ?>    
    <?php endforeach; ?>
  </ul>
  
  <hr class="sep-rom">
  <div class="menu_lat left">
    <ul class="lista_menu bebas menu_cat">
    <?php foreach ($menu as $obj ): ?>
      <li>
        <a class="<?php echo ($obj->id == $request_id)?"cat_activa":"";?>" href="<?php echo $ruta.$obj->id; ?>"><?php echo $obj->titulo; ?></a>
      </li>
      <?php endforeach;  ?>
    </ul>

    <hr class="sep-rom">
    <a href="<?php echo base_url(); ?>carrito" class="carrito_menu">
      <h2 class="bebas">Mi carrito de compras</h2>
      <div class="num_items"><span><?php echo $this->cart->total_items(); ?></span> item agregados</div>
    </a>
  </div>
  
  <div class="content_cat right">
    <div class="clearfix">
        <?php 
        $i = 1; 
        foreach ($productos as $product): ?>
        <div <?php if($i == 3){echo ' style="margin-right:0" '; $i=0;} $i++; ?>  class="item_cat left">
            <a href="<?php echo base_url(); ?>custom_prod/info/<?php echo $product->id; ?>" class="item_dest">
                <img width="200" height="200" src="<?php
          $color = $product->get_color('imagen','color','color_id'); 
          $disenador = $product->get_disenador('producto'); 
          echo base_url().$color->imagen_path;
          ?>" />
          <div class="over_dest over-ds bebas">
          <div class="table_over">
            <div class="cell_over"> <span class="icon_vermas_dest"></span> </div>
          </div>
        </div>
        </a>
        <h3 class="bebas"><?php echo $product->tiutlo; ?></h3>
        <h4>por <a href="<?php echo base_url(); ?>disenadores/<?php echo $disenador->id ?>"><?php echo $disenador->nombre ?></a></h4>
        <div class="select_colors">
         <?php foreach ($color as $cvalue): ?>  
          <a rel="<?php echo $cvalue->imagen_path; ?>" style="background-color:<?php echo $cvalue->color_valor; ?>;"></a>
        <?php endforeach; ?> 
        </div>
      </div>
     <?php endforeach; ?>
    </div>
    <div class="paginador bebas">
     <?php echo $this->pagination->create_links(); ?> 
    </div>
  </div>
</div>