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
class trabajadores extends Back_Controller {

    private $_mapper = 'trabajador';
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
        $trabj = new trabajador();
        $trabj->get_by_id($value);
        $ok = false;
        $m1 = false;
        $m2 = false;

        if ($trabj->exists()) {

            $obj_1 = new media();
            $obj_1->get_by_id($trabj->media_id);
            if ($obj_1->exists()) {
                $m1 = true;
            }
            $obj = new media();
            $obj->get_by_id($trabj->media_id1);
            if ($obj->exists()) {
                $m2 = true;
            }

            if ($trabj->delete()) {
                $ok = true;
                if ($m1) {
                    $this->delete_files(base_url() . $obj_1->path);
                    $obj_1->delete();
                }
                if ($m2) {
                    $this->delete_files(base_url() . $obj->path);
                    $obj->delete();
                }
            } else {
                $ok = false;
                $this->set_alert('Error al eliminar la notificacion.', 'error');
            }
        } else {
            $this->set_alert('Error al eliminar la notificacion.', 'error');
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

    function upload_img_min() {
        $data = false;
        $data = trim($this->simple_upload('img_min', 'jpg|png'));
        if (!$data) {
            echo "false";
        } else {
            echo $data;
        }
    }

    function upload_img_grande() {
        $data = false;
        $data = trim($this->simple_upload('img_grande', 'jpg|png'));
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
        $object = new trabajador();
        $object->get_by_id($this->_post('id'));
        if ($object->exists()) {
            $icmedia = new media();
            $icmedia->get_by_id($object->media_id);
            $igmedia = new media();
            $igmedia->get_by_id($object->media_id1);
            $imedia = new media();
            $imedia->get_by_id($object->media_id2);
            $datos = array(
                "ok" => true,
                "id" => $object->id,
                "nombre" => $object->nombre,
                "cargo" => $object->cargo,
                "comentario" => $object->comentario,
                "img" => str_replace($this->dirImg, "", $icmedia->path),
                "img_min" => str_replace($this->dirImg, "", $igmedia->path),
                "img_grande" => str_replace($this->dirImg, "", $imedia->path),
								"orden" => $object->orden
						);
        } else {
            $datos = array("ok" => false, "error" => true,
                "messages" => "No existe un objecto asociado" . $object->error->string);
        }
        echo json_encode($datos);
    }

    public function datos_ajax() {
        $salida = "";
        $this->db->select('cms_trabajador.*,m2.path as img_grande, cms_media.path as img_min');
        $this->db->from('cms_trabajador');
        $this->db->join('cms_media', 'cms_media.id  = cms_trabajador.media_id');
        $this->db->join('cms_media as m2', 'm2.id  = cms_trabajador.media_id2');
				$this->db->order_by('cms_trabajador.orden', 'asc');
        $datos = $this->getresult($this->db->get());

        if (!empty($datos)) {

            foreach ($datos as $obj) {
                $salida .="  <tr class='odd gradeX parent-delete'>
                                            <td>
                                                <a class='thumbnail' title='Imagen' href='" . base_url() . $obj->img_min . "' >
                                                    <img style='height:50px;width:50px' src='" . base_url() . $obj->img_min . "' alt='' />
                                                </a>
                                            </td>
                                            <td>
                                                <a class='thumbnail' title='Imagen' href='" . base_url() . $obj->img_grande . "' >
                                                    <img style='height:50px;width:50px' src='" . base_url() . $obj->img_grande . "' alt='' />
                                                </a>
                                            </td>
                                            <td>" . $obj->nombre . "</td>
                                            <td>" . $obj->cargo . "</td>
																						<td>" . $obj->orden . "</td>
                                            <td style=\"text-align: justify;\" >".substr($obj->comentario, 0, 255)."...</td>
                                            <td class='center' width='100px'>
                                                <span class='tip'>
                                                    <a href='" . cms_url('equipo/trabajadores/delete') . "' class='uibutton special' data-action='special-delete' data-value='" . $obj->id . "'>Eliminar</a>
                                                    <a id='edit_" . $obj->id . "' href='" . cms_url('equipo/trabajadores/edit/') . "' data-value='" . $obj->id . "' class='uibutton' >Editar</a>
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
                                                $('#cargo').val(json.cargo);
                                                $('#comentario').val(json.comentario);
                                                $('#img').val(json.img);
                                                $('#img_min').val(json.img_min);
                                                $('#img_grande').val(json.img_grande);
																								$('#orden').val(json.orden);
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
                                });</script>   ";
            }
        }
        echo $salida;
    }

    public function add() {
        $error = false;
        $obj = new trabajador();

        if (is_numeric($this->_post('id')))
            $obj->get_by_id($this->_post('id'));
        else
            $obj->id = "";

        $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[47]');
        $this->form_validation->set_rules('cargo', 'Cargo', 'required|min_length[5]|max_length[74]');
        $this->form_validation->set_rules('comentario', 'Comentario', 'required');
        $this->form_validation->set_rules('img_grande', 'Foto Grande', 'required');
        $this->form_validation->set_rules('img_min', 'Foto Color', 'required');
        $this->form_validation->set_rules('img', 'Foto Gris', 'required');
				$this->form_validation->set_rules('orden', 'Orden', 'required|numeric');
        if (!$this->form_validation->run()) {
            $error = true;
            $this->set_message("Error validando datos, " . $this->form_validation->error_string(), 'error');
        } else {
            $obj->nombre = $this->_post('nombre');
            $obj->cargo = $this->_post('cargo');
            $obj->comentario = $this->_post('comentario');
						$obj->orden = $this->_post('orden');
            if ($this->_post('img_min') != "-1") {
                $img_min = new media();
                $img_min->id = "";
                $img_min->path = $this->dirImg . trim($this->_post('img_min'));
                $img_min->type = 't';
                if ($img_min->save()) {
                    $obj->media_id1 = $img_min->id;
                    if ($this->_post('img') != "-1") {
                        $img = new media();
                        $img->id = "";
                        $img->path = $this->dirImg . trim($this->_post('img'));
                        $img->type = 't';
                        if ($img->save()) {
                            $obj->media_id = $img->id;
                            if ($this->_post('img_grande') != "-1") {
                                $img_grand = new media();
                                $img_grand->id = "";
                                $img_grand->path = $this->dirImg . trim($this->_post('img_grande'));
                                $img_grand->type = 'i';
                                if ($img_grand->save()) {
                                    $obj->media_id2 = $img_grand->id;
                                    if (!$obj->save()) {
                                        $img_min->delete();
                                        @unlink($this->dirImg . trim($this->_post('img_min')));
                                        $img->delete();
                                        @unlink($this->dirImg . trim($this->_post('img')));
                                        $img_grand->delete();
                                        @unlink($this->dirImg . trim($this->_post('img_grande')));
                                        $error = true;
                                        $this->set_message("Error Ingresando Trabajador...!, favor intente mas tarde...!", 'error');
                                    }
                                } else {
                                    $this->set_message("Error Ingresando Foto Detalle del Trabajador..!, favor intente mas tarde...!", 'error');
                                    $error = true;
                                    @unlink($this->dirImg . trim($this->_post('img')));
                                }
                            } else {
                                $this->set_message("No ha seleccionado una Foto Grande valida...!", 'error');
                                $error = true;
                            }
                        } else {
                            @unlink($this->dirImg . trim($this->_post('img')));
                            $this->set_message("Error Ingresando Foto Color de Trabajador...!", 'error');
                            $error = true;
                        }
                    } else {
                        $this->set_message("No ha seleccionado una Foto a Color valida...!", 'error');
                        $error = true;
                    }
                } else {
                    @unlink($this->dirImg . trim($this->_post('img_min')));
                    $this->set_message("Error Ingresando Foto Gris de Trabajador...!", 'error');
                    $error = true;
                }
            } else {
                $this->set_message("No ha seleccionado una Foto a Color valida...!", 'error');
                $error = true;
            }
        }
        if (!$error)
            $this->set_message("Notificacion registrada con exito...!", 'info');

        $this->render_json(!$error);
    }

    public function index() {
        $this->db->select('cms_trabajador.*,m2.path as img_grande, cms_media.path as img_min');
        $this->db->from('cms_trabajador');
        $this->db->join('cms_media', 'cms_media.id  = cms_trabajador.media_id');
        $this->db->join('cms_media as m2', 'm2.id  = cms_trabajador.media_id2');
				$this->db->order_by('cms_trabajador.orden', 'asc');
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('trabajadores/body', array('error' => ' '));
    }

}