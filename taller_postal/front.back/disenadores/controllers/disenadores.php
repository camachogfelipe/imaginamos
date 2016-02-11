<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class Disenadores extends Front_Controller {

	public function __construct() {
		parent::__construct();
                $this->_data['current_page'] = strtolower(__CLASS__);  
	}
        
        public function index() {
        }

	public function disenador($id="",$per = 1) {
            $disenador = new disenador(); 
            $this->_data['disenadores'] = $disenador->join_related('imagen')->join_related('municipios')->group_by('id')->get_by_id($id); 
            $pages = 4; 
            if($disenador->exists()){
                $productos = new producto();
                $this->_data['productos'] = $productos->limit($pages, ($pages * ($per - 1)))->get_by_disenador_id($id);
                $this->load->library('pagination'); //Cargamos la librería de paginación
                $config['base_url'] = base_url() . 'disenadores/disenador/' . $id . "/"; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
                $productos = new producto();
                $productos->get_by_disenador_id($id);
                $config['total_rows'] = $productos->result_count(); //calcula el número de filas  
                $config['use_page_numbers'] = TRUE; //paginador con numeros
                $config['per_page'] = $pages; //Número de registros mostrados por páginas
                $config['num_links'] = 2; //Número de links mostrados en la paginación
                $config['first_link'] = '<<'; //primer link
                $config['last_link'] = '>>'; //último link
                $config["uri_segment"] = 4; //el segmento de la paginación
                $config['next_link'] = '>'; //siguiente link
                $config['prev_link'] = '<'; //anterior link
                $config['cur_tag_open'] = '<a class="pagina_activa" href="#">';
                $config['cur_tag_close'] = '</a>';
                $this->pagination->initialize($config); //inicializamos la paginación   
	        return $this->build();    
            }else{
                redirect('home/errors');
            }
            
	}

}
?>