<?php

/**
 * @author Felipe Camacho
 */
class _newsletter extends Back_Controller {

  protected $admin_area = true;
  public $model = 'newsletter';
  public $name = "newsletter";

  public function __construct() {
    parent::__construct();
  }

  // ----------------------------------------------------------------------

  public function index() {
    $data['pag'] = $this->session->userdata('page_' . $this->name);
    $this->session->set_userdata('page_' . $this->name, '1');
    $data['title_page'] = "Newsletter";
    $data['pag'] = 1;
    $data['breadcrum'] = array("Newsletter");
    $data['pag_content'] = $this->newsletter();
    $data['pag_content_title'] = ucwords(str_replace("_", " ", $this->model));
    return $this->build('_index', $data);
  }

  public function newsletter() {
    $data['path_delete'] = cms_url($this->name . '/delete');
    $data['path_add'] = cms_url($this->name . '/form_add');
    $data['path_edit'] = cms_url($this->name . '/form_edit');
    $data['path_list'] = cms_url($this->name . '/exportar');
    $data['mpag_content'] = $this->lista();
    $data['pag'] = 1;
    $this->session->set_userdata('page_' . $this->name, '1');
    return $this->buildajax('_' . $this->name, $data);
  }

  public function form_edit() {
    
  }

  public function form_add() {
    
  }

  public function lista() {
    $obj = new $this->model();
    $data['datos'] = $obj->get();
    $data['direct_form'] = $this->name . '/delete';
    return $this->buildajax($this->name . '/lista', $data);
  }

  public function exportar() {
    $obj = new $this->model();
    $data['datos'] = $obj->get();
    if ($data['datos']->result_count() > 0) :
      $this->load->library("PHPExcel");
      if (!isset($PHPExcel))
        $PHPExcel = new PHPExcel();
      // Set document properties
      $PHPExcel->getProperties()->setCreator("NEWSLETTER")
              ->setTitle("LISTA DE NEWSLETTER");
      // Add some data
      $PHPExcel->setActiveSheetIndex(0);
      $columnas = array("No.", "NOMBRE", "EMAIL");
      $abc = array("A", "B", "C");
      $x = 0;
      foreach ($columnas as $columna) :
        $PHPExcel->getActiveSheet()->setCellValue($abc[$x] . "1", $columna);
        $x++;
      endforeach;
      $y = 2;
      $x = 1;
      foreach ($data['datos']->all as $dato) :
        $PHPExcel->getActiveSheet()->setCellValue("A" . $y, $x);
        $PHPExcel->getActiveSheet()->setCellValue("B" . $y, $dato->cms_nombre);
        $PHPExcel->getActiveSheet()->setCellValue("C" . $y, $dato->cms_email);
        $x++;
        $y++;
      endforeach;
      $nombre = "newsletter_".date("Y-m-d_h-m-a");
      //header('Cache-Control: max-age=0');
      $objWriter = PHPExcel_IOFactory::createWriter($PHPExcel, 'Excel2007');
      $objWriter->save("./uploads/" . $nombre . ".xlsx");
      header('Content-Description: File Transfer');
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment;filename="' . $nombre . ".xlsx" . '"');
      ob_clean();
      $objWriter->save("php://output");
    endif;
    return $this->build($this->name . '/lista', $data);
  }

  public function add() {
    
  }

  public function delete() {
    $error = false;
    $obj = new $this->model();
    $obj->get_by_id($this->_post('value'));
    $msg = "";
    if ($obj->exists()) {
      $id_file = $obj->imagen_id;
      if (!$obj->delete()) {
        $error = true;
        $msg = $obj->error->string;
      }
      //$this->deleteImg($id_file);
    } else {
      $error = true;
      $msg = "No existe item...!";
    }
    if ($error)
      $this->set_alert('Error al eliminar datos' . ', ' . $msg, 'error');
    else {
      $this->set_alert("Datos eliminados con éxito...!", 'info');
    }
    return $this->render_json(!$error);
  }

}
