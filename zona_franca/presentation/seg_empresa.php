<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of seg_empresa
 *
 * @author carlos
 */
class segEmpresa
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;
  public $cTitulo       = NULL;

  // Class constructor
  public function __construct()
  {
    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mVolver  = $this->mSiteUrl;
  }

  public function init()
  {
    if( isset( $_POST["send"] ) )
    {
      $mEmpseg =new Dbzona_empseg();
      
      $mId = base64_decode( GetData( "id" ) );

      $mEmpseg -> setid_empresa( StripHtml( $mId ) );
      $mEmpseg -> setcon_empl( StripHtml( GetData( "con_empl" ) ) );
      $mEmpseg -> setresu_exp( StripHtml( GetData( "resu_exp" ) ) );
      $mEmpseg -> settrav_emar( StripHtml( GetData( "trav_emar" ) ) );
      $mEmpseg -> setcali_exp( StripHtml( GetData( "cali_exp" ) ) );
      $mEmpseg -> setiem_esp( StripHtml( GetData( "tiem_esp" ) ) );
      $mEmpseg -> setcomo_emp( StripHtml( GetData( "como_emp" ) ) );
      $mEmpseg -> setutil_emar( StripHtml( GetData( "util_emar" ) ) );
      $mEmpseg -> setelim_ofe( StripHtml( GetData( "elim_ofe" ) ) );
      $mEmpseg -> save();
    }
  }
}

?>
