<section>
    <div class="con-section">
      <div class="mg-section cfx">
        <h1 class="main-title">Nuestros servicios</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
        <ul class="con-globos">
        	<li class="globos-x3">
            <?php 
            $numerador = 0;
            foreach ($servicios as $servicio) {
              if($numerador <= 2){
              ?>
          	<!--Globo servicio-->
          	<div class="globo" id="globo-<?= $numerador ?>">
              <a href="<?= base_url("servicios/ver/".$servicios[$numerador]["id"]) ?>">
              	<div class="con-globo-icon">
                  <div class="globo-icon"><span class="fl"><img src="<?= $servicios[$numerador]["imagen"] ?>" width="85" height="85"></span></div>
                </div>
                <h1><?= $servicios[$numerador]["titulo"] ?></h1>
                <div class="globo-info">
                  <p><?= $servicios[$numerador++]["texto"] ?></p>
                </div>
              </a>
            </div>
            <?php 
              }
            } ?>
          </li>
          <li>
            <?php foreach ($servicios as $servicio){ 
              if($numerador > 2 && $numerador < count($servicios)){
              ?>
            <!--Globo servicio-->
          	<div class="globo" id="globo-<?= $numerador ?>">
            	<a href="<?= base_url("servicios/ver/".$servicios[$numerador]["id"]) ?>">
                <div class="con-globo-icon">
                	<div class="globo-icon"><span class="fl"><img src="<?= $servicios[$numerador]["imagen"] ?>" width="85" height="85"></span></div>
                </div>
                <h1><?= $servicios[$numerador]["titulo"] ?></h1>
                <div class="globo-info">
                  <p><?= $servicios[$numerador++]["texto"] ?></p>
                </div>
              </a>
            </div>
            <?php 
              }
            } ?>
          </li>
        </ul>
      </div>
    </div>
  </section>