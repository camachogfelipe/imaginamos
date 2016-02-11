<?php

/**
 * @author Michael Ivan Quevedo V.
 */
class _Perms extends Back_Controller {

    public function __construct() {
        parent::__construct();
        $this->add_modular_assets('js', 'perms');
    }

    // ----------------------------------------------------------------------

    public function index($group_id = null) {
        $this->has_perm('cms_admin_perms.view', true);
        $group = new \Group;
        $perms = new \Permission;
        $permissions = array();

        $groups = $group->get_for_select();
        $first_group = !empty($group_id) ? $group_id : key($groups);
        $perms->get();

        if ($perms->exists()) {
            foreach ($perms as $p) {
                $permissions[$p->type][] = $p;
            }
        }

        $group->get_by_id($first_group);

        $this->_data['groups'] = $groups;
        $this->_data['perms'] = $permissions;
        $this->_data['group'] = $group;

        return $this->build('perms');
    }

    // ----------------------------------------------------------------------

    public function group($group_id) {
        return $this->index($group_id);
    }

    // ----------------------------------------------------------------------

    public function save($perm_id, $field, $value) {
        $perm = new \Groups_permission($perm_id);
        $perm->{$field} = $value;

        return $this->render_json($perm->save());
    }

    // ----------------------------------------------------------------------
}
