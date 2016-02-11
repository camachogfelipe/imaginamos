<?php include("head.php"); ?>
<?php include("header.php"); ?>
<?php
$textoContactenos = '';
$imagenContactenos = '';
if ($contacto != false) {
    $textoContactenos = $contacto[0]->texto;
    $imagenContactenos = $contacto[0]->imagen;
}

if ($mensaje != '') {
    ?>
    <script>alert('<?php echo $mensaje; ?>');window.location = '../secciones/contacto';</script>
    <?php
}
?>

<section class="cfx">
    <ul class="nav-din-con cfx">
        <li><a data-id="info-b1" class="nav-din-con-bt nav-din-act">Contáctenos</a></li>
        <li><a data-id="info-b2" class="nav-din-con-bt">Nuestras oficinas</a></li>
    </ul>
    <div class="con-info-bc info-b1">
        <h1 class="main-title">Contáctenos</h1>
        <p style="font-size:1em;"><?php echo $textoContactenos; ?></p>
        <form action="../secciones/contacto" class="grl-form cfx" method="post">
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
                <div class="con-ing-form">
                    <input id="correo" name="correo" class="validate[required, custom[email]]" type="text" placeholder="Correo electrónico..." value="">
                </div>
                <div class="con-ing-form">
                    <textarea id="comentario" class="validate[required]" name="comentario" value="" placeholder="Comentarios..."></textarea>
                </div>
                <input class="bt-form" type="submit" value="Enviar">
            </div>
            <div class="grl-form-col">
                <figure class="contact-img">
                    <img src="<?php echo base_url('uploads/front/contactenos/' . $imagenContactenos) ?>" alt="">
                </figure>
            </div>
        </form>
    </div>
    <div class="con-info-bc info-b2">
        <h1 class="main-title">Nuestras oficinas</h1>
        <!--Oficina-->

        <?php if ($oficinas != false): ?>
            <?php foreach ($oficinas as $dato): ?>
                <div class="grl-form-col">
                    <div class="con-ofc">
                        <h1><?php echo $dato->titulo; ?></h1>
                        <?php echo $dato->texto; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>  

    </div>
</section>

<?php include("footer.php"); ?>