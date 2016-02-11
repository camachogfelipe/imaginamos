<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Seguridad extends Front_Controller {

    public function __construct() {
        parent::__construct();
          $redes = new\ redes_sociales();
        $this->_data['datos'] = $redes->get_datos();

        $contacto = new\ contacto();
        $this->_data['data_contact'] = $contacto->get_by_id(1);

        $departamentos = new\ departamentos();
        $this->_data['deptos'] = $departamentos->get_deptos();

        $obj = new novedad();
        $this->_data['novedades'] = $obj->join_related('imagen')
                        ->order_by('fecha', 'DESC')
                        ->limit(3)->get();
         $this->db->select('cms_imagen.*');
        $this->db->from('cms_imagen');
        $this->db->join('cms_logo', 'cms_imagen.id  = cms_logo.id');
        $this->_data['logos'] =  $this->getresult($this->db->get());
    }

    // ----------------------------------------------------------------------
//
//    public function index() {
//      
//
//        //  $banners = new\ banners();
//    //    $this->_data['dat_ban'] = array(); //$banners->get_banner();
//    //    $this->_data['categorias'] = $this->get_list();
//   
//    }

    public function index() {
        $this->_data['categorias'] = $this->get_list();
        $this->_data['pag_content'] = $this->categorias();
        $this->_data['dat_ban'] = array(); //$banners->get_banner();
            return $this->build('seguridad.php');
    }

    public function buildajax($view, $data = array()) {
       return $this->template->set_layout('../../front/home/views/layouts/beoro_ajax')->build($view, $data);
    }
    
    public function producto_details() {
       $data['count_cart'] = count($this->cart->contents()); 
        $id = !is_null($this->_post('id'))?$this->_post('id'):$this->session->userdata('post_id');
        $this->session->set_userdata('post_id',$id); 
        $producto = new producto(); 
        $data['is_cliente'] = $this->is_cliente(); 
        $data['is_proveedor'] = $this->is_proveedor(); 
        
        $producto->get_by_id($id); 
        $data['producto'] = $producto->join_related('grupo')->join_related('imagen')->get();
        $data['imagenes'] = $producto->join_related('imagen')->where(array('cms_producto_imagen.producto_id > '=> 0))->get_by_id($id);
        $prod_rec = new producto(); 
        $data['prod_rec'] = $prod_rec->join_related('imagen')->group_by('id')->where(array('id <>'=>$id,'recomendado' => '1' ))->get();     
        $obj1 = new accesorio();
        $data['accesorios'] = $obj1->join_related('imagen')->join_related('producto')->get_by_producto_id($id);
        return $this->buildajax('producto_details.php',$data);
    }
    
    public function productos() {

        $id = !is_null($this->_post('id'))?$this->_post('id'):$this->session->userdata('post_id');
        $this->session->set_userdata('post_id',$id); 
        $pro = new producto();
        $group = new grupo();
        $data['group_parent'] = $group->get_by_id($id); 
        $data['productos'] = $pro->join_related('imagen')->group_by('id')->get_by_grupo_id($id); 
        $obj1 = new producto();
        $data['images'] = $obj1->join_related('imagen')->where(array('cms_producto_imagen.producto_id > '=> 0))->get();

        return $this->buildajax('productos.php',$data);
         
    }
    
    public function categorias() {
   
        $cat = new categoria();
        $linea = new linea();
        $linea->get_by_titulo('SISTEMAS ELECTRÓNICOS DE SEGURIDAD');
        $data['categorias'] = $cat->join_related('imagen')->where('categoria_id',NULL)->get_by_linea_id($linea->id); 

        return $this->buildajax('categorias.php',$data);
        
    }
 
    public function subcategorias() {
 
        $id = !is_null($this->_post('id'))?$this->_post('id'):$this->session->userdata('post_id');
        $this->session->set_userdata('post_id',$id); 
        $cat = new categoria();
        $catparent = new categoria();
        $data['cat_parent'] = $catparent->get_by_id($id); 
        $linea = new linea();
        $linea->get_by_titulo('SISTEMAS ELECTRÓNICOS DE SEGURIDAD');
        $data['subcategorias'] = $cat->join_related('imagen')->where('categoria_id',$id)->get_by_linea_id($linea->id); 
        $grupo = new grupo(); 

        $data['grupos'] = $grupo->join_related('imagen')->get_by_categoria_id($id);     
        return $this->buildajax('subcategorias.php',$data);
    }
    
    public function grupos() {
        $data['pag'] = 3;
         $id = !is_null($this->_post('id'))?$this->_post('id'):$this->session->userdata('post_id');
        $this->session->set_userdata('post_id',$id); 
        $cat = new grupo();
        $catparent = new categoria();
        $data['cat_parent'] = $catparent->get_by_id($id); 
        $linea = new linea();
        $linea->get_by_titulo('SISTEMAS ELECTRÓNICOS DE SEGURIDAD');
        $data['grupos'] = $cat->join_related('imagen')->where('categoria_id',$id); 

        return $this->buildajax('grupos.php',$data);
    }
    
    
    public function get_list_categoria($parent, $level, $linea) {
        $categoria = new categoria();
        $cat = $categoria->get_where(array('categoria_id' => $parent, 'linea_id' => $linea));
        $html = "";
        $html.= "<ul>"; 
        $html .= "<li>".$this->items_group($parent,$level,$linea)."</li>";
        if ($cat->exists()) {
            foreach ($cat as $row) {
                $html .= "<li>";
                if ($cat->result_count() > 1) {
                    $html .= "<a class=\"menu-vn-t" . ($level + 1) . "\" href=\"javascript:void(0)\"  data-url='" . $row->url . "'>" . $row->categoria . "</a>";
                } elseif ($cat->result_count() == 1) {
                    $html .= "<a class=\"menu-vn-t" . ($level + 1) . "\" href=\"javascript:void(0)\" data-url=\"" . base_url() . "seguridad?line=" . $linea . "&cat=" . $row->id . "\"  >" . $row->categoria . "</a>";
               }
               $html .= "<ul>".$this->items_group($row->id,$level,$linea)."</ul>";
               $html .= "</li>";
            }
        }
        $html.= "</ul>"; 
        return $html;
    }
    
    public function get_list() {
           $html = "";
           $linea = new linea();
           $linea->get_by_titulo('SISTEMAS ELECTRÓNICOS DE SEGURIDAD');
           if($linea->exists()){
           $html .= "<ul class=\"menu-lt\">";
               $categoria = new categoria();
               $data = $categoria->where('categoria_id', NULL)->where('linea_id', $linea->id)->get();
               foreach ($data as $v) {
                  $html .= "<li class=\"menu-lt-act\"><a id=\"action_ajax\" data-url=\"".base_url()."seguridad/categorias\" data-datos=\"id=".$v->id."\" class=\"menu-vn-t2\" >".$v->categoria."</a>";  
                  $html .= $this->get_list_categoria($v->id, 2, $linea->id);
                  $html .= "</li>" ;
               }
           $html .= "</ul>";
          return $html; 
          }else{
              return "";
          }
      }    
    
    public function items_group($rowId, $level,$linea){
       $html = "";  
        if (!is_null($rowId)) {
                        $group = new grupo();
                        $group->get_by_categoria_id($rowId);
                        if ($group->exists()) {
                            foreach ($group as $gr) {
                                $html .= "<li><a class=\"menu-vn-t" . ($level + 2) . "\"  href=\"javascript:void(0)\"  >" . $gr->grupo . "</a></li>";
                            }
                        }
                    }
       return $html;              
    }
    
    // ----------------------------------------------------------------------
   
}
