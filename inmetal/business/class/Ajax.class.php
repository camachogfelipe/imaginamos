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

  // Funcion para registrar las invitaciones que se realizaron a un amigo a travez de facebook
  public function FunctFacebookInvitar() {
    $galeria = "profesores";
    if( $_SESSION["user"]["usuarios_rol"]==1){
      $galeria = "primaria";
    }elseif( $_SESSION["user"]["usuarios_rol"]==2){
      $galeria = "bachillerato";
    }
    // Autenticamos facebook
    $facebook = new Facebook(array("appId"=>FACEBOOK_ID, "secret"=>FACEBOOK_KEY));
    $facebook->setAccessToken($_SESSION["token"]);
    $uid = $facebook->getUser();
    $user_profile = $facebook->api('/me');
    $opts = array(
      "message" => utf8_encode('¡Ayuda a tu amigo! vota por su foto.'),
      "name" => utf8_encode('¡Ayuda a tu amigo! vota por su foto.'),
      "link" => "http://www.facebook.com/PearsonColombia/app_483846224979285",
      //"description" => utf8_encode('Tu amigo '.$_SESSION["user"]["nombre"].' quiere que votes por su foto en Value of Values 2012. ¡ayúdalo a ganar!'),
      "description" => utf8_encode('Tu amigo '.$_SESSION["user"]["nombre"].' quiere que votes por su foto en Value of Values 2012. Para hacerlo debes buscarlo en la galeria de '.$galeria.'.'),
      "picture" => Link::Build("/")."img/imagen_notificacion.jpg"
    );
    
    $friends = json_decode(base64_decode($_POST["friends"]));
    // Recorremos amigo por amigo y publicamos en el WALL
    for ( $i=0, $tot=count($friends); $i<$tot; $i++ ) {
      $facebook->api('/'.$friends[$i].'/feed', 'POST', $opts);
    }
  }
  
  // Funcion para registrar mi voto en una foto
  public function FunctGuardarVoto(){
    $id = (int)GetData("valor", 0);
    $cHistorial = new Dbhistorial();
    $consulta = array(
        "id_usuarios"=>$_SESSION["user"]["id"],
        "id_fotos"=>$id,
        "where"=>" AND a.fecha>'".date("Y-m-d 00:00:00")."' "
        );
    $historial = $cHistorial->getList($consulta);
    if( count($historial)==0 ){
      // Registramos voto
      $cHistorial->setid_fotos($id);
      $cHistorial->setid_usuarios($_SESSION["user"]["id"]);
      $cHistorial->setfecha(date("Y-m-d H:m:s"));
      $cHistorial->save();
      // Sumamos el voto
      DbHandler::Execute("UPDATE fotos SET votos=(votos+1) WHERE id=".$id);
    }
    $cFotos = new Dbfotos();
    $foto = $cFotos->getByPk($id);
    echo json_encode(array("event" => "GuardarVoto('".$id."', '".$foto["votos"]."');"));
  }
  
  // Funcion para reportar una foto
  public function FunctReportarFoto(){
    $id = (int)GetData("valor", 0);
    if($_SESSION["user"]["usuarios_rol"]==4){
      echo json_encode(array("event" => "alert('Para reportar una foto debes estar registrado');"));
    }else{
      $cReportadas = new Dbreportadas();
      $cReportadas->setid_fotos($id);
      $cReportadas->setid_usuarios($_SESSION["user"]["id"]);
      $cReportadas->setfecha(date("Y-m-d H:m:s"));
      $cReportadas->save();
      echo json_encode(array("event" => "alert('La foto a sido enviada al administrador del sitio');"));
    }
  }

}

?>