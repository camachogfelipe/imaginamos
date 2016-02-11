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
class Plugin_work_us extends Plugin
{
	/**
	 * Item List
	 * Usage:
	 *
	 * {{ work_us:items limit="5" order="asc" }}
	 *      {{ id }} {{ name }} {{ slug }}
	 * {{ /work_us:items }}
	 *
	 * @return	array
	 */
	function items()
	{
		$this->load->model('work_us/work_us_m');
		return $this->work_us_m->get_all();
	}
}

/* End of file plugin.php */