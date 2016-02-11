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
class Plugin_contact_data extends Plugin
{
	/**
	 * Item List
	 * Usage:
	 *
	 * {{ contact_data:items limit="5" order="asc" }}
	 *      {{ id }} {{ name }} {{ slug }}
	 * {{ /contact_data:items }}
	 *
	 * @return	array
	 */
	function items()
	{
		$this->load->model('contact_data/contact_data_m');
		return $this->contact_data_m->get_all();
	}
}

/* End of file plugin.php */