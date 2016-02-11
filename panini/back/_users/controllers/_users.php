<?php

////////////////////////////////
//@autor: Brayan Acebo
//brayan.acebo@imaginamos.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////

class _users extends Back_Controller {

    protected $admin_area = TRUE;

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {

        $datos = new User();
        $datos->where_in_related('group', 'name', array('usuarios'));
        
        
        $datos->get();
        
       

        return $this->set_datos($datos)->build();
    }

    // ----------------------------------------------------------------------

    public function save() {
        $level_id = $this->_get('id');
        $datos = new Level($level_id);

        $type = $this->_get('type');
        $value = intval($this->_get('value'));

        $datos->{$type} = $value;

        $ok = $datos->save();

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function edit($id_user = null) {

        $datos = new User();

        $datos->get_by_id($id_user);

        return $this->set_datos($datos)->build('edit');
    }

    // ----------------------------------------------------------------------

}