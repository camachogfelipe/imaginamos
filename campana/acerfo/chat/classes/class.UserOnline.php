<?php

/**
 * Class UserOnline checks if admin is offline or not.
 *
 * @package default
 * @author
 */
class UserOnline
{
	
/**
 * Constructor function of class UserOnline
 *
 * @param integer $time Number in minutes (time that is needed to pass so that we can marke Admin as Offline)
 * @return void
 * @author 
 */
public function __construct()
{

	
}
	
/**
 * Checks if admin is online for talk or not.
 *
 * @return boolean Returns True if admin is online for talk, False otherwise.
 * @author 
 */
public function AdminOnline()
{
	global $_;
	
	try {
		
		$sth = DB::prep("SELECT COUNT(*) as c FROM messaging_admin WHERE time > (NOW() - INTERVAL 30 SECOND)");

		$result = DB::getFirst($sth, null, PDO::FETCH_OBJ);
		
		return $result->c;
		
	} catch(Exception $e)
	{
		die($e->getMessage());
	}
}
public function UserProperties()
{
    try {
        
        $sth = DB::prep("SELECT upload FROM messaging_users WHERE user_id = :user");
        $sth->bindParam(":user", $_SESSION['visitor_chat_user'], PDO::PARAM_INT);
        $result = DB::getFirst($sth, null, PDO::FETCH_OBJ);

        return isset($result->upload) ? $result->upload : 0;
        
    }  catch (Exception $e)
    {
        die($e->getMessage());
    }
}

}
// END
?>