<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author rigobcastro
 */
class Ajax extends Front_Controller {

    protected $user_area = true;

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    /**
     * Save song url.
     * 
     * Guarda las URLs de las canciones
     * de soundcloud para el usuario
     * 
     * @return type
     */
    public function save_song_url() {
        $url = $this->_get('url', true);

        $users_song = new \Users_song;
        $user = new \User;

        $user->get_current();

        $users_song->url = $url;
        $users_song->created_on = datetime_now();

        $ok = $users_song->save_as_new($user);
        if ($ok) {
            $this->_data['url'] = $url;
        } else {
            $this->set_alert($users_song->error->string, 'error');
        }

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    /**
     * Delete songs url.
     * 
     * Borra las URLS de las canciones
     * de souncloud para el usuario
     * 
     * @return type
     */
    public function delete_songs_url() {
        $url = $this->_get('url', true);
        $ok = false;

        $user = new \User;
        $users_song = new \Users_song;
        $user->get_current();

        $users_song->where('url', $url)->where_related($user);

        $users_song->get();

        if ($users_song->exists()) {
            $ok = $users_song->delete();
        }

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function load_shows($inshaka_url = null) {
        $user = new \User;
        $user->get_by_inshaka_url($inshaka_url);
        
        if( ! $user->exists()){
           return '<strong>¡Error en la aplicación!</strong>';
        }

        $this->set_datos($user->users_show->get());
        

        return parent::view('mi_shaka_perfil/shows', false);
    }

    // ----------------------------------------------------------------------

    public function save_show($show_id = null) {
        $user = new \User;
        $user->get_current();

        $users_show = new \Users_show($show_id);

        $users_show->from_array($this->_get(null));

        $ok = $users_show->save($user);
        
        
       

        if (!$ok) {
            $this->set_alert($users_show->error->string, 'error');
        }

        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function delete_show($show_id = null) {
        $users_show = new \Users_show($show_id);

        $users_show->delete();
    }

    // ----------------------------------------------------------------------

    public function create_comment() {
        $user_id = base64_decode($this->_post('ui')); # ui = User Id on form

        $datos = new \Comment;
        $user = new \User($user_id);

        $datos->from_array($this->_post(null));
        $datos->user_creator_id = $this->userinfo->id;
        $datos->created_on = datetime_now();
        $ok = $datos->save();

        if (true === $ok) {
            if ($user->save_comment($datos)) {
                $this->set_alert('¡Gracias por comentar!');
            }
        } else {
            $this->set_alert($datos->errors->string, 'error');
        }

        $this->render_json($ok);
    }

    // ----------------------------------------------------------------------

    public function add_video() {
        $video_url = $this->_post('video_url');

        var_dump(is_youtube_url($video_url));
        var_dump(is_vimeo_url($video_url));
    }

    // ----------------------------------------------------------------------
    
    public function update_status() {
        
        $status = $this->_post('status');
        $user = new \User();
        
        $user->get_current();
        
       
       
        $user->status = $status;
        
        $ok = $user->where('id', $this->ACL->user_id())->update('status', $status);
        
        return $this->render_json($ok);
    }

    // ----------------------------------------------------------------------
}