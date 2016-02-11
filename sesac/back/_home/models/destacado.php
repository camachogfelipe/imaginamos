<?php
/**
 *
 * @author Andres Felipe Solarte
 */
class Destacado extends DataMapper {

  public $model = 'destacado';
  public $table = 'destacados';
  
    public $has_one = array();
  public $has_many = array();
  
    public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }

}
