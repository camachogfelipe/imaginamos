<?php
/* 
 * checks if all fields are set
 */
class Post
{
    public static function Check($arr)
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
    public static function GCheck($arr)
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
}
?>
