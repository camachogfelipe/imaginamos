<?php
/*
 * @file               : zona_empresas_desta.db.php
 * @brief              : Clase para la interaccion con la tabla zona_empresas_desta
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-09
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbzonaEmpresas
 * @brief: Clase para la interaccion con la tabla zona_empresas_desta
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
  public $cNumDesta     = NULL;

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

    $this -> cBack    = Link::ToSection( array( "s" => "zona_empresas", "m" => "list" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "zona_empresas_desta" );

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
        $mQuery = "SELECT a.id, b.txt_nit, b.txt_nom_comercial, a.fec_creasi ".
                    "FROM zona_empresas_desta AS a LEFT JOIN zona_empresas AS b ON a.id_empresa = b.id ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "Nit", array( "dbfield" => "txt_nit" ) );
        $lista -> setHeader( "Nombre comercial", array( "dbfield" => "txt_nom_comercial" ) );
        $lista -> setHeader( "Creaci&oacute;n", array( "dbfield" => "fec_creasi" ) );

        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este destacado?" ) );

        $this -> mList = $lista -> generateList( "zona_empresas_destaList" );

        $mCountDesta = "SELECT COUNT( id ) AS total FROM zona_empresas_desta ";
        $this -> cNumDesta = DbHandler::GetOne( $mCountDesta );

        break;
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["id_empresa"] = NULL;
        $this -> mData["fec_creasi"] = date( "Y-m-d h:i:s" );

        $mSqlEmpresas = "SELECT a.id, a.txt_nom_comercial ".
                          "FROM zona_empresas AS a ".
                         "WHERE a.ind_estado = '1' ".
                           "AND a.id NOT IN ( SELECT b.id_empresa FROM zona_empresas_desta AS b ) ";

        $this -> cEmpresas = DbHandler::GetAll( $mSqlEmpresas );
        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbzona_empresas_desta();
        $this -> mData = $cData -> getByPk( $mId );

        $mSqlEmpresas = "SELECT a.id, a.txt_nom_comercial ".
                          "FROM zona_empresas AS a ".
                         "WHERE a.id = '".$this -> mData["id_empresa"]."' ".
                         "UNION ".
                        "SELECT b.id, b.txt_nom_comercial ".
                          "FROM zona_empresas AS b ".
                         "WHERE b.ind_estado = '1' ".
                           "AND b.id NOT IN ( SELECT c.id_empresa FROM zona_empresas_desta AS c ) ";

        $this -> cEmpresas = DbHandler::GetAll( $mSqlEmpresas );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbzona_empresas_desta();
        $cData -> getByPk( $mId );
        $cData -> delete();
        break;
      }
    }
  }
}
?>