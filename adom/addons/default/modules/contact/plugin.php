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
class Plugin_contact extends Plugin
{
	/**
	 * Item List
	 * Usage:
	 *
	 * {{ contact:items limit="5" order="asc" }}
	 *      {{ id }} {{ name }} {{ slug }}
	 * {{ /contact:items }}
	 *
	 * @return	array
	 */
	function items()
	{
		$this->load->model('contact/contact_m');
		return $this->contact_m->get_all();
	}
}

/* End of file plugin.php */