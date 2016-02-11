<div class="header">
    <div class="contieneheader">
        <div class="logo"><a href="index.php?seccion=1" class="<?php if ($_GET['seccion'] == '1'){echo 'activo';}?>"><img src="imagenes/logo.png" /></a></div>
        <div class="menu">
        <ul id="menu">
            <li value="1"><a href="index.php?seccion=1" class="<?php if ($_GET['seccion'] == '1'){echo 'activo';}?>">Inicio</a></li>
            <li value="<?php if ($_GET['seccion'] == '2'){echo '1';}?>"><a href="nosotros.php?seccion=2" class="<?php if ($_GET['seccion'] == '2'){echo 'activo';}?>">¿Quiénes somos?</a></li>
            <li value="<?php if ($_GET['seccion'] == '3'){echo '1';}?>"><a href="negocio.php?seccion=3" class="<?php if ($_GET['seccion'] == '3'){echo 'activo';}?>">Líneas de negocio</a></li>
            <li value="<?php if ($_GET['seccion'] == '4'){echo '1';}?>"><a href="contactenos.php?seccion=4" class="<?php if ($_GET['seccion'] == '4'){echo 'activo';}?>">Contáctenos</a></li>
            <li value="<?php if ($_GET['seccion'] == '5'){echo '1';}?>"><a href="company.php?seccion=5" class="<?php if ($_GET['seccion'] == '5'){echo 'activo';}?>"><img class="bandera" src="imagenes/bandera.png" />English</a></li>
        </ul>
        <div id="slide"></div>
        </div>
    </div>
</div>
<a  class="documentacion" id="documentacion" href="cotizar.php"></a>
