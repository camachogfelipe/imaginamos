<?php
/**
 *
 * @author Andres Felipe Solarte
 */
class Proyecto extends DataMapper {

  public $model = 'proyecto';
  public $table = 'proyecto';
  
  public $has_one = array();
  public $has_many = array();
  
  public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }

}
