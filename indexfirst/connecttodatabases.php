<?php
echo "welcome to stay where we are ready to get connection to databaseces";
/*
way to connectto mysql DATABASES 
1.Mysqli extension
2.PDO 
*/
//Connection to Databases..
$servername = "localhost"; //your server name may be localhost or your ip address
$username = "root";   //your username of the database
$password = "";
 
 //create a connection
 $conn = mysqli_connect($servername, $username, $password);
   //Die if connection was not succesfull
    if(!$conn){
        die("sorry we fail to connect". mysqli_connect_error());
    }else{
         echo "<br>succesfully";
    }

 ?>