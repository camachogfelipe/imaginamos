<?php
/*
 * @file               : zona_empresas.db.php
 * @brief              : Clase para la interaccion con la tabla zona_empresas
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-09
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbzonaEmpresas
 * @brief: Clase para la interaccion con la tabla zona_empresas
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
    $this -> mEditar  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "edit" ) );
    $this -> mElimin  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "delete" ) );
    $this -> mDescarga  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "download" ) );

    $this -> cDesta   = Link::ToSection( array( "s" => "zona_empresas_desta", "m" => "list" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "zona_empresas" );

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
        $mQuery = "SELECT a.id, a.txt_nit, a.txt_nom_comercial, a.txt_razon_social, ".
                         "b.txt_nombre AS nom_ramo, a.fec_creasi, ".
                         "IF( a.ind_estado='1', 'Activo', 'Inactivo' ) AS estado ".
                    "FROM zona_empresas AS a LEFT JOIN zona_area_laboral AS b ON a.id_ramo = b.id ".
                   "WHERE 1 ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );

        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "Nit", array( "dbfield" => "txt_nit" ) );
        $lista -> setHeader( "Nombre comercial", array( "dbfield" => "txt_nom_comercial" ) );
        $lista -> setHeader( "Razon social", array( "dbfield" => "txt_razon_social" ) );
        $lista -> setHeader( "Ramo", array( "dbfield" => "nom_ramo",
                                          "filtfield" => "b.txt_nombre" ) );
        $lista -> setHeader( "Creaci&oacute;n", array( "dbfield" => "fec_creasi" ) );
        $lista -> setHeader( "Estado", array( "dbfield" => "estado", 
                                            "filtfield" => "a.ind_estado",
                                                 "type" => "list",
                                              "options" => array( array( "value" => "1", "label" => "Activo" ),
                                                                  array( "value" => "2", "label" => "Inactivo" ) ) ) );

        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Ver", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )
          $lista -> setButton( "action", "Eliminar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar este cliente?" ) );

        $this -> mList = $lista -> generateList( "zona_empresasList" );
        break;
      }

      case "download":
      {
        $mQuery = "SELECT a.txt_nom_comercial, a.txt_razon_social, aa.txt_nombre AS nom_ramo, ".
                         "a.txt_ramo_2, a.txt_direccion, ab.txt_nombre AS nom_departamento, ".
                         "ac.txt_nombre AS nom_ciudad, a.txt_nit, a.txt_website, a.txt_descripcion, ".
                         "IF( a.ind_estado='1', 'Activo', 'Inactivo' ) AS ind_estado, a.fec_creasi, ".
                         "b.txt_prim_nom, b.txt_seg_nom, b.txt_prim_apell, b.txt_seg_apell, ".
                         "ba.txt_nombre AS nom_genero, b.fec_nacimiento, b.txt_cargo, b.txt_telefono ".
                    "FROM zona_empresas AS a LEFT JOIN zona_area_laboral AS aa ON a.id_ramo = aa.id ".
                                            "LEFT JOIN cms_departamentos AS ab ON a.id_departamento = ab.id ".
                                            "LEFT JOIN cms_ciudades AS ac ON a.id_ciudad = ac.id ".
                                            "LEFT JOIN zona_empresas_contacto AS b ON a.id = b.id_empresa ".
                                            "LEFT JOIN zona_genero AS ba ON b.id_genero = ba.id ".
                   "WHERE 1";

        $path = "files/";

        $cExpXls = new ExpXls( "empresas.xls", NULL, NULL, $path );

        // Inicializamos las cabeceras
        $mHeaders = array( "Nombre comercial", "Razon social", "Ramo", "Ramo 2", "Direccion",
                           "Departamento", "Ciudad", "Nit", "Website", "Descripcion", "Estado", "Creacion", 
                           "Primer nombre", "Segundo nombre", "Primer apellido", "Segundo apellido", "Genero", 
                           "Nacimiento", "Cargo", "Telefono" );

        $cExpXls->setHeaders( $mHeaders );
        $cExpXls->setQuery( $mQuery );
        // Generamos el excel
        $cExpXls->generateXls();
        
        // FOrzamos la descarga
        downloadFile( $path."empresas.xls" );
        unlink( $path."empresas.xls" );
        exit();
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

				$mSqlContac = "SELECT a.*, ".
                             "b.txt_nombre AS depto, ".
                             "c.txt_nombre AS city ".
											"FROM zona_empresas AS a ".
											"LEFT JOIN cms_departamentos AS b ON a.id_departamento = b.id ".
											"LEFT JOIN cms_ciudades AS c ON a.id_ciudad = c.id ".
											"WHERE a.id = '".$mId."' ".
											"LIMIT 0,1 ";

        /*$cData = new Dbzona_empresas();
        $this -> mData = $cData -> getByPk( $mId );*/
				$this -> mData = DbHandler::GetRow( $mSqlContac );

        $mSqlContac = "SELECT a.txt_prim_nom, a.txt_seg_nom, a.txt_prim_apell, ".
                             "a.txt_seg_apell, a.fec_nacimiento, a.txt_cargo, ".
                             "a.txt_telefono, b.txt_nombre AS nom_genero ".
											"FROM zona_empresas_contacto AS a ".
											"LEFT JOIN zona_genero AS b ON a.id_genero = b.id ".
											"WHERE id_empresa = '".$mId."' ".
											"LIMIT 0,1 ";

        $this -> cContac = DbHandler::GetRow( $mSqlContac );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $cData = new Dbzona_empresas();
        $cData -> getByPk( $mId );
        $cData -> deleteLogic();
        break;
      }
    }
  }
}
?>