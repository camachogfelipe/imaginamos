<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Clasificados extends Front_Controller {

  protected $user_area = true;
  private $_title = 'Clasificados', $_datos = null;

  public function __construct() {
    parent::__construct();

    $this->_datos = new Clasificado;

    if ($this->_get('s')) {
      $match = trim($this->_get('s', true));
      if (!empty($match)) {
        $like = array('titulo' => $match, 'descripcion' => $match, 'ciudad' => $match, 'var' => $match);
        $this->_datos->or_like($like);
      }
    }

    $categorias = new Clasificados_categoria;
    $this->_data['categorias'] = $categorias->get_for_select();
  }

  // ----------------------------------------------------------------------

  public function index($seccion = 'categorias') {

    if ($seccion == 'categorias') {
      $categorias = new Clasificados_categoria;
      $this->_data['categorias'] = $categorias->get();
    }

    $this->set_datos($this->_datos);

    $this->_data['content'] = parent::view($seccion);
    $this->_data['seccion'] = $seccion;

    $this->set_title($this->_title);

    return $this->build();
  }

  // ----------------------------------------------------------------------

  public function categoria($var = null, $page = 1, $rows = 10) {
    $this->_data['paginator_url'] = site_url('clasificados/categoria/' . $var . '/pagina/%d/');

    $categorias = new Clasificados_categoria;
    $categorias->get_by_var($var);

    if (!$categorias->exists()) {
      return show_404();
    }



    $this->_datos->where_related_clasificados_categoria('var', $var)->get_paged($page, $rows);


    $this->_title = 'Anuncios de la categoría: ' . $categorias->titulo;
    return $this->index('detalle_categoria');
  }

  // ----------------------------------------------------------------------

  public function buscador($page = 1, $rows = 10) {
    $paginator_url = site_url('clasificados/buscador/pagina/%d/');

    $this->_data['paginator_url'] = $_SERVER['QUERY_STRING'] ? $paginator_url . '?' . $_SERVER['QUERY_STRING'] : $paginator_url;



    $this->_datos->get_paged($page, $rows);

    $this->_title = 'Buscador de clasificados';
    return $this->index('buscador');
  }

  // ----------------------------------------------------------------------

  public function crear_anuncio() {
    $this->_title = 'Crear un anuncio de clasificado';
    $this->_data['edit_mode'] = false;
    return $this->index('crear_anuncios');
  }

  // ----------------------------------------------------------------------

  public function editar($id = null) {
    $this->_datos->get_by_id($id);

    if (!$this->_datos->exists()) {
      return show_404();
    }

    $this->_data['edit_mode'] = true;
    return $this->index('crear_anuncio');
  }

  // ----------------------------------------------------------------------

  public function save($id = null) {

    $datos = & $this->_datos;


    if (!empty($id)) {
      $datos->get_by_id($id);

      if (!$datos->exists()) {
        return show_404();
      }
    }

    $edit_mode = (bool) $this->_post('edit_mode');

    if ($this->_post(null)) {

      $datos->from_array($this->_post(null));

      $user = new User;
      $user->get_current();

      $datos->created_on = datetime_now();

      $ok = $datos->save($user);


      if (!$ok) {
        $this->set_alert($datos->error->string, 'error');
      } else {
        $datos->var = seo_name($datos->titulo);
        $datos->save();

        // Si se sube una imagen, ejecutar el upload
        // Si no, lanzar el mensaje de success
        if (!empty($_FILES['imagen']['name'])) {

          $path = UPLOADSFOLDER . 'clasificados';

          if (!is_dir($path)) {
            @mkdir($path);
            @chmod($path, 0777);
          }

          $config['upload_path'] = $path;
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $config['encrypt_name'] = true;

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('imagen')) {
            $this->set_alert('Se guardo la información pero se presentaron los siguientes errores subiendo la imagen de perfil: ' . $this->upload->display_errors(), 'error');
          } else {

            // Borrando imagen actual
            if (!empty($datos->imagen)) {
              @unlink(UPLOADSFOLDER . $datos->imagen);
            }

            // Limpiando el path del logo para guardarlo
            $datos_image = $this->upload->data();
            $path = str_replace(UPLOADSFOLDER, '', $datos_image['full_path']);

            $config['source_image'] = $datos_image['full_path'];
            $config['master_dim'] = 'width';
            $config['new_image'] = $datos_image['full_path'];
            $config['width'] = 200;
            $config['height'] = 280;


            $this->load->library('image_lib', $config);

            if (!$this->image_lib->resize()) {
              $this->set_alert('Información guardada pero hubo un error al remasterizar la imagen. Verifique que la imagen tenga las medidas recomendadas', 'error');
            } else {
              $datos->imagen = $path;
              if ($datos->save()) {
                $this->set_alert('Información e imagen de guardados correctamente.', 'success');
              } else {
                $this->set_alert('Información guardada pero hubo un error al guardar la imagen.', 'error');
              }
            }


            if (!$edit_mode) {
              return redirect('perfil/clasificados/');
            }
          }
        } else {
          $this->set_alert('Información guardada correctamente.', 'success');
        }
      }
    }

    if ($edit_mode) {
      return $this->editar($id);
    }


    return $this->crear_anuncio();
  }

  // ----------------------------------------------------------------------

  public function detalle($id) {

    $this->_datos->get_by_id($id);

    if (!$this->_datos->exists()) {
      return show_404();
    }

    $fecha_cierre = new DateTime($this->_datos->fecha_cierre);
    $hoy = new DateTime('now');

    $this->_data['can_apply'] = $hoy <= $fecha_cierre;
    $this->_data['is_owner'] = $this->userinfo->username == $this->_datos->user->username;

    $this->set_datos($this->_datos)->set_title('Clasificado: ' . $this->_datos->titulo);

    return $this->build('detalles');
  }

  // ----------------------------------------------------------------------

  public function aplicar() {
    $clasificado_id = (int) $this->_post('clasificado_id');
    $presentacion = $this->_post('presentacion') ? (string) nl2br($this->_post('presentacion', true)) : null;

    $this->_datos->get_by_id($clasificado_id);

    if (!$this->_datos->exists() OR empty($clasificado_id)) {
      return show_404();
    }

    $audicion_aplicacion = new Clasificados_aplicacion;

    $audicion_aplicacion->presentacion = $presentacion;
    $audicion_aplicacion->created_on = datetime_now();


    if ($audicion_aplicacion->save($this->_datos)) {
      if ($audicion_aplicacion->save_user($this->_datos->user)) {
        if ($this->_send_email($this->_datos->user, $presentacion)) {
          $message = '¡Gracias por aplicar a este clasificado!';
        } else {
          $message = 'Has aplicado correctamente pero hubo un error al informar al creador de la misma.';
        }
        $this->_datos->total_aplicaciones = $this->_datos->total_aplicaciones++;
        $this->_datos->save();
      }
    }

    $this->_data['message'] = $message;

    return $this->set_title('Aplicar al clasificado: ' . $this->_datos->titulo)->build('aplicacion_clasificado');
  }

  // ----------------------------------------------------------------------

  public function _send_email($user_owner, $presentacion = null) {
    $user_apply = new User;
    $user_apply->get_current();

    $this->load->library('email');

    $this->email->clear();

    $this->_data = array(
        'user_owner' => $user_owner,
        'user_apply' => $user_apply,
        'presentacion' => $presentacion,
        'datos' => $this->_datos,
        'urls' => $this->urls
    );

    $html = parent::view('emails/aplicar');

    $this->email->from(SITEEMAIL, SITENAME);
    $this->email->to($user_owner->email);

    $this->email->subject($user_apply->username . ' ha aplicado al clasificado: ' . $this->_datos->titulo);
    $this->email->message($html);


    return $this->email->send();
  }

}