<?php
class Site_model extends CI_Model{
    
    var $path;
    
    function __construct() {
        parent::__construct();
        $this->path = realpath(APPPATH . "../assets/attach/");
    }
    
    function upload(){
        $config = array(
            'allowed_types' => 'pdf',
            'upload_path' => $this->path, 
            'max_size' => 300000
        );

        $this->load->library('upload', $config);
        $this->upload->do_upload();
    }

    function obtenerComentarios($id_noticia){
        $query = $this->db->query("SELECT * FROM  comentarios, usuarios WHERE comentarios.id_noticia=".$id_noticia);
        /*$query = $this->db->query("SELECT * FROM  comentarios ,  noticias, usuarios WHERE comentarios.id_noticia=".$id_noticia."AND comentarios.id_usuario");*/
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
    function calificarNoticia($voto, $id){
        if($voto==5):
            $this->db->query("UPDATE SET calificacion_buena = calificacion_buena+1 FROM noticias WHERE id = $id");
        elseif($voto==7):
            $this->db->query("UPDATE SET calificacion_neutro = calificacion_neutro+1 FROM noticias WHERE id = $id");
        elseif($voto==6):
            $this->db->query("UPDATE SET calificacion_mala = calificacion_mala+1 FROM noticias WHERE id = $id");
        endif;
    }

    function obtenerNoticias(){
        $query = $this->db->query("SELECT * FROM  noticias ORDER BY fecha DESC");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }

    function crearRegistros($datos){
        $this->db->insert('cotizaciones', array('nombre' => $datos['nombre'], 'email' => $datos['email'], 'tipo' => $datos['tipo'],'empresa' => $datos['empresa'], 'id_producto' => $datos['id_producto'], 'id_impresion' => $datos['id_impresion'],'telefono' => $datos['telefono'], 'unidades' => $datos['unidades'], 'cantidad' => $datos['cantidad'],'comentario' => $datos['comentario'], 'id_sector' => $datos['id_sector']));
        $this->load->view('productos');
    }   

}