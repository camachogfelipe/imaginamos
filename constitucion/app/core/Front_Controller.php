<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Front_Controller extends CMS_Controller {

  protected $layout;
  protected $include = array('header', 'menu', 'footer');
  protected $userinfo = null;
  protected $urls = array();
  protected $layout_secondary_style = true;
  protected $current_inshaka_url = null;
  protected $current_username = null;

  public function __construct() {
    parent::__construct();
    $this->load->library('pagination');
    $this->load->library('session');
    $this->_data['logged'] = $this->isLogged();
    $this->session->set_userdata(array('current_user_one' => TRUE));
    $this->layout = 'general';

    $this->userinfo = $this->ACL->user()->row();

    $this->_data['urls'] = $this->urls;

    if ($this->is_cliente() or $this->is_proveedor()) {
      $this->current_user = new \User;
      $this->current_user->join_related('group')->get_by_id($this->session->userdata('user_id'));

      $this->_data['current_user'] = $this->current_user->to_array();
      $this->_data['current_user_obj'] = $this->current_user;
    }

    $contacto = new contacto(NUll);
    $contacto->get_by_id(1);
    $this->_data['contacto'] = $contacto;

    $redes = new redes_sociales();
    $this->_data['youtube'] = $redes->get_by_red_social('youtube');

    $redes = new redes_sociales();
    $this->_data['facebook'] = $redes->get_by_red_social('facebook');

    $redes = new redes_sociales();
    $this->_data['twitter'] = $redes->get_by_red_social('twitter');

    $redes = new redes_sociales();
    $this->_data['instagram'] = $redes->get_by_red_social('instagram');

    $redes = new redes_sociales();
    $this->_data['google_plus'] = $redes->get_by_red_social('google_plus');

    $redes = new redes_sociales();
    $this->_data['linkedin'] = $redes->get_by_red_social('linkedin');

    $redes = new redes_sociales();
    $this->_data['vimeo'] = $redes->get_by_red_social('vimeo');
  }

  // ----------------------------------------------------------------------

  /**
   * Build mejorado del Front
   * 
   * @param string $view
   * @param type $data
   * @return type
   */
  protected function build($view = null, $data = array()) {
    if (empty($view)) {
      $view = 'body';
    }
    // Obtener footer
    $data = array_merge($data, $this->_data);
    foreach ($this->include as $partial) {
      $this->template->set_partial($partial, FRONTTEMPLATE . "partials/{$partial}");
    }
    return $this->template->set_layout(FRONTTEMPLATE . 'layouts/' . $this->layout)->build($view, $data, false, 'assets');
  }

  /**
   * 
   * @param type $view
   * @param type $data
   * @return type
   */
  public function buildajax($view = 'body', $data = array()) {
    $data = array_merge($data, $this->_data);
    foreach ($this->include as $partial) {
      $this->template->set_partial($partial, FRONTTEMPLATE . "partials/{$partial}");
    }
    return $this->template->set_layout(FRONTTEMPLATE . 'layouts/layout_ajax')->build($view, $data);
  }

  /**
   * 
   * @param type $consulta
   * @return type
   */
  function getresult(&$consulta) {
    if ($consulta->num_rows() > 0) {
      foreach ($consulta->result() as $fila) {
        $data[] = $fila;
      }
      return $data;
    }
  }

  public function isLogged() {
    if (!isset($this->session->userdata['id']) || $this->session->userdata['id'] === FALSE) :
      return FALSE;
    else :
      return TRUE;
    endif;
  }

}
