<?php

/**
 * @author Michael Ivan Quevedo V.
 */
class Oauth_config extends DataMapper {

    public $model = 'oauth_config';
    public $table = 'oauth_config';
    public $has_one = array();
    public $has_many = array();
    public $validation = array();

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

}