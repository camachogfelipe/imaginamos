<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author Elbert Tous
 */
class lineas extends Back_Controller {

    private $_mapper = 'linea';
    private $dirImg = "./uploads/";

    public function __construct() {
        parent::__construct();
        $this->superadmin_area();
    }

    public function delete() {
        $value = $this->_get('value');
        $obj = new linea();
        $obj->get_by_id($value);
        $ok = false;
        if ($obj->exists()) {
            if ($obj->delete()) {
                $ok = true;
            } else {
                $ok = false;
                $this->set_message('Error al eliminar linea, por favor revise que no tenga categorias.', 'error');
            }
        } else {
            $this->set_message('La linea que desea eliminar no existe...!', 'error');
            $ok = false;
        }
        $this->render_json($ok);
    }

    
    public function datos_ajax() {
        $salida = "";
        $line = new linea(); 
        $datos = $line->get();
        if (!empty($datos)) {

            foreach ($datos as $obj) {
                $salida .="  <tr class='odd gradeX parent-delete'>
                                            <td>".$obj->titulo ." </td>
                                            <td>".$obj->subtitulo."</td>
                                            <td class='center' width='100px'>
                                                <span class='tip'>
                                                    <a href='".cms_url('lineas/lineas/delete')."' class='uibutton special' data-action='special-delete' data-value='".$obj->id."'>Eliminar</a>
                                                </span>
                                            </td> 
                                    </tr>";
            }
        }
        echo $salida;
    }

    //param string or model
    public function _setDataModel(&$obj) {
        if ($obj instanceof DataMapper)
            if (is_array($obj->fields)) {
                foreach ($obj->fields as $field) {
                    if ($field != 'id')
                        $obj->{$field} = $this->_post($field);
                }
            }
        return $obj;
    }

    public function add() {
        $error = false;
        $this->form_validation->set_rules('titulo', "Título", "required|min_length[5]|max_length[20]");
        $this->form_validation->set_rules('subtitulo', "Subtítulo", "required|min_length[5]|max_length[27]");
        if(!$this->form_validation->run()){
               $error = true;
               $this->set_message("Error Ingresando linea de produccion...!, favor intente mas tarde...!", 'error');
        }else{
            $line = new linea();
            $line->id = ""; 
            $this->_setDataModel($line);
            if(!$line->save()){
               $error = true;
               $this->set_message("Error Guardando linea de produccion...!, favor intente mas tarde...!", 'error');
            }    
        }
   
        if (!$error)
            $this->set_message("Linea registrada con exito...!", 'info');

        $this->render_json(!$error);
    }

    public function edit() {
        $datos = array();
        $object = new linea();
        $object->get_by_id($this->_post('id'));
        if ($object->exists()) {
            $datos = array(
                "ok" => true,
                "id" => $object->id,
                "titulo" => $object->titulo,
                "subtitulo" => $object->subtitulo);
        } else {
            $datos = array("ok" => false, "error" => true,
                "messages" => "No existe un objecto asociado" . $object->error->string);
        }
        echo json_encode($datos);
    }

    public function index() {
        $line = new linea(); 
        $this->_data['datos'] = $line->get();
        return $this->build('lineas_/body', array('error' => ' '));
    }

}