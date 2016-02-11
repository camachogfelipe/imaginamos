<?php

$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query, SELECT_QUERY);
$result = $db->results;

$queryMain = "SELECT * FROM cms_menu";
$db->doQuery($queryMain, SELECT_QUERY);
$resultMain = $db->results;
$numOfResults = $db->getNumResults();

if ($_SESSION['CMSRolUser'] == "admin")
  echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/admin/view/"><span class="ico gray shadow home" ></span><b>Administración</b></a></li>';

echo '<li class="limenu select"><a href="' . $result[0][config_path] . 'dashboard.php"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>';

if ($numOfResults != 0) {

  foreach ($resultMain as $menu) {
    if ($menu[menu_title] == "Home") {

      echo '<li class="limenu"><a><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                <ul>
                    <li><a href="' . $result[0][config_path] . 'modules/imagen_1/view/">Imagen 1</a></li>
                    <li><a href="' . $result[0][config_path] . 'modules/imagen_2/view/">Imagen 2</a></li>
                    <li><a href="' . $result[0][config_path] . 'modules/imagen_3/view/">Imagen 3</a></li>
                    <li><a href="' . $result[0][config_path] . 'modules/imagen_4/view/">Imagen 4</a></li>
                    <li><a href="' . $result[0][config_path] . 'modules/slogan/view/">Slogan</a></li>
                </ul>              
            </li>';
    }
    if ($menu[menu_title] == "Industrias") {

      echo '<li class="limenu"><a><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                <ul>
                    <li><a href="' . $result[0][config_path] . 'modules/descripcion/view/">Descripción</a></li>
                    <li><a href="' . $result[0][config_path] . 'modules/categorias/view/">Categorias</a></li>
                    
                </ul>              
            </li>';
    }
    if ($menu[menu_title] == "Pdf") {

      echo '<li class="limenu"><a href="' . $result[0][config_path] . '/modules/pdf/view/"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
    }
  }
}
?>
