<?php
/*
 * @file               : zona_empseg.db.php
 * @brief              : Clase para la interaccion con la tabla zona_empseg
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-25
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbzonaEmpseg
 * @brief: Clase para la interaccion con la tabla zona_empseg
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
    $this -> mDescarga  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "download" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "zona_empseg" );

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
        $mQuery = "SELECT a.id, a.id_oferta, a.con_empl, a.resu_exp, a.trav_emar, a.num_emple, ".
                         "a.num_cedulas, a.cali_exp, a.tiem_esp, a.como_emp, a.util_emar, ".
                          "a.elim_ofe, a.fec_creasi, b.txt_cargo, c.txt_razon_social ".
                    "FROM zona_empseg AS a LEFT JOIN zona_ofertas AS b ON a.id_oferta = b.id ".
                                          "LEFT JOIN zona_empresas AS c ON b.id_empresa = c.id ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "id", array( "dbfield" => "id" ) );
        $lista -> setHeader( "Empresa", array( "dbfield" => "c.txt_razon_social" ) );
        $lista -> setHeader( "cargo", array( "dbfield" => "b.txt_cargo" ) );
        $lista -> setHeader( "Consiguio", array( "dbfield" => "a.con_empl" ) );
        $lista -> setHeader( "Atraves", array( "dbfield" => "a.trav_emar" ) );
        $lista -> setHeader( "Creaci&oacute;n", array( "dbfield" => "a.fec_creasi" ) );
        
        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Editar", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este cliente?" ) );

        $this -> mList = $lista -> generateList( "zona_empsegList" );
        break;
      }

      case "download":
      {
        $mQuery = "SELECT c.txt_razon_social a.id, b.txt_cargo, a.con_empl, a.trav_emar, a.num_emple, a.num_cedulas, ".
                         "a.cali_exp, a.tiem_esp, a.como_emp, a.util_emar, a.elim_ofe, a.resu_exp, a.fec_creasi ".
                    "FROM zona_empseg AS a LEFT JOIN zona_ofertas AS b ON a.id_oferta = b.id ".
                                          "LEFT JOIN zona_empresas AS c ON b.id_empresa = c.id ";

        $path = "files/";

        $cExpXls = new ExpXls( "Seguimiento_empresa.xls", NULL, NULL, $path );

        // Inicializamos las cabeceras
        $mHeaders = array( "Empresa", "Cargo", "¿Consiguió empleado para su oferta?", 
                           "¿El empleado que consiguió fue a través de Empleo en Marcha?", 
                           "Cuantos empleados consiguierón empleo?",
                           "Cédula de los empleados contratados (separadas por comas )", 
                           "Califique su experiencia de contratación a través de Empleo en Marcha", 
                           "En términos de tiempo ¿La obtención de empleado se ajustó en los términos esperados por la empresa?", 
                           "¿Cómo consiguió el empleado?", 
                           "¿Dentro del proceso le fue de utilidad a la empresa el servicio otorgado por Empleo en Marcha?", 
                           "¿Por qué está eliminando su oferta?", 
                           "Ingrese el resultado de su experiencia con el portal de Empleo en Marcha", 
                           "Creacion" );

        $cExpXls->setHeaders( $mHeaders );
        $cExpXls->setQuery( $mQuery );
        // Generamos el excel
        $cExpXls->generateXls();
        
        // FOrzamos la descarga
        downloadFile( $path."Seguimiento_empresa.xls" );
        unlink( $path."Seguimiento_empresa.xls" );
        exit();
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["id_empresa"] = NULL;
        $this -> mData["con_empl"] = NULL;
        $this -> mData["resu_exp"] = NULL;
        $this -> mData["trav_emar"] = NULL;
        $this -> mData["cali_exp"] = NULL;
        $this -> mData["tiem_esp"] = NULL;
        $this -> mData["como_emp"] = NULL;
        $this -> mData["util_emar"] = NULL;
        $this -> mData["elim_ofe"] = NULL;
        $this -> mData["fec_creasi"] = date( "Y-m-d h:i:s" );
        
        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );
        $cData = new Dbzona_empseg();

        $mOferta = new Dbzona_ofertas();

        $mEmpresa = new Dbzona_empresas();

        $this -> mData = $cData -> getByPk( $mId );
        $this -> mData["oferta"] = $mOferta->getByPk( $this -> mData["id_oferta"] );
        $this -> mData["empresa"] = $mEmpresa->getByPk( $this -> mData["oferta"]["id_empresa"] );

        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbzona_empseg();
        $cData -> getByPk( $mId );
        $cData -> delete();
        break;
      }
    }
  }
}
?>