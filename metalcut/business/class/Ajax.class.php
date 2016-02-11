<?php

/*
 * @file               : Ajax.php
 * @brief              : Clase interaccion consultas Ajax
 * @version            : 1.0
 * @ultima_modificacion: 02-feb-2012
 * @author             : Ruben Dario Cifuentes T
 */

/*
 * @class: Ajax
 * @brief: Clase interaccion consultas Ajax
 */

class Ajax {
  /*
   * Metodo Publico para Inicializar las variables necesarias de la clase
   * @fn __construct
   * @brief Inicializa variables necesarias de la clase
   */

  public function __construct($mSecurity = NULL) { }
  // Funcion po defecto
  public function FunctDefault() {
    echo json_encode(array("title" => "Error", "message" => "Funcion por defecto en el ajax"));
  }
  // Funcion para registrar mi voto en una foto
  
  public function FunctCiudades() {
    // Aca puede ir todo el PHP, consultas a DB y ejecucion de operaciones del lado del servidor  
    $valor = GetData("valor");

    /*$consulta = array("CountryCode" => $valor);
    $cCity = new Dbcity();   
    $city = $cCity->getList($consulta);*/
    $city = DbHandler::GetAll("SELECT id, Name FROM city WHERE CountryCode='".$valor."' ORDER BY Name");
    
    for ($i = 0, $tot = count($city); $i < $tot; $i++) {
        
      $city[$i]["Name"] = utf8_encode($city[$i]["Name"]);
      
    }
    
    $datos = json_encode(array("count" => count($city), "ciudad" => $city));
    
    echo json_encode(array("event" => "CiudadesJS(" . $datos . ")"));
  }
  
  public function FunctaddToCart(){
      $id =(int) GetData("id");
      $cantidad = (int) GetData("cantidad");
      $detalle = GetData("detalle");
     
      $valor = DbHandler::GetRow("SELECT * FROM productos WHERE idproductos=".$id);
      
      $_SESSION["valor"][] = ($valor["valor"]* $cantidad);
      $_SESSION["id"][]= $id;
      $_SESSION["cantidad"][] = $cantidad;
      $_SESSION["detalle"][] = $detalle;
      echo json_encode(array("event" => "alert('Producto añadido al carrito');  window.location.href = '../afamar/index.php?seccion=carrito';"));
//      echo json_encode(array("event" => "window.location.href = '../oneway/index.php?seccion=carrito';"));
      
  }
  public function FunctupdToCart(){
      $pro = (int)GetData("id");
      $cant = (int) GetData("cantidad");
      $deta = GetData("detalle"); 
      $val = DbHandler::GetRow("SELECT * FROM productos WHERE idproductos=".$pro);
    
//      echo json_encode(array("event" => "alert('".$cant_a.".....".$cant_n."');"));
      
      $producto = $_SESSION["id"];
      $cantidad = $_SESSION["cantidad"];
      $detalle = $_SESSION["detalle"];
      $valor = $_SESSION["valor"];
//
      $clave = array_search($pro, $producto);
      
      $cantidad[$clave] = $cant;
      $detalle[$clave] = $deta;
      $valor[$clave] = ($cant * $val["valor"]);
      $_SESSION["id"]= $producto;
      $_SESSION["cantidad"] = $cantidad;
      $_SESSION["detalle"] = $detalle;
      $_SESSION["valor"] = $valor;
     
      echo json_encode(array("event" => "window.location.href = '../afamar/index.php?seccion=carrito';"));
      
  }
  public function FunctdelToCart(){
      $id =(int)GetData("producto");
      $producto = $_SESSION["id"];
      $cantidad = $_SESSION["cantidad"];
      $detalle = $_SESSION["detalle"];
      $valor = $_SESSION["valor"];
    $clave = array_search($id, $producto);     
      
       unset($producto[$clave]);
       unset($cantidad[$clave]);
       unset($detalle[$clave]);
       unset($valor[$clave]);
      $prod = array_values($producto);
      $cant = array_values($cantidad);
      $deta = array_values($detalle);
      $val = array_values($valor);
      $_SESSION["id"]= $prod;
      $_SESSION["cantidad"] = $cant;
      $_SESSION["detalle"] = $deta;
      $_SESSION["valor"] = $val;
     
      echo json_encode(array("event" => "window.location.href = '../afamar/index.php?seccion=carrito';"));
      
  }
}

?>
