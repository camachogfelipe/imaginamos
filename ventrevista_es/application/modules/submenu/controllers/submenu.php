<?php

////////////////////////////////
//@autor: Brayan Acebo
//brayan.acebo@imaginamos.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////

class Submenu extends MX_Controller {

    function index($return = '') {

        $returns['return'] = $return;

        $this->load->model('submenu_model');
        
        $idmenu = $this->uri->segment(4);
        if($idmenu == ""){$idmenu = $this->uri->segment(3);}

        if ($query = $this->submenu_model->getRecords($idmenu)) {
            $template_date['records'] = $query;
        } else {
            $template_date['records'] = '';
        }
        
        $template_date['menu'] = $this->submenu_model->getMenu($idmenu);

        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_menu_admin', null, true);
        $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
        $this->load->view('submenu_view', $template_date);
    }

    function edit($return = '') {

        $returns['return'] = $return;

        $this->load->model('submenu_model');

        if ($query = $this->submenu_model->getRecord()) {
            $template_date['record'] = $query;
        }

        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_menu_admin', null, true);
        $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);

        $this->load->view('submenu_edit', $template_date);
    }

    function add($return = '') {

        $returns['return'] = $return;

        $this->load->model('submenu_model');



        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_menu_admin', null, true);
        $template_date["functions"] = $this->load->view('cms/general_includes/cms_functions', $returns, true);
        $this->load->view('submenu_new', $template_date);
    }

    function update() {

        $this->load->model('submenu_model');


        if ($this->input->post('title') == '' || $this->input->post('url') == '') {
            $msg = 'erRequired';
            $this->edit($msg);
        } else {

            $menu = array(
                'submenu_title' => $this->input->post('title'),
                'submenu_url_eng' => $this->input->post('url_eng'),
                'submenu_title_eng' => $this->input->post('title_eng'),
                'submenu_url' => $this->input->post('url')
            );


            $return = $this->submenu_model->update_record($this->input->post('id'), $menu);
            $this->index('ok');
        }
    }

    function new_record() {


        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('title_eng', 'title_eng', '');
        $this->form_validation->set_rules('url', 'url', 'required');
        $this->form_validation->set_rules('url_eng', 'url_eng', '');

        if ($this->form_validation->run() == FALSE) {
            $this->add('erRequired');
        } else {
            $this->load->model('submenu_model');

            $menu = array(
                'submenu_title' => $this->input->post('title'),
                'submenu_title_eng' => $this->input->post('title_eng'),
                'submenu_url' => $this->input->post('url'),
                'submenu_url_eng' => $this->input->post('url_eng'),
                'submenu_idmenu' => $this->input->post('idmenu')
            );

            $this->submenu_model->add_record($menu);

            $this->index('ok');
        }
    }

    function delete() {
        $this->load->model('submenu_model');
        $this->submenu_model->delete_record();
        $this->index('ok');
    }

}