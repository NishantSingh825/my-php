<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydb = "MynewDb";

//connection...
$conn = mysqli_connect($servername, $username, $password, $mydb);
if($conn){
 echo "connection succesfully!";

}else{
    Die("not connection");
}

//create databases..

// $sql = "CREATE DATABASE MYnewDb";
// //$conn->query($sql)
// $result = mysqli_query($conn, $sql);
// if($result){
//     echo "connection succesfully!";
// }else{
//     Die("not created!". mysqli_error($conn));
// }

//create table...
$sql = "CREATE TABLE `mytable3`(`email` VARCHAR(20), `password` VARCHAR(20) )";
if(mysqli_query($conn, $sql)){
    //or-- $conn->query($sql);
    echo "Table is created successfully";
}
else{
    die("Data is not given to server due to ". $conn->connect_error);
}
?>

