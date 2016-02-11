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

//foreach($resultMain as $menu)
//	{
//	echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
//	}
	
}


/**   Menu puesto de forma manual **/

$icono1 = 'clipboard';
$icono2 = 'pictures_folder';
$icono3 = 'satellite';

echo '<li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>Banner Home</b></a>
		<ul>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/bannerHome/view/indexContenido.php"><b>Contenido</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/bannerHome/view/indexImagenes.php"><b>Imagenes</b></a></li>
			
		</ul>
	  </li>
	  <li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>About us</b></a>
		<ul>    
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/aboutus/view/indexContenido.php"><b>Contenido</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/aboutus/view/indexPrin.php"><b>Imagen</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/aboutus/view/indexItemTit.php"><b>Item T&iacute;tulo</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/aboutus/view/indexItemDat.php"><b>Item Datos</b></a></li>
			
		</ul>
	  </li>
	  <li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>About Panama</b></a>
		<ul>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/aboutPan/view/indexContenido.php"><b>Contenido</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/aboutPan/view/indexPrin.php"><b>Imagen</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/aboutPan/view/indexBloque.php"><b>Bloque</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/aboutPan/view/indexImgFinal.php"><b>Imagen Final</b></a></li>
			
		</ul>
	  </li>
	  <li class="limenu"><a href="'.$result[0][config_path].'modules/service/view/"><span class="ico gray shadow '.$icono1.'" ></span><b>Services</b></a></li>
	  <li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>Meeting planner</b></a>
		<ul>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/meeting/view/indexContenido.php"><b>Contenido</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/meeting/view/indexPrin.php"><b>Imagen</b></a></li>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/meeting/view/indexItemsTit.php"><b>Titulo</b></a></li>       
			<li class="limenu"><a href="'.$result[0][config_path].'modules/meeting/view/indexItems.php"><b>Items</b></a></li>
                         
			
		</ul>
	  </li>
	  <li class="limenu"><a href="'.$result[0][config_path].'modules/proposal/view/"><span class="ico gray shadow '.$icono1.'" ></span><b>Proposal request</b></a></li>
              
	  <li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b> Destination </b></a>
		<ul>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/destination/view/indexContenido.php"><b>Contenido</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/destination/view/indexPrin.php"><b>Imagen</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/destination/view/indexDescarga.php"><b>Descargables</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/destination/view/indexGaleria.php"><b>Galeria</b></a></li>
			
		</ul>
	  </li>
          
          <li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b> Desing </b></a>
		<ul>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/desing/view/indexPrin.php"><b>Contenido</b></a></li>     
			<li class="limenu"><a href="'.$result[0][config_path].'modules/desing/view/indexItems.php"><b>Items</b></a></li>
                         
			
		</ul>
	  </li>
          
          <li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b> Foundation</b></a>
              <ul>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/foundation/view/indexContenido.php"><b>Contenido</b></a></li>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/foundation/view/"><b>Imagen</b></a></li>
              </ul>
          </li>   
					
					<li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b> Personal Concierge</b></a>
              <ul>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/personal/view/indexContenido.php"><b>Contenido</b></a></li>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/personal/view/"><b>Imagen</b></a></li>
              </ul>
          </li>
          
          <li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b> Testimonilas </b></a>
              <ul>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/testimonials/view/indexContenido.php"><b>Contenido</b></a></li>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/testimonials/view/"><b>Imagen</b></a></li>
              </ul>
          </li> 

              <li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b> Contactenos </b></a>
              <ul>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/contactenos/view/indexContenido.php"><b>Contenido</b></a></li>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/contactenos/view/"><b>Imagen</b></a></li>
              </ul>
          </li>
					<li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b> Our Company </b></a>
              <ul>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/company/view/indexContenido.php"><b>Contenido</b></a></li>
                        <li class="limenu"><a href="'.$result[0][config_path].'modules/company/view/"><b>Imagen</b></a></li>
              </ul>
          </li>
	  
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
	';

?>
