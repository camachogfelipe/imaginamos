<?php
/**
 *
 * @author Andres Felipe Solarte
 */
class Nuestra_Compania_Articulo extends DataMapper {

  public $model = 'nuestra_compania_articulo';
  public $table = 'nuestra_compania_articulo';
  
  public $has_one = array();
  public $has_many = array();
  
  public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }

}
