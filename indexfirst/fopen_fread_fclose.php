<?php

$fptr = fopen("myfile.txt", "r");
echo "<br>";

// echo var_dump($fptr);
if(!$fptr) {
        die("unable to open this file. plz enter the valid file name");
} 

$content = fread($fptr, filesize("myfile.txt"));
fclose($fptr);
echo $content;

?>