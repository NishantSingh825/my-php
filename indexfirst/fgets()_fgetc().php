<?php

$fptr = fopen("myfile.txt", "r");
//--------------------------------------------------------
// fgets LINE by LINE read karta hai..
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo var_dump(fgets($fptr));//false
// while( $line = fgets( $fptr ) ) {
//     echo  $line ;
// }
 //echo "End of the the file";
//--------------------------------------------------------


//Read character by character...
// echo fgetc($fptr);

// while( $line = fgetc( $fptr ) ) {
//      echo  $line ;
//     //break;
//  }

while( $line = fgetc( $fptr ) ) {
     echo  $line ;
        if($line == "c"){
            break;// jabtak chalaga jab tak "c" na aa jata..
        }
 }

fclose($fptr);
?>