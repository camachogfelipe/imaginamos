<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['(directorio)/(anuncio)/(:any)'] = 'anuncio/index/$3';
$route['(directorio)/(categoria)/(:any)'] = 'categoria/index/$3';


/* End of file routes.php */
