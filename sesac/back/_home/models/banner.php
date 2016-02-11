<?php
/**
 *
 * @author Andres Felipe Solarte
 */
class Banner extends DataMapper {

  public $model = 'banner';
  public $table = 'banner';
  
    public $has_one = array();
  public $has_many = array();
  
    public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }

}