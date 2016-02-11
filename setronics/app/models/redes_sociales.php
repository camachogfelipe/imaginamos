<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class redes_sociales extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 100.
     */
    public $red_social;

    /**
     * @var varchar Max length is 255.
     */
    public $link_red;

    /**
     * @var timestamp
     */
    public $fecha_creacion;

    public $table = 'redes_sociales';

    public $model = 'redes_sociales';
    public $primarykey = 'id';
    public $fields = array('id','red_social','link_red','fecha_creacion');

    public $has_one = array();
    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'red_social' => array(
                  'rules' => array( 'max_length' => 100 ),
                  'label' => 'REDSOCIAL',
                ),

                'link_red' => array(
                  'rules' => array( 'max_length' => 255 ),
                  'label' => 'LINKRED',
                )
            );
    
   public function get_datos() {
        $model = clone $this;
        $model->get();
        $data_net = array();
        foreach ($model as $k) {
            $data_net [] = array(
                'id' => $k->id,
                'nombre' => $k->red_social,
                'link' => $k->link_red,
            );
        }
        return $data_net;
    }

    public function edit_data($input) {
        $data = array(
            'link_red' => $input['value']
        );
        $this->db->where('id', $input['id']);
        if ($this->db->update('cms_redes_sociales', $data))
            return true;
        else
            return false;
    }


}