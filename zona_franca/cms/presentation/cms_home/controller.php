<?php
/*
 * @file               : cms_home.db.php
 * @brief              : Clase para la interaccion con la tabla cms_home
 * @version            : 3.3
 * @ultima_modificacion: 2013-09-17
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbcmsHome
 * @brief: Clase para la interaccion con la tabla cms_home
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
    $mOpciones = array( "clase" => "cms_home" );

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
      case "save":
      {
        $mId = GetData( "id", FALSE );

        $mHome = new Dbcms_home();

        if( FALSE !== $mId )
          $mHome -> getByPk( $mId );
        else
        {
          $mHome -> setfil_image( GetData( "default.jpg" ) );
        }

        $mHome -> settxt_titulo( GetData( "txt_titulo" ) );
        $mHome -> settxt_subtitulo( GetData( "txt_subtitulo" ) );
        $mHome -> save();

        if( FALSE === $mId )
          $mId = $mHome -> getMaxId();

        $retorno = ClassFile::UploadImagenFile( "fil_image", FILES_DIR."home", "bann_".$mId, "thum_".$mId, 310, 202 );

        if ( $retorno["Status"]=="Uploader" )
        {
          $mHome -> getByPk( $mId );
          $mHome -> setfil_image( $mId.$retorno["Ext"] );
          $mHome -> save();
        }

        header( "location: ".GetData( "redirect" ) );
        break;
      }

      case "edit":
      {
        $cData = new Dbcms_home();
        $this -> mData = $cData -> getByPk( '1' );
        break;
      }

    }
  }
}
?>