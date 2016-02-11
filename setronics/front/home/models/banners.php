<?php

class Banners extends DataMapper {

    public $model = 'Banners';
    public $table = 'banners';
    public $has_one = array();
    public $has_many = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public function get_banner() {
        $model = clone $this;
        $model->get_where(array('tip_slide' => 1, 'orden' => 1, 'estado' => 1));
        $data_ban = array();
        foreach ($model as $k) {
            $data_ban [] = array(
                'id' => $k->id,
                'nombre' => $k->nombre,
                'titulo' => $k->titulo,
                'subtitulo' => $k->subtitulo,
                'texto' => $k->texto,
                'imagen' => $k->imagen,
                'url_enlace' => $k->url_enlace,
                'posicion' => $k->posicion,
            );
        }
        return $data_ban;
    }

}

