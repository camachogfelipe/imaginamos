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

        $dir = new DirectoryIterator(BACKPATH);
        $module_name = "";
         $module_controller = "";
        foreach ($dir as $obj) {
            $original_module_name = $obj->getFilename(); 
            $module_name = substr($original_module_name, 1); 
            $module_controller = NULL;     
            if($module_name!= ".." AND $module_name != "." AND $module_name != "0" AND !is_null($module_name) ){
              if ($perms->exists()) {
                  $add_perm = new \Permission(); 
                  $module_controller = $original_module_name;
                  $add_perm->get_by_name($module_name);
                  if( !$add_perm->exists() AND ( $module_name !== 'ssets' )){
                      $cr = null;
                      $dir_cr = $obj->getPath()."\\".$original_module_name."\\controllers\\".$module_controller;
                      if(file_exists($dir_cr.".php")){
                          $this->load->module($original_module_name);
                          $cr = new $module_controller;
                      }
                      $add_perm->name = $module_name;
                      $add_perm->id = "";
                      if(!is_null($cr)){
                       if(!is_null ($cr->model))   
                       $add_perm->var = $cr->model;
                      else
                       $add_perm->var = "none";   
                      
                        if(isset($cr->_menu) AND is_array($cr->_menu))
                          $this->_main_menu = array_merge_recursive($this->_main_menu,$cr->_menu); 
                      }
                      $add_perm->type = "module";
                      $add_perm->save(); 
                  }
                
                //$module_controller = $module_name; 
               /* $cr = new $module_controller(); 
                if(isset($cr->_menu) AND is_array($cr->_menu))
                 $this->_main_menu = array_merge_recursive($this->_main_menu,$cr->_menu); */
              }
            }
        }
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
