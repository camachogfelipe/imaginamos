<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of nosotros
 *
 * @author carlos
 */
class faq
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;
  public $cTitulo       = NULL;
  public $cPreguntas       = NULL;

  // Class constructor
  public function __construct()
  {
    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mVolver  = $this->mSiteUrl;
  }

  public function init()
  {
    $mIdSeccion = StripHtml( GetData( "id" ) );

    $mSeccion = new Dbcms_secciones();
    $mSeccion = $mSeccion -> getByPk( $mIdSeccion );

    $mTitulo = explode( " ", $mSeccion["txt_nombre"] );
    $this -> cTitulo = "";

    for( $i = 0, $mTot = count( $mTitulo ); $i < $mTot; $i++ )
    {
      $this -> cTitulo .= ($i+1) == $mTot ? "<span>".$mTitulo[$i]."</span> " : $mTitulo[$i]." ";
    }

    $mSecciArt = new Dbcms_secciones_articulo();

    $this -> cArticulos = $mSecciArt -> getList( array( "id_seccion" => $mIdSeccion ) );


    $mpreguntas = new Dbcms_faq_preguntas();
    $this -> cPreguntas = $mpreguntas -> getList( array( "ind_estado" => '1' ) );

    for ($i=0 , $countPreguntas = count($this -> cPreguntas); $i < $countPreguntas ; $i++) { 

        $mRespuestas = new Dbcms_faq_respuestas();

        $this -> cPreguntas[$i]['respuestas'] = $mRespuestas -> getList(array("id_pregunta" => $this -> cPreguntas[$i]['id'],"ind_estado" => "1"));

    }


  }
}

?>
