<?php

/**
 * @author Michael Ivan Quevedo V.
 */
class _users extends Back_Controller {

    protected $admin_area = TRUE;

    public function __construct() {
        parent::__construct();
        $this->add_modular_assets('js', 'user');
    }

    public function index() {
        return $this->build();
    }

    // ----------------------------------------------------------------------

    public function config_oauth() {
        //---/* Verefica si tiene Permisos para este modulo */---/
        $this->has_perm('cms_config_oauth.view', true);
        //---/* Verifica si existe la tabla de OAuth providers en Base de Datos de lo contrario la crea*/---/
        if (!$this->db->table_exists('cms_api_oauth')) {
            $this->create_table_oauth('api_oauth');
        }
        //---/* Verifica si existe la tabla de OAuth config en Base de Datos de lo contrario la crea*/---/
        if (!$this->db->table_exists('cms_oauth_config')) {
            $this->create_table_oauth('oauth_config');
        }
        //---/* OAuth Provider */---/
        $oauth = new Api_oauth;
        $datos = $oauth->get_oauth(true);
        $this->_data['datos'] = $datos;
        $table = $oauth->get_oauth();
        $this->_data['table'] = $table;
        //---/* OAuth config */---/
        $oauth_config = new Oauth_config;
        $uri = $oauth_config->get_oauth_config();
        $this->_data['uri'] = $uri;
        //---/* Carga la vista */---/
        return $this->build('config_oauth');
    }

    //----------------------/* Crear tabla de OAuth por si no existe */----------------------/

    public function create_table_oauth($table = null) {
        //---/* Carga dbforge para la creacion de las tablas */---/
        $this->load->dbforge();
        //---/* Verifica si es tabla de api_oauth */---/
        if ($table == 'api_oauth'):
            //---/* Carga el arreglo para la insercion de campos de la tabla */---/
            $fields = array(
                'id' => array(
                    'type' => 'int',
                    'constraint' => 11,
                    'auto_increment' => TRUE
                ),
                'name' => array(
                    'type' => 'varchar',
                    'constraint' => '255',
                ),
                'provider' => array(
                    'type' => 'varchar',
                    'constraint' => '255',
                ),
                'strategy' => array(
                    'type' => 'varchar',
                    'constraint' => '255',
                ),
                'api_key' => array(
                    'type' => 'varchar',
                    'constraint' => '255',
                ),
                'api_secret' => array(
                    'type' => 'varchar',
                    'constraint' => '255',
                ),
                'scope' => array(
                    'type' => 'varchar',
                    'constraint' => '255',
                ),
                'active' => array(
                    'type' => 'tinyint',
                    'default' => '0',
                ),
                'active_oauth' => array(
                    'type' => 'tinyint',
                    'default' => '0',
                ),
            );
            //---/* Inserta el arreglo de los campos en la tabla */---/
            $this->dbforge->add_field($fields);
            //---/* Coloca como prymary key a id */---/
            $this->dbforge->add_key('id', TRUE);
            //---/* Crea la tabla */---/
            if ($this->dbforge->create_table('api_oauth')) {
                //---/* Query de insercion de datos de la tabla */---/
                $this->db->query("INSERT INTO cms_api_oauth (name,provider,strategy,api_key,api_secret,scope,active, active_oauth) VALUES('Facebook', 'facebook', 'oauth2', '', '','offline_access,email,publish_stream,manage_pages', 0, 1),('Twitter', 'twitter', 'oauth1', '', '', '', 0, 1),('Google', 'google', 'oauth2', '', '','', 0, 1)");
            }
        endif;
        //---/* Verifica si es tabla de OAuth config */---/
        if ($table == 'oauth_config'):
            //---/* Carga el arreglo para la insercion de campos de la tabla */---/
            $config = array(
                'id' => array(
                    'type' => 'int',
                    'constraint' => 11,
                    'auto_increment' => TRUE
                ),
                'uri' => array(
                    'type' => 'varchar',
                    'constraint' => '255',
                ),
            );
            //---/* Inserta el arreglo de los campos en la tabla */---/
            $this->dbforge->add_field($config);
            //---/* Coloca como prymary key a id */---/
            $this->dbforge->add_key('id', TRUE);
            //---/* Crea la tabla */---/
            if ($this->dbforge->create_table('oauth_config')) {
                //---/* Query de insercion de datos de la tabla */---/
                $this->db->query("INSERT INTO cms_oauth_config (uri) VALUES('')");
            }
        endif;
    }

    // ----------------------------------------------------------------------


    public static function current() {
        $ci = & get_instance();

        $user = new \User;
        $user_id = false;

        if ($ci->ion_auth->logged_in()) {
            $user_id = $ci->session->userdata('user_id');
        }

        return $user->get_by_id($user_id);
    }

    //-------------/* Guardar el estado del oauth */--------------------------/

    public function save_active_oauth($table_id, $field, $value) {
        $table = new \Api_oauth($table_id);
        $table->{$field} = $value;
        return $this->render_json($table->save());
    }

    //-------------/* Guardar la informacion suministrada */-----------------/

    public function save_info_oauth() {
        $post = (object) $this->_post(null);
        $oauth = new \Api_oauth;
        $ok = $oauth->save_oauth($post);
        if ($ok):
            $this->set_alert('Se guardo exitosamente los datos de ' . $post->provider, 'success');
        else:
            $this->set_alert('Faltan campos por llenar en ' . $post->provider, 'error');
        endif;
        return $this->render_json($ok);
    }

    //-------------/* Guardar la informacion suministrada del OAuth config */-----------------/

    public function save_info_oauth_config() {
        $post = (object) $this->_post(null);
        $oauth_config = new \Oauth_config;
        $ok = $oauth_config->save_oauth_config($post);
        if ($ok):
            $this->set_alert('Se guardo los cambios realizados de la URI exitosamente', 'success');
        else:
            $this->set_alert('No se pudo guardar la URI suministrada ', 'error');
        endif;
        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
}