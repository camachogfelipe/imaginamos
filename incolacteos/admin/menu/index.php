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
                            <li><a href="' . $result[0]['config_path'] . 'modules/home/destacados/">Destacados</a></li>                                                    
                            <li><a href="' . $result[0]['config_path'] . 'modules/home/footer/">Footer</a></li>                               
                        </ul>
                    </li>';
        }
        if ($menu['menu_title'] == "Quienes somos") {
            echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a>
                        <ul>
                            <li><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/">Incolacteos</a></li>   
                            <li><a href="' . $result[0]['config_path'] . 'modules/somos/california/">California</a></li>                                                    
                            <li><a href="' . $result[0]['config_path'] . 'modules/somos/lechesan/">Lechesan</a></li>                                                    
                                                
                        </ul>
                    </li>';
        }
        if ($menu['menu_title'] == "Productos") {
            echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a>
                        <ul>
                            <li><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/">California</a></li>   
                            <li><a href="' . $result[0]['config_path'] . 'modules/productos/lechesan/">Lechesan</a></li>                                                    
                            <li><a href="' . $result[0]['config_path'] . 'modules/productos/importados/">Importados</a></li>                                                    
                                                
                        </ul>
                    </li>';
        }
        if ($menu['menu_title'] == "Promociones") {
            echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a></li>';
        }
       
        if ($menu['menu_title'] == "Contáctenos") {
              echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a></li>';
        }
        //        if ($menu['menu_title'] == "Newsletter") {
//              echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a></li>';
//        }
         if ($menu['menu_title'] == "Newsletter") {
              echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a>
              
                        <ul>
                          <li><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/">Contenido</a></li>   
                           <li><a href="' . $result[0]['config_path'] . 'modules/suscriptores/view/">Suscriptores</a></li>                                                    
                                                                           
                                              
                       </ul>
                      </li>';
         }

        if ($menu['menu_title'] == "Recetas") {
            echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a></li>';
        }
        
        
          if ($menu['menu_title'] == "Contactenos") {
            echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>Cont&aacute;ctenos</b></a></li>';
        }
          if ($menu['menu_title'] == "Configuración correos") {
            echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a></li>';
        }
         
        
//          if ($menu['menu_title'] == "Correos") {
//            echo '<li class="limenu"><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a></li>';
//        }
            if ($menu['menu_title'] == "Correos") {
            echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a>
                    <ul>  
                            <li><a href="' . $result[0]['config_path'] . 'modules/correos/contacto/">Contacto</a></li>
                            <li><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/">California</a></li> 
                            <li><a href="' . $result[0]['config_path'] . 'modules/correos/lechesan/">Lechesan</a></li>                                                    
                                                
                        </ul>
                    </li><br><br><br><br><br><br><br><br><br><br><br><br>';
                  
        }
        
        
//        if ($menu['menu_title'] == "Productos") {
//            echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu['menu_icon'] . '" ></span><b>' . $menu['menu_title'] . '</b></a>
//                        <ul>
//                            <li><a href="' . $result[0]['config_path'] . '' . $menu['menu_url'] . '/">California</a></li>   
//                            <li><a href="' . $result[0]['config_path'] . 'modules/productos/lechesan/">Lechesan</a></li>                                                    
//                            <li><a href="' . $result[0]['config_path'] . 'modules/productos/importados/">Importados</a></li>                                                    
//                                                
//                        </ul>
//                    </li>';
    }
}
?>