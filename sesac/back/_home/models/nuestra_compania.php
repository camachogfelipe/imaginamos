<?php
/**
 *
 * @author Andres Felipe Solarte
 */
class Nuestra_Compania extends DataMapper {

  public $model = 'nuestra_compania';
  public $table = 'nuestra_compania';
  
    public $has_one = array();
  public $has_many = array();
  
    public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }

}