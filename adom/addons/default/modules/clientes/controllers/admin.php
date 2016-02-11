<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * @author  PyroCMS Dev Team
 * @package PyroCMS\Core\Modules\Blog\Controllers
 */
class Admin extends Admin_Controller {

    protected $section = 'admin_clientes';
    protected $namespace = 'clientes';
    protected $slug_stream = 'clientes';
    private $_tabs = array();

    public function __construct() {
        parent::__construct();
        $this->_tabs = array(
            array(
                'id' => 'info',
                'title' => 'Información',
                'fields' => array(
                    'name',
                    'description',
                )
            )
        );

        $this->template->append_js('module::admin.js');
    }

    // ----------------------------------------------------------------------

    public function index($page = 1) {
        $extra['title'] = "lang:{$this->namespace}:table_title";

        $extra['buttons'] = array(
            array(
                'label' => lang('global:edit'),
                'url' => "admin/{$this->namespace}/edit/-entry_id-/{$page}",
            ),
            array(
                'label' => lang('global:delete'),
                'url' => "admin/{$this->namespace}/delete/-entry_id-/{$page}",
                'confirm' => true
            )
        );


        $extra['no_entries_message'] = lang("{$this->namespace}:no_entries_message");
        $extra['columns'] = array('name', 'description', 'images', 'url', 'state', 'created');
        $this->streams->cp->entries_table($this->slug_stream, $this->namespace, 5, "admin/{$this->namespace}/index", true, $extra);
    }

    // ----------------------------------------------------------------------

    public function create() {
        $extra = array(
            'return' => "admin/{$this->namespace}",
            'success_message' => lang("{$this->namespace}:create_success"),
            'failure_message' => lang("{$this->namespace}:create_failure"),
            'title' => lang("{$this->namespace}:new"),
        );

        return $this->streams->cp->entry_form($this->slug_stream, $this->namespace, 'new', null, true, $extra);
    }

    // ----------------------------------------------------------------------



    public function edit($id = null) {
        $extra = array(
            'return' => "admin/{$this->namespace}",
            'success_message' => lang("{$this->namespace}:edit_success"),
            'failure_message' => lang("{$this->namespace}:edit_failure"),
            'title' => lang("{$this->namespace}:edit")
        );

        return $this->streams->cp->entry_form($this->slug_stream, $this->namespace, 'edit', $id, true, $extra);
    }

    // ----------------------------------------------------------------------

    /**
     * Delete a FAQ entry
     * 
     * @param   int [$id] The id of FAQ to be deleted
     * @return  void
     */
    public function delete($id = null, $page = 1) {
        $this->streams->entries->delete_entry($id, $this->slug_stream, $this->namespace);
        $this->session->set_flashdata('error', lang("{$this->namespace}:deleted"));

        return redirect("admin/{$this->namespace}/index/{$page}");
    }

}
