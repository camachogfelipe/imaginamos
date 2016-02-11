<?php 

/**
 * Function for User Ban operation
 *
 * @package default
 * @author Gregor Kuplenik <gregor.kuplenik@insis.si>
 */
class UserBan {
	
	/**
	* List banned Ips
	*
	* @return Object-Array
	* @author  
	*/
	public static function ListBanned() {
		
		try {
			
			$sth = DB::prep("SELECT id, INET_NTOA(ip) as ip, host FROM cms_messaging_ban");
			return DB::getAll($sth, null, PDO::FETCH_OBJ);
			
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
		
	}
	/**
	* Delete IP ban from database
	* 
	* @param Integer Ban id
	* @return Integer
	* @author  
	*/
	public static function BanDelete($id) {
		
		try {
			
			$sth = DB::prep("DELETE FROM cms_messaging_ban WHERE id = :id");
			$sth->bindParam(":id", $id, PDO::PARAM_INT);
			$sth->execute();
			
			return $sth->rowCount();
			
						
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
		
	}
	/**
	* Ban user with id
	* 
	* @param Integer User id
	* @return void
	* @author  
	*/
	public static function BanUser($id) {
		
		try {

			$user = self::GetUser($id);
			$ip = $user->ip;
			$host = gethostbyaddr($ip);
			

			$sth = DB::prep("INSERT INTO cms_messaging_ban (ip,host) VALUES( INET_ATON(:ip), :host) ");
			$sth->bindParam(":ip", $ip, PDO::PARAM_STR);
			$sth->bindParam(":host", $host, PDO::PARAM_STR);
			$sth->execute();
			
			self::DeleteUser($id);
			
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
		
	}
	/**
	* Get user details from table
	*
	* @return Object-Array
	* @author  
	*/
	private static function GetUser($id) {
						
			$sth = DB::prep("SELECT INET_NTOA(ip) as ip FROM cms_messaging_users WHERE user_id = :id");
			$sth->bindParam(":id", $id, PDO::PARAM_INT);
			return DB::getFirst($sth, null, PDO::FETCH_OBJ);
		
	}
	/**
	* Delete user from users table
	*
	* @param Integer User id
	* @return void
	* @author  
	*/
	private static function DeleteUser($id) {
		
			$sth = DB::prep("DELETE FROM cms_messaging_users WHERE user_id = :id");
			$sth->bindParam(":id", $id, PDO::PARAM_INT);
			$sth->execute();	
		
	}
	
} // END

?>