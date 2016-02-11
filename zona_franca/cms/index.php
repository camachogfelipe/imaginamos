<?php
  session_start();
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);
  // Arrancar buffer de salida
  ob_start();

  // Archivo de configuracion
  include( 'include/define.php' );
  include( 'include/config.php' );
  include( 'business/function/plGeneral.fnc.php' );

  // Manejador de errores
  //ErrorHandler::SetHandler();
  // Carga el template de la aplicacion
  include_once( PRESENTATION_DIR.'application.php' );
  // Validamos la URL y redireccionamos si no es valida
  Link::CheckRequest();

  // Validamos si existe metodo AJAX
  if( isset($_GET['ajax']) || isset($_POST['ajax']) )
  {
    $archivo = StripHtml(GetData("myClass", "Ajax"));
    $classAjax = new $archivo();
    eval('$classAjax->Funct' . Link::CleanUrlText(StripHtml(GetData("myFunct", "Default"))) . '();');
  }
  // Validamos que el usuario desee descargar un reporte de uno de los listados dinamicos
  elseif( isset($_GET['descargar_reporte']) || isset($_POST['descargar_reporte']) )
  {
    $nombre = StripHtml($_POST['nombre']);
    $path = "files/";
    // Inicializamos la clase para genrar el xls
    $cExpXls = new ExpXls($nombre, NULL, NULL, $path);
    // Inicializamos las cabeceras
    $cExpXls->setHeaders( explode(",", $_POST['headers']) );
    $query = str_replace("\\", "", $_POST['query']);
    $query = explode("LIMIT", $query);
    $query = $query[0];
    echo $query;
    $cExpXls->setQuery( trim($query) );
    // Generamos el excel
    $cExpXls->generateXls();
    // FOrzamos la descarga
    downloadFile( $path.$nombre );
    unlink($path.$nombre);
    exit();
  }
  elseif( isset($_GET['pdf']) || isset($_POST['pdf']) )
  {
    if (isset($_GET["seccion"]))
    {
      $mConten = Link::CleanUrlText(GetData("seccion", ""));
      // Si existe subseccion, concatenamos para generar el nombre del archivo
      if (isset($_GET["subseccion"]))
      {
        $mConten .= "_" . Link::CleanUrlText(GetData("subseccion", ""));
      }
      // Si existe accion, concatenamos para generar el nombre del archivo
      if (isset($_GET["accion"]))
      {
        $mConten .= "_" . Link::CleanUrlText(GetData("accion", ""));
      }
      $mConten = str_replace("-", "_", $mConten) . ".tpl";
    }

    $application = new Application();
    $application->display( $mConten );
  }
  else
  {
    // Carga el samrty template y Muestro la pagina
    $application = new Application();
    $application->display('store_front.tpl');
  }

  // Salida del contenido por el buffer
  flush();
  ob_flush();
  ob_end_clean();
?>