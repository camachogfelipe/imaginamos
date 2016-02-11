<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| 	www.your-site.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://www.codeigniter.com/user_guide/general/routing.html
*/

// front-end
$route['entities(/:num)?']			= 'sample/index$1';

//Admin
$route['entities/admin/cities(/:any)?'] = 'admin_cities$1';
$route['entities/admin/buildings(/:any)?'] = 'admin_buildings$1';
$route['entities/admin/offices(/:any)?'] = 'admin_offices$1';
$route['entities/admin/areas(/:any)?'] = 'admin_areas$1';