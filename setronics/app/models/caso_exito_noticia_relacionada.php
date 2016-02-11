<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class caso_exito_noticia_relacionada extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $caso_exito_id;

    /**
     * @var int Max length is 11.
     */
    public $noticia_relacionada_id;

    public $table = 'caso_exito_noticia_relacionada';

    public $model = 'caso_exito_noticia_relacionada';
    public $primarykey = 'noticia_relacionada_id';
    public $fields = array('caso_exito_id','noticia_relacionada_id');

    public $has_one =  array(
                'caso_exito' => array(
                  'class' => 'caso_exito',
                  'other_field' => 'caso_exito_noticia_relacionada',
                  'join_other_as' => 'caso_exito',
                  'join_self_as' => 'caso_exito_noticia_relacionada',
                  'join_table' => 'cms_caso_exito',
                ),

                'noticia_relacionada' => array(
                  'class' => 'noticia_relacionada',
                  'other_field' => 'caso_exito_noticia_relacionada',
                  'join_other_as' => 'noticia_relacionada',
                  'join_self_as' => 'caso_exito_noticia_relacionada',
                  'join_table' => 'cms_noticia_relacionada',
                )
            );



    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'caso_exito_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'CASOEXITO',
                ),

                'noticia_relacionada_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'NOTICIARELACIONADA',
                )
            );


}