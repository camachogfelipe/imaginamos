<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class sublinea extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 38.
     */
    public $titulo;

    /**
     * @var int Max length is 11.
     */
    public $linea_id;
    
    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    public $table = 'sublinea';

    public $model = 'sublinea';
    public $primarykey = 'id';
    public $fields = array('id','titulo','linea_id','imagen_id');

    public $has_one =  array(
                'linea' => array(
                  'class' => 'linea',
                  'other_field' => 'sublinea',
                  'join_other_as' => 'linea',
                  'join_self_as' => 'sublinea',
                  'join_table' => 'cms_linea',
                ),
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'sublinea',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'sublinea',
                  'join_table' => 'cms_imagen',
                )
            );



    public $has_many =  array(
                'caso_exito' => array(
                  'class' => 'caso_exito',
                  'other_field' => 'sublinea',
                  'join_other_as' => 'caso_exito',
                  'join_self_as' => 'sublinea',
                  'join_table' => 'cms_caso_exito',
                )
            );



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'titulo' => array(
                  'rules' => array( 'max_length' => 38, 'required' ),
                  'label' => 'TITULO',
                ),

                'linea_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'LINEA',
                )
            );


}