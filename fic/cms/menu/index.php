<?php
$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query,SELECT_QUERY);	
$result = $db->results;

$queryMain = "SELECT * FROM cms_menu ORDER BY orden ASC";
$db->doQuery($queryMain,SELECT_QUERY);	
$resultMain = $db->results;
$numOfResults = $db->getNumResults();

$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if($_SESSION['CMSRolUser'] == "admin")
if($url=="http://repositorio.imaginamos.com/SBC/fic/cms/dashboard.php"){
$selecti="select";

}else{

	$selecti="";
}

	echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/admin/view/"><span class="ico gray shadow home" ></span><b>Administración</b></a></li>';

	echo '<li class="limenu '.$selecti.'"><a href="'.$result[0][config_path].'dashboard.php"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>';

if($numOfResults != 0)

{
$blog="<ul>
            <li>
                 <a href='".$result[0][config_path]."modules/blog/view'>Contenido textual</a>
            </li>
            <li>
                 <a href='".$result[0][config_path]."modules/imagenes_blog/view'>Imagenes Blog</a>
            </li>
        </ul>";

 $usuarios="<ul>
            <li>
                 <a href='".$result[0][config_path]."modules/usuarios/view'>Contenido textual</a>
            </li>
            <li>
                 <a href='".$result[0][config_path]."modules/descargas/view'>Descargas de usuarios</a>
            </li>
        </ul>";
				$domain = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
				$domain3 = "http://repositorio.imaginamos.com/SBC/fic/cms/modules/imagenes_blog/view/"; 
				$domain4 = "http://repositorio.imaginamos.com/SBC/fic/cms/modules/descargas/view/"; 
				
foreach($resultMain as $menu)
	{
$domain2=$result[0][config_path].$menu[menu_url]."/";


if($domain==$domain2){ $select="select";}else if($domain==$domain3 && $menu[menu_id]=='7'){ $select="select";}else if($domain==$domain4 && $menu[menu_id]=='3'){ $select="select";}else{ $select="";}




	echo '<li class="limenu '.$select.'" id="mod_'.$menu[menu_id].'" ><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>';
	if ($menu[id_menu]=='9') {
		echo $blog;
	}else if ($menu[id_menu]=='6') {
		echo $usuarios;
	}
	echo '</li>';
	}
	
}
?>
