<?php
/**
 *
 * @author Andres Felipe Solarte
 */
class Cliente extends DataMapper {

  public $model = 'cliente';
  public $table = 'cliente';
  
  public $has_one = array();
  public $has_many = array();
  
  public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }
}