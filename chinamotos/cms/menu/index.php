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

/*
foreach($resultMain as $menu)
	{
	echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
	}
*/	
	
	
}

/**   Menu puesto de forma manual **/

$icono1 = 'clipboard';
$icono2 = 'pictures_folder';
$icono3 = 'satellite';

echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/bannerIndex/view/"><span class="ico gray shadow '.$icono1.'" ></span><b>Banner index</b></a></li>
	  <li class="limenu"><a href="'.$result[0][config_path].'modules/empresa/view/"><span class="ico gray shadow '.$icono1.'" ></span><b>Lo que hacemos</b></a></li>
	  <li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>Lo que vendemos</b></a>
		<ul>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/productos/view/indexCat.php"><b>Categorias</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/productos/view/indexProd.php"><b>Productos</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/productos/view/indexNov.php"><b>Novedades</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/productos/view/indexProm.php"><b>Promociones</b></a></li>
		</ul>
	  </li>
	  <li class="limenu"><a href="'.$result[0][config_path].'modules/mapa/view/"><span class="ico gray shadow '.$icono1.'" ></span><b>Puntos de venta</b></a></li>
	  <li class="limenu"><a href="#"><span class="ico gray shadow '.$icono2.'" ></span><b>Distribuidores</b></a>
		<ul>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/distribuidores/view/indexTxt.php"><b>Texto</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/distribuidores/view/indexAp.php"><b>Asesores personalizados</b></a></li>
		</ul>	
	  </li>
	  <li class="limenu"><a href="'.$result[0][config_path].'modules/contacto/view/"><span class="ico gray shadow '.$icono2.'" ></span><b>Cont&aacute;ctenos</b></a></li>
	  <li class="limenu"><a href="'.$result[0][config_path].'modules/noticias/view/"><span class="ico gray shadow '.$icono2.'" ></span><b>Actualidad</b></a></li>
	';

?>
