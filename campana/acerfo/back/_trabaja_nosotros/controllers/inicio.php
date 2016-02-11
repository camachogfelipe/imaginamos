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
class inicio extends Back_Controller {

   
    private $_mapper = 'trabaje_nosotros';
    
       private $dirImg = "./uploads/";

    public function __construct() {
        parent::__construct();
        $this->superadmin_area();
    }

    public function delete_files($delete_files) {
        if (!is_array($delete_files)) {
            $delete_files = array($delete_files);
        }
        if (!empty($delete_files)) {
            foreach ($delete_files as $_delete_file) {
                if (!empty($_delete_file)) {
                    $file = realpath($this->dirImg . $_delete_file);
                    if (file_exists($file)) {
                        $pathinfo = pathinfo($file);
                        if (!empty($pathinfo)) {
                            $thumb = $pathinfo['dirname'] . DS . $pathinfo['filename'] . '_thumb.' . $pathinfo['extension'];
                            if (file_exists($thumb)) {
                                @unlink($thumb);
                            }
                        }
                        @unlink($file);
                    }
                }
            }
        }
    }

    public function delete() {
        $value = $this->_get('value');
        $obj = new postulado();
        $obj->get_by_id($value);
        $ok = false;
        if ($obj->exists()) {
           if ($obj->delete()) {
                $ok = true;
            } else {
                $ok = false;
                $this->set_alert('Error al eliminar postulado.', 'error');
            }
        } else {
            $this->set_alert('El postulado que desea eliminar no Existe..!.', 'error');
            $ok = false;
        }

        $this->render_json($ok);
    }

    function getresult(&$consulta) {
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        }
    }

    function simple_upload($field, $types = 'gif|jpg|png', $maxsize = 8192, $encryt = TRUE) {
        $msg = true;
        $file_element_name = $field;
        $config['upload_path'] = $this->dirImg;
        $config['allowed_types'] = $types;
        $config['max_size'] = $maxsize; //1024 * 8;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($file_element_name)) {
            $msg = false;
        } else {
            $data = $this->upload->data();
            $msg = $data['file_name'];
        }
        @unlink($_FILES[$file_element_name]);
        return $msg;
    }


    function upload_img() {
        echo trim($this->simple_upload('img', 'jpg|png'));
    }
    
  
    public function add() {
        $error = false;
        $obj = new trabaje_nosotros();
        $obj->get_by_id($this->_post('id'));
        if($obj->exists()){
          if ($this->_post('img') != "-1") {
            $img = new media();
            $img->id = "";
            $img->path = $this->dirImg . trim($this->_post('img'));
            $img->type = 'i';
            if ($img->save()){
                $obj->cms_media_id = $img->id;
              //  $obj->subtitulo = $this->_post('subtitulo');
                if (!$obj->save()) {
                   if ($this->_post('img') != "-1") {
                     $img->delete();
                     $error = true;
                     @unlink($this->dirImg . trim($this->_post('img')));
                   }
                }
            }else {
                $this->set_message("Error Ingresando Imagen...!, favor intente mas tarde...!", 'error');
                $error = true;
                @unlink($this->dirImg . trim($this->_post('img')));
            }
          }else{
               $error = true; 
               $this->set_message("Error Imagen no valida...!, favor contacte con el administrador...!", 'error');  
         }
        }else{
            $error = true; 
            $this->set_message("No se puede crear este objecto...!, favor contacte con el administrador...!", 'error');  
        }
        if (!$error)
            $this->set_message("Imagen actualizada con éxito...!", 'info');

        $this->render_json(!$error);
    }

    public function postuladosajax() {
        $vacante_id = $this->_post('id');
        $this->db->select('cms_postulado.*, cms_vancante.nombre as vacante');
        $this->db->from('cms_postulado');
        $this->db->join('cms_vancante', 'cms_vancante.id  = cms_postulado.vancante_id');
        $this->db->where('cms_vancante.id',$vacante_id);
        $this->_data['datos'] = $this->getresult($this->db->get());
        $this->_data['error'] = ' ';
        return $this->template
                    ->set_layout(ADMINPATH . 'layouts/page_content')
                    ->build('index/postulados', $this->_data);     
    }
    
    public function index() {
        $tr = new trabaje_nosotros(); 
        $tr->get_by_id('1');
        $media = new media(); 
        $media->get_by_id($tr->cms_media_id);
        $this->_data['obj_id'] = $tr->id;
        $this->_data['obj_img'] = str_replace($this->dirImg, "", $media->path);
        $this->db->select('cms_postulado.*, cms_vancante.nombre as vacante');
        $this->db->from('cms_postulado');
        $this->db->join('cms_vancante', 'cms_vancante.id  = cms_postulado.vancante_id');
        
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('index/body', array('error' => ' '));
    }
}