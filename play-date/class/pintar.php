<?php
session_start();
require_once("./cms/core/class/db.class.php");
class Pintar{
    function PintarBanner() {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_banner_superior";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function PintarBienvenida() {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_textos";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
     function PintarDestacados() {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_destacados";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function PintarQuienes() {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_quienes";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function PintarAlmacen() {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_almacen";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function PintarGaleria() {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_galeria ORDER BY id_galeria DESC";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function PintarSubcategoria($ids) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_subcategoria_pics WHERE id_subcategoria=".$ids." ORDER BY id_subcategoria_pics DESC";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function PintarTitulo($ids) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_galeria WHERE id_galeria=".$ids;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function validacion($A,$B){
        
       if(empty($A) && empty($B))
        {
            header('Location: blog-loguin.php?m=1');
        }else{
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_registro WHERE usuario_registro = '".$A."' and pass_registro = '".md5($B)."'";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        //$re = count($results);
        //var_dump($re);
        if(count($results) == 0){
          echo "<script type='text/javascript'>window.location='blog-loguin.php?m=1';</script>";
            }
            else{
                
                $_SESSION["usuario"]=$results[0][nombre_registro];
		
                echo "<script type='text/javascript'>window.location='blog-categorias.php';</script>";
                
            }
        }
       // print_r($_POST);
        
    }
    function Registro() {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_galeria WHERE id_galeria=".$ids;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        //return $results;
        
    }
    function PintarBlog() {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_blog ORDER BY id_blog DESC";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
     function PintarComentarios($ids) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_comentarios WHERE id_blog =".$ids;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function Guardar($id) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "INSERT INTO `cms_comentarios`(`id_comentario`, `id_blog`, `nombre_comentario`, `texto_comentario`, `fecha_comentario`) VALUES (NULL,'".$id."','".$_SESSION["usuario"]."','".$_POST['coment']."','".date('Y-m-d H:i:s')."')";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        //return $results;
        echo "<script type='text/javascript'>window.location='blog.php?id=".$id."';</script>";
        
    }
    function Actividades() {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_actividades ";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function Contenido($id) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_contenido WHERE id_actividades =".$id;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function Eventos() {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_eventos ";
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
    function PintarBlog2($ids) {
        //include("../../../core/class/db.class.php");
        $db = new Database();
        $db->connect();
        $query = "SELECT * FROM cms_blog WHERE id_blog =".$ids;
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
        return $results;
        
    }
}

  
?>
