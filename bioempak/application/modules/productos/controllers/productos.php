<?php

class Productos extends MX_Controller {

    function upload($nombre, $name_input_file) {
        if ($_FILES[$name_input_file]['name']) {
					$file_size = $_FILES[$name_input_file]['size'];
					$ext = strtolower(strrchr($_FILES[$name_input_file]['name'], '.'));
					$nombre_archivo = $_FILES[$name_input_file]['name'];
					if (is_uploaded_file($_FILES[$name_input_file]['tmp_name'])) {
						// Nuevo nombre Imgaen
						//$nombre = $raiz_nuevo_nombre . $ext;
						move_uploaded_file($_FILES[$name_input_file]['tmp_name'], realpath(APPPATH . '../assets/prod_img/')."/$nombre");
						@chmod(realpath(APPPATH . '../assets/prod_img/')."/$nombre", 0777);
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

        if ($this->db->get('products')->num_rows() == 0) {
            $data['productos'] = array();
        } else {
            $data['productos'] = $this->db->get('products')->result();
        }
				
				if ($this->db->get('images')->num_rows() == 0) {
            $data['imagenes'] = array();
        } else {
            $data['imagenes'] = $this->db->get('images')->result();
        }

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('productos_view', $template_date);
    }

    function view() {
        $this->load->model('cms/cms_model');
        $this->db->where('id', $this->uri->segment(3));

        $data = $this->db->get('products')->row();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('productos_edit', $template_date);
    }
		
		function nuevo() {
        $this->load->model('cms/cms_model');
        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $this->load->view('productos_new', $template_date);
    }

    function insert() {
        $data = $this->input->post();
				unset($data['send']);
        $this->db->insert('products', $data);
				redirect('productos');
    }

    function update() {
				$data = $this->input->post();
				unset($data['send']);
        $this->db->where('id', $data['id']);
				$this->db->update('products', $data);
        
        redirect('productos');
    }

    function delete() {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('products');
        redirect('productos');
    }
		
		public function imagenes(){
        $this->load->model('cms/cms_model');
        $this->db->where('id_producto', $this->uri->segment(3));

				$data['id'] = $this->uri->segment(3);
        $data['imagenes'] = $this->db->get('images')->result();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('imagenes', $template_date);
    }
    
    public function addimagenes($idQ) {
        $this->load->model('cms/cms_model');
        $this->db->where('id_producto', $this->uri->segment(3));

				$data['id'] = $this->uri->segment(3);
        $data['imagenes'] = $this->db->get('images')->row();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('newimagenes', $template_date);
    }
    
    public function new_imagenes() {
        $img1 = $_FILES['userfile']['name'];

        $data = array(
            'url' => '',
            'id_producto' => $this->input->post('id_producto')
        );
        $this->db->insert('images', $data);
        $id = $this->db->insert_id();

        $ext = substr(strrchr($img1, '.'), 1);
        $name = $id . "." . $ext;
				$retorno = $this->upload($name, 'userfile');
        if ($retorno['Status'] == true) {
            $data = array(
                'url' => $name,
                'id_producto' => $this->input->post('id_producto')
            );
            $this->db->where('id', $id);
            $this->db->update('images', $data);
        }
				redirect('productos/imagenes/'.$this->input->post('id_producto'));        
    }
    
    public function editimagenes($id = "",$idQ = "",$update = ""){
        $this->load->model('cms/cms_model');
        $this->db->where('id', $this->uri->segment(4));
				
				$data['id_producto'] = $this->uri->segment(3);
				$data['id'] = $this->uri->segment(4);
        $data['imagenes'] = $this->db->get('images')->row();

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('editimagenes', $template_date);
    }
    
    public function update_imagenes(){
			$img1 = $_FILES['userfile']['name'];
			$id = $this->input->post('id');
			$ext = substr(strrchr($img1, '.'), 1);
			$name = $id . "." . $ext;
			if ($img1 == "") {
				$data = array(
					'url' => $this->input->post('imagenold'),
					'id_producto' => $this->input->post('id_producto'),
				);
			} else {
				unlink(APPPATH . '../assets/prod_img/' . $this->input->post('imagenold'));
				$retorno = $this->upload($name, 'userfile');
        if ($retorno['Status'] == true) {
					$data = array(
						'url' => $name,
						'id_producto' => $this->input->post('id_producto')
					);
				}
			}
			$this->db->where('id', $id);
			$this->db->update('images', $data);
			redirect('productos/imagenes/'.$this->input->post('id_producto'));
    }
		
		function delimagenes() {
        $this->db->where('id', $this->uri->segment(4));
        $this->db->delete('images');
        redirect('productos/imagenes/'.$this->uri->segment(3));
    }
}