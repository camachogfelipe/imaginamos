<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Back_Controller extends CMS_Controller {
    
    

    public function __construct() {

        // Si admin area esta definido y es verdadero, 
        // correr el condicional de admin area
        if (isset($this->admin_area)) {
            if (true === $this->admin_area)
                $this->admin_area();
        }
        
       
        
        parent::__construct();
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

        $data = array_merge($data, $this->_data);

        return $this->template
                    ->set_partial('menu_administrators', ADMINPATH . 'partials/menu/administrator')
                    ->set_partial('menu_panel', ADMINPATH . 'partials/menu/panel')
                    ->set_partial('menu_icons', ADMINPATH . 'partials/menu/icons')
                    ->set_layout(ADMINPATH . 'layouts/general')
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
}