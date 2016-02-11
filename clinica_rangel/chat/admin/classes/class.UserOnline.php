<?php

/**
 * Class UserOnline checks if admin is offline or not.
 *
 * @package default
 * @author
 */
class UserOnline
{
	private $time;
	
/**
 * Constructor function of class UserOnline
 *
 * @param integer $time Number in minutes (time that is needed to pass so that we can marke Admin as Offline)
 * @return void
 * @author 
 */
public function __construct($time)
{
	$this->time = $time;
	
	try {
		
		$this->UpdateUserOnline();
		$this->UserExpire();
		
	} catch(Exception $e)
	{
		die($e->getMessage());
	}
}
	
/**
 * Updates the current user timestamp and resets the offline counter
 *
 * @return void
 * @author  
 */
private function UpdateUserOnline() {
	
	global $_;
	
	$sth = DB::prep("UPDATE cms_messaging_admin SET time = NOW() WHERE id = :this_admin");
	$sth->bindParam(":this_admin", $_SESSION['userid'], PDO::PARAM_INT);
	DB::Exec($sth);
	
}

/**
 * Delete expired (users that are not in browser anymore) users from database.
 *
 * @return void
 * @author  
 */
function UserExpire() {

	$sth = DB::prep("DELETE FROM cms_messaging_users WHERE time < (NOW() - INTERVAL 30 SECOND)");
	DB::Exec($sth);

}

}// END

?>