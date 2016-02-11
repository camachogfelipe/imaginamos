<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Back_Controller extends CMS_Controller {
    
    protected $current_user;
    protected $operation_results = null;

    public function __construct() {

        // Si admin area esta definido y es verdadero, 
        // correr el condicional de admin area
        if (isset($this->admin_area)) {
            if (true === $this->admin_area)
                $this->admin_area();
        }

        parent::__construct();
        /** Current user **/
        $this->current_user = new \User;
        $this->current_user->get_by_id($this->session->userdata('user_id'));
        $this->_data['current_user'] = $this->current_user->to_array();
    }

    // ----------------------------------------------------------------------

    /**
     * Build mejorado del Back
     * 
     * @param string $view
     * @param type $data
     * @return type
     */
    protected function build($view = null, $data = array()) {


        if (empty($view)) {
            $view = 'body';
        }

        // Definiendo variables del back
        $data['menu_panel'] = $this->_main_menu();

        // Is superadmin?
        $data['is_superadmin'] = $this->is_superadmin();

        // Public assets
        $this->_data['public_assets'] = $this->publicAssets;

        // Alert messages
        $alert_messages = $this->session->flashdata('alert_messages');
        if (empty($alert_messages)) {
            $alert_messages = $this->_alert_messages;
        }
        $this->_data['alert_messages'] = $alert_messages;

        $data = array_merge($data, $this->_data);

        return $this->template
                        ->set_partial('menu_panel', ADMINPATH . 'partials/beoro/menu')
                        ->set_partial('modals', ADMINPATH . 'partials/beoro/modals')
                        ->set_layout(ADMINPATH . 'layouts/beoro')
                        ->build($view, $data);
    }

    // ----------------------------------------------------------------------

    protected function add_asset_module($asset = array(), $module = false) {
        return parent::add_asset_module($asset, $module, BACKPATH);
    }

    // ----------------------------------------------------------------------

    private function _main_menu() {
        $menu = array();

        // Items por defecto
        $menu[] = array(
            'title' => 'Dashboard',
            'url' => 'cms/dashboard',
            'icon' => 'home'
        );


        // Si es super administrador agregar el boton de administracion general
        if (true === $this->is_superadmin() && false === $this->_superadmin_area) {
            $menu[] = array(
                'title' => 'Administración',
                'url' => 'cms/admin/dashboard',
                'icon' => 'home'
            );
        } elseif (true === $this->is_superadmin() && true === $this->_superadmin_area) {
            $menu[] = array(
                'title' => 'Administradores',
                'url' => 'cms/admin/administradores',
                'icon' => 'home'
            );
            $menu[] = array(
                'title' => 'Menús',
                'url' => 'cms/admin/menus',
                'icon' => 'home'
            );
        }

        if (false === $this->_superadmin_area) {
            // Cargando modelo del menu
            $this->load->model(ADMINPATH . 'menu');

            $datos_menu = new Menu();

            if ($datos_menu->get()->exists()) {
                foreach ($datos_menu->all as $item) {
                    $menu[] = array(
                        'title' => $item->title,
                        'url' => $item->url,
                        'icon' => $item->icon
                    );
                }
            }
        }

        $this->_data['menu_superadmin'] = $this->_superadmin_area;

        return $menu;
    }
    
    // ----------------------------------------------------------------------
    /**
     * Funcion para la Carga de Archivos
     */
    
    public function do_upload($field, $folder, $width, $height){
        
        $config['upload_path'] = ASSETSPATH.'img/'.$folder;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']	= '20400';
        $config['max_width']  = $width;
        $config['max_height']  = $height;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($field))
        {
            $this->operation_results = $this->upload->display_errors();
            return false;
        }
        else
        {
            $this->operation_results = $this->upload->data();
            return true;
        }
    }

    // ----------------------------------------------------------------------
}