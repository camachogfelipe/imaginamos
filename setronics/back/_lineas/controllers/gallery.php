<?php //

/**
 * @author rigobcastro
 */
class gallery extends Back_Controller {

    protected $admin_area = true;
    private $model = 'producto';

    public function __construct() {
        parent::__construct();
       $this->add_modular_assets('js', 'action');
    }

    // ----------------------------------------------------------------------

    public function delete() {
        $value = $this->_get('value');
        $related_value = $this->_get('related_value');
        $error = false; 

        $obj = new producto();
        $obj->get_by_id($value);

        $img = new imagen();
        $img->get_by_id($related_value);
        $path  = $img->path;

        if($obj->exists()){
            if($obj->delete($img)){
                $this->delete_files($path);
            }else{
                $msg = $obj->error->string;
                $error = true;
            }
        }else{
            $msg = "El objecto seleccionado no existe";
            $error = true;
        }
        if ($error)
            $this->set_alert('Error al eliminar datos,'.$msg, 'error');
      $this->render_json(!$error);
    }


    public function add() {
        if(is_numeric($this->_get('id'))){
        $error = false;
        $dato = $this->upload();
        if ($dato !== false)
        {
            $imagen = new imagen();
            $imagen->id = "";
            $imagen->path = $this->dirImg.$dato;
            if ($imagen->save())
            {
                $gallery = new producto();
                $gallery->get_by_id($this->_get('id'));
                
                
                if (!$gallery->save_imagen($imagen))
                {
                    $imagen->delete();
                    @unlink($this->dirImg . $dato);
                    $error = true;
                }
            } else
            {
                @unlink($this->dirImg . $dato);
                $error = true;
            }
        } else
        {
            $error = true;
        }
      }else{
       $error = true;
      }
          ($error) ? $this->Error_No_Found(json_encode(array('ok' => 'false'))) : json_encode(array('ok' => 'true'));

    }

    public function edit() {
        $object = new categoria(); 
        $object->get();
        echo $this->_get_json_datos($object);
     }

}