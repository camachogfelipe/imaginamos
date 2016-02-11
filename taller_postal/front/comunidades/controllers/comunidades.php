<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class Comunidades extends Front_Controller {

	public function __construct() {
		parent::__construct();
                $this->_data['current_page'] = strtolower(__CLASS__);
    	}

	public function index($per= 1) {
                $comunidad = new comunidad();
                $this->_data['comunidad'] = $comunidad->get();  
                $pages = 8;
                $linea = new disenador();
                $this->_data['desings'] = $linea->limit($pages, ($pages * ($per - 1)))->group_by('id')->join_related("imagen")->get();  
                $this->load->library('pagination'); //Cargamos la librería de paginación
                $config['base_url'] = base_url() . 'comunidades/index/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
                $linea = new disenador();
                $linea->group_by('id')->join_related("imagen")->get(); 
                $config['total_rows'] = $linea->result_count(); //calcula el número de filas  
                $config['use_page_numbers'] = TRUE; //paginador con numeros
                $config['per_page'] = $pages; //Número de registros mostrados por páginas
                $config['num_links'] = 2; //Número de links mostrados en la paginación
                $config['first_link'] = '<<'; //primer link
                $config['last_link'] = '>>'; //último link
                $config["uri_segment"] = 3; //el segmento de la paginación
                $config['next_link'] = '>'; //siguiente link
                $config['prev_link'] = '<'; //anterior link
                $config['cur_tag_open'] = '<a class="pagina_activa" href="#">';
                $config['cur_tag_close'] = '</a>';
                $this->pagination->initialize($config); //inicializamos la paginación 
                
		return $this->build();
	}

}
?>