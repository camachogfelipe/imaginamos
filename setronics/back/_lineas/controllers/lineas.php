<?php

/**
 * @author rigobcastro
 */
class lineas extends Back_Controller {

    protected $admin_area = true;
    private $model = 'linea';

    public function __construct() {
        parent::__construct();
        //   $this->add_modular_assets('js', 'ajax.update');
    }

    // ----------------------------------------------------------------------

    public function delete() {
        $value = $this->_get('value');
        $obj = new linea();
        $obj->get_by_id($value);
        $error = false;
        if ($obj->exists()) {
            if (!$obj->delete()) {
                $$error = true;
            }
        } else {
            $error = true;
        }
        if ($error)
            $this->set_alert('Error al eliminar datos.', 'error');
        $this->render_json(!$error);
    }

    public function index() {
        $linea = new linea();
        $this->_data['datos'] = $linea->get();
        return $this->build('_lineas');
    }

    public function add() {
        $error = false;
        $obj = new linea();
        $obj->id = $this->_post('id');
        if (!$obj->exists()) {
            $obj->id = "";
        }
        $this->loadVar($obj);
        if (!$obj->save()) {
            $error = true;
        }
        if ($error)
            $this->set_alert_session("Error guardando datos, favor intente mas tarde...!", 'error');
        else
            $this->set_alert_session("Datos Guardados con exito...!", 'info');

        redirect(cms_url('lineas/lineas'));
    }

    public function edit() {
        $object = new linea(); 
        $object->get();
        echo $this->_get_json_datos($object);
     }

}