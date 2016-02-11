<?php
session_start();

// Arrancar buffer de salida
ob_start();

// Archivo de configuracion
include( 'include/define.php' );
include( 'include/config.php' );
include( 'business/function/plGeneral.fnc.php' );

// Manejador de errores
ErrorHandler::SetHandler();

// Validamos la URL y redireccionamos si no es valida
Link::CheckRequest();

// AJAX requests
if (isset($_GET['ajax']) || isset($_POST['ajax'])) {
  $archivo = StripHtml(GetData("myClass", "Ajax"));
  $classAjax = new $archivo();
  eval('$classAjax->Funct' . Link::CleanUrlText(StripHtml(GetData("myFunct", "Default"))) . '();');
} else {
  // Incluimos la seccion espesificada
  $mConten = "index.php";
  if (isset($_GET["seccion"])) {
    $mConten = Link::CleanUrlText(GetData("seccion", ""));
    // Si existe subseccion, concatenamos para generar el nombre del archivo
    if (isset($_GET["subseccion"])) {
      $mConten .= "_" . Link::CleanUrlText(GetData("subseccion", ""));
    }
    // Si existe accion, concatenamos para generar el nombre del archivo
    if (isset($_GET["accion"])) {
      $mConten .= "_" . Link::CleanUrlText(GetData("accion", ""));
    }
    //$mConten = str_replace("-", "_", $mConten) . ".php";
    $mConten = $mConten . ".php";
  }
  
  include 'secciones/'.$mConten;
}

// Salida del contenido por el buffer -- POR SI NECESITAMOS CAMBIAR LAS CABECERAS PARA redireccionar y no tener contenido duplicado, mejora el SEO
flush();
ob_flush();
ob_end_clean();
?>