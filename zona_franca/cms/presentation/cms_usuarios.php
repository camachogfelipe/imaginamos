<?php
/*
 * @file               : cms_usuarios.db.php
 * @brief              : Clase para la interaccion con la tabla cms_usuarios
 * @version            : 3.3
 * @ultima_modificacion: 2013-05-27
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbcmsUsuarios
 * @brief: Clase para la interaccion con la tabla cms_usuarios
 */

class CmsUsuarios
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mCrear        = NULL;
  public $mEditar       = NULL;
  public $mElimin       = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;
  public $mData         = NULL;
  public $mRoles        = NULL;

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

    $this -> mRoles   = Link::ToSection( array( "s" => "cms_roles", "m" => "list" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "cms_usuarios" );

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
        $mQuery = "SELECT a.id, a.txt_nombre, b.txt_nombre AS nom_rol, a.txt_email ".
                    "FROM cms_usuarios AS a LEFT JOIN cms_roles AS b ON a.id_rol = b.id ".
                   "WHERE a.ind_estado = '1' ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "Nombre", array( "dbfield" => "a.txt_nombre" ) );
        $lista -> setHeader( "Rol", array( "dbfield" => "nom_rol",
                                         "filtfield" => "b.txt_nombre" ) );
        $lista -> setHeader( "Email", array( "dbfield" => "a.txt_email" ) );

        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
        {
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este usuario?" ) );
        }

        $this -> mList = $lista -> generateList( "usuariosList" );
        break;
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["id_rol"] = NULL;
        $this -> mData["txt_nombre"] = NULL;
        $this -> mData["txt_passwd"] = NULL;
        $this -> mData["txt_email"] = NULL;
        $this -> mData["ind_delete"] = NULL;
        $this -> mData["ind_estado"] = NULL;
        $this -> mData["fec_creasi"] = date( "Y-m-d h:i:s" );

        // Obtener listado de roles
        $cRoles = new Dbcms_roles();
        $this -> mRoles = $cRoles -> getList( array( "ind_estado" => "1" ) );
        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_usuarios();
        $this -> mData = $cData -> getByPk( $mId );

        // Obtener listado de roles
        $cRoles = new Dbcms_roles();
        $this -> mRoles = $cRoles -> getList( array( "ind_estado" => "1" ) );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_usuarios();
        $cData -> getByPk( $mId );
        $cData -> deleteLogic();
        break;
      }
    }
  }
}
?>