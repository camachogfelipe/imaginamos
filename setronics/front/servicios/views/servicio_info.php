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
            <h1 class="main-title">
                <?php echo $servicio->titulo; ?>
                <a href="javascript:history.back()"><div class="back-bt">Volver</div></a>
            </h1>
            <div class="con-precio">
                <?php if ($is_proveedor) : ?>
                    <div class="precio precio-c3"><?php echo number_format($servicio->precio_provedor, 2); ?></div>
                <?php endif; ?>
                <?php if ($is_cliente) : ?>
                    <div class="precio precio-c3"><?php echo number_format($servicio->precio_cliente, 2); ?></div>
                <?php endif; ?>
            </div>
            <div class="servicio-info-img"><img src="<?php echo base_url() . $servicio->imagen_path; ?>" height="242" width="350" alt=""></div>
            <div class="servicio-info-info">
                <div class="scroll-wrap">
                    <p><?php echo $servicio->descripcion; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>