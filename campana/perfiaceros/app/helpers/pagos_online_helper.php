<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


if (!function_exists('get_data_pol')) {

    function get_data_for_pol($config, $data = array()) {
        $data = array(
            'url' => 'https://gateway2.pagosonline.net/apps/gateway/index.html',
            'usuarioId' => $config['usuarioid_pol'],
            'descripcion' => $data['descripcion'],
            'refVenta' => $data['refVenta'],
            'moneda' => $config['moneda_pol'],
            'firma' => gen_firma_pol($config, $data['refVenta'], $data['valor']),
            'emailComprador' => (!empty($data['emailComprador']) ? $data['emailComprador'] : null),
            'url_respuesta' => (!empty($data['url_respuesta']) ? site_url(sprintf($config['url_respuesta_format'], $data['url_respuesta'])) : null),
            'url_confirmacion' => (!empty($data['url_confirmacion']) ? site_url(sprintf($config['url_confirmacion_format'], $data['url_confirmacion'])) : null),
            'prueba' => $config['prueba_pol']
        );

        return $data;
    }

}


if (!function_exists('gen_firma_pol')) {

    function gen_firma_pol($config, $reference, $total) {
        $ci = & get_instance();
        $config = $ci->load->config('pagos_online', true);

        return md5(sprintf($config['firma_format_pol'], $config['llave_pol'], $config['usuarioid_pol'], $reference, floatval($total), $config['moneda_pol']));
    }

}


if (!function_exists('get_estado_transaccion')) {

    function get_estado_transaccion(&$datos_pol) {
        $estado = $datos_pol['mensaje'];
        $estado_var = 'desconocido';

        if ($datos_pol['estado_pol'] == 6 && $datos_pol['codigo_respuesta_pol'] == 5) {
            $estado = "Transacci&oacute;n fallida";
            $estado_var = 'fallida';
        } else if ($datos_pol['estado_pol'] == 6 && $datos_pol['codigo_respuesta_pol'] == 4) {
            $estado = "Transacci&oacute;n rechazada";
            $estado_var = 'rechazada';
        } else if ($datos_pol['estado_pol'] == 12 && $datos_pol['codigo_respuesta_pol'] == 9994) {
            $estado = "Pendiente, Por favor revisar si el d&eacute;bito fue realizado en el Banco";
            $estado_var = 'pendiente';
        } else if ($datos_pol['estado_pol'] == 4 && $datos_pol['codigo_respuesta_pol'] == 1) {
            $estado = "Transacci&oacute;n aprobada";
            $estado_var = 'aprobada';
        }

        $datos_pol['estado_transaccion'] = $estado;
        $datos_pol['estado_transaccion_var'] = $estado_var;
        
        return $datos_pol;
    }

}
