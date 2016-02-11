<?php
/**
 * Clase de utilidades generales de negocio, no se deben instanciar objetos de esta clase
 * por esto se declara como abstracta.
 * @author aquevedo
 */
abstract class UtilBusiness{

	/**
	 * Toma las posiciones de un arreglo y las asigna a un objeto
	 * <pre>El objeto debe ser un pojo completo ya que se va acceder por los setters</pre>
	 * @param object $objecto
	 * @param array $vector
	 * @return array
	 * @author aquevedo
	 */
	public static function copyArrayToObject($objeto, $vector) {
		foreach ( $vector AS $key => $value ){
			$cadena = 'set'.ucfirst($key);
			$objeto->$cadena($value);
		}
		return $objeto;
	}

	/**
	 * Retorna un listado de objetos a partir de una matriz en la cual cada fila son las propiedades de un objeto
	 * @param object $objecto
	 * @param array $matrix
	 * @return array
	 * @author aquevedo
	 */
	public static function copyMatrixToObjectList($objeto, $matrix){
		$lista = array();
		foreach($matrix AS $key => $vector){
			$objTmp = clone $objeto;
			array_push($lista, self::copyArrayToObject($objTmp, $vector) );
		}
		return $lista;
	}

	/**
	 * Convierte un objeto en un vector
	 * Se supone que los unicos metodos que comienzan por get son los de obtienen de atributos
	 * @param object $objeto
	 * @return array
	 * @author aquevedo
	 */
	public static function copyObjectToArray($objeto){
		//Se obtienen metodos getters
		$arregloMetodos = get_class_methods($objeto);
		$arregloGetters = array();
		foreach ($arregloMetodos AS $nombreMetodo){
			$posicion = strpos($nombreMetodo, "get"); 
			if ( $posicion!==FALSE && $posicion===0 ){
				array_push($arregloGetters, $nombreMetodo);
			}
		}
		
		//Nombres de las columnas
		$arregloNombreKey = array();
		foreach ($arregloGetters AS $nombreMetodo){
			$arregloNombreKey[$nombreMetodo] = substr($nombreMetodo, 3);
		}
		
		//Se carga el vector
		$vector = array();
		foreach ($arregloGetters AS $nombreMetodo){
			$vector[ $arregloNombreKey[$nombreMetodo] ] = gettype( $objeto->$nombreMetodo() )=="array" ? "" : $objeto->$nombreMetodo();
		}
		
		return $vector;
	}
	
	/**
	 * Retorna una matriz a partir de un listado de objetos en la cual cada fila es un objeto
	 * @param array $matrix
	 * @return array
	 * @author aquevedo
	 */
	public static function copyObjectListToMatrix($list){
		$matrix = array();
		foreach($list AS $objeto){
			array_push($matrix, self::copyObjectToArray($objeto) );
		}
		return $matrix;
	}
	
	/**
	 * Retorna un listado de string a partir de una matriz
	 * la primera fila (0) son los nombres de las columnas
	 * de la segunda fila en adelante son los valores de las columnas
	 * @param array $matrix
	 * @return array
	 * @author aquevedo
	 */
	public static function copyMatrixToStringList($matrix){
		$lista = array();
		if ( count($matrix) > 0 ){
			//Se sacan los nombres de las columnas
			$keys = array_keys( $matrix[0] );
			$i = 1;
			$cadena = "";
			$columnas = count($keys);
			foreach($keys AS $indice => $valor){
				$cadena .= strtolower($valor);
				if ( $i != $columnas ){
					$cadena .= "|";
				}
				$i++;
			}
			array_push($lista, $cadena);
			
			//Se sacan los valores
			foreach($matrix AS $indice => $vector){
				$cadena = "";
				$i = 1;
				foreach($vector AS $key => $valor){
					if ( strlen($valor) == 0 )
						$valor = " "; 
					$cadena .= $valor;
					if ( $i != $columnas ){
						$cadena .= "|";
					}
					$i++;
				}
				array_push($lista, $cadena);
			}
		}
			
		return $lista;
	}

	/**
	 * Verifica que una variable este cargada con algun contenido
	 * @param Ambigous<mixed,boolean,string,unknown,NULL> $variable
	 * @author aquevedo
	 */
	public static function assertNotNUllOrEmpty($variable, $mensajeP=""){
		if ( $variable===NULL || $variable==="" ){
			$mensaje = "Campo vacio, no es posible continuar con la operacion";
			if ( $mensajeP != "" )
			$mensaje = $mensajeP;
			die($mensaje);
		}
	}

	/**
	 * Muestra un archivo alojado en una carpeta del servidor
	 * @param String $file
	 * @author aquevedo
	 */
	public static function showFile($file){
		if (file_exists($file)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename='.basename($file));
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			ob_clean();
			flush();
			readfile($file);
		}
	}
	
	/**
	 * Retorna una cadena de caracteres con la representacion string de una variable
	 * @param Ambigous<mixed,boolean,string,unknown,NULL> $variable
	 * @author aquevedo
	 */
	public static function toString($variable){
		$cadena = "";
		switch( gettype($variable) ){
			case "boolean";
				if ( $variable == true )
					$cadena = "true";
				else
					$cadena = "false";
				break;
			case "integer";
				$cadena = (string) $variable;
				break;
			case "double";
				$cadena = (string) $variable;
				break;
			case "string";
				$cadena = $variable;
				break;
			case "array";
				$cadena = var_export($variable, true);
				break;
			case "object";
				$cadena = var_export($variable, true);
				break;
			case "resource";
				$cadena = var_export($variable, true);
				break;
			case "NULL";
				break;
			default:
				$cadena = var_export($variable, true);
		}
		
		return $cadena;
	}

	/**
	 * Adiciona columnas de opciones generales a una tabla
	 * @param array $matrix
	 * @param array $opciones
	 * @param string $colId
	 * @param string $suffix
	 * @return array
	 * @author aquevedo
	 */
	public static function addOpciones($matrix, $opciones=array('r','u','d'), $colId="", $suffix="" ){
		foreach($matrix AS $key => $vector){
			//Consultar
			if ( in_array('r', $opciones) ){
				$matrix[$key]['Consultar'] = "<center><img src=\"../imagenes/btn_editar.gif\" alt=\"consultar\" title=\"consultar\" id=\"iRead\" name=\"iRead\" style=\"cursor: pointer;\" onclick=\"consultar$suffix({$vector[$colId]})\" /></center>";
			}
			
			//Modificar
			if ( in_array('u', $opciones) ){
				$matrix[$key]['Modificar'] = "<center><img src=\"../imagenes/modify.png\" alt=\"modificar\" title=\"modificar\" id=\"iModi\" name=\"iRead\" style=\"cursor: pointer;\" onclick=\"modificar$suffix({$vector[$colId]})\" /></center>";
			}
			
			//Eliminar
			if ( in_array('d', $opciones) ){
				$matrix[$key]['Eliminar'] = "<center><img src=\"../imagenes/borrar.gif\" alt=\"eliminar\" title=\"eliminar\" id=\"iRead\" name=\"iRead\" style=\"cursor: pointer;\" onclick=\"if ( confirm('&iquest;Esta seguro que desea eliminar este registro&quest;') ) { eliminar$suffix({$vector[$colId]}); }\" /></center>";
			}
		}
		return $matrix;
	}

	/**
	 * Retorna una vector con llaves de id del objeto y texto en el valor
	 * <pre>El objeto debe ser un pojo completo ya que se va acceder por los getters</pre>
	 * @param array $list
	 * @param string $value
	 * @param string $label
	 * @return array
	 * @author aquevedo
	 */
	public static function objectListToSelectList($list, $value, $label){
		$vector = array();
		$cadenaId = 'get'.ucfirst($value);
		$cadenaTxt = 'get'.ucfirst($label);
		foreach($list AS $objeto){
			$vector[ $objeto->$cadenaId() ] = $objeto->$cadenaTxt();
		}
		return $vector;
	}

	/**
	 * Ordena una matrix ascendentemente por una columna dada
	 * <pre>La columna de ordenamiento debe contener numeros
	 * @param array $matrix
	 * @param string $column
	 * @author aquevedo
	 */
	public static function sortAscMatrixByColumn($matrix, $column){
		$tamano = count($matrix);
		//Ordenamiento burbuja
		for ($i=0; $i<$tamano-1; $i++){
			for ($j=$i+1; $j<$tamano; $j++){
				if ( $matrix[$i][$column] > $matrix[$j][$column] ){
					$vecAux = $matrix[$i];
					$matrix[$i] = $matrix[$j];
					$matrix[$j] = $vecAux;
				}
			}
		}
		
		return $matrix;
	}
	
	/**
	* Ordena una matrix descendentemente por una columna dada
	* <pre>La columna de ordenamiento debe contener numeros
	* @param array $matrix
	* @param string $column
	* @author aquevedo
	*/
	public static function sortDescMatrixByColumn($matrix, $column){
		$tamano = count($matrix);
		//Ordenamiento burbuja
		for ($i=0; $i<$tamano-1; $i++){
			for ($j=$i+1; $j<$tamano; $j++){
				if ( $matrix[$i][$column] < $matrix[$j][$column] ){
					$vecAux = $matrix[$i];
					$matrix[$i] = $matrix[$j];
					$matrix[$j] = $vecAux;
				}
			}
		}
	
		return $matrix;
	}

	/**
	 * Transpone una matrix
	 * @param array $matrix
	 * @return array
	 * @author aquevedo
	 */
	public static function transpose($matrix){
		$mTmp = array();
		foreach ( $matrix AS $keyRow => $row ){
			foreach ( $row AS $keyCol => $cell ){
				$mTmp[$keyCol][$keyRow] = $cell; 
			}
		}
		return $mTmp;
	}

	/**
	 * Retorna una matriz aparti de una matriz padre y unas llaves en especifico
	 * @param array $matrix
	 * @param array $keys
	 * @param bool $conservaLlave
	 * @author aquevedo
	 */
	public static function subMatrix($matrix, $keys, $conservaLlave=false){
		$list = array();
		if ($conservaLlave == false){
			foreach ( $keys AS $key ){
				array_push($list, $matrix[$key]);
			}
		}
		else{
			while ( list($key, $val) = each( $list ) ) {
				$list[$val] = $matrix[$val];
			}
		}
		return $list;
	}

	/**
	 * Devuelve la primera ocurrencia de una busqueda en una matriz de acuerdo a una combinacion de parametros
	 * @param array $matriz matriz en la que va buscar
	 * @param array $parametros vector con los parametros que se van a buscar
	 * @return mixed false si no se encuentra, numero de la fila en caso de encontrar
	 * @author aquevedo
	 */
	public static function findOnMatrix( $matrix, $parametros ){
		if ( !is_array($matrix) or !is_array($parametros) or count($matrix)==0 or count($parametros)==0  )
			return FALSE;
	
		foreach ($matrix AS $key => $vector){
			$encontro = FALSE;
			foreach ($parametros AS $columna => $valorBuscado )
			{
				if ( $vector[$columna] == $valorBuscado )
					$encontro = TRUE;
				else{
					$encontro = FALSE;
					break;
				}
			}
			if ( $encontro == TRUE )
				return $key;
		}
	
		return FALSE;
	}

	/**
	 * Crea una tabla a partir de una matriz
	 * @param array $informacion
	 * @param string $tableName
	 * @param array $omitir
	 * @return string 
	 */
	public static function tablaOrdenamiento($informacion, $tableName, $omitir=array()){
		 
		if(isset($informacion)){
			$tabla .= "<table class=\"tablesorter\" id=\"$tableName\" >
					<thead>" ;
			$key1V = array_keys($informacion);
			$key2V = array_keys($informacion[$key1V[0]]);
			if(is_array($informacion[$key1V[0]][$key2V[0]])){
				$encabezado = array();
				$encabezado = $informacion[$key1V[0]];
				foreach($encabezado AS $key2 => $encabezado2){
					$numEncabezado = count($encabezado2);
					$titulos .= "<td colspan=$numEncabezado ><b>" . $key2 . "</b></td>";
					foreach($encabezado2  AS $key3 => $dato){
						$subtitulos .= "<th ><b>" . $key3 . "</b></th>";
					}
				}
				$tabla .= "<tr bgcolor='#E7E0F7'>$titulos</tr>";
				$tabla .= "<tr bgcolor='#E7E0F7'>$subtitulos</tr>";
				$tabla .= "</thead>
					<tbody>";  								
				foreach($informacion  AS $key => $encabezado2){
					$tabla .= "<tr bgcolor='#FFFFFF' >";
					foreach($encabezado2  AS $key1 => $valores){
						foreach($valores  AS $key2 => $dato){
							$tabla .= "<td >$dato</td>";
						}
					}
					$tabla .= "</tr>";
		 		}
			}
			else{
				if ( is_array($omitir) && count($omitir)>0 ){
					$informacion = self::transpose($informacion);
					foreach($omitir AS $colDel){
						unset($informacion[$colDel]);
					}
					$informacion = self::transpose($informacion);
				}
				
		 		$tabla .= "<tr bgcolor='#E7E0F7'>
		 			<th style=\"background-color: #1E748F;\"><b>" . implode("</b></th ><th style=\"background-color: #1E748F;\"><b>",array_keys($informacion[$key1V[0]])). "</b></th>
		 		  </tr>
		 		  </thead>
				<tbody>";
		 		
		 		foreach($informacion  AS $key => $datos){
		 			$tabla .= "<tr bgcolor='#FFFFFF' >
			 			<td >" . implode("</td><td>",array_values($datos)). "</td>
		 		  	</tr>";
		 		}
			}

			$tabla .=  "</tbody>
 		</table>";

			return $tabla;
		}
	}

	/**
	 * Cambia los id de una columna por los strings respectivos de un vector asociado
	 * @param array $matrix
	 * @param string $columna
	 * @param array $vector 
	 * @return array
	 */
	public static function idToStringOnMatrix($matrix, $columna, $vector){
		foreach ($matrix AS $key => $fila){
			$matrix[$key][$columna] = $vector[ $fila[$columna] ];
		}
		return $matrix;
	}
	
	/**
	 * Retorna la imagen a asignar para icono de un aerchivo
	 * @param string $archivo
	 * @return string 
	 */
	public static function fileTymeImage($archivo){
		$tmp = explode('.', $archivo);
		
		$directorio = "../imagenes/filestypes/";
		$extension = $tmp[ count($tmp) - 1 ];
		switch ($extension){
			case "doc":
				$imagen = $directorio."doc.png";
				break;
			case "docx":
				$imagen = $directorio."doc.png";
				break;
			case "xls":
				$imagen = $directorio."xls.png";
				break;
			case "xlsx":
				$imagen = $directorio."xls.png";
				break;
			case "ppt":
				$imagen = $directorio."ppt.png";
				break;
			case "pptx":
				$imagen = $directorio."ppt.png";
				break;
			case "jpeg":
				$imagen = $directorio."jpeg.png";
				break;
			case "jpg":
				$imagen = $directorio."jpeg.png";
				break;
			case "png":
				$imagen = $directorio."png.png";
				break;
			case "pdf":
				$imagen = $directorio."pdf.png";
				break;
			case "rar":
				$imagen = $directorio."rar.png";
				break;
			case "zip":
				$imagen = $directorio."zip.png";
				break;
			case "txt":
				$imagen = $directorio."txt.png";
				break;
			case "xml":
				$imagen = $directorio."xml.png";
				break;
			default:
				$imagen = $directorio."unknown.png";
				break;
		}
		
		return $imagen;
	}
	
	/**
	 * Busca los acentos y los reemplaza por caracter del tipo &acute;
	 * @param string $cadena
	 * @return string 
	 */
	public static function changeAcents($cadena){
		$buscados = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
		$reemplazados = array('&aacute;', '&eacute;', '&iacute;', '&oacute;', '&uacute;', '&Aacute;', '&Eacute;', '&Iacute;', '&Oacute;', '&Uacute;', '&ntilde;', '&Ntilde;');
		
		foreach($buscados AS $key => $caracter){
			str_replace($buscados[$key], $reemplazados[$key], $cadena);
		}
		
		return $cadena;
		
	}
}
?>