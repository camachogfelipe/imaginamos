<?php
/*
 * Controller class takes the site request url
 * and returns specific handler file for operation.
 */
class Controller
{

    public function  __construct($url) {

        $this->url = $url;
    }
    public function GetHandler()
    {
		
		$pages = array(
			"new_message",
			"messaging",
			"AdminOnline",
			"change_nick",
			"UpdateUserTime",
			"send_email",
                        "smiley",
                        "upload"
		);
		
		return in_array($this->url, $pages) ? 'program/'.$this->url.'.php' : 'program/main.php';

    }
}

?>