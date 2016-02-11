<?php include("head.php"); ?>
<?php include("header.php"); ?>

<?php
if ($mensaje != '') {
    ?>
    <script>alert('<?php echo $mensaje; ?>');window.location = '../secciones/servicioinfo/<?php echo $idServicio;?>';</script>
    <?php
}

if ($detalle_servicios != false):
    ?>
    <section class="serv-info cfx">
        <div class="con-back-bt"><a class="back-bt" href="javascript:history.back()"><span class="icon-back"></span>Volver</a></div>
        
        <div class="con-service-tx">
        
          <h1 class="main-title"><?php echo $detalle_servicios->servicio; ?></h1>
          <p><?php echo $detalle_servicios->titulo; ?></p>
          <figure class="img-serv-info fr">
              <a href="<?php echo site_url(); ?>chatroom">
                  <span class="icon-chat"></span>
                  <h1>Accede a nuestro chat</h1>
              </a>
          </figure>
          <?php echo $detalle_servicios->texto ?>
        
        </div>
        
        <div class="sev-img-b">
            <!--<div class="con-ser-img-b" style="background:url(<?php echo base_url('uploads/front/detalle_servicios/' . $detalle_servicios->imagen) ?>);"></div>-->
            <div class="con-ser-img-b"><img src="<?php echo base_url('uploads/front/detalle_servicios/' . $detalle_servicios->imagen) ?>" width="100%" /></div>
        </div>
    </section>
<?php endif; ?>

<?php if ($detalle_servicios != false): ?>
    <section class="serv-info cfx">
        <h1 class="main-title">Cont&aacute;ctenos:</h1>
        <p><?php echo $detalle_servicios->texto_contactenos; ?></p>
        <form action="../secciones/servicioinfo/<?php echo $idServicio;?>" class="grl-form cfx" method="post">
            <div class="grl-form-col">
                <div class="con-ing-form">
                    <input id="nombre" name="nombre" class="validate[required]" type="text" placeholder="Nombre..." value="">
                </div>
                <div class="con-ing-form">
                    <select id="pais" name="pais" class="validate[required]" onchange="consultarCiudad(this);">
                        <option value="">Pa&iacute;s...</option>
                        <?php if ($pais != false): ?>
                            <?php foreach ($pais as $dato): ?>
                                <option value="<?php echo $dato->id; ?>">&nbsp; &bull; <?php echo $dato->nombre; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="con-ing-form">
                    <select id="ciudad" name="ciudad" class="validate[required]">
                        <option value="">Ciudad...</option>
                    </select>
                </div>
            </div>
            <div class="grl-form-col">
                <div class="con-ing-form">
                    <input id="correo" name="correo" class="validate[required, custom[email]]" type="text" placeholder="Correo electrónico..." value="">
                </div>
                <div class="con-ing-form">
                    <textarea id="comentario" class="validate[required]" name="comentario" value="" placeholder="Comentarios..."></textarea>
                </div>
                <input class="bt-form" type="submit" value="Enviar">
            </div>
        </form>
    </section>
<?php endif; ?>
<?php include("footer.php"); ?>