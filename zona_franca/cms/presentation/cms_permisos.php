<?php
/*
 * @file               : cms_permisos.db.php
 * @brief              : Clase para la interaccion con la tabla cms_permisos
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-27
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbcmsPermisos
 * @brief: Clase para la interaccion con la tabla cms_permisos
 */

class CmsPermisos
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mCrear        = NULL;
  public $mEditar       = NULL;
  public $mElimin       = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;
  public $mData         = NULL;
  public $mRegres       = NULL;
  public $mIdRol        = NULL;
  public $mModulos      = NULL;

  /*
   * Constructor de clase
   * @fn __construct
   * @brief Inicializa las variables necesarias de la clase
   */
  public function __construct()
  {
    $this -> mIdRol = GetData( "id" );

    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"], "i" => $this -> mIdRol ) );
    $this -> mCrear   = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "create", "i" => $this -> mIdRol ) );
    $this -> mEditar  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "edit" ) );
    $this -> mElimin  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "delete" ) );

    $this -> mRegres  = Link::ToSection( array( "s" => "cms_roles", "m" => "list" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "cms_permisos" );

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
        $mQuery = "SELECT a.id, a.id_modulo, a.id_rol, b.txt_nombre, b.txt_descripcion ".
                    "FROM cms_permisos AS a LEFT JOIN cms_modulos AS b ON a.id_modulo = b.id ".
                   "WHERE a.id_rol = '".$this -> mIdRol."' ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "Modulo", array( "dbfield" => "txt_nombre" ) );
        $lista -> setHeader( "Descripcion", array( "dbfield" => "txt_descripcion" ) );

        $lista -> setHidden( "id", array( "label" => "id_permisos" ) );
        $lista -> setHidden( "id_rol", array( "label" => "id" ) );

        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este cliente?" ) );

        $this -> mList = $lista -> generateList( "cms_permisosList" );
        break;
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["id_modulo"] = NULL;
        $this -> mData["id_rol"] = $this -> mIdRol;

        // Obtener listado de modulos
        $mQuery = "SELECT a.id, a.txt_nombre ".
                    "FROM cms_modulos AS a ".
                   "WHERE a.ind_estado = '1' ".
                     "AND a.id NOT IN ( SELECt b.id_modulo FROM cms_permisos AS b WHERE id_rol = '".$this -> mIdRol."') ";

        $this -> mModulos = DbHandler::GetAll( $mQuery );

        //$cModulos = new Dbcms_modulos();
        //$this -> mModulos = $cModulos -> getList( array( "ind_estado" => "1" ) );
        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id_permisos" );

        $cData = new Dbcms_permisos();
        $this -> mData = $cData -> getByPk( $mId );

        // Obtener listado de modulos
        $cModulos = new Dbcms_modulos();
        $this -> mModulos = $cModulos -> getList( array( "ind_estado" => "1" ) );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id_permisos" );

        $cData = new Dbcms_permisos();
        $cData -> getByPk( $mId );
        $cData -> delete();
        break;
      }
    }
  }
}
?>