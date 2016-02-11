
	<style type="text/css">#nav-bt-4 {background-color:#6a6a6a;} #foo-bt-2 {color:#ce1728;}</style>
	
	
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <div class="con-miga">
          <ul class="miga-site">
            <li><a href="home">Inicio</a></li>
            <li><a href="integracion">Integración</a></li>
          </ul>
        </div>
         
        <div class="con-logo-section">
          <img src="<?php echo global_asset($img); ?>" height="74" width="204" alt="">
        </div>
        <div class="pager-info pager-items-x4 cfx">  
          <ul class="items-scroll-x4 cfx">
          	<!--<div class="scroll-wrap">-->
             
                 <?php foreach ($casos as $obj) : ?>
                <li>
                <div class="con-item-x4">
                    <a href="<?php echo base_url()."integracion/integracion-info?id=".$obj->id."&linea=".$obj->linea_id; ?>" class="over-items">
                    <div class="item-over-img item-x4-img"><img src="<?php echo base_url().$obj->imagen_path;  ?>" height="125" width="125"></div>
                    <h1><?php echo $obj->titulo;  ?></h1>
                  </a>
                </div>
              </li>
             <?php endforeach; ?>
          </ul>
          <!--<div class="pager-nav"></div>-->
        </div>
           
      </div>
    </div>
  </section>
  