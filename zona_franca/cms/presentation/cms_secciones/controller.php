<?php
/*
 * @file               : cms_secciones.db.php
 * @brief              : Clase para la interaccion con la tabla cms_secciones
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-03
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbcmsSecciones
 * @brief: Clase para la interaccion con la tabla cms_secciones
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

    $this -> cArticulos = Link::ToSection( array( "s" => "cms_secciones_articulo", "m" => "list" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "cms_secciones" );

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
        $mQuery = "SELECT a.id, a.txt_nombre, a.fec_creasi, ".
                         "( SELECT txt_nombre FROM cms_secciones AS b WHERE a.id_padre = b.id ) AS padre ".
                    "FROM cms_secciones AS a ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "Nombre", array( "dbfield" => "txt_nombre" ) );
        $lista -> setHeader( "Padre", array( "dbfield" => "padre", "filter" => FALSE ) );
        $lista -> setHeader( "Creaci&oacute;n", array( "dbfield" => "fec_creasi" ) );

        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        $lista -> setButton( "action", "Articulos", array( "action" => $this -> cArticulos,
                                                           "condition" => array( 
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "9" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "10" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "11" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "12" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "13" )  
                                                                          ) ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar esta seccion?",
                                                           "condition" => array( 
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "1" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "2" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "3" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "4" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "5" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "6" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "7" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "8" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "9" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "10" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "11" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "12" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "13" ),
                                                                            array( "field" => "id", "cond"=> "!=", "value" => "14" )  
                                                                          ) ) );

        $this -> mList = $lista -> generateList( "cms_seccionesList" );
        break;
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["txt_nombre"] = NULL;
        $this -> mData["id_padre"] = NULL;
        $this -> mData["fec_creasi"] = date( "Y-m-d h:i:s" );

        $mPadre = new Dbcms_secciones();
        $this -> cPadre = $mPadre -> getList( array( "id_padre" => "0" ) );
        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_secciones();
        $this -> mData = $cData -> getByPk( $mId );

        $mPadre = new Dbcms_secciones();
        $this -> cPadre = $mPadre -> getList( array( "id_padre" => "0" ) );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_secciones();
        $cData -> getByPk( $mId );
        $cData -> delete();
        break;
      }
    }
  }
}
?>