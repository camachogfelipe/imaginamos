<?php
/*
 * @file               : cms_secciones_articulo.db.php
 * @brief              : Clase para la interaccion con la tabla cms_secciones_articulo
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-03
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbcmsSecciones
 * @brief: Clase para la interaccion con la tabla cms_secciones_articulo
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
    $mIdSeccion = GetData( "id" );

    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"], "i" => $mIdSeccion ) );
    $this -> mCrear   = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "create", "i" => $mIdSeccion ) );
    $this -> mEditar  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "edit" ) );
    $this -> mElimin  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "delete" ) );

    $this -> cBack = Link::ToSection( array( "s" => "cms_secciones" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "cms_secciones_articulo" );

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
      case "save":
      {
        $mId = GetData( "id_articulo", FALSE );

        $mSecArt = new Dbcms_secciones_articulo();

        if( FALSE !== $mId )
          $mSecArt -> getByPk( $mId );
        else
        {
          $mSecArt -> setfil_image( "default.jpg" );
          $mSecArt -> setfec_creasi( date( "Y-m-d h:i:s" ) );
        }

        $mIdSeccion = GetData( "id_seccion" );

        $mSecArt -> setid_seccion( $mIdSeccion );
        $mSecArt -> settxt_titulo( GetData( "txt_titulo" ) );
        $mSecArt -> settxt_descripcion( GetData( "txt_descripcion" ) );
        $mSecArt -> setind_posicion( GetData( "ind_posicion", "1" ) );
        //$mSecArt -> setind_estado( "1" );
        $mSecArt -> save();

        if( FALSE === $mId )
          $mId = $mSecArt -> getMaxId();

        $retorno = ClassFile::UploadImagenFile( "fil_image", FILES_DIR."secart", "art_".$mIdSeccion."_".$mId, "thum_".$mIdSeccion."_".$mId, 330, 200 );

        if ( $retorno["Status"]=="Uploader" )
        {
          $mSecArt -> getByPk( $mId );
          $mSecArt -> setfil_image( $mIdSeccion."_".$mId.$retorno["Ext"] );
          $mSecArt -> save();
        }

        //header( "location: ".GetData( "redirect" ) );
        break;
      }

      case "list":
      {
        $mIdSeccion = GetData( "id" );

        $mQuery = "SELECT id, id_seccion, txt_titulo, CONCAT( SUBSTRING( txt_descripcion, 1, 50 ), '...' ) AS descripcion, ".
                         "fil_image, ind_posicion, fec_creasi ".
                    "FROM cms_secciones_articulo ".
                   "WHERE id_seccion = '".$mIdSeccion."' ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "Titulo", array( "dbfield" => "txt_titulo" ) );
        $lista -> setHeader( "Descripcion", array( "dbfield" => "descripcion",
                                                 "filtfield" => "txt_descripcion" ) );
        $lista -> setHeader( "Creaci&oacute;n", array( "dbfield" => "fec_creasi" ) );

        $lista -> setHidden( "id", array( "label" => "id_articulo" ) );
        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );



        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este cliente?" ) );

        $this -> mList = $lista -> generateList( "cms_secciones_articuloList" );
        break;
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["id_seccion"] = GetData( "id" );
        $this -> mData["txt_titulo"] = NULL;
        $this -> mData["txt_descripcion"] = NULL;
        $this -> mData["fil_image"] = NULL;
        $this -> mData["ind_posicion"] = NULL;
        $this -> mData["fec_creasi"] = date( "Y-m-d h:i:s" );

        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mIdArticulo = GetData( "id_articulo" );

        $cData = new Dbcms_secciones_articulo();
        $this -> mData = $cData -> getByPk( $mIdArticulo );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mIdArticulo = GetData( "id_articulo" );

        $cData = new Dbcms_secciones_articulo();
        $cData -> getByPk( $mIdArticulo );
        $cData -> delete();
        break;
      }
    }
  }
}
?>