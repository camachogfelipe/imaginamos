<style type="text/css">.item_cat.left {margin:0 46px 30px 0; height:300px; overflow:hidden;} .item_cat h3 {font-size:20px;}</style>
<div class="content_int clearfix">
	<h1 class="bebas main-title"><span>Comunidad</span></h1>
  <div class="main_p">
    <?php echo $comunidad->texto; ?>
  </div>
  <div class="lista_com">
    <!--div class="paginador bebas">
      <a href="#"><<</a>
      <a href="#"><</a>
      <a class="pagina_activa" href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">></a>
      <a href="#">>></a>
    </div-->
    <div class="clearfix">
      <?php
      $j = 1; 
      foreach ($desings as $desing): ?>
        <div class="item_cat left"  <?php  
          if( $j == 4 ){ 
            echo 'style="margin-right:0;"'; 
            $j=0;
          }
         ?> >
        <a href="<?php echo base_url(); ?>disenadores/disenador/<?php echo $desing->id ?>" class="item_dest">
            <img width="200" height="200" src="<?php echo base_url().$desing->imagen_path; ?>" />
          <div class="over_dest over-ds bebas">
            <div class="table_over">
              <div class="cell_over">
                <span class="icon_vermas_dest"></span>
              </div>
            </div>
          </div>
        </a>
        <h3 class="bebas tx-black"><?php echo $desing->nombre; ?></h3>
        <div class="con-ds-tags clearfix">
          <?php 
          $lineas = $desing->get_linea('disenador');
         $i=1; 
          foreach ($lineas as $obj) : ?>  
            <div style="font-size: 9px;" class="tag tag-color-<?php echo $i; if($i==8)$i=1; $i++; ?>"><?php echo $obj->titulo; ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php 
     $j++;
    endforeach; ?> 
    </div>
    <div class="paginador bebas">
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