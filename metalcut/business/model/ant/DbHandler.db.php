<?php

/*
 * @file  DbHandler.class.php
 * @brief Manejador de base de datos
 * @version 2.3
 * @ultima_modificacion 10-11-2011
 * @author Ruben Dario Cifuentes
 */

/*
 * @class DbHandler
 * @brief Clase de realizar todas la comunicacion con la base de datos
 * Esta clase no depende de ninguna otra clase
 */

class DbHandler {

  private static $_mHandler;

  // Creacion y retorno de un objeto de la clase
  private static function GetHandler() {
    // Creacion de una conexion si no existe
    if (!isset(self::$_mHandler)) {
      // Codigo para ver si existe algun inconveniente en la conexion
      try {
        // Creo la instancia del objeto
        self::$_mHandler = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::ATTR_PERSISTENT => DB_PERSISTENCY));
        // Configuracion del PDO para las excepciones
        self::$_mHandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$_mHandler->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, 1);
        self::$_mHandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
      } catch (PDOException $e) {
        // Cierra el manejador de la base de datos y muestra el error
        self::Close();
        trigger_error($e->getMessage(), E_USER_ERROR);
      }
    }
    // Retorna el manejador instanciado y creado satisfactoriamente
    return self::$_mHandler;
  }

  // Cierre y limpieza del objeto PDO class
  public static function Close() {
    self::$_mHandler = null;
  }

  // METODO PDOStatement::execute()
  public static function Execute($sqlQuery, $params = null) {
    // Se intenta ejecutar una sentencia SQL o un procedimiento almacenado
    try {
      // Obtiene una instancia de la conexion a la base de datos
      $database_handler = self::GetHandler();

      // Prepara el query para correrlo
      $statement_handler = $database_handler->prepare($sqlQuery);

      // Ejecuta el query
      $statement_handler->execute($params);
    }
    // Muestra el error si se produce en la sentencia SQL
    catch (PDOException $e) {
      // Cierra el manejador de la base de datos y muestra el error
      self::Close();
      trigger_error($e->getMessage(), E_USER_ERROR);
      return false;
    }
    return true;
  }

  // METODO PDOStatement::fetchAll()
  public static function GetAll($sqlQuery, $params = null, $fetchStyle = PDO::FETCH_ASSOC) {
    // Se inicializa la variable
    $result = FALSE;
    // Se intenta ejecutar una sentencia SQL o un procedimiento almacenado
    try {
      // Obtiene una instancia de la conexion a la base de datos
      $database_handler = self::GetHandler();

      // Prepara el query para correrlo
      $statement_handler = $database_handler->prepare($sqlQuery);

      // Ejecuta el query
      $statement_handler->execute($params);

      // Resultado del arreglo
      $result = $statement_handler->fetchAll($fetchStyle);
    }
    // Muestra el error si se produce en la sentencia SQL
    catch (PDOException $e) {
      // Cierra el manejador de la base de datos y muestra el error
      self::Close();
      trigger_error($e->getMessage(), E_USER_ERROR);
    }
    // Retorna el resusltado de la consulta
    return $result;
  }

  // METODO PDOStatement::fetch()
  public static function GetRow($sqlQuery, $params = null, $fetchStyle = PDO::FETCH_ASSOC) {
    // Se inicializa la variable
    $result = null;
    // Se intenta ejecutar una sentencia SQL o un procedimiento almacenado
    try {
      // Obtiene una instancia de la conexion a la base de datos
      $database_handler = self::GetHandler();

      // Prepara el query para correrlo
      $statement_handler = $database_handler->prepare($sqlQuery);

      // Ejecuta el query
      $statement_handler->execute($params);

      // Resultado del arreglo
      $result = $statement_handler->fetch($fetchStyle);
    }
    // Muestra el error si se produce en la sentencia SQL
    catch (PDOException $e) {
      // Cierra el manejador de la base de datos y muestra el error
      self::Close();
      trigger_error($e->getMessage(), E_USER_ERROR);
    }
    // Retorna el resusltado de la consulta
    return $result;
  }

  // Retorna el valor de la primera columna de una fila
  public static function GetOne($sqlQuery, $params = null) {
    // Se inicializa la variable
    $result = null;
    // Se intenta ejecutar una sentencia SQL o un procedimiento almacenado
    try {
      // Obtiene una instancia de la conexion a la base de datos
      $database_handler = self::GetHandler();

      // Prepara el query para correrlo
      $statement_handler = $database_handler->prepare($sqlQuery);

      // Ejecuta el query
      $statement_handler->execute($params);

      // Resultado del arreglo
      $result = $statement_handler->fetch(PDO::FETCH_NUM);

      //saca el primer valor o del indice y lo envio en el resultado
      $result = $result[0];
    }
    //Muestra el error si se produce en la sentencia SQL
    catch (PDOException $e) {
      //Cierra el manejador de la base de datos y muestra el error
      self::Close();
      trigger_error($e->getMessage(), E_USER_ERROR);
    }
    //Retorna el resultado de la consulta
    return $result;
  }

  // METODO PDOStatement::columnCount()
  public static function GetColumnCount($sqlQuery, $params = null) {
    //Se inicializa la variable
    $result = null;
    //Se intenta ejecutar una sentencia SQL o un procedimiento almacenado
    try {
      // Obtiene una instancia de la conexion a la base de datos
      $database_handler = self::GetHandler();

      // Prepara el query para correrlo
      $statement_handler = $database_handler->prepare($sqlQuery);

      //Ejecuta el query
      $statement_handler->execute($params);

      // Resultado del arreglo
      $result = $statement_handler->columnCount();
    }
    //Muestra el error si se produce en la sentencia SQL
    catch (PDOException $e) {
      //Cierra el manejador de la base de datos y muestra el error
      self::Close();
      trigger_error($e->getMessage(), E_USER_ERROR);
    }
    // Retorna el resusltado de la consulta
    return $result;
  }
  
  // METODO para obtener el ultimo Id insertado
  public static function GetLastInsertId() {
   return self::$_mHandler->lastInsertId();
 }

}

?>
