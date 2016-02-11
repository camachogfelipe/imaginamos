<?php
$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query,SELECT_QUERY);	
$result = $db->results;

$queryMain = "SELECT * FROM cms_menu";
$db->doQuery($queryMain,SELECT_QUERY);	
$resultMain = $db->results;
$numOfResults = $db->getNumResults();

	if($_SESSION['CMSRolUser'] == "admin")
	echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/admin/view/"><span class="ico gray shadow home" ></span><b>Administración</b></a></li>';

	echo '<li class="limenu select"><a href="'.$result[0][config_path].'dashboard.php"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>';

if($numOfResults != 0)

{

foreach($resultMain as $menu)
	{
        if($menu[menu_title]!="Valores")echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
	}
	echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/valores/view/Edit.php?id='.base64_encode(1).'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>Mision</b></a></li>';
	echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/valores/view/Edit.php?id='.base64_encode(2).'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>Visión</b></a></li>';
	echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/valores/view/Edit.php?id='.base64_encode(3).'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>Política Integral</b></a></li>';
	echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/valores/view/Edit.php?id='.base64_encode(4).'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>Responsabilidad Pesonal</b></a></li>';
	echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/valores/view/Edit.php?id='.base64_encode(5).'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>Servicios</b></a></li>';
	echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/valores/view/Edit.php?id='.base64_encode(6).'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>Pie de Pagina</b></a></li>';


        
}
?>
