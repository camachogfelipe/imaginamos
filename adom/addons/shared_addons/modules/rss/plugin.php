<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	Rss Module
 */
class Plugin_Rss extends Plugin {

    /**
     * Item List
     * Usage:
     * 
     * {{ sample:items limit="5" order="asc" }}
     *      {{ id }} {{ name }} {{ slug }}
     * {{ /sample:items }}
     *
     * @return	array
     */
    function view_rss() {
        $this->load->model('rss_m');
        $this->load->library('simplepie');
        $this->lang->load('rss');
        //echo 'pajaro';
        $rss = $this->rss_m->get_all();
        $rss_items =  array();
        $i=0;
        foreach ($rss as $r) {
            $this->simplepie->set_cache_location($this->config->item('simplepie_cache_dir'));
            $this->simplepie->set_feed_url($r->url);
            // Fire it up
            $this->simplepie->init();
            $this->simplepie->handle_content_type();
            $rss_items[$i]['nameRss']=$r->name;
            $rss_items[$i]['itemsRss']=$this->simplepie->get_items(0, 5);
            $i++;
        }
        $view = $this->module_view('rss','rss_front', array('rss_items' => $rss_items),false);
        return $view;
    }

}

/* End of file plugin.php */