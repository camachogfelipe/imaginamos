<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 1-050049
 */
class _venta_productos extends Back_Controller {

    protected $admin_area = true;
    public $model = 'venta';
    public $name = 'venta_productos';
    public $title = 'Registro de Ventas';

    public function __construct() {
        parent::__construct();
        $this->menu();
        $this->migas($this->current_menu);
        $this->add_modular_assets('js', 'action');
    }

    public function menu() {
        return $this->current_menu['Lineas, Productos & Categorias']['Registro de Ventas'] = cms_url('venta_productos');
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
        $obj = new producto_venta();
        $id = $this->_post('id');
        $data['datos'] = $obj->join_related('venta')->join_related('producto')->order_by('id')->get_by_related_venta('id', $id);
        return $this->buildajax('control/lista_productos', $data);
    }
    
    public function get_chart() {
        $obj = new venta();
        
        $datos = $obj->get();
        $envios = array(); 
        foreach ($datos as $data) {
             $date = new DateTime($data->fecha);
             $p = $data->get_productos();
             $envio[0] = $date->getTimestamp()."000";
             $envio[1] = $p->result_count();
             
             array_push($envios, $envio);
        }  
        
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($envios,JSON_NUMERIC_CHECK);
    }



    public function estado() {
        $value = $this->_post('id');
        $obj = new $this->model();
        $obj->get_by_id($value);
        if ($obj->exists()) {
            $obj->estado = ($obj->estado == 1) ? 0 : 1;
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

    public function lista() {
        $obj = new $this->model();
        $data['datos'] = $obj->get();
        $data['direct_estado'] = cms_url($this->name . '/estado');
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