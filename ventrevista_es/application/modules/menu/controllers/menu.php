<?php

////////////////////////////////
//@autor: Brayan Acebo
//brayan.acebo@imaginamos.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////

class Menu extends MX_Controller {

    function index($return = '') {

        $returns['return'] = $return;

        $this->load->model('menu_model');

        if ($query = $this->menu_model->getRecords()) {
            $template_date['records'] = $query;
        } else {
            $template_date['records'] = '';
        }
            
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_menu_admin', null, true);
        $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
        
        $this->load->view('menu_view', $template_date);
    }

    function edit($return = '') {

        $returns['return'] = $return;

        $this->load->model('menu_model');

        if ($query = $this->menu_model->getRecord()) {
            $template_date['record'] = $query;
        }

        $queryIcons = $this->menu_model->getAllIcons();
        $template_date['records_icons'] = $queryIcons;

        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_menu_admin', null, true);
        $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
        
        $this->load->view('menu_edit', $template_date);
    }

    function add($return = '') {

        $returns['return'] = $return;

        $this->load->model('menu_model');

        $queryIcons = $this->menu_model->getAllIcons();
        $template_date['records_icons'] = $queryIcons;

        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_menu_admin', null, true);
        $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
        $this->load->view('menu_new', $template_date);
    }

    function update() {

        $this->load->model('menu_model');


        if ($this->input->post('title') == '') {
            $msg = 'erRequired';
            $this->edit($msg);
        } else {

            $menu = array(
                'menu_title' => $this->input->post('title'),
                'menu_title_eng' => $this->input->post('title_eng'),
                'menu_url' => $this->input->post('url'),
                'menu_url_eng' => $this->input->post('url_eng'),
                'menu_icon' => $this->input->post('icon')
            );


            $return = $this->menu_model->update_record($this->input->post('id'), $menu);
            $this->index('ok');
        }
    }

    function new_record() {


        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->add('erRequired');
        } else {
            $this->load->model('menu_model');

            $menu = array(
                'menu_title' => $this->input->post('title'),
                'menu_title_eng' => $this->input->post('title_eng'),
                'menu_url' => $this->input->post('url'),
                'menu_url_eng' => $this->input->post('url_eng'),
                'menu_icon' => $this->input->post('icon')
            );

            $this->menu_model->add_record($menu);

            $this->index('ok');
        }
    }
    
    
    function delete() {
        $this->load->model('menu_model');
        $this->menu_model->delete_record();
        $this->index('ok');
    }

}