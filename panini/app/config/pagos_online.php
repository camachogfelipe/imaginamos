<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Constantesde uso
$config['url_pol'] = "https://gateway2.pagosonline.net/apps/gateway/index.html";
$config['firma_format_pol'] = "%s~%d~%s~%d~%s";
$config['llave_pol'] = "13b2f460212";
$config['usuarioid_pol'] = 94383;
$config['moneda_pol'] = "COP";


$config['prueba_pol'] = 1;
$config['url_respuesta_format'] = 'pagos/respuesta/%s';
$config['url_confirmacion_format'] = 'pagos/confirmacion/%s';