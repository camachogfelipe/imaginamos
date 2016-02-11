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

        if ($this->is_cliente() or $this->is_proveedor())
        {
           $this->current_user = new \User;
           $this->current_user->join_related('group')->get_by_id($this->session->userdata('user_id'));
           
           $this->_data['current_user'] = $this->current_user->to_array();
           $this->_data['current_user_obj'] = $this->current_user;
        }
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

    function getresult(&$consulta) {
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        }
    }
    
    // ----------------------------------------------------------------------

    public function get_footer() {
        # Inicio Footer

        

        # Fin Footer
    }

    // ----------------------------------------------------------------------
}
