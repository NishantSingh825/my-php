<?php
//script to connect to the DB
$conn = mysqli_connect("localhost", "root", "", "idiscuss");

if(!$conn){
    echo "Connection failed";
}

?>