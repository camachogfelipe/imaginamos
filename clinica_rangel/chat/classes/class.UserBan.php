<?php

/**
 * Banned users
 *
 * @package default
 * @author  
 */
class UserBan {
	
	/**
	* Check if user is banned or not
	*
	* @param Integer 
	* @return Integer
	* @author  
	*/
	public static function IsBanned($ip) {
		
		try {
			
			$sth = DB::prep("SELECT COUNT(*) as c FROM cms_messaging_ban WHERE ip = INET_ATON(:ip)");
			$sth->bindParam(":ip", $ip, PDO::PARAM_STR);
			$result = DB::getFirst($sth, null, PDO::FETCH_OBJ);
			
			return $result->c;
			
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
		
	}
	
} // END


?>