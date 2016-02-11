<?php
error_reporting(0);
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
	
    
            if($menu[menu_title]== "Home" and $_SESSION['CMSRolUser'] != "pqr"){
            
                    echo'  <li class="limenu"><a><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
                                <ul>
                                    <li><a href="'.$result[0][config_path].''.$menu[menu_url].'">'.$menu[menu_title].'</a></li>
                                    <li><a href="'.$result[0][config_path].'modules/destacados/view/">Destacados</a></li>
									<li><a href="'.$result[0][config_path].'modules/links_home/view/">Links intranet</a></li>
                                </ul>
                            </li>';
                }
				elseif($menu[menu_title] == "PQR registro" and $_SESSION['CMSRolUser'] == "pqr") {
					echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
				}
				elseif($_SESSION['CMSRolUser'] != "pqr")
				{
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
