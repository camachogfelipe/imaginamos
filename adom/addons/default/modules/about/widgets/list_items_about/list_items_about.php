<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Mostrar Próximos eventos
 * @author Jose Luis Fonseca
 */
class Widget_List_items_about extends Widgets {

    /**
     * The translations for the widget title
     *
     * @var array
     */
    public $title = array(
        'en' => 'Lista quienes somos',
        'es' => 'About list'
    );

    /**
     * The translations for the widget description
     *
     * @var array
     */
    public $description = array(
       'en' => 'Lista quienes somos',
       'es' => 'About list'
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
        $this->load->model('about/about_m');
        $q = $this->about_m->get_all_live();
        
        return array('list' => $q);
    }

}