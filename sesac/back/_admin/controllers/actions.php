<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author rigobcastro
 * @version 1.2
 */
class Actions extends Back_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function delete() {
        $table = $this->_get('table');
        $field = $this->_get('field');
        $value = $this->_get('value');
        $delete_file = $this->_get('delete_file');
        $delete_files = $this->_get('delete_files');

        $ok = $this->db->delete($table, array($field => $value));

        if (!$ok) {
            $this->set_alert('Error al eliminar el item.', 'error');
        } else {
            // Si eliminó y existe el delete file, ejecutar la eliminación fisica del archivo
            if (empty($delete_files) && !empty($delete_file)) {
                $delete_files = $delete_file;
            }

            if (!is_array($delete_files)) {
                $delete_files = array($delete_files);
            }


            if (!empty($delete_files)) {

                foreach ($delete_files as $_delete_file) {

                    if (!empty($_delete_file)) {

                        $file = realpath(UPLOADSFOLDER . DIRECTORY_SEPARATOR . $_delete_file);


                        if (file_exists($file)) {
                            // Armanado el thumb para su verificación y eliminado
                            $pathinfo = pathinfo($file);
                            if (!empty($pathinfo)) {
                                $thumb = $pathinfo['dirname'] . DS . $pathinfo['filename'] . '_thumb.' . $pathinfo['extension'];
                                if (file_exists($thumb)) {
                                    @unlink($thumb);
                                }
                            }

                            @unlink($file);
                        }
                    }
                }
            }
        }

        $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function delete_logic() {
        $ok = false;
        $modelo = $this->_get('modelo');
        $field = $this->_get('field');
        $value = $this->_get('value');
        $model = new $modelo;
        $model->where($field, $value)->get();
        if ($model->exists()) {
            $ok = $model->where($field, $value)->update('delete', '1');
        }
        if ($ok) {
            $this->set_alert_session('Proceso exitoso', 'success');
        } else {
            $this->set_alert_session('Ha ocurrido un error, intente nuevamente', 'error');
        }
        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function save_order($table, $field_order = 'order', $field_where = 'id') {
        $items = (array) $this->_get('item');
        $count = count($items);
        $position = 0;

        if (!empty($items)) {
            foreach ($items as $item) {
                if (@ $this->db->where($field_where, $item)->update($table, array($field_order => ++$position))) {
                    $count--;
                }
            }
        }

        return $this->render_json($count == 0);
    }

    // ----------------------------------------------------------------------

    public function change_pass() {
        $user = new User;
        $u = $user->get_by_id($this->session->userdata('user_id'));
        $ok = false;
        if (!$this->ACL->change_password($u->email, $this->_post('oldpass'), $this->_post('newpass'))) {
            $ok = true;
            $this->set_alert('Ha ocurrido un error<br>Asegurece que su contraseña actual es correcta', 'error');
        } else {
            $this->set_alert('Se ha actualizado la contraseña', 'success');
        }
        $this->_data['closeResetModal'] = true;
        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
}