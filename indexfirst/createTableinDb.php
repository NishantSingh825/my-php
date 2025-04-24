<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

//connection..

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    //die if connection was not succes!
    die("sorry we are not connect:" . mysqli_connect_error());
} else {
    echo "connected";
}

// create table...

$sql = "CREATE TABLE table (
        name int Auto_Increment PRIMARY KEY,
        city  varchar(11),
        country varchar(20))";


// $sql = "CREATE TABLE data2(
//          id int Auto_Increment  primary key,
//           name varchar(30))";
	if($mysqli_query($conn, $sql)===true){
		echo "Table is created successfully";
	}
	else{
		die("Data is not given to server due to ". $conn->connect_error);
	}
?>