<?php

class Messaging
{
	/**
	* Returns all messages in the given time frame between two parties.
	*
	* @return array Returns messages array
	* @author  
	*/
    public function GetMsgs()
    {
    	
		global $_;
		
        try {
            $sth = DB::prep("SELECT TIME_FORMAT(m1.time, '%k:%i') as time,IF(m1.type = 'admin', m3.username, m2.nick) as user_nick, m1.to_user as admin, m1.user as user_id, m1.type, m1.msg
             FROM messaging AS m1 
             LEFT JOIN messaging_users AS m2 ON m1.user = m2.user_id 
             LEFT JOIN messaging_admin m3 ON m1.to_user = m3.id 
             WHERE m1.user = :curr_user
             ORDER BY m1.time");
			$sth->bindParam(":curr_user", $_SESSION['visitor_chat_user'], PDO::PARAM_INT);
            $result = DB::getAll($sth);

            foreach($result as $key=>$val)
            {

				$keys = $key ? ($key -1) : $key;
                $result[$key]['before'] = $result[$keys]['user_id'];
				$result[$key]['admin_before'] = $result[$keys]['admin'];
				$result[$key]['type_before'] = $result[$keys]['type'];
                                
                $result[$key]['msg'] = $this->UploadReplace($val['msg']);
                $result[$key]['msg'] = $this->makeClickableLinks($result[$key]['msg']);
                $result[$key]['msg'] = nl2br($result[$key]['msg']);

                $smiley = new Smiley();
                $actions = $smiley->ListSmiley();
                
                foreach($actions as $val)
                {
                    $search[] = $val->sign;
                    $replace[] = '<img src="'.$_['MAIN_FOLDER'].'/admin/images/smiley/'.$val->filename.'" />';
                }
                
                $result[$key]['msg'] = str_replace($search, $replace, $result[$key]['msg']);
                $result[$key]['msg'] = stripslashes($result[$key]['msg']);

            }

            $_SESSION['msg_update'] = time();

            return $result;

        } catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
	/**
	* Retuns clickable link formatted message
	*
	* @return string
	* @author  
	*/
    private function makeClickableLinks($s) {

      return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $s);

    }

    /**
     * undocumented function
     *
     * @return void
     * @author  
     */
    private function UploadReplace($str) {
    	
		global $_;
		
		return str_replace('../uploads', $_['MAIN_FOLDER'].'/uploads', $str);
		
    }
    /**
     * Deletes messages from database that are older than given interval
	 * 
     * @param integer Minutes
     * @return void
     * @author  
     */
    public function DeleteOld($expire)
    {
        try {
            $sth = DB::prep("DELETE FROM messaging WHERE time < (NOW() - INTERVAL :interval MINUTE)");
            $sth->bindParam(":interval", $expire, PDO::PARAM_INT);

            DB::Exec($sth);
            
        } catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    
	/**
	* Get new messages based on last time update
	*
	* @return array
	* @author  
	*/
    public static function GetNewMsg()
    {
        try {
            $sth = DB::prep("SELECT COUNT(id) as c FROM messaging WHERE (user = :curr_user AND to_user = :this_admin AND type = 'admin')  AND time > FROM_UNIXTIME(:time) ");
            $sth->bindParam(":curr_user", $_SESSION['visitor_chat_user'], PDO::PARAM_INT);
            $sth->bindParam(":this_admin", $_SESSION['assigned_admin'], PDO::PARAM_INT);
            $sth->bindParam(":time", $_SESSION['msg_update'], PDO::PARAM_INT);

            $result = DB::getFirst($sth, null, PDO::FETCH_OBJ);
            return $result;

        } catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}
?>