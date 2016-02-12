<?php
$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query,SELECT_QUERY);	
$result = $db->results;

$queryMain = "SELECT * FROM cms_menu WHERE id_parent = 0 order by orden";
$db->doQuery($queryMain,SELECT_QUERY);	
$resultMain = $db->results;
$numOfResults = $db->getNumResults();

	if($_SESSION['CMSRolUser'] == "admin")
	echo '<li class="limenu"><a href="'.$result[0][config_path].'modules/admin/view/"><span class="ico gray shadow home" ></span><b>Administración</b></a></li>';

	echo '<li class="limenu select"><a href="'.$result[0][config_path].'dashboard.php"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>';

if($numOfResults != 0)

{
$html = '';
foreach($resultMain as $menu)
	{
            //echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
            
            $url_level0 = (trim($menu[menu_url]) == 'modules//view') ? 'javascript:void(0)' : $result[0][config_path].''.$menu[menu_url];
            $html .= '<li class="limenu" ><a href="'. $url_level0.'"><span class="ico gray shadow '.$menu[menu_icon].'" /></span><b>'.$menu[menu_title].'</b></a>';
            
            $queryMain = "SELECT * FROM cms_menu WHERE id_parent = " . $menu[menu_id] . " order by menu_title";
            $db->doQuery($queryMain,SELECT_QUERY);	
            $resultLevel1 = $db->results;
            
            if(count($resultLevel1) > 0){
                $html .= '<ul class="level-1">';
            
                foreach ($resultLevel1 as $menu_level1) {

                    $url_level0 = (trim($menu_level1[menu_url]) == '') ? 'javascript:void(0)' : $result[0][config_path].''.$menu_level1[menu_url];
                    $url_level0 = (trim($menu[menu_url]) == '') ? 'javascript:void(0)' : $result[0][config_path] . '' . $menu_level1[menu_url];
                    $html .= '<li><a href="' . $url_level0 . '">' . $menu_level1['menu_title'] . '</a></li>';
                }
            
                $html .= '</ul>';
            }
            
            
            $html .= '</li>';
    
    
	}
	
}

echo $html;
?>
