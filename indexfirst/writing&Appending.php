<?php
echo "welcome to write file PHP ";

// $fptr = fopen("newfile.txt", "w");
// fwrite($fptr, "THis  is 1 writen words\n");
// fwrite($fptr, "THis  is 2 writen words\n");
// fwrite($fptr, "THis  is 3 writen words\n");
// file ke contant ko over write kar deta hai..
//fclose($fptr);

$fptr = fopen("newfile.txt", "a"); 
//Appending -> end me jod dega.. over write nahi karaga..
fwrite($fptr, "THis  is Append  writen words\n");
// purana content remove nahi hoga..


fclose($fptr); // Appending me na bhilagao to koi bat nahi..
?>