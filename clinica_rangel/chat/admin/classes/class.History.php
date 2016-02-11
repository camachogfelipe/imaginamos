<?php
/**
 * Class for operations with history table
 *
 * @package default
 * @author  
 */
class History {
	
	/**
	* Constructor
	*
	* @return void
	* @author  
	*/
	function __construct() {
	}
	
	/**
	* Lists data from history table
	*
	* @return Object-Array
	* @author  
	*/
	public static function ListHistory() {
		
		try {
			
			$sth = DB::prep("SELECT *, INET_NTOA(from_ip) as from_ip, SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MIN(time), MAX(time))) as time2, DATE_FORMAT(time,'%Y-%m-%d') as time FROM cms_messaging_history GROUP BY email,sess ORDER BY id DESC");
			return DB::getAll($sth, null, PDO::FETCH_OBJ);
			
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
		
		
	}
	/**
	* Lists data from history table by message search text
	*
	* @return Object-Array
	* @author  
	*/
	public static function SearchHistory($search) {
		
		try {
			
			$sth = DB::prep("SELECT *, INET_NTOA(from_ip) as from_ip, SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MIN(time), MAX(time))) as time2, DATE_FORMAT(time,'%Y-%m-%d') as time FROM cms_messaging_history WHERE sess IN (SELECT sess FROM cms_messaging_history WHERE MATCH (msg) AGAINST (:search)) GROUP BY sess");
			$sth->bindParam(":search", $search, PDO::PARAM_STR);
			return DB::getAll($sth, null, PDO::FETCH_OBJ);
			
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
		
		
	}
	/**
	* Returns the data from conversation beetween two parties based on the session id of the client
	*
	* @return Object-Array
	* @author  
	*/
	public static function GetConversation($session_id) {
		
		try {
			
			$sth = DB::prep("SELECT * FROM cms_messaging_history WHERE session = :sess");
			$sth->bindParam(":sess", $session_id, PDO::PARAM_STR, 255);
			return DB::getAll($sth, null, PDO::FETCH_OBJ);
			
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
				
	}
	/**
	* Returns the data from conversation beetween two parties based on the session id of the client
	*
	* @return Object-Array
	* @author  
	*/	
    public static function GetHistorySess($session, $email)
    {
    	
		global $_;
		
        try {
            $sth = DB::prep("SELECT TIME_FORMAT(time, '%k:%i') as time,user as user_nick, admin, type, msg FROM cms_messaging_history WHERE sess = :sess AND email = :email ORDER BY time");
			$sth->bindParam(":sess", $session, PDO::PARAM_STR);
			$sth->bindParam(":email", $email, PDO::PARAM_STR);
            $result = DB::getAll($sth);

            foreach($result as $key=>$val)
            {

				$keys = $key ? ($key -1) : $key;
                $result[$key]['before'] = $result[$keys]['user_nick'];
				$result[$key]['type_before'] = $result[$keys]['type'];
                $result[$key]['msg'] = self::makeClickableLinks(nl2br($val['msg']));
                $result[$key]['msg'] = stripslashes($result[$key]['msg']);

            }

            return $result;

        } catch(Exception $e)
        {
            Exceptions::PrintOut($e);
        }
    }	
	/**
	* Transforms all links to clickable html
	*
	* @return String
	* @author  
	*/
    private static function makeClickableLinks($s) {

      return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $s);

    }
	/**
	* Delete historic conversation from database
	*
	* @return Integer
	* @author  
	*/
	public static function DeleteConv($session, $email) {
																	
		try {
		
			$sth = DB::prep("DELETE FROM cms_messaging_history WHERE email = :email AND sess = :sess");
			$sth->bindParam(":sess", $session, PDO::PARAM_STR);
			$sth->bindParam(":email", $email, PDO::PARAM_STR);
			$sth->execute();
			
			return $sth->rowCount();
			
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
	}	
} // END
?>