<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Logout
{
    public function __construct($cookie_name)
    {
        $this->cookie_name = $cookie_name;
    }

    /*
     * Destroys all session variables
     * Session must be started before this function
     * is executed of course
     */
    public static function DestroySession()
    {
        $_SESSION = array();
        session_destroy();
    }

    private function DeleteCookie()
    {
        if(isset($_COOKIE[$this->cookie_name]))
        {
            $signup = new SignUp();
            $signup->SetCookie("login", array("username"=>"", "hash"=>""), time()-3600, $_SERVER['SERVER_NAME']);
                    
        }
    }
	/**
	* Delete the session variable and delete the cookie
	*
	* @return void
	* @author  
	*/
    public function Flush()
    {
        $_SESSION['userid'] = false;
        $this->DeleteCookie();

    }
}

?>