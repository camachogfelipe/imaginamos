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
    //Normal -->
            if($menu[menu_title]== "Home"){
            
            echo'  <li class="limenu"><a><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
                        <ul>
                            <li><a href="'.$result[0][config_path].''.$menu[menu_url].'">Banner</a></li>
                            <li><a href="'.$result[0][config_path].'modules/destacados/view/index.php?seccion=form&id_edit=1">Destacados</a></li>
                            <li><a href="'.$result[0][config_path].'modules/actividades/view/index.php?seccion=form&id_edit=1">Actividades</a></li>
                            <li><a href="'.$result[0][config_path].'modules/recetas/view/index.php?seccion=form&id_edit=1">Recetas</a></li>
                        </ul>
                    </li>';
                }elseif($menu[menu_title]== "Soluciones"){
            
            echo'  <li class="limenu"><a><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
                        <ul>
                            <li><a href="'.$result[0][config_path].'modules/categorias/view/index.php?seccion=form&idl=1">Cocción</a></li>
                            <li><a href="'.$result[0][config_path].'modules/categorias/view/index.php?seccion=form&idl=2">Mesa y servicio</a></li>
                            <li><a href="'.$result[0][config_path].'modules/categorias/view/index.php?seccion=form&idl=3">cocina y construcción</a></li>
                        </ul>
                    </li>';
                }else{
	echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
                }
        //editado con Hijos
//        if($menu[menu_title]== "La Oficina"){
//           echo'<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
//                }
//        if($menu[menu_title]== "Publicaciones"){
//            
//            echo'  <li class="limenu"><a><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
//                        <ul>
//                            <li><a href="'.$result[0][config_path].''.$menu[menu_url].'">Articulos</a></li>
//                            <li><a href="'.$result[0][config_path].'modules/publicaciones_imagen/view/">Imagenes</a></li>
//                        </ul>
//                    </li>';
//                }
        
	}
	
}
?>
