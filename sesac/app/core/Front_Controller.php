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
        $footer_id = 1;
        $this->load->model(CMSPREFIX."home/footer");
        $footerModel = new Footer($footer_id);
        $this->_data["footer_info"] = $footerModel->to_array();
        $this->_data["map"] = $this->loadGoogleMaps($footerModel->gmapsX, $footerModel->gmapsY);
        
        $this->load->model(CMSPREFIX."home/footer_email");
        $footerEmailModel = new Footer_email();
        $footerEmailModel->where_in("cms_footer_id", $footer_id);
        $footerEmailModel->get();
        $this->_data["footer_emails"] = $footerEmailModel->all_to_array();
        # Fin Footer
    }
    
    private function loadGoogleMaps($x, $y){
        $this->load->library('googlemaps');
        $config['center'] = $x.','.$y;
        $config['zoom'] = '10';
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = $x.','.$y;
        $this->googlemaps->add_marker($marker);
        return $this->googlemaps->create_map();
    }

    // ----------------------------------------------------------------------
}
