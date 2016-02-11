<?php

/**
 *
 * @author Andres Felipe Solarte
 */
class Proyecto_galeria extends DataMapper {

  public $model = 'proyecto_galeria';
  public $table = 'proyecto_galeria';
  public $has_one = array();
  public $has_many = array();
  public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }
}
