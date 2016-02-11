<?php
error_reporting(0);
/*
 * Add message to database
 */
class AddMsg
{
    public function __construct($m, $html = false)
    {
        try {

			$this->user = $_SESSION['visitor_chat_user'];
			
            $this->user_nick = $_SESSION['visitor_chat_nick'];
			$this->admin_username = $_SESSION['assigned_admin_nick'];
			
            $this->SetMsg($m, $html);
            $this->InsertMessage();
			$this->InsertHistory();

        } catch(Exception $e)
        {
            
        }

    }
	
	
	/*
	 * Set message contents to $this->msg and format any html to special characters
	 */
    private function SetMsg($m, $html = false)
    {
        if(!empty($m))
        {
            $this->msg = $html ? $m : htmlspecialchars($m);
        }
        else
        {
            throw new Exception('No message input', 1);
        }
    }
	
	/*
	 * Inserts prepared message to database
	 */
    public function InsertMessage()
    {

            $sth = DB::prep("INSERT INTO messaging (msg,user,to_user,type) VALUES(:msg, :user_id, :this_admin,'user')");
            $sth->bindParam(":msg", $this->msg, PDO::PARAM_STR);
			$sth->bindParam(":this_admin", $_SESSION['assigned_admin'], PDO::PARAM_INT);
            $sth->bindParam(":user_id", $this->user, PDO::PARAM_INT);

            DB::Exec($sth);
    }
	/**
	* Inserts permanent message data into history table
	*
	* @return void
	* @author  
	*/
    public function InsertHistory()
    {

            $sth = DB::prep("INSERT INTO messaging_history (user,from_ip, email, sess, msg, admin, type) VALUES(:user,INET_ATON(:from_ip), :email, :sess,:msg,:this_admin, 'user')");
            $sth->bindParam(":msg", $this->msg, PDO::PARAM_STR);
			$sth->bindParam(":email", $_SESSION['visitor_chat_email'], PDO::PARAM_STR);
			$sth->bindParam(":from_ip", $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);
			$sth->bindParam(":sess", session_id(), PDO::PARAM_STR);
			$sth->bindParam(":this_admin", $this->admin_username, PDO::PARAM_STR);
            $sth->bindParam(":user", $this->user_nick, PDO::PARAM_STR);
            
            DB::Exec($sth);
    }

}
?>