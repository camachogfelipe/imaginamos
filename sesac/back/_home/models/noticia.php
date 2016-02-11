<?php

/**
 *
 * @author Andres Felipe Solarte
 */
class Noticia extends DataMapper {

  public $model = 'noticia';
  public $table = 'noticia';
  public $has_one = array();
  public $has_many = array();
  public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }

}
