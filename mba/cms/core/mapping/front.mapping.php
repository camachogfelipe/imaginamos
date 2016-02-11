<?php
//session_start();
include("cms/core/class/db.class.php");
include("cms/core/mapping/functions.mapping.php");
include("cms/core/mapping/mapping.class.php");
//Creamos objeto database
$db = new Database();
//Conectamos
$db->connect();
////////////////////
function noticias4($table,$id){
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping($table, $db);
    $db->doQuery("SELECT * FROM  ".$table." WHERE idcms='".$id."' " , SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    $db->disconnect();
    return $obj;  
} 
function noticias2($table,$id){
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping($table, $db);
    $db->doQuery("SELECT * FROM  ".$table." WHERE titulo5='".$id."' " , SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    $db->disconnect();
    return $obj;  
} 
function usuarioschat($id_chat){
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("chat", $db);
    $db->doQuery("SELECT * FROM  chat where activo>0 ", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    $db->disconnect();
    return $obj;  
} 
function mnschaten2($id_chat,$activo=1){
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("mns_chat", $db);
    $db->doQuery(" UPDATE chat SET  activo =  '".$activo."' WHERE id_chat ='".$id_chat."' ;" , UPDATE_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    $db->disconnect();
    return $obj;  
} 
function mnschaten($id_chat){
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("mns_chat", $db);
    $db->doQuery("SELECT * FROM  mns_chat WHERE id_chat='".$id_chat."' " , SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    $db->disconnect();
    return $obj;  
} 
function mnschatenvio($id_chat=1,$user=1,$mensaje="holas"){
    if($user==1)$user1="Usuario";
    else $user1="Administrador";
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("mns_chat", $db);
    $db->doQuery("INSERT INTO mns_chat (id_chat,usuario,mensaje,tipo) VALUES ('".$id_chat."', '".$user1."', '".$mensaje."', '".$user."');", INSERT_QUERY);
    //$results = $db->results;
    $obj = $constructor->mapping($results);
    $ids=$db->getLastId();
    $db->disconnect();
    return $ids; 
}
function chatAsignar($nombre){
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("chat", $db);
    $db->doQuery("INSERT INTO chat(`usuario`, `fecha`) VALUES ( '".$nombre."', '".date("Y-m-d")."'); ", INSERT_QUERY);
    //$results = $db->results;
    $obj = $constructor->mapping($results);
    $ids=$db->getLastId();
    $db->disconnect();
    return $ids; 
}
function Textos($id){
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping("cms_valores", $db);
    $db->doQuery("SELECT * FROM  cms_valores where idcms='".$id." ' ", SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    $db->disconnect();
    return $obj;  
}  
function noticias($table="cms_noticias"){
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping($table, $db);
    $db->doQuery("SELECT * FROM  ".$table , SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    $db->disconnect();
    return $obj;  
} 
function noticias_detalle($table,$id){
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping($table, $db);
    $db->doQuery("SELECT * FROM  ".$table." where idcms=".$id." " , SELECT_QUERY);
    $results = $db->results;
    $obj = $constructor->mapping($results);
    $db->disconnect();
    return $obj;    
}
function Visioningles(){
    $db = new Database();
    $db->connect();
    $constructor = new CMS_mapping($table, $db);
    $db->doQuery("SELECT titulo3 FROM  cms_valores WHERE idcms = 2", SELECT_QUERY);
    $results = $db->results;
    return $results;    
}
?>