<?php

$servername = "localhost";
$username = "root";
$password = "";

//connection..

$conn = mysqli_connect($servername, $username, $password);
if(!$conn){ 
    //die if connection was not succes!
   die("sorry we are not connect:" .mysqli_connect_error());
}else{
    echo "connected";
}

// create Databases...

$sql = "CREATE DATABASE mydb";
$result = mysqli_query($conn, $sql);

//$conn->query($sql);

if($result){
    echo "Databases was created";

}else{
    echo "db not created".mysqli_error($conn);
}


?>