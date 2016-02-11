<?php
/*
 * @file               : cms_faq_respuestas.db.php
 * @brief              : Clase para la interaccion con la tabla cms_faq_respuestas
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-05
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbcmsFaq
 * @brief: Clase para la interaccion con la tabla cms_faq_respuestas
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
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"], "i" => $this -> cIdPregunta ) );
    $this -> mCrear   = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "create", "i" => $this -> cIdPregunta ) );
    $this -> mEditar  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "edit" ) );
    $this -> mElimin  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "delete" ) );

    $this -> cBack = Link::ToSection( array( "s" => "cms_faq_preguntas" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "cms_faq_respuestas" );

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
        $mQuery = "SELECT id, id_pregunta, txt_respuesta, ind_estado, fec_creasi ".
                    "FROM cms_faq_respuestas ".
                   "WHERE id_pregunta = '".$this -> cIdPregunta."' ".
                     "AND ind_estado = '1' ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "Respuesta", array( "dbfield" => "txt_respuesta" ) );
        $lista -> setHeader( "Creacion", array( "dbfield" => "fec_creasi" ) );

        $lista -> setHidden( "id", array( "label" => "id_respuesta" ) );
        $lista -> setHidden( "id_pregunta", array( "label" => "id" ) );

        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este cliente?" ) );

        $this -> mList = $lista -> generateList( "cms_faq_respuestasList" );
        break;
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["id_pregunta"] = $this -> cIdPregunta;
        $this -> mData["txt_respuesta"] = NULL;
        $this -> mData["ind_estado"] = NULL;
        $this -> mData["fec_creasi"] = date( "Y-m-d h:i:s" );

        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id_respuesta" );

        $cData = new Dbcms_faq_respuestas();
        $this -> mData = $cData -> getByPk( $mId );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_faq_respuestas();
        $cData -> getByPk( $mId );
        $cData -> deleteLogic();
        break;
      }
    }
  }
}
?>