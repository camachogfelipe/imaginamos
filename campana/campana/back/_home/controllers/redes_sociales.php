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
class redes_sociales extends Back_Controller {

    private $_mapper = 'red_social';

    public function __construct() {
        parent::__construct();
        $this->superadmin_area();
    }

    function getresult(&$consulta) {
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        }
    }

    public function delete() {
        $value = $this->_get('value');
        $noti = new red_social();
        $noti->get_by_id($value);
        $ok = false;
        if ($noti->exists()) {
            if ($noti->delete()) {
                $ok = true;
            } else {
                $ok = false;
                $this->set_alert('Error al eliminar red social.', 'error');
            }
        } else {
            $this->set_alert('Error al eliminar al eliminar red social.', 'error');
            $ok = false;
        }

        $this->render_json($ok);
    }

    public function datos_ajax() {
        $salida = "";
        $this->db->select('cms_redes_sociales.*, cms_type_social.name');
        $this->db->from('cms_redes_sociales');
        $this->db->join('cms_type_social', 'cms_type_social.id  = cms_redes_sociales.type_social_id');
        $datos = $this->getresult($this->db->get());

        if (!empty($datos)) {

            foreach ($datos as $obj) {
                $salida .="  <tr class='odd gradeX parent-delete'>
                                        <td>" . $obj->name . "</td>
                                        <td>" . $obj->direccion . "</td>
                                        <td class='center' width='100px'>
                                        <span class='tip'>
                                                    <a href='".cms_url('home/redes_sociales/delete')."' class='uibutton special' data-action='special-delete' data-field='id' data-value='".$obj->id."'>Eliminar</a>
                                        </span>
                                        </td>
                                    </tr>";
            }
        }
        echo $salida;
    }

    public function add() {
        $error = false;
     
        $this->form_validation->set_rules('direccion', 'Direccion', 'required|min_length[30]|max_length[200]');
        $this->form_validation->set_rules('type_social_id', 'Tipo de Red Social', 'required');
        if (!$this->form_validation->run()) {
            $msg = "No se pudo crear o actualizar el items, favor revise los campos requeridos...!" . $this->form_validation->error_string();
            $error = true;
            // $this->resetTemp($estado);
        } else {
            $obj = new red_social();
            $obj->get_by_type_social_id($this->_post('type_social_id'));
            if ($obj->exists()) {
                   $obj->direccion = $this->_post('direccion');
                   if (!$obj->save()) {
                      $error = true;
                      $msg = "Error Ingresando Red Social...!";
                   }
            } else {
                $obj = new red_social();
                $obj->id = "";
                $obj->validation = array();
                $obj->direccion = $this->_post('direccion');
                $obj->type_social_id = $this->_post('type_social_id');
                if (!$obj->save()) {
                    $error = true;
                    $msg = "Error Ingresando Red Social...!";
                }
            }
        }

        if ($error)
            $this->set_message($msg, 'error');
        else
            $this->set_message("Red Social registrada o actualizada con exito...!", 'info');

        $this->render_json(!$error);
    }

    public function index() {
        $this->db->select('*');
        $this->db->from('cms_type_social');
        $this->_data['items'] = $this->getresult($this->db->get());
        $this->db->select('cms_redes_sociales.*, cms_type_social.name');
        $this->db->from('cms_redes_sociales');
        $this->db->join('cms_type_social', 'cms_type_social.id  = cms_redes_sociales.type_social_id');
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('redes_sociales/body', array('error' => ' '));
    }

}