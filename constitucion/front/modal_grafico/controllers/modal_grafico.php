<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 3-050006
     */

                        

class Modal_grafico extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$id = $this->uri->segment(2);
		$this->load->model('comentarios');
		$comment = new comentarios();
		$comment->join_related('imagen')->get_by_id($id);
		$this->_data['comentario'] = $comment->to_array(array("cms_titulo", "cms_comentario", "imagen_path"));
		//echo "<pre>";print_r($this->_data['comentario']);echo "</pre>";
		return $this->buildajax();
	}

}
?>