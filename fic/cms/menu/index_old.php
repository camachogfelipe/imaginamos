<?php
$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query,SELECT_QUERY);	
$result = $db->results;

$queryMain = "SELECT * FROM cms_menu ORDER BY menu_id ASC";
$db->doQuery($queryMain,SELECT_QUERY);	
$resultMain = $db->results;
$numOfResults = $db->getNumResults();


	if($_SESSION['CMSRolUser'] == "admin")
	echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/admin/view/"><span class="ico gray shadow home" ></span><b>Administración</b></a></li>';

	echo '<li class="limenu select"><a href="'.$result[0][config_path].'dashboard.php"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>';

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
foreach($resultMain as $menu)
	{
	echo '<li class="limenu" id="mod_'.$menu[menu_id].'" ><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>';
	if ($menu[id_menu]=='9') {
		echo $blog;
	}else if ($menu[id_menu]=='6') {
		echo $usuarios;
	}
	echo '</li>';
	}
	
}
?>
