<?php

/*
 * @file               : DbDAO.db.php
 * @brief              : Clase con funciones basicas del DAO
 * @version            : 1.0
 * @ultima_modificacion: 04-jun-2012
 * @author             : Ruben Dario Cifuentes Torres
 *
 * @class: DbDAO
 * @brief: Clase con funciones basicas del DAO
 */

class DbDAO {
  /*
   * Metodo Publico retorna el total de atributos de la clase
   * @fn getVars
   * @brief Retorna el total de atributos de la clase
   * @return Array/Bool arreglo con la informacion de los atributos de la clase
   */

  function getVars() {
    return get_object_vars($this);
  }

  /*
   * Metodo Publico retorna el registro apartir de la clave primaria
   * @fn getByPk
   * @brief Retorna el registro apartir de la PK
   * @param $mData integer valor
   * @return Array/Bool arreglo con la informacion del registro si se ejecuto correctamente, FALSE en caso de Error
   */

  public function getByPk($mData = NULL, $mDataArray = NULL) {
    if ($mData !== NULL && $mData != "") {
      $this->setid((int) $mData);
    }

    $tabla = str_replace("Db", "", get_class($this));

    $mQuery = "SELECT a.* " .
            "FROM  " . $tabla . " AS a " .
            "WHERE a.id = '" . $this->id . "' ";

    if (!is_null($mDataArray)) {
      // Validamos nuevos campos y JOIN a otras tablas
      if (isset($mDataArray["campos"]) && isset($mDataArray["join"])) {
        $mQuery = "SELECT a.* " . $mDataArray["campos"] . " FROM " . $tabla . " AS a " . $mDataArray["join"] . " WHERE a.id = '" . $this->id . "' ";
      }
    }

    //echo $mQuery;
    $mReturn = DbHandler::GetRow($mQuery);

    if ($mReturn) {
      // Llenamos el objeto heredado con los datos de DB
      foreach ($this->getVars() as $key => $value) {
        $setTemp = 'set' . $key;
        $this->$setTemp($mReturn[$key]);
      }

      return $mReturn;
    } else {
      return FALSE;
    }
  }
  /*
   * Metodo Publico para retornar matriz de registros encontrados por filtro
   * @fn getList
   * @brief Retorna el listado de registros que coniden con los filtros
   * @param $mData array filtros del listado
   * @return Array/Bool arreglo listado de registros que coniden con los filtros
   */

  public function getList($mData = NULL) {
    $tabla = str_replace("Db", "", get_class($this));
    $mQuery = "SELECT a.* FROM " . $tabla . " AS a WHERE 1 ";

    if (!is_null($mData)) {
      // Validamos nuevos campos y JOIN a otras tablas
      if (isset($mData["campos"]) && isset($mData["join"])) {
        $mQuery = "SELECT a.* " . $mData["campos"] . " FROM " . $tabla . " AS a " . $mData["join"] . " WHERE 1 ";
      }

      // Construimos el query con los datos del filtro
      foreach ($this->getVars() as $key => $value) {
        if (isset($mData[$key])) {
          $mQuery .= "AND a." . $key . " = '" . StripHtml($mData[$key]) . "' ";
        }
      }

      if (isset($mData["where"])) {
        $mQuery .= $mData["where"];
      }
    }
    //echo $mQuery."<br/>";
    return DbHandler::GetAll($mQuery);
  }
  public function getList2($mData = NULL) {
    $tabla = str_replace("Db", "", get_class($this));
    $mQuery = "SELECT * FROM " . $tabla . " AS a WHERE ";

    if (!is_null($mData)) {
      // Validamos nuevos campos y JOIN a otras tablas
      if (isset($mData["campos"]) && isset($mData["join"])) {
        $mQuery = "SELECT * " . $mData["campos"] . " FROM " . $tabla . " AS a " . $mData["join"] . " WHERE 1 ";
      }

      // Construimos el query con los datos del filtro
      foreach ($this->getVars() as $key => $value) {
        if (isset($mData[$key])) {
          $mQuery .= "AND a." . $key . " = '" . StripHtml($mData[$key]) . "' ";
        }
      }

      if (isset($mData["where"])) {
        $mQuery .= $mData["where"];
      }
    }
    
    return DbHandler::GetAll($mQuery);    
  }

  /*
   * Metodo Publico que retorna el ID del ultimo registro insertado
   * @fn getLastId
   * @brief Retorna el ID del ultimo registro insertado
   * @return TRUE si se ejecuto correctamente, FALSE en caso de Error
   */

  function getMaxId() {
    $tabla = str_replace("Db", "", get_class($this));
    return DbHandler::GetOne("SELECT MAX(id) FROM " . $tabla);
  }

  /*
   * Metodo Publico para insertar o actualizar un registro en la base de datos
   * @fn save
   * @brief Inserta o actualiza un registro
   * @return TRUE si se ejecuto correctamente, FALSE en caso de Error
   */

  public function save() {
    $tabla = str_replace("Db", "", get_class($this));

    // Validamos si es registro nuevo, o actualizamos los valores en DB
    if ($this->id === NULL || $this->id == "0") {

      $variables = " ";
      $valores = " ";

      // Construimos el query con los datos a insertar
      foreach ($this->getVars() as $key => $value) {
        $variables .= " `" . $key . "`,";
        $valores .= " '" . $this->$key . "',";
      }
      $variables = substr($variables, 0, -1);
      $valores = substr($valores, 0, -1);

      $mQuery = "INSERT INTO " . $tabla . " ( " . $variables . " ) VALUES( " . $valores . " ); ";
    } else {

      $valores = " ";

      // Construimos el query con los datos a actualizar
      foreach ($this->getVars() as $key => $value) {
        if (!is_null($this->$key) && $key != "id") {
          $valores .= "`" . $key . "`='" . $this->$key . "',";
        }
      }
      $valores = substr($valores, 0, -1);

      $mQuery = "UPDATE " . $tabla . " SET " . $valores . " WHERE id = '" . (int) $this->id . "'; ";
    }

    //echo $mQuery;
    return DbHandler::Execute($mQuery);
  }

  /*
   * Metodo Publico para eliminar logicamente un registro en la base de datos
   * @fn deleteLogic
   * @brief Elimina un registro logicamente
   * @return Bool Si se ejecuto correctamente, FALSE en caso de Error
   */

  public function deleteLogic() {
    $tabla = str_replace("Db", "", get_class($this));
    $mQuery = "UPDATE " . $tabla . " SET id_status='3' WHERE id='" . (int) $this->id . "'; ";
    return DbHandler::Execute($mQuery);
  }

  /*
   * Metodo Publico para eliminar un registro en la base de datos
   * @fn delete
   * @brief Elimina un registro
   * @return Bool Si se ejecuto correctamente, FALSE en caso de Error
   */

  public function delete($mData = NULL) {
    $tabla = str_replace("Db", "", get_class($this));
    $mQuery = "DELETE FROM " . $tabla . " ";
    if ($mData == NULL) {
      $mQuery .= "WHERE id='" . (int) $this->id . "'";
    } else {
      $mQuery .= $mData;
    }
    $mQuery .= ";";
    return DbHandler::Execute($mQuery);
  }

  /*
   * Metodo Publico para eliminar un registro en la base de datos
   * @fn delete
   * @brief Elimina un registro
   * @return Bool Si se ejecuto correctamente, FALSE en caso de Error
   */

  public function deleteById($id = 0) {
    $tabla = str_replace("Db", "", get_class($this));
    $mQuery = "DELETE FROM " . $tabla . " WHERE id='" . (int) $id . "'; ";
    return DbHandler::Execute($mQuery);
  }
  
  public function getListOne($mData = NULL) {
    $tabla = str_replace("Db", "", get_class($this));
    $mQuery = "SELECT * FROM " . $tabla . " AS a WHERE "; 
      if (isset($mData["where"])) {
        $mQuery .= $mData["where"];
      }
    return DbHandler::GetRow($mQuery);    
  }

}


?>
