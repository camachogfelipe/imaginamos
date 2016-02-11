<?php

class StoreFront {

  public $mSiteUrl = NULL;
  public $mLogout = NULL;
  public $mConten = "home.tpl";
  public $mPopup = FALSE;
  public $mPageTitle = NULL;
  public $mFrmZonaSeguraUsuarios = NULL;
  public $mFrmZonaSeguraEmpresas = NULL;

  // Class constructor
  public function __construct() {
    $this->mSiteUrl = Link::Build('');
    $this->mLogout = Link::ToSection(array("s" => "logout"));
    $this->mRegEmp = Link::ToSection(array("s" => "resgistro_empresa"));
    $this->mRegUsu = Link::ToSection(array("s" => "registro_persona"));

    $mContacto = new Dbcms_contacto();
    $this->cContac = $mContacto->getByPk('1');

    // Validamos la seccion por URL para ingresar
    if (isset($_GET["seccion"])) {
      if (file_exists(PRESENTATION_DIR . "" . $_GET["seccion"] . "/")) {
        $this->mConten = PRESENTATION_DIR . "" . $_GET["seccion"] . "/view.tpl";
      } else {
        $this->mConten = Link::CleanUrlText(GetData("seccion", ""));
        // Si existe subseccion, concatenamos para generar el nombre del archivo
        if (isset($_GET["subseccion"])) {
          $this->mConten .= "_" . Link::CleanUrlText(GetData("subseccion", ""));
        }
        // Si existe accion, concatenamos para generar el nombre del archivo
        if (isset($_GET["accion"])) {
          $this->mConten .= "_" . Link::CleanUrlText(GetData("accion", ""));
        }

        $this->mConten = str_replace("-", "_", $this->mConten) . ".tpl";
      }
    }

    $mQuery = "SELECT id, txt_nombre, txt_seccion, txt_otro " .
            "FROM cms_secciones " .
            "WHERE id_padre = '0' ";

    if (isset($_SESSION["user"])) {
      if ($_SESSION["user"]["id_tipo"] == '1') {
        $mQuery .= "AND id != '2' ";
      }
    }

    $mQuery .= "ORDER BY id ASC " .
            "LIMIT 0, 5 ";

    $this->cMenu = DbHandler::GetAll($mQuery);

    for ($i = 0, $mTot = count($this->cMenu); $i < $mTot; $i++) {
      $this->cMenu[$i]["url"] = Link::ToSection(array("s" => $this->cMenu[$i]["txt_seccion"], "i" => $this->cMenu[$i]["id"]));
      $this->cMenu[$i]["url"] .= $this->cMenu[$i]["txt_otro"] != "" ? "&" . $this->cMenu[$i]["txt_otro"] : "";
    }
  }

  public function init() {
    // Obtenemos el valor de DB de los textos de zona segura usuarios y empresas
    $cZonaCopy = new Dbzona_copy();
    $this->mFrmZonaSeguraUsuarios = $cZonaCopy->getByPk(1);
    $this->mFrmZonaSeguraEmpresas = $cZonaCopy->getByPk(5);
  }

}

?>