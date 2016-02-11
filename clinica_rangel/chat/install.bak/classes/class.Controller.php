<?php 

		
function __autoload($class) {
		
	global $_;
	
	try {
	        if(file_exists('classes/class.'.$class.'.php'))
	{
	      require 'classes/class.'.$class . '.php';
	}
	else
	{
	      $error = sprintf("File %s could not be loaded.", 'classes/class.'.$class.'.php');
	      throw new Exception($error);
		  
	}
	} catch(Exception $e)
	{
	        die($e->getMessage());
	}
}

abstract class Controller 
{
	public $error = array();

	function __construct()
	{
		
	}
    /*
     * errors are being filled into array
     */
    protected function Fill($e)
    {
        $this->error[$e] = true;
    }
	public function DB_Connect($host, $user, $password)
	{
		$this->db = new DB($host, $user, $password);
	}
    public function Check($arr)
    {
        if(is_array($arr) && !empty($arr))
        {
            foreach($arr as $val)
            {
                if(!isset($_POST[$val])) return false;
            }

            return true;
        }
    }
    public function GCheck($arr)
    {
        if(is_array($arr) && !empty($arr))
        {
            foreach($arr as $val)
            {
                if(!isset($_GET[$val])) return false;
            }

            return true;
        }
    }
    public function post($name)
	{
		return isset($_POST[$name]) ? $_POST[$name] : false;
	}
    public function get($name)
	{
		return isset($_POST[$name]) ? $_POST[$name] : false;
	}
}
	
	
?>