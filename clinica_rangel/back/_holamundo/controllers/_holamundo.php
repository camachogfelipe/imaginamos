<?php

/**
 * @author rigobcastro
 */
class _holamundo extends Back_Controller {

    protected $admin_area = true;
    private $model = 'chatuser';
    private $name = "holamundo";
    private $page_id = false; 
    
    public function __construct() {
        parent::__construct();
        //$this->page_id = $this->page_id('chatusers');
    }

    // ----------------------------------------------------------------------

    public function index() {
        $data['pag'] = $this->session->userdata('page_'.  $this->name);
        $this->session->set_userdata('page_'.$this->name, '1');
        $data['title_page'] = "Usuarios Chat"; 
        $data['pag'] = 1;
        $data['pag_content'] = $this->barner();
        $data['pag_content_title'] = ucwords (str_replace("_", " ", $this->model));
        return $this->build('_index', $data);
    }

    public function buildajax($view, $data = array()) {
        return $this->template->set_layout(ADMINPATH . 'layouts/beoro_ajax')->build($view, $data);
    }

    public function barner() {
        //$data['path_delete'] = cms_url($this->name.'/delete');
        //$data['path_add'] = cms_url($this->name.'/form_add');
        //$data['path_edit'] = cms_url($this->name.'/form_edit');
        $data['path_list'] = cms_url($this->name.'/exportar');
        $data['mpag_content'] = $this->lista();
        $data['pag'] = 1;
        $this->session->set_userdata('page_'.$this->name, '1');
        return $this->buildajax('_'.$this->name, $data);
    }

    public function lista() {
        $obj = new  $this->model();
        $data['datos'] = $obj->get();
        $data['direct_form'] = $this->name.'/delete'; 
        return $this->buildajax($this->name.'/lista', $data);
    }
	
	public function exportar() {
		$obj = new  $this->model();
		$data = $obj->get();
        if ($obj->result_count() == 0) {
            $data = array();
        }
        // Load libreria
        $this->load->library('PHPExcel');
        // Propiedades del archivo excel
        $this->phpexcel->getProperties()
                ->setTitle("Usuarios registrados en el chat")
                ->setDescription("Listado de usuarios registrados en el chat de Clínica Rangel");
        // Setiar la solapa que queda actia al abrir el excel
        $this->phpexcel->setActiveSheetIndex(0);
        // Solapa excel para trabajar con PHP
        $sheet = $this->phpexcel->getActiveSheet();
        $sheet->setTitle("usuarios");
        $sheet->getColumnDimension('A')->setWidth(20);
		$sheet->setCellValue('A1', 'No.');
        $sheet->setCellValue('A1', 'Nombre');
        $sheet->setCellValue('B1', 'Email');
		$i = 2;
		if(count($data) > 0):
			foreach($data as $usuario) :
				$sheet->setCellValue('A'.$i, $usuario->user_id);
				$sheet->setCellValue('B'.$i, $usuario->nick);
				$sheet->setCellValue('C'.$i, $usuario->email);
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
}