<?php

/**
 * Functions for operating with users and groups
 *
 * @package default
 * @author Gregor Kuplenik, gregor.kuplenik@insis.si
 */
class UsersAndGroups extends Errors {
	
	public $error;
	/**
	* Construct function
	*
	* @return void
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	function __construct() {


	}
	/**
	* Returns list of all admin users in the database
	*
	* @return Object-Array Object array of messaging_admin table 
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	public static function ListUsers() {
		
		try {
			
			$sth = DB::prep("SELECT m1.id,m1.username,m2.title FROM cms_messaging_admin m1 LEFT JOIN cms_messaging_groups m2 ON m1.group = m2.id");
			return DB::getAll($sth, null, PDO::FETCH_OBJ);
			
		} catch(Exception $e)
		{
			die($e->getCode());
		}
		
		
	}
	
	/**
	* Returns an array of groups in the cms_messaging_groups table
	*
	* @return Object-Array Object array of cms_messaging_groups table
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	public static function ListGroups() {
		
		try {
			
			$sth = DB::prep("SELECT *, CONCAT(groups,'-',banned,'-',history) as perm FROM cms_messaging_groups");
			return DB::getAll($sth, null, PDO::FETCH_OBJ);
			
		} catch(Exception $e)
		{
			die($e->getCode());
		}		
	}
	/**
	* Deletes the group from database table and returns the result
	* 
	* @param Integer Group id for deletion
	* @return Integer 1 if group was successfully deleted, 0 if failed or no rows deleted
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	public static function GroupDelete($group_id) {
		
		try {
			
			$sth = DB::prep("DELETE FROM cms_messaging_groups WHERE id = :id");
			$sth->bindParam(":id", $group_id, PDO::PARAM_INT);
			
			$sth->execute();
			return $sth->rowCount();
						
		} catch(Exception $e)
		{
			die($e->getCode());
		}
		
	}
	/**
	* Deletes the user from database table and returns the result
	* 
	* @param Integer User id for deletion
	* @return Integer 1 if user was successfully deleted, 0 if failed or no rows deleted
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	public static function UserDelete($user_id) {
		
		try {
			
			$sth = DB::prep("DELETE FROM cms_messaging_admin WHERE id = :id");
			$sth->bindParam(":id", $user_id, PDO::PARAM_INT);
			
			$sth->execute();
			return $sth->rowCount();
						
		} catch(Exception $e)
		{
			die($e->getCode());
		}
		
	}
	/**
	* Main startup function for new user insertion
	*
	* @return Integer
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	function UserEditor($id, $password, $pass_repeat, $group) {
			
		$this->user_id = $id;
		$this->password = $password;
		$this->password_rep = $pass_repeat;
		$this->group = $group;
		
		$this->CheckPassword();
		$this->CheckGroup();

		if(empty($this->error)) return $this->UserEdit();
		
		
	}
	/**
	* Main startup function for new user insertion
	*
	* @return Integer
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	function NewUser($username, $password, $pass_repeat, $group) {
		
		$this->username = $username;
		$this->password = $password;
		$this->password_rep = $pass_repeat;
		$this->group = $group;
		
		$this->CheckUsername();
		$this->CheckPassword();
		$this->CheckGroup();

		if(empty($this->error)) return $this->UserInsert();
		
		
	}
	/**
	* Check if group allready exists in groups table.
	*
	* @return void
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	private function CheckGroup() {
		
		try {
			
			$sth = DB::prep("SELECT COUNT(*) as c FROM cms_messaging_groups WHERE id = :id");
			$sth->bindParam(":id", $this->group, PDO::PARAM_INT);
			$result = DB::getFirst($sth, null, PDO::FETCH_OBJ);
			
			if(!$result->c) throw new Exception ("", 5);
			
		} catch(Exception $e)
		{
			$this->Fill($e->getCode());
		}
		
		
	}
	/**
	* Checks if password length is between 5 and 255 characters and passwords are the same.
	*
	* @return void Error array is filled on triggered exception
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	private function CheckPassword() {
		
		try {

			VarTest::Length(5, 255, $this->password, "", 3);
			VarTest::TheSame($this->password, $this->password_rep, "", 4);	
				
		} catch(Exception $e)
		{
			$this->Fill($e->getCode());
		}
		
	}
	/**
	* Checks if admin username exists in database, if user exists and length of username is not between 3 and 255, exception is thrown and error array is filled.
	*
	* @return void
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	private function CheckUsername() {

		try {
			
			VarTest::Length(3, 255, $this->username, "", 2);
					
		} catch(Exception $e)
		{

			$this->Fill($e->getCode());
		}
		
		
	}
	/**
	* Inserts new admin user into database
	*
	* @return void
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	function UserEdit() {
		
		try {
			$sth = DB::prep("UPDATE cms_messaging_admin SET pass = sha1(:pass), `group` = :group WHERE id = :id");
			$sth->bindParam(":pass", $this->password, PDO::PARAM_STR, 40);
			$sth->bindParam(":group", $this->group, PDO::PARAM_INT);
			$sth->bindParam(":id", $this->user_id, PDO::PARAM_INT);
			
			$sth->execute();
			
			return true;
			
		} catch(Exception $e)
		{
			die($e->getMessage());
			Exceptions::PrintOut($e);
		}
	}
	/**
	* Inserts new admin user into database
	*
	* @return void
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	function UserInsert() {
		
		try {
			$sth = DB::prep("INSERT INTO cms_messaging_admin (username,pass,`group`) VALUES (:username,sha1(:pass),:group)");
			$sth->bindParam(":username", $this->username, PDO::PARAM_STR, 255);
			$sth->bindParam(":pass", $this->password, PDO::PARAM_STR, 40);
			$sth->bindParam(":group", $this->group, PDO::PARAM_INT);
			
			$sth->execute();
			
			return $sth->rowCount();
			
		} catch(Exception $e)
		{
			die($e->getMessage());
			Exceptions::PrintOut($e);
		}
	}
	/**
	* Main startup function for editing the group
	*
	* @return Integer
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	function GroupEditor($title, $group_id, $perms = array(1,1,1)) {
		
		$this->title = $title;
		$this->group_id = $group_id;
		$this->perms = $perms;
		
		$this->CheckGroupTitle();
		$this->CheckGroupPerms();

		if(empty($this->error)) return $this->GroupEdit();
		
	}
	
	
	/**
	* Main startup function for new user insertion
	*
	* @return Integer
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	function NewGroup($title, $perms = array(1,1,1)) {
		
		$this->title = $title;
		$this->perms = $perms;
		
		$this->CheckGroupTitle();
		$this->CheckGroupPerms();

		if(empty($this->error)) return $this->GroupInsert();
		
	}

	/**
	* Checks if permissions array length is 5
	*
	* @return void Error array is filled on triggered exception
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	private function CheckGroupPerms() {
		
		try {
			
			VarTest::ArrayRange($this->perms, 3, "", 3);
				
		} catch(Exception $e)
		{
			$this->Fill($e->getCode());
		}
		
	}
	/**
	* Checks if admin username exists in database, if user exists and length of username is not between 3 and 255, exception is thrown and error array is filled.
	*
	* @return void
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	private function CheckGroupTitle() {

		try {
			
			VarTest::Length(3, 255, $this->title, "", 2);
					
		} catch(Exception $e)
		{
			$this->Fill($e->getCode());
		}
		
		
	}
	/**
	* Inserts new group into database
	*
	* @return void
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	function GroupEdit() {
		
		try {
			$sth = DB::prep("UPDATE cms_messaging_groups SET title = :title, groups = :groups, banned = :banned, history = :history WHERE id = :id");
			
			$sth->bindParam(":title", $this->title, PDO::PARAM_STR);
			$sth->bindParam(":groups", $this->perms[1], PDO::PARAM_INT);
			$sth->bindParam(":banned", $this->perms[2], PDO::PARAM_INT);
			$sth->bindParam(":history", $this->perms[3], PDO::PARAM_INT);
			$sth->bindParam(":id", $this->group_id, PDO::PARAM_INT);
			
			$sth->execute();
			
			return true;
			
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
	}
	/**
	* Inserts new group into database
	*
	* @return void
	* @author Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	function GroupInsert() {
		
		try {
			$sth = DB::prep("INSERT INTO cms_messaging_groups (title,groups,banned,history)
			 VALUES (:title,:groups,:banned,:history)");
			
			$sth->bindParam(":title", $this->title, PDO::PARAM_STR);
			$sth->bindParam(":groups", $this->perms[0], PDO::PARAM_INT);
			$sth->bindParam(":banned", $this->perms[1], PDO::PARAM_INT);
			$sth->bindParam(":history", $this->perms[2], PDO::PARAM_INT);
			
			$sth->execute();
			
			return $sth->rowCount();
			
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
	}
	/**
	* Returns user-admin information from database
	*
	* @return Object
	* @author  Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	public static function GetUser($id) {
		
		try {
			
			$sth = DB::prep("SELECT * FROM cms_messaging_admin WHERE id = :id");
			$sth->bindParam(":id", $id, PDO::PARAM_INT);
			
			return DB::getFirst($sth, null, PDO::FETCH_OBJ);
			
			
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
		
	}
	/**
	* Returns group information from database
	*
	* @return Object
	* @author  Gregor Kuplenik, gregor.kuplenik@insis.si
	*/
	public static function GetGroup($id) {
		
		try {
			
			$sth = DB::prep("SELECT * FROM cms_messaging_groups WHERE id = :id");
			$sth->bindParam(":id", $id, PDO::PARAM_INT);
			
			return DB::getFirst($sth, null, PDO::FETCH_OBJ);
			
			
		} catch(Exception $e)
		{
			Exceptions::PrintOut($e);
		}
		
	}	
} // END


?>