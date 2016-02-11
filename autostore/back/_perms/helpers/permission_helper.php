<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

if (!function_exists('has_perm')) {

    /**
     * Capa ALC para validar si tiene el permiso descrito sobre el area.
     * 
     * @param string $perm
     * <p> Tipo <i>permiso.crud</i></p>
     * @param boolean $show_error
     * <p> Mostrar error 503, por defecto <i>false</i>.</p>
     * @param string $message
     * <p> Mensaje de error en caso de que se desee mostrar el error.</p>
     * @return function/boolean
     */
    function has_perm($perm = null, $show_error = false, $message = 'Permisos insuficientes para esta secci&oacuten.') {
        $_ci = & get_instance();
        $_ci->load->model('perms/permission');

        if ($_ci->ion_auth->is_admin()) {
            return true;
        }

        $permission = new \Permission;
        $check = $permission->has($perm);

        if ($show_error && !$check) {
            return show_error($message, 403, 'Error de acceso al sistema');
        }

        return $check;
    }

}