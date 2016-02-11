<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Front_Controller extends CMS_Controller {
 
    protected $layout;
    protected $include = array( "header","footer");
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
        //$this->session->set_userdata(array('current_intro' => TRUE)); 
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
        
        $contacto = new contacto(NUll);
        $contacto->get_by_id(1);
        $this->_data['contacto'] = $contacto;   
         
        $redes = new redes_sociales();
        $this->_data['youtube'] = $redes->get_by_red_social('Youtube');
        
        $redes = new redes_sociales();
        $this->_data['facebook'] = $redes->get_by_red_social('Facebook');  
        
        $redes = new redes_sociales();
        $this->_data['twitter'] = $redes->get_by_red_social('Twitter'); 
 
        $redes = new redes_sociales();
        $this->_data['instagram'] = $redes->get_by_red_social('Instagram');
        
        $redes = new redes_sociales();
        $this->_data['google_plus'] = $redes->get_by_red_social('Google_plus');
        
        $redes = new redes_sociales();
        $this->_data['linkedin'] = $redes->get_by_red_social('Linkedin');
        
        $redes = new redes_sociales();
        $this->_data['vimeo'] = $redes->get_by_red_social('Vimeo');
       
        $municipios = new ciudad();
        $this->_data['municipios'] = $municipios->get();
        
        $this->_data['newletter_send'] = $this->session->userdata('newletter_send');
    
        
        $line = new linea(); 
        $line->default_order_by = array('id' => 'ASC');
        $this->_data['_lineas'] =  $line->get();
        
        
 
      

    }
    
    protected function recusive_clone($object) {
        return unserialize(serialize($object));
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
        $data = array_merge($data, $this->_data);
        foreach ($this->include as $partial) { 
            $this->template->set_partial($partial, FRONTTEMPLATE . "partials/{$partial}");
        }
        return $this->template->set_layout(FRONTTEMPLATE . 'layouts/' . $this->layout)->build($view, $data, false, 'assets');           
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

       // ----------------------------------------------------------------------

    public function get_footer() {
        # Inicio Footer
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
