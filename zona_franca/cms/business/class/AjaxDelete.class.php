<?php

/*
 * @file               : Ajax.php
 * @brief              : Clase interaccion consultas Ajax
 * @version            : 1.0
 * @ultima_modificacion: 19-jun-2012
 * @author             : Ruben Dario Cifuentes T
 *
 * @class: Ajax
 * @brief: Clase interaccion consultas Ajax
 */

class AjaxDelete
{
  // Funcion por defecto para creacion dinamica segun el objeto recibido
  public function FunctDefault()
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

      $mOpciones = array( "id_usuario_rol" => $_SESSION["user"]["id_usuario_rol"] );

      $cModulo = new Dbmodulo();
      $mResult = $cModulo -> getList( array( "clase" => GetData( "clase" ) ) );

      if( NULL !== $mResult && "" != $mResult )
      {
        if( count( $mResult ) > 0 )
        {
          $mOpciones["id_modulo"] = $mResult[0]["id"];
        }
        else
        {
          echo json_encode( array( "title" => "Error", "message" => "No cuenta con permisos suficientes para realizar esta accion" ) );
          exit;
        }
      }
      else
      {
        echo json_encode( array( "title" => "Error", "message" => "No cuenta con permisos suficientes para realizar esta accion" ) );
        exit;
      }

      $mOpciones["id_accion"] = "4";
      
      $cRolPerm = new Dbusuarios_roles_permisos();
      $cRolPerm = $cRolPerm -> getList( $mOpciones );
    
      if( NULL !== $cRolPerm && "" != $cRolPerm )
      {
        if( count( $cRolPerm ) > 0 )
        {
          if( $obj->delete() )
          {
            echo json_encode(array("title" => "Exito", "message" => "Se guardaron los cambios con exito", "event"=>"window.location.href='".urldecode(GetData( "redirect", ""))."';" ) );
          }
          else
          {
            echo json_encode(array("title" => "Error", "message" => "Se produjo un error, por favor intente mas tarde"));
          }
        }
        else
        {
          echo json_encode( array( "title" => "Error", "message" => "No cuenta con permisos suficientes para realizar esta accion" ) );
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

}

?>
