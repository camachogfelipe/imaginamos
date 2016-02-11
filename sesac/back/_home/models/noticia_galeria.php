<?php

/**
 *
 * @author Andres Felipe Solarte
 */
class Noticia_Galeria extends DataMapper {

  public $model = 'noticia_galeria';
  public $table = 'noticia_galeria';
  public $has_one = array();
  public $has_many = array();
  public $error_detail = "";

  public function __construct($id = NULL) {
    parent::__construct($id);
  }

}