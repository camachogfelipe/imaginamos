<?php

/**
 * @author rigobcastro
 */
class _productos extends Back_Controller {

    protected $admin_area = true;
    private $model = 'nosotros';

    public function __construct() {
        parent::__construct();
      $this->add_modular_assets('js', 'action');
    }

    // ----------------------------------------------------------------------

        public function index() {
     
            $data['pag'] = $this->session->userdata('page_productos');
            switch (trim($data['pag'])) {
                case 1:
                    $data['pag_content'] = $this->productos(); 
                    $data['pag_content_title'] = "Productos";
                break;    
                case 2:
                    $data['pag_content'] = $this->gallery();
                    $data['pag_content_title'] = "Galeria";
                break;    
                case 3:
                    $data['pag_content'] = $this->accesorios(); 
                    $data['pag_content_title'] = "Accesorios";
                break;
                default :
                    $this->session->set_userdata('page_productos','1');
                    $data['pag'] = 1;
                    $data['pag_content'] = $this->productos(); 
                    $data['pag_content_title'] = "Mis Productos";
                break; 
            }
        
         return $this->build('_index', $data);
    }
    
    

    public function buildajax($view, $data = array()) {
        return $this->template->set_layout(ADMINPATH . 'layouts/beoro_ajax')->build($view, $data);
    }

    public function productos() {
        $data['path_delete'] = cms_url('productos/delete_productos');
        $data['path_add'] = cms_url('productos/form_add_productos');
        $data['path_edit'] = cms_url('productos/form_edit_productos');
        $data['path_list'] = cms_url('productos/list_productos');
        $data['mpag_content'] = $this->list_productos();
        $data['pag'] = 1;
        $this->session->set_userdata('page_productos', '1');
        return $this->buildajax('_productos', $data);
    }

    public function form_edit_productos() {
        $producto = new producto();
        $id = $this->_post('id');
         $obj= new grupo();
        $data['grupos'] = $obj->get();
        $data['datos'] = $producto->join_related('grupo')->get_by_id($id);
        return $this->buildajax('productos/edit', $data);
    }

    public function form_add_productos() {
        $obj= new grupo();
        $data['grupos'] = $obj->get();
        $data['img'] = $this->load_imagen("");
        return $this->buildajax('productos/add', $data);
    }

    public function list_productos() {
        $obj1 = new producto();
        $data['datos'] = $obj1->join_related('grupo')->get();
        return $this->buildajax('productos/lista', $data);
    }

    public function load_imagen($img_src = "") {
        $img_src = is_file($img_src) ? $img_src : "./uploads/dummy_150x150.gif";
        $imgbinary = fread(fopen($img_src, "r"), filesize($img_src));
        $img_str = base64_encode($imgbinary);
        $img = '<img id="img" src="data:image/jpg;base64,' . $img_str . '" />';
        return $img;
    }

    public function recomendar() {
        $value = $this->_post('id');
        $obj = new producto();
        $obj->get_by_id($value);
         if ($obj->exists()) {
            $obj->recomendado = ($obj->recomendado==1)?0:1; 
            if($obj->save()){
               $this->output->set_header('Content-Type: application/json; charset=utf-8');
               return $this->render_json(true);
            }else{
                $this->output->set_header('Content-Type: application/json; charset=utf-8');
                $this->set_alert('No se pudo recomendar el producto seleccionado,'.$msg, 'error');
               return $this->render_json(false);
            }
         }
         
    }    
    
    public function delete() {
        $value = $this->_get('value');
        $obj = new producto();
        $obj->get_by_id($value);
        $error = false;
        $msg = "";
        if ($obj->exists()) {
            $path1 = $obj->path_folleto; 
            $path2 = $obj->path_info_tenica; 
            if (!$obj->delete()) {
                $msg = $obj->error->string;
                $$error = true;
            }else{
                $this->delete_files($path1); 
                $this->delete_files($path2); 
            }
        } else {
            $error = true;
        }
        if ($error)
            $this->set_alert('Error al eliminar datos,'.$msg, 'error');
        $this->render_json(!$error);
    }

    public function add() {
        $error = false;
        $obj = new producto();
        $obj->get_by_id($this->_post('id'));
        $msg = "";
        if (!$obj->exists()) {
            $obj->id = "";
        }
        $this->loadVar($obj); 
        $path1 = $this->upload_file('path_info_tenica','pdf|xls|docx');
        $path2 = $this->upload_file('path_folleto','pdf|xls|docx');
        if($path1 != false)
        $obj->path_info_tenica = $this->dirImg.$path1;
        if($path2 != false)
        $obj->path_folleto = $this->dirImg.$path2;
        if (!$obj->save()) {
            $error = true;
            $msg = $obj->error->string;
         }
        if ($error)
            $this->set_alert_session("Error guardando datos,".$msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');

        redirect(cms_url('productos'));
    }

  
    //------------------  Gallery  -------------------------//

    
    public function gallery() {
        $data['pag'] = 2;
        $data['path_add'] = cms_url('productos/form_add_gallery');
        $data['path_edit'] = cms_url('productos/form_edit_gallery');
        $data['path_list'] = cms_url('productos/list_gallery');
        $data['mpag_content'] = $this->list_gallery();
        $this->session->set_userdata('page_productos', '2');
        return $this->buildajax('_gallery', $data);
    }

    public function form_edit_gallery() {
        $id = $this->_post('id');
        $obj = new producto();
        $data['prod'] = $obj->get();
        $not = new imagen();
        $data['datos'] = $not->join_related('producto')->get_by_id($id);
        return $this->buildajax('gallery/edit', $data);
    }

    public function form_add_gallery() {
         $obj = new producto();
        $data['prod'] = $obj->get();
        $data['img'] = $this->load_imagen("");
        return $this->buildajax('gallery/add', $data);
    }

    public function list_gallery() {
        $obj1 = new producto();
        $data['datos'] = $obj1->join_related('imagen')->where(array('cms_producto_imagen.producto_id > '=> 0))->get();
        return $this->buildajax('gallery/lista', $data);
    }
    
    
     public function delete_gallery() {
        $value = $this->_get('value');
        $related_value = $this->_get('related_value');
        $error = false; 

        $obj = new producto();
        $obj->get_by_id($value);

        $img = new imagen();
        $img->get_by_id($related_value);
        $path  = $img->path;

        if($obj->exists()){
            if($obj->delete($img)){
                $this->delete_files($path);
            }else{
                $msg = $obj->error->string;
                $error = true;
            }
        }else{
            $msg = "El objecto seleccionado no existe";
            $error = true;
        }
        if ($error)
            $this->set_alert('Error al eliminar datos,'.$msg, 'error');
      $this->render_json(!$error);
    }


    public function add_gallery() {
        if(is_numeric($this->_get('id'))){
        $error = false;
        $dato = $this->upload();
        if ($dato !== false)
        {
            $imagen = new imagen();
            $imagen->id = "";
            $imagen->path = $this->dirImg.$dato;
            if ($imagen->save())
            {
                $gallery = new producto();
                $gallery->get_by_id($this->_get('id'));
                
                
                if (!$gallery->save_imagen($imagen))
                {
                    $imagen->delete();
                    @unlink($this->dirImg . $dato);
                    $error = true;
                }
            } else
            {
                @unlink($this->dirImg . $dato);
                $error = true;
            }
        } else
        {
            $error = true;
        }
      }else{
       $error = true;
      }
          ($error) ? $this->Error_No_Found(json_encode(array('ok' => 'false'))) : json_encode(array('ok' => 'true'));

    }
    
    
     //------------------  Accesorios  -------------------------//   
    

    public function accesorios() {
        $data['pag'] = 3;
        $data['path_add'] = cms_url('productos/form_add_accesorios');
        $data['path_edit'] = cms_url('productos/form_edit_accesorios');
        $data['path_list'] = cms_url('productos/list_accesorios');
        $data['mpag_content'] = $this->list_accesorios();
        $this->session->set_userdata('page_productos', '3');
        return $this->buildajax('_accesorios', $data);
    }

    public function form_edit_accesorios() {
        $id = $this->_post('id');
        $obj = new producto();
        $data['prod'] = $obj->get();
        $not = new accesorio();
        $data['datos'] = $not->join_related('imagen')->join_related('producto')->get_by_id($id);
        return $this->buildajax('accesorios/edit', $data);
    }

    public function form_add_accesorios() {
        $obj = new producto();
        $data['prod'] = $obj->get();
        $data['img'] = $this->load_imagen("");
        return $this->buildajax('accesorios/add', $data);
    }

    public function list_accesorios() {
         $obj1 = new accesorio();
        $data['datos'] = $obj1->join_related('imagen')->join_related('producto')->get();
        return $this->buildajax('accesorios/lista', $data);
    }
    
     public function delete_accesorios() {
        $value = $this->_get('value');
        $obj = new accesorio();
        $obj->get_by_id($value);
        $error = false;
        $msg = "";
        if ($obj->exists()) {
             $img = new imagen(); 
             $img->get_by_id($obj->imagen_id); 
             $path = $img->path;  
            if (!$obj->delete()) {
                $msg = $obj->error->string;
                $$error = true;
            }else{
                $img->delete();
                $this->delete_files($path);
            }
        } else {
            $error = true;
        }
        if ($error)
            $this->set_alert('Error al eliminar datos,'.$msg, 'error');
        $this->render_json(!$error);
    }

    public function add_accesorios() {
         $error = false;
         $obj = new accesorio();
         $obj->get_by_id($this->_post('id'));
         $msg = "";
         $this->loadVar($obj);
         if (!$obj->exists()) {
            $obj->id = "";
         }
          if (!$obj->save()) {
              $error = true;
              $msg = $obj->error->string;
          }
        if ($error)
            $this->set_alert_session("Error guardando datos,".$msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url('productos'));
    }


}