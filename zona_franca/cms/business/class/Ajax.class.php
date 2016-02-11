<?php
/*
 * @file               : Ajax.php
 * @brief              : Clase interaccion consultas Ajax
 * @version            : 1.0
 * @ultima_modificacion: 02-feb-2012
 * @author             : Ruben Dario Cifuentes T
 *
 * @class: Ajax
 * @brief: Clase interaccion consultas Ajax
 */

class Ajax
{
  /*
   * Metodo Publico para Inicializar las variables necesarias de la clase
   * @fn __construct
   * @brief Inicializa variables necesarias de la clase
   */
  public function __construct($mSecurity = NULL)
  {

  }

  /*
   * Funcion por defecto
   * @fn FunctDefault
   * @brief Funcion por defecto
   */
  public function FunctDefault()
  {
    echo json_encode(array("title" => "Error", "message" => "Funcion por defecto en el ajax"));
  }

  /*
   * Funcion para hacer login de usuario
   * @fn FunctHacerLogin
   * @brief Funcion para hacer login de usuario
   */
  public function FunctHacerLogin()
  {
    // Obtenemos los valores del ajax y los limpiamos
    $email = StripHtml( GetData( "email", "" ) );
    $passwd = StripHtml( GetData("passwd", "" ) );

    // Validamos que los valores se encuentren llenos
    if ($email == "")
    {
      echo json_encode( array("title" => "Error", "message" => "Digite el correo electr?nico") );
    }
    else if ( $passwd == "" )
    {
      echo json_encode(array("title" => "Error", "message" => "Digite la contrase?a del usuario"));
    /*} else if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
      echo json_encode(array("title" => "Error", "message" => htmlentities("Correo electronico no valido") ));*/
    }
    else
    {
      // Hacemos consulta a DB
      $cUsuarios = new Dbcms_usuarios();
      $usuarios = $cUsuarios->getList( array( "txt_email"=>$email , "txt_passwd"=>sha1($passwd) ));

      if ( count($usuarios) == 1 )
      {
        $_SESSION["user"] = $usuarios[0];
        echo json_encode(array("title" => "Éxito", "message" => "Inicio sesión correctamente", "event" => "window.location.href='" . Link::ToSection(array("s" => "inicio")) . "';"));
      }
      else
      {
        echo json_encode(array("title" => "Error", "message" => "Revice correo electronico y/o contrasena"));
      }
    }
  }

}
?>