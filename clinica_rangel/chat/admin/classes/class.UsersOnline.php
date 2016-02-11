<?php

/**
 * Get all currently online users
 *
 * @package default
 * @author  
 */
class UsersOnline {
	/**
	* Returns array of users currently online
	*
	* @return array User array
	* @author  
	*/
	function Get() {
		
		global $_;
		
		try {
			
			$sth = DB::prep("SELECT g1.user_id,g1.nick as user_nick,g1.upload as upload, UNIX_TIMESTAMP(g2.time) as time
FROM cms_messaging_users g1
LEFT JOIN
(SELECT user,time FROM cms_messaging WHERE type = 'user' ORDER BY id DESC) as g2 ON g1.user_id = g2.user
 GROUP BY g1.user_id ORDER BY g2.time DESC");
			
			
			$result = DB::getAll($sth);
			
			foreach($result as $key=>$value)
			{
				
				$_SESSION['msg_admin_update_'.$value['user_id']] = isset($_SESSION['msg_admin_update_'.$value['user_id']]) ? $_SESSION['msg_admin_update_'.$value['user_id']] : time();
				$result[$key]['new_msg'] = $result[$key]['time'] > $_SESSION['msg_admin_update_'.$value['user_id']] ? 1 : 0;
			}
			
			
			
			return $result;
			
		} catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}
} // END

?>