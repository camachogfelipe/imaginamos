<?php

session_start();
ini_set('display_errors','On');

//Evita presentar contenidos sin el login debido
include "../../../security/secure.php";
define('SITE_ROOT', dirname(dirname(__FILE__)) . '/');
include("../../../core/class/db.class.php");
include SITE_ROOT."class/plGeneral.fnc.php";
include SITE_ROOT."class/PhpThumbFactory.class.php";
include SITE_ROOT."class/ClassFile.class.php";

//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
$db->doQuery("SELECT idcms_industrias_productos  FROM cms_industrias_productos  ORDER BY idcms_industrias_productos DESC Limit 1",1);
$limit=$db->results[0];
$img=$limit['idcms_industrias_productos']+1;
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$titulopro = $_POST['titulopro'];
$subtitulo = $_POST['subtitulo'];
$despro = $_POST['despro'];

if($nombre == '' || $titulopro == '' || $subtitulo == '' || $despro == ''){
     header('Location:./../view/index.php?seccion=editsub&Erno=5&id='.$id.'');
     exit;
}else{
    $retorno = ClassFile::UploadImagenFile("img1", "../../../../images", "prod1_$img", "346_398_prod1_$img", 346, 398);
    $retorno1 = ClassFile::UploadImagenFile("img2", "../../../../images", "prod2_$img", "199_199_prod2_$img", 199, 199);
    $retorno2 = ClassFile::UploadImagenFile("img3", "../../../../images", "prod3_$img", "199_199_prod3_$img", 199, 199);
    $retorno3 = ClassFile::UploadImagenFile("img4", "../../../../images", "prod4_$img", "199_199_prod4_$img", 199, 199);
    
    if ($retorno["Status"] == "Uploader" || $retorno1["Status"] == "Uploader"  || $retorno2["Status"] == "Uploader"  || $retorno3["Status"] == "Uploader") {
        
        $db->doQuery("INSERT INTO cms_industrias_productos (id_industrias_subcategorias,nombre_industrias_subcategorias,titulo_industrias_productos,subtitulo_industrias_productos,des_industrias_productos,img1_industrias_productos,img2_industrias_productos,img3_industrias_productos,img4_industrias_productos) 
            VALUES ('".mysql_real_escape_string($id)."',
                    '".mysql_real_escape_string($nombre)."',
                    '".mysql_real_escape_string($titulopro)."',
                    '".mysql_real_escape_string($subtitulo)."',
                    '".mysql_real_escape_string($despro)."',                    
                    '".$retorno["NameFile"]."',
                    '".$retorno1["NameFile"]."',
                    '".$retorno2["NameFile"]."',
                    '".$retorno3["NameFile"]."')",2);
        
         header('Location:./../view/index.php?seccion=editsub&Erno=1&id='.$id.'');
         exit;
    }else{
             header('Location:./../view/index.php?seccion=editsub&Erno=3&id='.$id.'');
             exit;
    }
    
}
?>
