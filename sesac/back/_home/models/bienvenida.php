<?php
/**
 *
 * @author Andres Felipe Solarte
 */
class Bienvenida extends DataMapper {

  public $model = 'bienvenida';
  public $table = 'bienvenida';
  
    public $has_one = array();
  public $has_many = array();
  
    public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }

}