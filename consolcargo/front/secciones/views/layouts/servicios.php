<?php
$textoNuestrosServicios = '';
if ($nuestros_servicios != false) {
    $textoNuestrosServicios = $nuestros_servicios[0]->texto;
}
?>

<?php include("head.php"); ?>
<?php include("header.php"); ?>

<section class="cfx">
    <h1 class="main-title">Nuestros servicios</h1>
    <div class="serv-globo">
        <h1>
            <?php echo $textoNuestrosServicios; ?>
        </h1>
    </div>
    <div class="con-servs">

        <?php if ($servicios != false): ?>
            <?php foreach ($servicios as $dato): ?>
                <div class="con-item-serv cfx">
                    <a href="../secciones/servicioinfo/<?php echo $dato->id;?>" >
                        <div class="item-serv fl">
                            <figure><img src="<?php echo base_url('uploads/front/servicios/' . $dato->imagen) ?>" height="100" width="252" alt=""></figure>
                            <figcaption class="fl">
                                <p><strong><?php echo $dato->titulo;?></strong></p>
                            </figcaption>
                            <div class="con-icon-grl fr">
                                <span class="icon-s1"></span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<?php include("footer.php"); ?>