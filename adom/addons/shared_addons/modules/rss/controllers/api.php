<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Rigo B Castro - Imaginamos Dev Team
 * @website     http://www.rigobcastro.com
 * @package 	PyroCMS
 * @subpackage 	RSS Module
 * @year 	2013
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $rss = $this->rss_m->get_all();
        $out = array();

        // Set some options and the feed url from the options provided
        $this->simplepie->set_cache_location($this->config->item('simplepie_cache_dir'));

        foreach ($rss as $_rss)
        {
            $this->simplepie->set_feed_url($_rss->url);
            // Fire it up
            $this->simplepie->init();
            $this->simplepie->handle_content_type();

            $items = $this->simplepie->get_items(0, 6);

            foreach ($items as $item)
            {
                array_push($out, array(
                    'title' => character_limiter($item->get_title(), 40),
                    'description' => character_limiter($item->get_description(), 80),
                    'date' => $item->get_date(),
                    'url' => $item->get_link()
                ));
            }
        }
        
        return $this->template->build_json(array(
            'news' => $out
        ));
    }

}
