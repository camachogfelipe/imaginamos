<?php

$perms = new Permission();

//if(!$perms->IsAllowed('groups')) Exceptions::PrintOut ("You do not have access to the Users and groups");

function bytesConvert($bytes)
{
    $ext = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $unitCount = 0;
    for(; $bytes > 1024; $unitCount++) $bytes /= 1024;
    return round($bytes,2) ." ". $ext[$unitCount];
}

$dir = "../uploads";
$files = scandir($dir);

array_shift($files);
array_shift($files);

include 'views/template/files.html';

?>