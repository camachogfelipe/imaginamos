<?php

/**
 * Description of cms_aliado
 *
 * @author Andres Felipe Lopez
 */
require_once 'app/libraries/reader.php';

class _itinerario extends Back_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cms_itinerario_model');
    }

    function index() {
        $this->_data['mensaje'] = $this->get_message($this->uri->segment(4));
        $this->_data['itinerario'] = $this->cms_itinerario_model->getAll();
        $this->build();
    }

    function edit() {
        $this->_data['itinerario'] = $this->cms_itinerario_model->getItinerario($this->uri->segment(4));
        $this->build('edit');
    }

    function add() {
        $this->build('add');
    }

    function addCsv() {
        $this->build('import');
    }

    function delete() {
        $this->cms_itinerario_model->deleteItinerario($this->uri->segment(4));
        redirect('cms/itinerario/index/1', 'refresh');
    }

    function guardarItinerario() {
     /*   $this->load->library('form_validation');
        $this->form_validation->set_rules('carrier', 'Carrier', 'trim');
        $this->form_validation->set_rules('vessel', 'Vessel', 'trim|required');
        $this->form_validation->set_rules('voyage', 'Voyage', 'trim|required');
        $this->form_validation->set_rules('port_of_loading', 'Port_of_loading', 'trim|required');
        $this->form_validation->set_rules('port_of_discharge', 'Port_of_discharge', 'trim|required');
        $this->form_validation->set_rules('cut_off', 'Cut_off', 'trim|required');
		$this->form_validation->set_rules('hora', 'Hora', 'trim|required');
        $this->form_validation->set_rules('etd', 'Etd', 'trim|required');
        $this->form_validation->set_rules('eta', 'Eta', 'trim|required');
        $this->form_validation->set_rules('tt', 'Tt', 'trim|required');
        $this->form_validation->set_rules('requeriments', 'Requeriments', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->add();
            return;
        }*/

        $isSave = $this->cms_itinerario_model->addItinerario(NULL);

        if ($isSave) {
            redirect('cms/itinerario/index/1', 'refresh');
        }
    }

    function editarItinerario() {
       /*
        $this->load->library('form_validation');

        $this->form_validation->set_rules('carrier', 'Carrier', 'trim|required');
        $this->form_validation->set_rules('vessel', 'Vessel', 'trim|required');
        $this->form_validation->set_rules('voyage', 'Voyage', 'trim|required');
        $this->form_validation->set_rules('port_of_loading', 'Port_of_loading', 'trim|required');
        $this->form_validation->set_rules('port_of_discharge', 'Port_of_discharge', 'trim|required');
        $this->form_validation->set_rules('cut_off', 'Cut_off', 'trim|required');
		$this->form_validation->set_rules('hora', 'Hora', 'trim|required');
        $this->form_validation->set_rules('etd', 'Etd', 'trim|required');
        $this->form_validation->set_rules('eta', 'Eta', 'trim|required');
        $this->form_validation->set_rules('tt', 'Tt', 'trim|required');
        $this->form_validation->set_rules('requeriments', 'Requeriments', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit();
            return;
        }*/
        $this->cms_itinerario_model->editItinerario($this->uri->segment(4), NULL);
        redirect('cms/itinerario/index/1', 'refresh');
    }

    function importarItinerario() {
        try {
            $this->load->library('form_validation');
            $sourceBig = './uploads/front/itinerario/';
            $nameImagenForm = 'archivo';
            $uploadData = $this->uploadImage($nameImagenForm, $sourceBig);

            if ($uploadData == false) {
                $this->addCsv();
                return;
            }

            if ($uploadData == "") {
                redirect('cms/itinerario/index/1', 'refresh');
            }
            $type = 0; 
            if(is_numeric($this->input->post('type_import'))){
                 $this->db->where('type_import',1); 
                 $type = 1;

            }else{
                 $this->db->where('type_import',0);
                 $type = 0;
            }
 
            //echo $type; 
            //exit();
            $this->db->delete('cms_itinerario');
            
            
            $data = new Spreadsheet_Excel_Reader();
            $data->read($sourceBig . $uploadData['file_name']);
            if ($data->sheets > 0) {
                for ($i = 2; $i <= count($data->sheets[0]['cells']); ++$i) {
						$carrier = !empty($data->sheets[0]['cells'][$i][1])?$data->sheets[0]['cells'][$i][1]:"";
						$vessel = !empty($data->sheets[0]['cells'][$i][2])?$data->sheets[0]['cells'][$i][2]:"";
						$voyage = !empty($data->sheets[0]['cells'][$i][3])?$data->sheets[0]['cells'][$i][3]:"";
						$portOfLoading = !empty($data->sheets[0]['cells'][$i][4])?$data->sheets[0]['cells'][$i][4]:"";
						$portOfDischarge = !empty($data->sheets[0]['cells'][$i][5])?$data->sheets[0]['cells'][$i][5]:"";
						$cutOff = !empty($data->sheets[0]['cells'][$i][6])?$data->sheets[0]['cells'][$i][6]:"";
						$Hora = !empty($data->sheets[0]['cells'][$i][7])?$data->sheets[0]['cells'][$i][7]:"";
						$etd = !empty($data->sheets[0]['cells'][$i][8])?$data->sheets[0]['cells'][$i][8]:"";
						$eta = !empty($data->sheets[0]['cells'][$i][9])?$data->sheets[0]['cells'][$i][9]:"";
						$ti = !empty($data->sheets[0]['cells'][$i][10])?$data->sheets[0]['cells'][$i][10]:"";
						$requeriments = !empty($data->sheets[0]['cells'][$i][11])?$data->sheets[0]['cells'][$i][11]:"";
	
						$datos = array(
							'carrier' => utf8_encode($carrier),
							'vessel' => utf8_encode($vessel),
							'voyage' => utf8_encode($voyage),
							'port_of_loading' => utf8_encode($portOfLoading),
							'port_of_discharge' => utf8_encode($portOfDischarge),
							'cut_off' => $cutOff,
							'hora' => $Hora,
							'etd' => $etd,
							'eta' => $eta,
							'tt' => $ti,
							'requeriments' => utf8_encode($requeriments),
							'type_import' => $type,
						);
						
						$this->db->insert('cms_itinerario', $datos);
				
                }
            } else {
                redirect('cms/itinerario/index/0', 'refresh');
            }
        } catch (Exception $e) {
            show_error("Error importando los datos desde el archivo \nfavor revise que no le falte una columna en el archivo");
        }
        redirect('cms/itinerario/index/1', 'refresh');
    }

    function uploadImage($imagen, $source) {
        $img = $_FILES[$imagen]['name'];

        if (!empty($img)) {
            $config['upload_path'] = $source;
            $config['allowed_types'] = 'xls';
            $config['max_size'] = '20000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($imagen)) {
                $this->_data['Error'] = $this->upload->display_errors();
                $this->form_validation->set_message('type_image', $this->upload->display_errors());
                $this->form_validation->set_rules('archivo', 'Archivo', 'type_image');
                $this->form_validation->run();
                return false;
            } else {
                $uploadData = $this->upload->data();
                return $uploadData;
            }
        } else {
            $this->form_validation->set_rules('archivo', 'Archivo', 'required');
            $this->form_validation->run();
            return false;
        }

        return "";
    }

}

?>
