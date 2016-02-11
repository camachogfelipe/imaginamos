<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 3-050050
 */
class Home extends Front_Controller {

  public function __construct() {
    $this->_data['anonymous'] = ($this->session->userdata('current_user_one') == TRUE) ? NULL : TRUE;
    $this->session->set_userdata(array('current_page', strtolower(__CLASS__)));
    $this->_data['current_page'] = $this->session->userdata('current_page');
    parent::__construct();
  }

  public function index() {
    //cargamos datos de la firma
    $firma = new quienes_somos();
    $firma->order_by("id", "asc")->get();
    $this->_data['firma'] = $firma->all_to_array(array("id", "cms_titulo1", "cms_titulo2", "cms_texto"));
    //Cargamos datos de los abogados
    $abogados = new abogados();
    $abogados->join_related("imagen")->get();
    $this->_data['abogados'] = $abogados->all_to_array(array("id", "cms_nombre", "cms_especialidad", "cms_descripcion", "imagen_path"));
    //Cargamos las categorias del blog aunque no tengan artículos asociados
    $categorias = new categorias_blog();
    $categorias->order_by("cms_categoria", "asc")->get();
    $this->_data['categorias'] = $categorias->all_to_array(array("id", "cms_categoria"));
    //Cargamos los destacados del blog y las categorias
    $blog = new blog();
    $blog->join_related('categorias_blog')->join_related('imagen')->order_by("cms_fecha", "desc")->order_by("cms_titulo", "asc")->get_where(array("cms_destacado" => 1), 4);
    $this->_data['blog'] = $blog->all_to_array(array("id", "categorias_blog_id", "categorias_blog_cms_categoria", "cms_titulo", "cms_subtitulo", "cms_fecha", "cms_texto", "imagen_path"));
    //Cargamos los libros
    $libros = new libros();
    $libros->join_related('imagen')->order_by("cms_fecha", "desc")->get();
    $this->_data['libros'] = $libros->all_to_array(array("id", "cms_titulo", "cms_autor", "cms_preciopdf", "cms_precioimpreso", "cms_fecha", "cms_descripcion", "imagen_path"));
    return $this->build();
  }

}

?>