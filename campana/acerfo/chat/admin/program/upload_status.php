<?php

$post = Post::Check(array("user","status"));

if($post)
{
    $status = new UploadStatus($_POST['status'], $_POST['user']);

}

?>