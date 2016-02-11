<?php
/*
 * @file               : plGeneral.php
 * @brief              : Archivo de funciones generales para sitio
 * @version            : 3.2
 * @ultima_modificacion: 02-feb-2012
 * @author             : Ruben Dario Cifuentes
 */

/*
 * Funcion para auto carga de clases segun sea requerido
 * @fn my_autoload
 * @author Carlos A. Mock-kow M
 * @updated Ruben Dario Cifuentes Torres
 * @param $fClass string Nombre de la clase a cargar
 * @brief carga de clases segun sea requerido
 * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error
 */
function my_autoload( $fClass )
{
	if( class_exists( $fClass, false ) ) { return TRUE; }
	try
  {
		// Cargamos por defecto
		LoadLib( $fClass.'.db.php' );

		if( !class_exists( $fClass, false ) )
    {
			LoadLib( $fClass.'.class.php' );
      
      if( !class_exists( $fClass, false ) )
      {
        LoadLib( $fClass.'.cls.php' );
      }
    }

	}
  catch( Exception $e )
  {
		echo $e->getMessage() ;
		die();
	}
}

/*
 * Funcion para auto carga de clases en bases del proyecto
 * @fn spl_autoload_register
 * @author Ruben Dario Cifuentes Torres ruben@techkila.co
 * @param $fClass string Nombre de la clase a cargar
 * @brief carga de clases segun sea requerido
 * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error
 */
spl_autoload_register( "my_autoload" );

/*
 * Funcion para Cargar archivos al sitio
 * @fn LoadLib
 * @author Carlos A. Mock-kow M
 * @param $fFileName string Nombre del archivo a incluir
 * @brief Asigna los estilos de la cabecera
 * @return Bool TRUE si se ejecuto correctamente FALSE en caso de Error
 */
function LoadLib( $fFileName = NULL )
{
	if( NULL === $fFileName )
  {
		return FALSE;
  }
	$fFile = explode( ".", $fFileName );
	
	switch( strtolower( $fFile[1] ) )
  {
		case "class":
    {
			if ( file_exists ( CLASSX.$fFileName ) )
				return include_once( CLASSX.$fFileName );

      break;
		}
    case "db":
    {
			if( file_exists( DBMODEL.$fFileName ) )
				return include_once( DBMODEL.$fFileName );

      break;
		}
    case "cls":
    {
      if( function_exists( "DOMPDF_autoload" ) )
      {
        DOMPDF_autoload( $fFile[0] );
      }
      else
        return FALSE;

      break;
    }
    default:
    {
			return FALSE;
		}
	}
  
  return FALSE;
}

/*
 * Funcion para retornar el valor de una variable obtenida en post o get
 * @fn GetData
 * @author Carlos A. Mock-kow M
 * @param $fVarName string Nombre de la variable
 * @param $fDefault string Valor por defecto
 * @brief Retorna el valor de una variable POST o GET
 * @return Valor de la variable o un valor por defecto
 */
function GetData( $fVarName = NULL, $fDefault = NULL )
{
	if( $fVarName != NULL )
	{
		if( array_key_exists( $fVarName, $_POST ) ){
			$return = str_replace("%20", " ", $_POST[$fVarName]);
		} elseif( array_key_exists( $fVarName, $_GET ) ) {
			$return = str_replace("%20", " ", $_GET[$fVarName]);
		} else {
			$return = $fDefault;
		}
	} else {
		$return = FALSE;
	}
	
	return $return;
}

/*
 * Funcion para remover tags de base dedatos y php
 * @fn StripHtml
 * @author Wilder salazar
 * @param $fStringData string dato a escapar
 * @brief Retorna una cadena sin atributos de php y sql
 * @return string valor de la cadena escapada o FALSE en caso de error
 */
function StripHtml( $fStringData = NULL )
{
	if( is_null( $fStringData ) && "" != $fStringData ){
		return FALSE;
	}
	
	$fStringData = trim( $fStringData );
	
	//quita tags tipo sql y html
	$fStringData = strip_tags( $fStringData );
	$fStringData = str_replace( "from", "", $fStringData );
	$fStringData = str_replace( "FROM", "", $fStringData );
	$fStringData = str_replace( "database", "", $fStringData );
	$fStringData = str_replace( "DATABASE", "", $fStringData );
	//$fStringData = str_replace( "select", "", $fStringData );
	//$fStringData = str_replace( "SELECT", "", $fStringData );
	$fStringData = str_replace( "delete", "", $fStringData );
	$fStringData = str_replace( "DELETE", "", $fStringData );
	$fStringData = str_replace( "update", "", $fStringData );
	$fStringData = str_replace( "UPDATE", "", $fStringData );
	//$fStringData = str_replace( "table", "", $fStringData );
	//$fStringData = str_replace( "TABLE", "", $fStringData );
	$fStringData = str_replace( "insert", "", $fStringData );
	$fStringData = str_replace( "INSERT", "", $fStringData );
	//$fStringData = str_replace( "drop", "", $fStringData );
	//$fStringData = str_replace( "DROP", "", $fStringData );
	$fStringData = str_replace( "create", "", $fStringData );
	$fStringData = str_replace( "CREATE", "", $fStringData );
	$fStringData = str_replace( "truncate", "", $fStringData );
	$fStringData = str_replace( "TRUNCATE", "", $fStringData );
	//$fStringData = str_replace( "alter", "", $fStringData );
	//$fStringData = str_replace( "ALTER", "", $fStringData );
	$fStringData = str_replace( "';", "", $fStringData );
	$fStringData = str_replace( "' ;", "", $fStringData );
	
	//$fStringData = str_replace( "php", "", $fStringData );
	//$fStringData = str_replace( "PHP", "", $fStringData );
	//$fStringData = str_replace( "cookies", "", $fStringData );
	//$fStringData = str_replace( "COOKIES", "", $fStringData );
	//$fStringData = str_replace( "HTTP", "", $fStringData );
	//$fStringData = str_replace( "HTTPS", "", $fStringData );
	$fStringData = rawurldecode($fStringData);
	
	return $fStringData;
}

/*
 * Funcion para remover el valor de las comillas
 * @fn fixMagicQuotes2
 * @author Wilder Salazar
 * @param $fStringData string dato a escapar
 * @brief Retorna una cadena con las comillas escapadas
 * @return string valor de la cadena escapada o FALSE en caso de error
 */
function fixMagicQuotes2( $fStringData = NULL )
{
	if( NULL === $fStringData ){
		return FALSE;
	}
	return addslashes( $fStringData );
}

function downloadFile( $fullPath )
{
  // Must be fresh start
  if( headers_sent() )
    die('Headers Sent');

  // Required for some browsers
  if(ini_get('zlib.output_compression'))
    ini_set('zlib.output_compression', 'Off');

  // File Exists?
  if( file_exists($fullPath) )
  {
    // Parse Info / Get Extension
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);

    // Determine Content Type
    switch ($ext)
    {
      case "pdf": $ctype="application/pdf"; break;
      case "exe": $ctype="application/octet-stream"; break;
      case "zip": $ctype="application/zip"; break;
      case "doc": $ctype="application/msword"; break;
      case "xls": $ctype="application/vnd.ms-excel"; break;
      case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
      case "gif": $ctype="image/gif"; break;
      case "png": $ctype="image/png"; break;
      case "jpeg":
      case "jpg": $ctype="image/jpg"; break;
      default: $ctype="application/force-download";
    }

    header("Pragma: public"); // required
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false); // required for certain browsers
    header("Content-Type: $ctype");
    header("Content-Disposition: attachment; filename=\"".basename($fullPath)."\";" );
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: ".$fsize);
    ob_clean();
    flush();
    readfile( $fullPath );

  }
  else
    die('File Not Found');
}

function ObtenerNavegador($user_agent)
{
	$navegadores = array( ' Opera' => '(Opera)',
		 'Mozilla Firefox'=> '((Firebird)|(Firefox))',
		 'Galeon' => '(Galeon)',
		 'Mozilla'=>'(Gecko)',
		 'MyIE'=>'(MyIE)',
		 'Lynx' => '(Lynx)',
		 'Konqueror'=>'(Konqueror)',
		 'Internet Explorer 9' => '(MSIE 9\.[0-9]+)',
		 'Internet Explorer 8' => '(MSIE 8\.[0-9]+)',
		 'Internet Explorer 7' => '(MSIE 7\.[0-9]+)',
		 'Internet Explorer 6' => '(MSIE 6\.[0-9]+)',
		 'Internet Explorer 5' => '(MSIE 5\.[0-9]+)',
		 'Internet Explorer 4' => '(MSIE 4\.[0-9]+)',
	);
	
	foreach( $navegadores as $navegador=>$pattern ){
		if ( preg_match("/".$pattern."/i", $user_agent) ){
			return $navegador;
		}
	}
	return 'Desconocido';  
}

/*
 * Funcion para generar numeros aleatorios no repetidos
 * @fn GeneraRandomDistintc
 * @author Ruben dario Cifuentes Torres
 * @param $cantidad int cantidad de numeros a generar
 * @param $rangoIni int exprecion minima de cada resultad
 * @param $rangoFin int exprecion maxima de cada resultad
 * @brief Retorna numeros aleatorios no repetidos
 * @return array con numeros aleatorios no repetidos
 */
function GeneraRandomDistintc($cantidad=0, $rangoIni=0, $rangoFin=0)
{
	$array = array();
	while( count ( $array ) < $cantidad ){
		$random = rand( $rangoIni, $rangoFin);
		if ( ! in_array( $random, $array) ) {
			$array[] = $random;
		}
	}
	return $array;
}

/*
 * Funcion que obtine el ID del video de youtube segun la URL
 * @fn getIdByUrlYouTube
 * @author Ruben Dario Cifuentes T.
 * @param $fString string para validar
 * @brief Retorna string con id del video
 */
function getIdByUrlYouTube($url){
  $temp = explode( "v/" , $url);
  if ( isset($temp[1]) ){
    $url = "v=".str_replace("/", "&", $temp[1]);
  }
  preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
  if( count($matches)>0 ){
    $url = $matches[0];
  }
  return $url;
}

/*
 * Funcion que obtine el ID del video de vimeo segun la URL
 * @fn getIdByUrlVimeo
 * @author Ruben Dario Cifuentes T.
 * @param $fString string para validar
 * @brief Retorna string con id del video
 */
function getIdByUrlVimeo($url){
  $url = explode( "/", $url );
  $largo = count($url);
  $url = $url[($largo-1)];
  $url = explode( "#", $url );
  $largo = count($url);

  return $url[($largo-1)];
}

function noCache() {
	header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
}

?>