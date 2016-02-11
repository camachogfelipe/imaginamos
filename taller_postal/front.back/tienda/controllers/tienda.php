<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class Tienda extends Front_Controller {

	public function __construct() {
		parent::__construct();
               	$this->_data['current_page'] = strtolower(__CLASS__);
                $scat = new linea(); 
                $this->_data['menu'] = $scat->get(); 
                
	}

	public function index($per = 1) {
                $pages=6; //Número de registros mostrados por páginas
                $productos = new producto();
                $this->_data['ruta'] = base_url()."tienda/linea/";
                $this->_data['section'] = "TIENDA"; 
                $this->_data['miga'] = array("Tienda" => ""); 
                $this->_data['productos'] = $productos->limit($pages, ($pages * ($per - 1)))->get(); 
                $this->_data['request_id']  = -1;  
                $this->load->library('pagination'); //Cargamos la librería de paginación
                $config['base_url'] = base_url()."tienda/index/"; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
                $productos = new producto();
                $productos->get();
                $config['total_rows'] = $productos->result_count();//calcula el número de filas  
                $config['num_links'] = 3; //numero de link a mostrar
                $config['use_page_numbers'] = TRUE;//paginador con numeros
                $config['per_page'] = $pages; //Número de registros mostrados por páginas
                $config['num_links'] = 20; //Número de links mostrados en la paginación
                $config['first_link'] = '<<';//primer link
                $config['last_link'] = '>>';//último link
                $config["uri_segment"] = 3;//el segmento de la paginación
                $config['next_link'] = '>';//siguiente link
                $config['prev_link'] = '<';//anterior link
                $config['cur_tag_open'] = '<a href="#" class="pagina_activa">';
                $config['cur_tag_close'] = '</a>';
                $this->pagination->initialize($config); //inicializamos la paginación        
            	return $this->build();
	}

        public function linea($id ="",$per = 1) {
                $pages=6; //Número de registros mostrados por páginas
                $productos = new producto();
                $productos1 = new producto();
                $this->_data['menu'] = array();
                $cat = new categoria(); 
                $this->_data['menu'] = $cat->get_by_linea_id($id); 
                $array_cat = array(); 
                foreach ($cat as $value) {
                   $array_cat[] = $value->id;
                }
                
                if(!empty($array_cat)){
                    $productos->where_in('categoria_id', $array_cat);
                    $productos1->where_in('categoria_id', $array_cat);
                }
                $this->_data['ruta'] = base_url()."tienda/categoria/"; 
                $linea = new linea(); 
                $linea->get_by_id($id);
                $this->session->set_userdata("linea",ucfirst(mb_strtolower($linea->titulo))); 
                $this->_data['section'] = mb_strtoupper($linea->titulo); 
                $this->session->set_userdata("linea_id",$linea->id); 
                $this->_data['miga'] = array("Tienda"  => base_url()."tienda",ucfirst(mb_strtolower($linea->titulo)) => ""); 
                $this->_data['productos'] = $productos->limit($pages, ($pages * ($per - 1)))->get(); 
                $this->_data['request_id']  = $id;
                $this->load->library('pagination'); //Cargamos la librería de paginación
                $config['base_url'] = base_url()."tienda/linea/".$id."/"; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
               
                $productos1->get();
                $config['total_rows'] = $productos1->result_count();//calcula el número de filas  
                $config['num_links'] = 3; //numero de link a mostrar
                $config['use_page_numbers'] = TRUE;//paginador con numeros
                $config['per_page'] = $pages; //Número de registros mostrados por páginas
                $config['num_links'] = 20; //Número de links mostrados en la paginación
                $config['first_link'] = '<<';//primer link
                $config['last_link'] = '>>';//último link
                $config["uri_segment"] = 4;//el segmento de la paginación
                $config['next_link'] = '>';//siguiente link
                $config['prev_link'] = '<';//anterior link
                $config['cur_tag_open'] = '<a class="pagina_activa">';
                $config['cur_tag_close'] = '</a>';
                $this->pagination->initialize($config); //inicializamos la paginación
		return $this->build();
	}
        
        
	public function categoria($id ="",$per = 1) {
                $pages=6; //Número de registros mostrados por
                 $this->_data['menu'] = array();
                $this->_data['ruta'] = base_url()."tienda/categoria/"; 
                $cat = new categoria(); 
                $cat->get_by_id($id);
                $linea = new linea(); 
                $linea->get_by_id($cat->linea_id);
                $this->_data['section'] = $linea->titulo;
                $this->_data['miga'] = array("Tienda" =>  base_url().'tienda', ucfirst(mb_strtolower($linea->titulo))  =>  base_url().'tienda/linea/'.$linea->id,$cat->titulo => ""); 
                $productos = new producto();
                $this->_data['productos'] = $productos->limit($pages, ($pages * ($per - 1)))->get_by_categoria_id($id); 
                $this->_data['request_id']  = $id;
                $this->load->library('pagination'); //Cargamos la librería de paginación
                $config['base_url'] = base_url().'tienda/categoria/'.$id."/"; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
                $productos = new producto();
                $productos->get_by_categoria_id($id);
                $config['total_rows'] = $productos->result_count();//calcula el número de filas  
                $config['num_links'] = 3; //numero de link a mostrar
                $config['use_page_numbers'] = TRUE;//paginador con numeros
                $config['per_page'] = $pages; //Número de registros mostrados por páginas
                $config['num_links'] = 20; //Número de links mostrados en la paginación
                $config['first_link'] = '<<';//primer link
                $config['last_link'] = '>>';//último link
                $config["uri_segment"] = 4;//el segmento de la paginación
                $config['next_link'] = '>';//siguiente link
                $config['prev_link'] = '<';//anterior link
                $config['cur_tag_open'] = '<a class="pagina_activa">';
                $config['cur_tag_close'] = '</a>';
                $this->pagination->initialize($config); //inicializamos la paginación
		return $this->build();
	}
        

}
?>