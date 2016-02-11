<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Front_Controller extends CMS_Controller {

    protected $layout;
   
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

        

        $this->_data['urls'] = $this->urls;

    }

    // ----------------------------------------------------------------------

    /**
     * Build mejorado del Front
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
       

        $data = array_merge($data, $this->_data);

        return $this->template
                        ->set_partial('quieres', FRONTTEMPLATE . 'partials/quieres')
                        ->set_partial('tienes', FRONTTEMPLATE . 'partials/tienes')
                        ->set_partial('footer', FRONTTEMPLATE . 'partials/footer')
                        ->set_layout(FRONTTEMPLATE . 'layouts/' . $this->layout)
                        ->build($view, $data, false, 'assets');
    }

    // ----------------------------------------------------------------------

   
}