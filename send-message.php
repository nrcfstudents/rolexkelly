<?php

$sender=$_POST["sender"];
$message=$_POST["message"];
$file=fopen("message.txt","a") ;
fwrite( $file,"name:$sender in message:$message");
fclose($file);