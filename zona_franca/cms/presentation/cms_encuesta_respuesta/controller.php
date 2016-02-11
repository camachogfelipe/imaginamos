<?php
/*
 * @file               : cms_encuesta_respuesta.db.php
 * @brief              : Clase para la interaccion con la tabla cms_encuesta_respuesta
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-05
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbcmsEncuesta
 * @brief: Clase para la interaccion con la tabla cms_encuesta_respuesta
 */

class controller
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
        /* *
        $mQuery = "SELECT a.id, b.txt_respuesta AS opcion, a.txt_ip, a.fec_creasi ".
                    "FROM cms_encuesta_respuesta AS a LEFT JOIN cms_encuesta_opciones AS b ON a.ind_opcion = b.id ".
                   "WHERE ind_pregunta = '".$this -> cIdPregunta."' ";


        $lista = new DinamicList( $this -> mThisUrl, 10 );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "Opcion", array( "dbfield" => "opcion",
                                            "filtfield" => "b.txt_respuesta" ) );

        $lista -> setHeader( "Ip", array( "dbfield" => "txt_ip" ) );
        $lista -> setHeader( "Creaci&oacute;n", array( "dbfield" => "fec_creasi" ) );

        $lista -> setHidden( "id", array( "label" => "id" ) );

        $this -> mList = $lista -> generateList( "cms_encuesta_respuestaList" );
        /* */
        $mOpciones = new Dbcms_encuesta_opciones();
        $mOptResul = $mOpciones -> getList( array( "id_pregunta" => $this -> cIdPregunta, "ind_estado" => "1" ) );

        $this -> mOptList = "";
        $this -> mResList = "";

        for( $i = 0, $tot = count($mOptResul); $i < $tot; $i++ )
        {
          $this -> mOptList .= "\"".$mOptResul[$i]["txt_respuesta"]."\"";
          $this -> mOptList .= ($i+1) == $tot ? "" : ",";

          $mQuery = "SELECT COUNT( ind_opcion ) AS total ".
                      "FROM cms_encuesta_respuesta ".
                     "WHERE ind_pregunta = '".$this -> cIdPregunta."' ".
                       "AND ind_opcion = '".$mOptResul[$i]["id"]."' ";

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