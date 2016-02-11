<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 2-050049
     */

                        

class Productos extends Front_Controller {

	public function __construct() {
		parent::__construct();
                
                
	}

	public function index($page = NULL) {
		$productos = new Producto();
		$val = $this->_post('val');
		if(empty($val)) $val = 6;
		if($this->_post('bt_buscar') == 'BUSCAR'){
			$marca = new marca();
			$vehiculo = $this->_post('vehiculo');
			$marca->get_by_id($vehiculo);
			if($marca->exists()){
				$modelo = array();
				$tmpmodelo = $this->_post('modelo');
				if(!empty($tmpmodelo)){
					$modelo[] = $this->_post('modelo');
				} else {
					$modelo1 = new modelo();
					$modelo = $modelo1->select('id')->get_by_related('marca','id',$marca->id)->all_to_single_array("id");
					//$modelo1;
				}
				//echo "<pre>";print_r($modelo);echo "</pre>";exit();
				$productos->where_in_related('producto_modelo','modelo_id',$modelo);
				if($this->_post('tipo') != ""){
					echo "tipo ";
					$productos->where('tipo',$this->_post('tipo'));
				}
				if($this->_post('nombre') != ""){echo "nombre ";
					$productos->where('nombre',$this->_post('nombre')); 
				}
				if($this->_post('marca') != ""){echo "marca";
					$productos->where('marca',$this->_post('marca'));
				}
				$this->_data['productos'] = $prodtmp = $productos->join_related('imagen')->group_by('id','DESC')->get();
				$config['total_rows'] = $prodtmp->result_count();
			}else{
				$this->_data['productos'] = array();
			}
			$this->_data['paginacion'] = "";
		} else {
			$productos = new Producto();
			$config['total_rows'] = $productos->get()->count();
			$this->load->library('pagination');
			$this->_data['productos'] = $productos->join_related('imagen')->join_related('promociones')->group_by('id','DESC')->get_paged($page, $val);
			$config['base_url'] = base_url('productos/index/');
			$config['per_page'] = $val;
			$config['uri_segment'] = 3;
			$config['num_links'] = 2;
			$config['first_link'] = 'Primero';
			$config['last_link'] = 'Último';
			$config['cur_tag_open'] = '<a class="pag-act">';
			$config['cur_tag_close'] = '</a>';
			$config['next_link'] = 'Sig.';
			$config['prev_link'] = 'Ant.';
			$config['use_page_numbers'] = TRUE;
			$config['items_on_page'] = $productos->result_count();
			$uri = $this->uri->segment(3);
			if(!empty($uri)) $this->_data['pag'] = $this->uri->segment(3);
			else $this->_data['pag'] = "";
			$this->_data['per_page'] = $config['per_page'];
			$this->pagination->initialize($config);
			$this->_data['paginacion'] = $this->pagination->create_links();
		}
		$this->_data['total_productos'] = $config['total_rows'];
		if(!empty($page)) $this->_data['num_productos'] = ceil($config['total_rows'] / $page) * $config['total_rows'];
		else $this->_data['num_productos'] = "";
		if($this->_data['num_productos'] >= $this->_data['total_productos'])
			$this->_data['num_productos'] = $this->_data['total_productos'];
		elseif(empty($this->_data['num_productos'])) $this->_data['num_productos'] = $val;
		if($this->_data['num_productos'] > $config['total_rows']) $this->_data['num_productos'] = $config['total_rows'];
		//config paginator
		/*$this->_data['base_url'] = base_url()."productos/index/";
		$this->_data['num_pages'] = ceil($productos->result_count() / $val);
		$this->_data['primero'] = $this->_data['base_url'];
		$this->_data['ultimo'] = $this->_data['base_url'].$this->_data['num_pages'];
		if($per<$this->_data['num_pages']){
		$this->_data['sig'] = $this->_data['base_url'].($per+1);
		}else{
		$this->_data['sig'] = false;
		}
		if($per>1){
		$this->_data['ant'] = $this->_data['base_url'].($per-1);
		}else{
		$this->_data['ant'] = false;  
		}
		$this->_data['cur'] = $per;*/
		
		return $this->build();
	}
        
        public function productos_catgoria($id, $per = 1,$val =6) {
              $promoxiones = new producto(); 
               $this->_data['promociones'] = $promoxiones->join_related('imagen')->group_by('id')->join_related('promociones',NULL,TRUE,'INNER JOIN')->get(); 
            
               $productos = new Producto(); 
               $this->_data['productos']=$productos->join_related('imagen')->group_by('id')->where_related('categoria','id',$id)
                          ->or_where_related('categoria','categoria_id',$id)->limit(($val*$per),$val*($per-1))->get();
               
                    //config paginator
                    $this->_data['base_url'] = base_url()."productos/list_productos/".$id."/";
                    $this->_data['num_pages'] = ceil($productos->result_count() / $val);
                    $this->_data['primero'] = $this->_data['base_url'];
                    $this->_data['ultimo'] = $this->_data['base_url'].$this->_data['num_pages'];
                    if($per<$this->_data['num_pages']){
                      $this->_data['sig'] = $this->_data['base_url'].($per+1);
                    }else{
                      $this->_data['sig'] = false;
                    }
                     if($per>1){
                       $this->_data['ant'] = $this->_data['base_url'].($per-1);
                     }else{
                        $this->_data['ant'] = false;  
                     }
                    $this->_data['cur'] = $per;
               
               
               return $this->build();
        }
        
        public function filtro_modelo($id_marca = "") {
             $modelo = new modelo();
             $modelo->group_by('id')->get_by_related_marca('id',$id_marca);
             $html = "<option selected value=\"\">Modelo</option>";  
             foreach ($modelo as $mod) {
                 $html .= "<option value=\"".$mod->id."\">". $mod->nombre."</option>";
             }
             echo $html;
        }
        
         public function filtro_tipo($id_modelo = "") {
             $producto = new producto();
             $html = " <option selected value=\"\">Tipo de repuesto</option>";  
             $producto->join_related('imagen')->group_by('id')->get_by_related_modelo('id',$id_modelo);
             foreach ($producto as $mod) {
                 $html .= "<option value=\"".$mod->tipo."\">". $mod->tipo."</option>";
             }
             echo $html;
        }
        
         public function filtro_producto($tipo = "") {
             $producto = new producto();
             $html = " <option  selected value=\"\">Nombre del producto</option>"; 
             $producto->group_by('tipo')->where('tipo',$tipo)->get();
             foreach ($producto as $mod) {
                 $html .= "<option value=\"".$mod->nombre."\">". $mod->nombre."</option>";
             }
             echo $html;
        }
        
        public function filtro_producto_marca() {
             $nombre = $this->_get('v');
             $producto = new producto();
             $producto->group_by('marca')->where('nombre',$nombre)->get();
             $html = "<option selected value=\"\">Marca del producto</option>"; 
             foreach ($producto as $mod) {
                 $html .= "<option value=\"".$mod->marca."\">". $mod->marca."</option>";
             }
             echo $html;
        }

}
?>