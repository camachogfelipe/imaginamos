<?php
/*
 * @file               : cms_contacto.db.php
 * @brief              : Clase para la interaccion con la tabla cms_contacto
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbcmsContacto
 * @brief: Clase para la interaccion con la tabla cms_contacto
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
    $mOpciones = array( "clase" => "cms_contacto" );

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
    $this -> mModo = GetData( "modo", "edit" );

    switch( strtolower( $this -> mModo ) )
    {
      case "list":
      {
        $mQuery = "SELECT id, txt_telefono, txt_email, txt_twitter, txt_facebook FROM cms_contacto ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "txt_telefono", array( "dbfield" => "txt_telefono" ) );
        $lista -> setHeader( "txt_email", array( "dbfield" => "txt_email" ) );
        $lista -> setHeader( "txt_twitter", array( "dbfield" => "txt_twitter" ) );
        $lista -> setHeader( "txt_facebook", array( "dbfield" => "txt_facebook" ) );

        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este cliente?" ) );

        $this -> mList = $lista -> generateList( "cms_contactoList" );
        break;
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["txt_telefono"] = NULL;
        $this -> mData["txt_email"] = NULL;
        $this -> mData["txt_twitter"] = NULL;
        $this -> mData["txt_facebook"] = NULL;

        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id", '1' );

        $cData = new Dbcms_contacto();
        $this -> mData = $cData -> getByPk( $mId );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_contacto();
        $cData -> getByPk( $mId );
        $cData -> delete();
        break;
      }
    }
  }
}
?>