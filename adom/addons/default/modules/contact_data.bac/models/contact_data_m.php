<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 *
 * @author 		Eduard Russy
 * @website		
 * @package 	
 * @subpackage 	
 * @copyright 	MIT
 */
class contact_data_m extends MY_Model {

	private $folder;

	public function __construct()
	{
		parent::__construct();
		$this->_table = 'contact_data';
		// $this->load->model('files/file_folders_m');
		// $this->load->library('files/files');
		// $this->folder = $this->file_folders_m->get_by('name', 'contact_data');
	}

	//create a new item
	public function create($input)
	{
		// $fileinput = Files::upload($this->folder->id, FALSE, 'fileinput');
		$to_insert = array(
			// 'fileinput' => json_encode($fileinput);
			'direccion' => $input['direccion'],
			'barrio' => $input['barrio'],
			'ciudad' => $input['ciudad'],
			'telefono' => $input['telefono'],
			'tel_cel' => $input['tel_cel'],
			'correo' => $input['correo'],
			'map_url' => $input['map_url'],

		);

		return $this->db->insert('contact_data', $to_insert);
	}

	//edit a new item
	public function edit($id = 0, $input)
	{
		// $fileinput = Files::upload($this->folder->id, FALSE, 'fileinput');
		$to_insert = array(
			'direccion' => $input['direccion'],
			'barrio' => $input['barrio'],
			'ciudad' => $input['ciudad'],
			'telefono' => $input['telefono'],
			'tel_cel' => $input['tel_cel'],
			'correo' => $input['correo'],
			'map_url' => $input['map_url'],

		);

		// if ($fileinput['status']) {
		// 	$to_insert['fileinput'] = json_encode($fileinput);
		// }

		return $this->db->where('id', $id)->update('contact_data', $to_insert);
	}
}
