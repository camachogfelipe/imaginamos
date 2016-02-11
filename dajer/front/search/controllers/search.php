<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class search extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $this->search_data();
        return $this->build();
    }
    // ----------------------------------------------------------------------
    
    /*
     * @name, search_data
     * @author, Elbert Tous Ballesteros
     * @email, elbert.tous@imaginamos.co
     * @empresa, Imaginamos S.A.S | Todos los derechos resrvados.
     * @param, variable POST de nombre q
     * @return $this->_data['buscador']
     * @Modo de Uso 
     * Controller
     * $this->search_data();
     * 
     * View
     * echo $buscador; 
     * 
     */
    public function search_data() {
		$datos = array(); 
        $needle = strtolower($this->input->post('q'));
        
        $categorias = new categoria();
        $categorias->where('categoria_id', NULL)->get();
        foreach ($categorias as $cat) {
            $needlePos = strpos(strtolower($cat->titulo), $needle);
            $needlePos1 = strpos(strtolower($cat->texto), $needle);
            if (($needlePos !== false) OR ($needlePos1 !== false))
                $datos[] = array('titulo' => $cat->titulo, 'contents' => strip_tags(substr($cat->texto, $needlePos, 1000)), 'url' => base_url() . "productos/subcategorias/" . $cat->id);
        }

        $categorias = new categoria();
        $categorias->where('categoria_id <>', '')->get();
        foreach ($categorias as $cat) {
            $needlePos = strpos(strtolower($cat->titulo), $needle);
            $needlePos1 = strpos(strtolower($cat->texto), $needle);
            if (($needlePos !== false) OR ($needlePos1 !== false))
                $datos[] = array('titulo' => $cat->titulo, 'contents' => strip_tags(substr($cat->texto, $needlePos, 1000)), 'url' => base_url() . "productos/list_productos/" . $cat->id);
        }

        $pro = new producto();
        $pro->get();
        foreach ($pro as $p) {
            $needlePos = strpos(strtolower($p->titulo), $needle);
            $needlePos1 = strpos(strtolower($p->texto), $needle);
            $needlePos2 = strpos(strtolower($p->intro), $needle);
            if (($needlePos !== false) OR ($needlePos1 !== false) OR ($needlePos1 !== false))
                $datos[] = array('titulo' => $p->titulo, 'contents' => strip_tags(substr($p->texto, $needlePos, 1000)), 'url' => base_url() . "productos/info/" . $p->id);
        }
        
        $dir = new DirectoryIterator(FRONTPATH);
        foreach ($dir as $obj) {
            $module_name = $obj->getFilename(); 
            if($module_name!= ".." AND $module_name != "." AND $module_name != "0" AND !is_null($module_name) AND $module_name!= 'search' ){
                $url = base_url().$module_name;
                  $contenido = @file_get_contents($url);
                  $matches = array();
                  $titulo = "";
                  $body = "";
                  if (preg_match('/<title>(.*?)<\/title>/', $contenido, $matches)) {
                     $titulo = $matches[1];
                  }
                  $matches = array();
                  if (preg_match('/<body>(.*?)<\/body>/', $contenido, $matches)) {
                     $body = $matches[1];
                  }
                  $matches = array();
                  if (preg_match('/<style>(.*?)<\/style>/', $body, $matches)) {
                     $body = str_replace($matches[1],"", $body);
                  }
                  $matches = array();
                  if (preg_match('/<footer>(.*?)<\/footer>/', $body, $matches)) {
                     $body = str_replace($matches[1],"", $body);
                  }
                   $matches = array();
                  if (preg_match('/<header>(.*?)<\/header>/', $body, $matches)) {
                     $body = str_replace($matches[1],"", $body);
                  }
                  
                  
                  $needlePos = strpos(strtolower($body), $needle);
                  if ($needlePos !== false) {
                     $datos[] = array('title' =>$titulo, 'contents' => strip_tags(substr($body, $needlePos, 1000)),'url'=> $url) ;
                  }
            }
        }
        $this->_data['buscador'] = $datos;    
    }
    
    
    

}
