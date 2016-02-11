<?php
$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query,SELECT_QUERY);	
$result = $db->results;

$queryMain = "SELECT * FROM cms_menu ORDER BY menu_id";
$db->doQuery($queryMain,SELECT_QUERY);	
$resultMain = $db->results;
$numOfResults = $db->getNumResults();

	if($_SESSION['CMSRolUser'] == "admin")
	echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/admin/view/"><span class="ico gray shadow home" ></span><b>Administración</b></a></li>';

	echo '<li class="limenu select"><a href="'.$result[0][config_path].'dashboard.php"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>';

if($numOfResults != 0)

{

//$rutaURL = $result[0][config_path];
$icono1 = 'clipboard';
$icono2 = 'pictures_folder';
$icono3 = 'satellite';

echo '<li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>Index</b></a>
		<ul>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/bannerIndex/view"><b>Banner</b></a></li>	
			<li class="limenu"><a href="'.$result[0][config_path].'modules/headhunter/view"><b>HeadHunter</b></a></li>	
			<li class="limenu"><a href="'.$result[0][config_path].'modules/staffing/view"><b>Staffing</b></a></li>	
			<li class="limenu"><a href="'.$result[0][config_path].'modules/aliados/view"><b>Aliados</b></a></li>	
		</ul>
	 
	</li>
	<li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>Secciones</b></a>
		<ul>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/nosotros/view"><b>Nosotros</b></a></li>	
			<li class="limenu"><a href="'.$result[0][config_path].'modules/gestionHumana/view"><b>Gesti&oacute;nHumana</b></a></li>	
			<li class="limenu"><a href="'.$result[0][config_path].'modules/consulting/view"><b>Consulting</b></a></li>	
			<li class="limenu"><a href="'.$result[0][config_path].'modules/foodservice/view"><b>FoodService</b></a></li>	
			<li class="limenu"><a href="'.$result[0][config_path].'modules/soluciones/view"><b>Soluciones</b></a></li>	
		</ul>
	 
	</li>
	<li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>Noticias</b></a>
		<ul>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/noticias/view"><b>Noticias</b></a></li>			
		</ul>
	 
	</li>
	<li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>Cont&aacute;ctenos</b></a>
		<ul>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/mapa/view"></span><b>Mapa</b></a></li>			
		</ul>
	 
	</li>
	<li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>Buscar Trabajo</b></a>
		<ul>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/buscarcat/view/indexE.php"><b>Experiencia</b></a></li>	
			<li class="limenu"><a href="'.$result[0][config_path].'modules/buscarcat/view/indexP.php"><b>Profesi&oacute;n</b></a></li>				
		</ul>
	 
	</li>
	
	
	';



/*
foreach($resultMain as $menu)
	{
	echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
	
	 
	</li>';
	}
*/	
}
?>
