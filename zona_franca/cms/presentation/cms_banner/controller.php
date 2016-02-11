<?php
/*
 * @file               : cms_banner.db.php
 * @brief              : Clase para la interaccion con la tabla cms_banner
 * @version            : 3.3
 * @ultima_modificacion: 2013-08-13
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbcmsBanner
 * @brief: Clase para la interaccion con la tabla cms_banner
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

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "cms_banner" );

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
        $mQuery = "SELECT id, id_seccion, txt_titulo, txt_descripcion, fil_image, ind_estado, fec_creasi FROM cms_banner WHERE ind_estado=1 ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "id", array( "dbfield" => "id" ) );
        $lista -> setHeader( "id_seccion", array( "dbfield" => "id_seccion" ) );
        $lista -> setHeader( "txt_titulo", array( "dbfield" => "txt_titulo" ) );
        $lista -> setHeader( "txt_descripcion", array( "dbfield" => "txt_descripcion" ) );
        $lista -> setHeader( "fil_image", array( "dbfield" => "fil_image" ) );
        $lista -> setHeader( "ind_estado", array( "dbfield" => "ind_estado" ) );
        $lista -> setHeader( "fec_creasi", array( "dbfield" => "fec_creasi" ) );
        
        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este cliente?" ) );

        $this -> mList = $lista -> generateList( "cms_bannerList" );
        break;
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["id_seccion"] = NULL;
        $this -> mData["txt_titulo"] = NULL;
        $this -> mData["txt_descripcion"] = NULL;
        $this -> mData["fil_image"] = NULL;
        $this -> mData["ind_estado"] = NULL;
        $this -> mData["fec_creasi"] = date( "Y-m-d h:i:s" );
        
        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_banner();
        $this -> mData = $cData -> getByPk( $mId );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_banner();
        $cData -> getByPk( $mId );
        $cData -> deleteLogic();
        break;
      }
    }
  }
}
?>