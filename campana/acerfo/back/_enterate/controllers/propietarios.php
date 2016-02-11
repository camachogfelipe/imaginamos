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
class propietarios extends Back_Controller {

    private $_mapper = 'propietario';
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
        $noti = new propietario();
        $noti->get_by_id($value);
        $ok = false;
        $v1 = false;
        $m1 = false;
        $m2 = false;
        
        if ($noti->exists()) {
            //eliminar Imagene si tiene
            if (is_numeric($noti->media_id)) {
                $obj = new media();
                $obj->get_by_id($noti->media_id);
                if ($obj->exists()) {
                    $this->delete_files(base_url().$obj->path);
                    $m2 = true;
                }
            }
    
            if ($noti->delete()) {
                $ok = true;
                if($m2){
                   $obj->delete();
                }
             } else {
                $ok = false;
                $this->set_alert('Error al eliminar el propietario.', 'error');
            }
        } else {
            $this->set_alert('Error al eliminar el propietario.', 'error');
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
    
    public function edit() {
            $datos = array();
            $object = new enterese();
            $object->get_by_id($this->_post('id'));
           if($object->exists()){
              $igmedia = new media(); 
              $igmedia->get_by_id($object->media_id);
              $datos = array(
                  "ok" => true,
                  "id" => $object->id,
                  "propuetario" => $object->propietario,
                  "media_id" => str_replace($this->dirImg, "", $igmedia->path)
							);
           }else{
            $datos = array( "ok" => false,"error" => true,
            "messages" => "No existe un objecto asociado".$object->error->string );
           }
       echo json_encode($datos);
    }
    
    public function datos_ajax() {
        $salida = "";
        $this->db->select('cms_propietario.*, cms_media.path as img');
        $this->db->from('cms_propietario');
        $this->db->join('cms_media', 'cms_media.id  = cms_propietario.media_id');
        $datos = $this->getresult($this->db->get());

        if (!empty($datos)) {
					foreach ($datos as $obj) {
                $salida .="  <tr class='odd gradeX parent-delete'>
                                          <td>
                                                <a class='thumbnail' title='Imagen' href='".base_url()."/uploads/".$obj->img."' >
                                                    <img style='height:50px;width:50px' src='".base_url()."/uploads/".$obj->img."' alt='' />
                                                </a>
                                            </td>
                                            <td>".$obj->propietario ."</td>
                                            <td class='center' width='100px'>
                                                <span class='tip'>
                                                  <a href='".cms_url('enterate/propietarios/delete')."' class='uibutton special' data-action='special-delete' data-value='".$obj->id."'>Eliminar</a>
                                                  <a id='edit_".$obj->id."' href='".cms_url('enterate/propietarios/edit/')."' data-value='".$obj->id."' class='uibutton' >Editar</a>
                                                </span>
                                            </td> 
                                    </tr>
                                 <script>
                                $('#edit_".$obj->id."').click(function(e) {
                                    $.ajax({
                                        url: $(this).attr('href'),
                                        type: 'POST',
                                        dataType: 'json',
                                        data: 'id=' + $(this).attr('data-value'),
                                        success: function(json) {
                                            if (json.ok) {
                                                $('#id').val(json.id);
                                                $('#propietario').val(json.propietario);
                                                $('#img').val(json.img);
                                                window.location.href = '#formajax';
                                            }
                                            if (json.messages) {
                                                window.CMS.Modals.alerta(json.messages);
                                            }

                                            if (json.alertbox) {
                                                \$msg_wrap.html(json.alertbox);
                                            }
                                            return;
                                        },
                                        error: function(error) {
                                            window.CMS.Modals.alerta('Hubo un error al ejecutar la aplicación, inténte de nuevo más tarde...');
                                            window.console.error('Error CMS Ajax: ' + error.responseText);
                                        }
                                    });
                                    return false;
                                });</script>    ";
            }
        }
        echo $salida;
    }

    public function add() {
        $error = false;

        $obj = new propietario();
       
        if(is_numeric($this->_post('id')))
            $obj->get_by_id($this->_post('id'));
        else
            $obj->id = "";
        
        $this->form_validation->set_rules('propietario', 'Propietario', 'required|min_length[5]|max_length[10]');
        $this->form_validation->set_rules('img', 'Imágen', 'required');
        
        if (!$this->form_validation->run()) {
          $error = true;
          $this->set_message("Error validando datos, ".$this->form_validation->error_string() , 'error');
        }else{
            
 
        $obj->propietario = $this->_post('propietario');
        if ($this->_post('img') != "-1") {
            $img = new media();
            $img->id = "";
            $img->path = $this->dirImg . trim($this->_post('img'));
            $img->type = 'i';
            if ($img->save()) {
                $obj->media_id = $img->id;
            } else {
                @unlink($this->dirImg . trim($this->_post('img')));
                $this->set_message("Error Ingresando Imágen...!, favor intente mas tarde...!", 'error');
                $error = true;
            }
        }

        if (!$error) {
            if (!$obj->save()) {
                if ($this->_post('img') != -1) {
                    $img->delete();
                    @unlink($this->dirImg . trim($this->_post('img')));
                }
                $error = true;
                $this->set_message("Error Ingresando propietario...!, favor intente mas tarde...!", 'error');
            }
        }
       }
        if (!$error)
            $this->set_message("Propietario registrado con éxito...!", 'info');

        $this->render_json(!$error);
    }

    public function index() {
        $prop = new propietario();
        $this->_data['propietario'] = $prop->get();
        $this->db->select('cms_propietario.*, cms_media.path as img');
        $this->db->from('cms_propietario');
        $this->db->join('cms_media', 'cms_media.id  = cms_propietario.media_id');
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('propietarios/body', array('error' => ' '));
    }

}