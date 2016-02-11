<?php
/**
 *
 * @author Andres Felipe Solarte
 */
class Servicio extends DataMapper {

  public $model = 'servicio';
  public $table = 'servicio';
  
  public $has_one = array();
  public $has_many = array();
  
  public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }
}
