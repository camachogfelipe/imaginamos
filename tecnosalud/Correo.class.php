<?php
require_once("PHPMailer.class.php");
/*
 * @file               : Correo.php
 * @brief              : Clase interaccion correo electronico
 * @version            : 1.0
 * @ultima_modificacion: 22-oct-2012
 * @author             : Ruben Dario Cifuentes T
 */

/*
 * @class: Correo
 * @brief: Clase interaccion correo electronico
 */

class Correo {
  
  /*
   * Metodo Publico para Inicializar las variables necesarias de la clase.
   * @fn __construct
   * @param $mSecurity obj Objeto de la clase seguridad
   * @brief Inicializa variables necesarias de la clase
   */
  public function __construct() {
    
  }

  /*
   * Metodo Publico para enviar un correo electronico
   */
  public function SendEmail($para = "", $asunto = "", $cuerpo = "") {
    $body = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Kuponkis</title>
    <style>
      body{ margin:0px; padding:0px; border:0px; font-family:Arial, Helvetica, sans-serif; background:#FFF; margin:0 auto; }
    </style>
  </head>

  <body>
    '.$cuerpo.'
  </body>
</html>';

    // Instanciamos PHPMailer
    $mail = new PHPMailer();
    // Metodo de envio SMTP
    $mail->IsSMTP();
    // Obligamos autenticacion de cuenta
    $mail->SMTPAuth = true;
    // Obligamos certificado de seguridad (Debemos habilitar el SSL en la configuracion PHP)
    $mail->SMTPSecure = "ssl";
    // Servidor smtp
    $mail->Host = "smtp.gmail.com";
    // Puerto de salida de envio de email
    $mail->Port = 465;
    // Usuario (Cuenta de correo)
    $mail->Username = "oscar.caranton@imaginamos.com.co";
    // Contrase�a
    $mail->Password = "yoteesperare1234";
    // Desde que correo quiere que se muestre
    $mail->From = "oscar.caranton@imaginamos.com.co";
    // Desde (Nombre)
    $mail->FromName = "Oscar Caranton";
    // Asunto
    $mail->Subject = "Alcanos - " . $asunto;
    // HTML contenido en el mail
    $mail->MsgHTML($body);
    // Adjuntar archivos
    //$mail->AddAttachment("files/files.zip"); 
    // Para y nombre del que recibe
    $mail->AddAddress($para);
    // Obligamos que el texto sea en formato html
    $mail->IsHTML(true);
    // Enviamos el correo
    return $mail->Send();
  }

  /*
   * Metodo Publico para enviar correo electronico confirmacion de reserva al usuario
   */
  public static function UsuariosRegistroParcial($data = NULL) {
    $body = '
    Usuario de ingreso: "'.$data["email"].'"<br/>
    Contrase�a ingreso: "'.$data["pass"].'"<br/>';

    return self::SendEmail($data["email"], "Datos de ingreso", $body);
  }
  
  /*
   * Metodo Publico para enviar correo electronico al usuario informado que esta en espera
   */
  public static function UsuariosRegistroParcialCliente($data = NULL) {
    $body = '
    Sr usuario, su peticion de preregistro se encuentra procesando en este momento.<br/>
    Dentro de poco recibira respuesta de uno de nuestros administradores.';

    return self::SendEmail($data["email"], "Preregistro cliente en espera", $body);
  }
  
  /*
   * Metodo Publico para enviar correo electronico al usuario informado que esta en espera
   */
  public static function UsuariosAprobacionRegistroParcialCliente($data = NULL) {
    $body = '
    Felicitaciones !!<br/><br/>
    Sr usuario, su peticion de preregistro se encuentra aprobada.<br/>
    Los datos de acceso para su ingreso a la plataforma son:<br/>
    Usuario: '.$data["email"].'<br/>
    Contrase�a: '.$data["pass"].'<br/>
    Url: '.$data["url"];

    return self::SendEmail($data["email"], "Preregistro cliente aprobado", $body);
  }
  
  /*
   * Metodo Publico para enviar correo electronico al usuario informado que esta eliminada la peticion de preregistro
   */
  public static function UsuariosEliminarRegistroParcialCliente($data = NULL) {
    $body = '
    Lo sentimos !!<br/><br/>
    Sr usuario, su peticion de preregistro no ha sido aprobada.<br/>
    Para mas informacion debe comunicarce a los numero xxxx.<br/>';

    return self::SendEmail($data["email"], "Preregistro cancelado", $body);
  }
  
  /*
   * Metodo Publico para enviar correo electronico al usuario informado que esta eliminada la marca
   */
  public static function UsuariosEliminarPeticionCreacionMarca($data = NULL) {
    $body = '
    Lo sentimos !!<br/><br/>
    Sr usuario, su peticion de creacion de la marca no ha sido aprobada.<br/>
    Para mas informacion debe comunicarce a los numero xxxx.<br/>';

    return self::SendEmail($data["email"], "Creacion de marca cancelado", $body);
  }
  
  /*
   * Metodo Publico para enviar correo electronico al usuario informado que esta aprobada la marca
   */
  public static function UsuariosAprobarPeticionCreacionMarca($data = NULL) {
    $body = '
    Felicitaciones !!<br/><br/>
    Sr usuario, su peticion de creacion de la marca ha sido aprobada';

    return self::SendEmail($data["email"], "Creacion de marca aprobada", $body);
  }
  
  /*
   * Metodo Publico para enviar correo electronico al usuario informado que esta aprobada la oferta
   */
  public static function OfertaAprobada($data = NULL) {
    $body = '
    Felicitaciones !!<br/><br/>
    Sr usuario, su oferta "'.$data["nombre"].'" ha sido aprobada.';

    return self::SendEmail($data["email"], "Oferta ".$data["nombre"], $body);
  }
  
  /*
   * Metodo Publico para enviar correo electronico al usuario informado que esta eliminada la oferta
   */
  public static function OfertaEliminada($data = NULL) {
    $body = '
    Lo sentimos !!<br/><br/>
    Sr usuario, su oferta "'.$data["nombre"].'" ha sido eliminada.<br/>
    Para mas informacion debe comunicarce a los numero xxxx.<br/>';

    return self::SendEmail($data["email"], "Oferta eliminada - ".$data["nombre"], $body);
  }

}

?>