<?php

class StoreFront
{
  public $mSiteUrl   = NULL;
  public $mLogout    = NULL;
  public $mConten    = "inicio.tpl";
  public $mPopup     = FALSE;
  public $mPageTitle = NULL;

  // Class constructor
  public function __construct()
  {
    $this->mSiteUrl = Link::Build('');
    $this->mLogout = Link::ToSection( array( "s" => "logout" ) );

    // Validamos la seccion por URL para ingresar
    if( isset( $_GET["seccion"] ) )
    {
      if( file_exists( PRESENTATION_DIR."".$_GET["seccion"]."/" ) )
      {
        $this->mConten = PRESENTATION_DIR."".$_GET["seccion"]."/view.tpl";
      }
      else
      {
        $this->mConten = Link::CleanUrlText( GetData( "seccion", "" ) );
        // Si existe subseccion, concatenamos para generar el nombre del archivo
        if ( isset( $_GET["subseccion"] ) )
        {
          $this->mConten .= "_" . Link::CleanUrlText( GetData( "subseccion", "" ) );
        }
        // Si existe accion, concatenamos para generar el nombre del archivo
        if ( isset( $_GET["accion"] ) )
        {
          $this->mConten .= "_" . Link::CleanUrlText( GetData( "accion", "" ) );
        }
        $this->mConten = str_replace( "-", "_", $this->mConten ) . ".tpl";
      }
    }

    // Validamos que el usuario se encuentre logueado, si es asi mostramos la pagina solicitada, de lo contrario redireccionamos al login
    if ( !isset($_SESSION["user"])
         && $this->mConten!="error_404.tpl"
         && $this->mConten!="error_500.tpl"
         && $this->mConten!="generador.tpl" )
    {
      $this->mConten = "login.tpl";
    }
  }

  public function init()
  {

  }
}

?>
