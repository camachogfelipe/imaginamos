<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @author Brayan Acebo
 * @author Jose Fonseca
 */
class Buscar extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['is_home'] = false;
        $data['section'] = "buscar";

        $data['migaActual'] = $_REQUEST['palabra'];
        $data['productos'] = $this->buscar_producto($data['migaActual']);
        $data['footer'] = $this->get_footer();

        $this->_data['datos'] = $data;
        return $this->build();
    }

    // Función para obtener los datos del footer
    public function get_footer() {
        $this->db->select('cms_contacto.*');
        $this->db->from('cms_contacto');

        $result = $this->db->get();
        $data = $this->result($result);

        return $data[0];
    }

    private function result(&$result) {
        $data = array();
        if (!empty($result)) :
            foreach ($result->result() as $fila) {
                $data[] = $fila;
            }
        endif;
        return $data;
    }

    public function video() {
        $id = $this->input->post('id');
        $data = array();
        if (!empty($id)) :
            $data = $this->get_enterate($id);
        endif;

        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
    }

    public function buscar_producto($palabra = NULL) {
        $data = NULL;
        $palabra = strtolower($palabra);
        if (!is_null($palabra)) :
            /* $this->db->select('cms_producto.*,cms_categoria.id as cat_id, cms_linea.id as lin_id, cms_sub_categorias.titulo as scategoria ,cms_media.path as img, cms_media1.path as file');
              $this->db->from('cms_producto');
              $this->db->join('cms_media', 'cms_media.id  = cms_producto.cms_media_id','left outer');
              $this->db->join('cms_media as cms_media1', 'cms_media1.id  = cms_producto.cms_media_id2','left outer','left outer');
              $this->db->join('cms_sub_categorias', 'cms_sub_categorias.id = cms_producto.cms_sub_categorias_id', 'left outer');
              $this->db->join('cms_categoria', 'cms_categoria.id = cms_sub_categorias.cms_categoria_id', 'left outer');
              $this->db->join('cms_linea', 'cms_linea.id = cms_categoria.cms_linea_id', 'left outer');
              $this->db->or_like("cms_producto.titulo", $palabra);
              $this->db->or_like("cms_producto.subtitulo", $palabra);
              $this->db->or_like("cms_producto.intro_text", $palabra);
              $this->db->or_like("cms_producto.texto", $palabra);
              $result = $this->db->get(); */
            /*
              //NO SE ENCONTRO RUTA
              UNION
              select propietario titulo, id, 'propietario' seccion, CONCAT('lineas/', id) url from cms_propietario where propietario  like '%$palabra%'
             * 
              UNION
              select titulo, id, 'subcategoria' seccion, CONCAT('lineas/', id) url from cms_sub_categorias where titulo
              like '%$palabra%' and subtitulo  like '%$palabra%' and texto  like '%$palabra%'
             */
            $sql = "
select titulo titulo, id, 'categoria' seccion, CONCAT('lineas/', cms_linea_id, '/', id) url 
from cms_categoria where (LOWER(titulo) like '%$palabra%'
OR LOWER(subtitulo) like '%$palabra%' OR LOWER(texto) like '%$palabra%')
UNION
select titulo_funte1 titulo, id, 'documento' seccion, CONCAT('documentos', '') url from cms_documento 
where (LOWER(titulo_funte1) like '%$palabra%'
OR LOWER(titulo_funte2) like '%$palabra%' OR LOWER(texto) like '%$palabra%')
UNION
select titulo, id, 'enterese' seccion, CONCAT('enterate', '') url from cms_enterese 
where (LOWER(titulo) like '%$palabra%'
OR LOWER(subtitulo) like '%$palabra%' OR LOWER(texto) like '%$palabra%' OR LOWER(intro_text) like '%$palabra%')
UNION
select titulo, id, 'linea' seccion, CONCAT('lineas/', id) url from cms_linea where (LOWER(titulo) like '%$palabra%'
OR LOWER(subtitulo)  like '%$palabra%')
UNION
select p.titulo, p.id, 'producto' seccion, 
CONCAT('lineas/', c.cms_linea_id, '/', c.id, '/producto/', p.id, '-', p.titulo) url 
from cms_producto p, cms_categoria c
where p.cms_categoria_id = c.id and (LOWER(p.titulo)  like '%$palabra%'
OR LOWER(p.subtitulo)  like '%$palabra%' OR LOWER(p.texto)  like '%$palabra%' OR LOWER(p.intro_text)  like '%$palabra%')
UNION
select titulo, id, 'servicio corte' seccion, CONCAT('corte', '') url from cms_servicio_corte
where  (LOWER(titulo)  like '%$palabra%'
OR LOWER(texto)  like '%$palabra%')
UNION
select nombre titulo, id, 'vacante' seccion, CONCAT('trabaja', '') url from cms_vancante 
where (LOWER(nombre)  like '%$palabra%'
OR LOWER(detalle)  like '%$palabra%' OR LOWER(subtitulo)  like '%$palabra%' OR LOWER(intro_detalle)  like '%$palabra%')
UNION
select v.titulo, v.id, 'video' seccion, CONCAT('enterate', '') url from cms_video v, cms_enterese e
where e.video_id = v.id and (LOWER(v.titulo)  like '%$palabra%' OR LOWER(v.descripcion)  like '%$palabra%')
    UNION
select nombre titulo, id, 'equipo' seccion, CONCAT('equipo', '') url from cms_trabajador
where (LOWER(nombre)  like '%$palabra%' OR LOWER(cargo)  like '%$palabra%' OR LOWER(comentario)  like '%$palabra%')
";
//            echo $sql;
            $result = $this->db->query($sql);
//            $result = $this->db->get();
            $data = $this->result($result);
        endif;

        return $data;
    }

    public function get_producto($id = NULL, $ajax = false) {
        if (!is_null($id)) :
            if ($ajax == true)
                $this->db->where('cms_producto.id', $id);
            $texto = " AND cms_sub_categoria.id = '" . $id . "'";
        endif;
        $texto = "";
        $this->db->select('cms_producto.*,cms_sub_categorias.titulo as scategoria ,cms_media.path as img, cms_media1.path as file');
        $this->db->from('cms_producto');
        $this->db->join('cms_media', 'cms_media.id  = cms_producto.cms_media_id');
        $this->db->join('cms_media as cms_media1', 'cms_media1.id  = cms_producto.cms_media_id2', 'left outer');
        $this->db->join('cms_sub_categorias', 'cms_sub_categorias.id = cms_producto.cms_sub_categorias_id' . $texto);

        $result = $this->db->get();
        $data = $this->result($result);

        return $data;
    }

    private function get_miga($id, $tipo) {
        switch ($tipo) :
            case 'lin' : $dato = $this->get_linea($id);
                break;
            case 'cat' : $dato = $this->get_categoria($id);
                break;
            case 'sca' : $dato = $this->get_scategoria($id);
                break;
        endswitch;

        foreach ($dato as $key => $value) :
            if ($key == "titulo")
                return $value->titulo;
        endforeach;
    }

    public function producto() {
        $id = $this->input->post('id');
        $data = array();
        if (!empty($id)) :
            $data = $this->get_producto($id);
        endif;

        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
    }

}
