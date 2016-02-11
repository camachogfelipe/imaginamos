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
class documentos extends Back_Controller {

    private $_mapper = 'documento';
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
    
     public function edit() {
            $datos = array();
            $object = new documento();
            $object->get_by_id($this->_post('id'));
           if($object->exists()){
              $imedia = new media(); 
              $imedia->get_by_id($object->cms_media_id);
              $fmedia = new media(); 
              $fmedia->get_by_id($object->cms_media_id1);
              
               $datos = array(
                  "ok" => true,
                  "id" => $object->id,
                  "texto" => $object->texto,
                  "img" => str_replace($this->dirImg, "", $imedia->path),
                  "file" => str_replace($this->dirImg, "", $fmedia->path),
                  "titulo_funte1" => $object->titulo_funte1,
                  "titulo_funte2" => $object->titulo_funte2,
									"destacado" => $object->destacado
								);
           }else{
            $datos = array( "ok" => false,"error" => true,
            "messages" => "No existe un objecto asociado".$object->error->string );
           }
       echo json_encode($datos);
    }

    public function delete() {
        $value = $this->_get('value');
        $doc = new documento();
        $doc->get_by_id($value);
        $ok = false;
        $m1 = false;
        $m2 = false;
        
        if ($doc->exists()) {
        
                $obj_1 = new media();
                $obj_1->get_by_id($doc->cms_media_id);
                if ($obj_1->exists()) {
                     $m1 = true;
                 }
                $obj = new media();
                $obj->get_by_id($doc->cms_media_id1);
                if ($obj->exists()) {
                    $m2 = true;
                }
          
            if ($doc->delete()) {
                $ok = true;
                if($m1){
                    $this->delete_files(base_url().$obj_1->path);
                    $obj_1->delete();
                }
                if($m2){
                    $this->delete_files(base_url().$obj->path);
                    $obj->delete();
                }
             } else {
                $ok = false;
                $this->set_alert('Error al eliminar el documento.', 'error');
            }
        } else {
            $this->set_alert('Error al eliminar el documeneto.', 'error');
            $ok = false;
        }

        $this->render_json($ok);
    }



    

  
     function upload_file() {
        $data = false;
        $data = trim($this->simple_upload('file', 'pdf|doc|docx|xls'));
        if(!$data){
         echo "false"; 
        }else{
         echo $data;   
        }
    }

    function upload_img() {
        $data = false;
        $data = trim($this->simple_upload('img', 'jpeg|jpg|png'));
        if(!$data){
         echo "false"; 
        }else{
         echo $data;   
        }
    }
    
    public function datos_ajax() {
        $salida = "";
        $this->db->select('cms_documento.*, cms_media.path as img , m1.path as file');
        $this->db->from('cms_documento');
        $this->db->join('cms_media', 'cms_media.id  = cms_documento.cms_media_id');
        $this->db->join('cms_media as m1', 'm1.id  = cms_documento.cms_media_id1');
        $datos = $this->getresult($this->db->get());

        if (!empty($datos)) {

            foreach ($datos as $obj) {
                $salida .="  <tr class='odd gradeX parent-delete'>
                                          <td>
                                                <a class='thumbnail' title='Imagen' href='".base_url().$obj->img."' >
                                                    <img style='height:50px;width:50px' src='".base_url().$obj->img."' alt='' />
                                                </a>
                                            </td>
                                            <td>".$obj->titulo_funte1 ."</td>
                                            <td>".$obj->titulo_funte2."</td>
                                            <td>".$obj->texto."</td>
                                            <td>
                                                <a class='thumbnail' target='_blank'  title='Imagen' href='".base_url().$obj->file."' >
                                                  File
                                                </a>
                                            </td>    
                                            <td class='center' width='100px'>
                                                <span class='tip'>
                                                    <a href='".cms_url('documentos/documentos/delete')."' class='uibutton special' data-action='special-delete' data-value='".$obj->id."'>Eliminar</a>
                                                    <a id='edit_".$obj->id."' href='".cms_url('documentos/documentos/edit/')."' data-value='".$obj->id."' class='uibutton' >Editar</a>
                                        
                                                </span>
                                            </td> 
                                    </tr>
                                 <script>
                                $('#edit_" .$obj->id. "').click(function(e) {
                                    $.ajax({
                                        url: $(this).attr('href'),
                                        type: 'POST',
                                        dataType: 'json',
                                        data: 'id=' + $(this).attr('data-value'),
                                        success: function(json) {
                                            if (json.ok) {
                                                $('#id').val(json.id);
                                                $('#titulo_funte1').val(json.titulo_funte1);
                                                $('#titulo_funte2').val(json.titulo_funte2);
                                                $('#texto').val(json.texto);
                                                $('#img').val(json.img);
                                                $('#file').val(json.file);
																								$('#des_si').val(json.destacado);
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
                                });</script>    

                                ";
            }
        }
        echo $salida;
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

    public function add() {
        $error = false;
        $obj = new documento();
        if(is_numeric($this->_post('id')))
            $obj->get_by_id($this->_post('id'));
        else
            $obj->id = "";
        $this->form_validation->set_rules('titulo_funte1', 'Titulo Fuente 1', 'required|min_length[5]|max_length[7]');
        $this->form_validation->set_rules('titulo_funte2', 'Titulo Fuente 2', 'required|min_length[5]|max_length[10]');
        $this->form_validation->set_rules('texto', 'Texto', 'required|min_length[5]|max_length[190]');
        if (!$this->form_validation->run()) {
          $error = true;
          $this->set_message("Error validando datos, ".$this->form_validation->error_string() , 'error');
        }else{
        $obj->titulo_funte1 = $this->_post('titulo_funte1');
        $obj->titulo_funte2 = $this->_post('titulo_funte2');
        $obj->texto = $this->_post('texto');
				$obj->destacado = $this->_post('des_si');
				if(empty($obj->destacado) || ($obj->destacado != 0 and $obj->destacado != 1)) $obj->destacado = 0;
        if ($this->_post('img') != "-1") {
            $img_min = new media();
            $img_min->id = "";
            $img_min->path = $this->dirImg . trim($this->_post('img'));
            $img_min->type = 'i';
            if ($img_min->save()) {
                $obj->cms_media_id = $img_min->id;
                 if ($this->_post('file') != "-1") {
                    $file = new media();
                    $file->id = "";
                    $file->path = $this->dirImg . trim($this->_post('file'));
                    $file->type = 'f';
                    if ($file->save()){
                        $obj->cms_media_id1 = $file->id;
                        if(!$obj->save()){
                               $img_min->delete();
                               @unlink($this->dirImg . trim($this->_post('img')));
                               $file->delete();
                               @unlink($this->dirImg . trim($this->_post('file')));
                               $error = true;
                               $this->set_message("Error Ingresando Documento...!, favor intente mas tarde...!", 'error');
                        }
                    } else {
                        $img_min->delete();
                        @unlink($this->dirImg . trim($this->_post('img')));
                        @unlink($this->dirImg . trim($this->_post('file')));
                        $this->set_message("Error Ingresando Archivo..!, favor intente mas tarde...!", 'error');
                        $error = true;
                    }
                }
             } else {
                @unlink($this->dirImg . trim($this->_post('img')));
                $this->set_message("Error Ingresando Imagen del documento...!, favor intente mas tarde...!", 'error');
                $error = true;
            }
        }else{
           $this->set_message("Error Ingresando datos...!, favor intente mas tarde...!", 'error');
           $error = true;
        }
        }
        if (!$error)
            $this->set_message("Docuemento registrado o actualizado con exito...!", 'info');

        echo json_encode(array('ok' => !$error,'messages' => $this->_messages, 'messages_type' => $this->_messages_type ));
    }

    public function index() {
        $this->db->select('cms_documento.*, cms_media.path as img , m1.path as file');
        $this->db->from('cms_documento');
        $this->db->join('cms_media', 'cms_media.id  = cms_documento.cms_media_id');
        $this->db->join('cms_media as m1', 'm1.id  = cms_documento.cms_media_id1');
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('documentos_/body', array('error' => ' '));
    }

}