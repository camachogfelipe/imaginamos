<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "site";
$route['404_override'] = '';
$route['(index)'] = 'site/index';
$route['(quienes_somos)'] = 'site/quienes';
$route['(filtrocat)'] = 'site/filtrocat';
$route['(products)'] = 'site/productos';
$route['productos_sub/(:num)'] = 'site/productos_sub/$1';
$route['productos_sub_sub/(:num)'] = 'site/productos_sub_sub/$1';
$route['productos_detalle/(:num)'] = 'site/productos_detalle/$1';
//$route['filtrocat/(:num)/(:num)'] = 'site/filtrocat/$1/$1';
$route['(suppliers)'] = 'site/suppliers';
$route['(news)'] = 'site/novedades';
$route['(productosdia)'] = 'site/productosdia';
$route['(contactenos)'] = 'site/contactenos';
$route['(contacto2)'] = 'site/contacto2';
$route['(resultados)'] = 'site/resultados';
$route['(productos_busqueda)'] = 'site/resultadosfiltro';
$route['(cotizacion)'] = 'site/cotizacion';
$route['(categorias_page)'] = 'site/categorias_page';
$route['(subcategorias_page)'] = 'site/subcategorias_page';
$route['(productos_page)'] = 'site/productos_page';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
