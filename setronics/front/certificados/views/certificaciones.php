  <style type="text/css">#nav-bt-5 {background-color:#6a6a6a;} #foo-bt-4 {color:#ce1728;}</style>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <div class="con-miga">
          <ul class="miga-site">
            <li><a href="home">Inicio</a></li>
            <li><a href="tecnico">Servicio técnico</a></li>
            <li><a href="certificados">Certificaciones</a></li>
          </ul>
        </div>
        <div class="con-logo-section">
          <img src="img/logo-t3.png" height="74" width="204" alt="">
        </div>
        <h1 class="main-title">
          Certificaciones
        </h1>
        <div class="pager-info pager-items-certificados cfx">  
          <ul class="certificados-scroll-list cfx">
            <!--<div class="scroll-wrap">-->
              <li>
                  
                  <?php foreach ($certificaciones as $obj) : ?>
                <div class="con-item-x4 con-item-certificado">
                  <div class="over-items">
                      <div class="item-over-img item-x4-img"><img src="<?php echo base_url().$obj->imgen_path; ?>" height="125" width="125"></div>
                    <h1><?php echo $obj->titulo;  ?></h1>
                    <div class="con-certificado-info">
                      <p><?php echo $obj->texto; ?></p>
                      <div class="con-btsv">
                          <a href="<?php echo base_url().$obj->path_certificado; ?>" target="_blank" class="over-items"><div class="btv btv-i1">Descargar</div></a>
             	      </div>
                    </div>
                  </div>
                </div>
                  <?php endforeach; ?>
                  
                        <!--</div>-->
              </li>
          </ul>
          <!--<div class="pager-nav"></div>-->
        </div>
      </div>
    </div>
  </section>