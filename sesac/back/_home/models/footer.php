<?php
/**
 *
 * @author Andres Felipe Solarte
 */
class Footer extends DataMapper {

  public $model = 'footer';
  public $table = 'footer';
  
  public $has_one = array();
  public $has_many = array();
  
  public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }
}
