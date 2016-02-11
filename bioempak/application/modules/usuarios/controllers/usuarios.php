<?php

class Usuarios extends MX_Controller {

    function upload($namex, $field) {
        $config = array(
            'allowed_types' => 'jpeg|png|jpg',
            'upload_path' => realpath(APPPATH . '../assets/prod_img/'),
            'max_size' => 300000,
            'file_name' => $namex
        );

        $this->load->library('upload', $config);
        if ($this->upload->do_upload($field)) {
            return true;
        } else {
            return false;
        }
    }

    function index() {
        $this->load->model('cms/cms_model');

        if ($this->db->get('usuarios')->num_rows() == 0) {
            $data['usuarios'] = array();
        } else {
            $data['usuarios'] = $this->db->get('usuarios')->result();
        }

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('usuarios_view', $template_date);
    }

    function comentarios() {
        $this->load->model('cms/cms_model');

        $data['usuario'] = $this->uri->segment(3);
				
				$query = $this->db->query("SELECT			comentarios.id, comentarios.comentario, comentarios.fecha, noticias.titulo 
																	 FROM				comentarios 
																	 INNER JOIN	noticias ON noticias.id=comentarios.id_noticia 
																	 WHERE			comentarios.id_usuario='".$this->uri->segment(3)."'");
				
				if ($query->num_rows() == 0) {
            $data['comentarios'] = array();
        } else {
            $data['comentarios'] = $query->result();
        }

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('comentarios', $template_date);
    }

    function delete() {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('usuarios');
				$this->deletecomment("id_usuario");
        redirect('usuarios');
    }
		
		function deletecomment($campo = "", $redirect = false) {
			if(!empty($campo)) :
        $this->db->where($campo, $this->uri->segment(3));
        $this->db->delete('comentarios');
				if($redirect == true) redirect('usuarios/comentarios/'.$this->uri->segment(3));
			endif;
    }
		
		function excel() {
				$this->load->model('cms/cms_model');

				$this->db->select("usuarios.*, sectores.nombre as sector_name");
				$this->db->from("usuarios");
				$this->db->join("sectores", "usuarios.id_sector=sectores.id");
				$query = $this->db->get();
        if ($query->num_rows() == 0) {
            $data = array();
        } else {
            $data = $query->result();
        }
        // Load libreria
        $this->load->library('PHPExcel');
        // Propiedades del archivo excel
        $this->phpexcel->getProperties()
                ->setTitle("Usuarios registrados")
                ->setDescription("Listado de usuarios registrados");
        // Setiar la solapa que queda actia al abrir el excel
        $this->phpexcel->setActiveSheetIndex(0);
        // Solapa excel para trabajar con PHP
        $sheet = $this->phpexcel->getActiveSheet();
        $sheet->setTitle("usuarios");
        $sheet->getColumnDimension('A')->setWidth(20);
        $sheet->setCellValue('A1', 'Nombre');
        $sheet->setCellValue('B1', 'Email');
        $sheet->setCellValue('C1', 'Tipo usuario');
        $sheet->setCellValue('D1', 'Empresa');
        $sheet->setCellValue('E1', 'Cargo');
        $sheet->setCellValue('F1', 'Sector');
				$i = 2;
				if(count($data) > 0):
					foreach($data as $usuario) :
						$sheet->setCellValue('A'.$i, $usuario->nombre);
						$sheet->setCellValue('B'.$i, $usuario->email);
						$sheet->setCellValue('C'.$i, $usuario->tipo);
						$sheet->setCellValue('D'.$i, $usuario->empresa);
						$sheet->setCellValue('E'.$i, $usuario->cargo);
						$sheet->setCellValue('F'.$i, $usuario->sector_name);
						$i++;
					endforeach;
				endif;
        // Salida
        header("Content-Type: application/vnd.ms-excel");
        $nombreArchivo = 'export_listado_'.date('YmdHis');
        header("Content-Disposition: attachment; filename=\"$nombreArchivo.xls\"");
        header("Cache-Control: max-age=0");
        // Genera Excel
        $writer = PHPExcel_IOFactory::createWriter($this->phpexcel, "Excel5");
        // Escribir
        $writer->save('php://output');
        exit;
    }
		
		function excelcomments() {
				$this->load->model('cms/cms_model');
				$query = $this->db->query("SELECT comentarios.*, usuarios.nombre, noticias.titulo FROM (`comentarios`) 
INNER JOIN usuarios ON usuarios.id=comentarios.id_usuario 
INNER JOIN noticias ON noticias.id=comentarios.id_noticia WHERE comentarios.id_usuario='".$this->uri->segment(3)."'");
				$data = $this->db->get('usuarios')->result();
        // Load libreria
        $this->load->library('PHPExcel');
        // Propiedades del archivo excel
        $this->phpexcel->getProperties()
                ->setTitle("Usuarios registrados")
                ->setDescription("Listado de usuarios registrados");
        // Setiar la solapa que queda actia al abrir el excel
        $this->phpexcel->setActiveSheetIndex(0);
        // Solapa excel para trabajar con PHP
        $sheet = $this->phpexcel->getActiveSheet();
        $sheet->setTitle("usuarios");
        $sheet->getColumnDimension('A')->setWidth(20);
        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'Comentario');
        $sheet->setCellValue('C1', 'fecha');
        $sheet->setCellValue('D1', 'Usuario');
        $sheet->setCellValue('E1', 'Noticia');
				$i = 2;
				if ($query->num_rows() > 0) :
					foreach($query->result() as $comentario) :
						$sheet->setCellValue('A'.$i, $comentario->id);
						$sheet->setCellValue('B'.$i, $comentario->comentario);
						$sheet->setCellValue('C'.$i, $comentario->fecha);
						$sheet->setCellValue('D'.$i, $comentario->nombre);
						$sheet->setCellValue('E'.$i, $comentario->titulo);
						$i++;
					endforeach;
				endif;
        // Salida
        header("Content-Type: application/vnd.ms-excel");
        $nombreArchivo = 'export_listado_comentarios_'.date('YmdHis');
        header("Content-Disposition: attachment; filename=\"$nombreArchivo.xls\"");
        header("Cache-Control: max-age=0");
        // Genera Excel
        $writer = PHPExcel_IOFactory::createWriter($this->phpexcel, "Excel5");
        // Escribir
        $writer->save('php://output');
        exit;
    }
}