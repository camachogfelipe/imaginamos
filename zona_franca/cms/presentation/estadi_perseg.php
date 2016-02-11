<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estadi_perseg
 *
 * @author carlos
 */
class estadiPerseg
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mCrear        = NULL;
  public $mEditar       = NULL;
  public $mElimin       = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;
  public $mData         = NULL;

  /*
   * Constructor de clase
   * @fn __construct
   * @brief Inicializa las variables necesarias de la clase
   */
  public function __construct()
  {
    $this -> cIdPregunta = GetData( "id" );

    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mCrear   = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "create" ) );
    $this -> mEditar  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "edit" ) );
    $this -> mElimin  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "delete" ) );

    $this -> cBack = Link::ToSection( array( "s" => "cms_encuesta_pregunta" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "cms_encuesta_respuesta" );

    $mValida = havePermision( $mOpciones );
    if( TRUE !== $mValida )
    {
      header( "location:".$this->mSiteUrl );
    }
  }

  /*
   * Funcion principal
   * @fn init
   * @brief Logica del modulo
   */
  public function init()
  {
    $this -> mModo = GetData( "modo", "list" );

    switch( strtolower( $this -> mModo ) )
    {
      case "list":
      {
        $this -> cCatego = "";

        for( $j = 14; $j >= 0; $j-- )
        {
          $this -> cCatego .= "'".date( "m-d", strtotime( "-".$j." days" ) )."'";
          $this -> cCatego .= ($j-1) >= 0 ? ", " : "";
        }

        $this -> cOfertas[0]["txt_cargo"] = "Sí";
        $this -> cOfertas[0]["datos"] = "";

        for( $j = 14; $j >= 0; $j-- )
        {
          $mSqlSum = "SELECT COUNT( id ) AS num ".
                       "FROM zona_perseg ".
                      "WHERE con_trab = 'si' ".
                        "AND fec_creasi BETWEEN '".date( "Y-m-d 00:00:00", strtotime( "-".$j." days" ) )."' AND '".date( "Y-m-d 23:59:59", strtotime( "-".$j." days" ) )."' ";

          $this -> cOfertas[0]["datos"] .= DbHandler::GetOne( $mSqlSum );
          $this -> cOfertas[0]["datos"] .= ($j-1) >= 0 ? ", " : "";
        }

        $this -> cOfertas[1]["txt_cargo"] = "No";
        $this -> cOfertas[1]["datos"] = "";
        
        for( $j = 14; $j >= 0; $j-- )
        {
          $mSqlSum = "SELECT COUNT( id ) AS num ".
                       "FROM zona_perseg ".
                      "WHERE con_trab = 'no' ".
                        "AND fec_creasi BETWEEN '".date( "Y-m-d 00:00:00", strtotime( "-".$j." days" ) )."' AND '".date( "Y-m-d 23:59:59", strtotime( "-".$j." days" ) )."' ";

          $this -> cOfertas[1]["datos"] .= DbHandler::GetOne( $mSqlSum );
          $this -> cOfertas[1]["datos"] .= ($j-1) >= 0 ? ", " : "";
        }
        
        $this -> cAtra[0]["txt_cargo"] = "Sí";
        $this -> cAtra[0]["datos"] = "";

        for( $j = 14; $j >= 0; $j-- )
        {
          $mSqlSum = "SELECT COUNT( id ) AS num ".
                       "FROM zona_perseg ".
                      "WHERE atra_emp = 'si' ".
                        "AND fec_creasi BETWEEN '".date( "Y-m-d 00:00:00", strtotime( "-".$j." days" ) )."' AND '".date( "Y-m-d 23:59:59", strtotime( "-".$j." days" ) )."' ";

          $this -> cAtra[0]["datos"] .= DbHandler::GetOne( $mSqlSum );
          $this -> cAtra[0]["datos"] .= ($j-1) >= 0 ? ", " : "";
        }

        $this -> cAtra[1]["txt_cargo"] = "No";
        $this -> cAtra[1]["datos"] = "";
        
        for( $j = 14; $j >= 0; $j-- )
        {
          $mSqlSum = "SELECT COUNT( id ) AS num ".
                       "FROM zona_perseg ".
                      "WHERE atra_emp = 'no' ".
                        "AND fec_creasi BETWEEN '".date( "Y-m-d 00:00:00", strtotime( "-".$j." days" ) )."' AND '".date( "Y-m-d 23:59:59", strtotime( "-".$j." days" ) )."' ";

          $this -> cAtra[1]["datos"] .= DbHandler::GetOne( $mSqlSum );
          $this -> cAtra[1]["datos"] .= ($j-1) >= 0 ? ", " : "";
        }
        
        break;
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["ind_pregunta"] = NULL;
        $this -> mData["ind_opcion"] = NULL;
        $this -> mData["txt_ip"] = NULL;
        $this -> mData["fec_creasi"] = date( "Y-m-d h:i:s" );

        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_encuesta_respuesta();
        $this -> mData = $cData -> getByPk( $mId );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_encuesta_respuesta();
        $cData -> getByPk( $mId );
        $cData -> delete();
        break;
      }
    }
  }
}

?>
