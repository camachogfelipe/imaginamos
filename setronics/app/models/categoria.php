<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class categoria extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 63.
     */
    public $categoria;

    /**
     * @var varchar Max length is 560.
     */
    public $descripcion;

    /**
     * @var int Max length is 11.
     */
    public $linea_id;

    /**
     * @var int Max length is 11.
     */
    public $categoria_id;
    
    /**
     * @var int Max length is 11.
     */
    public $imagen_id;
    
    

    public $table = 'categoria';

    public $model = 'categoria';
    public $primarykey = 'id';
    public $fields = array('id','categoria','descripcion','linea_id','categoria_id');

    public $has_one =  array(
                'linea' => array(
                  'class' => 'linea',
                  'other_field' => 'categoria',
                  'join_other_as' => 'linea',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_linea',
                ),

                'categoria_basic' => array(
                  'class' => 'categoria',
                  'other_field' => 'categoria_recurrences',
                  'join_table' => 'cms_categoria',
                  'join_self_as' => 'categoria',
                  'join_other_as' => 'categoria',
                ),
                
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'categoria',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_imagen',
                )   
            );



    public $has_many =  array(
                'categoria_recurrences' => array(
                  'class' => 'categoria',
                  'other_field' => 'categoria_basic',
                  'join_table' => 'cms_categoria',
                  'join_self_as' => 'categoria',
                  'join_other_as' => 'categoria',
                ),

                'certificado' => array(
                  'class' => 'certificado',
                  'other_field' => 'categoria',
                  'join_other_as' => 'certificado',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_certificado',
                ),

                'grupo' => array(
                  'class' => 'grupo',
                  'other_field' => 'categoria',
                  'join_other_as' => 'grupo',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_grupo',
                ),

                'propuesta_valor' => array(
                  'class' => 'propuesta_valor',
                  'other_field' => 'categoria',
                  'join_other_as' => 'propuesta_valor',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_propuesta_valor',
                ),

                'servicio' => array(
                  'class' => 'servicio',
                  'other_field' => 'categoria',
                  'join_other_as' => 'servicio',
                  'join_self_as' => 'categoria',
                  'join_table' => 'cms_servicio',
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

                'categoria' => array(
                  'rules' => array( 'max_length' => 63, 'required' ),
                  'label' => 'CATEGORIA',
                ),

                'descripcion' => array(
                  'rules' => array( 'max_length' => 560, 'required' ),
                  'label' => 'DESCRIPCION',
                ),

                'linea_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'LINEA',
                ),

                'categoria_id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'CATEGORIA',
                )
            );


}