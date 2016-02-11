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
        
        $this->userinfo = $this->ACL->user()->row();

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
        
        // Obtener footer
        $this->get_footer();
        
        $data = array_merge($data, $this->_data);

        
        return $this->template
                        ->set_partial('header', FRONTTEMPLATE . 'partials/header')
                        ->set_partial('footer', FRONTTEMPLATE . 'partials/footer')
                        ->set_layout(FRONTTEMPLATE . 'layouts/' . $this->layout)
                        ->build($view, $data, false, 'assets');
    }

    // ----------------------------------------------------------------------

    public function get_footer() {
        # Inicio Footer

        

        # Fin Footer
    }

    // ----------------------------------------------------------------------
}
