<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | todos los derechos reservados
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
            if (($needlePos !== false))
                $datos[] = array('titulo' => $cat->titulo, 'contents' => strip_tags(substr($cat->titulo, $needlePos, 1000)), 'url' => base_url() . "productos/productos_catgoria/" . $cat->id);
        }

        $categorias = new categoria();
        $categorias->where('categoria_id <>', '')->get();
        foreach ($categorias as $cat) {
            $needlePos = strpos(strtolower($cat->titulo), $needle);
            if (($needlePos !== false))
                $datos[] = array('titulo' => $cat->titulo, 'contents' => strip_tags(substr($cat->titulo, $needlePos, 1000)), 'url' => base_url() . "productos/productos_catgoria/" . $cat->id);
        }

        $pro = new producto();
        $pro->get();
        foreach ($pro as $p) {
           $needlePos = array(); 
            $needlePos[] = strpos(strtolower($p->nombre), $needle);
            $needlePos[] = strpos(strtolower($p->descripcion), $needle);
            $needlePos[] = strpos(strtolower($p->marca), $needle);
            $needlePos[] = strpos(strtolower($p->fecha), $needle);
            $needlePos[] = strpos(strtolower($p->precio), $needle);
            $needlePos[] = strpos(strtolower($p->garantia), $needle);
            $needlePos[] = strpos(strtolower($p->tiempo_entrega), $needle);
            $needlePos[] = strpos(strtolower($p->tipo), $needle);
            
            foreach ($needlePos as $bool) {
                if($bool !== false){
                      $datos[] = array('titulo' => $p->nombre, 'contents' => strip_tags(substr($p->descripcion, $bool, 1000)), 'url' => base_url() . "productos/info/" . $p->id);
                    break;   
                }
            }
        }

        $dir = new DirectoryIterator(FRONTPATH);
        foreach ($dir as $obj) {
            $module_name = $obj->getFilename();
            if ($module_name != ".." AND $module_name != "." AND $module_name != "0" AND !is_null($module_name) AND $module_name != 'search') {
                $url = base_url() . $module_name;
                $contenido = @file_get_contents($url);
                $matches = array();
                $titulo = "";
                $body = "";
                if (preg_match('/<title>(.*?)<\/title>/', $contenido, $matches)) {
                    $titulo = $matches[1];
                }
                $matches = array();
                if (  preg_match('/<body>(.*?)<\/body>/', $contenido, $matches)) {
                    $body = $matches[1];
                }
                $poss = strpos($contenido,'<body>');
                if($poss !== false)
                       $body = substr ($contenido,$poss,  (count ($contenido)-1));  
                
                $matches = array();
                if (preg_match('/<style>(.*?)<\/style>/', $body, $matches)) {
                    $body = str_replace($matches[1], "", $body);
                }
                $matches = array();
                if (preg_match('/<footer>(.*?)<\/footer>/', $body, $matches)) {
                    $body = str_replace($matches[1], "", $body);
                }
                $matches = array();
                if (preg_match('/<header>(.*?)<\/header>/', $body, $matches)) {
                    $body = str_replace($matches[1], "", $body);
                }


                $needlePos = strpos(strtolower($body), $needle);
                if ($needlePos !== false) {
                    $datos[] = array('title' => $titulo, 'contents' => strip_tags(substr($body, $needlePos, 1000)), 'url' => $url);
                }
            }
        }
        $this->_data['buscador'] = $datos;
    }

}
