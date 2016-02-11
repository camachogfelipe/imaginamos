<?php

/*
 * @file               : Dbintimidad_videos.db.php
 * @brief              : Clase para la interaccion con la tabla intimidad_videos
 * @version            : 3.3
 * @ultima_modificacion: 2013-06-24
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbintimidad_videos
 * @brief: Clase para la interaccion con la tabla intimidad_videos
 */

class Dbintimidad_videos extends DbDAO {

    public $id = NULL;
    protected $video = NULL;

    public function setid($mData = NULL) {
        if ($mData === NULL) {
            $this->id = NULL;
        }
        $this->id = StripHtml($mData);
    }

    public function setvideo($mData = NULL) {
        if ($mData === NULL) {
            $this->video = NULL;
        }
        $this->video = StripHtml($mData);
    }

}

?>