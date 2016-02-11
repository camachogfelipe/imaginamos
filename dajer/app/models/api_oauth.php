<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class api_oauth extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 255.
     */
    public $name;

    /**
     * @var varchar Max length is 255.
     */
    public $provider;

    /**
     * @var varchar Max length is 255.
     */
    public $strategy;

    /**
     * @var varchar Max length is 255.
     */
    public $api_key;

    /**
     * @var varchar Max length is 255.
     */
    public $api_secret;

    /**
     * @var varchar Max length is 255.
     */
    public $scope;

    /**
     * @var tinyint Max length is 4.
     */
    public $active;

    /**
     * @var tinyint Max length is 4.
     */
    public $active_oauth;

    public $table = 'api_oauth';

    public $model = 'api_oauth';
    public $primarykey = 'id';
    public $_fields = array('id','name','provider','strategy','api_key','api_secret','scope','active','active_oauth');

    public $has_one = array();
    public $has_many = array();



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


    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'name' => array(
                  'rules' => array( 'max_length' => 255, 'required' ),
                  'label' => 'NAME',
                ),

                'provider' => array(
                  'rules' => array( 'max_length' => 255, 'required' ),
                  'label' => 'PROVIDER',
                ),

                'strategy' => array(
                  'rules' => array( 'max_length' => 255, 'required' ),
                  'label' => 'STRATEGY',
                ),

                'api_key' => array(
                  'rules' => array( 'max_length' => 255, 'required' ),
                  'label' => 'APIKEY',
                ),

                'api_secret' => array(
                  'rules' => array( 'max_length' => 255, 'required' ),
                  'label' => 'APISECRET',
                ),

                'scope' => array(
                  'rules' => array( 'max_length' => 255, 'required' ),
                  'label' => 'SCOPE',
                ),

                'active' => array(
                  'rules' => array( 'max_length' => 4, 'required' ),
                  'label' => 'ACTIVE',
                ),

                'active_oauth' => array(
                  'rules' => array( 'max_length' => 4, 'required' ),
                  'label' => 'ACTIVEOAUTH',
                )
            );


}