<?php

/**
 * @author Michael Ivan Quevedo V.
 */
class Permission extends DataMapper {

    public $model = 'permission';
    public $table = 'permissions';
    public $has_one = array();
    public $has_many = array(
        'groups_permission',
        'users_permission',
        'crm_project_permission'
    );
    public $validation = array();
    private $_CRUD = "['create', 'update', 'delete', 'view', 'active']";

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public function has($permission = null) {
        $vars = $types = array();

        if (!is_array($permission)) {
            $permission = array($permission);
        }

        foreach ($permission as $p) {
            $_permission = @explode('.', $p);
            if (!is_array($_permission)) {
                return false;
            }

            $var = $_permission[0];
            $type = $_permission[1];

            if ($type === 'total') {
                foreach ($this->_CRUD as $_c) {
                    array_push($types, $_c);
                    array_push($vars, $var);
                }
            } else {
                array_push($types, $type);
                array_push($vars, $var);
            }
        }

        foreach ($types as $t) {
            if (!$this->db->field_exists($t, 'groups_permissions')) {
                return false;
            }
        }

        $types = array_map(function(&$type) {
                    return (bool) $type = true;
                }, array_flip($types));

        // Obtieniendo el usuario actual
        $user = new \User;
        $user->get_current();

        $group = $user->group;
        $ci = & get_instance();

        if ($ci->ion_auth->is_admin()) {
            return true;
        }

        // Verificando permiso
        $model = new \Groups_permission;

        $check = $model->select('id')
                ->where_in_related('permission', 'var', array_unique($vars))
                ->where('group_id', $group->id)
                ->where($types)
                ->count();

        return $check > 0;
    }

    // ----------------------------------------------------------------------

    public static function get_perm(\Group $group, \Permission $perm) {
        $groups_permissions = new \Groups_permission;
        $groups_permissions->where_related($group)->where_related($perm)->get();

        if (!$groups_permissions->exists()) {
            $groups_permissions->view = 0;
            $groups_permissions->create = 0;
            $groups_permissions->update = 0;
            $groups_permissions->delete = 0;
            if ($groups_permissions->save(array($group, $perm))) {
                return \Permission::get_perm($group, $perm);
            }
        }

        return $groups_permissions;
    }

    // ----------------------------------------------------------------------
}