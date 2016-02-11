<?php
/*
 * SignUp class check for inputs and inserts
 * customer data into database.
 */
class SignUp
{

    /*
     * Constructor
     */
    public function __construct()
    {

    }
    /*
     * set cookie name
     */
    public function SetCookieName($name)
    {
        $this->cookie_name = $name;
    }

    /*
     * Set the session variables
     */
    public function SetSession($s)
    {
        if (is_array($s) && !empty($s)) {

            foreach ($s as $name => $value) {

                $_SESSION[$name] = $value;

            }
        }
    }
    /*
     * log in user
     */
    public function SignUp()
    {
        if (isset($_COOKIE[$this->cookie_name])) {

            foreach ($cookie as $name => $value) {

                $this->session[$name] = $value;

            }
        }
    }

    /*
     * Set cookie * remember me * for certain ammount of time. Time is in seconds
     *
     */
    public function SetCookie($cookiename, $value, $time, $uri, $ssl = false, $http = true)
    {
        if(is_array($value) && !empty($value))
        {
            foreach($value as $key=>$val)
            {
                setcookie($cookiename.'['.$key.']', $val, time()+$time, "/", $uri, $ssl, $http);
            }
        }
        
    }
}

?>