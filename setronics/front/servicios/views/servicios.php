  <style type="text/css">#nav-bt-5 {background-color:#6a6a6a;} #foo-bt-4 {color:#ce1728;}</style>
  
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <div class="con-miga">
          <ul class="miga-site">
            <li><a href="home">Inicio</a></li>
            <li><a href="tecnico">Servicio técnico</a></li>
            <li><a href="servicios">Servicios</a></li>
          </ul>
        </div>
        <div class="con-logo-section">
          <img src="img/logo-t3.png" height="74" width="204" alt="">
        </div>
          
         
        <h1 class="main-title">Servicios</h1>
        <div class="pager-info pager-serv-info cfx">
          <ul class="con-scroll-serv-info cfx">
            <!--<div class="scroll-wrap">-->
         <?php foreach ($servicios as $obj) : ?>
              <li>
                  <a href="<?php echo base_url()."servicios/servicio_info?id=$obj->id"; ?>" >
                  <div class="items-pro">
                      <div class="con-item-img"><img src="<?php echo base_url().$obj->imagen_path; ?>" width="422" height="322" alt=""></div>
                    <div class="con-item-info con-item-info-c3">
                      <h1><?php echo $obj->titulo; ?></h1>
                      <p><?php echo $obj->texto_intro; ?></p>
                    </div>
                  </div>
                </a>
              </li>
          <?php endforeach; ?> 
             <!-- 
              <li>
                <a href="servicio-info.php">
                  <div class="items-pro">
                    <div class="con-item-img"><img src="assets/img/servicios-img.jpg" width="422" height="322" alt=""></div>
                    <div class="con-item-info con-item-info-c3">
                      <h1>REPARACIÓN</h1>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="servicio-info.php">
                  <div class="items-pro">
                    <div class="con-item-img"><img src="assets/img/servicios-img.jpg" width="422" height="322" alt=""></div>
                    <div class="con-item-info con-item-info-c3">
                      <h1>INSTALACIÓN</h1>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="servicio-info.php">
                  <div class="items-pro">
                    <div class="con-item-img"><img src="assets/img/servicios-img.jpg" width="422" height="322" alt=""></div>
                    <div class="con-item-info con-item-info-c3">
                      <h1>VISITA TÉCNICA</h1>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="servicio-info.php">
                  <div class="items-pro">
                    <div class="con-item-img"><img src="assets/img/servicios-img.jpg" width="422" height="322" alt=""></div>
                    <div class="con-item-info con-item-info-c3">
                      <h1>OPCIÓN</h1>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                    </div>
                  </div>
                </a>
              </li>
             -->
            <!--</div>-->
          </ul>
          <!--<div class="pager-nav"></div>-->
        </div>
      </div>
    </div>
  </section>