<?php
/*
 *
 */
class Login
{
    public $failed;
    private $cookie_name = 'login';

    /*
     * set all vars to false
     */
    public function __construct()
    {
        $this->failed = false;
        $this->success = false;
    }

    /*
     * set credentials passed by browser
     */
    public function SetCredentials($user, $pass, $remember)
    {
        $this->user = $user;
        $this->pass = $pass;
        $this->remember = $remember;
    }

    /*
     * sets cookie name
     */
    public function SetCookieName($c)
    {
        $this->cookie_name = $c;
    }

    /*
     * Check if credentials are ok, and login user.
     * If user selects remember me, set cookie
     */
    public function CheckLogin()
    {
        try {
            $sth = DB::prep("
                SELECT id,username,pass,`group`
                FROM messaging_admin
                WHERE username = :user AND pass = sha1(:pass)");

            $sth->bindParam(":user", $this->user, PDO::PARAM_STR);
            $sth->bindParam(":pass", $this->pass, PDO::PARAM_STR);
            
            $result = DB::getFirst($sth, null, PDO::FETCH_OBJ);

            if(!empty($result))
            {
                $signup = new SignUp();
                $signup->SetCookieName($this->cookie_name);
                $signup->SetSession(
                    array(
                    "userid"=>$result->id,
                    "username"=>$result->username,
                    "group"=>$result->group
                    )
                );

                if($this->remember == 1)
                {
                    $signup->SetCookie("login", array("username"=>$result->username, "hash"=>$result->pass), 31556926, $_SERVER['SERVER_NAME']);
                    $signup->SignUp();
                }

                $this->success = true;
                
            } else {
                
                $this->failed = true;
            }
            
        } catch(Exception $e)
        {
            die($e->getMessage());
        }
    }


}


?>
