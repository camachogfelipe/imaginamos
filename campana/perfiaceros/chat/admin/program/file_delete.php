<?php

$check = Post::GCheck(array("file"));

if($check)
{
    if(@unlink("../uploads/".$_GET['file']))
    {
        header("Location: index.php?page=files");
    } else {
        header('Refresh: 5; url=index.php?page=files');
        echo "File delete failed. You will be redirected back in 5 seconds. Please wait.";
    }
}


?>
