<?php

/*
 * @file               : Correo.php
 * @brief              : Clase interaccion correo electronico
 * @version            : 1.0
 * @ultima_modificacion: 02-feb-2012
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
  public function __construct($mSecurity = NULL) {
    
  }

  /*
   * Metodo Publico para enviar un correo electronico
   */
  public function SendEmail($para = "", $asunto = "", $cuerpo = "") {
    $sheader = "From: Dr Mauricio Vega <info@drmauriciovega.com>" . "\r\n";
    $sheader .= "X-Mailer:PHP/" . phpversion() . "\n";
    $sheader .= "Mime-Version: 1.0\n";
    $sheader .= "Content-type: text/html\r\n";

    $img = "http://alsum.co/comunidad/web/front";

    mail($para, $asunto, '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Correo</title>
    <style type="text/css" >
      body{ margin:0 auto; padding:0px; font-family: \'Tahoma, Arial, Helvetica, sans-serif\'; font-size:14px; background-color: #ffffff; color: #666666; line-height:16px; }
      a{ color:#0787a5; text-decoration: none; border: 0px; }
      .table_all{ background-image: url(\'http://alsum.co/comunidad/web/front/img/correo/background.jpg\'); background-repeat: repeat-y; }
      .td_all{ background-image: url(\'http://alsum.co/comunidad/web/front/img/correo/background_td_all.png\'); background-repeat: no-repeat; }
    </style>
  </head>
  <body>
    <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" background="http://alsum.co/comunidad/web/front/img/correo/background.jpg">
      <tr>
        <td width="50" height="50">&nbsp;</td>
        <td height="50">&nbsp;</td>
        <td width="50">&nbsp;</td>
      </tr>
      <tr>
        <td></td>
        <td align="left" valign="top">
          <!--<a href="#"><img src="http://alsum.co/comunidad/web/front/img/correo/logo.png" border="0" style="border:0px;" /></a>-->
          Dr Mauricio Vega
        </td>
        <td></td>
      </tr>
      <tr>
        <td height="15">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td></td>
        <td align="right" valign="top">
          <img src="http://alsum.co/comunidad/web/front/img/correo/redes.png" border="0" style="border:0px;" usemap="#maps" alt="Redes" />
          <map name="maps">
            <area shape="rect" target="_blank" coords="0,0,31,28" href="https://twitter.com/#!/alsumtt" alt="Twitter" title="Twitter" />
            <area shape="rect" target="_blank" coords="42,0,73,28" href="http://co.linkedin.com/pub/alsum-asociacion-latinoamerica-de-suscriptores-maritimos/50/344/993" alt="Linkedin" title="Linkedin" />
          </map>
        </td>
        <td></td>
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td></td>
        <td align="left" valign="top" class="td_all" background="http://alsum.co/comunidad/web/front/img/correo/background_td_all.png">
          <table cellpadding="0" cellspacing="0" border="0" width="100%" align="left" >
            <tr>
              <td width="49">&nbsp;</td>
              <td align="justify" valign="top" style="color:#666666;">
              ' . $cuerpo . '
              </td>
              <td width="49">&nbsp;</td>
            </tr>
          </table>
        </td>
        <td></td>
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">
          <!--No olvide visitarnos en <a href="http://www.alsum.co"><strong style="color:#0787a5;">http://www.alsum.co</strong></a>-->
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>', $sheader);
  }

  /*
   * Metodo Publico para enviar un correo electronico
   */
  public function EmailConsultaVirtual($data = NULL) {
    $cConsulta = new Dbconsulta_virtual();
    $data = $cConsulta->getByPk((int)$data);
    $body = '
      Se ha registrado una nueva consulta<br/><br/><br/>
      Los datos son<br/><br/>
      Nombre: '.$data["nombre"].'<br />
      Email: '.$data["email"].'<br />
      Telefono: '.$data["telefono"].'<br />
      Texto: '.$data["texto"].'
    ';
    // Obtenemos los correos de Db  enviamos la informacion
    $cCorreos = new Dbcorreos();
    $correos = $cCorreos->getList(array("where"=>" AND a.id<>0 "));
    foreach ($correos as $value) {
      self::SendEmail($value["campo"], "Dr Mauricio Vega - Nueva consulta", $body);
    }
  }

}

?>