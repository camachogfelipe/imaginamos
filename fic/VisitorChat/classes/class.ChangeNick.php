<?php

/**
 * Class for changing the client's username
 */
class ChangeNick
{
    /**
     * Build class with new nick name
     * @param string $nick 
     */
    function __construct($nick) {
        
        $this->nick = $nick;
        $this->user_id = $_SESSION['visitor_chat_user'];
        
    }
    /**
     * Check if username is valid and insert it
     */
    public function ChangeIt()
    {

        try {
            
            VarTest::Length(1, 255, $this->nick);
            
            $sth = DB::prep("UPDATE messaging_users SET nick = :nick WHERE user_id = :userid");
            $sth->bindParam(":nick", $this->nick, PDO::PARAM_STR, 255);
            $sth->bindParam(":userid", $this->user_id, PDO::PARAM_INT);
            
            $sth->execute();
            
            $_SESSION['visitor_chat_nick'] = $this->nick;
            echo 1;
            
        } catch(Exception $e)
        {
            echo $e->getMessage();
        }

    }
}
?>
