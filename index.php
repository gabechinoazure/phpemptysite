<?php

header('Content-type: image/jpeg');
readfile('image.jpg');
$filename = "logged.txt";
   $somecontent = "Connection from:".$_SERVER['REMOTE_ADDR']." at ".date("r",time())."\n";
   if ($handle = fopen($filename, 'a')) {
	   fwrite($handle, $somecontent)
	   fclose($handle);
   }



?>