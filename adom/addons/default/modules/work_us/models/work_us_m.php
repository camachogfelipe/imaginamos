<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Modulo para el formulario de trabaje con nosotros
 *
 * @author 		Eduard Russy
 * @website		imaginamos.com
 * @package 	
 * @subpackage 	
 * @copyright 	MIT
 */
class work_us_m extends MY_Model {

	private $folder;

	public function __construct()
	{
		parent::__construct();
		$this->_table = 'work_us';
		// $this->load->model('files/file_folders_m');
		// $this->load->library('files/files');
		// $this->folder = $this->file_folders_m->get_by('name', 'work_us');
	}

	//create a new item
	public function create($input)
	{
		// $fileinput = Files::upload($this->folder->id, FALSE, 'fileinput');
		$to_insert = array(
			// 'fileinput' => json_encode($fileinput);
			'name' => $input['name'],
'last_name' => $input['last_name'],
'date_birth' => $input['date_birth'],
'document_type' => $input['document_type'],
'document' => $input['document'],
'address' => $input['address'],
'tel' => $input['tel'],
'tel_mobile' => $input['tel_mobile'],
'country_id' => $input['country_id'],
'city_id' => $input['city_id'],
'neighborhood' => $input['neighborhood'],
'email' => $input['email'],
'charge_id' => $input['charge_id'],
'schooling_id' => $input['schooling_id'],
'is_student' => $input['is_student'],
'career' => $input['career'],
'semester' => $input['semester'],
'university' => $input['university'],
'company_name' => $input['company_name'],
'company_tel' => $input['company_tel'],
'company_career' => $input['company_career'],
'company_chief' => $input['company_chief'],
'company_admission_date' => $input['company_admission_date'],
'company_retirement_date' => $input['company_retirement_date'],
'company_reason_leaving' => $input['company_reason_leaving'],
'file' => $input['file'],

		);

		return $this->db->insert('work_us', $to_insert);
	}

	//edit a new item
	public function edit($id = 0, $input)
	{
		// $fileinput = Files::upload($this->folder->id, FALSE, 'fileinput');
		$to_insert = array(
			'name' => $input['name'],
'last_name' => $input['last_name'],
'date_birth' => $input['date_birth'],
'document_type' => $input['document_type'],
'document' => $input['document'],
'address' => $input['address'],
'tel' => $input['tel'],
'tel_mobile' => $input['tel_mobile'],
'country_id' => $input['country_id'],
'city_id' => $input['city_id'],
'neighborhood' => $input['neighborhood'],
'email' => $input['email'],
'charge_id' => $input['charge_id'],
'schooling_id' => $input['schooling_id'],
'is_student' => $input['is_student'],
'career' => $input['career'],
'semester' => $input['semester'],
'university' => $input['university'],
'company_name' => $input['company_name'],
'company_tel' => $input['company_tel'],
'company_career' => $input['company_career'],
'company_chief' => $input['company_chief'],
'company_admission_date' => $input['company_admission_date'],
'company_retirement_date' => $input['company_retirement_date'],
'company_reason_leaving' => $input['company_reason_leaving'],
'file' => $input['file'],

		);

		// if ($fileinput['status']) {
		// 	$to_insert['fileinput'] = json_encode($fileinput);
		// }

		return $this->db->where('id', $id)->update('work_us', $to_insert);
	}
}
