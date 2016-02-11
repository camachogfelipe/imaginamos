<?php

/*
 * @file               : Ajax.php
 * @brief              : Clase interaccion consultas Ajax
 * @version            : 1.0
 * @ultima_modificacion: 13-jun-2012
 * @author             : Ruben Dario Cifuentes T
 *
 * @class: Ajax
 * @brief: Clase interaccion consultas Ajax
 */

class AjaxInsert {

  // Funcion por defecto para creacion dinamica segun el objeto recibido
  public function FunctDefault() {
    
    $clase = "Db" . GetData("clase", "base");
    $obj = new $clase();

    // Llenamos los valores del objeto
    foreach ($obj->getVars() as $key => $value) {
      // Recorremos los datos obtenidos por post
      foreach ($_POST as $key2 => $value2) {
        if ($key == $key2) {
          $setTemp = 'set' . $key;
          $obj->$setTemp(GetData($key2, ""));
        }
      }
    }

    // Salvamos el objeto señalado
    if ($obj->save()) {
      echo json_encode(array("title" => "Exito", "message" => "Se guardo la informacion con exito", "event" => "window.location.href='" . urldecode(GetData("redirect", "")) . "';"));
    } else {
      echo json_encode(array("title" => "Error", "message" => "Se produjo un error, por favor intente mas tarde"));
    }
  }

  // Funcion por defecto para creacion dinamica segun el objeto recibido dentro de ajax
  public function FunctInsert() {
    
    $clase = "Db" . GetData("clase", "base");
    $obj = new $clase();

    // Llenamos los valores del objeto
    foreach ($obj->getVars() as $key => $value) {
      // Recorremos los datos obtenidos por post
      foreach ($_POST as $key2 => $value2) {
        if ($key == $key2) {
          $setTemp = 'set' . $key;
          $obj->$setTemp(GetData($key2, ""));
        }
      }
    }

    // Salvamos el objeto señalado
    if ($obj->save()) {
      if (is_null($obj->id)) {
        return $obj->getMaxId();
      } else {
        return $obj->id;
      }
    } else {
      return FALSE;
    }
  }
  
  // Funcion para insertar una semana en BD
  public function FunctSemanasInsert() {
    $_POST["url"] = getIdByUrlYouTube($_POST["url"]);
    $id = self::FunctInsert();
    echo json_encode(array("title" => "Exito", "message" => "Se guardo la informacion con exito", "event" => "window.location.href='" . Link::Build("/index.php?seccion=semanas&accion=listar&me=1&op=2") . "';"));
  }

}

?>