<?php
/*
 * @file               : zona_personas.db.php
 * @brief              : Clase para la interaccion con la tabla zona_personas
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-11
 * @author             : Carlos A. Mock-kow M.
 * @generated          : Generador DAO version 1.1
 *
 * @class: DbzonaPersonas
 * @brief: Clase para la interaccion con la tabla zona_personas
 */

class controller
{
  public $mSiteUrl      = NULL;
  public $mThisUrl      = NULL;
  public $mCrear        = NULL;
  public $mEditar       = NULL;
  public $mElimin       = NULL;
  public $mActivar      = NULL;
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
    $this -> mActivar  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "activar" ) );
    $this -> mDescarga  = Link::ToSection( array( "s" => $_GET["seccion"], "m" => "download" ) );

    //Verifica los permisos del usuario
    //si la seccion es publica eliminar o comentar
    $mOpciones = array( "clase" => "zona_personas" );

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
        $mQuery = "SELECT a.id, a.id_registrado, a.num_identifica, a.txt_prim_nom, ".
                         "a.txt_seg_nom, a.txt_prim_apell, a.txt_seg_apell, ".
                         "b.txt_nombre AS nom_departamento, c.txt_nombre AS nom_ciudad, ".
                         "IF( a.ind_estado='1', 'Activo', 'Inactivo' ) AS estado ".
                    "FROM zona_personas AS a LEFT JOIN cms_departamentos AS b ON a.id_departamento = b.id ".
                                            "LEFT JOIN cms_ciudades AS c ON a.id_ciudad = c.id ".
                   "WHERE 1 ";

        $lista = new DinamicList( $this -> mThisUrl );
        $lista -> setQuery( $mQuery );
        $lista -> setAction( $this -> mThisUrl );
        $lista -> setHeader( "Identificaci&oacute;n", array( "dbfield" => "num_identifica" ) );
        $lista -> setHeader( "Primer nombre", array( "dbfield" => "txt_prim_nom" ) );
        //$lista -> setHeader( "Segundo nombre", array( "dbfield" => "txt_seg_nom" ) );
        $lista -> setHeader( "Primer apellido", array( "dbfield" => "txt_prim_apell" ) );
        //$lista -> setHeader( "Segundo apellido", array( "dbfield" => "txt_seg_apell" ) );
								
				//Nuevas columnas
				$lista -> setHeader( "Departamento", array( "dbfield" => "nom_departamento", "filtfield" => "b.txt_nombre" ) );
        $lista -> setHeader( "Ciudad/Municipio", array( "dbfield" => "nom_ciudad", "filtfield" => "c.txt_nombre" ) );

        $lista -> setHeader( "Estado", array( "dbfield" => "estado", 
                                            "filtfield" => "a.ind_estado",
                                                 "type" => "list",
                                              "options" => array( array( "value" => "1", "label" => "Activo" ),
                                                                  array( "value" => "2", "label" => "Inactivo" ) ) ) );
        $lista -> setHidden( "id", array( "label" => "id" ) );
        $lista -> setButton( "action", "Ver", array( "action" => $this -> mEditar ) );

        if( "1" == $_SESSION["user"]["ind_delete"] )

          $lista -> setButton( "action", "Desactivar", array( "action" => $this -> mElimin,
                                                           "confirm" => "Seguro que desea eliminar esta persona?" ) );

          $lista -> setButton( "action", "Activar", array( "action" => $this -> mActivar,
                                                           "confirm" => "Seguro que desea activar esta persona?" ) );

        $this -> mList = $lista -> generateList( "zona_personasList" );
        break;
      }

      case "download":
      {
        $mQuery = "SELECT a.num_identifica, a.txt_prim_nom, a.txt_seg_nom, a.txt_prim_apell, a.txt_seg_apell, ".
                         "ab.txt_nombre AS nom_genero, a.fec_nacimiento, ac.txt_nombre AS nom_estado_civ, ".
                         "ad.txt_nombre AS nom_departamento, ae.txt_nombre AS nom_ciudad, a.txt_barrio, ".
                         "a.txt_telefono, a.txt_movil, af.txt_nombre AS nom_poblacion, ".
                         "IF( a.ind_estado='1', 'Activo', 'Inactivo' ) AS ind_estado, a.fec_creasi, ".
                         "bb.txt_nombre AS nom_profesion, IF( b.ind_trabajando='1', 'Si', 'No' ) AS ind_trabajando, ".
                         "bc.txt_nombre AS nom_aspiracion, b.txt_tipotrabajo, b.txt_perfil, b.txt_habilidades, ".
                         "c.txt_empresa, c.txt_cargo, ca.txt_nombre AS nom_arealab, c.fec_ingreso, ".
                         "IF( c.ind_actual='1', 'Si', 'No' ) AS ind_actual, c.fec_finaliza, ".
                         "cb.txt_nombre AS nom_depart_expe, cc.txt_nombre AS nom_ciudad_expe, c.txt_telefono AS telefono_expe, ".
                         "c.txt_funciones, da.txt_nombre AS nom_nivel_estudio, d.txt_titulo AS titulo_form, ".
                         "d.txt_institucion AS insti_form, IF( d.ind_encurso='1', 'Si', 'No' ) AS ind_encurso_form, ".
                         "d.fec_finaliza as finaliza_form, db.txt_nombre AS nom_depart_form, dc.txt_nombre AS nom_ciudad_form, ".
                         "e.txt_titulo AS titulo_nform, e.txt_institucion AS insti_nform, ".
                         "IF( e.ind_encurso='1', 'Si', 'No' ) AS ind_encurso_nform, e.fec_finaliza AS finaliza_nform, ".
                         "ea.txt_nombre AS nom_depart_nform, eb.txt_nombre AS nom_ciudad_nform, ".
                         "fa.txt_nombre AS nom_idioma, f.txt_cual, fb.txt_nombre AS nom_habla, ".
                         "fc.txt_nombre AS nom_escritura, fd.txt_nombre AS nom_lectura, ".
                         "g.txt_aplicacion, ga.txt_nombre AS nom_info_dominio ".
                    "FROM zona_personas AS a LEFT JOIN zona_genero AS ab ON a.id_genero = ab.id ".
                                            "LEFT JOIN zona_estados_civil AS ac ON a.id_estado_civ = ac.id ".
                                            "LEFT JOIN cms_departamentos AS ad ON a.id_departamento = ad.id ".
                                            "LEFT JOIN cms_ciudades AS ae ON a.id_ciudad = ae.id ".
                                            "LEFT JOIN zona_poblaciones AS af ON a.id_poblacion = af.id ".
                                            "LEFT JOIN zona_personas_perfil AS b ON a.id = b.id_persona ".
                                            "LEFT JOIN zona_profesion AS bb ON b.id_profesion = bb.id ".
                                            "LEFT JOIN zona_aspiracion AS bc ON b.id_aspiracion = bc.id ".
                                            "LEFT JOIN zona_personas_experiencia AS c ON a.id = c.id_persona ".
                                            "LEFT JOIN zona_area_laboral AS ca ON c.id_arealab = ca.id ".
                                            "LEFT JOIN cms_departamentos AS cb ON c.id_departamento = cb.id ".
                                            "LEFT JOIN cms_ciudades AS cc ON c.id_ciudad = cc.id ".
                                            "LEFT JOIN zona_personas_eduformal AS d ON a.id = d.id_persona ".
                                            "LEFT JOIN zona_nivel_estudio AS da ON d.id_nivel_estudio = da.id ".
                                            "LEFT JOIN cms_departamentos AS db ON d.id_departamento = db.id ".
                                            "LEFT JOIN cms_ciudades AS dc ON d.id_ciudad = dc.id ".
                                            "LEFT JOIN zona_personas_edunoformal AS e ON a.id = e.id_persona ".
                                            "LEFT JOIN cms_departamentos AS ea ON e.id_departamento = ea.id ".
                                            "LEFT JOIN cms_ciudades AS eb ON e.id_ciudad = eb.id ".
                                            "LEFT JOIN zona_personas_idiomas AS f ON a.id = f.id_persona ".
                                            "LEFT JOIN zona_idiomas AS fa ON f.id_idioma = fa.id ".
                                            "LEFT JOIN zona_idioma_dominio AS fb ON f.id_habla = fb.id ".
                                            "LEFT JOIN zona_idioma_dominio AS fc ON f.id_escritura = fc.id ".
                                            "LEFT JOIN zona_idioma_dominio AS fd ON f.id_lectura = fd.id ".
                                            "LEFT JOIN zona_personas_informatica AS g ON a.id = g.id_persona ".
                                            "LEFT JOIN zona_informa_dominio AS ga ON g.id_dominio = ga.id ".
                   "WHERE 1 ".
                   "GROUP BY a.id ";

        $path = "files/";

        $cExpXls = new ExpXls( "personas.xls", NULL, NULL, $path );

        // Inicializamos las cabeceras
        $mHeaders = array( "Identificacion", "Primer nombre", "Segundo nombre", "Primer apellido", "Segundo apellido",
                           "Genero", "Nacimiento", "Estado civil", "Departamento", "Ciudad", "Barrio", "Telefono", 
                           "Movil", "poblacion", "Estado", "Creacion", "Profesion", "Trabaja", "Aspiracion", "Tipo",
                           "Perfil", "Habilidades", "Empresa", "Cargo", "Area laboral", "Fecha ingreso", "Actual", 
                           "Fecha fin", "Departamento", "Ciudad", "Telefono", "Funciones", "Nivel estudio",
                           "Titulo", "Institucion", "En curso", "Finaliza", "Departamento", "Ciudad", "Titulo",
                           "Institucion", "En curso", "Finaliza", "Departamento", "Ciudad", "Idioma", "Cual",
                           "Habla", "Escritura", "Lectura", "Aplicacion", "Dominio" );

        $cExpXls->setHeaders( $mHeaders );
        $cExpXls->setQuery( $mQuery );
        // Generamos el excel
        $cExpXls->generateXls();
        
        // FOrzamos la descarga
        downloadFile( $path."personas.xls" );
        unlink( $path."personas.xls" );
        exit();
      }

      case "create":
      {
        //Inicializamos las variables
        $this -> mData["id"] = NULL;
        $this -> mData["id_registrado"] = NULL;
        $this -> mData["num_identifica"] = NULL;
        $this -> mData["txt_prim_nom"] = NULL;
        $this -> mData["txt_seg_nom"] = NULL;
        $this -> mData["txt_prim_apell"] = NULL;
        $this -> mData["txt_seg_apell"] = NULL;
        $this -> mData["id_genero"] = NULL;
        $this -> mData["fec_nacimiento"] = NULL;
        $this -> mData["id_estado_civ"] = NULL;
        $this -> mData["id_departamento"] = NULL;
        $this -> mData["id_ciudad"] = NULL;
        $this -> mData["txt_barrio"] = NULL;
        $this -> mData["txt_telefono"] = NULL;
        $this -> mData["txt_movil"] = NULL;
        $this -> mData["id_poblacion"] = NULL;
        $this -> mData["ind_estado"] = NULL;
        $this -> mData["fec_creasi"] = date( "Y-m-d h:i:s" );

        break;
      }

      case "edit":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );

        $mSql = "SELECT a.num_identifica, a.txt_prim_nom, a.txt_seg_nom, ".
                       "a.txt_prim_apell, a.txt_seg_apell, b.txt_nombre AS nom_genero, ".
                       "a.fec_nacimiento, c.txt_nombre AS nom_estado_civ, ".
                       "d.txt_nombre AS nom_departamento, e.txt_nombre AS nom_ciudad, ".
                       "a.txt_barrio, a.txt_telefono, a.txt_movil, ".
                       "f.txt_nombre AS nom_poblacion, a.id ".
                  "FROM zona_personas AS a LEFT JOIN zona_genero AS b ON a.id_genero = b.id ".
                                          "LEFT JOIN zona_estados_civil AS c ON a.id_estado_civ = c.id ".
                                          "LEFT JOIN cms_departamentos AS d ON a.id_departamento = d.id ".
                                          "LEFT JOIN cms_ciudades AS e ON a.id_ciudad = e.id ".
                                          "LEFT JOIN zona_poblaciones AS f ON a.id_poblacion = f.id ".
                 "WHERE a.id = '".$mId."' ";

        $this -> mData = DbHandler::GetRow( $mSql );

        $mSql = "SELECT b.txt_nombre AS nom_profesion, ".
                       "IF( a.ind_trabajando = 1, 'Si', 'No' ) AS trabajando, ".
                       "c.txt_nombre AS nom_aspiracion, a.txt_tipotrabajo, ".
                       "a.txt_perfil, a.txt_habilidades ".
                  "FROM zona_personas_perfil AS a LEFT JOIN zona_profesion AS b ON a.id_profesion = b.id ".
                                                 "LEFT JOIN zona_aspiracion AS c ON a.id_aspiracion = c.id ".
                 "WHERE a.id_persona = '".$this -> mData["id"]."' ";

        $this -> mData["profe"] = DbHandler::GetRow( $mSql );

        $mSql = "SELECT a.txt_empresa, a.txt_cargo, b.txt_nombre AS nom_arealab, a.fec_ingreso, ".
                       "IF( a.ind_actual = 1, 'Si', 'No' ) AS actual, a.fec_finaliza, ".
                       "c.txt_nombre AS nom_departamento, d.txt_nombre AS nom_ciudad, ".
                       "a.txt_telefono, a.txt_funciones ".
                  "FROM zona_personas_experiencia AS a LEFT JOIN zona_area_laboral AS b ON a.id_arealab = b.id ".
                                                      "LEFT JOIN cms_departamentos AS c ON a.id_departamento = c.id ".
                                                      "LEFT JOIN cms_ciudades AS d ON a.id_ciudad = d.id ".
                 "WHERE a.id_persona = '".$this -> mData["id"]."' ";

        $this -> mData["exper"] = DbHandler::GetAll( $mSql );

        $mSql = "SELECT b.txt_nombre AS nivel_estudio, a.txt_titulo, ".
                       "a.txt_institucion, IF( a.ind_encurso = 1, 'Si', 'No' ) AS encurso, ".
                       "a.fec_finaliza, c.txt_nombre AS nom_departamento, d.txt_nombre AS nom_ciudad ".
                  "FROM zona_personas_eduformal AS a LEFT JOIN zona_nivel_estudio AS b ON a.id_nivel_estudio = b.id ".
                                                    "LEFT JOIN cms_departamentos AS c ON a.id_departamento = c.id ".
                                                    "LEFT JOIN cms_ciudades AS d ON a.id_ciudad = d.id ".
                 "WHERE a.id_persona = '".$this -> mData["id"]."' ";

        $this -> mData["formal"] = DbHandler::GetAll( $mSql );

        $mSql = "SELECT a.txt_titulo, a.txt_institucion, IF( a.ind_encurso = 1, 'Si', 'No' ) AS encurso, a.fec_finaliza, ".
                       "b.txt_nombre AS nom_departamento, c.txt_nombre AS nom_ciudad ".
                  "FROM zona_personas_edunoformal AS a LEFT JOIN cms_departamentos AS b ON a.id_departamento = b.id ".
                                                      "LEFT JOIN cms_ciudades AS c ON a.id_ciudad = c.id ".
                 "WHERE a.id_persona = '".$this -> mData["id"]."' ";

        $this -> mData["nformal"] = DbHandler::GetAll( $mSql );

        $mSql = "SELECT b.txt_nombre AS nom_idioma, a.txt_cual, ".
                       "c.txt_nombre AS nom_habla, d.txt_nombre AS nom_escritura, ".
                       "e.txt_nombre AS nom_lectura ".
                  "FROM zona_personas_idiomas AS a LEFT JOIN zona_idiomas AS b ON a.id_idioma = b.id ".
                                                  "LEFT JOIN zona_idioma_dominio AS c ON a.id_habla = c.id ".
                                                  "LEFT JOIN zona_idioma_dominio AS d ON a.id_escritura = d.id ".
                                                  "LEFT JOIN zona_idioma_dominio AS e ON a.id_lectura = e.id ".
                 "WHERE a.id_persona = '".$this -> mData["id"]."' ";

        $this -> mData["idioma"] = DbHandler::GetAll( $mSql );

        $mSql = "SELECT a.txt_aplicacion, b.txt_nombre AS nom_dominio ".
                  "FROM zona_personas_informatica AS a LEFT JOIN zona_informa_dominio AS b ON a.id_dominio = b.id ".
                 "WHERE a.id_persona = '".$this -> mData["id"]."' ";

        $this -> mData["infor"] = DbHandler::GetAll( $mSql );
        break;
      }

      case "delete":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );
        $mSql = "SELECT * FROM zona_personas WHERE id = ".$mId;
        $this -> mData = DbHandler::GetAll( $mSql );
        $cData = new Dbzona_personas();
        $cData -> getByPk( $mId );
        $cData -> deleteLogic();
        //echo "<pre>";
        //var_dump($cData);
        //echo "</pre>";
        $cIdRegistrado = $this -> mData[0]['id_registrado'];

        $cData = new Dbzona_registrados();
        $cData -> getByPk( $cIdRegistrado );
        $cData -> deleteLogic();

        break;
      }
      case "activar":
      {
        //Obtenemos el registro deseado por llave primaria
        $mId = GetData( "id" );
        $mSql = "SELECT * FROM zona_personas WHERE id = ".$mId;
        $this -> mData = DbHandler::GetAll( $mSql );
        $cData = new Dbzona_personas();
        $cData -> getByPk( $mId );
        $cData -> activeRegister();
        
        $cIdRegistrado = $this -> mData[0]['id_registrado'];
        $cData = new Dbzona_registrados();
        $cData -> getByPk( $cIdRegistrado );
        $cData -> activeRegister();

        break;



        //$cData -> activeRegister();
      }
    }
  }
}
?>