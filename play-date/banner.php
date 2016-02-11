<?php
$result = $obj->PintarBanner();
?>
<div class="banner">
    <div class="margen">
        <ul class="slider">
            <?php
            for ($i = 0; $i < count($result); $i++) {
                ?>
                <li>
                    <div class="imagen"><img title="<?php echo $result[$i]['id_banner_superior']; ?>" src="imagenes/<?php echo $result[$i]['imagen_banner_superior']; ?>" /> </div>
                    <div class="texto-1"><?php echo $result[$i]['titulo_banner_superior']; ?></div>
                    <div class="texto-2"><?php echo $result[$i]['titulo2_banner_superior']; ?></div>
                </li>
            <?php } ?>

        </ul>
    </div>
</div>
