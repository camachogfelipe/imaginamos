<?php

$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query, SELECT_QUERY);
$result = $db->results;

$queryMain = "SELECT * FROM cms_menu ";
$db->doQuery($queryMain, SELECT_QUERY);
$resultMain = $db->results;
$numOfResults = $db->getNumResults();

if ($_SESSION['CMSRolUser'] == "admin")
    echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/admin/view/"><span class="ico gray shadow home" ></span><b>Administración</b></a></li>';

echo '<li class="limenu select"><a href="' . $result[0][config_path] . 'dashboard.php"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>';

if ($numOfResults != 0) {

    
     foreach($resultMain as $menu)
      {
      echo '<li class="limenu"><a href="#"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>';
      }
echo '<ul>
        

		<li class="limenu"><a href="' . $result[0][config_path] . 'modules/home/view/"><b>Banner</b></a></li>
                <li class="limenu"><a href="' . $result[0][config_path] . 'modules/destacados/view/"><b>Destacados</b></a></li>
                
		
 
						
 
</ul></li>';
      
}


echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/contacto/view/"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>CONTACTO</b></a></li>';
echo '<li class="limenu"><a href="#"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>NOSOTROS</b></a>
  <ul> 
  <li class="limenu"><a href="' . $result[0][config_path] . 'modules/banner_nosotros/view/"><b>Banner Nosotros</b></a></li>
      <li class="limenu"><a href="' . $result[0][config_path] . 'modules/nosotros/view/"><b>Contenido Nosotros</b></a></li>
          
  </ul>
  </li><li class="limenu"><a href="#"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>DISTRIBUIDOR</b></a>
  <ul> 
      <li class="limenu"><a href="' . $result[0][config_path] . 'modules/pais_distribuidor/view/"><b>Agregar Pais</b></a></li>
      <li class="limenu"><a href="' . $result[0][config_path] . 'modules/distribuidor/view/"><b>Agregar Distribuidor</b></a></li>
          
  </ul></li>
  <li class="limenu"><a href="' . $result[0][config_path] . 'modules/novedades/view/"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>NOVEDADES</b></a></li>
  <li class="limenu"><a href="' . $result[0][config_path] . 'modules/productos/view/"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>PRODUCTOS</b></a></li>
  <li class="limenu"><a href="' . $result[0][config_path] . 'modules/catalogo/view/"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>CATALOGOS</b></a></li>';
?>
