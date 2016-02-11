<?php
session_start();
	
	class RssReader { 
	    var $url; 
	    var $data; 
	    
	    function RssReader ($url){ 
	        $this->url; 
	        $this->data = implode ("", file ($url)); 
	    } 
	    
	    function get_items (){ 
	        preg_match_all ("/<item .*>.*<\/item>/xsmUi", $this->data, $matches); 
	        $items = array (); 
	        foreach ($matches[0] as $match){ 
	            $items[] = new RssItem ($match); 
	        } 
	        return $items; 
	    } 
	} 
	
	class RssItem { 
	    var $title, $url, $description; 
	    
	    function RssItem ($xml){ 
	        $this->populate ($xml);
	    } 
	    
	    function populate ($xml){ 
	        preg_match ("/<title> (.*) <\/title>/xsmUi", $xml, $matches); 
	        $this->title = $matches[1]; 
	        preg_match ("/<link> (.*) <\/link>/xsmUi", $xml, $matches); 
	        $this->url = $matches[1]; 
	        preg_match ("/<description> (.*) <\/description>/xsmUi", $xml, $matches); 
	        $this->description = $matches[1]; 
    } 
	    
    function get_title (){ 
        return $this->title; 
	    } 
	
	    function get_url (){ 
        return $this->url; 
	    } 
	    
	    function get_description (){ 
	        return $this->description; 
	    } 
	} 

	$query = "SELECT config_rss FROM cms_configuration WHERE config_id = 1";
	$db->doQuery($query,SELECT_QUERY);
	$result = $db->results;
	
	$rss = new RssReader ($result[0][config_rss]);
	
	//printf ('<a href="%s">%s</a><br />%s<br /><br />', 
	foreach ($rss->get_items () as $item){printf('<li><h2><a href="%s">%s</a></h2>%s</li>',$item->get_url (), $item->get_title (), $item->get_description ()); 
	} 
?> 