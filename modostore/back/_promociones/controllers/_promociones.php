<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 1-050049
 */
class _promociones extends Back_Controller {

    protected $admin_area = true;
    public $model = 'promociones';
    public $name = 'promociones';
    public $title = 'Productos del Mes';

    public function __construct() {
        parent::__construct();
        $this->menu();
        $this->migas($this->current_menu);
        $this->add_modular_assets('js', 'autoload');  
    }

    public function menu() {
        return $this->current_menu['Productos']['Productos del Mes'] = cms_url('promociones');
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
        $obj = new $this->model();
        $id = $this->_post('id');
        $obj->get_by_id($id); /* o $obj->join_relate('mixed_model')->get_by_id($id); */
        $data['form_content'] = "";
        $list = new producto();
        $data['form_content'] .= $this->combox($obj->producto_id, $list->get_data('', 'nombre'), "producto_id", "Lista de Productos", "Seleccione un Producto", $obj->is_rule("producto_id", "required"), "span5");
        $data['form_content'] .= $this->input_money($obj->antes, "antes", "$", "Precio Anterior", "No se permiten caracteres", $obj->is_rule("antes", "required"), "span3");
        $data['form_content'] .= $this->input_money($obj->ahora, "ahora", "$", "Precio Promoción", "No se permiten caracteres", $obj->is_rule("ahora", "required"), "span3");

        /*
          Ejemplos:

          From Imagen
          $data['form_content'] .= $this->imagen($obj->imagen_id, $obj->imagen_path, "Imagen", "0px × 0px",false,$obj->is_rule("imagen_id","required"),"span3");
          $data['form_content'] .= $this->imagen($obj->imagen1_id, $obj->imagen1_path, "Imagen 1", "0px × 0px",false,$obj->is_rule("imagen1_id","required"),"span3",1);
          \.
          \.
          \.
          $data['form_content'] .= $this->imagen($obj->imagen$i_id, $obj->imagen$i_path, "Imagen $i", "0px × 0px",false,$obj->is_rule("imagen$i_id","required"),"span3",$i);

          \Form Input
          $data['form_content'] .= $this->input($obj->titulo, "titulo", $obj->get_rule("titulo","max_length"), "Titulo", "Maximo ".$obj->get_rule("titulo","max_length")." caracteres",$obj->is_rule("titulo","required"),"span3");

          Form Input
          $data['form_content'] .= $this->inputColor($obj->color, "color", "Color", "Formato Hexadecimal",$obj->is_rule("color","required"),"span2","hex");

          Form InputTime
          $data['form_content'] .= $this->inputTime($obj->hora, "hora", "Hora", "Formato 12 Horas",$obj->is_rule("hora","required"),"span2","tp-default");

          From Date
          $data['form_content'] .= $this->inputDate($obj->fecha, "fecha", "Fecha", "",$obj->is_rule("fecha","required"),"span2","dd-mm-yyyy");

          Form Text (Count Limit)
          $data['form_content'] .= $this->text($obj->texto, "texto", "Texto", "Maximo ".$obj->get_rule("texto","max_length")." caracteres", $obj->is_rule("texto","required"), "span8", false, true, $obj->get_rule("texto","max_length"),3,4);

          Form Text (wysiwy)
          $data['form_content'] .= $this->text($obj->texto, "texto", "Texto", "Maximo ".$obj->get_rule("texto","max_length")." caracteres", $obj->is_rule("texto","required"), "span8", true, false, $obj->get_rule("texto","max_length"),3,4);

          Form Combo Box
          $list_obj = new mixed_model();
          $data['form_content'] .= $this->combox($obj->item_id,$list_obj->get_data('','campo'),"item_id", "Lista", "Seleccione un Items", $obj->is_rule("item_id","required"), "span5");
         */

        $data['direct_form'] = $this->name . '/add';
        return $this->buildajax('control/form', $data);
    }

    public function form_add() {
        $obj = new $this->model();
        $data['form_content'] = "";
        $data['form_content'] .= $this->inputHidden("", "id", 11);
        $list = new producto();
        $data['form_content'] .= $this->combox(0, $list->get_data('', 'nombre'), "producto_id", "Lista de Productos", "Seleccione un Producto", $obj->is_rule("producto_id", "required"), "span5");
        $data['form_content'] .= $this->input_money(0, "antes", "$", "Precio Anterior", "No se permiten caracteres", $obj->is_rule("antes", "required"), "span3");
        $data['form_content'] .= $this->input_money(0, "ahora", "$", "Precio Promoción", "No se permiten caracteres", $obj->is_rule("ahora", "required"), "span3");

        /*
          Ejemplos:

          From Imagen
          $data['form_content'] .= $this->imagen("", NULL, "Imagen", "0px × 0px",false,$obj->is_rule("imagen_id","required"),"span3");
          $data['form_content'] .= $this->imagen("", NULL, "Imagen 1", "0px × 0px",false,$obj->is_rule("imagen1_id","required"),"span3",1);
          \.
          \.
          \.
          $data['form_content'] .= $this->imagen("", NULL, "Imagen $i", "0px × 0px",false,$obj->is_rule("imagen$i_id","required"),"span3",$i);

          \Form Input
          $data['form_content'] .= $this->input("", "titulo", $obj->get_rule("titulo","max_length"), "Titulo", "Maximo ".$obj->get_rule("titulo","max_length")." caracteres",$obj->is_rule("titulo","required"),"span3");

          Form Input
          $data['form_content'] .= $this->inputColor("", "color", "Color", "Formato Hexadecimal",$obj->is_rule("color","required"),"span2","hex");

          Form InputTime
          $data['form_content'] .= $this->inputTime("", "hora", "Hora", "Formato 12 Horas",$obj->is_rule("hora","required"),"span2","tp-default");

          From Date
          $data['form_content'] .= $this->inputDate("", "fecha", "Fecha", "",$obj->is_rule("fecha","required"),"span2","dd-mm-yyyy");

          Form Text (Count Limit)
          $data['form_content'] .= $this->text("", "texto", "Texto", "Maximo ".$obj->get_rule("texto","max_length")." caracteres", $obj->is_rule("texto","required"), "span8", false, true, $obj->get_rule("texto","max_length"),3,4);

          Form Text (wysiwy)
          $data['form_content'] .= $this->text("", "texto", "Texto", "Maximo ".$obj->get_rule("texto","max_length")." caracteres", $obj->is_rule("texto","required"), "span8", true, false, $obj->get_rule("texto","max_length"),3,4);

          Form Combo Box
          $list_obj = new mixed_model();
          $data['form_content'] .= $this->combox("",$list_obj->get_data('','campo'),"item_id", "Lista", "Seleccione un Items", $obj->is_rule("item_id","required"), "span5");
         */

        $data['direct_form'] = $this->name . '/add';
        return $this->buildajax('control/form', $data);
    }

    public function lista() {
        $obj = new $this->model();
        $data['datos'] = $obj->join_related('producto')->get(); /*  $obj->join_related('imagen')->get(); */
        $data['direct_form'] = $this->name . '/delete';
        return $this->buildajax('control/lista', $data);
    }

    public function add() {
        $error = false;
        $msg = "";
        $obj = new $this->model();
        $obj->get_by_id($this->_post('id'));
        if (!$obj->exists())
            $obj->id = "";
        $this->loadVar($obj);
        if (!$obj->save()) {
            $error = true;
            $msg = $obj->error->string;
            $this->deleteImg($this->data_id_obj_path($obj));
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