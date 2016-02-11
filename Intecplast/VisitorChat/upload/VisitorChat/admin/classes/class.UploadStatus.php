<?php

/**
 * Disables or enables client user to upload the file
 */
class UploadStatus
{
    private $options = array(0, 1);
    
    public function __construct($type, $user) {
        
        $type = (int)$type;
        
        if(in_array($type, $this->options))
        {
            $this->type = $type;
            $this->user = $user;
            $this->Update();
            
        }
    }
    
    private function Update()
    {
        try {
            
            $sth = DB::prep("UPDATE messaging_users SET upload = :type WHERE user_id = :id");
            $sth->bindParam(":type", $this->type, PDO::PARAM_INT);
            $sth->bindParam(":id", $this->user, PDO::PARAM_INT);
            
            $sth->execute();
            
            
        } catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}


?>
