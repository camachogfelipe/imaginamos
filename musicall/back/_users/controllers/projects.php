<?php

/**
 * @author rigobcastro
 */
class Projects extends Back_Controller {

    protected $admin_area = true;

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $datos = new Users_project;
        $datos->get();

        $this->set_datos($datos);
        return $this->build('projects/body');
    }

    public function detail($project_id) {
        $datos = new Users_project($project_id);
        
        $this->load->model(array('_notifications/notification', '_notifications/notifications_type', '_notifications/soundcloud_song'));
        
        $n = $datos->notification;
        $m = clone $n;
        
        $n->where_related_notifications_type('var', 'tienes');
        
        $this->_data['notificaciones'] = $n->get();
        
        $m->where_related_notifications_type('var', 'buscas');
        
        $this->_data['respuestas'] = $m->get();
       
        
        $this->set_datos($datos);
        return $this->build('projects/detail');
    }

    // ----------------------------------------------------------------------
}