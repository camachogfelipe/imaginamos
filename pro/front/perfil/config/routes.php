<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$regexp = '[a-zA-Z0-9.-_]+';

$route['(perfil)'] = 'mi_perfil';

$route['(perfil)/(audiciones|clasificados|build_a_band|directorios)'] = '$2/index';
$route['(perfil)/(editar|ajax|audiciones|clasificados|build_a_band|directorios|actions)/(:any)'] = '$2/$3';

// Rutas para el cargue de shows
$route["(perfil)/({$regexp})/(load_shows)"] = 'ajax/$3/$2';

// Rutas para las fotos y videos
$route['(perfil)/([a-zA-Z0-9.-_]+)/(fotos|videos)'] = 'album/$3/$2';


$route['(perfil)/([a-zA-Z0-9.-_]+)'] = 'index/$2';
$route['(perfil)/([a-zA-Z0-9.-_]+)/(:any)'] = '$3/$2';



/* End of file routes.php */
/* Location: ./application/config/routes.php */