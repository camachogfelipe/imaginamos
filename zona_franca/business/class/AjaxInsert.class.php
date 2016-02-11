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

    if( $obj -> save() )
    {
      $mReTop = GetData( "redirect_top", FALSE );
      if( FALSE === $mReTop )
      {
        echo json_encode( array("title" => "Exito", "message" => "Se guardo la informacion con exito", "event"=>"window.location.href='".urldecode( GetData( "redirect", "" ) )."';" ) );
      }
      else
      {
        echo json_encode( array("title" => "Exito", "message" => "Se guardo la informacion con exito", "event"=>"top.location.href='".urldecode( $mReTop )."';" ) );
      }
    }
    else
    {
      echo json_encode( array("title" => "Error", "message" => "Se produjo un error, por favor intente mas tarde" ) );
    }
  }

  /*
   * Funcion por defecto para creacion dinamica segun el objeto recibido dentro de ajax
   * @fn FunctInsert
   * @brief Inicializa un objeto de tipo dao y lo inserta o actualiza
   */
  public function FunctInsert()
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

  /*
   * Funcion pora insertar u actualizar un usuario
   * @fn FunctUsuariosCrear
   * @brief Inicializa un objeto de tipo dao y lo inserta o actualiza
   */
  public function FunctRegistrar()
  {
    $mTxtNickname = GetData( "txt_nickname" );
    $mTxtEmail = GetData( "txt_email" );
    $mTxtEmail2 = GetData( "txt_email2" );
    $mTxtPasswd = GetData( "txt_passwd" );
    $mTxtPasswd2 = GetData( "txt_passwd2" );

    if( $mTxtPasswd != $mTxtPasswd2 )
    {
      echo json_encode( array( "title" => "Error", "message" => "Las claves no coinciden" ) );
      exit;
    }

    if( FALSE === filter_var( $mTxtEmail, FILTER_VALIDATE_EMAIL ) )
    {
      echo json_encode( array( "title" => "Error", "message" => "El email no tiene un formato valido" ) );
      exit;
    }
    else
    {
      if( $mTxtEmail != $mTxtEmail2 )
      {
        echo json_encode( array( "title" => "Error", "message" => "Los e-mails no coinciden" ) );
        exit;
      }

      $cRegistrados = new Dbzona_registrados();
      $mData = $cRegistrados -> getList( array( "txt_nickname" => $mTxtNickname, "txt_email" => $mTxtEmail ) );

      if( count( $mData ) > 0 )
      {
        echo json_encode( array( "title" => "Error", "message" => "El nombre de usuario ya se encuentra registrado" ) );
        exit;
      }

      $cRegistrados = new Dbzona_registrados();
      $mData = $cRegistrados -> getList( array( "txt_email" => $mTxtEmail ) );

      if( count( $mData ) > 0 )
      {
        echo json_encode( array( "title" => "Error", "message" => "El email ya se encuentra registrado" ) );
        exit;
      }
    }

    $_POST["txt_passwd"] = sha1( $mTxtPasswd );
    $mId = self::FunctInsert();

    if( FALSE !== $mId )
    {
      echo json_encode( array( "title" => "Exito", "message" => "Se guardo la informacion con exito", "event" => "asignIdreg( '".$mId."' );", "empresas" => "1" ) );
    }
  }

  public function FunctSegEmp()
  {
    $mUtilEmar = GetData( "util_emar2" );
    if( NULL !== $mUtilEmar && "" == $mUtilEmar )
      $_POST["util_emar"] = $mUtilEmar;
    
    self::FunctInsert();
    
    $mId = GetData( "id_oferta" );

    echo json_encode( array( "event" => "BorrarOferta( '".$mId."' );" ) );
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
