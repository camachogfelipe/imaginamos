<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Mostrar Próximos eventos
 * @author Jose Luis Fonseca
 */
class Widget_List_properties_best extends Widgets {

    /**
     * The translations for the widget title
     *
     * @var array
     */
    public $title = array(
        'en' => 'Lista de inmuebles',
        'es' => 'properties list'
    );

    /**
     * The translations for the widget description
     *
     * @var array
     */
    public $description = array(
        'en' => 'Lista de inmuebles',
        'es' => 'properties list'
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
        $this->load->library("files/files");
        $params = array(
            'stream' => 'properties_web',
            'namespace' => 'properties',
            'limit' => 5
        );
        $q = $this->streams->entries->get_entries($params);

        for ($i = 0; $i < count($q['entries']); $i++) {

            $this->db->where('property_id', $q['entries'][$i]['id']);
            $result = $this->db->get('default_properties_web_files')->result();
            $image = Files::get_file($result[0]->file_id);
            $q['entries'][$i]['image'] = $image['data'];
        }      
        return array('list' => $q['entries']);
    }

}