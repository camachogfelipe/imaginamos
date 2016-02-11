<?php

/*
 * @file               : Ajax.php
 * @brief              : Clase interaccion consultas Ajax
 * @version            : 1.0
 * @ultima_modificacion: 13-jun-2012
 * @author             : Ruben Dario Cifuentes T
 *
 * @class: Ajax
 * @brief: Clase interaccion consultas Ajax
 */


class AjaxInsert
{
  /*
   * Funcion por defecto para creacion dinamica segun el objeto recibido
   * @fn FunctDefault
   * @brief Inicializa un objeto de tipo dao y lo inserta o actualiza
   */
  public function FunctDefault()
  {
    if( isset( $_SESSION["user"] ) )
    {
      $clase = "Db".GetData("clase", "base");
      $obj = new $clase();

      // Llenamos los valores del objeto
      foreach( $obj -> getVars() as $key => $value )
      {
        // Recorremos los datos obtenidos por post
        foreach( $_POST as $key2 => $value2 )
        {
          if( $key == $key2 )
          {
            $setTemp = 'set' . $key;
            $obj -> $setTemp( GetData( $key2, "") );
          }
        }
      }

      if( havePermision( array( "clase" => GetData( "clase" ) ) ) )
      {
        if( $obj -> save() )
        {
          $mReTop = GetData( "redirect_top", FALSE );
          if( FALSE === $mReTop )
          {
            echo json_encode( array("title" => "Exito", "message" => "Se guardó la información con éxito", "event"=>"window.location.href='".urldecode( GetData( "redirect", "" ) )."';" ) );
          }
          else
          {
            echo json_encode( array("title" => "Exito", "message" => "Se guardó la información con éxito", "event"=>"top.location.href='".urldecode( $mReTop )."';" ) );
          }
        }
        else
        {
          echo json_encode( array("title" => "Error", "message" => "Se produjo un error, por favor intente mas tarde" ) );
        }
      }
      else
      {
        echo json_encode( array( "title" => "Error", "message" => "No cuenta con permisos suficientes para realizar esta accion" ) );
      }
    }
    else
    {
      echo json_encode( array( "title" => "Error", "message" => "Debe iniciar sesion" ) );
    }
  }

  /*
   * Funcion por defecto para creacion dinamica segun el objeto recibido dentro de ajax
   * @fn FunctInsert
   * @brief Inicializa un objeto de tipo dao y lo inserta o actualiza
   */
  public function FunctInsert()
  {
    if( isset( $_SESSION["user"] ) )
    {
      $clase = "Db".GetData("clase", "base");
      $obj = new $clase();

      // Llenamos los valores del objeto
      foreach ( $obj->getVars() as $key => $value )
      {
        // Recorremos los datos obtenidos por post
        foreach ($_POST as $key2 => $value2)
        {
          if( $key==$key2 )
          {
            $setTemp = 'set' . $key;
            $obj->$setTemp( GetData( $key2, "") );
          }
        }
      }

      if( havePermision( array( "clase" => GetData( "clase" ) ) ) )
      {
        if( $obj -> save() )
        {
          if( is_null( $obj->id ) )
          {
            return $obj->getMaxId();
          }
          else
          {
            return $obj->id;
          }
        }
        else
        {
          return FALSE;
        }
      }
      else
      {
        return FALSE;
      }
    }
    else
    {
      return FALSE;
    }
  }

  /*
   * Funcion pora insertar u actualizar un usuario
   * @fn FunctUsuariosCrear
   * @brief Inicializa un objeto de tipo dao y lo inserta o actualiza
   */
  public function FunctUsuariosCrear()
  {
    $mPasswd = GetData( "txt_passwd" );
    $mPasswdConf = GetData( "passwd_conf" );
    $mEmail = GetData( "txt_email" );
    $mId = GetData( "id", FALSE );

    if( $mPasswd != $mPasswdConf )
    {
      echo json_encode( array( "title" => "Error", "message" => "Las claves no coinciden" ) );
      exit;
    }

    if( FALSE === filter_var( $mEmail, FILTER_VALIDATE_EMAIL ) )
    {
      echo json_encode( array( "title" => "Error", "message" => "El email no tiene un formato valido" ) );
      exit;
    }
    else
    {
      if( FALSE == $mId )
      {
        $cUsuarios = new Dbcms_usuarios();
        $mData = $cUsuarios -> getList( array( "txt_email" => $mEmail ) );

        if( count( $mData ) > 0 )
        {
          echo json_encode( array( "title" => "Error", "message" => "El email ya se encuentra registrado" ) );
          exit;
        }
      }
    }

    $_POST["txt_passwd"] = sha1( $mPasswd );
    $_POST["ind_estado"] = '1';
    self::FunctDefault();
  }

  /*
   * Ejemplo de como personalizar un insert
   * @fn FunctEjemplo
   * @brief IEjemplo de como personalizar un insert
   */
  /* *
  public function FunctEjemplo()
  {
    $id_return = self::FunctInsert();
    $_POST["clase"] = "bancos_cuentas_proveedor";
    $_POST["id_banco_cuenta"] = $id_return;
    self::FunctDefault();
  }
  /* */
}
?>
