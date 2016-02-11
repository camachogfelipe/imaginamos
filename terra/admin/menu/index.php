<?php

$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query, SELECT_QUERY);
$result = $db->results;

$queryMain = "SELECT * FROM cms_menu";
$db->doQuery($queryMain, SELECT_QUERY);
$resultMain = $db->results;
$numOfResults = $db->getNumResults();

if ($_SESSION['CMSRolUser'] == "admin")
    echo '<li class="limenu"><a href="' . $result[0]['config_path'] . 'modules/admin/view/"><span class="ico gray shadow home" ></span><b>Administración</b></a></li>';

echo '<li class="limenu select"><a href="' . $result[0]['config_path'] . 'dashboard.php"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>';

if ($numOfResults != 0) {
    foreach ($resultMain as $menu) {
        //Si el inicial es home 
        if ($menu['menu_title'] == "Home") {
            echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a>
                        <ul>
                            <li><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/">Banner</a></li>   
                            <li><a href="' . $result[0]['config_path'] . 'modules/home/bienvenidos/view/">Bienvenidos</a></li>                                                    
                            <li><a href="' . $result[0]['config_path'] . 'modules/home/footer/view/">Footer</a></li>                               
                        </ul>
                    </li>';
        }
        if ($menu['menu_title'] == "Productos y Servicios") {
            echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a>
                        <ul>
                            <li><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/">Ganaderia y equinos</a></li>   
                            <li><a href="' . $result[0]['config_path'] . 'modules/servicios/piscicultura/">Piscicultura</a></li>                                                    
                            <li><a href="' . $result[0]['config_path'] . 'modules/servicios/agroindustria/">Agroindustria</a></li>                                                    
                                                
                        </ul>
                    </li>';
        }
        if ($menu['menu_title'] == "Noticias") {
            echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a></li>';
        }
       
        if ($menu['menu_title'] == "¿Quiénes somos?") {
              echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a></li>';
        }
        if ($menu['menu_title'] == "Mensaje de vida") {
            echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a></li>';
        }
        
        
          if ($menu['menu_title'] == "Contactenos") {
            echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>Cont&aacute;ctenos</b></a></li>';
        }
          if ($menu['menu_title'] == "Formulario Contacto") {
            echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a></li>';
        }
         if ($menu['menu_title'] == "Zona segura") {
            echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a>
                        <ul>
                            <li><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/">Textos</a></li>   
                            <li><a href="' . $result[0]['config_path'] . 'modules/zonasegura/usuarios/">Usuarios</a></li>                                                    
                          
                                                
                        </ul>
                    </li>';
        }
        
          if ($menu['menu_title'] == "Solicitudes") {
            echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a></li>';
        }
       
       
    }
}
?>