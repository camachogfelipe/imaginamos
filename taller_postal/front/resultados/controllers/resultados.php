<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 5-050050
 */
class Resultados extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->_data['current_page'] = strtolower(__CLASS__);
    }

    public function index() {
        $this->search_data();
        return $this->build();
    }

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

        $line = new linea();
        $line->get();
        foreach ($line as $lin) {
            $needlePos = array();
            foreach ($line->fields as $field) {
                $needlePos[] = strpos(strtolower($lin->{$field}), $needle);
            }
            foreach ($needlePos as $bool) {
                if ($bool !== false) {
                    $datos[] = array('titulo' => $lin->titulo, 'contents' => "Listado de prductos de la linea ".$lin->titulo, 'url' => base_url() . "custom_prod/info/" . $lin->id);
                    break;
                }
            }
        }

        $categorias = new categoria();
        $categorias->where('categoria_id', NULL)->get();
        foreach ($categorias as $cat) {
            foreach ($categorias->fields as $field) {
                $needlePos[] = strpos(strtolower($cat->{$field}), $needle);
            }
            foreach ($needlePos as $bool) {
                if ($bool !== false) {
                    $datos[] = array('titulo' => $cat->titulo, 'contents' => "Listado de prductos de la categoria ".$lin->titulo, 'url' => base_url() . "custom_prod/info/" . $cat->id);
                    break;
                }
            }
        }

        $pro = new producto();
        $pro->get();
        foreach ($pro as $p) {
            $needlePos = array();
            foreach ($pro->fields as $field) {
                $needlePos[] = strpos(strtolower($p->{$field}), $needle);
            }
            foreach ($needlePos as $bool) {
                if ($bool !== false) {
                    $datos[] = array('titulo' => $p->tiutlo, 'contents' => strip_tags(substr($p->texto, 0, 1000)), 'url' => base_url() . "custom_prod/info/" . $p->id);
                    break;
                }
            }
        }
        
        $disenador = new disenador();
        $disenador->get();
        foreach ($disenador as $ds) {
            $needlePos = array();
            foreach ($disenador->fields as $field) {
                $needlePos[] = strpos(strtolower($ds->{$field}), $needle);
            }
            foreach ($needlePos as $bool) {
                if ($bool !== false) {
                    $datos[] = array('titulo' => $ds->nombre, 'contents' => strip_tags(substr($ds->texto, 0, 1000)), 'url' => base_url() . "disenadores/disenador/" . $ds->id);
                    break;
                }
            }
        }

//        $dir = new DirectoryIterator(FRONTPATH);
//        foreach ($dir as $obj) {
//            $module_name = $obj->getFilename();
//            if ($module_name != ".." AND $module_name != "." AND $module_name != "0" AND !is_null($module_name) AND $module_name != 'search') {
//                $url = base_url() . $module_name;
//                $contenido = @file_get_contents($url);
//                $matches = array();
//                $titulo = "";
//                $body = "";
//                if (preg_match('/<title>(.*?)<\/title>/', $contenido, $matches)) {
//                    $titulo = $matches[1];
//                }
//                $matches = array();
//                if (preg_match('/<body>(.*?)<\/body>/', $contenido, $matches)) {
//                    $body = $matches[1];
//                }
//                $poss = strpos($contenido, '<body>');
//                if ($poss !== false)
//                    $body = substr($contenido, $poss, (count($contenido) - 1));
//
//                $matches = array();
//                if (preg_match('/<style>(.*?)<\/style>/', $body, $matches)) {
//                    $body = str_replace($matches[1], "", $body);
//                }
//                $matches = array();
//                if (preg_match('/<footer>(.*?)<\/footer>/', $body, $matches)) {
//                    $body = str_replace($matches[1], "", $body);
//                }
//                $matches = array();
//                if (preg_match('/<header>(.*?)<\/header>/', $body, $matches)) {
//                    $body = str_replace($matches[1], "", $body);
//                }
//
//                $needlePos = strpos(strtolower($body), $needle);
//                if ($needlePos !== false) {
//                    $datos[] = array('title' => $titulo, 'contents' => strip_tags(substr($body, $needlePos, 1000)), 'url' => $url);
//                }
//            }
//        }
        $this->_data['buscador'] = $datos;
    }

}

?>