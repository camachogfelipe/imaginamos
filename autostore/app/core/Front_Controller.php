<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Front_Controller extends CMS_Controller {
 
    protected $layout;
    protected $include = array('intro','tienda','header','footer','scripts');
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
        $this->load->library('pagination');
        $this->session->set_userdata(array('current_user_one' => TRUE)); 
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

        $municipios = new municipios();
        $this->_data['municipios'] = $municipios->join_related('departamento')->order_by('nombre')->get();
        
        $cat = new categoria(); 
        $cat->default_order_by = array('id' => 'ASC');
        $this->_data['categorias'] = $cat->where('categoria_id',NULL)->get(); 
      
        $marcas = new marca(); 
        $this->_data['marcas'] = $marcas->join_related('imagen')->get();

        $modelo = new modelo(); 
        $this->_data['modelos'] = $modelo->get();
        
         $productos = new producto(); 
         $this->_data['productos_pro'] = $productos->where('recomendado',1)->join_related('imagen')->limit(5)->get(); 
        
        
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
    
    public function buildajax($view = 'body', $data = array()) {
       $data = array_merge($data, $this->_data);
       return $this->template->set_layout(FRONTTEMPLATE . 'layouts/layout_ajax')->build($view, $data);
    }
        
    function getresult(&$consulta) {
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        }
    }
    
     public function paginate($per = 1, $count = 0, $url = "", $val = 6) {
            $config['base_url'] = $url;
            $config['total_rows'] = $count;
            $config['per_page'] = $per;
            $config['num_links'] = 3;
            $config['total_rows'] = $val;
            $config['cur_tag_open'] = '<a href="#" class="numero_paginador inline paginador_activo">'; 
            $config['cur_tag_close'] = '</a>'; 

            $config['attr_cur_tag'] = array('class'=>"paginador_activo");
            $config['attr_prev_tag'] = array('class'=>"inline next_btpaginador");
            $config['attr_next_tag'] = array('class'=>"inline prev_btpaginador");
            $config['attr_num_tag'] = array('class'=>"numero_paginador inline");
            $config['attr_first_tag'] = array('class'=>" inline");
            $config['attr_last_tag'] = array('class'=>" inline");
            
            $config['next_link'] = 'Sig';
            $config['prev_link'] = 'Ant';
            $config['last_link'] = 'Ultimo';
            $config['first_link'] = 'Primero';

            $this->pagination->initialize($config);
            return $this->pagination->create_links(); 
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
