<?php

/*
 * Add message to database
 */
class AddMsg
{
    public function __construct($m, $to_user, $html = false)
    {
    	$this->to_user = $to_user;
		
        try {

            $this->SetMsg($m, $html);
            $this->InsertMessage();
			$this->InsertHistory();

        } catch(Exception $e)
        {
            Exceptions::PrintOut($e);
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

            $sth = DB::prep("INSERT INTO messaging (msg,user,to_user,type) VALUES(:msg,:from,:user,'admin')");
            $sth->bindParam(":msg", $this->msg, PDO::PARAM_STR);
            $sth->bindParam(":user", $_SESSION['userid'], PDO::PARAM_INT);
            $sth->bindParam(":from", $this->to_user, PDO::PARAM_INT);
            
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

			$nicks = $this->GetNick($this->to_user,$_SESSION['userid']);

            $sth = DB::prep("INSERT INTO messaging_history (user,from_ip, email, sess, msg, admin, type) VALUES(:user,INET_ATON(:from_ip),:email,:sess,:msg,:this_admin, 'admin')");
            $sth->bindParam(":msg", $this->msg, PDO::PARAM_STR);
			$sth->bindParam(":from_ip", $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);
			$sth->bindParam(":sess", $nicks->sess, PDO::PARAM_STR);
			$sth->bindParam(":email", $nicks->email, PDO::PARAM_STR);
			$sth->bindParam(":this_admin", $nicks->admin, PDO::PARAM_STR);
            $sth->bindParam(":user", $nicks->nick, PDO::PARAM_STR);
            
            DB::Exec($sth);
    }
    /**
     * Retrieve nick from users table
     *
     * @return String
     * @author  
     */
    function GetNick($user, $admin) {
    	
		$sth = DB::prep("SELECT nick, email, sess, (SELECT username FROM messaging_admin WHERE id = :this_admin) as admin FROM messaging_users WHERE user_id = :id");
		$sth->bindParam(":id", $user, PDO::PARAM_INT);
		$sth->bindParam(":this_admin", $admin, PDO::PARAM_INT);
		
		$result = DB::getFirst($sth,null, PDO::FETCH_OBJ);
		return $result;
		
    }
}
?>