<?php



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

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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

   // $mail->SMTPSecure = "ssl";

    // Servidor smtp

    $mail->Host = "smtp.emailsrvr.com";

    // Puerto de salida de envio de email

    $mail->Port = 25;

    // Usuario (Cuenta de correo)

    $mail->Username = "ventasonline@norquimicos.com.co";

    // Contraseï¿½a

    $mail->Password = "Enlinea44";

    // Desde que correo quiere que se muestre

    $mail->From = "ventasonline@norquimicos.com.co";

    // Desde (Nombre)

    $mail->FromName = "Norquimicos";
    // Asunto
    $mail->Subject = "Norquimicos - " . $asunto;

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

    Contraseña ingreso: "'.$data["pass"].'"<br/>';



    return self::SendEmail($data["email"], "Datos de ingreso", $body);

  }

  

  /*

   * Metodo Publico para enviar correo electronico al usuario informado que esta en espera

   */

  public static function UsuariosRegistroParcialCliente($data = NULL) {

    $body = '

    Sr usuario, su petición de preregistro se encuentra procesando en este momento.<br/>

    Dentro de poco recibirá respuesta de uno de nuestros administradores.';



    return self::SendEmail($data["email"], "Preregistro cliente en espera", $body);

  }

  

  /*

   * Metodo Publico para enviar correo electronico al usuario informado que esta en espera

   */

  public static function UsuariosAprobacionRegistroParcialCliente($data = NULL) {

    $body = '

    Felicitaciones !!<br/><br/>

    Sr usuario, su petición de preregistro se encuentra aprobada.<br/>

    Los datos de acceso para su ingreso a la plataforma son:<br/>

    Usuario: '.$data["email"].'<br/>

    Contraseña: '.$data["pass"].'<br/>

    Url: '.$data["url"];



    return self::SendEmail($data["email"], "Preregistro cliente aprobado", $body);

  }

  

  /*

   * Metodo Publico para enviar correo electronico al usuario informado que esta eliminada la petición de preregistro

   */

  public static function UsuariosEliminarRegistroParcialCliente($data = NULL) {

    $body = '

    Lo sentimos !!<br/><br/>

    Sr usuario, su petición de preregistro no ha sido aprobada.<br/>

    Para mas información debe comunicarce a los números de contácto de nuestra compañía.<br/>';



    return self::SendEmail($data["email"], "Preregistro cancelado", $body);

  }

  

  /*

   * Metodo Publico para enviar correo electronico al usuario informado que esta eliminada la marca

   */

  public static function UsuariosEliminarpeticióncreaciónMarca($data = NULL) {

    $body = '

    Lo sentimos !!<br/><br/>

    Sr usuario, su petición de creación de la marca no ha sido aprobada.<br/>

    Para mas información debe comunicarce a los números de nuestra compañía.<br/>';



    return self::SendEmail($data["email"], "creación de marca cancelado", $body);

  }

  

  /*

   * Metodo Publico para enviar correo electronico al usuario informado que esta aprobada la marca

   */

  public static function UsuariosAprobarpeticióncreaciónMarca($data = NULL) {

    $body = '

    Felicitaciones !!<br/><br/>

    Sr usuario, su petición de creación de la marca ha sido aprobada';



    return self::SendEmail($data["email"], "creación de marca aprobada", $body);

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

    Para mas información debe comunicarce a los números de nuestra companía.<br/>';



    return self::SendEmail($data["email"], "Oferta eliminada - ".$data["nombre"], $body);

  }



}



?>