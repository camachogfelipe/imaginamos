<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 3-050006
     */

                        

class Internageneral extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$id = $this->uri->segment(2);
		$objblog = new blog();
		$objblog->join_related('categorias_blog')->join_related('imagen')->order_by("cms_fecha", "desc")->get_where(array("id" => $id));
		$this->_data['blog'] = $objblog->all_to_array(array("id", "categorias_blog_id", "categorias_blog_cms_categoria", "cms_titulo", "cms_subtitulo", "cms_fecha", "cms_texto", "imagen_path"));
		$this->_data['blog'] = $this->_data['blog'][0];
		return $this->build();
	}

}
?>