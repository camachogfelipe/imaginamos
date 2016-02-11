<?php require_once("class/desplegables.php"); ?>
<div class="header">
    <div class="logo-header"><a href="index.php"><img src="imagenes/logo-header.png" width="128" height="130" alt="" /></a></div>
    <div class="main-redes">
        <a href="#" target="_blank"><div class="header-red-1"></div></a>
        <a href="#" target="_blank"><div class="header-red-2"></div></a>
    </div>
    <?php $nosotros = desplegables::Nosotros();?>
    <?php $productos = desplegables::productos() ?>
    <?PHP $catalogo = desplegables::catalogo();?>
    <?php $distribuidor = desplegables::distribuidor();?>
    <div class="main-nav">
        <ul class="main-menu">
            <li class="bg-menu-l"></li>
            <li><a href="index.php">Home</a></li><li class="borde-menu"></li>
            <li>
                <a href="nosotros.php">Nosotros</a>
                <ul>
                    <li><a href="nosotros.php#Ancla"><?php echo utf8_encode($nosotros[0]["nosotros_title"]); ?></a></li>
                    <li><a href="nosotros.php#Ancla"><?php echo utf8_encode($nosotros[1]["nosotros_title"]); ?></a></li>
                    <li><a href="nosotros.php#Ancla"><?php echo utf8_encode($nosotros[2]["nosotros_title"]); ?></a></li>
                    <li><a href="nosotros.php#Ancla1"><?php echo utf8_encode($nosotros[3]["nosotros_title"]); ?></a></li>
                    <li><a href="nosotros.php#Ancla1"><?php echo utf8_encode($nosotros[4]["nosotros_title"]); ?></a></li>
                </ul>
            </li><li class="borde-menu"></li>
            <li><a href="productos.php">Productos</a>
                <ul>
                    <?php
                    for ($i = 0; $i < sizeof($productos); $i++) {
                        ?>
                        <li><a href="productos-info.php?id=<?php echo $productos[$i]["categoria_id"]; ?>"><?php echo utf8_encode($productos[$i]["categoria_title"]); ?></a></li>
                    <?php } ?>
                </ul>
            </li>
            <li class="borde-menu"></li>
            <li>
                <a href="catalogos.php">Catálogos</a>
                <ul>
                    <?php
                    for ($i = 0; $i < sizeof($catalogo); $i++) {
                        ?>
                        <li><a href="catalogos.php#Ancla<?php echo $i; ?>"><?php echo utf8_encode($catalogo[$i]["catalogo_title"]); ?></a></li>
                    <?php } ?>
                </ul>
            </li><li class="borde-menu"></li>
            <li><a href="novedades.php">Novedades</a></li><li class="borde-menu"></li>
            <li><a href="distribuidores.php">Distribuidores</a>
                <ul>
                    <?php for ($a = 0; $a < count($distribuidor); $a++) { ?>
                            <li><a href="distribuidores.php?id=<?php echo $distribuidor[$a]["distribuidor_id"]?>"><?php echo $distribuidor[$a]["distribuidor_nombre"]?></a></li>
                    <?php }
                    ?>
                </ul>

            </li><li class="borde-menu"></li>
            <li><a href="contacto.php">Contáctenos</a></li>
            <li class="bg-menu-r"></li>
        </ul>
        <div class="menu-sombra"></div>
    </div>
</div>