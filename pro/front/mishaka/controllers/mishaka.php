<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Mishaka extends Front_Controller {

    protected $user_area = true;
    private $_datos = null;
    private $_count = 0;

    public function __construct() {
        parent::__construct();

        $this->_datos = new User;

       
    }

    // ----------------------------------------------------------------------

    public function index() {
        $this->set_title('MiShaka');

        $datos = null;
        
        if ($this->_get(null)) {
            $datos = $this->_datos;
            
            $paginator_url = site_url('mishaka/buscar/pagina/%d/');

            $this->_data['paginator_url'] = $_SERVER['QUERY_STRING'] ? $paginator_url . '?' . $_SERVER['QUERY_STRING'] : $paginator_url;
        }

        // Loads a config file named blog_settings.php and assigns it to an index named "blog_settings"
        $config = $this->config->load('_users/informacion_profesional', TRUE);


        $this->_data['options'] = $config['options'];
        $this->_data['count'] = $this->_count;

        
        $talents = new Talent;

        $this->_data['talents'] = $talents->get_for_select('Seleccione...');
        
        return $this->set_datos($datos)->build();
    }

    // ----------------------------------------------------------------------


    public function buscar($page = 1) {

        if ($this->_get(null)) {
            foreach ($this->_get(null) as $field => $get) {
                if (!empty($get)) {
                    switch ($field) {
                        case 'anos_experiencia':
                        case 'numero_conciertos':
                            $this->_datos->like_related('users_personal_info', $field, $get);
                            break;
                        case 'edad':
                            $date_start = new DateTime();
                            $date_end = clone $date_start;
                            
                            $range_end = $get;
                            $range_start = $range_end - 9;
                            
                            $date_end->modify("-{$range_start} year");
                            $year_end = $date_end->format('Y');
                            
                            $date_start->modify("-{$range_end} year");
                            $year_start = $date_start->format('Y');
                            
                            $this->_datos->where(array('birthday >=' => $year_start, 'birthday <=' => $year_end));
                            break;
                        case 'talent':
                            $this->_datos->where_related_talent('id', (int) $get);
                            
                            break;
                        default:
                            $this->_datos->like($field, $get);
                            break;
                    }
                }
            }
//            
//            echo $this->_datos->get_sql();
//            exit;
          

            $this->_datos->where_in_related_group('name', array('usuarios'))->get_paged($page, 10);
            
            $this->_count = $this->_datos->count_distinct();
        }


        return $this->index();
    }

    // ----------------------------------------------------------------------
}
