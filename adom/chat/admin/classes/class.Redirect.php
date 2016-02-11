<?php

class Redirect
{
    public static function Go($uri)
    {
        header("Location: ".$uri);
        die();
    }
}

?>
