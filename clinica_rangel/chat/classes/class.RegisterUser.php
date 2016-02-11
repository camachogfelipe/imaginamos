<?php

class RegisterUser
{
	/**
	* Check if a visitor allready has session named visitor_chat_user. If does, return
	* the contents of the session, otherwise get available user id and return it.
	*/
	function __construct($name,$email)
	{
		try {
			
			if(!isset($_SESSION['visitor_chat_user']))
			{
				$_SESSION = array();
				$this->Register($name,$email);
				
			} else {

				$this->UpdateUserOnline();
				$this->UserExpire();
			}
		
		} catch(Exception $e)
		{

			die($e->getMessage());
		}
	}

	/**
	* Registers new user to users table
	*
	* @return void
	* @author  
	*/
	function Register($name,$email) {

		global $_;
                
                if(empty($name) || empty($email))
                {
                    
                    $name = $_['ANONYMOUS'];
                    $email = $_['ANON_EMAIL'];
                }
                
		$sth = DB::prep("INSERT INTO cms_messaging_users (nick,email,ip,sess) VALUES ( :guest, :email, INET_ATON(:ip), :sess )");
		$sth->bindParam(":guest", $name, PDO::PARAM_STR);
		$sth->bindParam(":email", $email, PDO::PARAM_STR);
		$sth->bindParam(":ip", $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);
		$sth->bindParam(":sess", session_id(), PDO::PARAM_STR);
		DB::Exec($sth);
		
		$new_id = DB::LastId();
                
		$_SESSION['visitor_chat_user'] = $new_id;
		$_SESSION['visitor_chat_nick'] = $name;
		$_SESSION['visitor_chat_email'] = $email;
		
		$admin = $this->AvailableAdmin();
		
		$_SESSION['assigned_admin'] = $admin->id ? $admin->id : 0;
		$_SESSION['assigned_admin_nick'] = $admin->username ? $admin->username : false;;

		
		$this->WelcomeUser($new_id, $admin->id);
		
	}
	/**
	* undocumented function
	*
	* @return void
	* @author  
	*/
	private function AvailableAdmin() {
		
		global $_;
		
		$sth = DB::prep("SELECT id,username FROM cms_messaging_admin WHERE time > (NOW() - INTERVAL 30 SECOND) ORDER BY RAND()");
		return DB::getFirst($sth, null, PDO::FETCH_OBJ);
	}
	/**
	* Inserts a welcome message to the user
	*
	* @return void
	* @author  
	*/
	function WelcomeUser($user, $admin) {
		
		global $_;
		
		$sth = DB::prep("INSERT INTO cms_messaging (msg,user,to_user,type) VALUES (:msg, :user_id, :this_admin,'admin') ");
		$sth->bindParam(":msg", $_['ADMIN_WELCOME'], PDO::PARAM_STR);
		$sth->bindParam(":user_id", $user, PDO::PARAM_INT);
		$sth->bindParam(":this_admin", $admin, PDO::PARAM_INT);
		DB::Exec($sth);		
		
	}
	/**
	 * Updates the current user timestamp and resets the offline counter
	 *
	 * @return void
	 * @author  
	 */
	private function UpdateUserOnline() {

		$sth = DB::prep("INSERT INTO cms_messaging_users (user_id,nick,email,ip,sess) VALUES ( :new_id, :guest, :email, INET_ATON(:ip), :sess ) ON DUPLICATE KEY UPDATE time = NOW() ");
		$sth->bindParam(":guest", $_SESSION['visitor_chat_nick'], PDO::PARAM_STR);
		$sth->bindParam(":email", $_SESSION['visitor_chat_email'], PDO::PARAM_STR);
		$sth->bindParam(":ip", $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);
		$sth->bindParam(":sess", session_id(), PDO::PARAM_STR);
		$sth->bindParam(":new_id", $_SESSION['visitor_chat_user'], PDO::PARAM_INT);
		DB::Exec($sth);
		
	}
	
	/**
	 * Delete expired (users that are on in browsers anymore) users from database.
	 *
	 * @return void
	 * @author  
	 */
	function UserExpire() {
		
		$sth = DB::prep("DELETE FROM cms_messaging_users WHERE time < (NOW() - INTERVAL :time SECOND)");
		$sth->bindParam(":time", $this->time, PDO::PARAM_INT);
		DB::Exec($sth);	
		
	}
}

?>