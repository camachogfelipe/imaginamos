<?php

/**
 * @author Elbert Tous Ballesteros
 */
class _galeria_producto extends Back_Controller {

    protected $admin_area = true;
    public $model = 'imagen';
    public $name = "galeria_producto";

    public function __construct() {
        parent::__construct();
    
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Galeria Productos"; 
        $data['pag'] = 1;
        $data['pag_content'] = $this->init();
        $data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
        return $this->build('_index', $data);
    }

   

    public function init() {
        $data['path_delete'] = cms_url($this->name.'/delete');
        $data['path_add'] = cms_url($this->name.'/form_add');
        $data['path_edit'] = cms_url($this->name.'/form_edit');
        $data['path_list'] = cms_url($this->name.'/lista');
        $data['mpag_content'] = $this->lista();
        $data['pag'] = 1;
        $this->session->set_userdata('page_'.$this->name, '1');
        return $this->buildajax('_'.$this->name, $data);
    }

    public function form_edit() {
        $obj = new imagen();// $this->model();
        $id = $this->_post('id');
        $obj->join_related('producto')->get_by_id($id);
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11); 
        $data['form_content'] .= $this->imagen($obj->id, $obj->path, "Imagen", "212px x 208px",false,true,"span3");
        $new_obj = new producto();// $this->model();
        $data['form_content'] .= $this->combox($obj->producto_id,$new_obj->get_producto_list(),"producto_id", "Productos", "Seleccione un producto asociado", true, "span5");
        $data['direct_form'] = $this->name.'/add'; 
        return $this->buildajax($this->name.'/form', $data);
    }

    public function form_add() {
        $obj = new $this->model();
        $data['form_content'] = ""; 
        $data['form_content'] .= $this->inputHidden("", "id", 11); 
        $data['form_content'] .= $this->imagen($obj->id, $obj->path, "Imagen", "212px x 208px",false,true,"span3");
        $new_obj = new producto();
        $data['form_content'] .= $this->combox(0,$new_obj->get_producto_list(),"producto_id", "Productos", "Seleccione un producto asociado", true, "span5"); 
        $data['direct_form'] = $this->name.'/add'; 
        return $this->buildajax($this->name.'/form', $data);
    }

    public function lista() {
        $obj = new  $this->model();
        $data['datos'] = $obj->join_related('producto')->where('cms_imagen_producto.producto_id <>','')->get();
        $data['direct_form'] = $this->name.'/delete'; 
        return $this->buildajax($this->name.'/lista', $data);
    }

    public function add() {
        $error = false;
        $msg = "";
        $obj = new imagen(); // $this->model();
        $obj->get_by_id($this->_post('id'));
        if (!$obj->exists())
            $obj->id = "";

        $prod = new producto();
        $prod->get_by_id($this->_post('producto_id'));
        if ($prod->exists()) {

            $dato = $this->simple_upload("imagen_path");
            if ($dato !== false) {
             
                $this->delete_files($obj->path);
                $obj->path = $this->dirImg . $dato;
                if (!$obj->save($prod, 'producto')) {
                    $error = true;
                    $msg = $obj->error->string;
                }
            }else{
               $error = true;
               $msg = "error cargando imagen"; 
            }
        } else {
            $error = true;
            $msg = "El producto selecionado no existe";
        }
        if (!$obj->save($prod, 'producto')) {
            $error = true;
            $msg = $obj->error->string;
        }
        if ($error)
            $this->set_alert_session("Error guardando datos," . $msg, 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');
        redirect(cms_url($this->name));
    }

    public function delete() {
        $error = false;
        $obj = new $this->model();
        $obj->get_by_id($this->_post('value'));
        $msg = "";
        if ($obj->exists()) {
            $this->delete_files($img->path); 
            if(!$img->delete()){
                 $error = true;
                 $msg = "Error eliminando item...!";
            } 
        } else {
            $error = true;
            $msg = "No existe item...!";
        }
        if ($error)
            $this->set_alert('Error al eliminar datos' . ', ' . $msg, 'error');
        else{
           $this->set_alert_session("Datos eliminados con éxito...!", 'info');
        }
        return $this->render_json(!$error);
    }
    
    
  
}