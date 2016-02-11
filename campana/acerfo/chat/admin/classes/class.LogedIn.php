<?php
/*
 * This class checks either user has allready set
 * username and hash stored in cookie. If it has, check if the
 * username and has matches the user database and log user in
 */

class LogedIn
{

    /*
     * Check cookie variables passed
     */
    public function __construct($cookie_name, $uservar, $hashvar)
    {
        if(isset($_COOKIE[$cookie_name])){

            $this->username = isset($_COOKIE[$cookie_name][$uservar]) ? $_COOKIE[$cookie_name][$uservar] : "";
            $this->hash = isset($_COOKIE[$cookie_name][$hashvar]) ? $_COOKIE[$cookie_name][$hashvar] : "";
        }
    }

    /*
     * Check if cookie values match the user in database and
     * login in user if they are.
     */
    public function Check()
    {        
        try {
            $sth = DB::prep("
                SELECT id, username, pass, `group`
                FROM messaging_admin
                WHERE username = :user AND pass = :pass");

            $sth->bindParam(":user", $this->username, PDO::PARAM_STR);
            $sth->bindParam(":pass", $this->hash, PDO::PARAM_STR);

            $result = DB::getFirst($sth, null, PDO::FETCH_OBJ);

            if(!empty($result))
            {
                $signup = new SignUp();
                $signup->SetSession(
                    array(
                    "userid"=>$result->id,
                    "group"=>$result->group,
                    "username"=>$result->username,
                    )
                );
            } 

        } catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

}
?>