<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registro_oferta
 *
 * @author carlos
 */
class registroOferta
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;
  public $cTitulo       = NULL;
  public $cData         = NULL;
  public $cCiudades     = NULL;

  // Class constructor
  public function __construct()
  {
    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mVolver  = Link::ToSection( array( "s" => "zona_empresa" ) );
  }

  public function init()
  {
    $this -> cData = array();

    $mEnviar = GetData( "enviar", FALSE );

    $mDeparta = new Dbcms_departamentos();
    $this -> cDeparts = $mDeparta -> getList( array( "where" => " ORDER BY txt_nombre ASC") );

    $mArea = new Dbzona_area_laboral();
    $this -> cArea = $mArea -> getList( array( "ind_estado" => "1" ) );

    $mJerarquia = new Dbzona_jerarquias();
    $this -> cJerar = $mJerarquia -> getList( array( "ind_estado" => "1" ) );

    $mNivEst = new Dbzona_nivel_estudio();
    $this -> cNivEst = $mNivEst -> getList( array( "ind_estado" => "1" ) );
    
    $mAspira = new Dbzona_aspiracion();
    $this -> cAspira = $mAspira -> getList( array( "ind_estado" => "1" ) );

    $mSector = new Dbzona_profesion();
    $this -> cSector = $mSector -> getList( array( "ind_estado" => "1" ) );

    if( FALSE !== $mEnviar )
    {
      $this -> capturar();

      $mCiudad = new Dbcms_ciudades();
      if( NULL !== $this -> cData["id_departamento"] && "" != $this -> cData["id_departamento"] )
        $this -> cCiudades = $mCiudad -> getList( array( "id_departamento" => $this -> cData["id_departamento"] ) );
      else
        $this -> cCiudades = NULL;

      if( NULL !== $this -> cData["id_depto_aspi"] && "" != $this -> cData["id_depto_aspi"] )
        $this -> cCiudadaspi = $mCiudad -> getList( array( "id_departamento" => $this -> cData["id_depto_aspi"] ) );
      else
        $this -> cCiudadaspi = NULL;

      $mOferta = new Dbzona_ofertas();

      if( isset( $this -> cData["id_oferta"] ) )
        $mOferta -> getByPk( $this -> cData["id_oferta"] );

      $mOferta -> setid_empresa( $_SESSION["user"]["info"]["id"] );
      $mOferta -> settxt_cargo( $this -> cData["txt_cargo"] );
      $mOferta -> settxt_descripcion( $this -> cData["txt_descripcion"] );
      $mOferta -> setid_departamento( $this -> cData["id_departamento"] );
      $mOferta -> setid_ciudad( $this -> cData["id_ciudad"] );
      $mOferta -> setid_area( $this -> cData["id_area"] );
      $mOferta -> setid_sector( $this -> cData["id_sector"] );
      $mOferta -> setid_jerarquia( $this -> cData["id_jerarquia"] );
      $mOferta -> setnum_vacantes( $this -> cData["num_vacantes"] );
      $mOferta -> settxt_requisitos( $this -> cData["txt_requisitos"] );
      $mOferta -> setid_nivel_estudio( $this -> cData["id_nivel_estudio"] );
      $mOferta -> setid_area_aspi( $this -> cData["id_area_aspi"] );
      $mOferta -> setid_depto_aspi( $this -> cData["id_depto_aspi"] );
      $mOferta -> setid_ciudad_aspi( $this -> cData["id_ciudad_aspi"] );
      $mOferta -> setnum_edad_aspi( $this -> cData["num_edad_aspi"] );
      $mOferta -> setnum_exp_aspi( $this -> cData["num_exp_aspi"] );
      $mOferta -> setind_visible( "1" );
      $mOferta -> setind_estado( "1" );
      $mOferta -> setfec_creasi( date( "Y-m-d h:i:s" ) );
      $mOferta -> save();

      $this -> cScript = "alert( 'Oferta registrada con exito' )";
      header( "location:".str_replace( "&amp;", "&", $this -> mVolver ) );
    }
    else
    {
      $mId = GetData( "id", FALSE );

      if( FALSE !== $mId )
      {
        $mOferta = new Dbzona_ofertas();
        $this -> cData = $mOferta -> getByPk( $mId );
        $this -> cData["id_oferta"] = $this -> cData["id"];

        $mCiudad = new Dbcms_ciudades();
        if( NULL !== $this -> cData["id_departamento"] && "" != $this -> cData["id_departamento"] )
          $this -> cCiudades = $mCiudad -> getList( array( "id_departamento" => $this -> cData["id_departamento"] ) );
        else
          $this -> cCiudades = NULL;

        /* *
        $mSector = new Dbzona_profesion();
        if( NULL !== $this -> cData["id_area"] && "" != $this -> cData["id_area"] )
          $this -> cSector = $mSector -> getList( array( "id_area" => $this -> cData["id_area"] ) );
        else
          $this -> cSector = NULL;
        //$this -> cSector = $mSector -> getList( array( "ind_estado" => "1" ) );
        /* */

        if( NULL !== $this -> cData["id_depto_aspi"] && "" != $this -> cData["id_depto_aspi"] )
          $this -> cCiudadaspi = $mCiudad -> getList( array( "id_departamento" => $this -> cData["id_depto_aspi"] ) );
        else
          $this -> cCiudadaspi = NULL;
      }
      else
        $this -> capturar();
    }
  }

  private function capturar()
  {
    $mId = GetData( "id_oferta", NULL );
    if( NULL !== $mId && "" != $mId )
      $this -> cData["id_oferta"] = $mId;

    $this -> cData["id_empresa"] = GetData( "id_empresa", NULL );
    $this -> cData["txt_cargo"] = GetData( "txt_cargo", NULL );
    $this -> cData["txt_descripcion"] = GetData( "txt_descripcion", NULL );
    $this -> cData["id_departamento"] = GetData( "id_departamento", NULL );
    $this -> cData["id_ciudad"] = GetData( "id_ciudad", NULL );
    $this -> cData["id_area"] = GetData( "id_area", NULL );
    $this -> cData["id_sector"] = GetData( "id_sector", NULL );
    $this -> cData["id_jerarquia"] = GetData( "id_jerarquia", NULL );
    $this -> cData["num_vacantes"] = GetData( "num_vacantes", NULL );
    $this -> cData["txt_requisitos"] = GetData( "txt_requisitos", NULL );
    $this -> cData["id_nivel_estudio"] = GetData( "id_nivel_estudio", NULL );
    $this -> cData["id_area_aspi"] = GetData( "id_area_aspi", NULL );
    $this -> cData["id_depto_aspi"] = GetData( "id_depto_aspi", NULL );
    $this -> cData["id_ciudad_aspi"] = GetData( "id_ciudad_aspi", NULL );
    $this -> cData["num_edad_aspi"] = GetData( "num_edad_aspi", NULL );
    $this -> cData["num_exp_aspi"] = GetData( "num_exp_aspi", NULL );
  }
}

?>