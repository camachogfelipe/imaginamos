<?php
/*
 * @file               : zona_profesion.db.php
 * @brief              : Clase para la interaccion con la tabla zona_profesion
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-15
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbzonaProfesion
 * @brief: Clase para la interaccion con la tabla zona_profesion
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

    $this -> cBack = Link::ToSection( array( "s" => "zona_formularios" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "zona_profesion" );

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
        $mQuery = "SELECT a.id, a.txt_nombre, b.txt_nombre AS nom_area, a.ind_estado ".
                    "FROM zona_profesion AS a LEFT JOIN zona_area_laboral AS b ON a.id_area = b.id ".
                   "WHERE a.ind_estado = '1' ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "Nombre", array( "dbfield" => "txt_nombre" ) );
        $lista -> setHeader( "�rea", array( "dbfield" => "nom_area",
                                          "filtfield" => "b.txt_nombre" ) );

        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este cliente?" ) );

        $this -> mList = $lista -> generateList( "zona_profesionList" );
        break;
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["id_area"] = NULL;
        $this -> mData["txt_nombre"] = NULL;
        $this -> mData["ind_estado"] = NULL;

        $mArea = new Dbzona_area_laboral();
        $this -> cArea = $mArea -> getList( array( "ind_estado" => "1" ) );
        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbzona_profesion();
        $this -> mData = $cData -> getByPk( $mId );

        $mArea = new Dbzona_area_laboral();
        $this -> cArea = $mArea -> getList( array( "ind_estado" => "1" ) );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbzona_profesion();
        $cData -> getByPk( $mId );
        $cData -> deleteLogic();
        break;
      }
    }
  }
}
?>