<?php
$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query,SELECT_QUERY);
$result = $db->results;
?>  
<li class="limenu" ><a href="<?php echo $result[0][config_path]; ?>dashboard.php"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>
<li class="limenu" ><a href="<?php echo $result[0][config_path]; ?>modules/admin/view/administrators.php" ><span class="ico gray shadow window"></span><b>Administradores</b></a></li>
<li class="limenu" ><a href="<?php echo $result[0][config_path]; ?>modules/admin/view/path.php" ><span class="ico gray shadow window"></span><b>Path de instalación</b></a></li>
<li class="limenu" ><a href="<?php echo $result[0][config_path]; ?>modules/admin/view/web.php" ><span class="ico gray shadow window"></span><b>Url "ver sitio"</b></a></li>
<li class="limenu" ><a href="<?php echo $result[0][config_path]; ?>modules/admin/view/menu.php" ><span class="ico gray shadow window"></span><b>Menús</b></a></li>
<li class="limenu" ><a href="<?php echo $result[0][config_path]; ?>modules/admin/view/mailSend.php" ><span class="ico gray shadow window"></span><b>Email</b></a></li>
<!--<li class="limenu" ><a href="<?php //echo $result[0][config_path]; ?>modules/admin/view/modules.php" ><span class="ico gray shadow window"></span><b>Módulos</b></a></li>-->
<!--<li class="limenu" ><a href="<?php //echo $result[0][config_path]; ?>modules/admin/view/video.php" ><span class="ico gray shadow window"></span><b>Video</b></a></li>-->

