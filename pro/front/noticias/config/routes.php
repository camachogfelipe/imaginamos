<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['(noticias)'] = 'noticias/index';
$route['(noticias)/(index)'] = 'noticias/index';
$route['(noticias)/(:any)'] = 'noticias/ver/$2';



/* End of file routes.php */
/* Location: ./application/config/routes.php */