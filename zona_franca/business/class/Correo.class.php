<?php

/*
 * @file               : Correo.php
 * @brief              : Clase interaccion correo electronico
 * @version            : 1.0
 * @ultima_modificacion: 30-sep-2013
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
  public static function SendEmail($para = "", $asunto = "", $cuerpo = "") {
    $body = $cuerpo;

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
    $mail->Username = "empleoenmarcha@zonafrancaoccidente.com";
    // Contrase?a
    $mail->Password = "colombia954";
    // Desde que correo quiere que se muestre
    $mail->From = "james.garcia@imaginamos.com.co";
    // Desde (Nombre)
    $mail->FromName = "Empleo En Marcha";
    // Asunto
    $mail->Subject = $asunto;
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
  
  // Funcion para enviar recordatorio de contraseña
  public static function UsuariosRecordarContrasena($data =NULL)
  {
    $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
             <html xmlns="http://www.w3.org/1999/xhtml">
               <head>
                 <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
                 <title>Recordar contraseña</title>
               </head>
               <body>
                 <table width="800" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 800px; background: url(http://empleoenmarcha.com/images/boletin/fondo-body.png) repeat; font-family:Verdana, Geneva, sans-serif; padding: 0 0 30px;">
                   <tr>
                     <td height="102" style="width: 800px; vertical-align:text-top; background: url(http://empleoenmarcha.com/images/boletin/fondo-header.png) repeat;"><p style="color: #4D4D4D; font-size: 18px; margin: 40px 0 0 300px; padding: 0;" >Hola, <em>'.$data["nombre"].'</em></p></td>
                   </tr>
                   <tr>
                     <td style="width: 580px; vertical-align:text-top;" >
                       <table width="580" border="0" align="center" cellpadding="0" cellspacing="0" style="background: #fff url(http://empleoenmarcha.com/images/boletin/fondo-main.png) no-repeat; margin-top: 20px; padding: 10px;">
                         <tr width="580">
                           <td>
                             <p style="color: #079F41; font-size: 14px; margin: 13px 0 10px 0px; padding: 0; width: 340px;" >Recordatorio de contraseña<br /></p>
                           </td>
                         </tr>
                         <tr style="margin: 0 0 0;">
                           <td width="475" style="vertical-align:text-top;">
                             <p style="font-size: 12px; color: #656565; margin: 10px 0 0 20px;">
                               Al parecer a olvidado su cotraseña. En este momento hemos generado una contraseña temporal 
                               "<strong>'.$data["newpass"].'</strong>", si desea activar esta contraseña temporal puede hacer 
                               <a href="'.$data["url_activar"].'">click aqui</a> o puede copiar y pegar esta URL en su navegador 
                               <a href="'.$data["url_activar"].'">'.$data["url_activar"].'</a>.<br/>
                               Recuerde que esta URL solo servira 1a vez.<br/><br/>
                               Si usted no a generado esta peticion de cambio de contraseña por favor haga 
                               <a href="'.$data["url_negar"].'">click aqui</a> o puede copiar y pegar esta URL en su navegador 
                               <a href="'.$data["url_negar"].'">'.$data["url_negar"].'</a>.
                             </p>
                           </td>
                         </tr>
                       </table>
                     </td>
                   </tr>
                 </table>
                 <table width="800" border="0" align="center" style="height: 79px; background: url(http://empleoenmarcha.com/images/boletin/footer.png) repeat;">
                   <tr>
                     <td align="center" valign="top" ></td>
                   </tr>
                 </table>
               </body>
             </html>';

    return self::SendEmail($data["email"], "Recordar contraseña", $body);
  }
  
  // Funcion para enviar recordatorio de usuario
  public static function UsuariosRecordarUsuario($data =NULL)
  {
    $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
             <html xmlns="http://www.w3.org/1999/xhtml">
               <head>
                 <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
                 <title>Recordar usuario</title>
               </head>
               <body>
                 <table width="800" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 800px; background: url(http://empleoenmarcha.com/images/boletin/fondo-body.png) repeat; font-family:Verdana, Geneva, sans-serif; padding: 0 0 30px;">
                   <tr>
                     <td height="102" style="width: 800px; vertical-align:text-top; background: url(http://empleoenmarcha.com/images/boletin/fondo-header.png) repeat;"><p style="color: #4D4D4D; font-size: 18px; margin: 40px 0 0 300px; padding: 0;" >Hola, <em>'.$data["nombre"].'</em></p></td>
                   </tr>
                   <tr>
                     <td style="width: 580px; vertical-align:text-top;" >
                       <table width="580" border="0" align="center" cellpadding="0" cellspacing="0" style="background: #fff url(http://empleoenmarcha.com/images/boletin/fondo-main.png) no-repeat; margin-top: 20px; padding: 10px;">
                         <tr width="580">
                           <td>
                             <p style="color: #079F41; font-size: 14px; margin: 13px 0 10px 0px; padding: 0; width: 340px;" >Recordatorio de nombre de usuario<br /></p>
                           </td>
                         </tr>
                         <tr style="margin: 0 0 0;">
                           <td width="475" style="vertical-align:text-top;">
                             <p style="font-size: 12px; color: #656565; margin: 10px 0 0 20px;">
                               Al parecer ha olvidado su nombre de usuario. <br><br>
                               Su nombre para ingresar al sistema es: '.$data["usuario"].'<br><br>

                               Por favor no responda a este mensaje. Se genera automáticamente y es sólo con fines informativos.
                               Si usted no pidió recordar el usuario, por favor ignore este mensaje.
                             </p>
                           </td>
                         </tr>
                       </table>
                     </td>
                   </tr>
                 </table>
                 <table width="800" border="0" align="center" style="height: 79px; background: url(http://empleoenmarcha.com/images/boletin/footer.png) repeat;">
                   <tr>
                     <td align="center" valign="top" ></td>
                   </tr>
                 </table>
               </body>
             </html>';

    return self::SendEmail($data["email"], "Recordar usuario", $body);
  }

}

?>