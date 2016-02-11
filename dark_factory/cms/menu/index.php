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
                     echo'  <li class="limenu"><a><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
                                    <ul>
                                        <li><a href="'.$result[0][config_path].''.$menu[menu_url].'">Banner</a></li>
                                        <li><a href="'.$result[0][config_path].'modules/latest_news/view/">Latest News</a></li>
                                        <li><a href="'.$result[0][config_path].'modules/our_blog/view/">Our Blog</a></li>
                                    </ul>
                                </li>';
                }elseif($menu[menu_title]== "About Us"){
                     echo'  <li class="limenu"><a><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
                                    <ul>
                                        <li><a href="'.$result[0][config_path].''.$menu[menu_url].'">Members</a></li>
                                        <li><a href="'.$result[0][config_path].'modules/affiliates/view/">Affiliates</a></li>
                                        
                                    </ul>
                                </li>';
                }elseif($menu[menu_title]== "Films/Theater"){
                     echo'  <li class="limenu"><a><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
                                    <ul>
                                        
                                        <li><a href="'.$result[0][config_path].'modules/categorias/view/index.php?seccion=form&idl=1">Films</a></li>
                                        <li><a href="'.$result[0][config_path].'modules/categorias/view/index.php?seccion=form&idl=2">Theater</a></li>
                                        
                                    </ul>
                                </li>';
                }elseif($menu[menu_title]== "Media"){
                     echo'  <li class="limenu"><a><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a>
                                    <ul>
                                        
                                        <li><a href="'.$result[0][config_path].'modules/blog/view/index.php?seccion=form&idl=1">Blog</a></li>
                                        <li><a href="'.$result[0][config_path].'modules/trailers/view/index.php?seccion=form&idl=1">Trailers</a></li>
                                        <li><a href="'.$result[0][config_path].'modules/industry_news/view/index.php?seccion=form&idl=2">Industry News</a></li>
                                        <li><a href="'.$result[0][config_path].'modules/subscribe/view/index.php?seccion=form&idl=2">RSS</a></li>
                                        
                                    </ul>
                                </li>';
                }else{
                    echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
                }

        
	}
	
}
?>
