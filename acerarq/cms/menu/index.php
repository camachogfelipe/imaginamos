<?php

$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query, SELECT_QUERY);
$result = $db->results;

$queryMain = "SELECT * FROM cms_menu ORDER BY menu_id ASC";
$db->doQuery($queryMain, SELECT_QUERY);
$resultMain = $db->results;
$numOfResults = $db->getNumResults();
//print_r($resultMain);
if ($_SESSION['CMSRolUser'] == "admin")
  echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/admin/view/"><span class="ico gray shadow home" ></span><b>Administración</b></a></li>';

echo '<li class="limenu select"><a href="' . $result[0][config_path] . 'dashboard.php"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>';

if ($numOfResults != 0) {


  foreach ($resultMain as $menu) {
    if ($menu[menu_title] == "Home") { 

        echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                    <ul>  
                        <li><a href="' . $result[0][config_path] . 'modules/banner/view/">Banner</a></li>   
                        <li><a href="' . $result[0][config_path] . 'modules/bienvenida/view/">Texto Banner</a></li>   
                        <li><a href="' . $result[0][config_path] . 'modules/banner_2/view/">Banner Sirius</a></li>   
                        <li><a href="' . $result[0][config_path] . 'modules/bienvenida_2/view/">Texto Sirius</a></li>   
                        <li><a href="' . $result[0][config_path] . 'modules/newsletter/view/">Newsletter</a></li>   
                    </ul>
                </li>';
    }
    if ($menu[menu_title] == "Quienes Somos") {

         echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                        <ul>  
                            <li><a href="' . $result[0][config_path] . 'modules/quienes/view/">Descripcion</a></li>   
                            <li><a href="' . $result[0][config_path] . 'modules/valores/view/">Valores</a></li>   
                        </ul>
                    </li>';
    }
    if ($menu[menu_title] == "Sirius") {

         echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                        <ul>  
                            <li><a href="' . $result[0][config_path] . 'modules/banner_sirius/view/">Banner</a></li>   
                            <li><a href="' . $result[0][config_path] . 'modules/sirius/view/">Descripcion</a></li>   
                        </ul>
                    </li>';
    }
    if ($menu[menu_title] == "Galeria") {
        echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/galeria/view/"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        
    }
    if ($menu[menu_title] == "Proyectos") {

        echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/proyectos/view/"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        
    }
      
    
    if ($menu[menu_title] == "Servicios") {

        echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/servicios/view/"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
    } 
    if ($menu[menu_title] == "Descargables") {

        echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/descargables/view/"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
    } 
    if ($menu[menu_title] == "Contacto") {

         echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                        <ul>  
                            <li><a href="' . $result[0][config_path] . 'modules/contacto/view/">Descripcion</a></li>   
                            <li><a href="' . $result[0][config_path] . 'modules/directorio/view/">Directorio</a></li>   
                        </ul>
                    </li>';
    }    
    
  }
}
?>
