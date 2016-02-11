<section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1 class="main-title">Nuestra compañía</h1>
        <div class="con-emp fl">
          <div class="nav-emp fl">
          	<ul class="fl">
              <?php
              $numerador = 1;
              foreach($titulos as $titulo) {?>
                <li><a class="emp-bt <?php if($numerador == 1) { ?>emp-act<?php } ?>" data-id="emp-info-<?= $numerador++ ?>"><?= $titulo["titulo"] ?></a></li>
              <?php } ?>
            </ul>
          </div>
          <div class="info-emp fr">
            <?php 
            $numerador = 1;
            foreach($articulos as $articulo) {?>
            <div class="emp-info emp-info-<?= $numerador ?>" <?php if($numerador == 1) :?>style="display:block;"<?php endif; ?>>
              <h1 class="main-title"><?= $titulos[($numerador++)-1]["titulo"] ?></h1>
              <div class="emp-tx fl">
              	<div class="scroll-wrap">
                  <p><?= $articulo["texto"] ?></p>
                </div>
              </div>
              <a class="emp-img fr modals-act" href="#modal-articulo-<?= $articulo["id"] ?>"><img src="<?= $articulo["imagen"] ?>" height="330" width="290" alt=""></a>
            </div>
            <?php } ?>
            <div class="emp-info emp-info-<?= $numerador ?>">
              <h1 class="main-title"><?= $titulos[$numerador-1]["titulo"] ?></h1>
              <div class="con-certs fl">
              	<div class="scroll-wrap">
                  <ul class="certs-list">
                    <?php foreach ($certificaciones[0] as $certificacion) :?>
                    <li>
                      <div class="certs-logo"><span><img src="<?= $certificacion["imagen"] ?>" height="80" width="80" alt=""></span></div>
                      <div class="certs-tx">
                        <p><?= $certificacion["texto"] ?></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          <div class="marca-logo-2"></div>
        </div>
      </div>
    </div>
  </div>
</section>