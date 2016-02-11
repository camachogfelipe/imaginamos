<section>
  <div class="con-section">
    <div class="mg-section cfx">
      <h1 class="main-title">Nuestros clientes</h1>
      <div class="con-crr fl">
          <ul class="cliente-crr">
          <?php foreach($clientes as $cliente) :?>
          <li>
            <a class="over-crr" href="<?= base_url("clientes/ver/".$cliente["id"]) ?>">
              <div class="cliente-item">
                <div class="cliente-logo">
                    <span class="fl"><img src="<?= $cliente["imagen"] ?>" height="100" width="100" alt=""></span>
                </div>
                <h1 class="fl"><?= $cliente["nombre"] ?></h1>
              </div>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>	
          <div class="arrow-tl"></div>
        <div class="arrow-br"></div>
      </div>        
    </div>
  </div>
</section>