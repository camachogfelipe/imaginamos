<?php
/**
 * Returns first user id
 *
 * @package default
 * @author  
 */
class FirstUser {
	/**
	* Return first online visitor
	*
	* @return object User details in object (user_id, nick)
	* @author  
	*/
	function GetFirstUser() {
		
		try {
			
			$sth = DB::prep("SELECT user_id,nick FROM messaging_users LIMIT 1");
			$result = DB::getFirst($sth,null,PDO::FETCH_OBJ);
			
			return $result;
			
		} catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}
} // END
?>