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
    $sheader = "From: AOA <info@aoa.com>" . "\r\n";
    $sheader .= "X-Mailer:PHP/" . phpversion() . "\n";
    $sheader .= "Mime-Version: 1.0\n";
    $sheader .= "Content-type: text/html\r\n";
    mail($para, $asunto, $cuerpo, $sheader);
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