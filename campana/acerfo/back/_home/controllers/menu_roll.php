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
class menu_roll extends Back_Controller {

    private $_mapper = 'menu_r';

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
        $noti = new menu_r();
        $noti->get_by_id($value);
        $ok = false;
        if ($noti->exists()) {
            if ($noti->delete()) {
                $ok = true;
            } else {
                $ok = false;
                $this->set_alert('Error al eliminar texto introductorio del menu.', 'error');
            }
        } else {
            $this->set_alert('Error al eliminar la texto introductorio del menu.', 'error');
            $ok = false;
        }

        $this->render_json($ok);
    }

   
    public function add() {
        $error = false;

        $this->form_validation->set_rules('text', 'Texto', 'required|min_length[5]|max_length[123]');
        $this->form_validation->set_rules('fmenu_items_id', 'Items del Menu', 'required');
        if (!$this->form_validation->run()) {
            $this->set_message("No se pudo crear o actualizar el items, favor revise los campos requeridos...!" . $this->form_validation->error_string());
            $error = true;
            // $this->resetTemp($estado);
        } else {
            $obj = new menu_r();
            $obj->get_by_fmenu_items_id($this->_post('fmenu_items_id'));
            if ($obj->exists()) {
                $obj->text = $this->_post('text');
                if (!$obj->save()) {
                    $error = true;
                     $this->set_message("Error Ingresando texto introductorio...!");
                }
            } else {
                $obj = new menu_r();
                $obj->id = "";
                $obj->validation = array();
                $obj->text = $this->_post('text');
                $obj->fmenu_items_id = $this->_post('fmenu_items_id');
                if (!$obj->save()) {
                    $error = true;
                     $this->set_message("Error Ingresando texto introductorio...!");
                }
            }
        }

        if (!$error)
           $this->set_message("Texto introductorio registrado con exito...!", 'info');

         return $this->render_json(!$error);
    }

    public function datos_ajax() {
        $salida = "";
        $this->db->select('cms_fmenu_text.*, cms_fmenu_items.item');
        $this->db->from('cms_fmenu_text');
        $this->db->join('cms_fmenu_items', 'cms_fmenu_items.id  = cms_fmenu_text.fmenu_items_id');
        $datos = $this->getresult($this->db->get());

        if (!empty($datos)) {

            foreach ($datos as $obj) {
                $salida .="  <tr class='odd gradeX parent-delete'>
                                        <td style='text-align: justify;'>" . $obj->text . "</td>
                                        <td>" . $obj->item . "</td>
                                        <td class='center' width='100px'>
                                        <span class='tip'>
                                                    <a href='".cms_url('home/menu_roll/delete')."' class='uibutton special' data-action='special-delete' data-field='id' data-value='".$obj->id."'>Eliminar</a>
                                        </span>
                                        </td>
                                    </tr>";
            }
        }
        echo $salida;
    }
    
    
    public function index() {
        $this->db->select('*');
        $this->db->from('cms_fmenu_items');
        $this->_data['items'] = $this->getresult($this->db->get());
        
         $this->db->select('cms_fmenu_text.*, cms_fmenu_items.item');
        $this->db->from('cms_fmenu_text');
        $this->db->join('cms_fmenu_items', 'cms_fmenu_items.id  = cms_fmenu_text.fmenu_items_id');
        
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('menu_roll/body', array('error' => ' '));
    }

}