<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estadi_poblacion
 *
 * @author carlos
 */
class estadiPoblacion
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
        $mOpciones = new Dbzona_poblaciones();
        $mOptResul = $mOpciones -> getList( array( "ind_estado" => "1" ) );

        $this -> mOptList = "";
        $this -> mResList = "";

        for( $i = 0, $tot = count($mOptResul); $i < $tot; $i++ )
        {
          $this -> mOptList .= "\"".$mOptResul[$i]["txt_nombre"]."\"";
          $this -> mOptList .= ($i+1) == $tot ? "" : ",";

          $mQuery = "SELECT COUNT( id ) AS total ".
                      "FROM zona_personas ".
                     "WHERE id_poblacion = '".$mOptResul[$i]["id"]."' ".
                       "AND ind_estado = '1' ";

          $this -> mResList .= (int)DbHandler::GetOne( $mQuery );
          $this -> mResList .= ($i+1) == $tot ? "" : ",";
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
