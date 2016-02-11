<?php
/*
 * @file               : plGeneral.php
 * @brief              : Archivo de funciones generales para sitio
 * @version            : 3.4
 * @ultima_modificacion: 05-jul-2012
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
		if( array_key_exists( $fVarName, $_POST ) )
    {
			$return = str_replace("%20", " ", $_POST[$fVarName]);
		}
    elseif( array_key_exists( $fVarName, $_GET ) )
    {
			$return = str_replace("%20", " ", $_GET[$fVarName]);
		}
    else
    {
			$return = $fDefault;
		}
	}
  else
  {
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
	if( is_null( $fStringData ) && "" != $fStringData )
  {
		return FALSE;
	}

	$fStringData = trim( $fStringData );

	//quita tags tipo sql y html
	//$fStringData = strip_tags( $fStringData );
	$fStringData = str_replace( "from", "", $fStringData );
	$fStringData = str_replace( "FROM", "", $fStringData );
	$fStringData = str_replace( "database", "", $fStringData );
	$fStringData = str_replace( "DATABASE", "", $fStringData );
	$fStringData = str_replace( "select", "", $fStringData );
	$fStringData = str_replace( "SELECT", "", $fStringData );
	$fStringData = str_replace( "delete", "", $fStringData );
	$fStringData = str_replace( "DELETE", "", $fStringData );
	$fStringData = str_replace( "update", "", $fStringData );
	$fStringData = str_replace( "UPDATE", "", $fStringData );
	$fStringData = str_replace( "table", "", $fStringData );
	$fStringData = str_replace( "TABLE", "", $fStringData );
	$fStringData = str_replace( "insert", "", $fStringData );
	$fStringData = str_replace( "INSERT", "", $fStringData );
	$fStringData = str_replace( "drop", "", $fStringData );
	$fStringData = str_replace( "DROP", "", $fStringData );
	$fStringData = str_replace( "create", "", $fStringData );
	$fStringData = str_replace( "CREATE", "", $fStringData );
	$fStringData = str_replace( "truncate", "", $fStringData );
	$fStringData = str_replace( "TRUNCATE", "", $fStringData );
	$fStringData = str_replace( "alter", "", $fStringData );
	$fStringData = str_replace( "ALTER", "", $fStringData );
	$fStringData = str_replace( "';", "", $fStringData );
	$fStringData = str_replace( "' ;", "", $fStringData );

	$fStringData = str_replace( "php", "", $fStringData );
	$fStringData = str_replace( "PHP", "", $fStringData );
	$fStringData = str_replace( "cookies", "", $fStringData );
	$fStringData = str_replace( "COOKIES", "", $fStringData );
	$fStringData = str_replace( "HTTP", "", $fStringData );
	$fStringData = str_replace( "HTTPS", "", $fStringData );
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
	if( NULL === $fStringData )
  {
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
	while( count ( $array ) < $cantidad )
  {
		$random = rand( $rangoIni, $rangoFin);
		if ( ! in_array( $random, $array) )
    {
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
  function getIdByUrlYouTube($url)
  {
    // Nuevo formato URL reducida
    $temp = explode("http://youtu.be/", $url);
    if(count($temp)>1)
    {
      $url = $temp[1];
    }

    $url = explode("v=", $url);
    if (count($url) != 2)
    {
      $url = explode("v/", $url[0]);
    }

    if (!isset($url[1]))
    {
      $temp = explode("/", $url[0]);
      if(isset($temp[8]))
      {
        $url = $temp[8];
      }
      else
      {
        $url = $url[0];
      }
    }
    else
    {
      $url = $url[1];
    }

    $url = explode("&", $url);
    $url = $url[0];

    return $url;
  }

/*
 * Funcion que obtine el ID del video de vimeo segun la URL
 * @fn getIdByUrlVimeo
 * @author Ruben Dario Cifuentes T.
 * @param $fString string para validar
 * @brief Retorna string con id del video
 */
function getIdByUrlVimeo($url)
{
  $url = explode( "/", $url );
  $largo = count($url);
  $url = $url[($largo-1)];
  $url = explode( "#", $url );
  $largo = count($url);

  return $url[($largo-1)];
}

function noCache()
{
	header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
}

function havePermision( $fData = NULL )
{
  if( !isset( $fData["clase"] ) )
    return FALSE;

  if( isset( $_SESSION["user"] ) )
  {
    $mQuery = "SELECT 1 ".
                "FROM cms_permisos AS a INNER JOIN cms_modulos AS b ON a.id_modulo = b.id ".
               "WHERE a.id_rol = '".StripHtml( $_SESSION["user"]["id_rol"] )."' ".
                 "AND b.txt_clase = '".StripHtml( $fData["clase"] )."' ";

    $mResoult = DbHandler::GetRow( $mQuery );

    if( NULL !== $mResoult && "" != $mResoult )
    {
      if( count( $mResoult ) > 0 )
        return TRUE;
      else
        return FALSE;
    }
    else
      return FALSE;
  }
  return FALSE;
}

function numtoletras($xcifra)
{
  $xarray = array( 0 => "Cero", 1 => "UN", "DOS", "TRES", "CUATRO", "CINCO",
                   "SEIS", "SIETE", "OCHO", "NUEVE", "DIEZ", "ONCE", "DOCE",
                   "TRECE", "CATORCE", "QUINCE", "DIECISEIS", "DIECISIETE",
                   "DIECIOCHO", "DIECINUEVE", "VEINTI", 30 => "TREINTA",
                   40 => "CUARENTA", 50 => "CINCUENTA", 60 => "SESENTA",
                   70 => "SETENTA", 80 => "OCHENTA", 90 => "NOVENTA",
                   100 => "CIENTO", 200 => "DOSCIENTOS", 300 => "TRESCIENTOS",
                   400 => "CUATROCIENTOS", 500 => "QUINIENTOS", 600 => "SEISCIENTOS",
                   700 => "SETECIENTOS", 800 => "OCHOCIENTOS", 900 => "NOVECIENTOS" );
  //
  $xcifra = trim($xcifra);
  $xlength = strlen($xcifra);
  $xpos_punto = strpos($xcifra, ".");
  $xaux_int = $xcifra;
  $xdecimales = "00";

  if ($xpos_punto > 0)
  {
    $xaux_int = substr($xcifra, 0, $xpos_punto); // obtengo el entero de la cifra a covertir
    $xdecimales = substr($xcifra."00", $xpos_punto + 1, 2); // obtengo los valores decimales
  }

  $XAUX = str_pad($xaux_int, 18, " ", STR_PAD_LEFT); // ajusto la longitud de la cifra, para que sea divisible por centenas de miles (grupos de 6)
  $xcadena = "";
  for($xz = 0; $xz < 3; $xz++)
  {
    $xaux = substr($XAUX, $xz * 6, 6);
    $xi = 0; $xlimite = 6; // inicializo el contador de centenas xi y establezco el límite a 6 dígitos en la parte entera
    $xexit = true; // bandera para controlar el ciclo del While

    while ($xexit)
    {
      if ($xi == $xlimite) // si ya llegó al límite m&aacute;ximo de enteros
      {
        break; // termina el ciclo
      }

      $x3digitos = ($xlimite - $xi) * -1; // comienzo con los tres primeros digitos de la cifra, comenzando por la izquierda
      $xaux = substr($xaux, $x3digitos, abs($x3digitos)); // obtengo la centena (los tres dígitos)
      for ($xy = 1; $xy < 4; $xy++) // ciclo para revisar centenas, decenas y unidades, en ese orden
      {
        switch ($xy)
        {
          case 1: // checa las centenas
            if (substr($xaux, 0, 3) < 100) // si el grupo de tres dígitos es menor a una centena ( < 99) no hace nada y pasa a revisar las decenas
            {
            }
            else
            {
              $xseek = $xarray[substr($xaux, 0, 3)]; // busco si la centena es número redondo (100, 200, 300, 400, etc..)
              if ($xseek)
              {
                $xsub = subfijo($xaux); // devuelve el subfijo correspondiente (Millón, Millones, Mil o nada)

                if (substr($xaux, 0, 3) == 100)
                  $xcadena = " ".$xcadena." CIEN ".$xsub;
                else
                  $xcadena = " ".$xcadena." ".$xseek." ".$xsub;

                $xy = 3; // la centena fue redonda, entonces termino el ciclo del for y ya no reviso decenas ni unidades
              }
              else // entra aquí si la centena no fue numero redondo (101, 253, 120, 980, etc.)
              {
                $xseek = $xarray[substr($xaux, 0, 1) * 100]; // toma el primer caracter de la centena y lo multiplica por cien y lo busca en el arreglo (para que busque 100,200,300, etc)
                $xcadena = " ".$xcadena." ".$xseek;
              } // ENDIF ($xseek)
            } // ENDIF (substr($xaux, 0, 3) < 100)
            break;

          case 2: // checa las decenas (con la misma lógica que las centenas)
            if (substr($xaux, 1, 2) < 10)
            {
            }
            else
            {
              $xseek = $xarray[substr($xaux, 1, 2)];
              if ($xseek)
              {
                $xsub = subfijo($xaux);
                if (substr($xaux, 1, 2) == 20)
                  $xcadena = " ".$xcadena." VEINTE ".$xsub;
                else
                  $xcadena = " ".$xcadena." ".$xseek." ".$xsub;

                $xy = 3;
              }
              else
              {
                $xseek = $xarray[substr($xaux, 1, 1) * 10];
                if (substr($xaux, 1, 1) * 10 == 20)
                  $xcadena = " ".$xcadena." ".$xseek;
                else
                  $xcadena = " ".$xcadena." ".$xseek." Y ";
              } // ENDIF ($xseek)
            } // ENDIF (substr($xaux, 1, 2) < 10)
            break;

          case 3: // checa las unidades
            if (substr($xaux, 2, 1) < 1) // si la unidad es cero, ya no hace nada
            {
            }
            else
            {
              $xseek = $xarray[substr($xaux, 2, 1)]; // obtengo directamente el valor de la unidad (del uno al nueve)
              $xsub = subfijo($xaux);
              $xcadena = " ".$xcadena." ".$xseek." ".$xsub;
            } // ENDIF (substr($xaux, 2, 1) < 1)
            break;
        } // END SWITCH
      } // END FOR
      $xi = $xi + 3;
    } // ENDDO

    if (substr($xcadena, -6, 6) == "MILLON") // si la cadena obtenida termina en MILLON, entonces le agrega al fina la palabra DE
      $xcadena.= " DE";

    if (substr($xcadena, -8, 8) == "MILLONES") // si la cadena obtenida en MILLONES, entoncea le agrega al fina la palabra DE
      $xcadena.= " DE";

    // ----------- esta línea la puedes cambiar de acuerdo a tus necesidades o a tu país -------
    if (trim($xaux) != "")
    {
      switch ($xz)
      {
        case 0:
          if (trim(substr($XAUX, $xz * 6, 6)) == "1")
            $xcadena.= "UN BILLON ";
          else
            $xcadena.= " BILLONES ";
          break;

        case 1:
          if (trim(substr($XAUX, $xz * 6, 6)) == "1")
            $xcadena.= "UN MILLON ";
          else
            $xcadena.= " MILLONES ";
          break;

        case 2:
          if ($xcifra < 1 )
          {
            $xcadena = "CERO";
          }

          if ($xcifra >= 1 && $xcifra < 2)
          {
            $xcadena = "UN";
          }

          if ($xcifra >= 2)
          {
            $xcadena.= " "; //
          }
          break;
      } // endswitch ($xz)
    } // ENDIF (trim($xaux) != "")
    // ------------------      en este caso, para México se usa esta leyenda     ----------------

    $xcadena = str_replace("VEINTI ", "VEINTI", $xcadena); // quito el espacio para el VEINTI, para que quede: VEINTICUATRO, VEINTIUN, VEINTIDOS, etc
    $xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
    $xcadena = str_replace("UN UN", "UN", $xcadena); // quito la duplicidad
    $xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
    $xcadena = str_replace("BILLON MILLONES", "BILLON", $xcadena); // corrigo la leyenda
    $xcadena = str_replace("BILLONES MILLONES", "BILLONES", $xcadena); // corrigo la leyenda
  } // ENDFOR ($xz)
  return trim($xcadena);
} // END FUNCTION


function subfijo($xx)
{
//// esta función regresa un subfijo para la cifra
  $xx = trim($xx);
  $xstrlen = strlen($xx);

  if ($xstrlen == 1 || $xstrlen == 2 || $xstrlen == 3)
    $xsub = "";
//
  if ($xstrlen == 4 || $xstrlen == 5 || $xstrlen == 6)
    $xsub = "MIL";
//
  return $xsub;
} // END FUNCTION

function dateDiff( $d1, $d2 )
{
  $d1 = ( is_string( $d1 ) ? strtotime( $d1 ) : $d1 );
  $d2 = ( is_string( $d2 ) ? strtotime( $d2 ) : $d2 );

  $diff_secs = abs( $d1 - $d2 );
  $base_year = min( date( "Y", $d1 ), date( "Y", $d2 ) );

  $diff = mktime( 0, 0, $diff_secs, 1, 1, $base_year );
  return array( "years" => date( "Y", $diff ) - $base_year,
                "months_total" => ( date( "Y", $diff ) - $base_year ) * 12 + date( "n", $diff ) - 1,
                "months" => date( "n", $diff ) - 1,
                "days_total" => floor( $diff_secs / ( 3600 * 24 ) ),
                "days" => date( "j", $diff ) - 1,
                "hours_total" => floor( $diff_secs / 3600 ),
                "hours" => date( "G", $diff ),
                "minutes_total" => floor( $diff_secs / 60 ),
                "minutes" => ( int ) date( "i", $diff ),
                "seconds_total" => $diff_secs,
                "seconds" => ( int ) date( "s", $diff ) );
}
?>
