<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Back_Controller extends CMS_Controller {
    
    protected $current_user;
    
    
    /** Custom Var **/
    public $dirImg = "./uploads/";

    public function __construct() {

        // Si admin area esta definido y es verdadero, 
        // correr el condicional de admin area
        if (isset($this->admin_area)) {
            if (true === $this->admin_area)
                $this->admin_area();
        }

        parent::__construct();
        /** Current user **/
        $this->current_user = new \User;
        $this->current_user->get_by_id($this->session->userdata('user_id'));
        $this->_data['current_user'] = $this->current_user->to_array();
        
    }

    // ----------------------------------------------------------------------

    /**
     * Build mejorado del Back
     * 
     * @param string $view
     * @param type $data
     * @return type
     */
    protected function build($view = null, $data = array()) {


        if (empty($view)) {
            $view = 'body';
        }

        // Definiendo variables del back
        $data['menu_panel'] = $this->_main_menu();

        // Is superadmin?
        $data['is_superadmin'] = $this->is_superadmin();

        // Public assets
        $this->_data['public_assets'] = $this->publicAssets;

        // Alert messages
        $alert_messages = $this->session->flashdata('alert_messages');
        if (empty($alert_messages)) {
            $alert_messages = $this->_alert_messages;
        }
        $this->_data['alert_messages'] = $alert_messages;

        $data = array_merge($data, $this->_data);

        return $this->template
                        ->set_partial('menu_panel', ADMINPATH . 'partials/beoro/menu')
                        ->set_partial('modals', ADMINPATH . 'partials/beoro/modals')
                        ->set_partial('toolbar', ADMINPATH . 'partials/beoro/toolbar')
                        ->set_layout(ADMINPATH . 'layouts/beoro')
                        ->build($view, $data);
    }

    // ----------------------------------------------------------------------

    protected function add_asset_module($asset = array(), $module = false) {
        return parent::add_asset_module($asset, $module, BACKPATH);
    }

    // ----------------------------------------------------------------------

    private function _main_menu() {
        $menu = array();

        // Items por defecto
        $menu[] = array(
            'title' => 'Dashboard',
            'url' => 'cms/dashboard',
            'icon' => 'home'
        );


        // Si es super administrador agregar el boton de administracion general
        if (true === $this->is_superadmin() && false === $this->_superadmin_area) {
            $menu[] = array(
                'title' => 'Administración',
                'url' => 'cms/admin/dashboard',
                'icon' => 'home'
            );
        } elseif (true === $this->is_superadmin() && true === $this->_superadmin_area) {
            $menu[] = array(
                'title' => 'Administradores',
                'url' => 'cms/admin/administradores',
                'icon' => 'home'
            );
            $menu[] = array(
                'title' => 'Menús',
                'url' => 'cms/admin/menus',
                'icon' => 'home'
            );
        }

        if (false === $this->_superadmin_area) {
            // Cargando modelo del menu
            $this->load->model(ADMINPATH . 'menu');

            $datos_menu = new Menu();

            if ($datos_menu->get()->exists()) {
                foreach ($datos_menu->all as $item) {
                    $menu[] = array(
                        'title' => $item->title,
                        'url' => $item->url,
                        'icon' => $item->icon
                    );
                }
            }
        }

        $this->_data['menu_superadmin'] = $this->_superadmin_area;

        return $menu;
    }

    // ----------------------------------------------------------------------
    
    
    /**  custom method  **/
    
      function getresult(&$consulta) {
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        }
    }
    
    //cargar variable a un modelo
    public function loadVar(&$obj) {
      foreach ($obj->fields as $key) {
         if(!is_null($key) && $key!="id"){
             switch ($key) {
                 case "imagen_id":
                    $obj->{$key} = ($this->cagarImagen()!==false)?$this->cagarImagen()->id:$this->_post('imagen_id');  
                 break;
                 case "parrafo_id":
                     $this->loadobj($obj, $key);
                 break;
                 default:
                   // $this->loadobj($obj, $key);
                     $obj->{$key} = $this->_post($key); 
                 //    $this->cagarFile($obj,$key);
                 break;
             }
         }
      }
    }
    
   function upload_file($file,$type,$tamano = 80000 ) {
        $data = false;
        $data = trim($this->simple_upload($file, $type,$tamano));
        if (!$data) {
            return false;
        } else {
            return $data;
        }
    }
    
    public function loadobj(&$obj1,$class = ''){
        if(is_numeric(strpos($class, '_id'))){
        $class = str_replace('_id', "",$class);
        $obj = new  $class();
        $obj->get_by_id($obj1->{$class."_id"});
        if($obj->exists()){
          $this->loadVar($obj);
          $obj->save(); 
        }else{
            $this->loadVar($obj);
            $obj->id=""; 
            $obj->save();
        }
        $obj1->{$class."_id"} = $obj->id ;  
        }  else {
             if(is_numeric(strpos($class, 'path_'))){
                  $path1 = $this->upload_file('path_certificado','pdf|xls|docx');
                  if($path1 != false)
                     $obj1->{$class} = $this->dirImg.$path1;
             }else{  
               $obj1->{$class} = $this->_post($class); 
             }
        }
               
    }

    public function cagarImagen($class = "imagen"){
        $imagen = new $class();
        $imagen->get_by_path($this->_post($class."_id"));
        $dato = $this->simple_upload($class."_path");
        if($imagen->exists()){
           if($dato !== false){
             $this->delete_files($imagen->path);
             $imagen->path = $this->dirImg.$dato;
             $imagen->save();
           }
        }else{
           if($dato !== false){
             $imagen->id=""; 
             $imagen->path = $this->dirImg.$dato;
             $imagen->save();
           }else{
                return false; 
           }
        }
        return $imagen;        
    }
    
    
    public function cagarFile(&$obj, $class = "file_path") {
        if (is_numeric(strpos($class, '_path'))) {
            $obj1 = clone $obj;
            $obj1->{"get_by_" . $class . "_path"}($this->_post($class . "_path"));
            $dato = $this->simple_upload($class . "_path");
            if ($obj1->exists()) {
                if ($dato !== false) {
                    $this->delete_files($obj1->{$class});
                    $obj->{$class} = $this->dirImg . $dato;
                }
            }
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
    
        /*
     * @author Elbert Tous
     * @param , type string, descripcion modelo a obtener
     * @param , type array key - value, descripcion conjunto de mensajes de errores y de exito 
     * @return string, json encode
     * @example, 
     *
     *   $msg = array('error_get' => 'Error al intentar cargar los datos');
     *   echo _get_json_datos($this->_mapper,$msg); 
     *
     * */

    public function _get_json_datos(&$object,$datos = array(), $msg = array())
    {   $result = array();
        if ($object->exists())
        {
            $datos = array_merge($datos, $object->fields); 
            foreach ($datos as $field)
            {
                $result[$field] = $object->{$field};
            }
            $result['ok'] = true;
        } else
        {
            $result['messages'] = isset($msg['error_get']) ? $msg['error_get'] : "Datos temporalmete no disponibles...! " . $object->error->string;
            $result['ok'] = false;
        }
        return json_encode($result);
    }
    
    
        public function Error_No_Found($datos)
    {
        $this->output->set_header('Content-Type: application/json');
        $this->output->set_status_header('404');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header('Access-Control-Allow-Origin: ' . base_url());
        $this->output->set_header('Content-Length: ' . strlen($_output));
        return $this->output->set_output($datos);
    }
    
    
     function upload()
    {
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0",false);
        header("Pragma: no-cache");
        $targetDir = $this->dirImg;
        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds
        @set_time_limit(5 * 60);
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
        $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';
        $fileName = preg_replace('/[^\w\._]+/','_',$fileName);
        if ($chunks < 2 && file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName))
        {
            $ext = strrpos($fileName,'.');
            $fileName_a = substr($fileName,0,$ext);
            $fileName_b = substr($fileName,$ext);
            $count = 1;
            while (file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName_a . '_' . $count . $fileName_b))
                $count++;
            $fileName = $fileName_a . '_' . $count . $fileName_b;
        }
        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;
        if (!file_exists($targetDir))
            @mkdir($targetDir);
        if ($cleanupTargetDir && is_dir($targetDir) && ($dir = opendir($targetDir)))
        {
            while (($file = readdir($dir)) !== false)
            {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;
                if (preg_match('/\.part$/',$file) && (filemtime($tmpfilePath) < time() - $maxFileAge) && ($tmpfilePath != "{$filePath}.part"))
                {
                    @unlink($tmpfilePath);
                }
            }
            closedir($dir);
        } else
            return false;
        if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
            $contentType = $_SERVER["HTTP_CONTENT_TYPE"];
        if (isset($_SERVER["CONTENT_TYPE"]))
            $contentType = $_SERVER["CONTENT_TYPE"];
        if (strpos($contentType,"multipart") !== false)
        {
            if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name']))
            {
                $out = fopen("{$filePath}.part",$chunk == 0 ? "wb" : "ab");
                if ($out)
                {
                    $in = fopen($_FILES['file']['tmp_name'],"rb");
                    if ($in)
                    {
                        while ($buff = fread($in,4096))
                            fwrite($out,$buff);
                    } else
                        return false;
                    fclose($in);
                    fclose($out);
                    @unlink($_FILES['file']['tmp_name']);
                } else
                    return false;
            } else
                return false;
        } else
        {
            $out = fopen("{$filePath}.part",$chunk == 0 ? "wb" : "ab");
            if ($out)
            {
                $in = fopen("php://input","rb");
                if ($in)
                {
                    while ($buff = fread($in,4096))
                        fwrite($out,$buff);
                } else
                    return false;
                fclose($in);
                fclose($out);
            } else
                return false;
        }
        if (!$chunks || $chunk == $chunks - 1)
        {
            rename("{$filePath}.part",$filePath);
        }
        return str_replace($this->dirImg."\\","",$filePath);
    }

    
}