<?php
/*
 * @file               : Dbcotizaciones_productos.db.php
 * @brief              : Clase para la interaccion con la tabla cotizaciones_productos
 * @version            : 3.3
 * @ultima_modificacion: 2013-03-07
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcotizaciones_productos
 * @brief: Clase para la interaccion con la tabla cotizaciones_productos
 */
 
class Dbcotizaciones_productos extends DbDAO {

  protected $contizaciones_id = NULL;
  protected $productos_id = NULL;

  public function setcontizaciones_id($mData = NULL) {
    if ($mData === NULL) { $this->contizaciones_id = NULL; }
    $this->contizaciones_id = StripHtml($mData);
  }

  public function setproductos_id($mData = NULL) {
    if ($mData === NULL) { $this->productos_id = NULL; }
    $this->productos_id = StripHtml($mData);
  }

}
?>