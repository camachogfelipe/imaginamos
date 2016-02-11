<?php

/**
 * @author Elbert Tous Ballesteros
 */
class _subcategorias extends Back_Controller {

    protected $admin_area = true;
    public $model = 'categoria';
    public $name = "subcategorias";
    public $title = 'Sub - Categorias';

    public function __construct() {
        parent::__construct();
        $this->menu();
        $this->migas($this->current_menu);
    }

    public function menu() {
        return $this->current_menu['Productos & Categorias']['Sub - Categorias'] = cms_url('registro_compras');
    }

    public function index() {
        $data['pag'] = $this->session->userdata('page_' . $this->name);
        $this->session->set_userdata('page_' . $this->name, '1');
        $data['title_page'] = $this->title;
        $data['pag'] = 1;
        $data['migas'] = $this->miga;
        $data['pag_content'] = $this->contents();
        $data['pag_content_title'] = ucwords($this->title);
        return $this->build('index', $data);
    }

    public function contents() {
        $data['path_delete'] = cms_url($this->name . '/delete');
        $data['path_add'] = cms_url($this->name . '/form_add');
        $data['path_edit'] = cms_url($this->name . '/form_edit');
        $data['path_list'] = cms_url($this->name . '/lista');
        $data['mpag_content'] = $this->lista();
        $data['pag'] = 1;
        $this->session->set_userdata('page_' . $this->name, '1');
        return $this->buildajax('control', $data);
    }

    public function form_edit() {
        $obj = new categoria(); // $this->model();
        $id = $this->_post('id');
        $obj->get_by_id($id);
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);
        $data['form_content'] .= $this->input($obj->titulo, "titulo", $obj->get_rule("titulo", "max_length"), "Titulo", "Maximo " . $obj->get_rule("titulo", "max_length") . " caracteres", $obj->is_rule("titulo", "required"), "span5");
        $new_obj = new categoria(); // $this->model();
        $data['form_content'] .= $this->combox($obj->categoria_id, $new_obj->get_categoria_list('titulo',array('categoria_id'=>NULL)), "categoria_id", "Categoria Padre", "Seleccione una categoria padre", $obj->is_rule("categoria_id", "required"), "span5");
        $data['direct_form'] = $this->name . '/add';
        return $this->buildajax('control/form', $data);
    }

    public function form_add() {
        $obj = new $this->model();
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden("", "id", 11);
        $data['form_content'] .= $this->input("", "titulo", $obj->get_rule("titulo", "max_length"), "Titulo", "Maximo " . $obj->get_rule("titulo", "max_length") . " caracteres", $obj->is_rule("titulo", "required"), "span5");
        $new_obj = new categoria(); // $this->model();
        $data['form_content'] .= $this->combox(0, $new_obj->get_categoria_list('titulo',array('categoria_id'=>NULL)), "categoria_id", "Categoria Padre", "Seleccione una categoria padre", $new_obj->is_rule("categoria_id", "required"), "span5");
        $data['direct_form'] = $this->name . '/add';
        return $this->buildajax('control/form', $data);
    }

    public function lista() {
        $obj = new $this->model();
        $data['datos'] = $obj->join_related('categoria_basic')->where('categoria_id <>', '')->get();
        $data['direct_form'] = $this->name . '/delete';
        return $this->buildajax('control/lista', $data);
    }

    public function add() {
        $error = false;
        $msg = "";
        $obj = new categoria();
        $obj->get_by_id($this->_post('id'));
        if (!$obj->exists())
            $obj->id = "";
        $this->loadVar($obj);
        if (!$obj->save()) {
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
            $id_file = $obj->imagen_id;
            if (!$obj->delete()) {
                $error = true;
                $msg = $obj->error->string;
            }
            $this->deleteImg($id_file);
        } else {
            $error = true;
            $msg = "No existe item...!";
        }
        if ($error)
            $this->set_alert('Error al eliminar datos' . ', ' . $msg, 'error');
        else {
            $this->set_alert_session("Datos eliminados con éxito...!", 'info');
        }
        return $this->render_json(!$error);
    }

}
