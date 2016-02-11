<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class certificado extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 39.
     */
    public $titulo;

    /**
     * @var varchar Max length is 295.
     */
    public $texto;

    /**
     * @var int Max length is 11.
     */
    public $categoria_id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var varchar Max length is 200.
     */
    public $path_certificado;

    public $table = 'certificado';

    public $model = 'certificado';
    public $primarykey = 'id';
    public $fields = array('id','titulo','texto','categoria_id','imagen_id','path_certificado');

    public $has_one =  array(
                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'certificado',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'certificado',
                  'join_table' => 'cms_categoria',
                ),

                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'certificado',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'certificado',
                  'join_table' => 'cms_imagen',
                )
            );



    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'titulo' => array(
                  'rules' => array( 'max_length' => 39, 'required' ),
                  'label' => 'TITULO',
                ),

                'texto' => array(
                  'rules' => array( 'max_length' => 295, 'required' ),
                  'label' => 'TEXTO',
                ),

                'categoria_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'CATEGORIA',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'path_certificado' => array(
                  'rules' => array( 'max_length' => 200, 'required' ),
                  'label' => 'PATH CERTIFICADO',
                )
            );


}