<?php
/*
 * @file               : zona_perseg.db.php
 * @brief              : Clase para la interaccion con la tabla zona_perseg
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-24
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbzonaPerseg
 * @brief: Clase para la interaccion con la tabla zona_perseg
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
    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mCrear   = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "create" ) );
    $this -> mEditar  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "edit" ) );
    $this -> mElimin  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "delete" ) );
    $this -> mDescarga  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "download" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "zona_perseg" );

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
        $mQuery = "SELECT a.id, a.id_persona, a.con_trab, a.int_trab, a.cal_exp, ".
                         "a.atra_emp, a.como_tra, a.demo_tra, a.expe_emp, a.reco_emp, a.fec_creasi, ".
                         "b.txt_prim_nom, b.num_identifica ".
                    "FROM zona_perseg AS a LEFT JOIN zona_personas AS b ON a.id_persona = b.id ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "id", array( "dbfield" => "id" ) );
        $lista -> setHeader( "Nombre", array( "dbfield" => "b.txt_prim_nom" ) );
        $lista -> setHeader( "Documento", array( "dbfield" => "b.num_identifica" ) );
        $lista -> setHeader( "consiguio", array( "dbfield" => "con_trab" ) );
        $lista -> setHeader( "Interesado", array( "dbfield" => "int_trab" ) );
        $lista -> setHeader( "Creaci&oacute;n", array( "dbfield" => "fec_creasi" ) );
        
        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este cliente?" ) );

        $this -> mList = $lista -> generateList( "zona_persegList" );
        break;
      }

      case "download":
      {
        $mQuery = "SELECT b.txt_prim_nom, b.num_identifica, a.con_trab, a.int_trab, a.cal_exp, ".
                         "a.atra_emp, a.como_tra, a.demo_tra, a.expe_emp, a.reco_emp, a.fec_creasi, ".
                    "FROM zona_perseg AS a LEFT JOIN zona_personas AS b ON a.id_persona = b.id ";

        $path = "files/";

        $cExpXls = new ExpXls( "Seguimiento_empresa.xls", NULL, NULL, $path );

        // Inicializamos las cabeceras
        $mHeaders = array( "Nombre", "Documento", 
                           "¿Ya conseguiste Trabajo?", 
                           "¿Sigues interesado en conseguir trabajo?", 
                           "Califique su experiencia de búsqueda de empleo a través de Empleo en Marcha",
                           "¿El empleo que consiguió lo hizo a través de Empleo en Marcha?", 
                           "¿Cómo consiguió el trabajo que tiene actualmente?", 
                           "¿Cuánto tiempo se demoró consiguiendo trabajo a través del portal?", 
                           "Califique su experiencia de búsqueda de empleo a través de Empleo en Marcha", 
                           "¿Recomendaría el Portal de Empleo en Marcha para la obtención de empleo?", 
                           "Creacion" );

        $cExpXls->setHeaders( $mHeaders );
        $cExpXls->setQuery( $mQuery );
        // Generamos el excel
        $cExpXls->generateXls();
        
        // FOrzamos la descarga
        downloadFile( $path."Seguimiento_empresa.xls" );
        unlink( $path."Seguimiento_empresa.xls" );
        exit();
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["id_persona"] = NULL;
        $this -> mData["con_trab"] = NULL;
        $this -> mData["int_trab"] = NULL;
        $this -> mData["cal_exp"] = NULL;
        $this -> mData["atra_emp"] = NULL;
        $this -> mData["como_tra"] = NULL;
        $this -> mData["demo_tra"] = NULL;
        $this -> mData["expe_emp"] = NULL;
        $this -> mData["reco_emp"] = NULL;
        $this -> mData["fec_creasi"] = date( "Y-m-d h:i:s" );
        
        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbzona_perseg();
        $this -> mData = $cData -> getByPk( $mId );

        $mPersona = new Dbzona_personas();
        $this -> mData["persona"] = $mPersona->getByPk( $this->mData["id_persona"] );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbzona_perseg();
        $cData -> getByPk( $mId );
        $cData -> delete();
        break;
      }
    }
  }
}
?>