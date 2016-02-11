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
class clientes extends Back_Controller {

    private $_mapper = 'imagen';
    
    
    public function __construct() {
        parent::__construct();
        $this->superadmin_area();
        $this->dirImg = "./assets/imagenes/";
    }


    public function delete()
    {
        $field = $this->_get('field');
        $value = $this->_get('value');
        $delete_file = $this->_get('delete_file');
        $cliente = new cliente();
        $cliente->get_by_id($value);
        $ok = false;
        if ($cliente->exists())
        {   $restore = $cliente;
            $key = $cliente->cms_image_id;
            if ($cliente->delete())
            {
                $img = new image();
                $img->get_by_id($key);
                if($img->delete()){
                      $this->delete_files ($delete_file);
                      $ok = true;
                }else{
                     $restore->save();
                     $ok = false;
                     $this->set_alert('Error al eliminar el item.','error');
                }
        } else
            {
                $this->set_alert('Error al eliminar el item.','error');
                $ok = false;
            }
        } else
        {
             $this->set_alert('Error al eliminar el item.','error');
             $ok = false;
        }
        $this->render_json($ok);
    }
    
    public function datos_ajax() {
        $salida ="";
         $this->db->select('*');
        $this->db->from('cms_image');
        $this->db->join('cms_cliente','cms_cliente.cms_image_id = cms_image.id');
        $datos = $this->getresult($this->db->get());
            
                                if(!empty($datos)){
                            
                                 foreach ($datos as $img) {
                                  $salida .="  <tr class='odd gradeX parent-delete'>
                                        <td>
                                            <a class='thumbnail' title='Imagen' href='".base_url()."assets/".$img->path . $img->file."'>
                                                <img style='height:50px;width:50px' src='".base_url()."assets/".$img->path .$img->file."' alt='' />
                                            </a>
                                        </td>
                                        <td>".$img->cliente_name."</td>
                                        <td class='center' width='100px'>
                                            <a href='".cms_url('admin/clientes/delete')."' class='btn btn-danger btn-small logic-delete' data-delete_file='".$img->file."' data-field='id' data-value='".$img->id."'>Eliminar</a>
                                        </td>
                                    </tr>";
                                 }
                         
                                }
         echo $salida;

    }
    
      public function save_upload()
    {
        $error = false;
        $dato = $this->simple_upload('file');
        if ($dato !== false)
        {
            $imagen = new image();
            $imagen->id = "";
            $imagen->file = $dato;
            $imagen->path = "imagenes/";
            if ($imagen->save())
            {
                $cliente = new cliente();
                $cliente->id = "";
                $cliente->cliente_name = $this->_post('cliente_name');
                $cliente->cms_image_id = $imagen->id;
                if (!$cliente->save())
                {
                    $imagen->delete();
                    @unlink($this->dirImg . $dato);
                    $error = true;
                }
            } else
            {
                @unlink($filePath);
                $error = true;
            }
        } else
        {
            $error = true;
        }

        if($error)
          $this->set_alert_session("Error no se pudo crear el cliente deseado, favor intente mas tarde...!",'error');
         else
          $this->set_alert_session("Cliente registrado con exito...!",'info');

         redirect("cms/admin/clientes");
    }

    public function index()
    {
        $this->db->select('*');
        $this->db->from('cms_image');
        $this->db->join('cms_cliente','cms_cliente.cms_image_id = cms_image.id');
        $this->_data['datos'] = $this->getresult($this->db->get());

        return $this->build('clientes/body',array('error' => ' '));
    }

}