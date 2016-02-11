<?php

$check = Post::GCheck(array("user"));

if($check)
{
    $time = Messaging::GetNewMsg($_GET['user']);
    echo $time->c;    
}
 
?>