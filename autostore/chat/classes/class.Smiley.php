<?php
/*
 * List all of the smileys
 */
class Smiley
{
    
    public static function ListSmiley()
    {
        try{
            
            $sth = DB::prep("SELECT * FROM cms_messaging_smiley");
            $result = DB::getAll($sth, null, PDO::FETCH_OBJ);
            
            return $result;
            
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    } 
    
}

?>