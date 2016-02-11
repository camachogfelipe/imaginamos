<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 *
 * @author 		eduardrussy
 * @website		
 * @package 	
 * @subpackage 	
 * @copyright 	MIT
 */
class contact_m extends MY_Model {

	private $folder;

	public function __construct()
	{
		parent::__construct();
		$this->_table = 'contact';
		// $this->load->model('files/file_folders_m');
		// $this->load->library('files/files');
		// $this->folder = $this->file_folders_m->get_by('name', 'contact');
	}

	//create a new item
	public function create($input)
	{
		// $fileinput = Files::upload($this->folder->id, FALSE, 'fileinput');
		$to_insert = array(
			// 'fileinput' => json_encode($fileinput);
			'nombre' => $input['nombre'],
'empresa' => $input['empresa'],
'email' => $input['email'],
'celular' => $input['celular'],
'telefono' => $input['telefono'],
'pais' => $input['pais'],
'ciudad' => $input['ciudad'],
'comentario' => $input['comentario'],

		);

		return $this->db->insert('contact', $to_insert);
	}

	//edit a new item
	public function edit($id = 0, $input)
	{
		// $fileinput = Files::upload($this->folder->id, FALSE, 'fileinput');
		$to_insert = array(
			'nombre' => $input['nombre'],
'empresa' => $input['empresa'],
'email' => $input['email'],
'celular' => $input['celular'],
'telefono' => $input['telefono'],
'pais' => $input['pais'],
'ciudad' => $input['ciudad'],
'comentario' => $input['comentario'],

		);

		// if ($fileinput['status']) {
		// 	$to_insert['fileinput'] = json_encode($fileinput);
		// }

		return $this->db->where('id', $id)->update('contact', $to_insert);
	}
}
