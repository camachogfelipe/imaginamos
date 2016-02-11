<?php
/*
 * @file               : Dbcontacto.db.php
 * @brief              : Clase para la interaccion con la tabla contacto
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-04
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcontacto
 * @brief: Clase para la interaccion con la tabla contacto
 */
 
class Dbcontacto extends DbDAO {

  protected $idcontacto = NULL;
  protected $direccion = NULL;
  protected $email = NULL;
  protected $ciudad = NULL;
  protected $telefono_uno = NULL;
  protected $telefono_dos = NULL;
  protected $telefono_tres = NULL;

  public function setidcontacto($mData = NULL) {
    if ($mData === NULL) { $this->idcontacto = NULL; }
    $this->idcontacto = StripHtml($mData);
  }

  public function setdireccion($mData = NULL) {
    if ($mData === NULL) { $this->direccion = NULL; }
    $this->direccion = StripHtml($mData);
  }

  public function setemail($mData = NULL) {
    if ($mData === NULL) { $this->email = NULL; }
    $this->email = StripHtml($mData);
  }

  public function setciudad($mData = NULL) {
    if ($mData === NULL) { $this->ciudad = NULL; }
    $this->ciudad = StripHtml($mData);
  }

  public function settelefono_uno($mData = NULL) {
    if ($mData === NULL) { $this->telefono_uno = NULL; }
    $this->telefono_uno = StripHtml($mData);
  }

  public function settelefono_dos($mData = NULL) {
    if ($mData === NULL) { $this->telefono_dos = NULL; }
    $this->telefono_dos = StripHtml($mData);
  }

  public function settelefono_tres($mData = NULL) {
    if ($mData === NULL) { $this->telefono_tres = NULL; }
    $this->telefono_tres = StripHtml($mData);
  }

}
?>