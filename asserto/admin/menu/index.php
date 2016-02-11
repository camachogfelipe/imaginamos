<?php

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
        if ($menu[menu_title] == "HOME") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
            
        }
        if ($menu[menu_title] == "QUIENES SOMOS") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
        if ($menu[menu_title] == "QUE SABEMOS") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
        if ($menu[menu_title] == "HERRAMIENTAS") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
        if ($menu[menu_title] == "AYUDA") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
         if ($menu[menu_title] == "CONTACTENOS") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
        if ($menu[menu_title] == "FOOTER") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
				if ($menu[menu_title] == "ZONA SEGURA") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . '' . $menu[menu_url] . '"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
        }
    }
}

?>
