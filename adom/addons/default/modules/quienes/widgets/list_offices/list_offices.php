<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Mostrar Próximos eventos
 * @author Jose Luis Fonseca
 */
class Widget_List_offices extends Widgets {

    /**
     * The translations for the widget title
     *
     * @var array
     */
    public $title = array(
        'en' => 'Lista de oficina',
        'es' => 'Offices list'
    );

    /**
     * The translations for the widget description
     *
     * @var array
     */
    public $description = array(
        'en' => 'Lista de oficina',
        'es' => 'Offices list'
    );

    /**
     * The author of the widget
     *
     * @var string
     */
    public $author = 'Eduard Russy';

    /**
     * The author's website.
     * 
     * @var string 
     */
    public $website = 'http://eduarrussy/';

    /**
     * The version of the widget
     *
     * @var string
     */
    public $version = '1.0.0';

    /**
     * Runs code and logic required to display the widget.
     */
    public function run() {
        $this->load->model('entities/offices_m');
        $q = $this->offices_m->get_all();
        return array('list' => $q);
    }

}