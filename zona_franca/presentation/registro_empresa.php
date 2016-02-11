<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registro_empresa
 *
 * @author carlos
 */
class registroEmpresa
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;
  public $cTitulo       = NULL;
  public $cPkey         = "imaQu1p1t0s";
  public $cData         = NULL;
  public $cCaptcha      = NULL;

  // Class constructor
  public function __construct()
  {
    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mVolver  = $this -> mSiteUrl;

    require_once( SITE_ROOT.'libs/recaptcha/recaptchalib.php' );
  }

  public function init()
  {
    $this -> cData = array();
    $mSeguir = true;

    $mEnviar = GetData( "enviar", FALSE );

    $mGenero = new Dbzona_genero();
    $this -> cGeneros = $mGenero -> getList( array( "where" => " ORDER BY txt_nombre ASC" ) );

    $mRamo = new Dbzona_area_laboral();
    $this -> cRamos = $mRamo->getList(array("ind_estado" => "1"));

    $mDeparta = new Dbcms_departamentos();
    $this -> cDeparts = $mDeparta -> getList();

    if( FALSE !== $mEnviar )
    {
      $this -> capturar();

      $mCiudad = new Dbcms_ciudades();
      if( NULL !== $this -> cData["id_departamento"] && "" != $this -> cData["id_departamento"] )
        $this -> cCiudades = $mCiudad -> getList( array( "id_departamento" => $this -> cData["id_departamento"] ) );
      else
        $this -> cCiudades = NULL;

      if( !isset( $this -> cData["id_registro"] ) )
      {
        if( $this -> cData["txt_passwd"] != GetData( "txt_passwd2" ) )
        {
          $this -> cScript = "alert( 'Las claves no coinciden' )";
          $mSeguir=false;
          //exit;
        }

        if( FALSE === filter_var( $this -> cData["txt_email"], FILTER_VALIDATE_EMAIL ) )
        {
          $this -> cScript = "alert( 'El email no tiene un formato valido' )";
          $mSeguir=false;
          //exit;
        }
        else
        {
          if( $this -> cData["txt_email"] != GetData( "txt_email2" ) )
          {
            $this -> cScript = "alert( 'Los e-mails no coinciden' )";
            $mSeguir=false;
            //exit;
          }

          $cRegistrados = new Dbzona_registrados();
          $mData = $cRegistrados -> getList( array( "txt_nickname" => $this -> cData["txt_nickname"] ) );

          if( count( $mData ) > 0 )
          {
            $this -> cScript = "alert( 'El nombre de usuario ya se encuentra registrado' )";
            $mSeguir=false;
            //exit;
          }

          $mData = $cRegistrados -> getList( array( "txt_email" => $this -> cData["txt_email"] ) );

          if( count( $mData ) > 0 )
          {
            $this -> cScript = "alert( 'El email ya se encuentra registrado' )";
            $mSeguir=false;
            //exit;
          }
        }
      }

      if( $mSeguir )
      {
        $mRegistro = new Dbzona_registrados();

        if( isset( $this -> cData["id_registro"] ) )
          $mRegistro -> getByPk( $this -> cData["id_registro"] );

        $mRegistro -> setid_tipo( "1" );
        $mRegistro -> settxt_nickname( $this -> cData["txt_nickname"] );
        $mRegistro -> settxt_email( $this -> cData["txt_email"] );
        $mRegistro -> settxt_passwd( sha1( $this -> cData["txt_passwd"] ) );
        $mRegistro -> setind_estado( "1" );
        $mRegistro -> setfec_creasi( date( "Y-m-d h:i:s" ) );
        $mRegistro -> save();

        if( isset( $this -> cData["id_registro"] ) )
          $mIdRegistro = $this -> cData["id_registro"];
        else
          $mIdRegistro = $mRegistro -> getMaxId();

        $mEmpresa = new Dbzona_empresas();

        if( isset( $this -> cData["id_empresa"] ) )
          $mEmpresa -> getByPk( $this -> cData["id_empresa"] );
        else
        {
          $mEmpresa -> setfil_logo( "default.jpg" );
          $mEmpresa -> setid_registrado( $mIdRegistro );
          $mEmpresa -> setfec_creasi( date( "Y-m-d h:i:s" ) );
        }
        $mEmpresa -> settxt_nom_comercial( $this -> cData["txt_nom_comercial"] );
        $mEmpresa -> settxt_razon_social( $this -> cData["txt_razon_social"] );
        $mEmpresa -> setid_ramo( $this -> cData["id_ramo"] );
        $mEmpresa -> settxt_ramo_2( $this -> cData["txt_ramo_2"] );
        $mEmpresa -> settxt_direccion( $this -> cData["txt_direccion"] );
        $mEmpresa -> setid_departamento( $this -> cData["id_departamento"] );
        $mEmpresa -> setid_ciudad( $this -> cData["id_ciudad"] );
        $mEmpresa -> settxt_nit( $this -> cData["txt_nit"] );
        $mEmpresa -> settxt_website( $this -> cData["txt_website"] );
        $mEmpresa -> settxt_descripcion( $this -> cData["txt_descripcion"] );
      
        $mEmpresa -> setind_estado( "1" );
      
        $mEmpresa -> save();

        if( isset( $this -> cData["id_empresa"] ) )
          $mIdEmpresa = $this -> cData["id_empresa"];
        else
          $mIdEmpresa = $mEmpresa -> getMaxId();

        $retorno = ClassFile::UploadImagenFile( "fil_image", FILES_DIR."empresas", "emp_".$mIdEmpresa, "thum_".$mIdEmpresa, 151, 59 );

        if ( $retorno["Status"]=="Uploader" )
        {
          $mEmpresa -> getByPk( $mIdEmpresa );
          $mEmpresa -> setfil_logo( $mIdEmpresa.$retorno["Ext"] );
          $mEmpresa -> save();
        }

        $mContacto = new Dbzona_empresas_contacto();

        if( isset( $this -> cData["id_contacto"] ) )
          $mContacto -> getByPk( $this -> cData["id_contacto"] );
        else
          $mContacto -> setid_empresa( $mIdEmpresa );

        $mContacto -> settxt_prim_nom( $this -> cData["txt_prim_nom"] );
        $mContacto -> settxt_seg_nom( $this -> cData["txt_seg_nom"] );
        $mContacto -> settxt_prim_apell( $this -> cData["txt_prim_apell"] );
        $mContacto -> settxt_seg_apell( $this -> cData["txt_seg_apell"] );
        $mContacto -> setid_genero( $this -> cData["id_genero"] );
        $mContacto -> setfec_nacimiento( $this -> cData["fec_nacimiento"] );
        $mContacto -> settxt_cargo( $this -> cData["txt_cargo"] );
        $mContacto -> settxt_telefono( $this -> cData["txt_telefono"] );
        $mContacto -> save();


        $cUsuarios = new Dbzona_registrados();
        $_SESSION["user"] = $cUsuarios->getByPk( $mIdRegistro );

        $mInfo = new Dbzona_empresas();
        $_SESSION["user"]["info"] = $mInfo->getByPk( $mIdEmpresa );

        $this -> cScript = "alert( 'Empresa registrada con exito' ); window.location.href='".str_replace( "&amp;", "&", Link::ToSection( array( "s" => "zona_empresa" ) ) )."';";
      }
    }
    else
    {
      if( isset( $_SESSION["user"] ) )
      {
        $mSql = "SELECT a.id AS id_registro, a.id_tipo, a.txt_nickname, a.txt_email, ".
                       "b.id AS id_empresa, b.txt_nom_comercial, b.txt_razon_social, ".
                       "b.id_ramo, b.txt_ramo_2, b.txt_direccion, b.id_departamento, b.id_ciudad, ".
                       "b.txt_nit, b.txt_website, b.txt_descripcion, b.fil_logo, ".
                       "c.id AS id_contacto, c.txt_prim_nom, c.txt_seg_nom, c.txt_prim_apell, ".
                       "c.txt_seg_apell, c.id_genero, c.fec_nacimiento, c.txt_cargo, c.txt_telefono ".
                  "FROM zona_registrados AS a LEFT JOIN zona_empresas AS b ON a.id = b.id_registrado ".
                                             "LEFT JOIN zona_empresas_contacto AS c ON b.id = c.id_empresa ".
                 "WHERE a.id = '".$_SESSION["user"]["id"]."' ";

        $this -> cData = DbHandler::GetRow( $mSql );
      }
      else
      {
        $this->cCaptcha = recaptcha_get_html( recap_pubkey );
        $this -> capturar();
      }
    }
  }

  private function capturar()
  {
    $mIdRegistro = GetData( "id_registro", NULL );
    if( NULL !== $mIdRegistro && "" != $mIdRegistro )
      $this -> cData["id_registro"] = $mIdRegistro;

    $this -> cData["txt_nickname"] = GetData( "txt_nickname", NULL );
    $this -> cData["txt_email"] = GetData( "txt_email", NULL );
    $this -> cData["txt_passwd"] = GetData( "txt_passwd", NULL );

    $mIdEmpresa = GetData( "id_empresa", NULL );
    if( NULL !== $mIdEmpresa && "" != $mIdEmpresa )
      $this -> cData["id_empresa"] = $mIdEmpresa;

    $this -> cData["txt_prim_nom"] = GetData( "txt_prim_nom", NULL );
    $this -> cData["txt_seg_nom"] = GetData( "txt_seg_nom", NULL );
    $this -> cData["txt_prim_apell"] = GetData( "txt_prim_apell", NULL );
    $this -> cData["txt_seg_apell"] = GetData( "txt_seg_apell", NULL );
    $this -> cData["id_genero"] = GetData( "id_genero", NULL );
    $this -> cData["fec_nacimiento"] = GetData( "fec_nacimiento", NULL );
    $this -> cData["txt_cargo"] = GetData( "txt_cargo", NULL );
    $this -> cData["txt_telefono"] = GetData( "txt_telefono", NULL );

    $mIdContacto = GetData( "id_contacto", NULL );
    if( NULL !== $mIdContacto && "" != $mIdContacto )
      $this -> cData["id_contacto"] = $mIdContacto;

    $this -> cData["txt_nom_comercial"] = GetData( "txt_nom_comercial", NULL );
    $this -> cData["txt_razon_social"] = GetData( "txt_razon_social", NULL );
    $this -> cData["id_ramo"] = GetData( "id_ramo", NULL );
    $this -> cData["txt_ramo_2"] = GetData( "txt_ramo_2", NULL );
    $this -> cData["txt_direccion"] = GetData( "txt_direccion", NULL );
    $this -> cData["id_departamento"] = GetData( "id_departamento", NULL );
    $this -> cData["id_ciudad"] = GetData( "id_ciudad", NULL );
    $this -> cData["txt_nit"] = GetData( "txt_nit", NULL );
    $this -> cData["txt_website"] = GetData( "txt_website", NULL );
    $this -> cData["txt_descripcion"] = GetData( "txt_descripcion", NULL );
  }
}

?>