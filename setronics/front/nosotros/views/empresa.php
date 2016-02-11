  <style type="text/css">#nav-bt-1 {background-color:#6a6a6a;} #foo-bt-1 {color:#ce1728;}</style>
  
  <?php foreach ($nosotros as $nosotros) { ?>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <h1 class="main-title">Información corporativa</h1>
        <div class="con-empresa-img"><img src="<?php echo  isset($nosotros->imagen_path)?base_url().$nosotros->imagen_path:""; ?>" height="300" width="932" alt=""></div>
        <h1 class="main-title"><?php echo isset($nosotros->parrafo_titulo)?$nosotros->parrafo_titulo:""; ?></h1>
        <p style="text-align: justify;"><?php echo isset($nosotros->parrafo_texto)?$nosotros->parrafo_texto:""; ?></p>
        <br>
        <h1 class="main-title"><?php echo isset($nosotros->parrafo1_titulo)?$nosotros->parrafo1_titulo:""; ?></h1>
        <p style="text-align: justify;"><?php echo isset($nosotros->parrafo1_texto)?$nosotros->parrafo1_texto:""; ?></p>
      </div>
    </div>
  </section>
  <?php }?>