<?php

class userDAO{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

    function loginAdmin($user,$pass){
        
        $pass = md5($pass);
        
        $sql = 'SELECT * from admin WHERE user = "'.  mysql_real_escape_string($user).'" AND
                                          pass = "'.  mysql_real_escape_string($pass).'"';

        $this->daoConnection->consulta($sql);
        $numregistros = $this->daoConnection->numregistros();
        
        if ($numregistros == 1){
            return $user;
        }
        
        return NULL;
    }

    function updateAdminPass($user,$pass){
        
        $pass = md5($pass);

        $querty =   "UPDATE
                    admin
                    SET
                    pass =
                    \"".mysql_real_escape_string($pass)."\"
                    WHERE user =
                    \"".mysql_real_escape_string($user)."\"
                    ";

        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (updateAdminPass): '.mysql_error().$querty;
            return false;
        }

        return true;
    }
    
}

?>
