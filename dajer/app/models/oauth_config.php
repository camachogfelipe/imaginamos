<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class oauth_config extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 255.
     */
    public $uri;

    public $table = 'oauth_config';

    public $model = 'oauth_config';
    public $primarykey = 'id';
    public $_fields = array('id','uri');

    public $has_one = array();
    public $has_many = array();



    public function __construct($id = NULL) {
        parent::__construct($id);
        $this->load->dbforge();
    }

    //-----------------------/* Carga los datos del oauth config */---------------------/

    public function get_oauth_config() {
        $model = clone $this;
        $model->get();
        $data = array();
        foreach ($model as $row):
            $data [] = array(
                'id' => $row->id,
                'uri' => $row->uri
            );
        endforeach;
        return $data;
    }

    //-----------------------/* Guarda la información del oauth config */---------------------/

    public function save_oauth_config($post = null) {
        $ok = false;
        $model = clone $this;
        if($model->update('uri',$post->uri)):
            $ok = TRUE;
        endif;
        return $ok;
    }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'uri' => array(
                  'rules' => array( 'max_length' => 255, 'required' ),
                  'label' => 'URI',
                )
            );


}