<div class="header">
    <div class="contieneheader">
        <div class="logo"><a  onclick="cambiar3(<?php echo  $ss ?>)" href="index.php?seccion=index" class="<?php if ($_GET['seccion'] == 'index'){echo 'activo';}?>"><img src="imagenes/logo.png" /></a></div>
        <div class="menu">
        <ul id="menu">
            <li value="1"><a onclick="cambiar3(<?php echo  $ss ?>)" href="index.php?seccion=index" class="<?php if ($_GET['seccion'] == 'index'){echo 'activo';}?>">Inicio</a></li>
            <li value="<?php if ($_GET['seccion'] == 'nosotros'){echo '1';}?>"><a  onclick="cambiar3(<?php echo  $ss ?>)" href="index.php?seccion=nosotros" class="<?php if ($_GET['seccion'] == 'nosotros'){echo 'activo';}?>">¿Quiénes somos?</a></li>
            <li value="<?php if ($_GET['seccion'] == 'negocio'){echo '1';}?>"><a onclick="cambiar3(<?php echo  $ss ?>)" href="index.php?seccion=negocio" class="<?php if ($_GET['seccion'] == 'negocio'){echo 'activo';}?>">Líneas de negocio</a></li>
            <li value="<?php if ($_GET['seccion'] == 'contactenos'){echo '1';}?>"><a onclick="cambiar3(<?php echo  $ss ?>)" href="index.php?seccion=contactenos" class="<?php if ($_GET['seccion'] == 'contactenos'){echo 'activo';}?>">Contáctenos</a></li>
            <li value="<?php if ($_GET['seccion'] == 'company'){echo '1';}?>"><a onclick="cambiar3(<?php echo  $ss ?>)" href="index.php?seccion=company" class="<?php if ($_GET['seccion'] == 'company'){echo 'activo';}?>"><img class="bandera" src="imagenes/bandera.png" />English</a></li>
        </ul>
        <div id="slide"></div>
        </div>
    </div>
</div>
<a  class="documentacion" id="documentacion" onclick="cambiar3(<?php echo  $ss ?>)" href="index.php?seccion=cotizar"></a>
