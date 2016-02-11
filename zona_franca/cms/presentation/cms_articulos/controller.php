<?php
/*
 * @file               : cms_articulos.db.php
 * @brief              : Clase para la interaccion con la tabla cms_articulos
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-03
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbcmsArticulos
 * @brief: Clase para la interaccion con la tabla cms_articulos
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
    $mOpciones = array( "clase" => "cms_articulos" );

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
        $mId = GetData( "id", FALSE );

        $mArticulos = new Dbcms_articulos();

        if( FALSE !== $mId )
          $mArticulos -> getByPk( $mId );

        $mArticulos -> setid_tipo( GetData( "id_tipo" ) );
        $mArticulos -> settxt_titulo( GetData( "txt_titulo" ) );
        $mArticulos -> settxt_descripcion( strip_tags(GetData( "txt_descripcion" ),"<p><a><ul><li><br><b><u><div><span>") );
        //$mArticulos -> setfil_image( "default.jpg");
        $mArticulos -> setfil_video( GetData( "fil_video" ) );
        $mArticulos -> setind_estado( "1" );
        $mArticulos -> setfec_creasi( date( "Y-m-d h:i:s" ) );
        $mArticulos -> save();

        if( FALSE === $mId )
          $mId = $mArticulos -> getMaxId();

        $retorno = ClassFile::UploadImagenFile( "fil_image", FILES_DIR."articulos", "art_img_".$mId, "thum_img_".$mId, 330, 200 );

        if ( $retorno["Status"]=="Uploader" )
        {
          $mArticulos -> getByPk( $mId );
          $mArticulos -> setfil_image( $mId.$retorno["Ext"] );
          $mArticulos -> save();
        }

        header( "location: ".GetData( "redirect" ) );
        break;
      }

      case "list":
      {
        $mQuery = "SELECT a.id, b.txt_nombre, a.txt_titulo, CONCAT( SUBSTRING( a.txt_descripcion, 1, 50 ), '...' ) AS descripcion, ".
                         "a.fil_image, a.fil_video, a.fec_creasi ".
                    "FROM cms_articulos AS a LEFT JOIN cms_articulos_tipo AS b ON a.id_tipo = b.id ".
                   "WHERE a.ind_estado = '1' ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "Tipo", array( "dbfield" => "b.txt_nombre" ) );
        $lista -> setHeader( "Titulo", array( "dbfield" => "a.txt_titulo" ) );
        $lista -> setHeader( "Descripcion", array( "dbfield" => "descripcion",
                                                 "filtfield" => "a.txt_descripcion" ) );
        $lista -> setHeader( "Creaci&oacute;n", array( "dbfield" => "a.fec_creasi" ) );

        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este cliente?" ) );

        $this -> mList = $lista -> generateList( "cms_articulosList" );
        break;
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["id_tipo"] = NULL;
        $this -> mData["txt_titulo"] = NULL;
        $this -> mData["txt_descripcion"] = NULL;
        $this -> mData["fil_image"] = NULL;
        $this -> mData["fil_video"] = NULL;
        $this -> mData["fec_creasi"] = date( "Y-m-d h:i:s" );

        $mTipo = new Dbcms_articulos_tipo();
        $this -> cTipo = $mTipo -> getList();
        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_articulos();
        $this -> mData = $cData -> getByPk( $mId );

        $mTipo = new Dbcms_articulos_tipo();
        $this -> cTipo = $mTipo -> getList();
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbcms_articulos();
        $cData -> getByPk( $mId );
        $cData -> delete();
        break;
      }
    }
  }
}
?>