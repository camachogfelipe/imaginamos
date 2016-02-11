<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menu
 *
 * @author carlos
 */
class menu
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mList         = NULL;
  public $mModo         = NULL;

  public $cLoged        = NULL;
  public $cUserName     = NULL;
  public $cUrlZona      = NULL;

  // Class constructor
  public function __construct()
  {
    $this -> mSiteUrl = Link::Build("");
    $this -> mThisUrl = Link::ToSection( array( "s" => $_GET["seccion"] ) );
    $this -> mLogout = Link::ToSection( array( "s" => "logout" ) );
    $this -> mVolver  = $this->mSiteUrl;

    $this -> cLoged = "0";
  }

  public function init()
  {
    $mQuery = "SELECT id, txt_nombre, txt_seccion, txt_otro ".
                "FROM cms_secciones ".
               "WHERE id_padre = '0' ";

    if( isset( $_SESSION["user"] ) )
    {
      if( $_SESSION["user"]["id_tipo"] == '1' )
      {
        $mQuery .= "AND id != '2' ";
      }
    }

    $mQuery .= "ORDER BY id DESC ".
               "LIMIT 0, 5 ";

    $this -> cMenu = DbHandler::GetAll( $mQuery );

    for( $i = 0, $mTot = count($this -> cMenu); $i < $mTot; $i++ )
    {
      $this -> cMenu[$i]["url"] = Link::ToSection( array( "s" => $this -> cMenu[$i]["txt_seccion"], "i" => $this -> cMenu[$i]["id"] ) );

      $this -> cMenu[$i]["url"] .= $this -> cMenu[$i]["txt_otro"] != "" ? "&".$this -> cMenu[$i]["txt_otro"] : "";

      $mQueryH = "SELECT id, txt_nombre, txt_seccion, txt_otro ".
                   "FROM cms_secciones ".
                  "WHERE id_padre = '".$this -> cMenu[$i]["id"]."' ".
                  "ORDER BY id DESC ".
                  "LIMIT 0, 5 ";

      $this -> cMenu[$i]["hijos"] = DbHandler::GetAll( $mQueryH );

      for( $j = 0, $mTot2 = count($this -> cMenu[$i]["hijos"] ); $j < $mTot2; $j++ )
      {
        $this -> cMenu[$i]["hijos"][$j]["url"] = Link::ToSection( array( "s" => $this -> cMenu[$i]["hijos"][$j]["txt_seccion"],
                                                                         "i" => $this -> cMenu[$i]["hijos"][$j]["id"] ) );

        $this -> cMenu[$i]["hijos"][$j]["url"] .= $this -> cMenu[$i]["hijos"][$j]["txt_otro"] != "" ? "&".$this -> cMenu[$i]["hijos"][$j]["txt_otro"] : "";
      }

      unset( $mQueryH );
    }

    if( isset( $_SESSION["user"] ) )
    {
      $this -> cLoged = "1";

      //var_dump( $_SESSION["user"]["info"] );
      if( $_SESSION["user"]["id_tipo"] == '1' )
      {
        $this -> cUserName = $_SESSION["user"]["info"]["txt_nom_comercial"];
        $this -> cUrlZona = Link::ToSection( array( "s" => "zona_empresa" ) );
      }
      else
      {
        $this -> cUserName = $_SESSION["user"]["info"]["txt_prim_nom"]." ".$_SESSION["user"]["info"]["txt_prim_apell"];
        $this -> cUrlZona = Link::ToSection( array( "s" => "zona_persona" ) );
      }
    }
    //echo  Link::ToSection( array( "s" => "zona_persona" ) );
  }
}
?>
