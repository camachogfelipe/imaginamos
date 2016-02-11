<?php

$check_post = Post::Check(array("nick"));

if($check_post)
{
    $new_nick = new ChangeNick($_POST['nick']);
    $new_nick->ChangeIt();
}

?>