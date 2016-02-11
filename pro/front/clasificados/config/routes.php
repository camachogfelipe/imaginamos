<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');




$route['(clasificados)/(buscador)/(pagina)/(:any)'] = 'buscador/$4';
$route['(clasificados)/(categoria)/(:any)/(pagina)/(:any)'] = 'categoria/$3/$5';



/* End of file routes.php */
/* Location: ./application/config/routes.php */