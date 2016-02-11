<?php
/**
 * Operations with permissions
 * @author laptop
 *
 */
class Permission
{
	/**
	 * Get permissions from messagin_group table
	 * @return void
	 */
	function __construct()
	{
		try {
			
			$sth = DB::prep("SELECT groups,banned,history FROM messaging_groups WHERE id = (SELECT `group` FROM messaging_admin WHERE id = :id)");
			$sth->bindParam(":id", $_SESSION['userid'], PDO::PARAM_INT);
			
			$this->result = DB::getFirst($sth, null, PDO::FETCH_OBJ);
			 
		} catch (Exception $e)
		{
			Exceptions::PrintOut($e);
		}
	}
        /**
         * Return true if type is 1 or false if 0
         * @param $type string
         * @return boolean
         */
	public function IsAllowed($type)
	{
            if(isset($this->result->$type))
            {
                return $this->result->$type ? true : false;
            } else {
                return false;
            }
	}
        
}

?>