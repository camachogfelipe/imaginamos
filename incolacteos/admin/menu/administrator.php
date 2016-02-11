<?php
$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query, SELECT_QUERY);
$result = $db->results;
?>
<?php if ($_SESSION['CMSRolUser'] == "admin") { ?>
    <div class="setting"><a href="<?php echo $result[0][config_path]; ?>modules/admin/view/"><b>Administradores</b></a><img src="http://cms.imaginamos.com/images/gear.png" class="gear"></div>
<?php } ?>
<div class="logout" title="Clic"><b><a href="<?php echo $result[0][config_path]; ?>js/logout.php">Salir</a></b></div> 