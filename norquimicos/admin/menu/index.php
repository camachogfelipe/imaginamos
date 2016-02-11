<?php
error_reporting("");
$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query, SELECT_QUERY);
$result = $db->results;

$queryMain = "SELECT * FROM cms_menu ORDER BY menu_id ASC";
$db->doQuery($queryMain, SELECT_QUERY);
$resultMain = $db->results;
$numOfResults = $db->getNumResults();

if ($_SESSION['CMSRolUser'] == "admin")
  echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/admin/view/"><span class="ico gray shadow home" ></span><b>Administración</b></a></li>';

echo '<li class="limenu select"><a href="' . $result[0][config_path] . 'dashboard.php"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>';

if ($numOfResults != 0) {


  foreach ($resultMain as $menu) {
    if ($menu[menu_title] == "Home") {
      echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                        <ul>
                            <li><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '/">Banner</a></li>   
                            <li><a href="' . $result[0][config_path] . 'modules/home/bienvenidos/view/index.php">Bienvenidos</a></li>   
                            <li><a href="' . $result[0][config_path] . 'modules/home/slide/view/index.php">Logos</a></li>   
                        </ul>
                    </li>';
    }
    if ($menu[menu_title] == "Lineas de negocio") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
    
        
        
   if ($menu[menu_title] == "English") {
      echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                        <ul>
                            <li><a href="' . $result[0][config_path] . 'modules/english/pdf/">PDF</a></li>  
                            <li><a href="' . $result[0][config_path] . 'modules/english/view/">Banner</a></li>  
                            
                        </ul>
                    </li>';
    }
 if ($menu[menu_title] == "Inscripciones") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
   
    if ($menu[menu_title] == "Contáctenos") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
         if ($menu[menu_title] == "Usuarios") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
          if ($menu[menu_title] == "Productos") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
  }
}
?>
