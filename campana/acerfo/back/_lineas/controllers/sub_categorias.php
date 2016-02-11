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
class sub_categorias extends Back_Controller {

    private $_mapper = 'sub_categoria';
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
        $obj = new sub_categoria();
        $obj->get_by_id($value);
        $ok = false;
        if ($obj->exists()) {
            $key_media = $obj->cms_media_id;
            if ($obj->delete()) {
               $obj_1 = new media();
                $obj_1->get_by_id($key_media);
                if ($obj_1->exists()) {
                    $this->delete_files($obj_1->path);
                     $obj_1->delete();
                 }
                $ok = true;
            } else {
                $ok = false;
                $this->set_alert('Error al eliminar Sub Categoria, por favor revise que no tenga categorias.', 'error');
            }
        } else {
            $this->set_alert('La Sub categoria que desea eliminar no existe...!', 'error');
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
        $this->db->select('cms_sub_categorias.*,cms_categoria.titulo as categoria, cms_media.path as img');
        $this->db->from('cms_sub_categorias');
        $this->db->join('cms_media', 'cms_media.id  = cms_sub_categorias.cms_media_id');
        $this->db->join('cms_categoria', 'cms_categoria.id  = cms_sub_categorias.cms_categoria_id');
        $datos = $this->getresult($this->db->get());

        if (!empty($datos)) {

            foreach ($datos as $obj) {
                $salida .="  <tr class='odd gradeX parent-delete'>
                                          <td>
                                                <a class='thumbnail' title='Imagen' href='".base_url().$obj->img."' >
                                                    <img style='height:50px;width:50px' src='".base_url().$obj->img."' alt='' />
                                                </a>
                                            </td>
                                            <td>".$obj->titulo ." </td>
                                            <td>".$obj->subtitulo."</td>
                                            <td>".$obj->texto."</td>    
                                            <td>".$obj->categoria."</td>
                                            <td class='center' width='100px'>
                                                <span class='tip'>
                                                    <a href='".cms_url('lineas/sub_categorias/delete')."' class='uibutton special' data-action='special-delete' data-value='".$obj->id."'>Eliminar</a>
                                                   <a id='edit_".$obj->id."' href='".cms_url('lineas/sub_categorias/edit/')."' data-value='".$obj->id."' class='uibutton' >Editar</a>
                                        
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
                                                $('#titulo').val(json.titulo);
                                                $('#subtitulo').val(json.subtitulo);
                                                $('#texto').val(json.texto);
                                                $('#cms_categoria_id').val(json.cms_categoria_id);
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

    public function edit() {
            $datos = array();
            $object = new sub_categoria();
            $object->get_by_id($this->_post('id'));
           if($object->exists()){
              $fmedia = new media(); 
              $fmedia->get_by_id($object->cms_media_id);
              
               $datos = array(
                  "ok" => true,
                  "id" => $object->id,
                  "titulo" => $object->titulo,
                  "img" => str_replace($this->dirImg, "", $fmedia->path),
                  "cms_categoria_id" => $object->cms_categoria_id,
                  "subtitulo" => $object->subtitulo,
                  "texto" => $object->texto);
           }else{
            $datos = array( "ok" => false,"error" => true,
            "messages" => "No existe un objecto asociado".$object->error->string );
           }
       echo json_encode($datos);
    }
    
    public function add() {
        $error = false;
            $obj = new sub_categoria();
         if(is_numeric($this->_post('id')))
            $obj->get_by_id($this->_post('id'));
        else
            $obj->id = "";
        $this->form_validation->set_rules('titulo', 'Titulo', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('subtitulo', 'Sub Titulo', 'required|min_length[5]|max_length[27]');
        $this->form_validation->set_rules('texto', 'Texto', 'required|min_length[5]|max_length[120]');
        $this->form_validation->set_rules('cms_categoria_id', 'Categoria', 'required');
        if (!$this->form_validation->run()) {
          $error = true;
          $this->set_message("Error validando datos, ".$this->form_validation->error_string() , 'error');
        }else{
        if ($this->_post('img') != "-1" &&  $this->_post('cms_categoria_id') != "") {
            $img = new media();
            $img->id = "";
            $img->path = $this->dirImg . trim($this->_post('img'));
            $img->type = 't';
            if ($img->save()) {
                $obj->validation = array(); 
                $obj->titulo = $this->_post('titulo');
                $obj->subtitulo = $this->_post('subtitulo');
                $obj->texto = $this->_post('texto');
                $obj->cms_categoria_id = $this->_post('cms_categoria_id');
                $obj->cms_media_id = $img->id;
                if (!$obj->save()) {
                    $img->delete();
                    @unlink($this->dirImg . trim($this->_post('img')));
                    $error = true;
                    $this->set_message("Error ingresando o modificando  sub categoria...!, favor intente mas tarde...!", 'error');
                }
            } else {
                        $this->set_message("Error Ingresando Imagen de sub categoria..!, favor intente mas tarde...!", 'error');
                        $error = true;
                        @unlink($this->dirImg . trim($this->_post('img')));
            }
        }else{
             $this->set_message("Error, debe ingresar una imagen valida..!, favor intente mas tarde...!", 'error');
             $error = true;
        }
        }
        
        
        if (!$error)
            $this->set_message("Sub Categoria registrada o modificada con exito...!", 'info');

        $this->render_json(!$error);
    }

    public function index() {
        $cat =  new categoria();  
        $this->_data['categ'] = $cat->get();
        $this->db->select('cms_sub_categorias.*,cms_categoria.titulo as categoria, cms_media.path as img');
        $this->db->from('cms_sub_categorias');
        $this->db->join('cms_media', 'cms_media.id  = cms_sub_categorias.cms_media_id');
        $this->db->join('cms_categoria', 'cms_categoria.id = cms_sub_categorias.cms_categoria_id');
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('sub_categorias_/body', array('error' => ' '));
    }

}