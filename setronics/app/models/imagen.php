<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class imagen extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 255.
     */
    public $path;

    /**
     * @var varchar Max length is 70.
     */
    public $name;

    public $table = 'imagen';

    public $model = 'imagen';
    public $primarykey = 'id';
    public $fields = array('id','path','name');

    public $has_one = array();
    public $has_many =  array(
        
                
                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'imagen',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_categoria',
                ),
        
               'grupo' => array(
                  'class' => 'grupo',
                  'other_field' => 'imagen',
                  'join_other_as' => 'grupo',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_grupo',
                ), 
        
                'sublinea' => array(
                  'class' => 'sublinea',
                  'other_field' => 'imagen',
                  'join_other_as' => 'sublinea',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_sublinea',
                ),
        
                'barner_der_down' => array(
                  'class' => 'barner_der_down',
                  'other_field' => 'imagen',
                  'join_other_as' => 'barner_der_down',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_barner_der_down',
                ),

                'barner_der_up' => array(
                  'class' => 'barner_der_up',
                  'other_field' => 'imagen',
                  'join_other_as' => 'barner_der_up',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_barner_der_up',
                ),

                'barner_izq' => array(
                  'class' => 'barner_izq',
                  'other_field' => 'imagen',
                  'join_other_as' => 'barner_izq',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_barner_izq',
                ),

                'caso_exito' => array(
                  'class' => 'caso_exito',
                  'other_field' => 'imagen',
                  'join_other_as' => 'caso_exito',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_caso_exito',
                ),

                'certificado' => array(
                  'class' => 'certificado',
                  'other_field' => 'imagen',
                  'join_other_as' => 'certificado',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_certificado',
                ),

                'cliente' => array(
                  'class' => 'cliente',
                  'other_field' => 'imagen',
                  'join_other_as' => 'cliente',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_cliente',
                ),

                'gestion_flota' => array(
                  'class' => 'gestion_flota',
                  'other_field' => 'imagen',
                  'join_other_as' => 'gestion_flota',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_gestion_flota',
                ),

                'nosotros' => array(
                  'class' => 'nosotros',
                  'other_field' => 'imagen',
                  'join_other_as' => 'nosotros',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_nosotros',
                ),

                'noticia_relacionada' => array(
                  'class' => 'noticia_relacionada',
                  'other_field' => 'imagen',
                  'join_other_as' => 'noticia_relacionada',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_noticia_relacionada',
                ),

                'novedad' => array(
                  'class' => 'novedad',
                  'other_field' => 'imagen',
                  'join_other_as' => 'novedad',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_novedad',
                ),

                'producto' => array(
                  'class' => 'producto',
                  'other_field' => 'imagen',
                  'join_other_as' => 'producto',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_producto_imagen',
                ),

                'servicio' => array(
                  'class' => 'servicio',
                  'other_field' => 'imagen',
                  'join_other_as' => 'servicio',
                  'join_self_as' => 'imagen',
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

                'path' => array(
                  'rules' => array( 'max_length' => 255, 'required' ),
                  'label' => 'PATH',
                ),

                'name' => array(
                  'rules' => array( 'max_length' => 70 ),
                  'label' => 'NAME',
                )
            );


}