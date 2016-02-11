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
class enterate extends Back_Controller {

    private $_mapper = 'enterese';
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
        $noti = new enterese();
        $noti->get_by_id($value);
        $ok = false;
        $v1 = false;
        $m1 = false;
        $m2 = false;
        
        if ($noti->exists()) {
            //eliminar video si tiene
            if (is_numeric($noti->video_id)) {
                $video = new video();
                $video->get_by_id($noti->video_id);
                if ($video->exists()) {
                    $media_video = new media();
                    $media_video->get_by_id($video->id);
                    $v1 = true;
                }
            }
            //eliminar Imagene si tiene
            if (is_numeric($noti->media_id)) {
                $obj_1 = new media();
                $obj_1->get_by_id($noti->media_id);
                if ($obj_1->exists()) {
                    $this->delete_files(base_url().$obj_1->path);
                    $m1 = true;
                 }
            }
            //eliminar Imagene si tiene
            if (is_numeric($noti->media_id1)) {
                $obj = new media();
                $obj->get_by_id($noti->media_id1);
                if ($obj->exists()) {
                    $this->delete_files(base_url().$obj->path);
                    $m2 = true;
                }
            }
    
            if ($noti->delete()) {
                $ok = true;
                if($v1){
                   $video->delete(); 
                   $media_video->delete();
                }
                if($m1){
                   $obj_1->delete();
                }
                if($m2){
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
    
    public function video() {
        $id = $this->_get('id');
        if(is_numeric($id)){
            
            
        }
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
        echo trim($this->simple_upload('img_min', 'jpg|png'));
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
              $imedia = new media(); 
              $imedia->get_by_id($object->media_id1);
              $vmedia = new media(); 
              $vmedia->get_by_id($object->video_id);
              $video = new video(); 
              $video->get_by_id($object->video_id);
              $datos = array(
                  "ok" => true,
                  "id" => $object->id,
                  "texto" => $object->texto,
                  "intro_text" => $object->intro_text,
                  "titulo" => $object->titulo,
                  "subtitulo" => $object->subtitulo,
                  "img" => str_replace($this->dirImg, "", $igmedia->path),
                  "img_min" => str_replace($this->dirImg, "", $imedia->path),
                  "dir_video" => $vmedia->path,
                  "descripcion" => $video->descripcion,
                  "propietario_id" => $video->propietario_id, 
                  "titulo_video" => $video->titulo,
									"destacado" => $object->destacado
							);
           }else{
            $datos = array( "ok" => false,"error" => true,
            "messages" => "No existe un objecto asociado".$object->error->string );
           }
       echo json_encode($datos);
    }
    
    public function datos_ajax() {
        $salida = "";
        $this->db->select('cms_enterese.*, cms_media1.path as img_min ,cms_media.path as img ,cms_medeia_video.path as video');
        $this->db->from('cms_enterese');
        $this->db->join('cms_media', 'cms_media.id  = cms_enterese.media_id');
        $this->db->join('cms_media as cms_media1', 'cms_media1.id  = cms_enterese.media_id1');
                $this->db->join('cms_media as cms_medeia_video', 'cms_medeia_video.id  = cms_enterese.video_id', 'left outer');
        $datos = $this->getresult($this->db->get());

        if (!empty($datos)) {

            foreach ($datos as $obj) {
                $salida .="  <tr class='odd gradeX parent-delete'>
                                          <td>
                                                <a class='thumbnail' title='Imagen' href='".base_url().$obj->img_min."' >
                                                    <img style='height:50px;width:50px' src='".base_url().$obj->img_min."' alt='' />
                                                </a>
                                            </td>
                                            <td>".$obj->titulo ."</td>
                                            <td>".$obj->subtitulo."</td>
                                            <td style='text-align: justify;' >".$obj->intro_text."</td>
                                            <td style='text-align: justify;' >".substr($obj->texto,0,255)."...</td>
                                            <td>
                                                <a class='thumbnail' title='imagen' href='".base_url().$obj->img."' >
                                                    Link
                                                </a>
                                            </td>
                                            <td>
                                                <a class='thumbnail' title='video' href='".$obj->video."' >
                                                    Video
                                                </a>
                                            </td>
                                            <td class='center' width='100px'>
                                                <span class='tip'>
                                                  <a href='".cms_url('enterate/enterate/delete')."' class='uibutton special' data-action='special-delete' data-value='".$obj->id."'>Eliminar</a>
                                                  <a id='edit_".$obj->id."' href='".cms_url('enterate/enterate/edit/')."' data-value='".$obj->id."' class='uibutton' >Editar</a>
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
                                                $('#titulo').val(json.titulo);
                                                $('#subtitulo').val(json.subtitulo);
                                                $('#texto').val(json.texto);
                                                $('#intro_text').val(json.intro_text);
                                                $('#dir_video').val(json.dir_video);
                                                $('#titulo_video').val(json.titulo_video);
                                                $('#descripcion').val(json.descripcion);    
                                                $('#propietario_id').val(json.propietario_id);   
                                                $('#img').val(json.img);  
                                                $('#img_min').val(json.img_min);  
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

        $obj = new enterese();
       
        if(is_numeric($this->_post('id')))
            $obj->get_by_id($this->_post('id'));
        else
            $obj->id = "";
        
        $this->form_validation->set_rules('titulo', 'Titulo', 'required|min_length[5]|max_length[16]');
        $this->form_validation->set_rules('subtitulo', 'Subtitulo', 'required|min_length[5]|max_length[18]');
        $this->form_validation->set_rules('intro_text', 'Texto Introductorio', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('texto', 'Texto', 'required|min_length[5]');
        $this->form_validation->set_rules('img_min', 'Imagen Min', 'required');
        
        if (!$this->form_validation->run()) {
          $error = true;
          $this->set_message("Error validando datos, ".$this->form_validation->error_string() , 'error');
        }else{
            
 
        $obj->titulo = $this->_post('titulo');
        $obj->subtitulo = $this->_post('subtitulo');
        $obj->texto = $this->_post('texto');
        $obj->intro_text = $this->_post('intro_text');
				$obj->destacado = $this->_post('des_si');

        if ($this->_post('img_min') != "-1") {
            $img_min = new media();
            $img_min->id = "";
            $img_min->path = $this->dirImg . trim($this->_post('img_min'));
            $img_min->type = 't';
            if ($img_min->save()) {
                $obj->media_id1 = $img_min->id;
            } else {
                @unlink($this->dirImg . trim($this->_post('img_min')));
                $this->set_message("Error Ingresando Imagen Min...!, favor intente mas tarde...!", 'error');
                $error = true;
            }
        }

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


        if ($this->_post('video_si') == 1) {
            $media_video = new media();
            $media_video->id = "";
            $media_video->path = trim($this->_post('dir_video'));
            $media_video->type = 'v';
            if ($media_video->save()) {
                $vid = new video();
                $vid->id = $media_video->id;
                $vid->propietario_id = $this->_post('propietario_id');
                $vid->descripcion = $this->_post('descripcion');
                $vid->titulo = $this->_post('titulo_video');
                if ($vid->save_as_new()) {
                    $obj->video_id = $vid->id;
                } else {
                    $this->set_message("Error Ingresando Video...!, favor intente mas tarde...!", 'error');
                    $error = true;
                }
            }
        }
				else {
						$obj->video_id = NULL;
				}
        if (!$error) {
            if (!$obj->save()) {
                if ($this->_post('img_min') != -1) {
                    $img_min->delete();
                    @unlink($this->dirImg . trim($this->_post('img_min')));
                }
                if ($this->_post('img') != -1) {
                    $img->delete();
                    @unlink($this->dirImg . trim($this->_post('img')));
                }
                if ($this->_post('video_si') == -1) {
                    $video->delete();
                    $media_video->delete();
                    @unlink($this->dirImg . trim($this->_post('img')));
                }
                $error = true;
                $this->set_message("Error Ingresando notificación...!, favor intente mas tarde...!", 'error');
            }
        }
       }
        if (!$error)
            $this->set_message("Notificación registrada con éxito...!", 'info');

        $this->render_json(!$error);
    }

    public function index() {
        $prop = new propietario();
        $this->_data['propietario'] = $prop->get();
        $this->db->select('cms_enterese.*, cms_media1.path as img_min ,cms_media.path as img ,cms_medeia_video.path as video');
        $this->db->from('cms_enterese');
        $this->db->join('cms_media', 'cms_media.id  = cms_enterese.media_id');
        $this->db->join('cms_media as cms_media1', 'cms_media1.id  = cms_enterese.media_id1');
        $this->db->join('cms_media as cms_medeia_video', 'cms_medeia_video.id  = cms_enterese.video_id', 'left outer');
				$this->db->order_by("cms_enterese.id", "desc");
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('enterate_/body', array('error' => ' '));
    }

}