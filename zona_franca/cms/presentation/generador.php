<?php
/*
 * @file               : Ajax.php
 * @brief              : Clase interaccion consultas Ajax
 * @version            : 1.0
 * @ultima_modificacion: 23-may-2013
 * @author             : Ruben Dario Cifuentes T
 * @author             : Carlos A. Mock-kow M
 *
 * @class: Generador
 * @brief: Clase interaccion consultas Ajax
 */

class Generador
{
  public $mSiteUrl;
  public $mTablas = array();
  public $mCampo;

  /*
   * Metodo Publico para Inicializar las variables necesarias de la clase
   * @fn __construct
   * @brief Inicializa variables necesarias de la clase
   */
  public function __construct()
  {
    $this->mSiteUrl = Link::Build('');
  }

  /*
   * Funcion principal
   * @fn init
   * @brief Logica del modulo
   */
  public function init()
  {
    $mModo = GetData( "modo" );

    $this->mCampo = "Tables_in_".DB_DATABASE;
    $mTablasTemp = DbHandler::GetAll( "SHOW TABLES" );

    $i = 0;
    foreach( $mTablasTemp as $mItem  )
    {
      if( "cms_modulos" != $mItem[$this->mCampo] &&
          "cms_permisos" != $mItem[$this->mCampo] &&
          "cms_roles" != $mItem[$this->mCampo] &&
          "cms_usuarios" != $mItem[$this->mCampo] )
      {
        $this->mTablas[$i] = $mItem[$this->mCampo];
        $i++;
      }
    }
    switch( $mModo )
    {
      case "generador":
      {
        for( $i=0, $tot=count($mTablasTemp); $i<$tot; $i++ )
        {
          if( isset( $_POST[$this->mTablas[$i]] ) )
          {
            self::generateModule( $this->mTablas[$i] );
          }
        }
        break;
      }

      case "modulo":
      {
        if( $_FILES["archivo"]['name'] != "" )
        {
          $mTextNombre = explode( ".", $_FILES["archivo"]['name'] );
          $mTextNombre = $mTextNombre[0];

          if( is_uploaded_file( $_FILES["archivo"]['tmp_name'] ) )
          {
            $ext = strrchr( $_FILES["archivo"]['name'], '.' );
            $mFileNamexx = Link::CleanUrlText( str_replace( " ", "_", $mTextNombre ) ).$ext;

            move_uploaded_file( $_FILES["archivo"]['tmp_name'], FILES_DIR."temp/".$mFileNamexx );
            @chmod( FILES_DIR."temp/".$mFileNamexx, 0777 );

            $fResult = exec( "/usr/bin/unzip -oq ".escapeshellcmd( FILES_DIR."temp/".$mFileNamexx )." -d ".escapeshellcmd( PRESENTATION_DIR ) );

            if( NULL !== $fResult && "" !== $fResult )
              return FALSE;
            else
              chmod( PRESENTATION_DIR.$mTextNombre, 0777 );

            @unlink( FILES_DIR."temp/".$mFileNamexx );

            if(file_exists( PRESENTATION_DIR.$mTextNombre."/consulta.sql" ) )
            {
              exec( "mysql --user=".DB_USERNAME." --password=".DB_PASSWORD." ".DB_DATABASE." < ".PRESENTATION_DIR.$mTextNombre."/consulta.sql" );

              $this->mCampo = "Tables_in_".DB_DATABASE;
              $mTablasTemp = DbHandler::GetAll( "SHOW TABLES" );

              for( $i=0, $tot=count($mTablasTemp); $i<$tot; $i++ )
              {
                $clase = $mTablasTemp[$i][$this->mCampo];

                self::generateModel( $clase );

                $mQuery = "SELECT id, txt_nombre, txt_clase, txt_descripcion, fil_image ".
                            "FROM cms_modulos WHERE txt_clase = '".$clase."' ";

                $mResoult = DbHandler::GetRow( $mQuery );

                if( FALSE === $mResoult )
                {
                  $mQuery = "INSERT INTO cms_modulos ( txt_nombre, txt_clase, txt_descripcion, fec_creasi ) ".
                            "VALUES( '".$clase."', '".$clase."', '".$clase."', '".date( "Y-m-d h:i:s" )."' )";

                  DbHandler::Execute( $mQuery );
                }
              }
            }
          }
        }
        else
          $mFileNamexx = NULL;

        break;
      }
    }
  }

  /*
   * Metodo Publico para generar el modelo basico de una tabla de la DB
   * @fn generateModel
   * @brief Generar el modelo basico de una tabla de la DB
   */
  public function generateModule( $clase = NULL )
  {
    if( !file_exists( PRESENTATION_DIR."".$clase."/" ) )
    {
      if( !mkdir( PRESENTATION_DIR."".$clase."/", 0777 ) )
        return FALSE;
      else
        chmod( PRESENTATION_DIR."".$clase."/", 0777 );
    }

    if( isset( $_POST["model"] ) )
      self::generateModel( $clase );

    if( isset( $_POST["controller"] ) )
      self::generateController( $clase );

    if( isset( $_POST["view"] ) )
      self::generateView( $clase );

    $mQuery = "SELECT id, txt_nombre, txt_clase, txt_descripcion, fil_image ".
                "FROM cms_modulos WHERE txt_clase = '".$clase."' ";

    $mResoult = DbHandler::GetRow( $mQuery );

    if( FALSE === $mResoult )
    {
      $mQuery = "INSERT INTO cms_modulos ( txt_nombre, txt_clase, txt_descripcion, fec_creasi ) ".
                "VALUES( '".$clase."', '".$clase."', '".$clase."', '".date( "Y-m-d h:i:s" )."' )";

      DbHandler::Execute( $mQuery );
    }
  }

  /*
   * Metodo Publico para generar el modelo basico de una tabla de la DB
   * @fn generateModel
   * @brief Generar el modelo basico de una tabla de la DB
   */
  function generateModel( $clase = NULL )
  {
    $version = "Generador DAO version 1.1";
    $fp = fopen( 'business/model/Db'.$clase.'.db.php',"w+");
    $fields = array();

    // Obtenemos las descripciones de los campos de DB
    $mFieldTemp = DbHandler::GetAll( 'DESCRIBE '.$clase );
    for( $i=0,$tot=count($mFieldTemp); $i<$tot; $i++ )
    {
      $fields[] = $mFieldTemp[$i]["Field"];
    }

    $contenido = '<?php
/*
 * @file               : Db'.$clase.'.db.php
 * @brief              : Clase para la interaccion con la tabla '.$clase.'
 * @version            : 3.3
 * @ultima_modificacion: '.date("Y-m-d").'
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : '.$version.'
 *
 * @class: Db'.$clase.'
 * @brief: Clase para la interaccion con la tabla '.$clase.'
 */

class Db'.$clase.' extends DbDAO {
';

    for( $i=0,$tot=count($fields); $i<$tot; $i++ ){
      if( $fields[$i]=="id" ){
        $contenido .='
  public $'.$fields[$i].' = NULL;';
      }else{
        $contenido .='
  protected $'.$fields[$i].' = NULL;';
      }
    }

    for( $i=0,$tot=count($fields); $i<$tot; $i++ ){
  $contenido .='

  public function set'.$fields[$i].'($mData = NULL) {
    if ($mData === NULL) { $this->'.$fields[$i].' = NULL; }
    $this->'.$fields[$i].' = StripHtml($mData);
  }';
    }
  $contenido .='

}
?>';

    fwrite( $fp, $contenido );
    fclose( $fp );
  }

  /*
   * Metodo Publico para generar el controlador basico del CRUD de una tabla
   * @fn generateControllert
   * @brief Genera el controlador basico del CRUD de una tabla
   */
  public function generateController( $clase = NULL )
  {
    $version = "Generador DAO version 1.1";
    $fields = array();

    // Obtenemos las descripciones de los campos de DB
    $mFieldTemp = DbHandler::GetAll( 'DESCRIBE '.$clase );
    for( $i=0,$tot=count($mFieldTemp); $i<$tot; $i++ )
    {
      $fields[] = $mFieldTemp[$i]["Field"];
    }

    if( FALSE === array_search( "ind_estado", $fields ) )
    {
      $mActiDelete = '$cData -> delete();';
      $mListWhere = '';
    }
    else
    {
      $mActiDelete = '$cData -> deleteLogic();';
      $mListWhere = 'WHERE ind_estado=1 ';
    }

    $fp = fopen( 'presentation/'.$clase.'/controller.php',"w+");
    $mNomClase = explode( "_", $clase );
    $contenido = '<?php
/*
 * @file               : '.$clase.'.db.php
 * @brief              : Clase para la interaccion con la tabla '.$clase.'
 * @version            : 3.3
 * @ultima_modificacion: '.date("Y-m-d").'
 * @author             : Carlos A. Mock-kow M.
 * @generated          : '.$version.'
 *
 * @class: Db'.$mNomClase[0].''.ucfirst( $mNomClase[1] ).'
 * @brief: Clase para la interaccion con la tabla '.$clase.'
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
    $mOpciones = array( "clase" => "'.$clase.'" );

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
        $mQuery = "SELECT ';

    for( $i=0,$tot=count($fields); $i<$tot; $i++ )
    {
      $contenido .= ($i+1)==$tot ? $fields[$i].' ' : $fields[$i].', ';
    }

    $contenido .=  'FROM '.$clase.' '.$mListWhere.'";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        ';

    for( $i=0,$tot=count($fields); $i<$tot; $i++  )
    {
      $contenido .= '$lista -> setHeader( "'.$fields[$i].'", array( "dbfield" => "'.$fields[$i].'" ) );
        ';
    }

    $contenido .= '
        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este cliente?" ) );

        $this -> mList = $lista -> generateList( "'.$clase.'List" );
        break;
      }

      case "create":
      {
        //Inicializamos las variables
        ';

    $mFecCreasi = FALSE;

    for( $i=0,$tot=count($fields); $i<$tot; $i++ )
    {
      if( "fec_creasi" != $fields[$i] )
      {
        $contenido .= '$this -> mData["'.$fields[$i].'"] = NULL;
        ';
      }
      else
      {
        $contenido .= '$this -> mData["'.$fields[$i].'"] = date( "Y-m-d h:i:s" );
        ';
        $mFecCreasi = TRUE;
      }
    }

    $contenido .= '
        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Db'.$clase.'();
        $this -> mData = $cData -> getByPk( $mId );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Db'.$clase.'();
        $cData -> getByPk( $mId );
        '.$mActiDelete.'
        break;
      }
    }
  }
}
?>';
    fwrite( $fp, $contenido );
    fclose( $fp );

    unset( $contenido );
  }

  /*
   * Metodo Publico para generar la vista basica del CRUD de una tabla
   * @fn generateControllert
   * @brief Genera la vista basica del CRUD de una tabla
   */
  public function generateView( $clase = NULL )
  {
    $fields = array();

    // Obtenemos las descripciones de los campos de DB
    $mFieldTemp = DbHandler::GetAll( 'DESCRIBE '.$clase );

    $mFecCreasi = FALSE;

    for( $i=0,$tot=count($mFieldTemp); $i<$tot; $i++ )
    {
      $fields[] = $mFieldTemp[$i]["Field"];
      if( "fec_creasi" != $mFieldTemp[$i]["Field"] )
      {
        $mFecCreasi = TRUE;
      }
    }

    $fp = fopen( 'presentation/'.$clase.'/view.tpl',"w+");

    $contenido = '{load_presentation_object filename="'.$clase.'/controller" assign="obj"}
<div class="container-fluid">
{if $obj->mModo=="list"}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mSiteUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
    <a href="{$obj->mCrear}" class="btn"><i class="icon-plus-sign"></i> Crear</a>
  </div>
</div>

<div class="row-fluid listContainer">
  <h1>'.$clase.'</h1>
  <br>
  {$obj->mList}
</div>
{else}
<div class="row-fluid">
  <div class="btn-group">
    <a href="{$obj->mThisUrl}" class="btn"><i class="icon-arrow-left"></i> Volver</a>
  </div>
</div>

<div class="row-fluid formContainer">
  <h1>'.$clase.'</h1>
  <br>
  <div class="class_frm frm'.$clase.'">
    <input type="hidden" class="field_frm" id="myClass" value="AjaxInsert" />
    <input type="hidden" class="field_frm" id="clase" value="'.$clase.'" />
    <input type="hidden" class="field_frm" id="redirect" value="{$obj->mThisUrl}" />
    ';

    $contenido .= $mFecCreasi? '<input type="hidden" class="field_frm" id="fec_creasi" value="{$obj->mData.fec_creasi}" />' : '';

    $contenido .= '
    {if $obj->mData.id!=""}
    <input type="hidden" class="field_frm" id="id" value="{$obj->mData.id}" />
    {/if}
';
    for( $i=0,$tot=count($mFieldTemp); $i<$tot; $i++ )
    {
      if( "id" != $mFieldTemp[$i]["Field"] && "fec_creasi" != $mFieldTemp[$i]["Field"] && "ind_estado" != $mFieldTemp[$i]["Field"] )
      {
        $mRequired = "NO" == $mFieldTemp[$i]["Null"] ? 'title="Digite el '.$mFieldTemp[$i]["Field"].'"' : '';

        if( "text" == $mFieldTemp[$i]["Type"] )
        {
          $contenido .= '
    <div class="span5">
      <label class="label">'.$mFieldTemp[$i]["Field"].' *</label><br />
      <textarea class="field_frm" id="'.$mFieldTemp[$i]["Field"].'" name="'.$mFieldTemp[$i]["Field"].'" rows="3" '.$mRequired.'>{$obj->mData.'.$mFieldTemp[$i]["Field"].'}</textarea>
    </div>
        ';
        }
        else
        {
          $contenido .= '
    <div class="span5">
      <label class="label">'.$mFieldTemp[$i]["Field"].' *</label><br />
      <input type="text" class="field_frm" id="'.$mFieldTemp[$i]["Field"].'" name="'.$mFieldTemp[$i]["Field"].'" value="{$obj->mData.'.$mFieldTemp[$i]["Field"].'}" placeholder="'.$mFieldTemp[$i]["Field"].'" '.$mRequired.' />
    </div>
        ';
        }

      }
    }

    $contenido .= '
    <div class="span10">
      <a href="javascript:void(0);" class="btn submit_frm" frmid="frm'.$clase.'">Guardar</a>
    </div>
  </div>
</div>
{/if}
</div>
      ';

    fwrite( $fp, $contenido );
    fclose( $fp );
  }
}
?>