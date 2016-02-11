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
        
        $contacto = new contacto(NUll);
        $contacto->get_by_id(1);
        $this->_data['contacto'] = $contacto;   
         
        $redes = new redes_sociales();
        $this->_data['youtube'] = $redes->get_by_red_social('youtube');
        
        $redes = new redes_sociales();
        $this->_data['facebook'] = $redes->get_by_red_social('facebook');  
        
        $redes = new redes_sociales();
        $this->_data['twitter'] = $redes->get_by_red_social('twitter'); 
 
        $redes = new redes_sociales();
        $this->_data['instagram'] = $redes->get_by_red_social('instagram');
        
        $redes = new redes_sociales();
        $this->_data['google_plus'] = $redes->get_by_red_social('google_plus');
        
        $redes = new redes_sociales();
        $this->_data['linkedin'] = $redes->get_by_red_social('linkedin');
        
        $redes = new redes_sociales();
        $this->_data['vimeo'] = $redes->get_by_red_social('vimeo');
        
        $informacion = new informacion();
        $informacion->default_order_by = array('id' => 'ASC');
        $this->_data['informacion'] = $informacion->get();
        
        $cat = new categoria(); 
        $cat->default_order_by = array('id' => 'ASC');
        $this->_data['categorias'] = $cat->join_related('imagen')->where('categoria_id',NULL)->get(); 
        
        $marcas = new marca(); 
        $this->_data['marcas'] = $marcas->join_related('imagen')->get();
        
        
        
 
    }
    
    
    public function enviar_email( $email_from="", $nombre = "" ,$subject = "" , $email_to = "", $mensaje = "", $email_copy = array()) {
        $this->load->library('email');
        $this->email->from(strip_tags($email_from), strip_tags($nombre));
        $this->email->to($email_to);
        foreach ($email as $em) {
             $this->email->cc($em);
        }
        $this->email->subject($subject);
        $this->email->message($mensaje);
        $this->email->send();
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
