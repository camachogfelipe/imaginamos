<?php

/**
 * @author Michael Ivan Quevedo V.
 */
class Api_oauth extends DataMapper {

    public $model = 'api_oauth';
    public $table = 'api_oauth';
    public $has_one = array();
    public $has_many = array();
    public $validation = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
        $this->load->dbforge();
    }

    //-----------------------/* Carga los datos del oauth */---------------------/

    public function get_oauth($oauth = FALSE) {
        $model = clone $this;
        if ($oauth):
            $model->where('active_oauth', 1);
        endif;
        $model->get();
        $data = array();
        foreach ($model as $row):
            $data [] = array(
                'id' => $row->id,
                'name' => $row->name,
                'provider' => $row->provider,
                'strategy' => $row->strategy,
                'api_key' => $row->api_key,
                'api_secret' => $row->api_secret,
                'scope' => $row->scope,
                'active' => $row->active,
                'active_oauth' => $row->active_oauth
            );
        endforeach;
        return $data;
    }

    //-----------------------/* Guarda la información del oauth */---------------------/

    public function save_oauth($post = null) {
        $ok = FALSE;
        $model = clone $this;
        if (!empty($post->active)):
            if (empty($post->key)):
                return $ok;
            endif;
            if (empty($post->secret)):
                return $ok;
            endif;
            $ok = TRUE;
            $model->where('provider', $post->provider)->update(array('api_key' => $post->key, 'api_secret' => $post->secret, 'scope' => $post->scope, 'active' => 1));
        else:
            $ok = TRUE;
            $model->where('provider', $post->provider)->update(array('api_key' => $post->key, 'api_secret' => $post->secret, 'scope' => $post->scope, 'active' => 0));
        endif;
        return $ok;
    }

    public function get_active_provider($provider) {
        $model = clone $this;
        $model->select('strategy,api_key,api_secret,scope')
                ->where('provider', $provider)
                ->where('active', 1)
                ->where('active_oauth', 1)
                ->get();
        return $model;
    }

}