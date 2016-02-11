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

    function obtenerComentarios($id_noticia = NULL){
			if(!is_null($id_noticia)) :
        $query = $this->db->query("SELECT comentarios.*, usuarios.* FROM  comentarios 
																	 INNER JOIN usuarios ON usuarios.id=comentarios.id_usuario 
																	 WHERE comentarios.id_noticia=".$id_noticia);
			else :
				$query = $this->db->query("SELECT comentarios.*, usuarios.* FROM comentarios 
																	 INNER JOIN usuarios ON usuarios.id=comentarios.id_usuario");
			endif;
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
        $query = $this->db->query("SELECT * FROM  noticias ORDER BY fecha DESC, id DESC");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }

    function crearCotizacion($datos){
        $this->db->insert('cotizaciones', array('nombre' => $datos['nombre'], 'email' => $datos['email'], 'tipo' => $datos['tipo'],'empresa' => $datos['empresa'], 'id_producto' => $datos['id_producto'], 'id_impresion' => $datos['id_impresion'],'telefono' => $datos['telefono'], 'unidades' => $datos['unidades'], 'cantidad' => $datos['cantidad'],'comentario' => $datos['comentario'], 'id_sector' => $datos['id_sector']));
        $this->load->view('productos');
    }
		
		function crearRegistro($datos){
        $this->db->insert('usuarios', array('nombre' => $datos['nombre'], 'email' => $datos['email'], 'id_sector' => $datos['sector'], 'tipo' => $datos['tempresario'], 'empresa' => $datos['empresa'], 'cargo' => $datos['cargo'], 'password' => $datos['pass']));
        return true;
    }
		
		function obtenerProductos(){
        $query = $this->db->query("SELECT * FROM products ORDER BY clasificacion DESC, id ASC");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
		
		function obtenerSectores(){
        $query = $this->db->query("SELECT * FROM sectores");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
		
		function obtenerImpresiones(){
        $query = $this->db->query("SELECT * FROM impresiones");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
		
		function obtenerTech(){
        $query = $this->db->query("SELECT * FROM  tech ORDER BY id DESC");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
		
		function obtenerImagenes(){
        $query = $this->db->query("SELECT * FROM images");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
		
		function calificar($datos){
				switch($datos['calificacion']) :
					case 3 : $campo = "buena"; break;
					case 2 : $campo = "neutro"; break;
					case 1 : $campo = "mala"; break;
				endswitch;
				$sql = "UPDATE noticias SET `calificacion_".$campo."`=`calificacion_buena`+1 WHERE`id`=".$datos['noticia']."";
				$this->db->query($sql);
				return true;
				//$this->db->update('noticias', array('calificacion_'.$campo => "'calificacion_".$campo."'+1"));
				//echo $this->db->last_query();
        //if($this->db->update('noticias', array('calificacion_'.$campo => "'+1'"))) return true;
				//else return false;
    }
		
		function comentar($datos){
        $this->db->insert('comentarios', array('comentario' => $datos['comentario'], "id_usuario" => $datos["user"], 
					"id_noticia"=>$datos['noticia'], "fecha" => date("Y-m-d h:i:s"))
				);
				redirect("site/news", $data);
    }
		
		function obtenerIntroNews(){
        $query = $this->db->query("SELECT texto FROM newsintro");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
		
		function verificaLogin($datos){
        $query = $query = $this->db->query("SELECT * FROM usuarios
																					  WHERE email='".$datos['email']."' AND 
																					  password='".$datos['password']."'");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
		
		function traeProducto($id){
        $query = $query = $this->db->query("SELECT titulo, subtitulo FROM products 
																					  WHERE id='".$id."'");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
		
		function traeImpresion($id){
        $query = $query = $this->db->query("SELECT nombre FROM impresiones 
																					  WHERE id='".$id."'");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
		
		function traeSector($id){
        $query = $query = $this->db->query("SELECT nombre FROM sectores  
																					  WHERE id='".$id."'");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
		
		function verificaRecovery($datos){
        $query = $this->db->query("SELECT * FROM usuarios
																					  WHERE email='".$datos['email']."'");
        if($query->num_rows() > 0 ){
            return $query->result();
        }else{
            return false;
        }
    }
		
		function reseteaRecovery($datos) {
			$query = $this->db->query("UPDATE usuarios SET password='".$datos['password']."' WHERE id=".$datos['id']);
		}
}