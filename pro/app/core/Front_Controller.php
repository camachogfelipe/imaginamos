<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Front_Controller extends CMS_Controller {

    protected $layout;
    protected $show_main_menu = true, $show_principal_banner = false, $show_header_perfil = false;
    protected $userinfo = null;
    protected $urls = array();

    /*
     * Activa el estilo secundario para el layout activo
     */
    protected $layout_secondary_style = true;
    protected $current_inshaka_url = null;
    protected $current_username = null;

    public function __construct() {
        parent::__construct();

        $this->layout = 'general';

        // Si admin area esta definido y es verdadero, 
        // correr el condicional de admin area
        if (isset($this->user_area) && $this->user_area === true) {
            if (!$this->is_usuario()) {
                redirect('usuarios/login?continue_uri=' . $this->uri->uri_string());
            }
        }

        // URLS para uso global (Formatos)
        $this->urls = (object) array(
                    'inshaka_url' => site_url('perfil/%s'),
                    'categoria_detalle' => site_url('directorio/categoria/index/%s'),
                    'directorio_detalle' => site_url('directorio/anuncio/%s/%s'),
            
                    'audicion_detalle' => site_url('audicion/%d/%s'),
                    'clasificado_detalle' => site_url('clasificado/%d/%s')
        );



        // Cargando la información del usuario
        if ($this->is_usuario()) {
            $this->userinfo = $this->ACL->user()->row();

            $this->urls->current_inshaka_url = sprintf($this->urls->inshaka_url, $this->userinfo->inshaka_url);
            $this->urls->current_inshaka_url_format = $this->urls->current_inshaka_url . '/%s';
            $this->urls->current_profile = sprintf($this->urls->inshaka_url, $this->userinfo->inshaka_url); # URL del perfil del usuario actual. 
        }

        $this->_data['urls'] = $this->urls;
    }

    // ----------------------------------------------------------------------

    public function is_owner_usuario($current_username = null) {
        if ($this->is_usuario()) {
            return (bool) ((string) $this->userinfo->username === (string) $current_username);
        }
        return false;
    }

    // ----------------------------------------------------------------------

    public function render_json($ok = false) {
        unset($this->_data['current_username']);
        return parent::render_json($ok);
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

        $data['is_usuario'] = $this->is_usuario(); // Es un usuario y está logueado?
        $data['current_page'] = $this->current_page;
        $data['show_main_menu'] = $this->show_main_menu; // Mostrar menu principal?
        $data['show_header_perfil'] = $this->show_header_perfil; // Mostrar header del usuario?
        $data['show_principal_banner'] = $this->show_principal_banner; // Mostrar banner principal?
        $data['current_username'] = (!empty($this->current_username) ? $this->current_username : (!empty($this->userinfo->username)) ? $this->userinfo->username : null);
        $data['is_owner_usuario'] = $this->is_owner_usuario($this->current_username);


        // Cargando módulo del banner principal
        if (true === $this->show_principal_banner) {
            $this->load->model('_banners/principal_banner');
            $principal_banner = new Principal_banner;
            $data['principal_banner'] = $principal_banner->get();
        }
        
        // Cargando banner del footer
        $this->load->model('_banners/footer_banner');
        $footer_banner = new Footer_banner;
        $data['footer_banner'] = $footer_banner->get();
        
        // Información del usuario
        $data['userinfo'] = $this->userinfo;

        $data = array_merge($data, $this->_data);

        return $this->template
                        ->set_partial('header', FRONTTEMPLATE . 'partials/header')
                        ->set_partial('header-perfil', FRONTTEMPLATE . 'partials/header-perfil')
                        ->set_partial('banner', FRONTTEMPLATE . 'partials/banner')
                        ->set_partial('footer', FRONTTEMPLATE . 'partials/footer')
                        ->set_layout(FRONTTEMPLATE . 'layouts/' . $this->layout)
                        ->build($view, $data, false, 'assets');
    }

    // ----------------------------------------------------------------------

    /**
     * Alias del Add asset module, dirigiendo a los modulos del front
     * 
     * @param type $asset
     * @param type $module
     * @return type
     */
    protected function add_asset_module($asset = array(), $module = false) {
        return parent::add_asset_module($asset, $module, FRONTPATH);
    }

    // ----------------------------------------------------------------------
}