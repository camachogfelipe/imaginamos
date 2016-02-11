<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of directorio_empresas
 *
 * @author carlos
 */
class directorioEmpresas {

  public $mSiteUrl = NULL;
  public $mThisUrl = NULL;
  public $mList = NULL;
  public $mModo = NULL;
  public $cTitulo = NULL;
  public $cSubTitulo = NULL;

  // Class constructor
  public function __construct() {
    $this->mSiteUrl = Link::Build("");
    $this->mThisUrl = Link::ToSection(array("s" => $_GET["seccion"]));
    $this->cDescrip = Link::ToSection(array("s" => "descripcion"));
  }

  public function init() {
    $this->mOrden = StripHtml(GetData("orden"));

    $mSql = "SELECT a.id, a.txt_nom_comercial, a.fil_logo " .
            "FROM zona_empresas AS a " .
            "WHERE a.ind_estado = '1' ";

    if (NULL !== $this->mOrden && "" != $this->mOrden) {
      $mSql .= "AND a.txt_nom_comercial LIKE '" . $this->mOrden . "%'";
    }

    $mSql .= "ORDER BY a.txt_nom_comercial ASC ";

    $this->cData = DbHandler::GetAll($mSql);
    
    //Obtenemos los valores del subtitulo y texto de descripcion
    $cZonaCopy = new Dbzona_copy();
    $datos = $cZonaCopy->getByPk(7);
    $this->cTitulo = $datos["titulo"];
    $this->cSubTitulo = $datos["texto"];
  }

}

?>