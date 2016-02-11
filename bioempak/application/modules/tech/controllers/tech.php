<?php

class Tech extends MX_Controller {

    function upload($nombre, $name_input_file) {
        if ($_FILES[$name_input_file]['name']) {
					$file_size = $_FILES[$name_input_file]['size'];
					$ext = strtolower(strrchr($_FILES[$name_input_file]['name'], '.'));
					$nombre_archivo = $_FILES[$name_input_file]['name'];
					if (is_uploaded_file($_FILES[$name_input_file]['tmp_name'])) {
						// Nuevo nombre Imgaen
						//$nombre = $raiz_nuevo_nombre . $ext;
						move_uploaded_file($_FILES[$name_input_file]['tmp_name'], realpath(APPPATH . '../assets/tech_img/')."/$nombre");
						@chmod(realpath(APPPATH . '../assets/tech_img/')."/$nombre", 0777);
						//Retorno array con los parametros basicos necesaros
						return array("Status" => true, "Mensaje" => "Se subio el Archivo " . $nombre_archivo, "Ext" => $ext, "NameOriginal" => $nombre_archivo, "NameFile" => $nombre, "SizeFile" => $_FILES[$name_input_file]['size'], "URL" => "$path/$nombre");
					} else {
						return array("Status" => false, "Error" => "Problemas con la carpeta de upload del file");
					}
				} else {
					return array("Status" => false, "Error" => "No selected file");
				}
    }

    function index() {
        $this->load->model('cms/cms_model');

        if ($this->db->get('tech')->num_rows() == 0) {
            $data = array();
        } else {
            $data = $this->db->get('tech')->result();
        }

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('tech_view', $template_date);
    }

    function view() {
        $this->load->model('cms/cms_model');
        $this->db->where('id', $this->uri->segment(3));

        $data = $this->db->get('tech')->row();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('tech_edit', $template_date);
    }
		
		function nuevo() {
        $this->load->model('cms/cms_model');
        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $this->load->view('tech_new', $template_date);
    }

    function add() {

        $img1 = $_FILES['userfile']['name'];

        $data = array(
						'image' => "",
						'text' => $this->input->post('text'),
						'titulo' => $this->input->post('titulo')
				);
        $this->db->insert('tech', $data);
        $id = $this->db->insert_id();

        $ext = substr(strrchr($img1, '.'), 1);
        $name = $id . "." . $ext;
				$retorno = $this->upload($name, 'userfile');
        if ($retorno['Status'] == true) {
            $data = array(
                'image' => $name,
                'text' => $this->input->post('text'),
								'titulo' => $this->input->post('titulo')
            );
            $this->db->where('id', $id);
            $this->db->update('tech', $data);
            redirect('tech/index/ok');
        } else {
            redirect('tech/index/img2');
        }
    }

    function update() {

        $img1 = $_FILES['userfile']['name'];

        $id = $this->input->post('id');

        $ext = substr(strrchr($img1, '.'), 1);
        $name = $id . "." . $ext;

        if ($img1 == "") {
            $data = array(
                'image' => $this->input->post('oldImage'),
                'text' => $this->input->post('text'),
								'titulo' => $this->input->post('titulo')
            );
        } else {
            unlink(APPPATH . '../assets/tech_img/' . $this->input->post('oldImage'));
						$retorno = $this->upload($name, 'userfile');
            if ($retorno['Status'] == true) {
                $data = array(
                    'image' => $name,
                    'text' => $this->input->post('text'),
										'titulo' => $this->input->post('titulo')
                );
                
            } else {
                redirect('tech/index/img2');
            }
            
            
            
        }
        $this->db->where('id', $id);
					$this->db->update('tech', $data);
        
        redirect('tech/index/ok');
    }

    function delete() {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('tech');
        redirect('tech/index/ok');
    }

}