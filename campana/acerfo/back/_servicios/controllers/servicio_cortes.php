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
class servicio_cortes extends Back_Controller {

    private $_mapper = 'servicio_corte';
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
        $obj = new servicio_corte();
        $obj->get_by_id($value);
        $ok = false;
        if ($obj->exists()) {
            $key_media1 = $obj->cms_media_id;
            //$key_media2 = $obj->cms_media_id1;
            //$key_media3 = $obj->cms_media_id2;
            $copy = $obj;
            if ($obj->delete()) {
                $obj_1 = new media();
                $obj_1->get_by_id($key_media1);
                /*if ($obj_1->exists()) {
									$this->delete_files($obj_1->path);
									$obj_2 = new media();
									$obj_2->get_by_id($key_media2);
									if ($obj_2->exists()) {
											$this->delete_files($obj_2->path);
											$obj_2->delete();
									}
									$obj_3 = new media();
									$obj_3->get_by_id($key_media3);
									if ($obj_3->exists()) {
												$this->delete_files($obj_3->path);
												$obj_3->delete();
									}
								}*/
								$ok = true;
                $this->set_alert('Se ha eliminado el servicio correctamente', 'ok');
            } else {
                $ok = false;
                $this->set_alert('Error al eliminar servicio.', 'error');
            }
        } else {
            $this->set_alert('El servicio que desea eliminar no existe...!', 'error');
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

    function upload_file() {
        $data = false;
        $data = trim($this->simple_upload('file', 'pdf|xls|xlsx|doc|docx|jpg|png'));
        if (!$data) {
            echo "false";
        } else {
            echo $data;
        }
    }

    function upload_img() {
        $data = false;
        $data = trim($this->simple_upload('img', 'jpeg|jpg|png'));
        if (!$data) {
            echo "false";
        } else {
            echo $data;
        }
    }

    public function edit() {
        $datos = array();
        $object = new servicio_corte();
        $object->get_by_id($this->_post('id'));
        if ($object->exists()) {
            //$img_media = new media();
            //$img_media->get_by_id($object->cms_media_id2);
            $file_media = new media();
            $file_media->get_by_id($object->cms_media_id1);
            $video_media = new media();
            $video_media->get_by_id($object->cms_media_id);
            $datos = array(
                "ok" => true,
                "id" => $object->id,
                "titulo" => $object->titulo,
                "texto" => $object->texto,
                "vid" => $video_media->path);/*,
                "img_min" => str_replace($this->dirImg, "", $img_media->path),
                "file" => str_replace($this->dirImg, "", $file_media->path));*/
             
        } else {
            $datos = array("ok" => false, "error" => true,
                "messages" => "No existe un objecto asociado" . $object->error->string);
        }
        echo json_encode($datos);
    }
    public function datos_ajax() {
        $salida = "";
        $this->db->select('cms_servicio_corte.*, cms_media.path as vid, media1.path as file');//,  media2.path as img_min ');
        $this->db->from('cms_servicio_corte');
        $this->db->join('cms_media', 'cms_media.id  = cms_servicio_corte.cms_media_id');
        $this->db->join('cms_media as cms_media1', 'cms_media1.id  = cms_servicio_corte.cms_media_id1', 'left outer');
        //$this->db->join('cms_media as cms_media2', 'cms_media2.id  = cms_servicio_corte.cms_media_id2', 'left outer');
        $datos = $this->getresult($this->db->get());

        if (!empty($datos)) {

            foreach ($datos as $obj) {
					
                $salida .="  <tr class='odd gradeX parent-delete'>
                                            
                                            <td>" . $obj->titulo . "</td>
                                            <td style='text-align: justify;'>" . substr($obj->texto, 0 , 255) . "</td>
                                            <td>
                                                <a class='thumbnail' title='File' href='" . base_url() . $obj->file . "' >
                                                  File
                                                </a>
                                            </td>
                                            <td>
                                                <a class='thumbnail' title='File' href='" . $obj->vid . "' >
                                                  Video
                                                </a>
                                            </td>     
                                            <td class='center' width='100px'>
                                                <span class='tip'>
                                                    <a href='" . cms_url('servicios/servicio_cortes/delete') . "' class='uibutton special' data-action='special-delete' data-value='" . $obj->id . "'>Eliminar</a>
                                                 <a id='edit_" . $obj->id . "' href='" . cms_url('servicios/servicio_cortes/edit/') . "' data-value='" . $obj->id . "' class='uibutton' >Editar</a>
                                                </span>
                                            </td> 
                                    </tr>
                                 <script>
                                $('#edit_" . $obj->id . "').click(function(e) {
                                    $.ajax({
                                        url: $(this).attr('href'),
                                        type: 'POST',
                                        dataType: 'json',
                                        data: 'id=' + $(this).attr('data-value'),
                                        success: function(json) {
                                            if (json.ok) {
                                                $('#id').val(json.id);
                                                $('#titulo').val(json.titulo);
                                                $('#texto').val(json.texto);
                                                $('#file').val(json.file);
                                                $('#vid').val(json.vid);
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
                                });</script> ";
            }
        }
        echo $salida;
    }

    public function add() {
        $error = false;

        $obj = new servicio_corte();

        if (is_numeric($this->_post('id')))
            $obj->get_by_id($this->_post('id'));
        else
            $obj->id = "";

        $this->form_validation->set_rules('titulo', 'Título', 'required|min_length[5]|max_length[32]');
        $this->form_validation->set_rules('vid', 'Link del Video', 'required');
        $this->form_validation->set_rules('texto', 'Texto', 'required|min_length[5]|max_length[211]');
        //$this->form_validation->set_rules('img_min', 'Imagen Min del Video', 'required');
        if (!$this->form_validation->run()) {
            $error = true;
            $this->set_message("Error validando datos, " . $this->form_validation->error_string(), 'error');
        } else {

            $video = new media();
            $video->id = "";
            $video->path = $this->_post('vid');
            $video->type = 'v';

            if ($video->save()) {
                $obj->cms_media_id = $video->id;
                /*if ($this->_post('img_min') != "-1") {
                    $img_video = new media();
                    $img_video->id = "";
                    $img_video->path = $this->dirImg . trim($this->_post('img_min'));
                    $img_video->type = 'i';
                    if ($img_video->save()) {
                        $obj->cms_media_id2 = $img_video->id;*/
                        if ($this->_post('file') != "-1") {
                            $file = new media();
                            $file->id = "";
                            $file->path = $this->dirImg . trim($this->_post('file'));
                            $file->type = 'f';
                            if ($file->save()) {
                                $obj->cms_media_id1 = $file->id;
                            } else {
                                $this->set_message("Error Subiendo archivo..!, favor intente mas tarde...!", 'error');
                                $error = true;
                                @unlink($this->dirImg . trim($this->_post('file')));
                            }
                        }
                        $obj->titulo = $this->_post('titulo');
                        $obj->texto = $this->_post('texto');
                        if (!$obj->save()) {
                            if ($this->_post('file') != "-1") {
                                $file->delete();
                                @unlink($this->dirImg . trim($this->_post('file')));
                            }
                            //$file->delete();
                            //@unlink($this->dirImg . trim($this->_post('img_min')));
                            $error = true;
                            $this->set_message("Error Ingresando servicio...!, favor intente mas tarde...!", 'error');
                        }
                    //}
                //}
            } else {
                $this->set_message("Error Ingresando video...!, favor intente mas tarde...!", 'error');
                $error = true;
            }
        }

        if (!$error)
            $this->set_message("Servicio registrado o actualizado con éxito...!", 'info');

        $this->render_json(!$error);
    }

    public function index() {
        $this->db->select('cms_servicio_corte.*, cms_media.path as vid, media1.path as file');//,  media2.path as img_min ');
        $this->db->from('cms_servicio_corte');
        $this->db->join('cms_media', 'cms_media.id  = cms_servicio_corte.cms_media_id');
        $this->db->join('cms_media as cms_media1', 'cms_media1.id  = cms_servicio_corte.cms_media_id1', 'left outer');
        //$this->db->join('cms_media as cms_media2', 'cms_media2.id  = cms_servicio_corte.cms_media_id2', 'left outer');
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('servicios/body', array('error' => ' '));
    }

}