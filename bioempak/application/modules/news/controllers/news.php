<?php

class News extends MX_Controller {

    function upload($namex, $field = "userfile") {
        $config = array(
            'allowed_types' => 'jpeg|png|jpg',
            'upload_path' => dirname(__FILE__).'/../../../../assets/news_img/',
            'max_size' => 300000,
            'file_name' => $namex
        );

        $this->load->library('upload', $config);
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
					return false;
				}
				else
				{
					return true;
				}
    }

    function index() {
        $this->load->model('cms/cms_model');

        if ($this->db->get('noticias')->num_rows() == 0) {
            $data = array();
        } else {
            $data = $this->db->get('noticias')->result();
        }

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('news_view', $template_date);
    }

    function view() {
        $this->load->model('cms/cms_model');
        $this->db->where('id', $this->uri->segment(3));

        $data = $this->db->get('noticias')->row();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('news_edit', $template_date);
    }

    function add() {

        $img1 = $_FILES['userfile']['name'];
        
        /*$q = strlen(strip_tags($this->input->post('texto')));
        
        if($q > 410){
            redirect('news/index/toomuch');
        }*/
        
        $data = array(
            'imagen' => '',
            'titulo' => $this->input->post('titulo'),
            'texto' => $this->input->post('texto'),
						'fecha' => date("Y-m-d h:i:s")
        );
        $this->db->insert('noticias', $data);
        $id = $this->db->insert_id();

        $ext = substr(strrchr($img1, '.'), 1);
        if ($this->upload($name, 'userfile')) {
            $data = array(
                'imagen' => $name,
								'titulo' => $this->input->post('titulo'),
                'texto' => $this->input->post('texto')
            );
            $this->db->where('id', $id);
            $this->db->update('noticias', $data);
            redirect('news/index/ok');
        } else {
            redirect('news/index/img2');
        }
    }

    function update() {
        $q = strlen(strip_tags($this->input->post('text')));
        
        if($q > 410){
            redirect('news/index/toomuch');
        }
        $img1 = $_FILES['userfile']['name'];

        $id = $this->input->post('id');

        $ext = substr(strrchr($img1, '.'), 1);
        $name = $id . "." . $ext;

        if ($img1 == "") {
            $data = array(
                'imagen' => $this->input->post('oldImage'),
								'titulo' => $this->input->post('titulo'),
                'texto' => $this->input->post('texto')
            );
        } else {
						if(file_exists(dirname(__FILE__).'/../../../../assets/news_img/' . $this->input->post('oldImage')))
							unlink(dirname(__FILE__).'/../../../../assets/news_img/' . $this->input->post('oldImage'));
            if ($this->upload($name, 'userfile')) {
                $data = array(
                    'imagen' => $name,
										'titulo' => $this->input->post('titulo'),
                    'texto' => $this->input->post('texto')
                );
                
            } else {
                redirect('news/index/img2');
            }
        }
        $this->db->where('id', $id);
				if($this->db->update('noticias', $data)) redirect('news/index/ok');
				else redirect('news/index/nok');
    }

    function delete() {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('noticias');
        redirect('news/index/ok');
    }
		
		function intro() {
        $this->load->model('cms/cms_model');
        $this->db->where('id', 1);

        $data = $this->db->get('newsintro')->row();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('news_intro', $template_date);
    }
		
		function updateintro() {
        $q = strlen(strip_tags($this->input->post('texto')));
        
        if($q > 410){
            redirect('news/index/toomuch');
        }
        $id = 1;
				$data = array(
						'texto' => $this->input->post('texto'),
				);
        $this->db->where('id', $id);
        $this->db->update('newsintro', $data);
        
        redirect('news/intro/ok');
    }
}