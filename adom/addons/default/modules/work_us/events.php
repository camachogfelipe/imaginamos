<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * work_us Events Class
 *
 * @author      Eduard Russy
 * @website     imaginamos.com
 * @package     
 * @subpackage  
 * @copyright   MIT
 */
class Events_work_us {

    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();

        //register the public_controller event
        Events::register('public_controller', array($this, 'run'));

		//register a second event that can be called any time.
		// To execute the "run" method below you would use: Events::trigger('work_us_event');
		// in any php file within PyroCMS, even another module.
		Events::register('work_us_event', array($this, 'run'));
    }

    public function run()
    {
        $this->ci->load->model('work_us/work_us_m');

        // we're fetching this data on each front-end load. You'd probably want to do something with it IRL
        $this->ci->work_us_m->limit(5)->get_all();
    }

}
/* End of file events.php */