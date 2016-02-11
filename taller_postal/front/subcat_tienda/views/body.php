<div class="content_int clearfix">
	<h1 class="bebas main-title"><span>Matrimonios</span></h1>
  <div class="menu_lat left">
    <ul class="lista_menu bebas">
      <li>
        <a class="cat_activa" href="<?php echo base_url(); ?>javascript:void(0);">Lorem ipsum</a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>cat_tienda">Lorem dolor sit</a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>cat_tienda">Lorem sit amet</a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>cat_tienda">Lorem rengin amet</a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>cat_tienda">Lorem ipsum</a>
      </li>
    </ul>
    <div class="linea_home"></div>
    <a href="#" class="dest_prod">
      <h2 class="bebas">Producto más vendido</h2>
      <div class="item_dest">
        <img src="<?php echo base_url(); ?>assets/img/img_dest1.jpg" />
        <div class="over_dest bebas">
          <div class="table_over">
            <div class="cell_over">
              <span class="icon_vermas_dest"></span>
              <h4>Papelería - Fiestas</h4>
            </div>
          </div>
        </div>
      </div>
      
    </a>
    <div class="linea_home"></div>
    <a href="<?php echo base_url(); ?>carrito" class="carrito_menu">
      <h2 class="bebas">Mi carrito de compras</h2>
      <div class="num_items"><span>0</span> item agregados</div>
    </a>
  </div>
  
  <div class="content_cat right">
    <div class="paginador bebas">
      <a href="#"><<</a>
      <a href="#"><</a>
      <a class="pagina_activa" href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">></a>
      <a href="#">>></a>
    </div>
    <div class="clearfix">
    <!--  <div class="item_cat left">
        <a href="<?php echo base_url(); ?>custom_prod" class="item_dest">
          <img src="<?php echo base_url(); ?>assets/img/azul1.jpg" />
          <div class="over_dest bebas">
            <div class="table_over">
              <div class="cell_over">
                <span class="icon_vermas_dest"></span>
              </div>
            </div>
          </div>
        </a>
        <h3 class="bebas">Tarjetas lorem ipsum</h3>
        <h4>por <a href="<?php echo base_url(); ?>disenador">Andres García</a></h4>
        <div class="select_colors">
          <a rel="assets/img/azul1.jpg" style="background-color:#2096d3;"></a>
          <a rel="assets/img/rojo1.jpg" style="background-color:#ff0000;"></a>
          <a rel="assets/img/verde1.jpg" style="background-color:#00ff60;"></a>
        </div>
      </div>
      <div class="item_cat left">
        <a href="<?php echo base_url(); ?>custom_prod" class="item_dest">
          <img src="<?php echo base_url(); ?>assets/img/azul1.jpg" />
          <div class="over_dest bebas">
            <div class="table_over">
              <div class="cell_over">
                <span class="icon_vermas_dest"></span>
              </div>
            </div>
          </div>
        </a>
        <h3 class="bebas">Tarjetas lorem ipsum</h3>
        <h4>por <a href="<?php echo base_url(); ?>disenador">Andres García</a></h4>
        <div class="select_colors">
          <a rel="assets/img/azul1.jpg" style="background-color:#2096d3;"></a>
          <a rel="assets/img/rojo1.jpg" style="background-color:#ff0000;"></a>
          <a rel="assets/img/verde1.jpg" style="background-color:#00ff60;"></a>
        </div>
      </div>
        -->
      <?php foreach ($productos as $product): ?>
        <div style="margin-right:0" class="item_cat left">
        <a href="<?php echo base_url(); ?>custom_prod/<?php echo $product->id; ?>" class="item_dest">
          <img src="<?php
          $color = $product->get_color('imagen','color','color_id'); 
          $disenador = $product->get_disenador('producto'); 
          echo base_url().$color->imagen_path;
          ?>" />
          <div class="over_dest bebas">
            <div class="table_over">
              <div class="cell_over">
                <span class="icon_vermas_dest"></span>
              </div>
            </div>
          </div>
        </a>
        <h3 class="bebas"><?php echo $product->nombre; ?></h3>
        <h4>por <a href="<?php echo base_url(); ?>disenador/<?php echo $disenador->id ?><?php ?>"><?php echo $disenador->nombre ?></a></h4>
        <div class="select_colors">
         <?php foreach ($color as $cvalue): ?>  
          <a rel="<?php echo $cvalue->imagen_path; ?>" style="background-color:<?php echo $cvalue->color_valor; ?>;"></a>
        <?php endforeach; ?> 
        </div>
      </div>
     <?php endforeach; ?>    
        
        <!--
      <div class="item_cat left">
        <a href="<?php echo base_url(); ?>custom_prod" class="item_dest">
          <img src="<?php echo base_url(); ?>assets/img/azul1.jpg" />
          <div class="over_dest bebas">
            <div class="table_over">
              <div class="cell_over">
                <span class="icon_vermas_dest"></span>
              </div>
            </div>
          </div>
        </a>
        <h3 class="bebas">Tarjetas lorem ipsum</h3>
        <h4>por <a href="<?php echo base_url(); ?>disenador">Andres García</a></h4>
        <div class="select_colors">
          <a rel="assets/img/azul1.jpg" style="background-color:#2096d3;"></a>
          <a rel="assets/img/rojo1.jpg" style="background-color:#ff0000;"></a>
          <a rel="assets/img/verde1.jpg" style="background-color:#00ff60;"></a>
        </div>
      </div>
      <div class="item_cat left">
        <a href="<?php echo base_url(); ?>custom_prod" class="item_dest">
          <img src="<?php echo base_url(); ?>assets/img/azul1.jpg" />
          <div class="over_dest bebas">
            <div class="table_over">
              <div class="cell_over">
                <span class="icon_vermas_dest"></span>
              </div>
            </div>
          </div>
        </a>
        <h3 class="bebas">Tarjetas lorem ipsum</h3>
        <h4>por <a href="<?php echo base_url(); ?>disenador">Andres García</a></h4>
        <div class="select_colors">
          <a rel="assets/img/azul1.jpg" style="background-color:#2096d3;"></a>
          <a rel="assets/img/rojo1.jpg" style="background-color:#ff0000;"></a>
          <a rel="assets/img/verde1.jpg" style="background-color:#00ff60;"></a>
        </div>
      </div>
      <div style="margin-right:0" class="item_cat left">
        <a href="<?php echo base_url(); ?>custom_prod" class="item_dest">
          <img src="<?php echo base_url(); ?>assets/img/azul1.jpg" />
          <div class="over_dest bebas">
            <div class="table_over">
              <div class="cell_over">
                <span class="icon_vermas_dest"></span>
              </div>
            </div>
          </div>
        </a>
        <h3 class="bebas">Tarjetas lorem ipsum</h3>
        <h4>por <a href="<?php echo base_url(); ?>disenador">Andres García</a></h4>
        <div class="select_colors">
          <a rel="assets/img/azul1.jpg" style="background-color:#2096d3;"></a>
          <a rel="assets/img/rojo1.jpg" style="background-color:#ff0000;"></a>
          <a rel="assets/img/verde1.jpg" style="background-color:#00ff60;"></a>
        </div>
      </div>
      <div class="item_cat left">
        <a href="<?php echo base_url(); ?>custom_prod" class="item_dest">
          <img src="<?php echo base_url(); ?>assets/img/azul1.jpg" />
          <div class="over_dest bebas">
            <div class="table_over">
              <div class="cell_over">
                <span class="icon_vermas_dest"></span>
              </div>
            </div>
          </div>
        </a>
        <h3 class="bebas">Tarjetas lorem ipsum</h3>
        <h4>por <a href="<?php echo base_url(); ?>disenador">Andres García</a></h4>
        <div class="select_colors">
          <a rel="assets/img/azul1.jpg" style="background-color:#2096d3;"></a>
          <a rel="assets/img/rojo1.jpg" style="background-color:#ff0000;"></a>
          <a rel="assets/img/verde1.jpg" style="background-color:#00ff60;"></a>
        </div>
      </div>
      <div class="item_cat left">
        <a href="<?php echo base_url(); ?>custom_prod" class="item_dest">
          <img src="<?php echo base_url(); ?>assets/img/azul1.jpg" />
          <div class="over_dest bebas">
            <div class="table_over">
              <div class="cell_over">
                <span class="icon_vermas_dest"></span>
              </div>
            </div>
          </div>
        </a>
        <h3 class="bebas">Tarjetas lorem ipsum</h3>
        <h4>por <a href="<?php echo base_url(); ?>disenador">Andres García</a></h4>
        <div class="select_colors">
          <a rel="assets/img/azul1.jpg" style="background-color:#2096d3;"></a>
          <a rel="assets/img/rojo1.jpg" style="background-color:#ff0000;"></a>
          <a rel="assets/img/verde1.jpg" style="background-color:#00ff60;"></a>
        </div>
      </div>
      <div style="margin-right:0" class="item_cat left">
        <a href="<?php echo base_url(); ?>custom_prod" class="item_dest">
          <img src="<?php echo base_url(); ?>assets/img/azul1.jpg" />
          <div class="over_dest bebas">
            <div class="table_over">
              <div class="cell_over">
                <span class="icon_vermas_dest"></span>
              </div>
            </div>
          </div>
        </a>
        <h3 class="bebas">Tarjetas lorem ipsum</h3>
        <h4>por <a href="<?php echo base_url(); ?>disenador">Andres García</a></h4>
        <div class="select_colors">
          <a rel="assets/img/azul1.jpg" style="background-color:#2096d3;"></a>
          <a rel="assets/img/rojo1.jpg" style="background-color:#ff0000;"></a>
          <a rel="assets/img/verde1.jpg" style="background-color:#00ff60;"></a>
        </div>
      </div>
        -->
    </div>
    <div class="paginador bebas">
      <a href="#"><<</a>
      <a href="#"><</a>
      <a class="pagina_activa" href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">></a>
      <a href="#">>></a>
    </div>
  </div>
</div>