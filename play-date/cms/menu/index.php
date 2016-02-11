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
     if($menu[menu_title]== "Home"){
            
            echo '  <li class="limenu"><a><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
                        <ul>
                            <li><a href="'.$result[0][config_path].''.$menu[menu_url].'">Banner</a></li>
                            <li><a href="'.$result[0][config_path].'modules/textos/view/Edit.php?id=MQ==">Bienvenida</a></li>
                            <li><a href="'.$result[0][config_path].'modules/destacados/view/">Destacado</a></li>
                        </ul>
                    </li>';
                }
     if($menu[menu_title]== "quienes"){
            
            echo '  <li class="limenu"><a><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
                        <ul>
                            <li><a href="'.$result[0][config_path].''.$menu[menu_url].'">Quienes Somos</a></li>
                        </ul>
                    </li>';
                }
                if($menu[menu_title]== "Actividades"){
            
                        echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
                           
                        </li>';
                }
       if($menu[menu_title]== "Almacen"){
            
           echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
                }
       if($menu[menu_title]== "Galería"){
            
           echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
                }          
    if($menu[menu_title]== "Blog"){
            
           echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
                }
    
    if($menu[menu_title]== "Eventos"){
            
           echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
                }
	// Original: echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
	}
        
                
}
?>
