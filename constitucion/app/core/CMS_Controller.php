<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH . "third_party/MX/Controller.php";

class CMS_Controller extends MX_Controller {
   
    
    protected $ACL;
    protected $_data = array(), $_messages, $_alertbox,$publicAssets,$_alert_messages;
    protected $_alert_sticker = array(), $_messages_type = 'info', $_noty = array();
    protected $_superadmin_area = false;
    
    protected $title;
    protected $current_page;
    protected $site_config;
    

    public function __construct() {
  
        parent::__construct();
        
        // Cargando la configuracion del sitio
        $this->site_config = (object) $this->config->load('site_config', true);
         
        
        // Load current page
        $this->current_page = ($this->uri->segment(1) ? $this->uri->segment(1) : 'home') ;
        
        // Asignacion a variable ACL de la libreria funcional
        $this->ACL =& $this->ion_auth;
        
        $this->_data['alert_messages'] = null;
        $this->_data['site_config'] = $this->site_config;
        // Public Assets initializator
        $this->publicAssets = array(
            'js' => array(),
            'css' => array(),
            'src' => array()
        );
        
        $this->output->enable_profiler(false);
    }
    
    // ----------------------------------------------------------------------
    
    /**
     * Alias setter para el "data" de la pagina
     * 
     * @param void $datos
     * @return \CMS_Controller
     */
    protected function set_datos($datos = null) {
        $this->_data['datos'] = $datos;
        return $this;
    }

    // ----------------------------------------------------------------------
    
    public function set_title($title = null, $full = false) {
        if (!empty($title)) {
            if (!$full) {
                $this->template->title($title, SITENAME);
            } else {
                $this->template->title($title);
            }
        }
        return $this;
    }

    // ----------------------------------------------------------------------
    
    public function set_description($description) {
        if (!empty($description)) {
           $this->template->description = $description;
        }
        return $this;
    }
    
    // ----------------------------------------------------------------------
    
    public function set_current_page($page) {
        if (!empty($page)) {
           $this->current_page = $page;
        }
        return $this;
    }
    
    // ----------------------------------------------------------------------
   
    
    /**
     * TIene acceso al CMS
     * 
     * @param type $id
     * @return type
     */
    protected function have_admin_access($id = false) {
        return ($this->is_superadmin($id) OR $this->is_admin($id) ? true : false);
    }

    // ----------------------------------------------------------------------

    /**
     * Superadmin area.
     * 
     * Al llamar a este método, verificamos si es un superadministrador y
     * habilitamos el trigger del "superadmin_area" para su uso futuro.
     * 
     * @return \CMS_Controller
     */
    protected function superadmin_area() {
      
        if (false === $this->is_superadmin()) {
            return show_error('No tiene los permisos suficientes para esta area.');
        }

        $this->_superadmin_area = true;

        return $this;
    }

    // ----------------------------------------------------------------------
    
    protected function admin_area() {
        if (false === $this->have_admin_access()) {
            redirect(cms_url('login'));
        }
        
        return $this;
    }
    
    // ----------------------------------------------------------------------
   
    protected function is_superadmin($id = false) {
        return $this->ion_auth->is_superadmin($id);
    }

    // ----------------------------------------------------------------------

    protected function is_admin($id = false) {
        return $this->ion_auth->is_admin($id);
    }
    
    // ----------------------------------------------------------------------
    
    protected function is_usuario($id = false) {
        $is = $this->ion_auth->is_creativo($id);
        
        if(!$is){
            $is = $this->ion_auth->is_empresa($id);
        }
        
        return $is;
    }

    protected function is_cliente($id = false) {
        $is = $this->ion_auth->is_cliente($id);
        return $is;
    }
    
    protected function is_proveedor($id = false) {
        $is = $this->ion_auth->is_proveedor($id);
        return $is;
    }

  
    protected function set_message($message = null, $message_type = 'info') {
        if (!empty($message)) {
            $this->_messages .= $message;
            $this->_messages_type = $message_type;
        }
        return $this;
    }

    // ----------------------------------------------------------------------
    
    public function set_alert($message = null, $type = 'info', $delay = true, $delay_seconds = 5000, $position = 'top-center') {
        $this->_alert_messages .= create_alert_sticker($message, $type, $delay, $delay_seconds);
        $this->_alert_sticker[] = array(
            'message' => $message,
            'autoclose' => $delay_seconds,
            'type' => $type,
            'position' => $position
        );
        return $this;
    }
    
    public function set_alert_session($message = null, $type = 'info', $delay = true, $delay_seconds = 5000) {
        return $this->session->set_flashdata('alert_messages', create_alert_sticker($message, $type, $delay, $delay_seconds));
    }

    // ----------------------------------------------------------------------
   
   
    
    protected function set_alertbox($alert = null, $type = 'info', $no_delay = false) {
        if (!empty($alert)) {
            $type = trim(strtolower($type));
            
            if($type == 'error' OR $no_delay == true){
                $type .= ' no-delay';
            }
            
            $format = '<div class="alert alert-%s fade in"><a class="close" data-dismiss="alert" href="#">&times;</a>%s</div>';
            $this->_alertbox .= sprintf($format, $type, $alert);


            $this->_data['alert_messages_html'] = html_purify($this->_alertbox);
        }
        return $this;
    }
    
    // ----------------------------------------------------------------------
   
   
    
    protected function set_alertbox_html($alert = null, $type = 'info', $no_delay = false) {
        if (!empty($alert)) {
            $type = trim(strtolower($type));
            
            if($type == 'error' OR $no_delay == true){
                $type .= ' no-delay';
            }
            
            $format = '<div class="alert alert-%s fade in">%s</div>';
            $this->_alertbox .= sprintf($format, $type, $alert);

            return html_purify($this->_alertbox);
        }
        return false;
    }

     // ----------------------------------------------------------------------
    
     protected function create_noty($text = null, $type = 'alert', $layout = 'top', $timeout = 5, $modal = false) {
        if (!empty($text)) {

            if (!empty($timeout)) {
                $timeout *= 1000;
            }

            $noty = array(
                'layout' => $layout,
                'text' => trim($text),
                'type' => $type,
                'timeout' => $timeout,
                'modal' => $modal,
            );

            $this->_noty[] = $noty;
        }

        return $this;
    }

     // ----------------------------------------------------------------------
    
    protected function view($view, $output = true, array $data = array()) {
        
        if (!isset($this->_data['site_config'])) {
            $this->_data['site_config'] = $this->site_config;
        }
        
        $view = $this->load->view($view, array_merge($this->_data, $data), $output);
        $html = Minify_html::minify($view);
        
        // reset data
        $this->_data = null;
        return $html;
    }

    // ----------------------------------------------------------------------
   

    protected function add_asset_module($asset = array(), $module = false, $mod_path = null) {

        if (!empty($asset)) {
            foreach ($asset as $type => $file) {
                if (is_array($file)) {
                    foreach ($file as $f) {
                        $this->add_asset_module(array($type => $f), $module, $mod_path);
                    }
                } else {

                    $_path = NULL;


                    if (!$module) {
                        $reflector = new ReflectionClass($this);
                        $fn = $reflector->getFileName();

                        $_clean_path = end(explode('\\', dirname(dirname($fn))));
                        $_path = str_replace('/controllers', '/', $_clean_path);
                    } else {
                        $_path .= $mod_path . $module . DS;
                    }


                    $file = $_path . DS . $type . DS . $file . '.' . $type;


                    $file = str_replace(FCPATH, '', $file);
                    $file = str_replace('//', '/', $file);
                    $file = trim($file);


                    switch ($type) {
                        case 'js':
                            $this->carabiner->js($file);
                            break;
                        case 'css':
                            $this->carabiner->css($file);
                            break;
                    }
                }
            }
        }


        return $this;
    }

    // ----------------------------------------------------------------------
    
    protected function render_noty() {
        $return = null;
        if( ! empty($this->_noty)){
            $return .= '<script>(function($){$(function(){';
            foreach($this->_noty as $_noty){
                $_noty = json_encode($_noty);
                $return .= "noty({$_noty});";
            }
            $return .= ' });})(window.jQuery);</script>';
        }
        
        return $return;
    }
    
    // ----------------------------------------------------------------------
    
    public function add_modular_assets($type, $files = array(), $module = null) {

        if (empty($module)) {
            $module = $this->router->fetch_module();
        }

        if (is_array($type)) {
            foreach ($type as $_type => $_asset) {
                return $this->addPublicAssets($_type, $_asset, $module);
            }
        } else {
            $publicAssets = & $this->publicAssets[$type];
            if (!is_array($files)) {
                $files = array($files);
            }

            foreach ($files as &$file) {
                $file = base_url('back/' . $module . '/public/' . $type . '/' . $file . '.' . $type);
                array_push($publicAssets, $file);
            }
        }

        return $this;
    }
     
     public function add_modular_front_assets($type, $files = array(), $module = null) {

        if (empty($module)) {
            $module = $this->router->fetch_module();
        }

        if (is_array($type)) {
            foreach ($type as $_type => $_asset) {
                return $this->addPublicAssets($_type, $_asset, $module);
            }
        } else {
            $publicAssets = & $this->publicAssets[$type];
            if (!is_array($files)) {
                $files = array($files);
            }

            foreach ($files as &$file) {
                $file = base_url('front/' . $module . '/public/' . $type . '/' . $file . '.' . $type);
                array_push($publicAssets, $file);
            }
        }

        return $this;
    }

    // ----------------------------------------------------------------------

    protected function render_json($ok = NULL) {
        $this->_data = (array) $this->_data;
        // Preload resources
        if (!empty($this->_alert_sticker)) {
            $this->_data['alert_sticker'] = $this->_alert_sticker;
        }
        
        // Limpiar datos de configuración
        if(isset($this->_data['site_config'])){
            unset($this->_data['site_config']);
        }

        // Ok boolean verify
        if (!isset($this->_data['ok'])) {
            if (is_null($ok)) {
                $ok = $this->_ok_json;
            }
            $this->_data['ok'] = $ok;
        }

        // Output init
        $_output = json_encode($this->_data);

        $this->output->set_header('Content-Type: application/json');
        $this->output->set_status_header('200');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header('Access-Control-Allow-Origin: ' . base_url());
        $this->output->set_header('Content-Length: ' . strlen($_output));

        return $this->output->set_output($_output);
    }

    // ----------------------------------------------------------------------
    
    /**
     * Render plain JSON.
     * 
     * Retornar un arreglo JSON para mostrar via AJAX
     * 
     * @param array $data
     * @return JSON
     */
    protected function render_plain_json(array $data = array()){
        // Output init
        $_output = json_encode($data);

        $this->output->set_header('Content-Type: application/json');
        $this->output->set_status_header('200');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header('Access-Control-Allow-Origin: ' . base_url());
        $this->output->set_header('Content-Length: ' . strlen($_output));

        return $this->output->set_output($_output);
    }

    protected function _post($field = NULL, $xss = false) {
        return $this->input->post($field, $xss);
    }

    // ----------------------------------------------------------------------

    protected function _get($field = NULL, $xss = false) {
        return $this->input->get($field, $xss);
    }
    
    // ----------------------------------------------------------------------

    protected function has_perm($perm = NULL, $show_error = false) {
        $check = $this->permission->has($perm);

        if ($show_error) {
            ($check) OR show_error('Permisos insuficientes para esta sección, por ello, su IP y geolocalización han sido enviadas a un centro de investigación federal.', 503, 'Detección de actividad sospechosa por parte del sistema');
        }

        return $check;
    }

}