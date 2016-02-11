<style type="text/css">#nav-bt-5 {background-color:#6a6a6a;} #foo-bt-4 {color:#ce1728;}</style>

  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <div class="con-miga">
          <ul class="miga-site">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="tecnico.php">Servicio técnico</a></li>
          </ul>
        </div>
        <div class="con-logo-section">
          <img src="img/logo-t3.png" height="74" width="204" alt="">
        </div>
        <div class="pager-info pager-servs cfx">
          <ul class="con-scroll-serv cfx">
          	<!--<div class="scroll-wrap">-->
              <?php foreach ($categorias as $obj) : ?>
               <li>
                <?php if(strtoupper(trim($obj->categoria)) === "CERTIFICACIONES") : ?>
                  <a href="<?php echo base_url()."certificados"; ?>" >
                <?php endif;?>
                <?php if(strtoupper($obj->categoria) === "PROPUESTA DE VALOR") : ?>
                  <a href="<?php echo base_url()."propuestas"; ?>" >
                <?php endif;?>
                <?php if(strtoupper(trim($obj->categoria)) === "SERVICIOS") : ?>
                  <a href="<?php echo base_url()."servicios"; ?>" >
                <?php endif;?>
                <div class="items-pro">
                      <div class="con-item-img"><img src="<?php echo base_url().$obj->imagen_path ; ?>" width="292" height="292" alt=""></div>
                    <div class="con-item-info con-item-info-c3">
                      <h1><?PHP echo $obj->categoria; ?></h1>
                      <p><?PHP echo $obj->descripcion; ?></p>
                    </div>
                  </div>
                </a>
              </li>
              <?php endforeach;?>
             <!-- 
              <li>
                  <a href="<?php echo base_url()."propuestas"; ?>">
                  <div class="items-pro">
                    <div class="con-item-img"><img src="assets/img/item-servicio-img.jpg" width="292" height="292" alt=""></div>
                    <div class="con-item-info con-item-info-c3">
                      <h1>PROPUESTAS DE VALOR</h1>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()."servicios"; ?>">
                  <div class="items-pro">
                    <div class="con-item-img"><img src="assets/img/item-servicio-img.jpg" width="292" height="292" alt=""></div>
                    <div class="con-item-info con-item-info-c3">
                      <h1>SERVICIOS</h1>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard...</p>
                    </div>
                  </div>
                </a>
              </li>
            
             <li>
                <a href="#">
                  <div class="items-pro">
                    <div class="con-item-img"><img src="assets/img/item-servicio-img.jpg" width="292" height="292" alt=""></div>
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
