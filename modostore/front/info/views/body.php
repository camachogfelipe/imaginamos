
	
<?php if($informacion_get->id == 6): ?>
<style type="text/css">.head-como {display:none;}</style>
<?php endif;?>
  <a class="back-bt tr" href="<?php echo base_url(); ?>javascript:history.back()">« Volver</a>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <h1 class="pro-title"><?php echo $informacion_get->titulo; ?></h1>
        <div class="con-grl-tx">
            <?php echo $informacion_get->texto; ?>	
        </div>
      </div>
    </div>
  </section>

