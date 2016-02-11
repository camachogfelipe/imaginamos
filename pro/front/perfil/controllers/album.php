<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Album extends Front_Controller {

    protected $user_area = true;
    private $_datos = null;

    public function __construct() {
        parent::__construct();

        // Mostrar header del perfil del usuario
        $this->show_header_perfil = true;

        // Cargando datos
        $this->_datos = new User;
    }

    // ----------------------------------------------------------------------

    /**
     * Remapeo del método
     */
    public function _remap($method, $params = array()) {
        
        $inshaka_url = null;

        if (!empty($params)) {
            $inshaka_url = end($params);
        } else {
            if ($method === 'mi_perfil') {
                $inshaka_url = $this->userinfo->inshaka_url;
                
                // Redireccion si es solo "perfil"
                if (!empty($inshaka_url)) {
                    return redirect('perfil/' . $inshaka_url, 'refresh');
                }
            }
        }
        

        $this->_datos->get_by_inshaka_url($inshaka_url);

        if (!empty($inshaka_url) && $this->_datos->exists()) {
            
            $this->current_username = $this->_datos->username;

            if (method_exists($this, $method)) {
                return call_user_func_array(array($this, $method), $params);
            }
        }

        return show_404();
    }

    // ----------------------------------------------------------------------

    public function fotos() {
        return $this->set_datos($this->_datos)->set_title('Fotos de ' . $this->_datos->username . ' &ndash; Usuarios de ' . SITENAME, true)->build('albumes/fotos');
    }

    // ----------------------------------------------------------------------

     public function videos() {
         
        // $this->_datos->users_video->get_oembed();
        return $this->set_datos($this->_datos)->set_title('Videos de ' . $this->_datos->username . ' &ndash; Usuarios de ' . SITENAME, true)->build('albumes/videos');
    }
}