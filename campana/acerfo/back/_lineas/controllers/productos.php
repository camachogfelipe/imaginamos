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
class productos extends Back_Controller {

    private $_mapper = 'producto';
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
        $obj = new producto();
        $obj->get_by_id($value);
        $ok = false;
        if ($obj->exists()) {
            $key_media1 = $obj->cms_media_id;
            $key_media2 = $obj->cms_media_id2;
            if ($obj->delete()) {
                $obj_1 = new media();
                $obj_1->get_by_id($key_media1);
                if ($obj_1->exists()) {
                     $this->delete_files($obj_1->path);
                     $obj_1->delete();
                   if(($key_media2!=-1)or(!is_null($key_media2))){
                     $obj_2 = new media();
                     $obj_2->get_by_id($key_media2);
                     if ($obj_2->exists()) {
                         $this->delete_files($obj_2->path);
                         $obj_2->delete();
                    }
                   }
                 }
                       $ok = true;
            } else {
                $ok = false;
                $this->set_alert('Error al eliminar Categoria, por favor revise que no tenga categorias.', 'error');
            }
        } else {
            $this->set_alert('La categoria que desea eliminar no existe...!', 'error');
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
        $data = trim($this->simple_upload('file', 'pdf|doc|docx|xls|cvs'));
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
        $this->db->select('cms_producto.*,cms_sub_categorias.titulo as scategoria ,cms_media.path as img, cms_media1.path as file, cms_categoria.titulo as categoria');
        $this->db->from('cms_producto');
        $this->db->join('cms_media', 'cms_media.id  = cms_producto.cms_media_id');
        $this->db->join('cms_media as cms_media1', 'cms_media1.id  = cms_producto.cms_media_id2','left outer');
        $this->db->join('cms_sub_categorias', 'cms_sub_categorias.id  = cms_producto.cms_sub_categorias_id', 'left outer');
        $this->db->join('cms_categoria', 'cms_categoria.id  = cms_producto.cms_categoria_id', 'left outer');
       
        $datos = $this->getresult($this->db->get());

        if (!empty($datos)) {

            foreach ($datos as $obj) {
                $salida .="  <tr class='odd gradeX parent-delete'>
                                            <td>
                                                <a class='thumbnail' title='Imagen' href='".base_url().$obj->img."' >
                                                    <img style='height:50px;width:50px' src='".base_url().$obj->img."' alt='' />
                                                </a>
                                            </td>                                         

                                            <td>".$obj->titulo ."</td>
                                            <td>".$obj->subtitulo."</td>
                                            <td style='text-align: justify;'>".$obj->intro_text."</td>     
                                            <td style='text-align: justify;'>".substr($obj->texto, 0, 255) ."...</td>
                                 
                                            
                                            <td>
                                                <a class='thumbnail' title='File' href='".base_url().$obj->file."' >
                                                  File
                                                </a>
                                            </td> 
                                            <td>".$obj->scategoria."</td>
                                            <td class='center' width='100px'>
                                                <span class='tip'>
                                                    <a href='".cms_url('lineas/productos/delete')."' class='uibutton special' data-action='special-delete' data-value='".$obj->id."'>Eliminar</a>
                                                    <a id='edit_".$obj->id."' href='".cms_url('lineas/productos/edit/')."' data-value='".$obj->id."' class='uibutton' >Editar</a>
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
                                                $('#intro_text').val(json.intro_text);
                                                $('#file').val(json.file);
                                                $('#img').val(json.img);
																								if(json.cms_sub_categorias_id != '') {
	                                                $('#cms_sub_categorias_id').val(json.cms_sub_categorias_id);
																								}
																								if(json.cms_categoria_id != '') {
	                                                $('#cms_sub_categorias_id').val(json.cms_categoria_id);
																								}
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
            $object = new producto();
            $object->get_by_id($this->_post('id'));
           if($object->exists()){
              $imedia = new media(); 
              $imedia->get_by_id($object->cms_media_id);
              $fmedia = new media(); 
              $fmedia->get_by_id($object->cms_media_id2);
							if(preg_match("/^C[0-9]$/", $object->cms_sub_categorias_id) == true) :
								$scate = NULL;
								$categ = substr($object->cms_sub_categorias_id, 1);
							else :
								$scate = $object->cms_sub_categorias_id;
								$categ = NULL;
							endif;
               $datos = array(
                  "ok" => true,
                  "id" => $object->id,
                  "titulo" => $object->titulo,
                  "img" => str_replace($this->dirImg, "", $imedia->path),
                  "file" => str_replace($this->dirImg, "", $fmedia->path),
                  "cms_sub_categorias_id" => $scate,
			  	  "cms_categoria_id" => $categ,
                  "subtitulo" => $object->subtitulo,
                  "texto" => $object->texto,
                  "intro_text" => $object->intro_text);
           }else{
            $datos = array( "ok" => false,"error" => true,
            "messages" => "No existe un objecto asociado".$object->error->string );
           }
       echo json_encode($datos);
    }
    
    public function add() {
        $error = false;
          $obj = new producto();
         if(is_numeric($this->_post('id')))
            $obj->get_by_id($this->_post('id'));
        else
            $obj->id = "";
        
        $this->form_validation->set_rules('titulo', 'Titulo', 'required|min_length[5]|max_length[35]');
        $this->form_validation->set_rules('subtitulo', 'Sub Titulo', 'required|min_length[5]|max_length[55]');
        $this->form_validation->set_rules('texto', 'Texto', 'required|min_length[5]|max_length[892]');
        $this->form_validation->set_rules('intro_text', 'Texto Introductorio', 'required|min_length[5]|max_length[120]');
        $this->form_validation->set_rules('cms_sub_categorias_id', 'Sub Categoria', 'required');
        if (!$this->form_validation->run()) {
          $error = true;
          $this->set_message("Error validando datos, ".$this->form_validation->error_string() , 'error');
        }else{
         if ($this->_post('img') != "-1") {
            $img = new media();
            $img->id = "";
            $img->path = $this->dirImg . trim($this->_post('img'));
            $img->type = 't';
            if ($img->save()) {
                 if ($this->_post('file') != "-1") {
                    $file = new media();
                    $file->id = "";
                    $file->path = $this->dirImg . trim($this->_post('file'));
                    $file->type = 'f';
                    if ($file->save()){
                         $obj->cms_media_id2 = $file->id;
                    } else {
                        $this->set_message("Error Ingresando Imagen de producto..!, favor intente mas tarde...!", 'error');
                        $error = true;
                        @unlink($this->dirImg . trim($this->_post('file')));
                    }
                }
                        $obj->titulo = $this->_post('titulo');
                        $obj->subtitulo = $this->_post('subtitulo');
                        $obj->texto =   $this->_post('texto');
                        $obj->intro_text = $this->_post('intro_text');
                        $obj->cms_media_id = $img->id;
												if(preg_match("/^C[0-9]/", $this->_post('cms_sub_categorias_id')) == true) :
													$obj->cms_sub_categorias_id = 0;
													$obj->cms_categoria_id = substr($this->_post('cms_sub_categorias_id'), 1);
												else :
													$obj->cms_sub_categorias_id = $this->_post('cms_sub_categorias_id');
													$obj->cms_categoria_id = 0;
												endif;
                        if(!$obj->save()){
                            if ($this->_post('file') != "-1") {  
                              $file->delete();
                              @unlink($this->dirImg . trim($this->_post('img')));
                            }
                               $img->delete();
                               @unlink($this->dirImg . trim($this->_post('file')));
                               $error = true;
                               $this->set_message("Error Ingresando o actualizando producto...!, favor intente mas tarde...!", 'error');
                        }
             } else {
                @unlink($this->dirImg . trim($this->_post('img_min')));
                $this->set_message("Error Ingresando Imagen del producto...!, favor intente mas tarde...!", 'error');
                $error = true;
            }
        }else{
            $this->set_message("Error, Imagen del producto no valida...!, favor intente mas tarde...!", 'error');
            $error = true;
        }
        }
   
        if (!$error)
            $this->set_message("Producto registrado o actualizado con exito...!", 'info');

        $this->render_json(!$error);
    }

    public function index(){
        $lin =  new linea();  
        $this->_data['line'] = $lin->get();
        
        $cat =  new categoria();  
        $this->_data['categ'] = $cat->get();
        
        $scat =  new sub_categoria();  
        $this->_data['scateg'] = $scat->get();
        
        $this->db->select('cms_producto.*,cms_sub_categorias.titulo as scategoria ,cms_media.path as img, cms_media1.path as file , cms_categoria.titulo as categoria');
        $this->db->from('cms_producto');
        $this->db->join('cms_media', 'cms_media.id  = cms_producto.cms_media_id');
        $this->db->join('cms_media as cms_media1', 'cms_media1.id  = cms_producto.cms_media_id2','left outer');
        $this->db->join('cms_sub_categorias', 'cms_sub_categorias.id  = cms_producto.cms_sub_categorias_id', 'left outer');
				$this->db->join('cms_categoria', 'cms_categoria.id  = cms_producto.cms_categoria_id', 'left outer');
        $this->_data['datos'] = $this->getresult($this->db->get());
        return $this->build('productos_/body', array('error' => ' '));
    }

}