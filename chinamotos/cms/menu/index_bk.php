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

/*
foreach($resultMain as $menu)
	{
	echo '<li class="limenu"><a href="'.$result[0][config_path].''.$menu[menu_url].'"><span class="ico gray shadow '.$menu[menu_icon].'" ></span><b>'.$menu[menu_title].'</b></a></li>';
	}
*/	
	
	
}

/**   Menu puesto de forma manual **/

$icono1 = 'clipboard';
$icono2 = 'pictures_folder';
$icono3 = 'satellite';

echo '<li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>Empresa</b></a>
		<ul>
			<li class="limenu"><a href="#"><b>Que es?</b></a>
				<ul>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexE101.php"><b>Introducci&oacute;n</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexE102.php"><b>Caracteristicas</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexE103.php"><b>Para que sirve</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexE104.php"><b>Beneficios</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexE105.php"><b>Cuanto cuesta</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE106.php"><b>Como abrir una cuenta</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE107.php"><b>Como funciona</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexE108.php"><b>Que es un corresponsal</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE109.php"><b>CyD abrir platamovil</b></a></li>	
				</ul>
			</li>
			<li class="limenu"><a href="#"><b>Como se usa?</b></a>
				<ul>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE201.php"><b>Introducci&oacute;n</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE202.php"><b>Como abrir cuenta</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE203.php"><b>Como activar cuenta</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE204.php"><b>Como utilizar cuenta</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE205.php"><b>Como hacer consultas</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE206.php"><b>Otras operaciones</b></a></li>
				</ul>
			</li>
			<li class="limenu"><a href="#"><b>Operaciones, limites...</b></a>
				<ul>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE301.php"><b>Introducci&oacute;n</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE302.php"><b>Operaciones que puedo realizar</b></a></li>
					<li class="limenu"><a href="#"><b>Tarifas cuenta simpificada</b></a>
						<ul>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla1.php"><b>Generales</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla2.php"><b>Consultas</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla3.php"><b>Transacciones en punto</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla4.php"><b>Transacciones en otros</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla5.php"><b>Otras operaciones</b></a></li>							
						</ul>
					</li>
					<li class="limenu"><a href="#"><b>Tarifas cuenta tipica</b></a>
						<ul>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla6.php"><b>Generales</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla7.php"><b>Consultas</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla8.php"><b>Transacciones en punto</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla9.php"><b>Transacciones en otros</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla10.php"><b>Otras operaciones</b></a></li>							
						</ul>
					</li>
					<li class="limenu"><a href="#"><b>Limites cuenta simplificada</b></a>
						<ul>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla11.php"><b>Generales</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla12.php"><b>Transacciones en punto 1</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla13.php"><b>Transacciones en punto 2</b></a></li>							
						</ul>
					</li>
					<li class="limenu"><a href="#"><b>Limites cuenta tipica</b></a>
						<ul>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla14.php"><b>Generales</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla15.php"><b>Transacciones en punto 1</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla16.php"><b>Transacciones en punto 2</b></a></li>							
						</ul>
					</li>
				</ul>
			</li>
			<li class="limenu"><a href="#"><b>Servicio al cliente</b></a>
				<ul>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE401.php"><b>Introducci&oacute;n</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE402.php"><b>Canales de informacion</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE403.php"><b>Canales PQR</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE404.php"><b>Red de puntos</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE405.php"><b>Que es consumidor finaciero</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexE406.php"><b>Como se identifica</b></a></li>
				</ul>
			</li>
			<li class="limenu"><a href="#"><b>Quien respalda Platamovil?</b></a>
				<ul>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexE501.php"><b>Introducci&oacute;n</b></a></li>
				</ul>
			</li>
		</ul>
	 
	</li>
	<li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>Comercio</b></a>
		<ul>
			<li class="limenu"><a href="#"><b>¿que es platamovil?</b></a>
				<ul>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC101.php"><b>Introducci&oacute;n</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC102.php"><b>Caracteristicas</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC103.php"><b>Beneficios</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC104.php"><b>¿para que sirve?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC105.php"><b>¿cuanto le cuesta?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC106.php"><b>tipos de cuentas</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC107.php"><b>¿como abrir una cuenta?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC108.php"><b>¿cuando y donde se puede usar?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC109.php"><b>su plata esta segura</b></a></li>	
				</ul>
			</li>
			<li class="limenu"><a href="#"><b>¿como se usa?</b></a>
				<ul>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC201.php"><b>Introducci&oacute;n</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC202.php"><b>¿como abrir su cuenta?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC203.php"><b>¿como activar su cuenta?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC204.php"><b>¿como utilizar su cuenta?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC205.php"><b>¿como hacer consultas de su cuenta?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC206.php"><b>otras operaciones con su cuenta</b></a></li>
				</ul>
			</li>
			<li class="limenu"><a href="#"><b>operaciones, limites y tarifas</b></a>
				<ul>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC301.php"><b>Introducci&oacute;n</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC302.php"><b>operaciones</b></a></li>
					<li class="limenu"><a href="#"><b>Tarifas cuenta simpificada</b></a>
						<ul>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla17.php"><b>Generales</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla18.php"><b>Consultas</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla19.php"><b>Transacciones en punto</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla20.php"><b>Transacciones en otros</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla21.php"><b>Otras operaciones</b></a></li>							
						</ul>
					</li>
					<li class="limenu"><a href="#"><b>Tarifas cuenta tipica</b></a>
						<ul>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla22.php"><b>Generales</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla23.php"><b>Consultas</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla24.php"><b>Transacciones en punto</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla25.php"><b>Transacciones en otros</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla26.php"><b>Otras operaciones</b></a></li>							
						</ul>
					</li>
					<li class="limenu"><a href="#"><b>Limites cuenta simplificada</b></a>
						<ul>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla27.php"><b>Generales</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla28.php"><b>Transacciones en punto 1</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla29.php"><b>Transacciones en punto 2</b></a></li>							
						</ul>
					</li>
					<li class="limenu"><a href="#"><b>Limites cuenta tipica</b></a>
						<ul>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla30.php"><b>Generales</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla31.php"><b>Transacciones en punto 1</b></a></li>
							<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla32.php"><b>Transacciones en punto 2</b></a></li>							
						</ul>
					</li>					
				</ul>
			</li>
			<li class="limenu"><a href="#"><b>¿que es un punto platamovil?</b></a>
				<ul>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC401.php"><b>Introducci&oacute;n</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC402.php"><b>definicion</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC403.php"><b>¿que servicios presta?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC404.php"><b>red de puntos platamovil</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC405.php"><b>¿como se identifican?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC406.php"><b>¿quien es un agente platamovil?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/datostablas/view/indexTabla33.php"><b>operaciones, tarifas y limites del punto</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC408.php"><b>¿quieres ser un punto platamovil?</b></a></li>
				</ul>
			</li>
			<li class="limenu"><a href="#"><b>servicio al cliente</b></a>
				<ul>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC501.php"><b>Introducci&oacute;n</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC502.php"><b>canales de informacion</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC503.php"><b>canales para presentar peticiones, quejas o reclamos</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato2/view/indexC504.php"><b>red de puntos platamovil</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC505.php"><b>consumidor financiero</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC506.php"><b>educacion financiera</b></a></li>
				</ul>
			</li>
			<li class="limenu"><a href="#"><b>¿quien respalda a platamovil?</b></a>
				<ul>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC601.php"><b>Introducci&oacute;n</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC602.php"><b>¿que es una compañia de financiamiento?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC603.php"><b>¿que es la superintendencia financiera de colombia?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC604.php"><b>¿que es fogafin?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC605.php"><b>¿que es fenalco?</b></a></li>
					<li class="limenu"><a href="'.$result[0][config_path].'modules/conformato1/view/indexC606.php"><b>¿que es caf?</b></a></li>
				</ul>
			</li>
		</ul>
	 
	</li>
	<li class="limenu"><a href="#"><span class="ico gray shadow '.$icono1.'" ></span><b>Red de Puntos</b></a>
		<ul>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/redpuntos/view/indexCiudades.php"><b>Ciudades</b></a></li>
			<li class="limenu"><a href="'.$result[0][config_path].'modules/redpuntos/view/indexDatos.php"><b>Datos</b></a></li>			
		</ul>
	</li>
	<li class="limenu"><a href="'.$result[0][config_path].'modules/bannerIndex/view/"><span class="ico gray shadow '.$icono2.'" ></span><b>Banner</b></a></li>
	<li class="limenu"><a href="'.$result[0][config_path].'modules/aliados/view/"><span class="ico gray shadow '.$icono2.'" ></span><b>Apoyo</b></a></li>
	<li class="limenu"><a href="'.$result[0][config_path].'modules/imgseccion/view/"><span class="ico gray shadow '.$icono2.'" ></span><b>Imagen Secci&oacute;n</b></a></li>
	
	
	';

?>
