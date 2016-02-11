<?php

class Cotizaciones extends MX_Controller {

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
				
				$query = $this->db->query("SELECT			cotizaciones.*, products.titulo, products.subtitulo, impresiones.nombre AS impresion, 
																			sectores.nombre AS sector 
													FROM				cotizaciones 
													INNER JOIN	products ON products.id=cotizaciones.id_producto 
													INNER JOIN	impresiones ON impresiones.id=cotizaciones.id_impresion 
													INNER JOIN	sectores ON sectores.id=cotizaciones.id_sector 
													ORDER BY		cotizaciones.fecha DESC");
				
        if ($query->num_rows() == 0) {
            $data['cotizaciones'] = array();
        } else {
            $data['cotizaciones'] = $query->result();
        }

        $lista_menu['menu'] = $this->cms_model->menuIndex();
        $lista_menu['submenu'] = $this->cms_model->subMenuIndex();
        $template_date["administrator"] = $this->load->view('cms/general_includes/cms_administrator', null, true);
        $template_date["icons"] = $this->load->view('cms/general_includes/cms_icons', null, true);
        $template_date["index"] = $this->load->view('cms/general_includes/cms_index', $lista_menu, true);
        $template_date["data"] = $data;
        $this->load->view('cotizaciones_view', $template_date);
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
		
		function excel() {
				$this->load->model('cms/cms_model');

        $query = $this->db->query("SELECT			cotizaciones.*, products.titulo, products.subtitulo, 
																							impresiones.nombre AS impresion, sectores.nombre AS sector 
																	 FROM				cotizaciones 
																	 INNER JOIN	products ON products.id=cotizaciones.id_producto 
																	 INNER JOIN	impresiones ON impresiones.id=cotizaciones.id_impresion 
																	 INNER JOIN	sectores ON sectores.id=cotizaciones.id_sector 
																	 ORDER BY cotizaciones.fecha DESC");
				
        if ($query->num_rows() == 0) {
            $data = array();
        } else {
            $data = $query->result();
        }
        // Load libreria
        $this->load->library('PHPExcel');
        // Propiedades del archivo excel
        $this->phpexcel->getProperties()
                ->setTitle("Cotizaciones solicitadas")
                ->setDescription("Listado de cotizaciones registradas");
        // Setiar la solapa que queda actia al abrir el excel
        $this->phpexcel->setActiveSheetIndex(0);
        // Solapa excel para trabajar con PHP
        $sheet = $this->phpexcel->getActiveSheet();
        $sheet->setTitle("Cotizaciones");
        $sheet->getColumnDimension('A')->setWidth(20);
				$sheet->setCellValue('A1', 'No.');
        $sheet->setCellValue('B1', 'Nombre');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Tipo');
        $sheet->setCellValue('E1', 'Empresa');
        $sheet->setCellValue('F1', 'Teléfono');
        $sheet->setCellValue('G1', 'Fecha');
        $sheet->setCellValue('H1', 'Sector');
        $sheet->setCellValue('I1', 'Producto');
        $sheet->setCellValue('J1', 'Cantidades');
        $sheet->setCellValue('K1', 'Impresión');
        $sheet->setCellValue('L1', 'Comentario');
				$i = 2;
				if(count($data) > 0):
					foreach($data as $cotizacion) :
						$sheet->setCellValue('A'.$i, $i-1);
						$sheet->setCellValue('B'.$i, $cotizacion->nombre);
						$sheet->setCellValue('C'.$i, $cotizacion->email);
						$sheet->setCellValue('D'.$i, $cotizacion->tipo);
						$sheet->setCellValue('E'.$i, $cotizacion->empresa);
						$sheet->setCellValue('F'.$i, $cotizacion->telefono);
						$sheet->setCellValue('G'.$i, $cotizacion->fecha);
						$sheet->setCellValue('H'.$i, $cotizacion->sector);
						$sheet->setCellValue('I'.$i, $cotizacion->titulo." ".$cotizacion->subtitulo);
						$sheet->setCellValue('J'.$i, $cotizacion->cantidad." ".$cotizacion->unidades);
						$sheet->setCellValue('K'.$i, $cotizacion->impresion);
						$sheet->setCellValue('L'.$i, $cotizacion->comentario);
						$i++;
					endforeach;
				endif;
        // Salida
        header("Content-Type: application/vnd.ms-excel");
        $nombreArchivo = 'export_listado_cotizaciones_'.date('YmdHis');
        header("Content-Disposition: attachment; filename=\"$nombreArchivo.xls\"");
        header("Cache-Control: max-age=0");
        // Genera Excel
        $writer = PHPExcel_IOFactory::createWriter($this->phpexcel, "Excel5");
        // Escribir
        $writer->save('php://output');
        exit;
    }
}