<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 1-050049
 */
class _productos extends Back_Controller {

    protected $admin_area = true;
    public $model = 'producto';
    public $name = 'productos';
    public $title = 'Productos';

    public function __construct() {
        parent::__construct();
        $this->menu();
        $this->migas($this->current_menu);
        $this->add_modular_assets('js', 'action');
    }

    public function menu() {
        return $this->current_menu['Productos'] = cms_url('productos');
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

    public function recomendar() {
        $value = $this->_post('id');
        $obj = new $this->model();
        $obj->get_by_id($value);
        if ($obj->exists()) {
            $obj->recomendado = ($obj->recomendado == 1) ? 0 : 1;
            if ($obj->save()) {
                $this->output->set_header('Content-Type: application/json; charset=utf-8');
                return $this->render_json(true);
            } else {
                $this->output->set_header('Content-Type: application/json; charset=utf-8');
                $this->set_alert('No se pudo recomendar el producto seleccionado,' . $obj->error->string, 'error');
                return $this->render_json(false);
            }
        }
    }

    public function form_edit() {
        $obj = new producto();//$this->model();
        $id = $this->_post('id');
        $obj->get_by_id($id); /* o $obj->join_relate('mixed_model')->get_by_id($id); */
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden($obj->id, "id", 11);
        $data['form_content'] .= $this->input($obj->nombre, "nombre", $obj->get_rule("nombre","max_length"), "Titulo", "Maximo ".$obj->get_rule("nombre","max_length")." caracteres",$obj->is_rule("nombre","required"),"span5"); 
        $data['form_content'] .= $this->input($obj->marca, "marca", $obj->get_rule("marca","max_length"), "Marca del Producto", "Maximo ".$obj->get_rule("marca","max_length")." caracteres",$obj->is_rule("marca","required"),"span3"); 
        $data['form_content'] .= $this->input_money($obj->precio, "precio", "$", "Precio", "Maximo ".$obj->get_rule("precio","max_length")." caracteres",$obj->is_rule("precio","required"),"span2"); 
        $new_obj = new categoria();// $this->model();
        $data['form_content'] .= $this->combox($obj->categoria_id,$new_obj->get_subcategorias_list(),"categoria_id", "Sub-Categoria", "Seleccione una Sub-Categoria", $obj->is_rule("categoria_id","required"), "span5");
        $data['form_content'] .= $this->input($obj->tipo, "tipo", $obj->get_rule("tipo","max_length"), "Tipo de Producto", "Maximo ".$obj->get_rule("tipo","max_length")." caracteres",$obj->is_rule("tipo","required"),"span3"); 
        $new_obj1 = new modelo();// $this->model();
        $data['form_content'] .= $this->select_multiple($obj->selected_multiple_id($obj->id,'modelo'),$new_obj1->get_select_multiple('','nombre','marca_nombre','marca'),"modelos[]", "Sub-Categoria", "Seleccione una Sub-Categoria", false, "span5");
        $data['form_content'] .= $this->text($obj->descripcion, "descripcion", "Descripción", "Maximo ".$obj->get_rule("descripcion","max_length")." caracteres", $obj->is_rule("descripcion","required"), "span7", false, true, $obj->get_rule("descripcion","max_length"),3,4);
        $data['form_content'] .= $this->text($obj->garantia, "garantia", "Garantia", "Maximo ".$obj->get_rule("garantia","max_length")." caracteres", $obj->is_rule("garantia","required"), "span7", false, true, $obj->get_rule("garantia","max_length"),3,4);
        $data['form_content'] .= $this->text($obj->tiempo_entrega, "tiempo_entrega", "Tiempo de Entrega", "Maximo ".$obj->get_rule("tiempo_entrega","max_length")." caracteres", $obj->is_rule("tiempo_entrega","required"), "span7", false, true, $obj->get_rule("tiempo_entrega","max_length"),3,4);
        $data['direct_form'] = $this->name . '/add';
        return $this->buildajax('control/form', $data);
    }

    public function form_add() {
        $obj = new $this->model();
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden("", "id", 11);
        $data['form_content'] .= $this->input("", "nombre", $obj->get_rule("nombre","max_length"), "Titulo", "Maximo ".$obj->get_rule("nombre","max_length")." caracteres",$obj->is_rule("nombre","required"),"span5"); 
        $data['form_content'] .= $this->input("", "marca", $obj->get_rule("marca","max_length"), "Marca del Producto", "Maximo ".$obj->get_rule("marca","max_length")." caracteres",$obj->is_rule("marca","required"),"span3"); 
        $data['form_content'] .= $this->input_money(0, "precio", "$", "Precio", "Maximo ".$obj->get_rule("precio","max_length")." caracteres",$obj->is_rule("precio","required"),"span2"); 
        $new_obj = new categoria();// $this->model();
        $data['form_content'] .= $this->combox(0,$new_obj->get_subcategorias_list(),"categoria_id", "Sub Categoria", "Seleccione una Sub Categoria", $obj->is_rule("categoria_id","required"), "span5");
        $data['form_content'] .= $this->input("", "tipo", $obj->get_rule("tipo","max_length"), "Tipo de Producto", "Maximo ".$obj->get_rule("tipo","max_length")." caracteres",$obj->is_rule("tipo","required"),"span3"); 
        $new_obj1 = new modelo();// $this->model();
        $data['form_content'] .= $this->select_multiple(array(),$new_obj1->get_select_multiple('','nombre','marca_nombre','marca'),"modelos[]", "Modelos Asociados", "Seleccione un modelo asociado", false, "span5");
        $data['form_content'] .= $this->text("", "descripcion", "Descripción", "Maximo ".$obj->get_rule("descripcion","max_length")." caracteres", $obj->is_rule("descripcion","required"), "span7", false, true, $obj->get_rule("descripcion","max_length"),3,4);
        $data['form_content'] .= $this->text("", "garantia", "Garantia", "Maximo ".$obj->get_rule("garantia","max_length")." caracteres", $obj->is_rule("garantia","required"), "span7", false, true, $obj->get_rule("garantia","max_length"),3,4);
        $data['form_content'] .= $this->text("", "tiempo_entrega", "Tiempo de Entrega", "Maximo ".$obj->get_rule("tiempo_entrega","max_length")." caracteres", $obj->is_rule("tiempo_entrega","required"), "span7", false, true, $obj->get_rule("tiempo_entrega","max_length"),3,4);
       $data['direct_form'] = $this->name . '/add';
        return $this->buildajax('control/form', $data);
    }

    public function lista() {
        $obj = new $this->model();
        $data['datos'] = $obj->join_related('categorias')->where('categoria_id <>','')->get();
        $data['direct_form'] = $this->name . '/delete';
        $data['direct_recomendar'] = $this->name . '/recomendar'; 
        return $this->buildajax('control/lista', $data);
    }

    public function add() {
        $error = false;
        $msg = "";
        $obj = new producto(); //$this->model();
        $obj->get_by_id($this->_post('id'));
        if (!$obj->exists())
            $obj->id = "";
        $this->loadVar($obj);
        if (!$obj->save()) {
            $error = true;
            $msg = $obj->error->string;
            $this->deleteImg($this->data_id_obj_path($obj));
        }else{
            $modelos = $_REQUEST['modelos'];
            foreach ($modelos as $value) {
               $prduct_model = new producto_modelo(); 
               $prduct_model->id = ""; 
               $prduct_model->producto_id = $obj->id; 
               $prduct_model->modelo_id = $value; 
               $prduct_model->save();
            }
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
            $id_file = $this->data_id_obj_path($obj);
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

?>