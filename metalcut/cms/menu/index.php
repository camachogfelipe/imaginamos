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
                        <li><a href="' . $result[0][config_path] . 'modules/bienvenida/view/">Bienvenida</a></li>   
                        <li><a href="' . $result[0][config_path] . 'modules/destacados/view/">Destacados</a></li>   
                    </ul>
                </li>';
    }
    if ($menu[menu_title] == "Quienes Somos") {

         echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                        <ul>  
                            <li><a href="' . $result[0][config_path] . 'modules/mision/view/">Mision</a></li>   
                            <li><a href="' . $result[0][config_path] . 'modules/vision/view/">Vision</a></li>
                            <li><a href="' . $result[0][config_path] . 'modules/historia/view/">Historia</a></li>  
                        </ul>
                    </li>';
    }
    if ($menu[menu_title] == "Portafolio de servicios") { 

        echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/portafolio/view/"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                </li>';
    }
    if ($menu[menu_title] == "Torneado") {

         echo '<li class="limenu"  ><a href="#"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                        <ul style="width:200px;" >  
                            <li><a href="' . $result[0][config_path] . 'modules/cilindrado/view/">Cilindrado y Refrentado</a></li>
                            <li><a href="' . $result[0][config_path] . 'modules/alesado/view/">Alesado</a></li>  
                            <li><a href="' . $result[0][config_path] . 'modules/producto_torneado/view/">Prod Cilindrado/Alesado</a>
                                <ul style="margin-left:60px;" >
                                    <li><a href="' . $result[0][config_path] . 'modules/producto_torneado/view/">Productos</a></li>
                                    <li><a href="' . $result[0][config_path] . 'modules/materiales/view/">Materiales</a></li>   
                                    <li><a href="' . $result[0][config_path] . 'modules/geometria/view/">Geometria</a></li> 
                                    <li><a href="' . $result[0][config_path] . 'modules/angulo/view/">Angulo</a></li>   
                                    <li><a href="' . $result[0][config_path] . 'modules/longitud/view/">Longitud</a></li> 
                                    <li><a href="' . $result[0][config_path] . 'modules/espesor/view/">Espesor</a></li> 
                                    <li><a href="' . $result[0][config_path] . 'modules/radio/view/">Radio</a></li>
                                    <li><a href="' . $result[0][config_path] . 'modules/tipo_corte/view/">Tipo de Corte</a></li>
                                </ul>
                            </li>
                            <li><a href="' . $result[0][config_path] . 'modules/ranurado/view/">Ranurado y Corte</a></li>
                            <li><a href="' . $result[0][config_path] . 'modules/roscado/view/">Roscado</a></li>     
                            
                            
                            
                        </ul>
                    </li>';
    }
    if ($menu[menu_title] == "Fresado") {

         echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                        <ul>  
                            <li><a href="' . $result[0][config_path] . 'modules/carburo/view/">Carburo Solido</a></li>
                            <li><a href="' . $result[0][config_path] . 'modules/otros_fresado/view/">Otros</a></li> 
                        </ul>
                    </li>';
    }
    if ($menu[menu_title] == "Taladrado") {
         echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/taladrado/view/"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
    } 
    
    if ($menu[menu_title] == "Productos Referidos") {
            echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/productos_referidos/view/"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
    }
     if ($menu[menu_title] == "Accesorios") {

         echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                        <ul>  
                            <li><a href="' . $result[0][config_path] . 'modules/sujecion/view/">Sujecion</a></li>   
                            <li><a href="' . $result[0][config_path] . 'modules/otros_acce/view/">Otros</a></li>    
                        </ul>
                    </li>';
    }
    
    if ($menu[menu_title] == "Carrito Compras") {
         echo '<li class="limenu"><a href="#"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a>
                        <ul style="width:200px;">  
                            <li><a href="' . $result[0][config_path] . 'modules/usuario/view/">Usuarios</a></li>
                            <li><a href="' . $result[0][config_path] . 'modules/compras/view/">Carrito</a></li>
                        </ul>
                    </li>';
        
    } 
    if ($menu[menu_title] == "Contacto") {

        echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/contacto/view/"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
    } 
    if ($menu[menu_title] == "Redes") {

        echo '<li class="limenu"><a href="' . $result[0][config_path] . 'modules/redes/view/"><span class="ico gray shadow ' . $menu[menu_icon] . '" ></span><b>' . $menu[menu_title] . '</b></a></li>';
    } 
    
  }
}
?>
