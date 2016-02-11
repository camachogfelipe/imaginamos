<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of seg_personal
 *
 * @author carlos
 */
class segPersonal
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
      $mPerseg =new Dbzona_perseg();
      
      $mId = base64_decode( GetData( "id" ) );

      $mPerseg -> setid_persona( StripHtml( $mId ) );
      $mPerseg -> setcon_trab( StripHtml( GetData( "con_trab" ) ) );
      $mPerseg -> setint_trab( StripHtml( GetData( "int_trab" ) ) );
      $mPerseg -> setcal_exp( StripHtml( GetData( "cal_exp" ) ) );
      $mPerseg -> setatra_emp( StripHtml( GetData( "atra_emp" ) ) );
      $mPerseg -> setcomo_tra( StripHtml( GetData( "como_tra" ) ) );
      $mPerseg -> setdemo_tra( StripHtml( GetData( "demo_tra" ) ) );
      $mPerseg -> setexpe_emp( StripHtml( GetData( "expe_emp" ) ) );
      $mPerseg -> setreco_emp( StripHtml( GetData( "reco_emp" ) ) );
      $mPerseg -> save();
    }
  }
}

?>
