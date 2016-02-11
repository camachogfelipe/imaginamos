<?php

/*
 * @file               : Ajax.php
 * @brief              : Clase interaccion consultas Ajax
 * @version            : 1.0
 * @ultima_modificacion: 02-feb-2012
 * @author             : Ruben Dario Cifuentes T
 */

/*
 * @class: Ajax
 * @brief: Clase interaccion consultas Ajax
 */

class Ajax {
  /*
   * Metodo Publico para Inicializar las variables necesarias de la clase
   * @fn __construct
   * @brief Inicializa variables necesarias de la clase
   */

  public function __construct($mSecurity = NULL) {
    
  }

  // Funcion po defecto
  public function FunctDefault() {
    echo json_encode(array("title" => "Error", "message" => "Funcion por defecto en el ajax"));
  }
  
  // Funcion para registrar mi voto en una foto
  public function FunctGuardarFormal(){
    $_POST["clase"] = "tbl_formal";
    $_POST["fecha"] = $_POST["ano"]."/".$_POST["mes"]."/".$_POST["dia"];
    
    // Validamos que el documento no se encuentre en DB
    $cUser = new Dbtbl_formal();
    $user = $cUser->getList(array("numero"=>$_POST["numero"]));
    if(count($user)>0){
      $_POST["id"] = $user[0]["id"];
    }
    
    $cAjaxInsert = new AjaxInsert();
    $_SESSION["formal_id"] = $cAjaxInsert->FunctInsert();
    echo json_encode(array("event"=>"hacerRedirect('".Link::ToSection(array("s"=>"estudios"))."');"));
  }
  
  // Funcion para registrar estudios
  public function FunctGuardarEstudios(){
    $_POST["clase"] = "tbl_formal_estudios";
    $_POST["id_formal"] = $_SESSION["formal_id"];
    
    $cEstudios = new Dbtbl_formal_estudios();
    $estudios = $cEstudios->getList(array("id_formal"=>$_SESSION["formal_id"]));
    if(count($estudios)>0){
      $_POST["id"] = $estudios[0]["id"];
    }
    
    $cAjaxInsert = new AjaxInsert();
    $cAjaxInsert->FunctInsert();
    echo json_encode(array("event"=>"hacerRedirect('".Link::ToSection(array("s"=>"selecciona ambitos"))."');"));
  }
  
  // Funcion para registrar estudios profesionales
  public function FunctGuardarEstudiosProf(){
    $_POST["clase"] = "tbl_formal_estudios_prof";
    $_POST["id_formal"] = $_SESSION["formal_id"];
    
    $cEstudios = new Dbtbl_formal_estudios_prof();
    $estudios = $cEstudios->getList(array("id_formal"=>$_SESSION["formal_id"]));
    if(count($estudios)>0){
      $_POST["id"] = $estudios[0]["id"];
    }
    
    $_POST["fecha"] = $_POST["ano"]."-".$_POST["mes"]."-".$_POST["dia"];
    
    $cAjaxInsert = new AjaxInsert();
    $cAjaxInsert->FunctInsert();
    echo json_encode(array("event"=>"hacerRedirect('".Link::ToSection(array("s"=>"selecciona ambitos"))."');"));
  }
  
  // Funcion para registrar estudios
  public function FunctGuardarAmbitos(){
    $_POST["clase"] = "tbl_formal_ambitos";
    $_POST["id_formal"] = $_SESSION["formal_id"];
    $_POST["modalidad"] = $_SESSION["modalidad"];
    
    $cAmbitos = new Dbtbl_formal_ambitos();
    $ambitos = $cAmbitos->getList(array("id_formal"=>$_SESSION["formal_id"]));
    if(count($ambitos)>0){
      $_POST["id"] = $ambitos[0]["id"];
    }
    
    $_SESSION["sede"] = utf8_encode(rawurldecode($_POST["sede"]));
    $_SESSION["programa"] = utf8_encode(rawurldecode($_POST["programa"]));
    
    $cAjaxInsert = new AjaxInsert();
    $cAjaxInsert->FunctInsert();
    echo json_encode(array("event"=>"hacerRedirect('".Link::ToSection(array("s"=>"registro pago"))."');"));
  }
  
  // Funcion para traer ciudades segun departamento
  public function FunctGetCiudadesByDepartamento(){
    $id = 0;
    $nombre = GetData("valor","");
    $cDepart = new Dbtbl_departamentos();
    $depart = $cDepart->getList(array("NOMBRE"=>$nombre));
    if( count($depart)>0 ){
      $id = $depart[0]["ID_DPTO"];
    }
    $cCiudades = new Dbtbl_ciudades();
    $html = '<option value="">Seleccione</option>';
    $ciudades = $cCiudades->getList(array("ciu_cod_departamento"=>$id));
    for($i=0,$tot=count($ciudades);$i<$tot;$i++){
      $html .= '<option value="'.utf8_encode($ciudades[$i]["ciu_ciudad"]).'">'.utf8_encode($ciudades[$i]["ciu_ciudad"]).'</option>';
    }
    echo json_encode(array("event"=>"$('#ciudad').html('".$html."');"));
  }
  
  // Funcion para traer ciudades segun departamento
  public function FunctGetCiudadesByDepartamento2(){
    $id = 0;
    $nombre = GetData("valor","");
    $cDepart = new Dbtbl_departamentos();
    $depart = $cDepart->getList(array("NOMBRE"=>$nombre));
    if( count($depart)>0 ){
      $id = $depart[0]["ID_DPTO"];
    }
    $cCiudades = new Dbtbl_ciudades();
    $html = '<option value="">Seleccione</option>';
    $ciudades = $cCiudades->getList(array("ciu_cod_departamento"=>$id));
    for($i=0,$tot=count($ciudades);$i<$tot;$i++){
      $html .= '<option value="'.utf8_encode($ciudades[$i]["ciu_ciudad"]).'">'.utf8_encode($ciudades[$i]["ciu_ciudad"]).'</option>';
    }
    echo json_encode(array("event"=>"$('#ciudad_residencia').html('".$html."');"));
  }
 
}

?>