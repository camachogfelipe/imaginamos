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
			"UpdateNick",
			"UsersOnline",
			"login",
			"logout",
			"UserBan",
			"users_and_groups",
			"userdelete",
			"groupdelete",
			"new_user",
			"new_group",
			"UpdateUserTime",
			"groupedit",
			"useredit",
			"history",
			"conversation",
			"historydelete",
			"bandelete",
			"banuser",
                        "smiley",
                        "upload_status",
                        "files",
                        "upload",
                        "file_delete"
			
		);
		
		return in_array($this->url, $pages) ? 'program/'.$this->url.'.php' : 'program/main.php';

    }
}

?>