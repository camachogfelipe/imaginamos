<?php
date_default_timezone_set('America/Bogota');
define("CONN_ERROR","Error connecting DB");
define("NO_DATA",0);
define("BAD_QUERY",1);
define("INSERT_OK",2);
define("DELETE_OK",3);
define("UPDATE_OK",4);
define("QUERY_OK",5);
define("SELECT_QUERY",1);
define("INSERT_QUERY",2);
define("DELETE_QUERY",3);
define("UPDATE_QUERY",4);

class Database 
{
	var $conn;
	var $user;
	var $pwd;
	var $db;
	var $results;
	var $rows;
	var $messages;
	var $path;
	var $host;
/*	
	
   function Database()
	{
		$this->conn = null;
		$this->results = null;
		$this->db = "mba";
		$this->user = "root";
		$this->pwd = "";
		$this->host = "localhost";
		$this->path = "";
		$this->rows = 0;
		$this->messages = array("Error en la conexion","No se pudo realizar la operacion, comuniquese con el administrador");
	}*/
   
  function Database()
	{
		$this->conn = null;
		$this->results = null;
		$this->db = "usuariofbz_mba";//phemixc_mba    //  pagina     //657767_mba
		$this->user = "usuariofbz";//phemixc  //  pagina    //657767_mba2013
		$this->pwd = "p&86XoI/P4Ea";//35aGJM)r5BEP //  pagina   //MB@!!!2013!!!final //hola_MBA1234
		$this->host = "localhost";//mysql51-032.wc2.dfw1.stabletransit.com
		$this->path = "";
		$this->rows = 0;
		$this->messages = array("Error en la conexion","No se pudo realizar la operacion, comuniquese con el administrador");
	}
	
	////////////////////////////////////////////////////////////////	
	
	function connect()
	{
		$this->conn = mysql_connect($this->host,$this->user,$this->pwd);
		if (!$this->conn)
		{
			die($this->messages[CONN_ERROR]);
			return false;
		}
		mysql_select_db($this->db);
		return $this->conn;
	}	

	////////////////////////////////////////////////////////////////
	
	function doQuery($query,$type)
	{
		$this->results=null;		
		mysql_query("SET NAMES utf8");		
		if (!$execute = mysql_query($query,$this->conn))
		{
			//die('Invalid query: ' .$query.'-'. mysql_error());
			$insertDate = date('Y-m-d H:i:s');
			$query = str_replace("'", "´",$query);
			$query2 = sprintf("INSERT INTO sio_logs (log_actions, log_insertDate) VALUES('%s FROM QUERY : $query' ,'$insertDate') ", mysql_real_escape_string(mysql_error()));
			mysql_query($query2,$this->conn);	
			//echo "<!-- no hizo nada -->";
			//return $this->messages[BAD_QUERY];
			return false;
		}
		else
		{
			switch($type)
			{
				case SELECT_QUERY:
					$this->rows = mysql_num_rows($execute);
					$i = 0;
					while ($i < $this->rows)
					{
						$this->results[$i] = mysql_fetch_assoc($execute);
						$i++;
					}
					return true;
				break;						
				case INSERT_QUERY:
					  return true;
				break;
				case UPDATE_QUERY:
					 return true;
				break;
				case DELETE_QUERY:
					 return true;
				break;
				case SHOW_TABLE_QUERY:
					$this->rows = mysql_num_rows($execute);				
					if($this->rows > 0)
						$this->show = mysql_fetch_assoc($execute);
					return true;
				break;
			}
		}
	}
		
	////////////////////////////////////////////////////////////////
	
	function createTable($execute)
	{
		if(@mysql_db_query($this->db,$execute,$this->conn))
			//Si le tabla es creada correctamente
			return true;
		else
			//Si el nombre de la tabla ya está siendo usado
			return false;
	}
	
	////////////////////////////////////////////////////////////////	
	
	function doQueryPaginator($execute){
		$this->results = null;
		mysql_query("SET NAMES utf8");
		$this->rows = mysql_num_rows($execute);
		$i = 0;
		while ($i < $this->rows)
		{
			$this->results[$i] = mysql_fetch_assoc($execute);
			$i++;
		}
	}
	
	////////////////////////////////////////////////////////////////
	
	function getNumResults()
	{
		return $this->rows;
	}
	
	////////////////////////////////////////////////////////////////
	
	function getResults()
	{
		return $this->results;
	}
	
	////////////////////////////////////////////////////////////////
	
	function getLastId()
	{
		return mysql_insert_id($this->conn);
	}
	
	////////////////////////////////////////////////////////////////

	function disconnect()
	{
		if($this->conn)
		mysql_close($this->conn);
	}
	
	////////////////////////////////////////////////////////////////
}
?>