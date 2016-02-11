<?php

class User extends DataMapper {

    public $model = 'user';
    public $table = 'users';
    public $has_one = array();
    public $has_many = array(
        'group' => array('auto_populate' => true, 'join_table' => 'users_groups'),
        'area' => array('join_table' => 'users_areas', 'auto_populate' => true),
        'project' => array('auto_populate' => true),
        'projects_comment' => array('auto_populate' => true),
        'projects_comments_winner' => array('auto_populate' => true),
        'projects_follower' => array('auto_populate' => true),
        'proposal' => array('auto_populate' => true),
        'report' => array('auto_populate' => true),
        'users_level' => array('auto_populate' => true),
        'users_transaction' => array('auto_populate' => true)
    );
    public $validation = array(
        'full_name' => array(
            'label' => 'Nombre',
            'rules' => array('required')
        ),
        'username' => array(
            'label' => 'Usuario',
            'rules' => array('required', 'unique', 'min_length' => 4, 'alpha_dash_dot')
        ),
        'email' => array(
            'label' => 'Email',
            'rules' => array('required', 'unique', 'valid_email')
        ),
        'phone' => array(
            'label' => 'Teléfono',
            'rules' => array('is_numeric')
        ),
        'password' => array(
            'label' => 'Contraseña',
            'rules' => array('required')
        ),
        'about' => array(
            'label' => 'Sobre nosotros',
            'rules' => array('trim', 'max_length' => 140, 'always_validate')
        ),
        array(
            'field' => 'password_confirm',
            'label' => 'Confirmar contraseña'
        ),
        array(
            'field' => 'terms',
            'rules' => array('required_terms')
        )
    );
    public $is_owner = false;

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function __call($method, $arguments) {
        static $watched_methods = array('is_role_');

        foreach ($watched_methods as $watched_method) {

            if (strpos($method, $watched_method) !== FALSE) {
                $pieces = explode($watched_method, $method);

                return $this->{'_' . trim($watched_method, '_')}($pieces[1]);
            }
        }

        return parent::__call($method, $arguments);
    }

    // ----------------------------------------------------------------------

    public function _required_terms($field) {
        if (!empty($this->{$field})) {
            return TRUE;
        }

        return 'Acepte los <strong>Términos y condiciones</strong> para registarse.';
    }

    // ----------------------------------------------------------------------

  

    public function get_current() {
        $ci = & get_instance();

        $user_id = false;

        if ($ci->ion_auth->logged_in()) {
            $user_id = $ci->session->userdata('user_id');
        }

        return $this->get_by_id($user_id);
    }

    // ----------------------------------------------------------------------

    public function is_complete_data($type = 'creativos') {
        if (!$this->exists()) {
            return false;
        }

        $incomplete = 0;

        $fields_to_verify = array('phone', 'city', 'country', 'about');

        switch ($type) {
            case 'creativos':
                $fields_to_verify[] = 'profession';
                break;
            case 'empresas':
                $fields_to_verify[] = 'street';
                break;
            default:
                break;
        }

        foreach ($fields_to_verify as $field) {
            if (empty($this->{$field})) {
                $incomplete++;
            }
        }

        return $incomplete <= 0;
    }

    // ----------------------------------------------------------------------

    public function get_level() {
        if (!$this->exists()) {
            return false;
        }

        if (!class_exists('Users_level')) {
            $this->load->model(array('_users/users_level'));
        }

        $users_level = new \Users_level;

        return $users_level->get_level_for_user($this);
    }

    // ----------------------------------------------------------------------

    public function get_payments_for_empresas() {
        if (!$this->exists()) {
            return false;
        }

        $payment = new Payment;

        $payment->distinct()->select('payments.*')->where('projects.user_id', $this->id)->join_related('project')->order_by('updated_on', 'DESC');

        return $payment->get();
    }

    // ----------------------------------------------------------------------

    public function get_avg_rating() {
        if (!$this->exists()) {
            return false;
        }

        if (!class_exists('Proposal')) {
            $this->load->model(array('_projects/proposal'));
        }
      

        $rating = $this->proposal
                ->select_avg('rating')
                ->where('rating >', 0)
                ->get();
        

        return round($rating->rating);
    }

    // ----------------------------------------------------------------------
    
    /**
     * Una de las propuestas es ganadora.
     * 
     * @param object $project
     * @return bool
     */
    public function proposal_win_on_project($project) {
        $proposals = new Proposal;
        
        return (bool) $proposals->where_related_round('is_win', true)
                  ->where_related_project($project)  
                  ->where_related($this)
                  ->count();
        
    }

    // ----------------------------------------------------------------------

    public function check_is_owner() {
        if (!$this->exists()) {
            return false;
        }

        $ci = & get_instance();

        $username = $ci->session->userdata('username');

        $is_owner = $this->username == $username;

        $this->is_owner = $is_owner;

        return $this;
    }

    // ----------------------------------------------------------------------

    public function get_portfolio() {
        
        $return = (object) array(
                    'all' => array(),
                    'win' => array(),
                    'open' => array()
        );

        if (!$this->exists()) {
            return false;
        }

        $proposals = new Proposal;
        $proposals->get_by_related($this);
        
        if ($proposals->exists()) {
            foreach ($proposals as $proposal) {
                $return->all[] = $proposal;
                // Detectando si es abierto
                if ($proposal->project->is_status_publicado()) {
                    $return->open[] = $proposal;
                }

                // Detectando las ganadoras
                if ($proposal->is_won()) {
                    $return->win[] = $proposal;
                }
            }
        }

        return $return;
    }

    // ----------------------------------------------------------------------

    public function get_profile_image($id = null) {
        if (!$this->exists()) {
            $this->get_by_id($id);
            if (!$this->exists()) {
                return false;
            }
            return false;
        }

        if (!empty($this->image)) {
            return uploads_url($this->image);
        }

        if (!empty($this->facebook_username)) {
            return sprintf('http://graph.facebook.com/%s/picture?type=large&t=%s', $this->facebook_username, now());
        }

        return front_asset('img/avatar-creativo.png');
    }

    // ----------------------------------------------------------------------

    public function get_profile_url($id = null) {
        if (!$this->exists()) {
            $this->get_by_id($id);
             if (!$this->exists()) {
                 return false;
             }
            return false;
        }

        return sprintf(site_url('perfil/%s'), rawurlencode($this->username));
    }

    // ----------------------------------------------------------------------

    public function get_notifications_for_creativos($limit = 4) {
        if (!$this->exists()) {
            return false;
        }

        if (!class_exists('Projects_history') OR !class_exists('Projects_follower')) {
            $this->load->model(array('_projects/projects_history', '_projects/projects_follower'));
        }

        $projects_id = array();

        if ($this->proposal->exists()) {
            foreach ($this->proposal as $proposal) {
                $projects_id[] = $proposal->project->id;
            }
        }

        if ($this->projects_follower) {
            foreach ($this->projects_follower as $follower) {
                $projects_id[] = $follower->project->id;
            }
        }

        $history = new Projects_history;

        $history->where('only_admin', false)->where_in('project_id', $projects_id)->order_by('created_on', 'DESC')->limit($limit);

        return $history->get();
    }

    // ----------------------------------------------------------------------

    /**
     * Get notifications for empresas
     * 
     * Obtener notificationes para las empresas.
     * 
     * @param type $limit
     * @return boolean
     */
    public function get_notifications_for_empresas($limit = 4) {
        if (!$this->exists()) {
            return false;
        }

        if (!class_exists('Projects_history') OR !class_exists('Projects_follower')) {
            $this->load->model(array('_projects/projects_history', '_projects/projects_follower'));
        }

        $projects_id = array();

        if ($this->projects->exists()) {
            foreach ($this->projects as $project) {
                $projects_id[] = $project->id;
            }
        }

        $history = new Projects_history;

        $history->where('only_admin', false)->where_in('project_id', $projects_id)->order_by('created_on', 'DESC')->limit($limit);

        return $history->get();
    }

    // ----------------------------------------------------------------------

    public function get_featured_users($limit = 9) {

        if (!class_exists('Users_level'))
            $this->load->model(array('_users/users_level'));

        if (!class_exists('Level'))
            $this->load->model(array('_users/level'));
        
        if (!class_exists('Proposal'))
            $this->load->model(array('_projects/proposal'));
        
        if (!class_exists('Round'))
            $this->load->model(array('_projects/round'));
        
        $featured_users = array();
       

        $users_levels = new Users_level;
        
        $users_levels->select();
        $users_levels->include_related('level', array('order'));
        $users_levels->order_by_related_level('order', 'DESC')->limit($limit)->get();
        
        
        if($users_levels->exists()){
            foreach($users_levels as $pos => $user_level){
                // Flag para el ordenamiento
                $flag = $user_level->user->get_avg_rating() + $user_level->level->order + $user_level->user->projects_won_count();
               
                $featured_users[$pos] = $flag;
            }
            
            arsort($featured_users);
           
            foreach($users_levels as $pos => $user_level){
                $featured_users[$pos] = $user_level;
            }
        }
        
        
        return $featured_users;
    }

    // ----------------------------------------------------------------------

    public function group_featured_users() {
        if (!$this->exists()) {
            return false;
        }

        $return = array();
        $count = 0;
        $count_array = 1;

        foreach ($this as $row) {
            $count++;

            $return[$count_array][] = $row;

            if ($count >= 3) {
                $count_array++;
            }
        }

        echo '<pre>';
        print_r($return);
        exit;
    }

    // ----------------------------------------------------------------------

    public function projects_won_count() {
        if (!$this->exists()) {
            return false;
        }

        if (!class_exists('Round') OR !class_exists('Proposal')) {
            $this->load->model(array('_projects/round', '_projects/proposal'));
        }
        
        $proposals = new Proposal;

        return  $proposals->where_related_round('is_win', true)->where_related($this)->count();;
    }

    // ----------------------------------------------------------------------

    private function _is_role($_group = null) {

        if (!$this->exists() OR empty($_group)) {
            return false;
        }


        $group = new Group;

        $group->get_by_name($_group);

        if (!$group->exists()) {
            return false;
        }


        return (bool) ( (string) $this->group->name === (string) $group->name );
    }

    // ----------------------------------------------------------------------
}
