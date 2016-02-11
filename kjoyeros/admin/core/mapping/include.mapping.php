<?php session_start();
include("admin/core/class/db.class.php");
include("functions.mapping.php");
include("mapping.class.php");
//Creamos objeto database
$db = new Database();
//Conectamos
$db->connect();
/////////////////////////////////////////////////
	//Tabla de consulta, definimos tantas tablas como necesitemos separadas con coma (,)
	$table = "cms_configuration,cms_user,cms_news";
	//$table = "cms_user";
	/////////////////////////////////////////////////
  	//Construimos el nuevmo Mapping
	$constructor = new CMS_mapping($table,$db);
	/////////////////////////////////////////////////
	//Realizamos el query necesario
	//Si no es realmente necesario recomiendo NO usar * en el query sino solamente los campos que realmente necesitamos convertir en propiedades del objeto CMS_mapping
	
	$db->doQuery("SELECT * FROM $table ORDER BY id_user DESC, news_id DESC", SELECT_QUERY);
		
	$results = $db->results;
	$obj = $constructor->mapping($results);
	/////////////////////////////////////////////////
	
	//Creamos las variables que sean necesarias para imprimirlas en el FRONT
	////////////////////////////////////
	//CONFIGURACION DEL CMS
	$path = $obj->config_path[0];
	$rss = $obj->config_rss[0];
	$web = $obj->config_web[0];
	
	//NOTICIAS
	$title = $obj->news_title[0];
	$article = shortText($obj->news_article[0],196);
	
	//USUARIO
	$user = $obj->username_user[0];
	/////////////////////////////////////////////////
	//Desconectamos de la DB
	$db->disconnect();
		
	/////////////////////////////////////////////////
	//Funcion para listar todos los usuarios
	function selectAllUsers()
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_user", $db);
		$db->doQuery("SELECT * FROM cms_user ORDER BY id_user DESC", SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		for($i=0;$i<count($obj->id_user);$i++)
		echo "Usuario: ".$obj->username_user[$i]." Ciudad: ".$obj->password_user[$i]."<br>";
		$db->disconnect();
		}
	/////////////////////////////////////////////////
	/////////////////////////////////////////////////
	
  	/////////////////////////////////////////////////
	//Funcion para crear lista desplegable de nombres de imagenes
	function selectsOptionImagesNames()
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_gallery_pics", $db);
		$db->doQuery("SELECT * FROM cms_gallery_pics", SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		for($i=0;$i<count($obj->filename);$i++)
		echo "<option>".$obj->filename[$i]."</option>";
		$db->disconnect();
		}
		
	/////////////////////////////////////////////////
	//Funcion para traer todos las Categorias
		function selectCategoria()
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_categorias", $db);
		$db->doQuery("SELECT * FROM cms_categorias ORDER BY desc_categoria_es", SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		return $obj;
		$db->disconnect();
		}
			
		/////////////////////////////////////////////////
	//Funcion para traer todos las SuCategorias
		function selectSubcategoria($id_categoria)
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_subcategorias", $db);
		$db->doQuery("SELECT * FROM cms_subcategorias WHERE id_categoria = ".$id_categoria." ORDER BY desc_subcategoria_es", SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		return $obj;
		$db->disconnect();
		} 
	
	/////////////////////////////////////////////////
	//Funcion para traer todos los productos por categoria
		function selectProducto($id_categoria,$id_sub)
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_productos", $db);
		
		if($id_categoria != "" && $id_sub != ""){
			$db->doQuery("SELECT * FROM cms_productos WHERE id_categoria = ".$id_categoria." AND id_subcategoria = ".$id_sub." ORDER BY nombre_producto_es", SELECT_QUERY);
		}else if($id_categoria != ""){
			$db->doQuery("SELECT * FROM cms_productos WHERE id_categoria = ".$id_categoria." AND id_subcategoria = 0 ORDER BY nombre_producto_es", SELECT_QUERY);
		}
		
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		
		
		echo "<div class='foto_menu subnavfot'><ul>";   
		                                       
		for($c=0; $c < count($obj->id_producto); $c++){
			if($c%5 == 0){
				echo "</ul><li>";
			}
			echo "<li><a href='detalle.php?id=".$obj->id_producto[$c]."&d=0' class='left'>
					  <img src='admin/modules/producto/files/".$obj->imagen[$c]."' width='132' height='98'>";
					 
					 if($_SESSION['idioma'] == "en"){
						  echo "<h3>".$obj->nombre_producto_en[$c]."</h3>
						 		<h4>".$obj->referencia_producto_en[$c]."</h4>";
					 }else{
						  echo "<h3>".$obj->nombre_producto_es[$c]."</h3>
						         <h4>".$obj->referencia_producto_es[$c]."</h4>";
					 }
					echo "</a></li>";
					
		}
			
			echo "</ul>
			</div>";
		
		$db->disconnect();
		} 

	/////////////////////////////////////////////////
	//Funcion para traer detalle de los Productos
		function selectProductoDetalle($id)
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_productos", $db);
		$db->doQuery("SELECT * FROM cms_productos WHERE id_producto = ".$id." ORDER BY nombre_producto_es", SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		return $obj;
		$db->disconnect();
		} 
	
	/////////////////////////////////////////////////
	//Funcion para traer todos los productos por categoria y subcategoria
		function selectProductoGaleria($id_categoria,$id_sub)
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_productos", $db);
		
		if($id_categoria != "" && $id_sub != ""){
			$db->doQuery("SELECT * FROM cms_productos WHERE id_categoria = ".$id_categoria." AND id_subcategoria = ".$id_sub." ORDER BY nombre_producto_es", SELECT_QUERY);
		}else if($id_categoria != ""){
			$db->doQuery("SELECT * FROM cms_productos WHERE id_categoria = ".$id_categoria." AND id_subcategoria = 0 ORDER BY nombre_producto_es", SELECT_QUERY);
		}
		
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		
		
		echo "<ul><li>";                                 
		$c2 = 1;
		for($c=0; $c < count($obj->id_producto); $c++){
			
			
			echo "<a href='detalle.php?id=".$obj->id_producto[$c]."'><img src='admin/modules/producto/files/".$obj->imagen[$c]."' width='306' height='150'></a>";
			
			if($c2%3 == 0){
				echo "</li><li>";
			}
			$c2++;
		}
			
			echo "</li></ul>";
		
		$db->disconnect();
		} 
	
	/////////////////////////////////////////////////
	//Funcion para traer detalle de los Productos
		function selecContenido($id_seccion)
		{
			//include("cms/core/mapping/functions.mapping.php");
			$db = new Database();
			$db->connect();
			$constructor = new CMS_mapping("cms_contenidos", $db);
			$db->doQuery("SELECT * FROM cms_contenidos WHERE id_seccion = ".$id_seccion, SELECT_QUERY);
			$results = $db->results;
			$obj = $constructor->mapping($results);
			//print_r($obj);
			return $obj;
			$db->disconnect();
		} 
	
	/////////////////////////////////////////////////
	//Funcion para traer Contactenos
		function selecContactenos()
		{
			//include("cms/core/mapping/functions.mapping.php");
			$db = new Database();
			$db->connect();
			$constructor = new CMS_mapping("cms_contactenos", $db);
			$db->doQuery("SELECT * FROM cms_contactenos", SELECT_QUERY);
			$results = $db->results;
			$obj = $constructor->mapping($results);
			//print_r($obj);
			return $obj;
			$db->disconnect();
		} 
			
			
	/////////////////////////////////////////////////
	//Funcion para traer Contactenos
		function selecLogo()
		{
			//include("cms/core/mapping/functions.mapping.php");
			$db = new Database();
			$db->connect();
			$constructor = new CMS_mapping("cms_logo", $db);
			$db->doQuery("SELECT * FROM cms_logo", SELECT_QUERY);
			$results = $db->results;
			$obj = $constructor->mapping($results);
			//print_r($obj);
			return $obj;
			$db->disconnect();
		} 
		
		/////////////////////////////////////////////////
	//Funcion para traer todos los productos por categoria y subcategoria
		function selectProductoBusqueda($buscar)
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_categorias", $db);

		$db3 = new Database();
		$db3->connect();
		$constructor3 = new CMS_mapping("cms_productos", $db3);
		
		$db4 = new Database();
		$db4->connect();
		$constructor4 = new CMS_mapping("cms_productos", $db4);

		
		
		if($_SESSION['idioma'] == "en"){
			$db->doQuery("SELECT * FROM cms_categorias WHERE desc_categoria_en LIKE '%".$buscar."%' OR id_categoria IN (SELECT id_categoria FROM cms_subcategorias WHERE desc_subcategoria_en LIKE '%".$buscar."%' and id_subcategoria IN(SELECT id_subcategoria FROM cms_productos) ) ORDER BY desc_categoria_en", SELECT_QUERY);
			$db3->doQuery("SELECT * FROM cms_productos WHERE nombre_producto_en LIKE '%".$buscar."%' ORDER BY precio_producto,nombre_producto_en asc", SELECT_QUERY);
		}else{
			$db->doQuery("SELECT * FROM cms_categorias WHERE desc_categoria_es LIKE '%".$buscar."%' OR id_categoria IN (SELECT id_categoria FROM cms_subcategorias WHERE desc_subcategoria_es LIKE '%".$buscar."%' and id_subcategoria IN(SELECT id_subcategoria FROM cms_productos) ) ORDER BY desc_categoria_es", SELECT_QUERY);
			$db3->doQuery("SELECT * FROM cms_productos WHERE nombre_producto_es LIKE '%".$buscar."%' ORDER BY precio_producto,nombre_producto_es asc", SELECT_QUERY);
		}
		
	
		$results = $db->results;
		$obj = $constructor->mapping($results);

		$results3 = $db3->results;
		$obj3 = $constructor3->mapping($results3);
		$val = 0;
		
		if(count($obj->id_categoria) > 0){ 
			if($_SESSION['idioma'] == "en"){
				echo "<table width='100%' border='0'><tr><td>Categories</td></tr></table>";
			}
			else{
				echo "<table width='100%' border='0'><tr><td>Categorias</td></tr></table>";
			}
			
			for($c=0; $c < count($obj->id_categoria); $c++){
					
					/////////////////////////////////// SUBCATEGORIAS //////////////////////////////////////////////
		
					$db2 = new Database();
					$db2->connect();
					$constructor2 = new CMS_mapping("cms_subcategorias", $db2);
		
					
					if($_SESSION['idioma'] == "en"){
					
						$db2->doQuery("SELECT * FROM cms_subcategorias WHERE id_categoria = '".$obj->id_categoria[$c]."' and id_subcategoria IN(SELECT id_subcategoria FROM cms_productos) AND desc_subcategoria_en like '%".$buscar."%' ORDER BY desc_subcategoria_en", SELECT_QUERY);
						$results2  = $db2->results;
						$obj2 = $constructor2->mapping($results2);
						
						if(count($obj2->id_subcategoria) == ""){
							$db2->doQuery("SELECT * FROM cms_subcategorias WHERE id_categoria = '".$obj->id_categoria[$c]."' and id_subcategoria IN(SELECT id_subcategoria FROM cms_productos) ORDER BY desc_subcategoria_en", SELECT_QUERY);
							$results2  = $db2->results;
							$obj2 = $constructor2->mapping($results2);
						}

						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◘ ".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj->desc_categoria_en[$c])."<br>";	
							for($a=0; $a < count($obj2->id_subcategoria); $a++){
								echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• <a href='#' class='uno'>".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj2->desc_subcategoria_en[$a])."</a><br>";
								
													 
													
								////////////////////////////// PRODUCTOS SUB CATEGORIA Ingles///////////////////////////////////////////////////////
									$db4 = new Database();
									$db4->connect();
									$constructor4 = new CMS_mapping("cms_productos", $db4);
									
									$db4->doQuery("SELECT * FROM cms_productos WHERE id_categoria = '".$obj->id_categoria[$c]."' and id_subcategoria = '".$obj2->id_subcategoria[$a]."' ORDER BY precio_producto asc", SELECT_QUERY);
									$results4 = $db4->results;
									$obj4 = $constructor4->mapping($results4);
									
									if(count($obj4->id_producto) > 0){	
										  echo "<ul class='clearfix'>";
										  for($pe=0; $pe < count($obj4->id_producto); $pe++){
										  $val = 1;
										  echo "<li>
												<a href='detalle.php?id=".$obj4->id_producto[$pe]."'>
												  <span class='entrar'>entrar</span>
												  <img src='admin/modules/producto/files/".$obj4->imagen[$pe]."' width='306' height='150'>          
												</a>";
													
											  if($_SESSION['idioma'] == "en"){	
												  echo "<h3>".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj4->nombre_producto_en[$pe])."</h3>
														<h4>Ref: ".$obj4->referencia_producto_en[$pe]."</h4>
														<h4>$".$obj4->precio_producto[$pe]."</h4>";
											  }else{  
												  echo "<h3>".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj4->nombre_producto_es[$pe])."</h3>
														<h4>Ref: ".$obj4->referencia_producto_es[$pe]."</h4>
														<h4>$".$obj4->precio_producto[$pe]."</h4>";
											  }
											 echo "</li>";
										}
										echo "</ul>";
									}
							}
					}
					
					else{
						
						$db2->doQuery("SELECT * FROM cms_subcategorias WHERE id_categoria = '".$obj->id_categoria[$c]."' and id_subcategoria IN(SELECT id_subcategoria FROM cms_productos) AND desc_subcategoria_es like '%".$buscar."%' ORDER BY desc_subcategoria_es", SELECT_QUERY);
						$results2  = $db2->results;
						$obj2 = $constructor2->mapping($results2);
						
						if(count($obj2->id_subcategoria) == 0){
							$db2->doQuery("SELECT * FROM cms_subcategorias WHERE id_categoria = '".$obj->id_categoria[$c]."'  and id_subcategoria IN(SELECT id_subcategoria FROM cms_productos) ORDER BY desc_subcategoria_es", SELECT_QUERY);
							$results2  = $db2->results;
							$obj2 = $constructor2->mapping($results2);
						}
					
					
					

						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◘ ".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj->desc_categoria_es[$c])."<br>";
							for($cont_p1=0; $cont_p1 < count($obj2->id_subcategoria); $cont_p1++){
								echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• <a href='#' class='uno'>".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj2->desc_subcategoria_es[$cont_p1])."</a><br>";
										
								////////////////////////////// PRODUCTOS SUB CATEGORIA Español//////////////////////////////////////////////////////
									$db4 = new Database();
									$db4->connect();
									$constructor4 = new CMS_mapping("cms_productos", $db4);

								
									$db4->doQuery("SELECT * FROM cms_productos WHERE id_categoria = '".$obj->id_categoria[$c]."' and id_subcategoria = '".$obj2->id_subcategoria[$cont_p1]."' ORDER BY precio_producto asc", SELECT_QUERY);
									$results4 = $db4->results;
									$obj4 = $constructor4->mapping($results4);
									
									if(count($obj4->id_producto) > 0){	
										  echo "<ul class='clearfix'>";
										  for($ps=0; $ps < count($obj4->id_producto); $ps++){
										  $val = 1;
										  echo "<li>
												<a href='detalle.php?id=".$obj4->id_producto[$ps]."'>
												  <span class='entrar'>entrar</span>
												  <img src='admin/modules/producto/files/".$obj4->imagen[$ps]."' width='306' height='150'>          
												</a>";
													
											  if($_SESSION['idioma'] == "en"){	
												  echo "<h3>".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj4->nombre_producto_en[$ps])."</h3>
														<h4>Ref: ".$obj4->referencia_producto_en[$ps]."</h4>
														<h4>$".$obj4->precio_producto[$ps]."</h4>";
											  }else{  
												  echo "<h3>".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj4->nombre_producto_es[$ps])."</h3>
														<h4>Ref: ".$obj4->referencia_producto_es[$ps]."</h4>
														<h4>$".$obj4->precio_producto[$ps]."</h4>";
											  }
											 echo "</li>";
										}
										echo "</ul>";
									}
										
							}
					}
						
					////////////////////////////// PRODUCTOS CATEGORIA ///////////////////////////////////////////////////////
						$db4 = new Database();
						$db4->connect();
						$constructor4 = new CMS_mapping("cms_productos", $db4);
									
						$db4->doQuery("SELECT * FROM cms_productos WHERE id_categoria = '".$obj->id_categoria[$c]."' and id_subcategoria = 0 ORDER BY precio_producto asc", SELECT_QUERY);
						$results4 = $db4->results;
						$obj4 = $constructor4->mapping($results4);
						
						if(count($obj4->id_producto) > 0){	
							  echo "<ul class='clearfix'>";
							  for($p1=0; $p1 < count($obj4->id_producto); $p1++){
							  $val = 1;
							  echo "<li>
									<a href='detalle.php?id=".$obj4->id_producto[$p1]."'>
									  <span class='entrar'>entrar</span>
									  <img src='admin/modules/producto/files/".$obj4->imagen[$p1]."' width='306' height='150'>          
									</a>";
										
								  if($_SESSION['idioma'] == "en"){	
									  echo "<h3>".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj4->nombre_producto_en[$p1])."</h3>
											<h4>Ref: ".$obj4->referencia_producto_en[$p1]."</h4>
											<h4>$".$obj4->precio_producto[$p1]."</h4>";
								  }else{  
									  echo "<h3>".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj4->nombre_producto_es[$p1])."</h3>
											<h4>Ref: ".$obj4->referencia_producto_es[$p1]."</h4>
											<h4>$".$obj4->precio_producto[$p1]."</h4>";
								  }
								 echo "</li>";
							}
							echo "</ul>";
						}else if(count($obj2->id_subcategoria) == 0){
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No hay productos en esta Categoria <br>";
						}
					
			}
			
			echo "<br><br>";
			echo "<HR width='100%'>";
			echo "<br><br>";
				
		}
		
		if($val == 0){
		/////////////////////////// PRODUCTOS ///////////////////////////////////////////////
		if(count($obj3->id_producto) > 0){ 
			if($_SESSION['idioma'] == "en"){
				echo "<table width='100%' border='0'><tr><td>Products</td></tr></table>";
			}else{
				echo "<table width='100%' border='0'><tr><td>Productos</td></tr></table>";
			}
			
			echo "<ul class='clearfix'>";
		}
		
		if(count($obj3->id_producto) > 0){                               
					
			for($produ=0; $produ < count($obj3->id_producto); $produ++){
			$val = 1;
				  echo "<li>
						<a href='detalle.php?id=".$obj3->id_producto[$produ]."'>
						  <span class='entrar'>entrar</span>
						  <img src='admin/modules/producto/files/".$obj3->imagen[$produ]."' width='306' height='150'>          
						</a>";
						
				  if($_SESSION['idioma'] == "en"){	
					  echo "<h3>".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj3->nombre_producto_en[$produ])."</h3>
							<h4>Ref: ".$obj3->referencia_producto_en[$produ]."</h4>
							<h4>$".$obj3->precio_producto[$produ]."</h4>";
				  }else{  
					  echo "<h3>".str_ireplace("$buscar", "<b>".$buscar."</b>", $obj3->nombre_producto_es[$produ])."</h3>
							<h4>Ref: ".$obj3->referencia_producto_es[$produ]."</h4>
							<h4>$".$obj3->precio_producto[$produ]."</h4>";
				  }
					 echo "</li>";
			}
			echo "</ul>";		
		}
		}
		
		if($val == 0){
				echo "No hay registros en esta busqueda <b>".$buscar."</b>";	
			}
		
		$db->disconnect();
		} 
	
		/////////////////////////////////////////////////
	//Funcion para traer todos los productos por categoria y subcategoria
		function selectProductoFiltro($desde,$hasta)
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_productos", $db);
		$db->doQuery("SELECT * FROM cms_productos WHERE precio_producto BETWEEN '".$desde."' AND '".$hasta."' ORDER BY precio_producto,nombre_producto_es asc", SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		 echo "<ul class='clearfix'>";
		if(count($obj->id_producto) > 0){                               
			$datos=6;
			$pagina=1;
			if (!empty($_GET['pagina'])){
			$pagina=$_GET['pagina'];
			}
					
			$pg=paginacion1($datos,count($obj->id_producto),$pagina);
					
			for($c=$pg[1]; $c < $pg[2]; $c++){
				  echo "<li>
						<a href='detalle.php?id=".$obj->id_producto[$c]."'>
						  <span class='entrar'>entrar</span>
						  <img src='admin/modules/producto/files/".$obj->imagen[$c]."' width='306' height='150'>          
						</a>";
						
				  if($_SESSION['idioma'] == "en"){	
					  echo "<h3>".$obj->nombre_producto_en[$c]."</h3>
							<h4>Ref: ".$obj->referencia_producto_en[$c]."</h4>
							<h4>$".$obj->precio_producto[$c]."</h4>";
				  }else{  
					  echo "<h3>".$obj->nombre_producto_es[$c]."</h3>
							<h4>Ref: ".$obj->referencia_producto_es[$c]."</h4>
							<h4>$".$obj->precio_producto[$c]."</h4>";
				  }
					 echo "</li>";
			}
			echo "</ul>";
 			echo "<div class='clearfix pag' align='center'>";
					
					$html = paginacion2($pagina,"resultados.php?buscar=$buscar&",$pg[0]);
					echo $html;
					
			echo "</div>";			
		}else{
			echo "No hay registros en esta busqueda <b>".$buscar."</b>";	
		}
		$db->disconnect();
		} 
		
	function paginacion1($datos,$num,$pagina){
		$total_pag=ceil($num/$datos);
		$inicio=($pagina-1)*$datos;
		$limite=$inicio+$datos;
		if ($limite > $num){
			$limite=$num;
		}
		$arreglo[0]=$total_pag;
		$arreglo[1]=$inicio;
		$arreglo[2]=$limite;
		return $arreglo;
	}

	function paginacion2($pagina,$url,$total_pag){
	$html="";	
	if ($pagina > 1){
			$html.="<a href='".$url."pagina=".($pagina-1)."'><img src='images/arrow-black-left.png' width='7' height='7' border='0''>&nbsp; &lt;&lt;&nbsp;&nbsp;</a>";
		}
		$arr=1;
		while ($arr <= $total_pag){
			if ($arr == $pagina){
				$html.="<a href='".$url."pagina=".$arr."' class='active'>".$arr."</a>&nbsp;";
			}
			else{
				$html.="<a href='".$url."pagina=".$arr."'>".$arr."</a>&nbsp;";
			}
			$arr++;
		}
		if ($pagina < $total_pag){
			$html.="<a href='".$url."pagina=".($pagina+1)."'>&nbsp; &gt;&gt; &nbsp;<img src='images/arrow-black-right.png' width='7' height='7' border='0''></a>";
		}
		
		return $html;
	}
			
			
	//Funcion para traer las foto del Banner de home
		function selectBanner($tipo)
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_banner", $db);
		$db->doQuery("SELECT * FROM cms_banner WHERE tipo = ".$tipo, SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		return $obj;
		$db->disconnect();
		} 
	
	
	/////////////////////////////////////////////////
	//Funcion para traer imagen del banner seccion tienda
		function selectbannerTienda()
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_banner", $db);
		
		$db->doQuery("SELECT * FROM cms_banner WHERE tipo = 2", SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		
		echo "<ul>";                                 
		if(count($obj->id_banner) > 0){
			for($c=0; $c < count($obj->id_banner); $c++){			
				echo "<li> <div align='left'><img src='admin/modules/tienda/files/".$obj->imagen[$c]."'  width='675' height='461'></div></li>";			
			}
		}else{
			echo "<li><div align='left'><img src='images/espacio.png'  width='675' height='461'></div></li>";	
		}
			
			echo "</ul>";
		
		$db->disconnect();
		} 
	
		/////////////////////////////////////////////////
	//Funcion para traer imagen del banner seccion tienda
		function selectProductosBanner()
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_productos", $db);
		
		$db->doQuery("SELECT * FROM cms_productos ORDER BY destacado,id_categoria,RAND()", SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		  
        $cat = "";
		$cont = 1;         
		for($c=0; $c < count($obj->id_producto); $c++){
			
			if($obj->id_categoria[$c] != $cat){
				//$cat = $obj->id_categoria[$c];
			echo "<li>
			      <a href='detalle.php?id=".$obj->id_producto[$c]."'><span class='entrar'>entrar</span>
				  <img src='admin/modules/producto/files/".$obj->imagen[$c]."' width='306' height='150'>
				  </a>";
				 
				  
				  if($_SESSION['idioma'] == "en"){	
					  echo "<h3>".$obj->nombre_producto_en[$c]."</h3>
						    <h4>(".$obj->referencia_producto_en[$c].")</h4>
						    <h4>$".$obj->precio_producto[$c]."</h4>";
				  }else{  
					  echo "<h3>".$obj->nombre_producto_es[$c]."</h3>
						    <h4>(".$obj->referencia_producto_es[$c].")</h4>
						    <h4>$".$obj->precio_producto[$c]."</h4>";
				  }
				 echo "</li>";	
				$cont++;   		
			}
			
			if($cont > 6){
				$c= count($obj->id_producto)+1;
			}
		}
		
		
		$db->disconnect();
		} 
	
	/////////////////////////////////////////////////
	//Funcion Guardar pedidos producto
		function GuardarProducto($id,$nombre,$correo,$fecha)
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_productos_seprados", $db);
		$db->doQuery("INSERT INTO cms_productos_seprados(id_producto,nombre_cliente,correo_cliente,fecha_estimada)  VALUES('$id','$nombre','$correo','$fecha')", mysql_real_escape_string(mysql_error()));
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		//return $obj;
		$db->disconnect();
		} 
		
	/////////////////////////////////////////////////
	//Funcion Guardar pedidos producto
		function SelectProductoPedido($id)
		{
		//include("cms/core/mapping/functions.mapping.php");
		$db = new Database();
		$db->connect();
		$constructor = new CMS_mapping("cms_productos", $db);
		$db->doQuery("SELECT * FROM cms_productos WHERE id_producto = ".$id, SELECT_QUERY);
		$results = $db->results;
		$obj = $constructor->mapping($results);
		//print_r($obj);
		return $obj;
		$db->disconnect();
		} 					
	/////////////////////////////////////////////////
	/////////////////////////////////////////////////
?>