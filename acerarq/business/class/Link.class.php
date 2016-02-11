<?php

/*
 * @file               : Link.class.php
 * @brief              : Clase para manejar las URL
 * @version            : 3.0
 * @ultima_modificacion: 12-jul-2012
 * @author             : Ruben Dario Cifuentes
 */

class Link {

  public static function Build($link = '', $type = 'http') {
    if( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ) {
      $base = 'https://' . getenv('SERVER_NAME');
    }else{
      $base = ( ( $type == 'http' || USE_SSL == 'no') ? 'http://' : 'https://') . getenv('SERVER_NAME');
    }

    // Puerto definido por default
    if (defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != '80' && strpos($base, 'https') === false) {
      // Agrago al path el puerto
      $base .= ':' . HTTP_SERVER_PORT;
    }
    $link = $base . VIRTUAL_LOCATION . $link;
    // Devuelvo el link con Escape html
    //return htmlspecialchars($link, ENT_QUOTES);
    return $link;
  }

  // Valida URL
  public static function CheckRequest() {
    if (isset($_GET['seccion']) || isset($_GET['ajax']) || isset($_POST['ajax'])) {
      return TRUE;
    } else {
      header("Location:" . self::ToIndex());
    }
  }

  // Prepara el string para enviarlo a URL
  public static function CleanUrlText($string = "") {
    $string = self::ChangeAccentVowels($string);
    // Remueve todos los caracteres que no son a-z, 0-9, guion, underscore o espacio
    $not_acceptable_characters_regex = '#[^-a-zA-Z0-9_ ]#';
    $string = trim(preg_replace($not_acceptable_characters_regex, '', $string));
    // Cambio todos los guiones, underscores y espacios a guiones
    $string = preg_replace('#[_ ]+#', '-', $string);
    // Devuelvo el string modificado
    return strtolower($string);
  }

  // Convierte Tildes a vocales
  public static function ChangeAccentVowels($string = "") {
    $string = preg_replace("#[��]+#", 'a', $string);
    $string = preg_replace("#[��]+#", 'e', $string);
    $string = preg_replace("#[��]+#", 'i', $string);
    $string = preg_replace("#[��]+#", 'o', $string);
    $string = preg_replace("#[��]+#", 'u', $string);
    return $string;
  }

  public static function ToIndex() {
	$server = $_SERVER['HTTP_HOST'];
	if($server == "acerarq.com" || $server == "www.acerarq.com") $link = "/index.php?base&seccion=index";
	else $link = "/index.php?base&seccion=sirius";
    
    return self::Build($link);
  }

  public static function ToSectionBkp($data = NULL) {
    $link = "";
    if (isset($data["s"])) {
      $link .= "/s/" . self::CleanUrlText($data["s"]);
    }
    if (isset($data["ss"])) {
      $link .= "/ss/" . self::CleanUrlText($data["ss"]);
    }
    if (isset($data["f"])) {
      $link .= "/f/" . self::CleanUrlText($data["f"]);
    }
    if (isset($data["p"])) {
      $link .= "/p/" . self::CleanUrlText($data["p"]);
    }
    if (isset($data["t"])) {
      $link .= "/t/" . self::CleanUrlText($data["t"]);
    }
    if (isset($data["i"])) {
      $link .= "/i/" . self::CleanUrlText($data["i"]);
    }
    return self::Build($link);
  }
  
  public static function ToSection($data = NULL) {
    $link = "/index.php?base";
    if (isset($data["s"])) {
      $link .= "&seccion=" . self::CleanUrlText($data["s"]);
    }
    if (isset($data["ss"])) {
      $link .= "&subseccion=" . self::CleanUrlText($data["ss"]);
    }
    if (isset($data["i"])) {
      $link .= "&id=" . self::CleanUrlText($data["i"]);
    }
    if (isset($data["f"])) {
      $link .= "&filtro=" . self::CleanUrlText($data["f"]);
    }
    if (isset($data["p"])) {
      $link .= "&page=" . self::CleanUrlText($data["p"]);
    }
    if (isset($data["t"])) {
      $link .= "&titulo=" . self::CleanUrlText($data["t"]);
    }
    
    return self::Build($link);
  }

}

?>