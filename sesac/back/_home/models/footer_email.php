<?php
/**
 *
 * @author Andres Felipe Solarte
 */
class Footer_email extends DataMapper {

  public $model = 'footer_email';
  public $table = 'footer_email';
  
    public $has_one = array();
  public $has_many = array();
  
    public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }

}
