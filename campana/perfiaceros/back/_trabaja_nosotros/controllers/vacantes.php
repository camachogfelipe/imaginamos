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
class vacantes extends Back_Controller {

    private $_mapper = 'vacante';
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
        $obj = new vacante();
        $obj->get_by_id($value);
        $ok = false;
        $m1 = false;

        if ($obj->exists()) {
            //eliminar video si tiene
            if (is_numeric($obj->media_id)) {
                $media_img = new media();
                $media_img->get_by_id($obj->media_id);
                $m1 = true;
            }
            if ($obj->delete()) {
                $ok = true;
                if ($m1) {
                    $media_img->delete();
                }
            } else {
                $ok = false;
                $this->set_alert('Error al eliminar vacante.', 'error');
            }
        } else {
            $this->set_alert('La vacante que desea eliminar no Existe..!.', 'error');
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
        $object = new vacante();
        $object->get_by_id($this->_post('id'));
        if ($object->exists()) {
            $img_media = new media();
            $img_media->get_by_id($object->media_id);
            $datos = array(
                "ok" => true,
                "id" => $object->id,
                "nombre" => $object->nombre,
                "subtitulo" => $object->subtitulo,
                "detalle" => $object->detalle,
                "intro_detalle" => $object->intro_detalle,
                "img" => str_replace($this->dirImg, "", $img_media->path));
        } else {
            $datos = array("ok" => false, "error" => true,
                "messages" => "No existe un objecto asociado" . $object->error->string);
        }
        echo json_encode($datos);
    }

    public function datos_ajax() {
        $salida = "";
        $this->db->select('cms_vancante.*, cms_media.path as img');
        $this->db->from('cms_vancante');
        $this->db->join('cms_media', 'cms_media.id  = cms_vancante.media_id');

        $datos = $this->getresult($this->db->get());

        if (!empty($datos)) {

            foreach ($datos as $obj) {
                $salida .="  <tr class='odd gradeX parent-delete'>
                                          <td>
                                                <a class='thumbnail' title='Imagen' href='" . base_url() . $obj->img . "' >
                                                    <img style='height:50px;width:50px' src='" . base_url() . $obj->img . "' alt='' />
                                                </a>
                                            </td>
                                            <td>" . $obj->nombre . " </td>
                                            <td>" . $obj->subtitulo . "</td>
                                            <td style='text-align: justify;'>" . substr($obj->intro_detalle,0,255). "</td>
                                            <td style='text-align: justify;'>" . substr($obj->detalle,0,255). "</td>  
                                             <td>
                                                <a class=\"link-ajax\" data-value=\"".$obj->id."\" title=\"Imagen\" href=\"".cms_url('trabaja_nosotros/inicio/postuladosajax')."\">
                                                    Ver postulados
                                                </a>
                                            </td>   
                                            <td class='center' width='100px'>
                                                <span class='tip'>
                                                    <a href='" . cms_url('trabaja_nosotros/vacantes/delete') . "' class='uibutton special' data-action='special-delete' data-value='" . $obj->id . "'>Eliminar</a>
                                                    <a id='edit_" . $obj->id . "' href='" . cms_url('trabaja_nosotros/vacantes/edit/') . "' data-value='" . $obj->id . "' class='uibutton' >Editar</a>
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
                                                $('#nombre').val(json.nombre);
                                                $('#subtitulo').val(json.subtitulo);
                                                $('#intro_detalle').val(json.intro_detalle);
                                                $('#detalle').text(json.detalle).blur();
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
                                });</script> ";
            }
        }
        echo $salida;
    }

    public function add() {
        $error = false;

        $obj = new vacante();

        if (is_numeric($this->_post('id')))
            $obj->get_by_id($this->_post('id'));
        else
            $obj->id = "";

        $this->form_validation->set_rules('nombre', 'Cargo', 'required|min_length[5]|max_length[42]');
        $this->form_validation->set_rules('subtitulo', 'Área', 'required|min_length[5]|max_length[70]');
        $this->form_validation->set_rules('intro_detalle', 'Introducción de la Vacante', 'required|min_length[5]|max_length[65]');
        $this->form_validation->set_rules('detalle', 'Detalle de Vacante', 'required');
        $this->form_validation->set_rules('img', 'Imagen de Vacante', 'required');
        if (!$this->form_validation->run()) {
            $error = true;
            $this->set_message("Error validando datos, " . $this->form_validation->error_string(), 'error');
        } else {

            $obj->nombre = $this->_post('nombre');
            $obj->subtitulo = $this->_post('subtitulo');
            $obj->detalle = $this->_post('detalle');
            $obj->intro_detalle = $this->_post('intro_detalle');

            if ($this->_post('img') != "-1") {
                $img = new media();
                $img->id = "";
                $img->path = $this->dirImg . trim($this->_post('img'));
                $img->type = 'i';
                if ($img->save())
                    $obj->media_id = $img->id;
                else {
                    $this->set_message("Error Ingresando Imagen...!, favor intente mas tarde...!", 'error');
                    $error = true;
                    @unlink($this->dirImg . trim($this->_post('img')));
                }
            }

            if (!$error) {
                if (!$obj->save()) {
                    if ($this->_post('img') != -1) {
                        $img->delete();
                        @unlink($this->dirImg . trim($this->_post('img')));
                    }
                    $error = true;
                    $this->set_message("Error Ingresando o Actualizando Vacante...!, favor intente mas tarde...!", 'error');
                }
            }
        }

        if (!$error)
            $this->set_message("Vacante Registrada o Actualizada con éxito...!", 'info');

        $this->render_json(!$error);
    }

    public function index() {
        $this->db->select('cms_vancante.*, cms_media.path as img');
        $this->db->from('cms_vancante');
        $this->db->join('cms_media', 'cms_media.id  = cms_vancante.media_id');
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('vacantes/body', array('error' => ' '));
    }

}