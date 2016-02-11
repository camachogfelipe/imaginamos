<style type="text/css">#ds-bt {border-bottom:2px solid #888;}</style>
<div class="content_int clearfix">
  <h1 class="bebas main-title"><span><?php echo ucfirst(mb_strtolower($disenadores->nombre)) ?></span></h1>
  <h2 class="city-ds">Ciudad: <?php echo ucfirst(mb_strtolower($disenadores->municipios_nombre));  ?></h2>
  <div class="main_p clearfix">
    <img src="<?php echo base_url().$disenadores->imagen_path; ?>" class="right" width="300" />
    <div style="margin-bottom: 20px; height:72px; overflow:hidden;"><?php echo $disenadores->texto ?></div>
    <div class="con-ds-tags">
        <?php
        $i =1 ; 
        foreach ($disenadores->get_linea('disenador') as $value): ?>  
      <div class="tag tag-color-<?php echo $i; if($i ==8)$i=0; $i++; ?>"><?php echo $value->titulo; ?></div>
      <?php endforeach; ?>
     <!-- <div class="tag tag-color-2">Lorem ipsum</div>
      <div class="tag tag-color-3">Lorem ipsum</div>
      <div class="tag tag-color-4">Lorem</div>
      <div class="tag tag-color-5">Lorem ipsum</div>
      <div class="tag tag-color-6">Lorem ipsum</div>
      <div class="tag tag-color-7">Lorem ipsum</div>
      <div class="tag tag-color-8">Matrimonios</div> -->
    </div>
    <div class="con-gal-ds clearfix">
      <hr class="sep-rom">
      <div class="clearfix">
        
          
       <?php foreach ($productos as $producto) : ?>   
        <a class="item_design left" href="<?php echo base_url(); ?>custom_prod/info/<?php echo $producto->id;  ?>"> 
           <div class="item_dest">
            <img src="<?php
          $color = $producto->get_color('imagen','color','color_id'); 
          echo base_url().$color->imagen_path;
          ?>">
            <div class="over_dest over-ds bebas">
              <div class="table_over">
                <div class="cell_over">
                  <span class="icon_vermas_dest"></span>
                </div>
              </div>
            </div>
          </div>
          <h4 class="bebas"><?php echo $producto->tiutlo; ?></h4>
        </a>
       <?php endforeach; ?>    
          
         <!-- 
        <a class="item_design left" href="<?php echo base_url(); ?>home?seccion=custom_prod"> 
          <div class="item_dest">
            <img src="<?php echo base_url(); ?>assets/img/ds-work.png">
            <div class="over_dest over-ds bebas">
              <div class="table_over">
                <div class="cell_over">
                  <span class="icon_vermas_dest"></span>
                </div>
              </div>
            </div>
          </div>
          <h4 class="bebas">Diseño lorem ipsum</h4>
        </a>
        <a class="item_design left" href="<?php echo base_url(); ?>home?seccion=custom_prod"> 
          <div class="item_dest">
            <img src="<?php echo base_url(); ?>assets/img/ds-work.png">
            <div class="over_dest over-ds bebas">
              <div class="table_over">
                <div class="cell_over">
                  <span class="icon_vermas_dest"></span>
                </div>
              </div>
            </div>
          </div>
          <h4 class="bebas">Diseño lorem ipsum</h4>
        </a>
        <a class="item_design left" href="<?php echo base_url(); ?>home?seccion=custom_prod"> 
          <div class="item_dest">
            <img src="<?php echo base_url(); ?>assets/img/ds-work.png">
            <div class="over_dest over-ds bebas">
              <div class="table_over">
                <div class="cell_over">
                  <span class="icon_vermas_dest"></span>
                </div>
              </div>
            </div>
          </div>
          <h4 class="bebas">Diseño lorem ipsum</h4>
        </a> --->
      </div>
      <div class="paginador paginador-ds bebas">
       <?php echo $this->pagination->create_links(); ?>    
       <!-- a href="#"><<</a>
        <a href="#"><</a>
        <a class="pagina_activa" href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">></a>
        <a href="#">>></a> -->
      </div>
    </div>
  </div>
</div>