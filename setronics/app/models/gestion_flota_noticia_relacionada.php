<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class gestion_flota_noticia_relacionada extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $gestion_flota_id;

    /**
     * @var int Max length is 11.
     */
    public $noticia_relacionada_id;

    public $table = 'gestion_flota_noticia_relacionada';

    public $model = 'gestion_flota_noticia_relacionada';
    public $primarykey = 'noticia_relacionada_id';
    public $fields = array('gestion_flota_id','noticia_relacionada_id');

    public $has_one =  array(
                'gestion_flota' => array(
                  'class' => 'gestion_flota',
                  'other_field' => 'gestion_flota_noticia_relacionada',
                  'join_other_as' => 'gestion_flota',
                  'join_self_as' => 'gestion_flota_noticia_relacionada',
                  'join_table' => 'cms_gestion_flota',
                ),

                'noticia_relacionada' => array(
                  'class' => 'noticia_relacionada',
                  'other_field' => 'gestion_flota_noticia_relacionada',
                  'join_other_as' => 'noticia_relacionada',
                  'join_self_as' => 'gestion_flota_noticia_relacionada',
                  'join_table' => 'cms_noticia_relacionada',
                )
            );



    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'gestion_flota_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'GESTIONFLOTA',
                ),

                'noticia_relacionada_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'NOTICIARELACIONADA',
                )
            );


}